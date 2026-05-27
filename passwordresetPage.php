<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Luntian AI - Reset Your Password</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-surface": "#1c1b1f",
                        "on-secondary-fixed": "#001f28",
                        "on-tertiary": "#ffffff",
                        "tertiary-fixed-dim": "#ffa9ff",
                        "background-cool": "#F8F9FE",
                        "secondary-fixed": "#b6ebff",
                        "wet-stone": "#E1E5DC",
                        "primary-container": "#6b4ee6",
                        "on-secondary": "#ffffff",
                        "on-primary-fixed": "#1b0062",
                        "on-tertiary-fixed-variant": "#751e7e",
                        "secondary-fixed-dim": "#47d6ff",
                        "moss-deep": "#2D3E1A",
                        "surface-variant": "#e5e1e7",
                        "secondary": "#00677f",
                        "tertiary": "#822b8a",
                        "on-secondary-fixed-variant": "#004e60",
                        "on-secondary-container": "#00566a",
                        "surface-bright": "#fdf8fd",
                        "background": "#fdf8fd",
                        "surface-container-lowest": "#ffffff",
                        "outline": "#797586",
                        "brand-gradient": "linear-gradient(135deg, #00D2FF 0%, #6B4EE6 100%)",
                        "surface-glass": "rgba(253, 253, 255, 0.8)",
                        "surface-container": "#f1ecf2",
                        "sage-mist": "#8DA47E",
                        "surface-container-highest": "#e5e1e7",
                        "primary": "#5230cd",
                        "error-container": "#ffdad6",
                        "inverse-surface": "#313034",
                        "inverse-on-surface": "#f4eff5",
                        "surface-container-high": "#ebe7ec",
                        "inverse-primary": "#cabeff",
                        "tertiary-container": "#9e45a4",
                        "primary-fixed": "#e6deff",
                        "primary-fixed-dim": "#cabeff",
                        "on-primary-fixed-variant": "#4720c2",
                        "tertiary-fixed": "#ffd6fb",
                        "on-surface-variant": "#484555",
                        "on-error-container": "#93000a",
                        "surface": "#fdf8fd",
                        "on-primary-container": "#eee7ff",
                        "on-tertiary-fixed": "#36003d",
                        "on-error": "#ffffff",
                        "surface-dim": "#ddd9de",
                        "secondary-container": "#00d2ff",
                        "surface-container-low": "#f7f2f8",
                        "on-primary": "#ffffff",
                        "on-tertiary-container": "#ffe2fa",
                        "error": "#ba1a1a",
                        "outline-variant": "#c9c4d7",
                        "on-background": "#1c1b1f",
                        "surface-tint": "#5f41da"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "lg": "40px",
                        "base": "8px",
                        "xl": "64px",
                        "sidebar-width": "320px",
                        "sm": "12px",
                        "md": "24px",
                        "max-content-width": "896px",
                        "xs": "4px"
                    },
                    "fontFamily": {
                        "headline-md": ["Inter"],
                        "label-sm": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-lg": ["Inter"],
                        "body-lg": ["Inter"],
                        "label-md": ["Inter"],
                        "caption-italic": ["Inter"],
                        "headline-xl": ["Inter"]
                    },
                    "fontSize": {
                        "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                        "label-sm": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                        "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                        "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                        "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                        "label-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "500"}],
                        "caption-italic": ["10px", {"lineHeight": "12px", "fontWeight": "400"}],
                        "headline-xl": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}]
                    }
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            vertical-align: middle;
        }
        .brand-gradient-bg {
            background: linear-gradient(135deg, #00D2FF 0%, #6B4EE6 100%);
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(201, 196, 215, 0.3);
        }
        .dark .glass-card {
            background: rgba(30, 26, 35, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .mesh-gradient {
            background-color: #f8f9fe;
            background-image: 
                radial-gradient(at 0% 0%, rgba(107, 78, 230, 0.15) 0px, transparent 50%),
                radial-gradient(at 100% 0%, rgba(0, 210, 255, 0.1) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(107, 78, 230, 0.05) 0px, transparent 50%),
                radial-gradient(at 0% 100%, rgba(0, 210, 255, 0.1) 0px, transparent 50%);
        }
        .dark .mesh-gradient {
            background-color: #121212;
            background-image: 
                radial-gradient(at 0% 0%, rgba(107, 78, 230, 0.2) 0px, transparent 50%),
                radial-gradient(at 100% 0%, rgba(0, 210, 255, 0.15) 0px, transparent 50%);
        }
        input:focus {
            outline: none;
            box-shadow: 0 0 0 2px rgba(82, 48, 205, 0.2);
        }
    </style>
</head>
<body class="mesh-gradient min-h-screen flex flex-col font-body-md text-on-background transition-colors duration-500">
<!-- Header (Suppressed Nav Shell as per instructions for Task-Focused pages) -->
<header class="fixed top-0 left-0 w-full z-50 flex justify-between items-center px-md py-md">
<div class="flex items-center gap-xs">
<span class="font-headline-md text-headline-md font-bold bg-clip-text text-transparent brand-gradient-bg">
                Luntian AI Pro
            </span>
</div>
<button class="p-base rounded-full hover:bg-surface-variant transition-colors" onclick="document.documentElement.classList.toggle('dark')">
<span class="material-symbols-outlined text-on-surface-variant">dark_mode</span>
</button>
</header>
<!-- Main Content -->
<main class="flex-grow flex items-center justify-center px-md py-xl">
<div class="w-full max-w-md animate-in fade-in zoom-in duration-700">
<!-- Glassmorphism Card -->
<div class="glass-card rounded-xl p-lg shadow-[0_4px_24px_-4px_rgba(107,78,230,0.1)] flex flex-col items-center text-center">
<!-- Brand Asset -->
<div class="mb-md p-base bg-white/50 dark:bg-black/20 rounded-xl shadow-sm">
<img alt="Luntian AI Logo" class="w-16 h-16 object-contain" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAhE013bRAXQrdnsbZdOelUqbNZ6oQYH7KEuZUzu1QAR7ohc0cgHgVGS8ollwBU8RzduRAqO-iZKSXGqPLXYtuOrRwrBzvXFKcmllapiPkjWauCiIRYvTMwqh7tEZ00lAAbct8QxBDLWg3fSfMmKuzE9K1GDsmoHjjZ8J9_d8gbY5fCx94wnYyRrZap98SqTGSWDz979c44FWJFIe9Nei2eyNQJzMQjWHppGhLTruO3aobMkDLevkVkQkJgwgQPY_PebwKRikc4gB2P"/>
</div>
<h1 class="font-headline-lg text-headline-lg text-on-surface mb-sm">
                    Reset Your Password
                </h1>
<p class="font-body-md text-on-surface-variant mb-lg leading-relaxed">
                    Enter the email address associated with your account and we'll send you a link to reset your password.
                </p>
<!-- Form -->
<form class="w-full space-y-md text-left" id="forgotPasswordForm">
<div class="flex flex-col gap-xs">
<label class="font-label-md text-label-md text-on-surface-variant ml-xs" for="email">Email Address</label>
<div class="relative group">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors">
                                mail
                            </span>
<input class="w-full bg-surface-container-low border border-outline-variant rounded-lg py-3 pl-12 pr-4 font-body-md focus:border-primary focus:bg-surface-bright transition-all" id="email" name="email" placeholder="name@company.com" required="" type="email"/>
</div>
</div>
<button class="w-full py-3 px-md brand-gradient-bg text-on-primary font-label-md text-label-md rounded-lg shadow-lg shadow-primary/20 hover:brightness-110 active:scale-[0.98] transition-all duration-200 flex justify-center items-center gap-base" id="submitButton" type="submit">
<span>Send Reset Link</span>
<span class="material-symbols-outlined" style="font-variation-settings: 'opsz' 20;">arrow_forward</span>
</button>
</form>
<!-- Success Message (Hidden by default) -->
<div class="hidden w-full flex flex-col items-center animate-in slide-in-from-bottom-4 duration-500" id="successMessage">
<div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-md">
<span class="material-symbols-outlined text-primary text-[32px]">check_circle</span>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface mb-xs">Email Sent!</h3>
<p class="font-body-md text-on-surface-variant mb-lg">
                        Check your inbox for instructions to reset your password.
                    </p>
<button class="text-primary font-label-md text-label-md hover:underline" onclick="resetForm()">
                        Didn't receive it? Try again
                    </button>
</div>
<!-- Footer Link -->
<div class="mt-lg pt-md border-t border-outline-variant/30 w-full">
<a class="inline-flex items-center gap-xs font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors group" href="signinPage.php">
<span class="material-symbols-outlined text-[18px] group-hover:-translate-x-1 transition-transform">arrow_back</span>
                        Back to Login
                    </a>
</div>
</div>
<!-- Additional Help Text -->
<div class="mt-md text-center">
<p class="font-label-sm text-label-sm text-on-surface-variant/60">
                    If you're still having trouble, contact <a class="text-primary/60 hover:text-primary underline" href="#">Support</a>
</p>
</div>
</div>
</main>
<!-- Simple Page Footer -->
<footer class="w-full py-md px-md flex flex-col md:flex-row justify-between items-center gap-base">
<span class="font-label-sm text-label-sm text-on-surface-variant">© 2024 Luntian AI. All rights reserved.</span>
<div class="flex gap-md">
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-opacity hover:opacity-80" href="#">Privacy Policy</a>
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-opacity hover:opacity-80" href="#">Terms of Service</a>
</div>
</footer>
<script>
        const form = document.getElementById('forgotPasswordForm');
        const successMessage = document.getElementById('successMessage');
        const submitButton = document.getElementById('submitButton');

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            
            // Interaction: Loading state
            const originalText = submitButton.innerHTML;
            submitButton.disabled = true;
            submitButton.innerHTML = `
                <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                <span>Processing...</span>
            `;

            // Simulate API call
            setTimeout(() => {
                form.classList.add('hidden');
                successMessage.classList.remove('hidden');
                submitButton.classList.add('hidden');
            }, 1500);
        });

        function resetForm() {
            form.classList.remove('hidden');
            successMessage.classList.add('hidden');
            submitButton.classList.remove('hidden');
            submitButton.disabled = false;
            submitButton.innerHTML = `
                <span>Send Reset Link</span>
                <span class="material-symbols-outlined" style="font-variation-settings: 'opsz' 20;">arrow_forward</span>
            `;
            form.reset();
        }

        // Add visual flair - mouse parallax on background (subtle)
        document.addEventListener('mousemove', (e) => {
            const moveX = (e.clientX - window.innerWidth / 2) * 0.005;
            const moveY = (e.clientY - window.innerHeight / 2) * 0.005;
            document.body.style.backgroundPosition = `${moveX}px ${moveY}px`;
        });
    </script>
</body></html>