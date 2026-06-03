<!DOCTYPE html><html class="light" lang="en"><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Luntian AI - Screen Analysis</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "surface-glass": "rgba(253, 253, 255, 0.8)",
                      "tertiary-fixed-dim": "#ffa9ff",
                      "secondary-fixed-dim": "#47d6ff",
                      "primary-container": "#6b4ee6",
                      "sage-mist": "#8DA47E",
                      "surface-dim": "#ddd9de",
                      "surface-variant": "#e5e1e7",
                      "secondary": "#00677f",
                      "inverse-on-surface": "#f4eff5",
                      "on-tertiary-container": "#ffe2fa",
                      "on-primary-container": "#eee7ff",
                      "background-cool": "#F8F9FE",
                      "brand-gradient": "linear-gradient(135deg, #00D2FF 0%, #6B4EE6 100%)",
                      "on-tertiary-fixed": "#36003d",
                      "tertiary-container": "#9e45a4",
                      "secondary-fixed": "#b6ebff",
                      "on-secondary-container": "#00566a",
                      "on-surface-variant": "#484555",
                      "surface-container": "#f1ecf2",
                      "inverse-surface": "#313034",
                      "on-surface": "#1c1b1f",
                      "on-background": "#1c1b1f",
                      "primary-fixed": "#e6deff",
                      "on-error-container": "#93000a",
                      "surface-tint": "#5f41da",
                      "inverse-primary": "#cabeff",
                      "on-secondary-fixed": "#001f28",
                      "surface-container-lowest": "#ffffff",
                      "surface-bright": "#fdf8fd",
                      "moss-deep": "#2D3E1A",
                      "surface-container-high": "#ebe7ec",
                      "on-primary-fixed": "#1b0062",
                      "surface": "#fdf8fd",
                      "primary": "#5230cd",
                      "secondary-container": "#00d2ff",
                      "primary-fixed-dim": "#cabeff",
                      "outline-variant": "#c9c4d7",
                      "on-primary-fixed-variant": "#4720c2",
                      "error-container": "#ffdad6",
                      "on-tertiary": "#ffffff",
                      "surface-container-highest": "#e5e1e7",
                      "on-secondary": "#ffffff",
                      "error": "#ba1a1a",
                      "tertiary-fixed": "#ffd6fb",
                      "wet-stone": "#E1E5DC",
                      "surface-container-low": "#f7f2f8",
                      "tertiary": "#822b8a",
                      "on-error": "#ffffff",
                      "outline": "#797586",
                      "background": "#fdf8fd",
                      "on-secondary-fixed-variant": "#004e60",
                      "on-primary": "#ffffff",
                      "on-tertiary-fixed-variant": "#751e7e"
              },
              "borderRadius": {
                      "DEFAULT": "0.25rem",
                      "lg": "0.5rem",
                      "xl": "0.75rem",
                      "2xl": "1rem",
                      "3xl": "1.5rem",
                      "full": "9999px"
              },
              "spacing": {
                      "sm": "12px",
                      "sidebar-width": "300px",
                      "md": "24px",
                      "max-content-width": "896px",
                      "xl": "64px",
                      "lg": "40px",
                      "xs": "4px",
                      "base": "8px"
              },
              "fontFamily": {
                      "body-md": ["Inter"],
                      "headline-lg": ["Inter"],
                      "headline-xl": ["Inter"],
                      "label-sm": ["Inter"],
                      "label-md": ["Inter"],
                      "headline-md": ["Inter"],
                      "caption-italic": ["Inter"],
                      "body-lg": ["Inter"]
              }
            },
          },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .bg-brand-gradient {
            background: linear-gradient(135deg, #00D2FF 0%, #6B4EE6 100%);
        }
        .glass-premium {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, 0.4);
        }
        .dark .glass-premium {
            background: rgba(49, 48, 52, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .wave-container {
            display: flex;
            align-items: center;
            gap: 3px;
            height: 24px;
        }
        .wave-bar {
            width: 3px;
            background: #6B4EE6;
            border-radius: 50px;
            animation: wave 1.2s ease-in-out infinite;
        }
        @keyframes wave {
            0%, 100% { height: 4px; }
            50% { height: 20px; }
        }
        .ai-glow {
            box-shadow: 0 0 15px rgba(107, 78, 230, 0.4);
            animation: glow-pulse 2s infinite ease-in-out;
        }
        @keyframes glow-pulse {
            0%, 100% { opacity: 0.8; box-shadow: 0 0 10px rgba(107, 78, 230, 0.4); }
            50% { opacity: 1; box-shadow: 0 0 20px rgba(107, 78, 230, 0.6); }
        }
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: rgba(107, 78, 230, 0.2);
            border-radius: 10px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: rgba(107, 78, 230, 0.4);
        }

        /* Mobile specific adjustments */
        @media (max-width: 1024px) {
            #sidebar {
                transform: translateX(-100%);
                transition: transform 0.3s ease-in-out;
            }
            #sidebar.open {
                transform: translateX(0);
            }
            main { padding-left: 0 !important; }
            #mobile-menu-overlay {
                display: none;
            }
            #mobile-menu-overlay.open {
                display: block;
            }
            /* Hide central workspace content when mobile menu is active */
            body.menu-open #content-area {
                opacity: 0;
                pointer-events: none;
            }
        }
    </style>
<style>
    @media (max-width: 768px) {
        header {
            flex-wrap: nowrap !important;
            height: 64px !important;
            padding-left: 1rem !important;
            padding-right: 1rem !important;
            gap: 0.5rem;
        }
        .header-search {
            flex: 1;
            min-width: 0;
        }
        .w-48.md\:w-80 {
            width: 100% !important;
        }
        #companion-pill {
            width: calc(100% - 2rem) !important;
            right: 1rem !important;
            bottom: 1rem !important;
            left: 1rem !important;
            transform: scale(0.9);
            transform-origin: bottom center;
        }
        .absolute.top-\[20\%\].left-\[10\%\].pointer-events-auto > .glass-premium {
            width: 240px !important;
            left: 5% !important;
        }
        .absolute.bottom-\[15\%\].right-\[10\%\].pointer-events-auto {
            bottom: 20% !important;
            right: 5% !important;
        }
    }

    @media (max-width: 1024px) {
        body.menu-open #companion-pill,
        body.menu-open .absolute.top-\[20\%\].left-\[10\%\].pointer-events-auto,
        body.menu-open .absolute.bottom-\[15\%\].right-\[10\%\].pointer-events-auto {
            opacity: 0 !important;
            pointer-events: none !important;
            visibility: hidden !important;
        }
    }
</style></head>
<body class="bg-background-cool dark:bg-inverse-surface font-body-md text-on-background dark:text-white min-h-screen selection:bg-primary-fixed selection:text-on-primary-fixed">
<!-- Mobile Overlay -->
<div class="fixed inset-0 bg-black/50 z-[55] lg:hidden" id="mobile-menu-overlay" onclick="toggleMobileMenu()"></div>
<!-- Sidebar Navigation -->
<aside class="fixed left-0 top-0 h-full w-sidebar-width bg-white dark:bg-surface-dim border-r border-outline-variant/20 flex flex-col py-lg px-md gap-base z-[60] lg:translate-x-0 transition-transform duration-300" id="sidebar">
<div class="flex items-center justify-between mb-lg">
<div class="flex items-center gap-sm">
<span class="material-symbols-outlined text-sm font-fill">navigation</span>
<div>
<h1 class="font-bold text-lg text-on-surface dark:text-white leading-tight">Luntian AI</h1>
<p class="text-on-surface-variant dark:text-outline-variant text-xs font-medium">Professional Suite</p>
</div>
</div>
<button class="lg:hidden p-2 text-on-surface-variant dark:text-outline-variant" onclick="toggleMobileMenu()">
<span class="material-symbols-outlined">close</span>
</button>
</div>
<nav class="flex flex-col gap-xs flex-1">
<a class="flex items-center gap-md px-md py-sm text-on-surface-variant dark:text-outline-variant hover:text-primary hover:bg-primary/5 transition-all rounded-xl" href="index.php">
<span class="material-symbols-outlined">chat</span>
<span class="">Chat</span>
</a>
<a class="flex items-center gap-md px-md py-sm bg-primary/10 dark:bg-primary/20 text-primary dark:text-inverse-primary font-bold rounded-lg transition-all" href="#">
<span class="material-symbols-outlined">laptop</span>
<span class="">Analysis</span>
</a>
<a class="flex items-center gap-md px-md py-sm text-on-surface-variant dark:text-outline-variant hover:text-primary hover:bg-primary/5 transition-all rounded-xl" href="devstudioPage.php">
<span class="material-symbols-outlined">terminal</span>
<span class="">Dev Studio</span>
</a>
<a class="flex items-center gap-md px-md py-sm text-on-surface-variant dark:text-outline-variant hover:text-primary hover:bg-primary/5 transition-all rounded-xl" href="editingPage.php">
<span class="material-symbols-outlined">palette</span>
<span class="">Studio</span>
</a>
</nav>
<div class="mt-auto pt-md border-t border-outline-variant/10 flex flex-col gap-xs">
<a class="flex items-center gap-md px-md py-sm text-on-surface-variant dark:text-outline-variant hover:text-on-surface dark:hover:text-white transition-all" href="helpPage.php">
<span class="material-symbols-outlined">help</span>
<span class="">Help</span>
</a>
</div>
</aside>
<!-- Main Workspace -->
<main class="lg:pl-sidebar-width min-h-screen flex flex-col">
<!-- Top Nav Bar -->
<header class="bg-white/80 dark:bg-inverse-surface/80 backdrop-blur-md sticky top-0 z-40 flex justify-between items-center px-md lg:px-xl h-16 w-full border-b border-outline-variant/10">
<div class="flex items-center gap-md flex-1">
<button class="lg:hidden p-2 -ml-2 text-on-surface-variant dark:text-outline-variant" onclick="toggleMobileMenu()">
<span class="material-symbols-outlined">menu</span>
</button>
<div class="header-search bg-surface-container-low dark:bg-surface-variant/10 rounded-full px-md py-1.5 flex items-center gap-sm border border-outline-variant/10 w-48 md:w-80">
<span class="material-symbols-outlined text-primary text-[20px]">search</span>
<input class="bg-transparent border-none focus:ring-0 text-sm w-full text-on-surface dark:text-white placeholder:text-on-surface-variant/50" placeholder="Search insights..." type="text">
</div>
</div>
<div class="flex items-center gap-2 md:gap-md">
<button class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-surface-container-high dark:hover:bg-white/5 transition-all text-on-surface-variant dark:text-outline-variant" id="theme-toggle-btn" onclick="toggleDarkMode()">
<span class="material-symbols-outlined">dark_mode</span>
</button>
<div class="h-6 w-px bg-outline-variant/20 mx-xs hidden md:block"></div>
<div class="relative" id="profile-container">
<button class="flex items-center gap-1 p-1 rounded-full hover:bg-surface-container-high dark:hover:bg-white/5 transition-all" id="profile-trigger" onclick="toggleProfileDropdown()">
<img alt="User" class="w-8 h-8 rounded-full object-cover border border-primary/20" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAAj-As8fova0zBEzmiqg3UfZexMJMKsdAwASDXcSHfZNyMpU3stWgwBJ53fe-ia3v4WLb5HaYmDmkwZiexmGNa2qLiDHcEi2xEGXP7Za_eDFvyiPlxoA7gUWQtSV1Korh_oOlPlZEg4pHkR6uvgj9RrEtlLger-TyxCsAMyOw84M7VWdnWj1Xpw6Fn6lTmMiPKSRDfANPNz355XbVCo3BurUh5cXpiZeJGjWWuiALdTtgrAMkMMM3ETA_WBW-X74jPcBP5Nz0oU6dg">
<span class="material-symbols-outlined text-on-surface-variant dark:text-outline-variant text-sm transition-transform" id="profile-chevron">expand_more</span>
</button>
<!--Profile dropdown-->
<div class="dropdown-hidden dropdown-animate absolute right-0 top-12 w-48 bg-surface dark:bg-[#1d232b] rounded-2xl shadow-2xl border border-outline-variant/20 dark:border-white/10 overflow-hidden z-50" id="profile-dropdown">
<div class="p-md border-b border-outline-variant/10 dark:border-white/5">
<p class="font-bold text-label-md truncate dark:text-white">Alexander Pierce</p>
<p class="text-[11px] text-on-surface-variant dark:text-outline truncate">alexander.p@luntian.ai</p>
</div>
<div class="p-xs">
<a class="flex items-center gap-sm px-sm py-2 rounded-xl hover:bg-surface-container dark:hover:bg-white/5 text-label-md transition-colors dark:text-white/80" href="subcriptionPage.php">
<span class="material-symbols-outlined text-[18px]">work</span>Manage Subcribcription
                            </a>
<a class="flex items-center gap-sm px-sm py-2 rounded-xl hover:bg-surface-container dark:hover:bg-white/5 text-label-md transition-colors dark:text-white/80" href="profilePage.php">
<span class="material-symbols-outlined text-[18px]">person</span> Profile
                            </a>
<div class="h-px bg-outline-variant/10 dark:bg-white/5 my-xs"></div>
<a class="flex items-center gap-sm px-sm py-2 rounded-xl hover:bg-error/5 text-error text-label-md transition-colors" href="signinPage.php">
<span class="material-symbols-outlined text-[18px]">logout</span> Logout
                            </a>
</div>
</div>
</div>
</div>
</header>
<!-- Content Area -->
<div class="flex-1 p-4 lg:p-md flex flex-col lg:flex-row gap-md h-[calc(100vh-64px)] overflow-hidden transition-opacity duration-300" id="content-area">
<!-- Left: Intelligence Feed -->
<div class="flex-[1.5] flex flex-col gap-md min-h-0">
<div class="flex-1 relative bg-inverse-surface rounded-[2rem] overflow-hidden shadow-2xl group border border-outline-variant/10">
<img alt="Screen Feed" class="w-full h-full object-cover opacity-60 transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCdqco-t_KX-y4wgY3vhxtp00ugryff6Ug2BZ7MZmBPX6jHkGdkogEC84V-klmWNZouJ2fURQ-PMYUAho_Q6gnnFv2dCHHSEg3wYGrXrCs_WfQM1afkq38BUunQEfy6W3l9XOKOYT73KwshCx-o4cGTey7gi2cuqs3WwptQ1iGzdh2BRY2Vtb1ck9PMsE6b6iQEdGYcCV4qe5l4T9Ii340WYXmxIhDJhpRcedt1PE9JnFwQCYwWdkfv_jPk21ZRlw4rRca3kLldCSU5">
<!-- Top Badge -->
<div class="absolute top-6 left-6 flex items-center gap-2.5 px-3 py-1.5 bg-error/90 text-white rounded-full text-xs font-bold uppercase tracking-wider backdrop-blur-md shadow-lg z-10">
<span class="w-2 h-2 bg-white rounded-full animate-pulse"></span>
                        Live Session
                    </div>
<!-- AI Intelligence Layer -->
<div class="absolute inset-0 p-lg pointer-events-none">
<!-- Alert Card -->
<div class="absolute top-[20%] left-[10%] pointer-events-auto">
<div class="glass-premium rounded-2xl p-4 w-72 shadow-2xl ai-glow border-primary/20">
<div class="flex items-center gap-2 mb-3">
<div class="w-8 h-8 rounded-lg bg-primary/20 flex items-center justify-center">
<span class="material-symbols-outlined text-primary text-sm font-fill">auto_awesome</span>
</div>
<span class="text-xs font-bold text-primary tracking-tight uppercase">Performance Insight</span>
</div>
<p class="text-sm text-on-surface dark:text-white font-medium mb-4 leading-relaxed">
                                    Optimization required in <code class="bg-primary/10 px-1 rounded">useMemo</code> at line 42. Excessive re-renders detected.
                                </p>
<div class="flex gap-2">
<button class="flex-1 py-2 bg-primary text-white rounded-xl text-xs font-bold hover:brightness-110 transition-all">Optimize Now</button>
<button class="px-3 py-2 bg-white/50 dark:bg-white/10 text-on-surface dark:text-white rounded-xl text-xs font-medium hover:bg-white/80 transition-all">Dismiss</button>
</div>
</div>
</div>
<!-- Status Indicator -->
<div class="absolute bottom-[15%] right-[10%] pointer-events-auto">
<div class="glass-premium px-5 py-3 rounded-2xl shadow-xl flex items-center gap-4">
<div class="flex items-center justify-center w-10 h-10 rounded-full bg-primary/10">
<span class="material-symbols-outlined text-primary animate-spin-slow">sync</span>
</div>
<div>
<h4 class="text-xs font-bold text-on-surface dark:text-white">Cloud Sync Active</h4>
<p class="text-[10px] text-on-surface-variant dark:text-outline-variant">Processing stream data...</p>
</div>
</div>
</div>
</div>
<!-- Stream Controls -->
<div class="absolute bottom-6 left-1/2 -translate-x-1/2 glass-premium px-6 py-3 rounded-full flex items-center gap-4 shadow-2xl border-white/20">
<button class="w-11 h-11 rounded-full bg-white/10 hover:bg-white/20 text-white flex items-center justify-center transition-all">
<span class="material-symbols-outlined">mic</span>
</button>
<button class="w-11 h-11 rounded-full bg-white/10 hover:bg-white/20 text-white flex items-center justify-center transition-all">
<span class="material-symbols-outlined">videocam</span>
</button>
<div class="w-px h-6 bg-white/20 mx-1"></div>
<button class="px-6 h-11 bg-error hover:bg-error/90 text-white rounded-full font-bold text-sm flex items-center gap-2 shadow-lg shadow-error/30 transition-all">
<span class="material-symbols-outlined text-lg">call_end</span>
                            End
                        </button>
</div>
</div>
</div>
<!-- Right: Real-time Data -->
<aside class="flex-1 flex flex-col gap-md min-h-0">
<!-- Live Transcript -->
<div class="flex-1 flex flex-col bg-white dark:bg-surface-variant/5 border border-outline-variant/10 rounded-[2rem] shadow-xl overflow-hidden">
<div class="px-6 py-5 border-b border-outline-variant/10 flex justify-between items-center bg-surface-container-low/30">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary">analytics</span>
<h3 class="font-bold text-on-surface dark:text-white">Live Transcript</h3>
</div>
<div class="px-2.5 py-1 bg-primary/10 text-primary rounded-lg text-xs font-bold font-mono">00:14:32</div>
</div>
<div class="flex-1 p-6 overflow-y-auto space-y-6 custom-scrollbar">
<!-- Speaker: User -->
<div class="flex flex-col gap-1.5 items-start max-w-[85%]">
<span class="text-[10px] font-bold text-on-surface-variant/60 uppercase ml-3">Dev User • 14:28</span>
<div class="bg-primary/5 dark:bg-white/5 px-5 py-3 rounded-[1.25rem] rounded-tl-none border border-primary/10">
<p class="text-sm text-on-surface dark:text-white leading-relaxed">"I'm having trouble with this mapping function. It seems to re-render more than it should."</p>
</div>
</div>
<!-- Speaker: AI -->
<div class="flex flex-col gap-1.5 items-end ml-auto max-w-[85%]">
<span class="text-[10px] font-bold text-primary/80 uppercase mr-3">Luntian AI • 14:29</span>
<div class="bg-primary text-white px-5 py-3 rounded-[1.25rem] rounded-tr-none shadow-lg shadow-primary/20">
<p class="text-sm leading-relaxed italic opacity-95">"I've analyzed your screen. The `items` array is being recreated. Wrap it in a `useMemo` for stability."</p>
</div>
</div>
<!-- Automation Log Style Entry -->
<div class="flex items-center gap-3 text-[11px] font-mono text-on-surface-variant/50 bg-surface-container-low/20 p-2 rounded-lg border border-dashed border-outline-variant/20">
<span class="material-symbols-outlined text-sm">terminal</span>
<span class="">[SYSTEM] Logic analyzed: 84% efficiency predicted.</span>
</div>
<!-- Thinking indicator -->
<div class="flex items-center gap-3 px-3">
<div class="wave-container scale-75">
<div class="wave-bar bg-primary" style="animation-delay: 0s"></div>
<div class="wave-bar bg-primary" style="animation-delay: 0.2s"></div>
<div class="wave-bar bg-primary" style="animation-delay: 0.4s"></div>
</div>
<span class="text-xs font-medium text-primary italic">Processing visual feed...</span>
</div>
</div>
<div class="p-4 bg-surface-container-low/10 border-t border-outline-variant/10">
<div class="flex items-center gap-2 bg-white dark:bg-white/5 border border-outline-variant/20 rounded-xl px-3 py-2">
<span class="material-symbols-outlined text-outline text-lg">search</span>
<input class="bg-transparent border-none focus:ring-0 text-xs w-full text-on-surface dark:text-white" placeholder="Search transcript..." type="text">
</div>
</div>
</div>
<!-- Automation Card -->
<div class="bg-brand-gradient p-5 rounded-[2rem] shadow-2xl relative overflow-hidden group">
<div class="absolute -right-4 -top-4 w-24 h-24 bg-white/10 rounded-full blur-3xl group-hover:bg-white/20 transition-all"></div>
<div class="flex items-center gap-4 relative z-10">
<div class="w-12 h-12 rounded-2xl bg-white/20 backdrop-blur-md flex items-center justify-center">
<span class="material-symbols-outlined text-white" style="font-variation-settings: 'FILL' 1;">bolt</span>
</div>
<div>
<h4 class="font-bold text-white text-sm">Context Awareness: High</h4>
<p class="text-white/70 text-[10px]">AI confidence at 98% based on current buffer.</p>
</div>
<button class="ml-auto w-8 h-8 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center transition-all">
<span class="material-symbols-outlined text-white text-lg">arrow_forward</span>
</button>
</div>
</div>
</aside>
</div>
</main>
<!-- Premium Floating Companion -->
<div class="fixed bottom-8 right-8 w-80 glass-premium rounded-[2.5rem] shadow-[0_25px_60px_rgba(107,78,230,0.3)] flex flex-col p-4 gap-4 z-[70] transition-all border-white/40 dark:border-white/10" id="companion-pill">
<!-- Drag Handle -->
<div class="w-10 h-1 bg-outline-variant/30 rounded-full self-center cursor-move"></div>
<div class="flex items-center justify-between px-2">
<div class="flex items-center gap-2.5">
<div class="w-8 h-8 rounded-full bg-brand-gradient flex items-center justify-center text-white ai-glow">
<span class="material-symbols-outlined text-sm font-fill">navigation</span>
</div>
<span class="font-bold text-on-surface dark:text-white text-sm tracking-tight">AI Companion</span>
</div>
<div class="flex gap-1">
<span class="w-1 h-1 rounded-full bg-primary animate-pulse"></span>
<span class="w-1 h-1 rounded-full bg-primary animate-pulse" style="animation-delay: 0.2s"></span>
<span class="w-1 h-1 rounded-full bg-primary animate-pulse" style="animation-delay: 0.4s"></span>
</div>
</div>
<div class="bg-primary/5 dark:bg-white/5 rounded-3xl p-4 border border-primary/10">
<p class="text-sm text-on-surface dark:text-white font-medium leading-relaxed">
                I'm monitoring your <span class="text-primary font-extrabold">VS Code</span> window. Shall I prepare a PR summary for the last 15 mins?
            </p>
</div>
<div class="grid grid-cols-4 gap-2">
<button class="h-10 rounded-2xl bg-white dark:bg-white/5 shadow-sm flex items-center justify-center text-on-surface-variant dark:text-outline-variant hover:bg-primary/5 transition-all" title="Mute">
<span class="material-symbols-outlined text-lg">mic_off</span>
</button>
<button class="h-10 rounded-2xl bg-white dark:bg-white/5 shadow-sm flex items-center justify-center text-on-surface-variant dark:text-outline-variant hover:bg-primary/5 transition-all" title="Snapshot">
<span class="material-symbols-outlined text-lg">add_a_photo</span>
</button>
<button class="h-10 rounded-2xl bg-white dark:bg-white/5 shadow-sm flex items-center justify-center text-on-surface-variant dark:text-outline-variant hover:bg-primary/5 transition-all" title="Expand">
<span class="material-symbols-outlined text-lg">open_in_full</span>
</button>
<button class="h-10 rounded-2xl bg-primary text-white shadow-lg shadow-primary/20 hover:brightness-110 flex items-center justify-center transition-all" title="Optimize">
<span class="material-symbols-outlined text-lg">auto_fix_high</span>
</button>
</div>
</div>
<script>
        function toggleDarkMode() {
            const html = document.documentElement;
            const icon = document.querySelector('#theme-toggle-btn .material-symbols-outlined');
            if (html.classList.contains('dark')) {
                html.classList.remove('dark');
                icon.textContent = 'dark_mode';
            } else {
                html.classList.add('dark');
                icon.textContent = 'light_mode';
            }
        }

        function toggleMobileMenu() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('mobile-menu-overlay');
            const body = document.body;
            
            sidebar.classList.toggle('open');
            overlay.classList.toggle('open');
            body.classList.toggle('menu-open');
        }

        function toggleProfileDropdown() {
            const dropdown = document.getElementById('profile-dropdown');
            const chevron = document.getElementById('profile-chevron');
            const isOpen = !dropdown.classList.contains('invisible');
            
            if (isOpen) {
                dropdown.classList.add('opacity-0', 'invisible', 'scale-95');
                chevron.classList.remove('rotate-180');
            } else {
                dropdown.classList.remove('opacity-0', 'invisible', 'scale-95');
                chevron.classList.add('rotate-180');
            }
        }

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            const container = document.getElementById('profile-container');
            const dropdown = document.getElementById('profile-dropdown');
            const chevron = document.getElementById('profile-chevron');
            
            if (container && !container.contains(e.target)) {
                dropdown.classList.add('opacity-0', 'invisible', 'scale-95');
                chevron.classList.remove('rotate-180');
            }
        });

        // Draggable logic for Companion
        const pill = document.getElementById('companion-pill');
        let isDragging = false;

        pill.addEventListener("mousedown", (e) => {
            if (e.target.closest('.cursor-move') || e.target === pill) {
                isDragging = true;
                pill.style.transition = 'none';
            }
        });

        document.addEventListener("mousemove", (e) => {
            if (isDragging) {
                e.preventDefault();
                const x = e.clientX - pill.offsetWidth / 2;
                const y = e.clientY - 20;
                pill.style.left = `${x}px`;
                pill.style.top = `${y}px`;
                pill.style.bottom = 'auto';
                pill.style.right = 'auto';
            }
        });

        document.addEventListener("mouseup", () => {
            isDragging = false;
            pill.style.transition = 'all 0.3s cubic-bezier(0.4, 0, 0.2, 1)';
        });

        // Handle touch events for dragging
        pill.addEventListener("touchstart", (e) => {
            if (e.target.closest('.cursor-move') || e.target === pill) {
                isDragging = true;
                pill.style.transition = 'none';
            }
        }, { passive: false });

        document.addEventListener("touchmove", (e) => {
            if (isDragging) {
                const touch = e.touches[0];
                const x = touch.clientX - pill.offsetWidth / 2;
                const y = touch.clientY - 20;
                pill.style.left = `${x}px`;
                pill.style.top = `${y}px`;
                pill.style.bottom = 'auto';
                pill.style.right = 'auto';
            }
        }, { passive: false });

        document.addEventListener("touchend", () => {
            isDragging = false;
            pill.style.transition = 'all 0.3s cubic-bezier(0.4, 0, 0.2, 1)';
        });
    </script>


</body></html>
