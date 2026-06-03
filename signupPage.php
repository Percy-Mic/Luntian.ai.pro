<!DOCTYPE html><html class="light" lang="en"><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta name="luntian-api-base" content="">
<title>Luntian AI - Sign up</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "tertiary-fixed": "#ffd6fb",
                        "on-tertiary-fixed-variant": "#751e7e",
                        "on-tertiary-fixed": "#36003d",
                        "moss-deep": "#2D3E1A",
                        "surface-variant": "#e5e1e7",
                        "on-surface": "#1c1b1f",
                        "inverse-surface": "#313034",
                        "sage-mist": "#8DA47E",
                        "surface-container-high": "#ebe7ec",
                        "surface-container": "#f1ecf2",
                        "on-background": "#1c1b1f",
                        "primary-fixed": "#e6deff",
                        "outline": "#797586",
                        "tertiary": "#822b8a",
                        "on-primary-container": "#eee7ff",
                        "inverse-primary": "#cabeff",
                        "surface-container-lowest": "#ffffff",
                        "on-primary-fixed": "#1b0062",
                        "error-container": "#ffdad6",
                        "inverse-on-surface": "#f4eff5",
                        "secondary-fixed-dim": "#47d6ff",
                        "on-error-container": "#93000a",
                        "on-error": "#ffffff",
                        "secondary": "#00677f",
                        "secondary-fixed": "#b6ebff",
                        "surface-bright": "#fdf8fd",
                        "on-surface-variant": "#484555",
                        "on-secondary": "#ffffff",
                        "surface-container-highest": "#e5e1e7",
                        "surface": "#fdf8fd",
                        "error": "#ba1a1a",
                        "background": "#fdf8fd",
                        "primary-fixed-dim": "#cabeff",
                        "brand-gradient": "linear-gradient(135deg, #00D2FF 0%, #6B4EE6 100%)",
                        "tertiary-container": "#9e45a4",
                        "on-secondary-fixed": "#001f28",
                        "on-tertiary-container": "#ffe2fa",
                        "on-tertiary": "#ffffff",
                        "primary-container": "#6b4ee6",
                        "on-secondary-fixed-variant": "#004e60",
                        "surface-container-low": "#f7f2f8",
                        "tertiary-fixed-dim": "#ffa9ff",
                        "primary": "#5230cd",
                        "surface-glass": "rgba(253, 253, 255, 0.8)",
                        "outline-variant": "#c9c4d7",
                        "surface-dim": "#ddd9de",
                        "surface-tint": "#5f41da",
                        "secondary-container": "#00d2ff",
                        "on-secondary-container": "#00566a",
                        "on-primary": "#ffffff",
                        "background-cool": "#F8F9FE",
                        "on-primary-fixed-variant": "#4720c2",
                        "wet-stone": "#E1E5DC"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "sidebar-width": "320px",
                        "base": "8px",
                        "lg": "40px",
                        "max-content-width": "896px",
                        "xl": "64px",
                        "sm": "12px",
                        "md": "24px",
                        "xs": "4px"
                    },
                    "fontFamily": {
                        "label-sm": ["Inter"],
                        "headline-xl": ["Inter"],
                        "body-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "headline-lg": ["Inter"],
                        "caption-italic": ["Inter"],
                        "label-md": ["Inter"],
                        "headline-md": ["Inter"]
                    },
                    "fontSize": {
                        "label-sm": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                        "headline-xl": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                        "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                        "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                        "caption-italic": ["10px", {"lineHeight": "12px", "fontWeight": "400"}],
                        "label-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "500"}],
                        "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}]
                    }
                },
            },
        }
    </script>
<style>
        .brand-gradient-bg {
            background: linear-gradient(135deg, #00D2FF 0%, #6B4EE6 100%);
        }
        .glass-effect {
            backdrop-filter: blur(16px);
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .dark .glass-effect {
            background: rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: #F8F9FE;
        }
        .dark body {
            background-color: #0b0a0c;
        }
        .floating-label-input:focus-within label,
        .floating-label-input input:not(:placeholder-shown) + label {
            transform: translateY(-20px) scale(0.85);
            color: #5230cd;
        }
        .dark .floating-label-input:focus-within label {
            color: #cabeff;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-md md:p-lg lg:p-xl transition-colors duration-300" style="padding-bottom: 100px;">
<!-- Atmospheric Background -->
<div class="fixed inset-0 -z-10 overflow-hidden pointer-events-none">
<div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-primary/10 blur-[120px]"></div>
<div class="absolute bottom-[-10%] right-[-10%] w-[50%] h-[50%] rounded-full bg-secondary-container/10 blur-[120px]"></div>
</div>
<!-- Multi-Column Container -->
<main class="w-full max-w-[1280px] min-h-[800px] grid grid-cols-1 lg:grid-cols-12 bg-surface-container-lowest dark:bg-inverse-surface/10 rounded-[32px] overflow-hidden shadow-[0_32px_64px_-16px_rgba(107,78,230,0.15)] border border-outline-variant/10">
<!-- Left Column: Branding & Features (Desktop Only) -->
<section class="hidden lg:flex lg:col-span-7 relative p-xl flex-col justify-between overflow-hidden bg-on-surface">
<!-- Content Overlay -->
<div class="relative z-10">
<div class="flex items-center gap-base mb-lg">
<div class="w-12 h-12 rounded-xl overflow-hidden shadow-lg">
<div class="w-10 h-10 rounded-xl bg-brand-gradient flex items-center justify-center text-white shadow-lg shadow-primary/20 shrink-0">
<span class="material-symbols-outlined">navigation</span>
</div>
</div>
<h1 class="text-white font-headline-md text-headline-md tracking-tight">Luntian AI</h1>
</div>
<div class="space-y-md max-w-lg mb-xl">
<h2 class="text-white font-headline-xl text-headline-xl leading-tight">Simplify your workflow with Luntian AI.</h2>
<p class="text-outline-variant/80 font-body-lg text-body-lg">Tools built for creative professionals.</p>
</div>
<!-- Feature Grid -->
<div class="grid grid-cols-2 gap-md">
<div class="glass-effect p-md rounded-2xl group hover:bg-white/10 transition-all duration-300">
<span class="material-symbols-outlined text-secondary-container mb-base text-3xl" data-icon="movie_filter">movie_filter</span>
<h3 class="text-white font-label-md text-label-md mb-xs">4K Video Studio</h3>
<p class="text-outline-variant/70 text-label-sm font-label-sm">Generate cinematic quality video from simple natural language prompts.</p>
</div>
<div class="glass-effect p-md rounded-2xl group hover:bg-white/10 transition-all duration-300">
<span class="material-symbols-outlined text-secondary-container mb-base text-3xl" data-icon="screenshot_monitor">screenshot_monitor</span>
<h3 class="text-white font-label-md text-label-md mb-xs">Real-time Analysis</h3>
<p class="text-outline-variant/70 text-label-sm font-label-sm">Context-aware screen intelligence that understands your creative intent.</p>
</div>
<div class="glass-effect p-md rounded-2xl group hover:bg-white/10 transition-all duration-300">
<span class="material-symbols-outlined text-secondary-container mb-base text-3xl" data-icon="psychology">psychology</span>
<h3 class="text-white font-label-md text-label-md mb-xs">Neural Sync</h3>
<p class="text-outline-variant/70 text-label-sm font-label-sm">Advanced LLM integration that adapts to your unique professional terminology.</p>
</div>
<div class="glass-effect p-md rounded-2xl group hover:bg-white/10 transition-all duration-300">
<span class="material-symbols-outlined text-secondary-container mb-base text-3xl" data-icon="inventory_2">inventory_2</span>
<h3 class="text-white font-label-md text-label-md mb-xs">File Vault</h3>
<p class="text-outline-variant/70 text-label-sm font-label-sm">Secure, AI-indexed storage for all your high-fidelity creative assets.</p>
</div>
</div>
</div>
<!-- Background Image with Blend -->
<div class="absolute inset-0 opacity-40 mix-blend-overlay">
<img alt="Abstract organic flow" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAO8zEidF93dWWca7KW6VIbEGYTyuQpjRHbx6UtWB6uY5YrS1qrtz9RJexLXsOqHNpQcYB3N8jfYr8kRpN0QFmhTUXgNPCHbQYUHwqq7pAQ3dtAoHPbOPYsvAbMZcLjfurfkg9y5UU1koyI-di882RwZ3Vtx0nv_htf8_Hr2FHpPAXivxo338_-eM4glX4HTKZiE30lv8lSFaOu3trijXzGyQOih0ZaF0zuhC-DUvZ6BjUDcKlJqTJkYhvEOBEP2uRsZdpqfVjJlYJr">
</div>
</section>
<!-- Right Column: Sign Up Form -->
<section class="col-span-1 lg:col-span-5 flex flex-col justify-center p-md md:p-xl bg-surface dark:bg-[#1a1a1c]">
<div class="w-full max-w-md mx-auto">
<!-- Mobile Header -->
<div class="lg:hidden flex items-center gap-base mb-lg">
<div class="w-10 h-10 rounded-xl overflow-hidden shadow-md">
<div class="w-10 h-10 rounded-xl bg-brand-gradient flex items-center justify-center shadow-lg shadow-primary/20 shrink-0">
<span class="material-symbols-outlined">navigation</span>
</div>
</div>
<span class="font-headline-md text-headline-md text-primary dark:text-primary-fixed-dim font-bold">Luntian AI</span>
</div>
<div class="mb-lg">
<h2 class="font-headline-lg text-headline-lg text-on-surface dark:text-white mb-xs">Create Account</h2>
<p class="font-body-md text-body-md text-on-surface-variant dark:text-outline-variant">Experience a high level performance of Luntian AI.</p>
</div>
<!-- Social Authentication -->
<div class="grid grid-cols-1 sm:grid-cols-2 gap-base mb-lg">
<button type="button" id="btn-google" class="flex items-center justify-center gap-base px-md py-sm border border-outline-variant/30 dark:border-outline/30 rounded-xl font-label-md text-label-md text-on-surface dark:text-white hover:bg-surface-container dark:hover:bg-white/5 transition-all active:scale-95">
<img alt="Google" class="w-5 h-5" src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg">
<span class="">Google</span>
</button>
<button type="button" id="btn-facebook" class="flex items-center justify-center gap-base px-md py-sm border border-outline-variant/30 dark:border-outline/30 rounded-xl font-label-md text-label-md text-on-surface dark:text-white hover:bg-surface-container dark:hover:bg-white/5 transition-all active:scale-95">
<svg class="w-5 h-5 text-[#1877F2]" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path></svg>
<span class="">Facebook</span>
</button>
</div>
<!-- Divider -->
<div class="relative flex items-center mb-lg">
<div class="flex-grow border-t border-outline-variant/30 dark:border-outline/20"></div>
<span class="flex-shrink mx-md text-label-sm font-label-sm text-outline dark:text-outline-variant uppercase tracking-widest">or email</span>
<div class="flex-grow border-t border-outline-variant/30 dark:border-outline/20"></div>
</div>
<!-- Registration Form -->
<form class="space-y-md" id="signup-form">
<div class="relative floating-label-input">
<input class="w-full px-md py-sm pt-base bg-surface-container-low dark:bg-white/5 border border-outline-variant/50 dark:border-outline/20 rounded-xl font-body-md text-body-md text-on-surface dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all peer" id="full_name" placeholder=" " type="text">
<label class="absolute left-md top-1/2 -translate-y-1/2 text-on-surface-variant dark:text-outline-variant pointer-events-none transition-all duration-200 peer-focus:top-4 peer-focus:text-xs peer-[:not(:placeholder-shown)]:top-4 peer-[:not(:placeholder-shown)]:text-xs" for="full_name">
                            Full Name
                        </label>
</div>
<div class="relative floating-label-input">
<input class="w-full px-md py-sm pt-base bg-surface-container-low dark:bg-white/5 border border-outline-variant/50 dark:border-outline/20 rounded-xl font-body-md text-body-md text-on-surface dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all peer" id="email" placeholder=" " type="email">
<label class="absolute left-md top-1/2 -translate-y-1/2 text-on-surface-variant dark:text-outline-variant pointer-events-none transition-all duration-200 peer-focus:top-4 peer-focus:text-xs peer-[:not(:placeholder-shown)]:top-4 peer-[:not(:placeholder-shown)]:text-xs" for="email">
                            Work Email
                        </label>
</div>
<div class="relative floating-label-input">
<input class="w-full px-md py-sm pt-base bg-surface-container-low dark:bg-white/5 border border-outline-variant/50 dark:border-outline/20 rounded-xl font-body-md text-body-md text-on-surface dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all peer" id="password" placeholder=" " type="password">
<label class="absolute left-md top-1/2 -translate-y-1/2 text-on-surface-variant dark:text-outline-variant pointer-events-none transition-all duration-200 peer-focus:top-4 peer-focus:text-xs peer-[:not(:placeholder-shown)]:top-4 peer-[:not(:placeholder-shown)]:text-xs" for="password">
                            Password
                        </label>
<button class="absolute right-md top-1/2 -translate-y-1/2 text-outline-variant hover:text-primary transition-colors" type="button">
<span class="material-symbols-outlined text-[20px]" data-icon="visibility">visibility</span>
</button>
</div>
<!-- Terms & Conditions -->
<div class="flex items-start gap-base px-xs">
<input class="mt-1 w-4 h-4 rounded border-outline-variant/50 text-primary focus:ring-primary/20 dark:bg-white/10" id="terms" type="checkbox">
<label class="font-label-sm text-label-sm text-on-surface-variant dark:text-outline-variant leading-tight" for="terms">
                            I agree to the <a class="text-primary dark:text-primary-fixed-dim hover:underline" href="termsofservicePage.php">Terms of Service</a> and <a class="text-primary dark:text-primary-fixed-dim hover:underline" href="privacypolicyPage.php">Privacy Policy</a>.
                        </label>
</div>
<!-- CTA Button -->
<button class="w-full py-sm rounded-xl brand-gradient-bg text-white font-label-md text-label-md font-bold shadow-lg shadow-primary/20 hover:brightness-110 active:scale-[0.98] transition-all flex items-center justify-center gap-base">
                        Create an Account
                        <span class="material-symbols-outlined text-[20px]" data-icon="arrow_forward">arrow_forward</span>
</button>
</form>
<!-- Footer Links -->
<div class="mt-xl text-center">
<p class="font-body-md text-body-md text-on-surface-variant dark:text-outline-variant">
                        Already have an account? 
                        <a class="text-primary dark:text-primary-fixed-dim font-bold hover:underline" href="signinPage.php">Sign In</a>
</p>
</div>
</div>
</section>
</main>
<!-- Footer Meta -->
<footer class="fixed bottom-4 left-0 w-full pointer-events-none z-50">
<div class="max-w-[1280px] mx-auto px-md flex flex-col sm:flex-row justify-between items-center gap-sm">
<!-- Theme Toggle Tool (Implicit Utility) -->
<button class="pointer-events-auto bg-surface-glass dark:bg-black/30 backdrop-blur-md border border-outline-variant/10 p-base rounded-full shadow-sm text-on-surface dark:text-white hover:scale-110 transition-transform" onclick="document.documentElement.classList.toggle('dark')">
<span class="material-symbols-outlined block dark:hidden">dark_mode</span>
<span class="material-symbols-outlined hidden dark:block">light_mode</span>
</button>
<span class="bg-surface-glass dark:bg-black/30 backdrop-blur-md border border-outline-variant/10 px-md py-xs rounded-full font-label-sm text-label-sm text-on-surface-variant dark:text-outline-variant shadow-sm pointer-events-auto">
                © 2026 Luntian AI. Precision Intelligence.
            </span>
</div>
</footer>
<script src="assets/js/luntian-api.js"></script>
<script>
        // Subtle Parallax effect
        document.addEventListener('mousemove', (e) => {
            const x = (e.clientX / window.innerWidth) - 0.5;
            const y = (e.clientY / window.innerHeight) - 0.5;
            const bgImage = document.querySelector('section.hidden img');
            if (bgImage) {
                bgImage.style.transform = `translate(${x * 20}px, ${y * 20}px) scale(1.1)`;
            }
        });

        document.querySelector('meta[name="luntian-api-base"]').content =
            window.location.origin + window.location.pathname.replace(/\/[^/]*$/, '');

        const submitBtn = document.querySelector('button.brand-gradient-bg');
        const signupForm = document.getElementById('signup-form');

        async function goIndex() {
            window.location.href = 'index.php';
        }

        document.getElementById('btn-google')?.addEventListener('click', async () => {
            try { await LuntianAPI.signInWithGoogle(); await goIndex(); }
            catch (e) { alert(e.message); }
        });
        document.getElementById('btn-facebook')?.addEventListener('click', async () => {
            try { await LuntianAPI.signInWithFacebook(); await goIndex(); }
            catch (e) { alert(e.message); }
        });

        if (submitBtn && signupForm) {
            submitBtn.addEventListener('click', async (e) => {
                e.preventDefault();
                if (!document.getElementById('terms').checked) {
                    alert('Please accept the Terms of Service.');
                    return;
                }
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span class="material-symbols-outlined animate-spin">progress_activity</span> Processing...';
                try {
                    await LuntianAPI.signUpWithEmail(
                        document.getElementById('email').value.trim(),
                        document.getElementById('password').value,
                        document.getElementById('full_name').value.trim()
                    );
                    await goIndex();
                } catch (err) {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = 'Create an Account <span class="material-symbols-outlined text-[20px]">arrow_forward</span>';
                    alert(err.message || 'Sign up failed');
                }
            });
        }
    </script>
</body></html>
