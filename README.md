# Luntian AI — deployment guide

Stack: **PHP** + **Firebase Auth** (Google/Facebook) + **Gemini API** + **PostgreSQL (Aiven)** + **manual GCash** payments.

All paid third-party APIs are optional except free tiers: Firebase Spark, Gemini free quota, Aiven trial/free, Vercel Hobby, GitHub free.

---

## 1. Local setup (XAMPP)

### Requirements
- PHP 8.1+ with extensions: `pdo_pgsql`, `curl`, `json`, `mbstring`, `fileinfo`
- Composer
- PostgreSQL (Aiven connection string works from local)

### Steps

```bash
cd c:\xampp\htdocs\luntianAi
composer install
copy .env.example .env
```

Edit `.env` (see section 3). **Never commit `.env` or API keys to GitHub.**

### Database

In [Aiven Console](https://console.aiven.io/), create a free PostgreSQL service. Copy the connection URI into `DATABASE_URL`.

Run schema:

```bash
# If you have psql installed:
psql "YOUR_DATABASE_URL" -f database/schema.sql
```

Or paste `database/schema.sql` into Aiven’s web SQL console.

### Apache

Enable `pdo_pgsql` in `php.ini`, restart Apache.

Open: `http://localhost/luntianAi/api/health.php` — `database` should be `true`.

---

## 2. Firebase (Google + Facebook login)

### Firebase Console (`luntian-ai-pro`)
1. **Authentication → Sign-in method**: enable Email/Password, Google, Facebook.
2. **Project settings → Your apps → Web**: copy config into `.env` (`FIREBASE_*` keys).
3. Server verifies tokens via Firebase Identity Toolkit (uses `FIREBASE_API_KEY` only — no service account required for this setup).

### Facebook (Meta Developer)
1. [developers.facebook.com](https://developers.facebook.com/) → your app → **Facebook Login → Settings**.
2. Valid OAuth redirect URIs:
   - `https://luntian-ai-pro.firebaseapp.com/__/auth/handler`
   - `http://localhost` (for local testing)
3. Copy **App ID** → `FIREBASE_FACEBOOK_APP_ID` in `.env`.
4. In Firebase → Facebook provider, paste App ID and **App Secret**.

### Authorized domains (Firebase → Authentication → Settings)
Add:
- `localhost`
- Your Vercel domain (e.g. `luntian-ai.vercel.app`)

---

## 3. Environment variables (`.env`)

| Variable | Purpose |
|----------|---------|
| `APP_URL` | Full site URL, no trailing slash |
| `DATABASE_URL` | Aiven PostgreSQL URI (`?sslmode=require`) |
| `GEMINI_API_KEY` | [Google AI Studio](https://aistudio.google.com/apikey) — free tier |
| `FIREBASE_*` | Web app config from Firebase |
| `FIREBASE_FACEBOOK_APP_ID` | Meta app ID (optional, for reference) |
| `GCASH_*` | Display name, mobile, PHP prices |
| `ADMIN_SECRET` | You approve payments at `/admin/payments.php` |

**Security:** Rotate any API key that was shared in chat or committed by mistake.

---

## 4. GCash (manual — no API)

1. Save your QR as: `public/assets/images/gcash-qr.png`
2. Set `GCASH_ACCOUNT_NAME`, `GCASH_MOBILE`, prices in `.env`
3. User flow: **Subscription → Pay with GCash → pay → upload proof**
4. You approve: `https://yoursite.com/admin/payments.php` with `ADMIN_SECRET`

---

## 5. GitHub

```bash
git init
git add .
git commit -m "Add Firebase, Gemini, PostgreSQL, and GCash payment backend"
git branch -M main
git remote add origin https://github.com/YOUR_USER/luntian-ai.git
git push -u origin main
```

Ensure `.env` is **not** tracked (see `.gitignore`).

---

## 6. Vercel

PHP on Vercel uses the community `vercel-php` builder (`vercel.json` included).

1. Import GitHub repo at [vercel.com](https://vercel.com)
2. **Settings → Environment Variables**: add every key from `.env.example`
3. Deploy

**Note:** Vercel’s PHP runtime has limits (cold starts, no persistent local disk). Payment proof uploads should use object storage in production; for MVP, proofs are stored under `public/uploads/` (works on XAMPP; on Vercel use [Vercel Blob](https://vercel.com/docs/storage/vercel-blob) later or deploy PHP on [Render](https://render.com) free tier for full filesystem support.

**Alternative (recommended if Vercel PHP is painful):** Deploy the same repo on **Render** “Web Service” with Docker/PHP — free tier supports uploads and long requests.

Set `APP_URL` to your production URL after first deploy.

---

## 7. Aiven PostgreSQL

1. Create service (free trial / smallest plan)
2. Connection string → `DATABASE_URL`
3. Run `database/schema.sql`
4. Allow connections from Vercel (Aiven allows `0.0.0.0/0` for dev; restrict in production)

---

## 8. API endpoints

| Endpoint | Method | Auth |
|----------|--------|------|
| `/api/health.php` | GET | No |
| `/api/auth/config.php` | GET | No |
| `/api/auth/session.php` | POST `{idToken}` | No |
| `/api/auth/me.php` | GET | Bearer Firebase token |
| `/api/chat.php` | POST `{message, sessionId?}` | Bearer |
| `/api/payments/create.php` | POST `{billingCycle}` | Bearer |
| `/api/payments/submit.php` | POST multipart | Bearer |
| `/api/admin/payments.php` | GET/POST | `X-Admin-Secret` header |

---

## 9. Costs (free-first)

| Service | Cost |
|---------|------|
| Firebase Auth | Spark plan — $0 |
| Gemini API | Free quota with limits |
| Aiven | Trial / small free credits |
| Vercel | Hobby — $0 |
| GCash | Manual — $0 API fees |

No Stripe, no GCash merchant API required.

---

## 10. Troubleshooting

- **401 on chat:** Sign in again; token expires — sign out and sign in.
- **Firebase popup blocked:** Allow popups for your domain.
- **Database false on health:** Check `pdo_pgsql`, `DATABASE_URL`, SSL mode.
- **Gemini 403:** Enable Generative Language API in Google Cloud linked to your key.
- **Facebook login fails:** Check OAuth redirect URIs and Firebase Facebook App Secret.

---

© 2026 Luntian AI
