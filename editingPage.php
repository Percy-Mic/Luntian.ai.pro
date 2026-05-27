<!DOCTYPE html><html class="light" lang="en"><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Luntian AI - Unified Studio</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-glass": "rgba(253, 253, 255, 0.8)",
                        "surface": "#fdf8fd",
                        "tertiary": "#822b8a",
                        "on-secondary": "#ffffff",
                        "tertiary-container": "#9e45a4",
                        "surface-tint": "#5f41da",
                        "on-error-container": "#93000a",
                        "error": "#ba1a1a",
                        "on-tertiary-fixed-variant": "#751e7e",
                        "on-primary-fixed-variant": "#4720c2",
                        "inverse-primary": "#cabeff",
                        "on-secondary-fixed": "#001f28",
                        "on-error": "#ffffff",
                        "surface-container": "#f1ecf2",
                        "primary-container": "#6b4ee6",
                        "surface-bright": "#fdf8fd",
                        "on-surface-variant": "#484555",
                        "on-tertiary-fixed": "#36003d",
                        "on-surface": "#1c1b1f",
                        "on-tertiary": "#ffffff",
                        "surface-variant": "#e5e1e7",
                        "secondary-fixed": "#b6ebff",
                        "sage-mist": "#8DA47E",
                        "surface-dim": "#ddd9de",
                        "inverse-on-surface": "#f4eff5",
                        "secondary": "#00677f",
                        "on-background": "#1c1b1f",
                        "surface-container-lowest": "#ffffff",
                        "on-primary": "#ffffff",
                        "tertiary-fixed-dim": "#ffa9ff",
                        "surface-container-highest": "#e5e1e7",
                        "outline": "#797586",
                        "on-secondary-container": "#00566a",
                        "background-cool": "#F8F9FE",
                        "secondary-fixed-dim": "#47d6ff",
                        "surface-container-low": "#f7f2f8",
                        "outline-variant": "#c9c4d7",
                        "surface-container-high": "#ebe7ec",
                        "on-tertiary-container": "#ffe2fa",
                        "background": "#fdf8fd",
                        "on-secondary-fixed-variant": "#004e60",
                        "brand-gradient": "linear-gradient(135deg, #00D2FF 0%, #6B4EE6 100%)",
                        "wet-stone": "#E1E5DC",
                        "primary-fixed-dim": "#cabeff",
                        "error-container": "#ffdad6",
                        "primary-fixed": "#e6deff",
                        "primary": "#5230cd",
                        "moss-deep": "#2D3E1A",
                        "on-primary-fixed": "#1b0062",
                        "secondary-container": "#00d2ff",
                        "inverse-surface": "#313034",
                        "tertiary-fixed": "#ffd6fb"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "max-content-width": "1280px",
                        "lg": "40px",
                        "xs": "4px",
                        "sidebar-width": "280px",
                        "xl": "64px",
                        "sm": "12px",
                        "md": "24px",
                        "base": "8px"
                    },
                    "fontFamily": {
                        "headline-lg": ["Inter"],
                        "label-md": ["Inter"],
                        "label-sm": ["Inter"],
                        "headline-xl": ["Inter"],
                        "headline-md": ["Inter"],
                        "caption-italic": ["Inter"],
                        "body-md": ["Inter"],
                        "body-lg": ["Inter"]
                    },
                    "fontSize": {
                        "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                        "label-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "500"}],
                        "label-sm": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                        "headline-xl": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                        "caption-italic": ["10px", {"lineHeight": "12px", "fontWeight": "400"}],
                        "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                        "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}]
                    }
                }
            }
        }
    </script>
<style>
        .glass-panel {
            background: rgba(253, 253, 255, 0.8);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(201, 196, 215, 0.2);
        }
        .dark .glass-panel {
            background: rgba(26, 26, 30, 0.8);
            border-color: rgba(121, 117, 134, 0.1);
        }
        .custom-scrollbar::-webkit-scrollbar {
            width: 5px;
            height: 5px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #C7C6D0;
            border-radius: 10px;
        }
        .bg-brand-gradient {
            background: linear-gradient(135deg, #00D2FF 0%, #6B4EE6 100%);
        }
        .sidebar-item-active {
            background-color: rgba(82, 48, 205, 0.08);
            color: #5230cd;
            font-weight: 700;
        }
        .dark .sidebar-item-active {
            background-color: rgba(202, 190, 255, 0.1);
            color: #cabeff;
        }
        #mobile-sidebar-overlay {
            background: rgba(0, 0, 0, 0.5);
            transition: opacity 0.3s ease;
            backdrop-filter: blur(4px);
        }
        .sidebar-transition {
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .timeline-grid {
            background-image: linear-gradient(to right, rgba(0,0,0,0.05) 1px, transparent 1px);
            background-size: 40px 100%;
        }
        .dark .timeline-grid {
            background-image: linear-gradient(to right, rgba(255,255,255,0.05) 1px, transparent 1px);
        }
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        /* Profile Dropdown & Notification Overlay */
        .dropdown-animate {
            transform-origin: top right;
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .dropdown-hidden {
            opacity: 0;
            transform: scale(0.95);
            pointer-events: none;
        }

        @media (max-width: 768px) {
            .main-content-area {
                padding-bottom: 380px; /* Account for timeline and mobile nav */
            }
            .header-labels {
                display: none;
            }
            .tab-button {
                padding-left: 0.5rem;
                padding-right: 0.5rem;
                font-size: 0.875rem;
            }
        }
    @media (max-width: 640px) {
            .tab-text {
                display: none;
            }
            .header-actions-gap {
                gap: 0.25rem !important;
            }
            .header-main-gap {
                gap: 0.5rem !important;
            }
        }
        @media (max-width: 1024px) {
            .header-labels {
                display: none;
            }
        }
    </style>
</head>
<body class="bg-background-cool dark:bg-[#121214] text-on-surface dark:text-inverse-on-surface font-body-md selection:bg-primary-fixed selection:text-on-primary-fixed overflow-hidden min-h-screen">
<!-- Mobile Sidebar Overlay -->
<div class="fixed inset-0 z-[100] opacity-0 pointer-events-none lg:hidden" id="mobile-sidebar-overlay" onclick="toggleSidebar()"></div>
<!-- Sidebar Navigation -->
<aside class="fixed left-0 top-0 bottom-0 w-sidebar-width flex flex-col p-4 z-[110] bg-white dark:bg-[#1A1A1E] border-r border-outline-variant/10 sidebar-transition -translate-x-full lg:translate-x-0" id="sidebar">
<div class="flex flex-col gap-1 px-2 py-4 mb-6">
<div class="flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-xl bg-brand-gradient flex items-center justify-center text-white shadow-lg shadow-primary/20 shrink-0">
<span class="material-symbols-outlined">navigation</span>
</div>
<div>
<h1 class="font-bold text-lg leading-tight text-on-surface dark:text-inverse-on-surface">Luntian AI</h1>
</div>
</div>
<button class="lg:hidden p-1 text-outline dark:text-outline-variant hover:bg-surface-container-low rounded-lg transition-colors" onclick="toggleSidebar()">
<span class="material-symbols-outlined">close</span>
</button>
</div>
</div>
<nav class="flex-1 space-y-1 px-1 overflow-y-auto custom-scrollbar">
<a class="flex items-center gap-3 px-4 py-3 text-outline dark:text-outline-variant hover:bg-surface-container-low dark:hover:bg-inverse-surface/30 transition-all group rounded-xl" href="index.php">
<span class="material-symbols-outlined">chat</span>
<span class="font-label-md">Chat</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-outline dark:text-outline-variant hover:bg-surface-container-low dark:hover:bg-inverse-surface/30 transition-all group rounded-xl" href="analysisPage.php">
<span class="material-symbols-outlined">computer</span>
<span class="font-label-md">Screen analysis</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-outline dark:text-outline-variant hover:bg-surface-container-low dark:hover:bg-inverse-surface/30 transition-all group rounded-xl" href="devstudioPage.php">
<span class="material-symbols-outlined">terminal</span>
<span class="font-label-md">Dev Studio</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 sidebar-item-active group rounded-xl" href="#">
<span class="material-symbols-outlined">palette</span>
<span class="font-label-md">Editing</span>
</a>
</nav>
<div class="mt-auto pt-6 space-y-1">
<button class="w-full py-3 px-4 rounded-xl bg-brand-gradient text-white font-bold text-sm shadow-lg shadow-primary/20 hover:scale-[1.02] transition-all mb-4">
            + New project
        </button>
<a class="flex items-center gap-md px-md py-sm text-on-surface-variant dark:text-outline hover:text-on-surface dark:hover:text-white hover:bg-surface-container-high dark:hover:bg-white/5 transition-all" href="helpPage.php">
<span class="material-symbols-outlined">help_outline</span>
<span class="font-label-md text-label-md">Help</span>
</a>
</div>
</aside>
<!-- Main Workspace -->
<main class="lg:ml-sidebar-width h-screen flex flex-col transition-all overflow-hidden relative">
<!-- TopAppBar -->
<header class="flex-none flex justify-between items-center px-4 md:px-6 h-16 glass-panel border-b border-outline-variant/10 z-50">
<div class="flex items-center gap-2 md:gap-4 header-main-gap">
<button class="lg:hidden p-2 -ml-2 text-outline dark:text-outline-variant hover:bg-surface-container-high dark:hover:bg-inverse-surface/50 rounded-full transition-colors" onclick="toggleSidebar()">
<span class="material-symbols-outlined">menu</span>
</button>

<nav class="ml-2 md:ml-8 flex items-center gap-1 border-l border-outline-variant/20 pl-2 md:pl-6 h-full overflow-x-auto no-scrollbar" style="scrollbar-width: none;">
<button class="px-3 md:px-4 py-5 font-label-md text-primary border-b-2 border-primary transition-all whitespace-nowrap tab-button" id="tab-editing" onclick="switchStudio('editing')"><span class="material-symbols-outlined sm:hidden">edit</span><span class="tab-text">Editing Studio</span></button>
<button class="px-3 md:px-4 py-5 font-label-md text-outline hover:text-primary transition-all whitespace-nowrap tab-button" id="tab-music" onclick="switchStudio('music')"><span class="material-symbols-outlined sm:hidden">music_note</span><span class="tab-text">Music Studio</span></button>
</nav>
</div>
<div class="flex items-center gap-1 sm:gap-3 flex-shrink-0 header-actions-gap">
<button class="p-2 rounded-full text-outline dark:text-outline-variant hover:text-primary dark:hover:text-primary-fixed transition-colors" onclick="toggleDarkMode()">
<span class="material-symbols-outlined dark:hidden">dark_mode</span>
<span class="material-symbols-outlined hidden dark:block">light_mode</span>
<button class="w-8 md:w-10 h-8 md:h-10 rounded-full flex items-center justify-center text-on-surface-variant dark:text-outline hover:bg-surface-container-high/50 dark:hover:bg-white/10 transition-colors relative" id="notification-btn">
<span class="material-symbols-outlined text-[20px] md:text-[24px]">notifications</span>
<span class="absolute top-1 right-1 w-2 h-2 bg-error rounded-full border-2 border-white dark:border-inverse-surface"></span>
</button>
<!-- Notification Mock Overlay -->
<div class="dropdown-hidden dropdown-animate fixed md:absolute left-1/2 -translate-x-1/2 md:left-auto md:translate-x-0 md:right-0 top-20 md:top-12 w-[calc(100%-32px)] md:w-80 bg-surface dark:bg-[#1d232b] rounded-2xl shadow-2xl border border-outline-variant/20 dark:border-white/10 p-md z-[60] md:z-50" id="notification-overlay">
<div class="flex items-center justify-between mb-sm">
<h3 class="font-bold text-label-md dark:text-white">Notifications</h3>
<span class="text-[11px] text-primary dark:text-inverse-primary cursor-pointer hover:underline">Mark all as read</span>
</div>
<div class="space-y-sm">
<div class="p-sm bg-primary/5 dark:bg-primary/10 rounded-xl border border-primary/10">
<p class="text-[12px] leading-tight dark:text-white/90"><span class="font-bold">System Update:</span> Ultra Core v4 is now the default engine.</p>
<p class="text-[10px] text-on-surface-variant dark:text-outline mt-1">2 mins ago</p>
</div>
</div>
</div>
</div>
<div class="w-px h-6 bg-outline-variant/30 dark:bg-white/10 mx-1"></div>
<div class="relative">
<button class="flex items-center gap-2 p-1 rounded-full hover:bg-surface-container-high dark:hover:bg-white/10 transition-colors" id="profile-btn">
<img alt="User profile" class="w-8 h-8 rounded-full border-2 border-primary/20 object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBAPyBtcfjofTeFlJP7FYUGFPT_ZFXj2jqlI2BiMaLkdoG0xEMHoMcwFgQIMgKag2Mb6j_J5kQXV2C0VY6C-zVUqS1P4pjFaIRGhxKdy2j49JN51mo1Mdhf6agbD_J76GbqpoQOAdqwUg7DObzpMWXDBDUXVNwEK3qEuhV-xmeDtw11djyiiNjB5q_s_kdHmS7cFM4p2NKxb8Pxww2G6lZkJ7sb_KzIjEyTsG31QagPe-BI9YYgy9V6l_YVrAnQt2ea7aXXZoSXPCHw"/>
</button>
<!-- Profile Dropdown -->
<div class="dropdown-hidden dropdown-animate absolute right-0 top-12 w-48 bg-surface dark:bg-[#1d232b] rounded-2xl shadow-2xl border border-outline-variant/20 dark:border-white/10 overflow-hidden z-50" id="profile-dropdown">
<div class="p-md border-b border-outline-variant/10 dark:border-white/5">
<p class="font-bold text-label-md truncate dark:text-white">Alexander Pierce</p>
<p class="text-[11px] text-on-surface-variant dark:text-outline truncate">alexander.p@luntian.ai</p>
</div>
<div class="p-xs">
<a class="flex items-center gap-sm px-sm py-2 rounded-xl hover:bg-surface-container dark:hover:bg-white/5 text-label-md transition-colors dark:text-white/80" href="#">
<span class="material-symbols-outlined text-[18px]">work</span>Manage Subcribcription
                            </a>
<a class="flex items-center gap-sm px-sm py-2 rounded-xl hover:bg-surface-container dark:hover:bg-white/5 text-label-md transition-colors dark:text-white/80" href="#">
<span class="material-symbols-outlined text-[18px]">person</span> Profile
                            </a>
<div class="h-px bg-outline-variant/10 dark:bg-white/5 my-xs"></div>
<a class="flex items-center gap-sm px-sm py-2 rounded-xl hover:bg-error/5 text-error text-label-md transition-colors" href="signin.php">
<span class="material-symbols-outlined text-[18px]">logout</span> Logout
                            </a>
</div>
</div>
</div>
</div>
</header>
<!-- Main Content Area -->
<div class="flex-1 overflow-y-auto custom-scrollbar p-4 md:p-6 pb-[320px] lg:pb-[280px] main-content-area">
<div class="max-w-max-content-width mx-auto">
<!-- Editing Studio Content -->
<div class="animate-in fade-in duration-500 block" id="editing-studio">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
<!-- AI Layer Manager (Stacks on mobile) -->
<div class="lg:col-span-4 space-y-6 order-2 lg:order-1 xl:col-span-3">
<div class="p-4 rounded-2xl bg-surface-container-low dark:bg-inverse-surface/30 flex justify-around border border-outline-variant/5 shadow-sm">
<button class="p-2 text-primary bg-primary/10 rounded-lg"><span class="material-symbols-outlined">brush</span></button>
<button class="p-2 hover:text-primary transition-colors text-outline"><span class="material-symbols-outlined">select_check_box</span></button>
<button class="p-2 hover:text-primary transition-colors text-outline"><span class="material-symbols-outlined">mask</span></button>
<button class="p-2 hover:text-primary transition-colors text-outline"><span class="material-symbols-outlined">ink_eraser</span></button>
</div>
<div class="p-6 rounded-[2rem] bg-white dark:bg-[#1A1A1E] shadow-sm border border-outline-variant/10">
<h3 class="font-label-md font-bold text-on-surface dark:text-inverse-on-surface mb-4">AI Layer Manager</h3>
<div class="space-y-4">
<div>
<label class="block font-label-sm text-outline mb-1.5">Focus Parameter</label>
<select class="w-full bg-surface-container-low dark:bg-inverse-surface border-none rounded-xl font-label-md py-2 px-4 dark:text-inverse-on-surface focus:ring-2 ring-primary/20">
<option>Background</option>
<option>Subject</option>
<option>Atmosphere</option>
</select>
</div>
<div class="space-y-2">
<div class="flex justify-between items-center"><span class="text-xs text-outline">Diffusion Intensity</span><span class="text-xs font-bold text-primary">74%</span></div>
<input class="w-full h-1.5 bg-surface-container-high rounded-lg appearance-none cursor-pointer accent-primary" type="range" value="74">
</div>
<div class="space-y-2">
<div class="flex justify-between items-center"><span class="text-xs text-outline">Neural Consistency</span><span class="text-xs font-bold text-primary">82%</span></div>
<input class="w-full h-1.5 bg-surface-container-high rounded-lg appearance-none cursor-pointer accent-primary" type="range" value="82">
</div>
</div>
</div>
</div>
<!-- Video Preview Area (Order 1 on mobile to be at top) -->
<div class="lg:col-span-8 space-y-6 order-1 lg:order-2 xl:col-span-9">
<div class="relative aspect-video rounded-[2rem] overflow-hidden bg-black shadow-xl group">
<img alt="Video Preview" class="w-full h-full object-cover opacity-90" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVwVgiMURgBxp12K4tuCo2v0MMDOS-JSEZYpbDh5M07qOmeMvCBjU4BZ5v1rfOwQZ2YMgwm2TzjAjLE0kh6poTrC6SABnp1argEvDyNiAxSh4jgWrBp9VJFFVLvhW7pwIUjsQDUH3wITq1uUS8ECBaEMXKFi3XPbGWH6521pZd6sbljH_BnpTnqS0lpnw1JNvg9YLVt9Rd_bTMRyZH-h8k8At3G23rN_n8aTSFfmu_a8TaKHbo-8M7bYPM3-K2QywEWb8R6csMo3k6">
<div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-black/40">
<button class="w-16 h-16 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white hover:scale-110 transition-transform"><span class="material-symbols-outlined text-4xl">play_arrow</span></button>
</div>
</div>
<div class="p-4 md:p-6 glass-panel rounded-[2rem] shadow-lg border border-outline-variant/10 lg:px-8">
<textarea class="w-full bg-transparent border-none focus:ring-0 font-body-lg text-on-surface dark:text-inverse-on-surface placeholder:text-outline/50 resize-none h-20" placeholder="Describe the cinematic shift..."></textarea>
<div class="flex flex-col sm:flex-row justify-between gap-4 mt-2 pt-4 border-t border-outline-variant/10">
<div class="flex gap-2 w-full sm:w-auto justify-center sm:justify-start">
<button class="p-2.5 rounded-xl text-outline hover:bg-surface-container-high transition-colors"><span class="material-symbols-outlined">image</span></button>
<button class="p-2.5 rounded-xl text-outline hover:bg-surface-container-high transition-colors"><span class="material-symbols-outlined">videocam</span></button>
<button class="p-2.5 rounded-xl text-outline hover:bg-surface-container-high transition-colors"><span class="material-symbols-outlined">mic</span></button>
</div>
<button class="w-full sm:w-auto px-8 py-3 rounded-2xl bg-brand-gradient text-white font-bold shadow-lg shadow-primary/25 hover:opacity-90 active:scale-95 transition-all text-sm sm:text-base">Generate Scene</button>
</div>
</div>
</div>
</div>
</div>
<!-- Music Studio Content -->
<div class="animate-in fade-in duration-500 hidden" id="music-studio">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
<!-- Master Config & Style (Stacks on mobile) -->
<div class="lg:col-span-4 space-y-6 order-2 lg:order-1 xl:col-span-3">
<div class="p-6 rounded-[2rem] bg-white dark:bg-[#1A1A1E] shadow-sm border border-outline-variant/10">
<h3 class="font-label-md font-bold text-on-surface dark:text-inverse-on-surface mb-4">Master Config</h3>
<div class="grid grid-cols-2 gap-4">
<div class="space-y-1.5">
<label class="text-xs text-outline font-label-sm uppercase">Tempo (BPM)</label>
<div class="flex items-center gap-2 bg-surface-container-low dark:bg-inverse-surface rounded-xl p-3 border border-outline-variant/5">
<span class="material-symbols-outlined text-sm text-primary">speed</span>
<input class="bg-transparent border-none focus:ring-0 p-0 w-full text-sm font-bold text-on-surface dark:text-inverse-on-surface" type="number" value="128">
</div>
</div>
<div class="space-y-1.5">
<label class="text-xs text-outline font-label-sm uppercase">Key</label>
<div class="flex items-center gap-2 bg-surface-container-low dark:bg-inverse-surface rounded-xl p-3 border border-outline-variant/5">
<span class="material-symbols-outlined text-sm text-primary">music_note</span>
<select class="bg-transparent border-none focus:ring-0 p-0 w-full text-sm font-bold text-on-surface dark:text-inverse-on-surface">
<option>C Major</option>
<option>A Minor</option>
<option>G Major</option>
</select>
</div>
</div>
</div>
</div>
<div class="p-6 rounded-[2rem] bg-white dark:bg-[#1A1A1E] shadow-sm border border-outline-variant/10">
<h3 class="font-label-md font-bold text-on-surface dark:text-inverse-on-surface mb-4">Acoustic Profile</h3>
<div class="space-y-3">
<button class="w-full flex items-center justify-between p-3 rounded-xl bg-primary/5 border border-primary/20 text-primary">
<div class="flex items-center gap-3"><span class="material-symbols-outlined">movie_filter</span><span class="font-label-md font-bold">Cinematic</span></div>
<span class="material-symbols-outlined text-sm">check_circle</span>
</button>
<button class="w-full flex items-center justify-between p-3 rounded-xl hover:bg-surface-container-high transition-colors text-outline">
<div class="flex items-center gap-3"><span class="material-symbols-outlined">settings_input_component</span><span class="font-label-md">Studio Neutral</span></div>
</button>
<button class="w-full flex items-center justify-between p-3 rounded-xl hover:bg-surface-container-high transition-colors text-outline">
<div class="flex items-center gap-3"><span class="material-symbols-outlined">hearing</span><span class="font-label-md">Warm Analog</span></div>
</button>
</div>
</div>
</div>
<!-- Stem Mixer (Order 1 on mobile) -->
<div class="lg:col-span-8 space-y-6 order-1 lg:order-2 xl:col-span-9">
<div class="p-6 md:p-8 rounded-[2rem] bg-white dark:bg-[#1A1A1E] shadow-sm border border-outline-variant/10">
<div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-8">
<h3 class="font-label-md font-bold text-on-surface dark:text-inverse-on-surface">Stem Mixer</h3>
<div class="flex gap-2 w-full sm:w-auto">
<button class="p-2 rounded-lg bg-surface-container-high flex-1 sm:flex-none hover:bg-outline-variant/20 transition-colors"><span class="material-symbols-outlined text-sm">settings_input_component</span></button>
<button class="px-4 py-1.5 rounded-lg bg-primary text-white text-xs font-bold flex-1 sm:flex-none hover:opacity-90 transition-opacity">Sync All</button>
</div>
</div>
<div class="grid grid-cols-3 gap-4 md:gap-8 overflow-x-auto pb-2 no-scrollbar">
<!-- Rhythm Stem -->
<div class="flex flex-col items-center gap-4 min-w-[60px]">
<div class="h-32 md:h-48 w-4 bg-surface-container-high rounded-full relative overflow-hidden flex flex-col justify-end">
<div class="absolute inset-0 bg-gradient-to-t from-primary/10 to-transparent"></div>
<div class="w-full bg-primary rounded-full transition-all duration-300" style="height: 65%;"></div>
<div class="absolute top-1/4 left-1/2 -translate-x-1/2 w-8 h-2 bg-white dark:bg-inverse-surface border border-outline shadow-sm rounded-full z-10 cursor-ns-resize"></div>
</div>
<div class="text-center">
<span class="material-symbols-outlined text-primary mb-1">reorder</span>
<p class="text-[10px] md:text-xs font-bold whitespace-nowrap">Rhythm</p>
</div>
</div>
<!-- Ambient Stem -->
<div class="flex flex-col items-center gap-4 min-w-[60px]">
<div class="h-32 md:h-48 w-4 bg-surface-container-high rounded-full relative overflow-hidden flex flex-col justify-end">
<div class="absolute inset-0 bg-gradient-to-t from-secondary/10 to-transparent"></div>
<div class="w-full bg-secondary rounded-full transition-all duration-300" style="height: 40%;"></div>
<div class="absolute top-1/2 left-1/2 -translate-x-1/2 w-8 h-2 bg-white dark:bg-inverse-surface border border-outline shadow-sm rounded-full z-10 cursor-ns-resize"></div>
</div>
<div class="text-center">
<span class="material-symbols-outlined text-secondary mb-1">waves</span>
<p class="text-[10px] md:text-xs font-bold whitespace-nowrap">Ambient</p>
</div>
</div>
<!-- Resonance Stem -->
<div class="flex flex-col items-center gap-4 min-w-[60px]">
<div class="h-32 md:h-48 w-4 bg-surface-container-high rounded-full relative overflow-hidden flex flex-col justify-end">
<div class="absolute inset-0 bg-gradient-to-t from-tertiary/10 to-transparent"></div>
<div class="w-full bg-tertiary rounded-full transition-all duration-300" style="height: 85%;"></div>
<div class="absolute top-[10%] left-1/2 -translate-x-1/2 w-8 h-2 bg-white dark:bg-inverse-surface border border-outline shadow-sm rounded-full z-10 cursor-ns-resize"></div>
</div>
<div class="text-center">
<span class="material-symbols-outlined text-tertiary mb-1">graphic_eq</span>
<p class="text-[10px] md:text-xs font-bold whitespace-nowrap">Resonance</p>
</div>
</div>
</div>
</div>
<div class="p-4 md:p-6 glass-panel rounded-[2rem] shadow-lg border border-outline-variant/10 lg:px-8">
<textarea class="w-full bg-transparent border-none focus:ring-0 font-body-lg text-on-surface dark:text-inverse-on-surface placeholder:text-outline/50 resize-none h-16" placeholder="Direct the sonics... 'More percussive audio layers'"></textarea>
<div class="flex flex-col sm:flex-row justify-between gap-4 mt-2 pt-4 border-t border-outline-variant/10">
<div class="flex gap-2 w-full sm:w-auto justify-center">
<button class="p-2.5 rounded-xl text-outline hover:bg-surface-container-high transition-colors"><span class="material-symbols-outlined">library_music</span></button>
<button class="p-2.5 rounded-xl text-outline hover:bg-surface-container-high transition-colors"><span class="material-symbols-outlined">equalizer</span></button>
</div>
<button class="w-full sm:w-auto px-8 py-3 rounded-2xl bg-brand-gradient text-white font-bold shadow-lg shadow-primary/25 hover:opacity-90 active:scale-95 transition-all text-sm sm:text-base">Regenerate Audio</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Timeline Editor (Bottom Fixed Panel) -->
<div class="flex-none fixed bottom-0 left-0 lg:left-sidebar-width right-0 bg-white dark:bg-[#1A1A1E] border-t border-outline-variant/10 shadow-2xl z-[60]">
<!-- Timeline Toolbar -->
<div class="flex flex-col sm:flex-row items-center justify-between px-4 md:px-6 py-2 bg-surface-container-low dark:bg-[#121214] border-b border-outline-variant/5 gap-2">
<div class="flex items-center gap-1 overflow-x-auto whitespace-nowrap pb-1 w-full sm:w-auto no-scrollbar" id="timelineTools">
<button class="flex items-center gap-1 px-2 py-1.5 rounded-lg hover:bg-surface-container-high text-outline hover:text-primary transition-all">
<span class="material-symbols-outlined text-lg">content_cut</span>
<span class="text-[10px] uppercase font-bold tracking-tighter sm:normal-case sm:text-xs">Split</span>
</button>
<button class="flex items-center gap-1 px-2 py-1.5 rounded-lg hover:bg-surface-container-high text-outline hover:text-primary transition-all">
<span class="material-symbols-outlined text-lg">straighten</span>
<span class="text-[10px] uppercase font-bold tracking-tighter sm:normal-case sm:text-xs">Trim</span>
</button>
<button class="flex items-center gap-1 px-2 py-1.5 rounded-lg hover:bg-surface-container-high text-outline hover:text-primary transition-all">
<span class="material-symbols-outlined text-lg">speed</span>
<span class="text-[10px] uppercase font-bold tracking-tighter sm:normal-case sm:text-xs">Speed</span>
</button>
<button class="flex items-center gap-1 px-2 py-1.5 rounded-lg hover:bg-surface-container-high text-outline hover:text-primary transition-all">
<span class="material-symbols-outlined text-lg">auto_fix_high</span>
<span class="text-[10px] uppercase font-bold tracking-tighter sm:normal-case sm:text-xs">FX</span>
</button>
</div>
<!-- Transport Controls -->
<div class="flex items-center gap-4 w-full sm:w-auto justify-between sm:justify-center">
<div class="flex items-center gap-2">
<button class="p-1 rounded-lg hover:bg-surface-container-high text-outline transition-colors"><span class="material-symbols-outlined text-lg">skip_previous</span></button>
<button class="w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center shadow-md hover:scale-110 active:scale-95 transition-all"><span class="material-symbols-outlined text-lg">play_arrow</span></button>
<button class="p-1 rounded-lg hover:bg-surface-container-high text-outline transition-colors"><span class="material-symbols-outlined text-lg">skip_next</span></button>
</div>
<div class="font-mono text-[10px] font-bold text-primary dark:text-primary-fixed bg-primary/10 dark:bg-primary/20 px-2 py-1 rounded-lg">
                    00:00:15 / 00:01:30
                </div>
</div>
<div class="hidden sm:flex items-center gap-2">
<button class="p-1 text-outline hover:text-primary transition-colors"><span class="material-symbols-outlined text-lg">zoom_in</span></button>
<button class="p-1 text-outline hover:text-primary transition-colors"><span class="material-symbols-outlined text-lg">zoom_out</span></button>
</div>
</div>
<!-- Tracks Area -->
<div class="h-32 sm:h-40 md:h-52 lg:h-64 overflow-y-auto overflow-x-auto custom-scrollbar relative timeline-scroll-container lg:px-6">
<!-- Timeline Ruler -->
<div class="sticky top-0 h-6 w-full border-b border-outline-variant/5 flex items-end timeline-grid bg-white dark:bg-[#1A1A1E] z-10">
<div class="flex h-full text-[9px] text-outline/50 font-mono items-center gap-10 px-4 min-w-[1200px]">
<span class="">00:00</span><span class="">00:05</span><span class="">00:10</span><span class="">00:15</span><span class="">00:20</span><span class="">00:25</span><span class="">00:30</span><span class="">00:35</span><span class="">00:40</span><span class="">00:45</span><span class="">00:50</span><span class="">00:55</span><span class="">01:00</span>
</div>
</div>
<!-- Playhead -->
<div class="absolute top-0 bottom-0 left-[20%] lg:left-[35%] w-px bg-primary z-20 pointer-events-none">
<div class="absolute -top-1 -left-1.5 w-3 h-3 bg-primary rotate-45"></div>
</div>
<!-- Tracks -->
<div class="p-3 space-y-3 min-w-[1200px]" id="timelineTracks">
<!-- Video/Master Track -->
<div class="flex gap-3">
<div class="w-24 sm:w-32 md:w-40 flex-shrink-0 flex flex-col justify-center px-2 bg-surface-container dark:bg-inverse-surface rounded-lg border border-outline-variant/10">
<span class="text-[9px] sm:text-xs font-bold truncate" id="track-main-label">Main Scene</span>
<div class="flex gap-1 mt-1">
<span class="material-symbols-outlined text-[12px] sm:text-sm text-outline">visibility</span>
<span class="material-symbols-outlined text-[12px] sm:text-sm text-outline">lock</span>
</div>
</div>
<div class="flex-1 h-10 sm:h-12 md:h-16 rounded-lg border border-outline-variant/20 overflow-hidden relative bg-primary/10">
<div class="absolute inset-0 flex items-center px-1 overflow-hidden pointer-events-none opacity-40" id="timeline-visuals">
<img class="h-6 sm:h-8 md:h-12 w-12 sm:w-16 md:w-20 object-cover rounded-md mx-0.5 border border-white/20" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVwVgiMURgBxp12K4tuCo2v0MMDOS-JSEZYpbDh5M07qOmeMvCBjU4BZ5v1rfOwQZ2YMgwm2TzjAjLE0kh6poTrC6SABnp1argEvDyNiAxSh4jgWrBp9VJFFVLvhW7pwIUjsQDUH3wITq1uUS8ECBaEMXKFi3XPbGWH6521pZd6sbljH_BnpTnqS0lpnw1JNvg9YLVt9Rd_bTMRyZH-h8k8At3G23rN_n8aTSFfmu_a8TaKHbo-8M7bYPM3-K2QywEWb8R6csMo3k6">
</div>
<div class="absolute inset-0 hidden" id="timeline-waveform-main">
<svg class="w-full h-full text-primary opacity-40" preserveAspectRatio="none" viewBox="0 0 1000 100">
<path d="M0 50 L10 20 L20 80 L30 10 L40 90 L50 40 L60 60 L70 30 L80 70 L90 20 L100 50 V50" fill="none" stroke="currentColor" stroke-width="2"></path>
</svg>
</div>
</div>
</div>
<!-- Audio/Stem Track -->
<div class="flex gap-3">
<div class="w-24 sm:w-32 md:w-40 flex-shrink-0 flex flex-col justify-center px-2 bg-surface-container dark:bg-inverse-surface rounded-lg border border-outline-variant/10">
<span class="text-[9px] sm:text-xs font-bold truncate" id="track-sub-label">Ambient Audio</span>
<div class="flex gap-1 mt-1">
<span class="material-symbols-outlined text-[12px] sm:text-sm text-outline">volume_up</span>
<span class="material-symbols-outlined text-[12px] sm:text-sm text-outline">lock</span>
</div>
</div>
<div class="flex-1 h-10 sm:h-12 md:h-16 rounded-lg border border-outline-variant/20 overflow-hidden relative bg-secondary/10">
<svg class="absolute inset-0 w-full h-full text-secondary opacity-60" preserveAspectRatio="none" viewBox="0 0 1000 100">
<path d="M0 50 Q 25 10, 50 50 T 100 50 T 150 50 T 200 50 T 250 50 T 300 50 T 350 50 T 400 50 T 450 50 T 500 50 T 550 50 T 600 50 T 650 50 T 700 50 T 750 50 T 800 50 T 850 50 T 900 50 T 950 50 T 1000 50" fill="none" stroke="currentColor" stroke-width="1.5"></path>
</svg>
</div>
</div>
</div>
</div>
</div>
</main>
<script>
    const profileBtn = document.getElementById('profile-btn');
    const profileDropdown = document.getElementById('profile-dropdown');
    const notificationBtn = document.getElementById('notification-btn');
    const notificationOverlay = document.getElementById('notification-overlay');

    // Dropdown Toggle Utility
        function toggleDropdown(dropdown, trigger) {
            const isHidden = dropdown.classList.contains('dropdown-hidden');
            
            // Close others first
            document.querySelectorAll('.dropdown-animate').forEach(el => {
                if (el !== dropdown) el.classList.add('dropdown-hidden');
            });

            if (isHidden) {
                dropdown.classList.remove('dropdown-hidden');
            } else {
                dropdown.classList.add('dropdown-hidden');
            }
        }

        profileBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            toggleDropdown(profileDropdown, profileBtn);
        });

        notificationBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            toggleDropdown(notificationOverlay, notificationBtn);
        });

        // Global Click to close dropdowns
        document.addEventListener('click', (e) => {
            if (profileDropdown && !profileDropdown.contains(e.target) && profileBtn && !profileBtn.contains(e.target)) {
                profileDropdown.classList.add('dropdown-hidden');
            }
            if (notificationOverlay && !notificationOverlay.contains(e.target) && notificationBtn && !notificationBtn.contains(e.target)) {
                notificationOverlay.classList.add('dropdown-hidden');
            }
        });

    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('mobile-sidebar-overlay');
        const isHidden = sidebar.classList.contains('-translate-x-full');
        if (isHidden) {
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('opacity-0', 'pointer-events-none');
            overlay.classList.add('opacity-100', 'pointer-events-auto');
        } else {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('opacity-0', 'pointer-events-none');
            overlay.classList.remove('opacity-100', 'pointer-events-auto');
        }
    }

    function toggleDarkMode() {
        document.documentElement.classList.toggle('dark');
    }

    function switchStudio(mode) {
        const editStudio = document.getElementById('editing-studio');
        const musicStudio = document.getElementById('music-studio');
        const tabEdit = document.getElementById('tab-editing');
        const tabMusic = document.getElementById('tab-music');
        
        const trackMainLabel = document.getElementById('track-main-label');
        const trackSubLabel = document.getElementById('track-sub-label');
        const visualClips = document.getElementById('timeline-visuals');
        const mainWaveform = document.getElementById('timeline-waveform-main');

        if (mode === 'music') {
            editStudio.classList.add('hidden');
            musicStudio.classList.remove('hidden');
            
            tabMusic.classList.add('text-primary', 'border-b-2', 'border-primary');
            tabMusic.classList.remove('text-outline');
            tabEdit.classList.remove('text-primary', 'border-b-2', 'border-primary');
            tabEdit.classList.add('text-outline');

            trackMainLabel.textContent = 'Master Output';
            trackSubLabel.textContent = 'Synthesis Stem';
            visualClips.classList.add('hidden');
            mainWaveform.classList.remove('hidden');
        } else {
            musicStudio.classList.add('hidden');
            editStudio.classList.remove('hidden');
            
            tabEdit.classList.add('text-primary', 'border-b-2', 'border-primary');
            tabEdit.classList.remove('text-outline');
            tabMusic.classList.remove('text-primary', 'border-b-2', 'border-primary');
            tabMusic.classList.add('text-outline');

            trackMainLabel.textContent = 'Main Scene';
            trackSubLabel.textContent = 'Ambient Audio';
            visualClips.classList.remove('hidden');
            mainWaveform.classList.add('hidden');
        }
    }

    window.addEventListener('resize', () => {
        if (window.innerWidth >= 1024) {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('mobile-sidebar-overlay');
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('opacity-0', 'pointer-events-none');
        }
    });
</script>


</body></html>