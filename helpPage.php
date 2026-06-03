<!DOCTYPE html><html class="light" lang="en"><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Luntian - Help &amp; Support</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        ::-webkit-scrollbar { width: 4px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #C7C6D0; border-radius: 10px; }
        .glass-card {
            backdrop-filter: blur(12px);
            background: rgba(255, 255, 255, 0.7);
            border: 1px solid rgba(201, 196, 215, 0.2);
        }
        @media (max-width: 768px) {
            #h2 {
                display: none;
            }
        }
    </style>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "tertiary-fixed-dim": "#ffa9ff",
                      "on-error-container": "#93000a",
                      "on-secondary-fixed": "#001f28",
                      "on-background": "#1c1b1f",
                      "on-surface-variant": "#484555",
                      "primary-fixed-dim": "#cabeff",
                      "surface-tint": "#5f41da",
                      "sage-mist": "#8DA47E",
                      "surface": "#fdf8fd",
                      "outline-variant": "#c9c4d7",
                      "surface-container-highest": "#e5e1e7",
                      "on-primary-fixed-variant": "#4720c2",
                      "on-primary-container": "#eee7ff",
                      "surface-container-low": "#f7f2f8",
                      "on-tertiary": "#ffffff",
                      "surface-container": "#f1ecf2",
                      "secondary-container": "#00d2ff",
                      "inverse-on-surface": "#f4eff5",
                      "primary-fixed": "#e6deff",
                      "secondary-fixed-dim": "#47d6ff",
                      "surface-container-lowest": "#ffffff",
                      "on-error": "#ffffff",
                      "moss-deep": "#2D3E1A",
                      "error": "#ba1a1a",
                      "on-secondary-fixed-variant": "#004e60",
                      "on-tertiary-fixed-variant": "#751e7e",
                      "brand-gradient": "linear-gradient(135deg, #00D2FF 0%, #6B4EE6 100%)",
                      "primary-container": "#6b4ee6",
                      "on-primary-fixed": "#1b0062",
                      "inverse-primary": "#cabeff",
                      "outline": "#797586",
                      "secondary-fixed": "#b6ebff",
                      "surface-dim": "#ddd9de",
                      "secondary": "#00677f",
                      "error-container": "#ffdad6",
                      "on-tertiary-container": "#ffe2fa",
                      "tertiary-fixed": "#ffd6fb",
                      "tertiary": "#822b8a",
                      "wet-stone": "#E1E5DC",
                      "surface-glass": "rgba(253, 253, 255, 0.8)",
                      "surface-container-high": "#ebe7ec",
                      "background-cool": "#F8F9FE",
                      "background": "#fdf8fd",
                      "surface-variant": "#e5e1e7",
                      "inverse-surface": "#313034",
                      "surface-bright": "#fdf8fd",
                      "on-surface": "#1c1b1f",
                      "on-secondary": "#ffffff",
                      "tertiary-container": "#9e45a4",
                      "on-primary": "#ffffff",
                      "primary": "#5230cd",
                      "on-tertiary-fixed": "#36003d",
                      "on-secondary-container": "#00566a"
              },
              "borderRadius": {
                      "DEFAULT": "0.25rem",
                      "lg": "0.5rem",
                      "xl": "0.75rem",
                      "full": "9999px"
              },
              "spacing": {
                      "xs": "4px",
                      "md": "24px",
                      "lg": "40px",
                      "sm": "12px",
                      "base": "8px",
                      "xl": "64px",
                      "max-content-width": "896px",
                      "sidebar-width": "320px"
              },
              "fontFamily": {
                      "body-md": ["Inter"],
                      "body-lg": ["Inter"],
                      "label-md": ["Inter"],
                      "label-sm": ["Inter"],
                      "headline-lg": ["Inter"],
                      "caption-italic": ["Inter"],
                      "headline-xl": ["Inter"],
                      "headline-md": ["Inter"]
              },
              "fontSize": {
                      "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                      "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                      "label-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "500"}],
                      "label-sm": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                      "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                      "caption-italic": ["10px", {"lineHeight": "12px", "fontWeight": "400"}],
                      "headline-xl": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                      "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}]
              }
            },
          },
        }
    </script>
</head>
<body class="bg-background-cool font-body-md text-on-background min-h-screen">
<!-- TopAppBar -->
<header class="fixed top-0 right-0 left-0 z-50 flex justify-between items-center px-md h-16 bg-surface-glass backdrop-blur-md shadow-[0_4px_24px_-4px_rgba(107,78,230,0.1)]">
<h2 class="font-headline-md text-headline-md font-bold text-primary" id="h2">Help</h2>
<nav class="flex gap-6">
<a class="flex items-center gap-sm px-sm py-2 rounded-xl hover:bg-error/5 text-error text-label-md transition-colors" href="signupPage.php">Logout</a>
<a class="text-primary border-b-2 border-primary font-label-md px-3 py-2" href="#">Inquiry</a>
<a class="text-on-surface-variant dark:text-outline-variant font-label-md transition-colors hover:bg-primary/5 dark:hover:bg-primary/20 px-3 py-2 rounded-lg" href="index.php">Chat</a>
</nav>
</header>
<!-- Main Content -->
<main class="pt-16 min-h-screen">
<!-- Hero Section -->
<section class="px-md pt-xl pb-lg max-w-max-content-width mx-auto text-center">
<h1 class="font-headline-xl text-headline-xl mb-md text-on-surface">How can we help you today?</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant mb-lg">Search our documentation or browse categories below to find answers to your questions.</p>
<div class="relative max-w-2xl mx-auto shadow-[0_4px_24px_-4px_rgba(107,78,230,0.1)] rounded-2xl">
<span class="material-symbols-outlined absolute left-6 top-1/2 -translate-y-1/2 text-primary text-3xl">search</span>
<input class="w-full py-6 pl-16 pr-6 bg-surface-container-lowest border-none rounded-2xl font-body-lg text-body-lg focus:ring-4 ring-primary/10" placeholder="Search for 'How do I export data?' or 'Analysis tools'" type="text">
</div>
</section>
<!-- Category Grid -->
<section class="px-md py-lg max-w-max-content-width mx-auto">
<div class="grid grid-cols-1 md:grid-cols-3 gap-md">
<!-- Getting Started -->
<div class="glass-card p-md rounded-xl hover:shadow-xl transition-shadow cursor-pointer group">
<div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center text-primary mb-md group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined">rocket_launch</span>
</div>
<h3 class="font-headline-md text-headline-md mb-sm">Getting Started</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-md">New to Luntian AI? Learn the basics and set up your first project.</p>
<ul class="space-y-2">
<li class=""><a class="text-primary hover:underline font-label-md text-label-md" href="#">Quick start guide</a></li>
<li class=""><a class="text-primary hover:underline font-label-md text-label-md" href="#">Account setup</a></li>
<li class=""><a class="text-primary hover:underline font-label-md text-label-md" href="#">Platform overview</a></li>
</ul>
</div>
<!-- Tool Guides -->
<div class="glass-card p-md rounded-xl hover:shadow-xl transition-shadow cursor-pointer group">
<div class="w-12 h-12 bg-secondary/10 rounded-lg flex items-center justify-center text-secondary mb-md group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined">construction</span>
</div>
<h3 class="font-headline-md text-headline-md mb-sm">Tool Guides</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-md">Deep dives into Analysis, Vault, and Studio features.</p>
<ul class="space-y-2">
<li class=""><a class="text-primary hover:underline font-label-md text-label-md" href="#">Advanced analytics</a></li>
<li class=""><a class="text-primary hover:underline font-label-md text-label-md" href="#">Managing your Vault</a></li>
<li class=""><a class="text-primary hover:underline font-label-md text-label-md" href="#">Studio shortcuts</a></li>
</ul>
</div>
<!-- Troubleshooting -->
<div class="glass-card p-md rounded-xl hover:shadow-xl transition-shadow cursor-pointer group">
<div class="w-12 h-12 bg-error-container/20 rounded-lg flex items-center justify-center text-error mb-md group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined">report_problem</span>
</div>
<h3 class="font-headline-md text-headline-md mb-sm">Troubleshooting</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-md">Find solutions for common errors and connectivity issues.</p>
<ul class="space-y-2">
<li class=""><a class="text-primary hover:underline font-label-md text-label-md" href="#">Login issues</a></li>
<li class=""><a class="text-primary hover:underline font-label-md text-label-md" href="#">API error codes</a></li>
<li class=""><a class="text-primary hover:underline font-label-md text-label-md" href="#">System status</a></li>
</ul>
</div>
</div>
</section>
<!-- Content Split: Support & Changelog -->
<section class="px-md py-lg max-w-max-content-width mx-auto grid grid-cols-1 md:grid-cols-2 gap-lg">
<!-- Contact Support -->
<div class="bg-surface-container rounded-2xl p-lg flex flex-col justify-between">
<div>
<h2 class="font-headline-lg text-headline-lg mb-sm">Still need help?</h2>
<p class="font-body-md text-body-md text-on-surface-variant mb-lg">Our dedicated support team is available 24/7 to assist you with your professional workflow.</p>
<div class="space-y-md">
<div class="flex items-center gap-md p-md bg-surface-bright rounded-xl border border-outline-variant/20 cursor-pointer hover:bg-white transition-colors">
<span class="material-symbols-outlined text-primary text-3xl">chat</span>
<div>
<h4 class="font-label-md text-label-md font-bold">Live Chat</h4>
<p class="font-label-sm text-label-sm text-on-surface-variant">Average response time: 2 mins</p>
</div>
</div>
<div class="flex items-center gap-md p-md bg-surface-bright rounded-xl border border-outline-variant/20 cursor-pointer hover:bg-white transition-colors">
<span class="material-symbols-outlined text-secondary text-3xl">mail</span>
<div>
<h4 class="font-label-md text-label-md font-bold">Email Support</h4>
<p class="font-label-sm text-label-sm text-on-surface-variant">Response within 24 hours</p>
</div>
</div>
</div>
</div>
<div class="mt-lg">
<img alt="Support Team" class="w-full h-48 object-cover rounded-xl shadow-md" data-alt="A diverse team of professional customer support specialists smiling in a modern, plant-filled office with glass walls. The lighting is soft and natural, emphasizing a friendly and high-touch service environment. The aesthetic is biophilic, clean, and professional with a palette of soft greys and vibrant plant life." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBQ_7DaU15cqTshPVPNbKsbn5fBhituKVejq0N6OH1DRd1UriK_ILZO5kpM5Py4-FiCac-brqHEaSdOTxNXeR7V1Co8JPyqUtYzdEMcHEZiBOgWy6lPYBZNVJHbJqbDprTdRssMqE0pqPvGwkfa0S_ES58gZHP_5nARbXTOlDhnoCCOhnCK9VXd9TK_NybAUIdOOqmr7C5yWkYhMxo9ghxqN4DnC64Ej4TjPMgbSesp48Ez0DRinreGi1m0UuSaxdl6JTCzOZsRrvAU">
</div>
</div>
<!-- Latest Updates -->
<div>
<div class="flex items-center justify-between mb-lg">
<h2 class="font-headline-lg text-headline-lg">What's New</h2>
<a class="text-primary font-label-md text-label-md flex items-center gap-xs" href="#">View all <span class="material-symbols-outlined text-sm">arrow_forward</span></a>
</div>
<div class="space-y-lg">
<!-- Update Item -->
<div class="relative pl-8 border-l-2 border-primary/20">
<div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-primary ring-4 ring-background-cool"></div>
<span class="font-label-sm text-label-sm text-on-surface-variant block mb-1">October 14, 2023</span>
<h4 class="font-label-md text-label-md font-bold text-on-surface mb-xs">v2.4: Enhanced Neural Studio</h4>
<p class="font-body-md text-body-md text-on-surface-variant">We've introduced 12 new organic filters and improved export speeds by 40% for Pro users.</p>
</div>
<!-- Update Item -->
<div class="relative pl-8 border-l-2 border-primary/20">
<div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-outline ring-4 ring-background-cool"></div>
<span class="font-label-sm text-label-sm text-on-surface-variant block mb-1">September 28, 2023</span>
<h4 class="font-label-md text-label-md font-bold text-on-surface mb-xs">Multi-modal Vault Encryption</h4>
<p class="font-body-md text-body-md text-on-surface-variant">Advanced zero-knowledge encryption now applies to all media formats in your personal vault.</p>
</div>
<!-- Update Item -->
<div class="relative pl-8 border-l-2 border-primary/20">
<div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-outline ring-4 ring-background-cool"></div>
<span class="font-label-sm text-label-sm text-on-surface-variant block mb-1">September 12, 2023</span>
<h4 class="font-label-md text-label-md font-bold text-on-surface mb-xs">Collaboration Links Beta</h4>
<p class="font-body-md text-body-md text-on-surface-variant">Invite external stakeholders to view analysis reports with temporary secure links.</p>
</div>
</div>
<div class="mt-lg bg-primary/5 p-md rounded-2xl flex items-start gap-md">
<span class="material-symbols-outlined text-primary">info</span>
<div>
<p class="font-label-md text-label-md font-bold text-primary">Beta Feature: AI Help Assistant</p>
<p class="font-label-sm text-label-sm text-on-surface-variant">Try our new AI-powered support agent in the Bottom NavBar for instant contextual help.</p>
</div>
</div>
</div>
</section>
<!-- Footer Credits -->
<footer class="mt-xl py-lg text-center border-t border-outline-variant/10 max-w-max-content-width mx-auto">
<p class="font-label-sm text-label-sm text-on-surface-variant">© 2023 Luntian AI Pro. All rights reserved. Built for professional creative excellence.</p>
</footer>
</main>
<!-- FAB for quick help (Mobile only or specific screens) -->
<button class="fixed bottom-8 right-8 w-14 h-14 bg-brand-gradient text-white rounded-full shadow-2xl flex items-center justify-center lg:hidden z-50 active:scale-90 transition-transform">
<span class="material-symbols-outlined">support_agent</span>
</button>
<script>
        // Micro-interaction: Header scroll shadow
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 20) {
                header.classList.add('shadow-lg');
                header.classList.remove('shadow-[0_4px_24px_-4px_rgba(107,78,230,0.1)]');
            } else {
                header.classList.remove('shadow-lg');
                header.classList.add('shadow-[0_4px_24px_-4px_rgba(107,78,230,0.1)]');
            }
        });

        // Search Input Glow Effect
        const searchBar = document.querySelector('input[type="text"]');
        searchBar.addEventListener('focus', () => {
            searchBar.parentElement.classList.add('ring-4', 'ring-primary/5');
        });
        searchBar.addEventListener('blur', () => {
            searchBar.parentElement.classList.remove('ring-4', 'ring-primary/5');
        });
    </script>




</body></html>
