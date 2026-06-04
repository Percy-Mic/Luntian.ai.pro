/**
 * Luntian AI — shared API + Firebase auth helpers
 */
(function (global) {
  const TOKEN_KEY = 'luntian_id_token';
  const USER_KEY = 'luntian_user';

  function apiBase() {
    const meta = document.querySelector('meta[name="luntian-api-base"]');
    if (meta && meta.content) {
      let base = meta.content.replace(/\/$/, '');
      // Ensure base doesn't end with .php filename
      if (base.endsWith('.php')) {
        base = base.replace(/\/[^/]+\.php$/, '');
      }
      return base;
    }
    // For Vercel, just use origin
    return window.location.origin;
  }

  function getToken() {
    return localStorage.getItem(TOKEN_KEY);
  }

  function setToken(token) {
    if (token) localStorage.setItem(TOKEN_KEY, token);
    else localStorage.removeItem(TOKEN_KEY);
  }

  function getUser() {
    try {
      return JSON.parse(localStorage.getItem(USER_KEY) || 'null');
    } catch {
      return null;
    }
  }

  function setUser(user) {
    if (user) localStorage.setItem(USER_KEY, JSON.stringify(user));
    else localStorage.removeItem(USER_KEY);
  }

  async function api(path, options = {}) {
    const headers = Object.assign({ 'Content-Type': 'application/json' }, options.headers || {});
    const token = getToken();
    if (token) headers.Authorization = 'Bearer ' + token;

    const res = await fetch(apiBase() + path, Object.assign({}, options, { headers }));
    const data = await res.json().catch(() => ({}));
    if (!res.ok) {
      const err = new Error(data.error || res.statusText || 'Request failed');
      err.status = res.status;
      err.data = data;
      throw err;
    }
    return data;
  }

  let firebaseApp = null;
  let firebaseAuth = null;
  let configPromise = null;

  async function loadFirebaseConfig() {
    if (!configPromise) {
      configPromise = api('/api/auth/config.php');
    }
    return configPromise;
  }

  async function initFirebase() {
    const { firebase: cfg } = await loadFirebaseConfig();
    if (!cfg.apiKey) {
      throw new Error('Firebase is not configured on the server (.env)');
    }
    const { initializeApp } = await import('https://www.gstatic.com/firebasejs/10.14.1/firebase-app.js');
    const authMod = await import('https://www.gstatic.com/firebasejs/10.14.1/firebase-auth.js');
    firebaseApp = initializeApp(cfg);
    firebaseAuth = authMod.getAuth(firebaseApp);
    return { auth: firebaseAuth, authMod };
  }

  async function syncSession(user) {
    const token = await user.getIdToken();
    setToken(token);
    const data = await api('/api/auth/session.php', {
      method: 'POST',
      body: JSON.stringify({ idToken: token }),
    });
    setUser(data.user);
    return data.user;
  }

  async function signInWithGoogle() {
    const { auth, authMod } = await initFirebase();
    const provider = new authMod.GoogleAuthProvider();
    const result = await authMod.signInWithPopup(auth, provider);
    return syncSession(result.user);
  }

  async function signInWithFacebook() {
    const { auth, authMod } = await initFirebase();
    const provider = new authMod.FacebookAuthProvider();
    const result = await authMod.signInWithPopup(auth, provider);
    return syncSession(result.user);
  }

  async function signInWithEmail(email, password) {
    const { auth, authMod } = await initFirebase();
    const result = await authMod.signInWithEmailAndPassword(auth, email, password);
    return syncSession(result.user);
  }

  async function signUpWithEmail(email, password, displayName) {
    const { auth, authMod } = await initFirebase();
    const result = await authMod.createUserWithEmailAndPassword(auth, email, password);
    if (displayName) {
      await authMod.updateProfile(result.user, { displayName });
    }
    return syncSession(result.user);
  }

  async function signOut() {
    try {
      const { auth, authMod } = await initFirebase();
      await authMod.signOut(auth);
    } catch (_) { /* not initialized */ }
    setToken(null);
    setUser(null);
  }

  async function requireAuth(redirectUrl) {
    const token = getToken();
    if (!token) {
      window.location.href = redirectUrl || 'signinPage.php';
      return null;
    }
    try {
      const data = await api('/api/auth/me.php');
      setUser(data.user);
      return data.user;
    } catch (e) {
      setToken(null);
      setUser(null);
      window.location.href = redirectUrl || 'signinPage.php';
      return null;
    }
  }

  async function refreshToken() {
    const { auth } = await initFirebase();
    const user = auth.currentUser;
    if (!user) return null;
    const token = await user.getIdToken(true);
    setToken(token);
    return token;
  }

  global.LuntianAPI = {
    apiBase,
    api,
    getToken,
    setToken,
    getUser,
    setUser,
    initFirebase,
    signInWithGoogle,
    signInWithFacebook,
    signInWithEmail,
    signUpWithEmail,
    signOut,
    requireAuth,
    refreshToken,
    loadFirebaseConfig,
  };
})(window);
