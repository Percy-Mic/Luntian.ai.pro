<!DOCTYPE html>

<html class="" lang="en">
<head>
<title>Luntian AI - Sign in</title>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta name="luntian-api-base" content=""/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "inverse-surface": "#313034",
                    "surface-tint": "#5f41da",
                    "surface": "#fdf8fd",
                    "primary-container": "#6b4ee6",
                    "outline-variant": "#c9c4d7",
                    "primary-fixed-dim": "#cabeff",
                    "tertiary-container": "#9e45a4",
                    "tertiary": "#822b8a",
                    "secondary-container": "#00d2ff",
                    "on-background": "#1c1b1f",
                    "tertiary-fixed-dim": "#ffa9ff",
                    "surface-container-high": "#ebe7ec",
                    "on-secondary-container": "#00566a",
                    "primary": "#5230cd",
                    "on-primary": "#ffffff",
                    "inverse-primary": "#cabeff",
                    "background-cool": "#F8F9FE",
                    "surface-bright": "#fdf8fd",
                    "on-primary-container": "#eee7ff",
                    "on-primary-fixed-variant": "#4720c2",
                    "surface-container-low": "#f7f2f8",
                    "inverse-on-surface": "#f4eff5",
                    "surface-container-lowest": "#ffffff",
                    "surface-container-highest": "#e5e1e7",
                    "brand-gradient": "linear-gradient(135deg, #00D2FF 0%, #6B4EE6 100%)",
                    "on-tertiary-container": "#ffe2fa",
                    "on-error-container": "#93000a",
                    "tertiary-fixed": "#ffd6fb",
                    "on-tertiary-fixed-variant": "#751e7e",
                    "surface-variant": "#e5e1e7",
                    "surface-glass": "rgba(253, 253, 255, 0.8)",
                    "on-secondary-fixed": "#001f28",
                    "secondary": "#00677f",
                    "secondary-fixed": "#b6ebff",
                    "wet-stone": "#E1E5DC",
                    "surface-container": "#f1ecf2",
                    "on-secondary-fixed-variant": "#004e60",
                    "moss-deep": "#2D3E1A",
                    "on-error": "#ffffff",
                    "sage-mist": "#8DA47E",
                    "on-surface-variant": "#484555",
                    "secondary-fixed-dim": "#47d6ff",
                    "surface-dim": "#ddd9de",
                    "outline": "#797586",
                    "error-container": "#ffdad6",
                    "background": "#fdf8fd",
                    "on-secondary": "#ffffff",
                    "on-tertiary-fixed": "#36003d",
                    "error": "#ba1a1a",
                    "on-primary-fixed": "#1b0062",
                    "on-tertiary": "#ffffff",
                    "on-surface": "#1c1b1f",
                    "primary-fixed": "#e6deff"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "xs": "4px",
                    "base": "8px",
                    "md": "24px",
                    "xl": "64px",
                    "sm": "12px",
                    "max-content-width": "896px",
                    "lg": "40px",
                    "sidebar-width": "320px",
                    "margin-mobile": "16px"
            },
            "fontFamily": {
                    "body-lg": ["Inter"],
                    "label-md": ["Inter"],
                    "headline-xl": ["Inter"],
                    "headline-md": ["Inter"],
                    "headline-lg": ["Inter"],
                    "body-md": ["Inter"],
                    "caption-italic": ["Inter"],
                    "label-sm": ["Inter"]
            },
            "fontSize": {
                    "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                    "label-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "500"}],
                    "headline-xl": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                    "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                    "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                    "caption-italic": ["10px", {"lineHeight": "12px", "fontWeight": "400"}],
                    "label-sm": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}]
            }
          },
        },
      }
    </script>
<style>
        body {
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
            transition: background-color 0.3s ease;
        }
        .pro-glow {
            box-shadow: 0 0 50px -12px rgba(82, 48, 205, 0.15);
        }
        .dark .pro-glow {
            box-shadow: 0 0 50px -12px rgba(82, 48, 205, 0.4);
        }
        .glass-panel {
            backdrop-filter: blur(16px);
            background: rgba(255, 255, 255, 0.7);
            border: 1px solid rgba(0, 0, 0, 0.05);
        }
        .dark .glass-panel {
            background: rgba(23, 23, 27, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .pro-grid-pattern {
            background-image: linear-gradient(rgba(0, 0, 0, 0.03) 1px, transparent 1px),
                              linear-gradient(90deg, rgba(0, 0, 0, 0.03) 1px, transparent 1px);
            background-size: 40px 40px;
        }
        .dark .pro-grid-pattern {
            background-image: linear-gradient(rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                              linear-gradient(90deg, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
        }
        .btn-pro-gradient {
            background: linear-gradient(135deg, #00d2ff 0%, #5230cd 100%);
        }
        .theme-toggle-btn {
            position: fixed;
            top: 24px;
            right: 24px;
            z-index: 50;
        }
        @keyframes bounce-slow {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        .animate-bounce-slow {
            animation: bounce-slow 4s ease-in-out infinite;
        }
        input:-webkit-autofill,
        input:-webkit-autofill:hover, 
        input:-webkit-autofill:focus {
            -webkit-box-shadow: 0 0 0px 1000px #ffffff inset;
            -webkit-text-fill-color: #1c1b1f;
            transition: background-color 5000s ease-in-out 0s;
        }
        .dark input:-webkit-autofill,
        .dark input:-webkit-autofill:hover, 
        .dark input:-webkit-autofill:focus {
            -webkit-box-shadow: 0 0 0px 1000px #0f0f11 inset;
            -webkit-text-fill-color: #e6e1e5;
        }

        /* Fully responsive media queries for layout consolidation */
        @media (max-width: 640px) {
            .auth-card {
                width: calc(100% - 32px); /* margin-mobile * 2 */
                padding: 24px 16px;
            }
            .brand-header h1 {
                font-size: 28px;
                line-height: 36px;
            }
        }
    </style>
</head>
<body class="text-on-surface bg-background dark:bg-[#0b0a0d] dark:text-[#e6e1e5]">
<!-- Theme Toggle -->
<button class="theme-toggle-btn p-base rounded-full bg-surface-container hover:bg-surface-container-high dark:bg-surface-container-highest dark:hover:bg-surface-variant transition-colors shadow-lg border border-outline-variant/30 flex items-center justify-center" id="theme-toggle">
<span class="material-symbols-outlined dark:hidden" data-icon="dark_mode">dark_mode</span>
<span class="material-symbols-outlined hidden dark:block text-secondary" data-icon="light_mode">light_mode</span>
</button>
<!-- Pro Background Decoration -->
<div class="fixed inset-0 -z-10 pro-grid-pattern opacity-60"></div>
<div class="fixed top-[-20%] right-[-10%] w-[60%] h-[60%] bg-primary/10 dark:bg-primary/20 rounded-full blur-[140px]"></div>
<div class="fixed bottom-[-10%] left-[-10%] w-[40%] h-[40%] bg-secondary/5 dark:bg-secondary/10 rounded-full blur-[120px]"></div>
<!-- Main Content -->
<main class="min-h-screen flex flex-col items-center justify-center p-margin-mobile md:p-lg">
<!-- Logo and Branding Anchor -->
<header class="brand-header mb-lg flex flex-col items-center animate-fade-in text-center">
<div class="relative mb-sm">
<div class="w-16 h-16 md:w-20 md:h-20 rounded-2xl flex items-center justify-center overflow-hidden border border-black/5 dark:border-white/10 shadow-2xl">
<span class="material-symbols-outlined">navigation</span>
</div>
<div class="absolute -top-2 -right-2 w-6 h-6 border-2 border-primary/20 dark:border-primary/40 rounded-full"></div>
<div class="absolute -bottom-1 -left-3 w-4 h-4 bg-secondary/10 dark:bg-secondary/20 rounded-full"></div>
</div>
<h1 class="font-headline-lg text-headline-lg text-on-surface dark:text-inherit tracking-tight">Luntian AI <span class="bg-clip-text text-transparent bg-gradient-to-r from-secondary to-primary">Pro</span></h1>
<p class="font-label-md text-label-md text-on-surface-variant uppercase tracking-[0.25em] mt-xs">Inteligent — precise, helpful, and expressive.</p>
</header>
<!-- Authentication Card -->
<div class="auth-card w-full max-w-[440px] glass-panel rounded-xl p-md md:p-lg pro-glow relative overflow-hidden group">
<div class="relative z-10">
<h2 class="font-headline-md text-headline-md mb-xs text-on-surface dark:text-inherit">Welcome back</h2>
<p class="font-body-md text-body-md text-on-surface-variant mb-lg">Enterprise-grade AI that scales with you.</p>
<form class="space-y-md" id="signin-form">
<!-- Email Field -->
<div class="space-y-xs">
<label class="font-label-md text-label-md text-on-surface-variant ml-1" for="email">Email Address</label>
<div class="relative group/input">
<input class="w-full px-md py-sm bg-white/50 dark:bg-black/40 border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface dark:text-inherit focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all placeholder:text-outline" id="email" placeholder="e.g. name@gmail.com" type="email"/>
<span class="material-symbols-outlined absolute right-md top-1/2 -translate-y-1/2 text-outline group-focus-within/input:text-primary transition-colors" data-icon="mail">mail</span>
</div>
</div>
<!-- Password Field -->
<div class="space-y-xs">
<div class="flex justify-between items-center px-1">
<label class="font-label-md text-label-md text-on-surface-variant" for="password">Password</label>
<a class="font-label-sm text-label-sm text-primary dark:text-secondary hover:underline transition-colors" href="passwordresetPage.php">Forgot Password?</a>
</div>
<div class="relative group/input">
<input class="w-full px-md py-sm bg-white/50 dark:bg-black/40 border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface dark:text-inherit focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all placeholder:text-outline" id="password" placeholder="••••••••" type="password"/>
<span class="material-symbols-outlined absolute right-md top-1/2 -translate-y-1/2 text-outline group-focus-within/input:text-primary transition-colors cursor-pointer" data-icon="visibility">visibility</span>
</div>
</div>
<!-- CTA Button -->
<button class="w-full py-sm btn-pro-gradient text-white font-headline-md text-[18px] rounded-lg shadow-lg hover:shadow-primary/20 hover:brightness-110 transition-all active:scale-[0.98] mt-sm flex items-center justify-center gap-sm" type="submit">
<span>Sign In</span>
</button>
</form>

<!-- Social Authentication -->
<div class="mt-lg pt-md border-t border-black/5 dark:border-white/5 flex flex-col gap-sm">
<p class="text-center font-label-sm text-label-sm text-on-surface-variant">Continue with</p>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-sm"><button type="button" id="btn-google" class="flex items-center justify-center gap-xs py-xs px-md border border-outline-variant rounded-lg font-label-md text-label-md text-on-surface dark:text-inherit hover:bg-black/5 dark:hover:bg-white/5 transition-colors">
<img alt="Google" class="w-4 h-4" src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg">
<span class="">Google</span>
</button>
<button type="button" id="btn-facebook" class="flex items-center justify-center gap-xs py-xs px-md border border-outline-variant rounded-lg font-label-md text-label-md text-on-surface dark:text-inherit hover:bg-black/5 dark:hover:bg-white/5 transition-colors">
<svg class="w-4 h-4 text-[#1877F2]" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path></svg>
<span class="">Facebook</span>
</button></div>
</div>
</div>
</div>
<!-- Footer Actions -->
<footer class="mt-lg text-center">
<p class="font-body-md text-body-md text-on-surface-variant">
                Dont have an account yet? 
                <a class="text-primary dark:text-secondary font-bold hover:underline ml-xs transition-all" href="signupPage.php">Create account</a>
</p>
<div class="mt-xl flex flex-wrap items-center justify-center gap-sm md:gap-md">
<a class="font-label-sm text-label-sm text-outline hover:text-on-surface-variant transition-colors" href="privacypolicyPage.php">Privacy Policy</a>
<span class="hidden sm:block w-1 h-1 rounded-full bg-outline/30"></span>
<a class="font-label-sm text-label-sm text-outline hover:text-on-surface-variant transition-colors" href="helpPage.php">Support</a>
</div>
</footer>
<!-- Pro Floating Element -->
<div class="hidden lg:block fixed left-xl bottom-xl max-w-xs animate-bounce-slow">
<div class="glass-panel p-sm rounded-xl shadow-2xl border border-black/5 dark:border-white/10 flex items-center gap-sm">
<div class="w-12 h-12 rounded-lg overflow-hidden flex-shrink-0 bg-gradient-to-br from-secondary to-primary flex items-center justify-center">
<span class="material-symbols-outlined" data-icon="bolt">bolt</span>
</div>
<div>
<p class="font-label-md text-label-md text-primary dark:text-secondary font-bold">Advance</p>
<p class="font-label-sm text-label-sm text-on-surface-variant">Efficiency: Optimized</p>
</div>
</div>
</div>
</main>
<script src="assets/js/luntian-api.js"></script>
<!-- Interactions Script -->
<script>
        document.addEventListener('DOMContentLoaded', () => {
            // Password visibility toggle
            const passwordInput = document.getElementById('password');
            const toggleIcon = passwordInput.nextElementSibling;

            toggleIcon.addEventListener('click', () => {
                const isPassword = passwordInput.type === 'password';
                passwordInput.type = isPassword ? 'text' : 'password';
                toggleIcon.textContent = isPassword ? 'visibility_off' : 'visibility';
            });

            // Theme toggle logic
            const themeToggleBtn = document.getElementById('theme-toggle');
            const htmlElement = document.documentElement;
            
            // Check for saved user preference, if any, on load
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme === 'dark' || (!savedTheme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                htmlElement.classList.add('dark');
            }

            themeToggleBtn.addEventListener('click', () => {
                if (htmlElement.classList.contains('dark')) {
                    htmlElement.classList.remove('dark');
                    localStorage.setItem('theme', 'light');
                } else {
                    htmlElement.classList.add('dark');
                    localStorage.setItem('theme', 'dark');
                }
            });

            // Entrance animations
            const elements = document.querySelectorAll('.animate-fade-in');
            elements.forEach((el, index) => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(10px)';
                setTimeout(() => {
                    el.style.transition = 'all 0.6s ease-out';
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                }, index * 100);
            });

            document.querySelector('meta[name="luntian-api-base"]').content =
                window.location.origin + window.location.pathname.replace(/\/[^/]*$/, '');

            const errBox = document.createElement('p');
            errBox.id = 'auth-error';
            errBox.className = 'text-error text-sm hidden';
            document.getElementById('signin-form').prepend(errBox);

            function showAuthError(msg) {
                errBox.textContent = msg;
                errBox.classList.remove('hidden');
            }

            document.getElementById('signin-form').addEventListener('submit', async (e) => {
                e.preventDefault();
                const email = document.getElementById('email').value.trim();
                const password = document.getElementById('password').value;
                try {
                    await LuntianAPI.signInWithEmail(email, password);
                    window.location.href = 'index.php';
                } catch (err) {
                    showAuthError(err.message || 'Sign in failed');
                }
            });

            document.getElementById('btn-google').addEventListener('click', async () => {
                try {
                    await LuntianAPI.signInWithGoogle();
                    window.location.href = 'index.php';
                } catch (err) {
                    showAuthError(err.message || 'Google sign in failed');
                }
            });

            document.getElementById('btn-facebook').addEventListener('click', async () => {
                try {
                    await LuntianAPI.signInWithFacebook();
                    window.location.href = 'index.php';
                } catch (err) {
                    showAuthError(err.message || 'Facebook sign in failed');
                }
            });
        });
    </script>
</body></html>
