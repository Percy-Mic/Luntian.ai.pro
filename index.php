<!DOCTYPE html>

<html class="dark" lang="en" style=""><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta name="luntian-api-base" content=""/>
<title>Luntian AI - Chat</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "background": "#fdf8fd",
                        "surface-container-high": "#ebe7ec",
                        "surface-variant": "#e5e1e7",
                        "on-secondary-container": "#00566a",
                        "on-surface": "#1c1b1f",
                        "tertiary-fixed": "#ffd6fb",
                        "on-primary-fixed": "#1b0062",
                        "inverse-primary": "#cabeff",
                        "surface": "#fdf8fd",
                        "on-primary-fixed-variant": "#4720c2",
                        "on-error": "#ffffff",
                        "on-tertiary-fixed-variant": "#751e7e",
                        "primary-fixed-dim": "#cabeff",
                        "secondary": "#00677f",
                        "error-container": "#ffdad6",
                        "outline": "#797586",
                        "primary-fixed": "#e6deff",
                        "tertiary": "#822b8a",
                        "surface-tint": "#5f41da",
                        "error": "#ba1a1a",
                        "secondary-fixed-dim": "#47d6ff",
                        "primary-container": "#6b4ee6",
                        "surface-container-lowest": "#ffffff",
                        "sage-mist": "#8DA47E",
                        "moss-deep": "#2D3E1A",
                        "brand-gradient": "linear-gradient(135deg, #00D2FF 0%, #6B4EE6 100%)",
                        "on-secondary-fixed": "#001f28",
                        "wet-stone": "#E1E5DC",
                        "secondary-container": "#00d2ff",
                        "on-primary-container": "#eee7ff",
                        "surface-container-low": "#f7f2f8",
                        "background-cool": "#F8F9FE",
                        "on-error-container": "#93000a",
                        "inverse-on-surface": "#f4eff5",
                        "on-secondary-fixed-variant": "#004e60",
                        "on-secondary": "#ffffff",
                        "surface-bright": "#fdf8fd",
                        "on-tertiary": "#ffffff",
                        "surface-container": "#f1ecf2",
                        "tertiary-fixed-dim": "#ffa9ff",
                        "surface-container-highest": "#e5e1e7",
                        "on-tertiary-container": "#ffe2fa",
                        "surface-glass": "rgba(253, 253, 255, 0.8)",
                        "tertiary-container": "#9e45a4",
                        "outline-variant": "#c9c4d7",
                        "on-surface-variant": "#484555",
                        "secondary-fixed": "#b6ebff",
                        "on-primary": "#ffffff",
                        "on-background": "#1c1b1f",
                        "surface-dim": "#ddd9de",
                        "on-tertiary-fixed": "#36003d",
                        "primary": "#5230cd",
                        "inverse-surface": "#0b0e14"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "base": "8px",
                        "lg": "40px",
                        "max-content-width": "896px",
                        "sm": "12px",
                        "md": "24px",
                        "xl": "64px",
                        "xs": "4px",
                        "sidebar-width": "320px"
                    },
                    "fontFamily": {
                        "headline-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "label-md": ["Inter"],
                        "headline-lg": ["Inter"],
                        "headline-xl": ["Inter"],
                        "label-sm": ["Inter"],
                        "caption-italic": ["Inter"],
                        "body-md": ["Inter"]
                    },
                    "fontSize": {
                        "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                        "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                        "label-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "500"}],
                        "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                        "headline-xl": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "label-sm": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                        "caption-italic": ["10px", {"lineHeight": "12px", "fontWeight": "400"}],
                        "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}]
                    }
                }
            }
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .bg-brand-gradient { background: linear-gradient(135deg, #00D2FF 0%, #6B4EE6 100%); }
        .scrollbar-thin::-webkit-scrollbar { width: 4px; }
        .scrollbar-thin::-webkit-scrollbar-track { background: transparent; }
        .scrollbar-thin::-webkit-scrollbar-thumb { background: #C7C6D0; border-radius: 4px; }
        .dark .scrollbar-thin::-webkit-scrollbar-thumb { background: #313034; }
        .glass-panel { backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); }
        .neural-bg {
            background-image: radial-gradient(circle at 2px 2px, rgba(107, 78, 230, 0.05) 1px, transparent 0);
            background-size: 32px 32px;
        }
        .dark .neural-bg {
            background-image: radial-gradient(circle at 2px 2px, rgba(107, 78, 230, 0.1) 1px, transparent 0);
        }
        
        #sidebar.mobile-hidden {
            transform: translateX(-100%);
        }
        
        @media (min-width: 1024px) {
            #sidebar.mobile-hidden {
                transform: translateX(0);
            }
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
    </style>
</head>
<body class="bg-background dark:bg-inverse-surface text-on-surface dark:text-inverse-on-surface font-body-md h-screen neural-bg transition-colors duration-300">
<!-- Sidebar Overlay (Mobile Only) -->
<div class="fixed inset-0 bg-black/50 z-40 hidden transition-opacity duration-200 opacity-0 pointer-events-none" id="sidebar-overlay"></div>
<!-- SideNavBar -->
<aside class="fixed left-0 top-0 bottom-0 w-[320px] flex flex-col p-sm border-r border-outline-variant/10 dark:border-white/5 z-50 bg-surface-container-low dark:bg-[#161b22] transition-transform duration-300 ease-in-out mobile-hidden lg:translate-x-0 h-screen overflow-y-auto scrollbar-thin" id="sidebar">
<div class="flex items-center justify-between mb-lg px-xs">
<div class="flex items-center gap-sm">
<div class="w-10 h-10 rounded-xl bg-brand-gradient flex items-center justify-center text-white shadow-lg shadow-primary/20 shrink-0">
<span class="material-symbols-outlined">navigation</span>
</div>
<div>
<div class="flex items-center gap-1">
<h1 class="font-headline-sm text-[18px] font-bold text-on-surface dark:text-white">Luntian AI</h1>
</div>
<p class="text-label-sm text-on-surface-variant dark:text-outline">Precision Intelligence</p>
</div>
</div>
<button class="lg:hidden fixed top-4 right-4 w-10 h-10 flex items-center justify-center text-on-surface-variant dark:text-outline hover:bg-surface-container-high dark:hover:bg-white/10 rounded-full z-[110] bg-surface-container-low/80 dark:bg-[#161b22]/80 backdrop-blur-sm" id="close-sidebar">
<span class="material-symbols-outlined">close</span>
</button>
</div>
<button class="mb-md mx-xs py-sm px-md flex items-center justify-center gap-xs rounded-full bg-brand-gradient text-white font-label-md shadow-lg shadow-primary/20 hover:brightness-110 transition-all active:scale-95">
<span class="material-symbols-outlined">add</span>
    New Chat
</button>
<nav class="flex-1 space-y-1">
<a class="flex items-center gap-md px-md py-sm bg-primary/10 dark:bg-primary/20 text-primary dark:text-inverse-primary font-bold rounded-lg transition-all" href="#">
<span class="material-symbols-outlined">chat</span>
<span class="font-label-md text-label-md">Chat</span>
</a>
<a class="flex items-center gap-md px-md py-sm text-on-surface-variant dark:text-outline hover:text-on-surface dark:hover:text-white hover:bg-surface-container-high dark:hover:bg-white/5 transition-all" href="analysisPage.php">
<span class="material-symbols-outlined">laptop</span>
<span class="font-label-md text-label-md">Screen analysis</span>
</a>
<a class="flex items-center gap-md px-md py-sm text-on-surface-variant dark:text-outline hover:text-on-surface dark:hover:text-white hover:bg-surface-container-high dark:hover:bg-white/5 transition-all" href="devstudiopage.php">
<span class="material-symbols-outlined">terminal</span>
<span class="font-label-md text-label-md">Dev Studio</span>
</a>
<a class="flex items-center gap-md px-md py-sm text-on-surface-variant dark:text-outline hover:text-on-surface dark:hover:text-white hover:bg-surface-container-high dark:hover:bg-white/5 transition-all" href="editingpage.php">
<span class="material-symbols-outlined">palette</span>
<span class="font-label-md text-label-md">Editing</span>
</a>
</nav>
<div class="lg:hidden mt-md px-xs">
<h2 class="text-[10px] font-bold text-on-surface-variant dark:text-outline uppercase tracking-widest mb-sm px-md">Recent Activity</h2>
<div class="space-y-1">
    <div class="flex items-center justify-between p-sm rounded-xl bg-surface-container-high dark:bg-white/5 group relative" onclick="switchActivity(this)">
        <div class="flex items-center gap-sm overflow-hidden">
            <span class="material-symbols-outlined text-primary text-[20px] shrink-0">chat_bubble</span>
            <div class="overflow-hidden"><p class="text-label-sm font-bold truncate">Novel summary of Noli me tangere</p><p class="text-[10px] text-on-surface-variant dark:text-outline">2 hours ago</p></div>
        </div><button class="p-1 hover:bg-black/5 dark:hover:bg-white/10 rounded-full z-10" onclick="requestDelete(event, this.closest('.group'))"><span class="material-symbols-outlined text-[18px] text-on-surface-variant dark:text-outline">close</span></button></div><div class="flex items-center justify-between p-sm rounded-xl group relative" onclick="switchActivity(this)">
<div class="flex items-center gap-sm overflow-hidden">
    <span class="material-symbols-outlined text-on-surface-variant dark:text-outline text-[20px] shrink-0">chat_bubble</span>
    <div class="overflow-hidden">
        <p class="text-label-sm font-medium truncate text-on-surface-variant dark:text-outline">Dollars to Peso conversion</p>
        <p class="text-[10px] text-on-surface-variant dark:text-outline">Yesterday</p>
    </div>
</div>
<button class="p-1 hover:bg-black/5 dark:hover:bg-white/10 rounded-full z-10" onclick="requestDelete(event, this.closest('.group'))"><span class="material-symbols-outlined text-[18px] text-on-surface-variant dark:text-outline">close</span></button>
</div>
</div>
</div>

<div class="mt-auto border-t border-outline-variant/10 dark:border-white/5 pt-sm space-y-1">
<button class="w-full flex items-center gap-md px-md py-sm text-on-surface-variant dark:text-outline hover:text-on-surface dark:hover:text-white hover:bg-surface-container-high dark:hover:bg-white/5 transition-all rounded-lg" id="theme-toggle">
<span class="material-symbols-outlined hidden dark:block">light_mode</span>
<span class="material-symbols-outlined dark:hidden">dark_mode</span>
<span class="font-label-md text-label-md">Appearance</span>
</button>
<a class="flex items-center gap-md px-md py-sm text-on-surface-variant dark:text-outline hover:text-on-surface dark:hover:text-white hover:bg-surface-container-high dark:hover:bg-white/5 transition-all" href="helpPage.php">
<span class="material-symbols-outlined">help_outline</span>
<span class="font-label-md text-label-md">Help</span>
</a>
</div>
</aside>
<!-- Main Wrapper -->
<div class="lg:ml-[320px] h-screen flex flex-col relative overflow-hidden transition-all duration-300">
<!-- TopAppBar -->
<header class="fixed top-0 right-0 left-0 lg:left-[320px] h-16 flex items-center justify-between px-sm md:px-md z-40 bg-surface-glass dark:bg-inverse-surface/80 backdrop-blur-md shadow-[0_4px_24px_-4px_rgba(107,78,230,0.1)] border-b border-outline-variant/10 dark:border-white/5">
<div class="flex items-center gap-sm md:gap-md overflow-hidden flex-1">
<button class="lg:hidden w-10 h-10 rounded-full flex items-center justify-center text-on-surface-variant dark:text-outline hover:bg-surface-container-high/50 dark:hover:bg-white/10 shrink-0" id="open-sidebar">
<span class="material-symbols-outlined">menu</span>
</button>
<div class="relative w-full max-w-[400px] group hidden sm:block">
<span class="absolute left-md top-1/2 -translate-y-1/2 text-on-surface-variant dark:text-outline material-symbols-outlined transition-colors group-focus-within:text-primary">search</span>
<input class="w-full bg-surface-container-low dark:bg-[#161b22] border-none rounded-full py-2 pl-xl pr-md text-label-md focus:ring-2 focus:ring-primary/20 dark:focus:ring-primary/40 text-on-surface dark:text-white placeholder:text-on-surface-variant/50 dark:placeholder:text-outline/50" id="search-input" placeholder="Search knowledge base..." type="text"/>
</div>
</div>
<div class="flex items-center gap-2 md:gap-md shrink-0">
<span class="hidden xl:flex items-center text-label-md font-medium text-primary dark:text-inverse-primary bg-primary/10 dark:bg-primary/20 px-md py-1 rounded-full whitespace-nowrap">
                    Neural Link: Active
                </span>
<div class="flex items-center gap-xs relative">
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
<a class="flex items-center gap-sm px-sm py-2 rounded-xl hover:bg-surface-container dark:hover:bg-white/5 text-label-md transition-colors dark:text-white/80" href="subscriptionPage.php">
<span class="material-symbols-outlined text-[18px]">work</span>Manage Subscription
                            </a>
<a class="flex items-center gap-sm px-sm py-2 rounded-xl hover:bg-surface-container dark:hover:bg-white/5 text-label-md transition-colors dark:text-white/80" href="#">
<span class="material-symbols-outlined text-[18px]">person</span> Profile
                            </a>
<div class="h-px bg-outline-variant/10 dark:bg-white/5 my-xs"></div>
<a class="flex items-center gap-sm px-sm py-2 rounded-xl hover:bg-error/5 text-error text-label-md transition-colors" href="#" id="logout-link">
<span class="material-symbols-outlined text-[18px]">logout</span> Logout
                            </a>
</div>
</div>
</div>
</div>
</header>
<!-- Content Canvas -->
<main class="mt-16 flex-1 flex overflow-hidden">
<!-- Recent Chats Sidebar (Secondary) -->
<aside class="w-72 bg-background dark:bg-inverse-surface border-r border-outline-variant/10 dark:border-white/5 flex flex-col hidden xl:flex h-screen overflow-y-auto">
<div class="p-md">
<h2 class="text-label-sm font-bold text-on-surface-variant dark:text-outline uppercase tracking-wider mb-sm">Recent Activity</h2>
<div class="space-y-xs overflow-y-auto max-h-[calc(100vh-280px)] scrollbar-thin pr-xs">
<div class="p-sm rounded-xl bg-surface-container-low dark:bg-white/5 border border-transparent hover:border-primary/20 dark:hover:border-primary/40 cursor-pointer transition-all group relative flex items-center justify-between" onclick="switchActivity(this)">
<div class="flex items-start gap-sm overflow-hidden">
<span class="material-symbols-outlined text-primary dark:text-inverse-primary text-[20px]">chat_bubble</span>
<div class="flex-1 overflow-hidden">
<p class="text-label-md font-bold truncate dark:text-white">Novel summary of Noli me tangere</p>
<p class="text-caption-italic text-on-surface-variant dark:text-outline truncate">2 hours ago</p>
</div>
</div>
<button class="opacity-0 group-hover:opacity-100 p-1 hover:bg-primary/10 dark:hover:bg-white/10 rounded-full transition-opacity z-10" onclick="requestDelete(event, this.closest('.p-sm'))">
<span class="material-symbols-outlined text-[18px] dark:text-outline">close</span>
</button>
</div>
<div class="p-sm rounded-xl hover:bg-surface-container dark:hover:bg-white/5 transition-all cursor-pointer group relative flex items-center justify-between" onclick="switchActivity(this)">
<div class="flex items-start gap-sm overflow-hidden">
<span class="material-symbols-outlined text-on-surface-variant dark:text-outline text-[20px]">chat_bubble</span>
<div class="flex-1 overflow-hidden">
<p class="text-label-md font-medium truncate dark:text-white/80">Dollars to Peso conversion</p>
<p class="text-caption-italic text-on-surface-variant dark:text-outline truncate">Yesterday</p>
</div>
</div>
<button class="opacity-0 group-hover:opacity-100 p-1 hover:bg-black/5 dark:hover:bg-white/10 rounded-full transition-opacity z-10" onclick="requestDelete(event, this.closest('.p-sm'))">
<span class="material-symbols-outlined text-[18px] dark:text-outline">close</span>
</button>
</div>
</div>
</div>
</aside>
<!-- Chat Workspace -->
<section class="flex-1 flex flex-col bg-background-cool dark:bg-[#080a0f] relative w-full overflow-hidden">
<!-- Chat Feed -->
<div class="flex-1 overflow-y-auto px-4 md:px-md py-8 md:py-xl scrollbar-thin" id="chat-feed">
<div class="max-w-max-content-width mx-auto space-y-8 md:space-y-xl">
<!-- Welcome / Start State -->
<div class="text-center space-y-md py-lg md:py-20">
<div class="inline-flex items-center justify-center w-16 md:w-20 h-16 md:h-20 rounded-3xl bg-white dark:bg-[#1d232b] shadow-xl shadow-primary/10 dark:shadow-black/40 mb-sm mx-auto border border-transparent dark:border-white/5">
<span class="material-symbols-outlined text-headline-lg md:text-headline-xl text-primary dark:text-inverse-primary" style="font-variation-settings: 'FILL' 1;">auto_awesome</span>
</div>
<h2 class="font-headline-md md:font-headline-lg text-on-surface dark:text-white px-4">Good Morning, Alexander.</h2>
<p class="font-body-md md:font-body-lg text-on-surface-variant dark:text-outline max-w-xl mx-auto px-4">How can I assist your creative journey today?</p>
<!-- Action Chips -->
<div class="flex flex-wrap justify-center gap-xs md:gap-sm mt-lg px-4">
<button class="flex items-center gap-xs px-3 md:px-md py-2 md:py-3 rounded-2xl bg-white dark:bg-[#1d232b] border border-outline-variant/10 dark:border-white/10 shadow-sm hover:shadow-md hover:border-primary/20 dark:hover:border-primary/40 transition-all group">
<span class="material-symbols-outlined text-primary dark:text-inverse-primary text-[20px] md:text-[24px]">photo</span>
<span class="font-label-md text-xs md:text-sm dark:text-white/80">Image</span>
</button>
<button class="flex items-center gap-xs px-3 md:px-md py-2 md:py-3 rounded-2xl bg-white dark:bg-[#1d232b] border border-outline-variant/10 dark:border-white/10 shadow-sm hover:shadow-md hover:border-primary/20 dark:hover:border-primary/40 transition-all group">
<span class="material-symbols-outlined text-secondary dark:text-secondary-fixed-dim text-[20px] md:text-[24px]">call</span>
<span class="font-label-md text-xs md:text-sm dark:text-white/80">Call</span>
</button>
<button class="flex items-center gap-xs px-3 md:px-md py-2 md:py-3 rounded-2xl bg-white dark:bg-[#1d232b] border border-outline-variant/10 dark:border-white/10 shadow-sm hover:shadow-md hover:border-primary/20 dark:hover:border-primary/40 transition-all group">
<span class="material-symbols-outlined text-tertiary dark:text-tertiary-fixed-dim text-[20px] md:text-[24px]">videocam</span>
<span class="font-label-md text-xs md:text-sm dark:text-white/80">Video</span>
</button>
</div>
</div>
</div>
</div>
<!-- Input Area (Liquid Architecture) -->
<div class="px-4 pb-4 md:pb-md w-full shrink-0">
<div class="max-w-max-content-width mx-auto relative group">
<!-- Background Glow -->
<div class="absolute -inset-1 bg-brand-gradient opacity-20 dark:opacity-10 blur-xl group-focus-within:opacity-40 dark:group-focus-within:opacity-20 transition-opacity rounded-[32px]"></div>
<div class="relative bg-white/90 dark:bg-[#161b22]/90 backdrop-blur-md border border-outline-variant/20 dark:border-white/10 rounded-3xl md:rounded-[32px] p-1.5 md:p-sm shadow-xl dark:shadow-black/60 overflow-hidden transition-colors">
<div class="flex items-end gap-1 md:gap-sm">
<button class="w-9 h-9 md:w-10 md:h-10 rounded-full flex items-center justify-center text-on-surface-variant dark:text-outline hover:bg-surface-container dark:hover:bg-white/5 transition-colors shrink-0 mb-0.5">
<span class="material-symbols-outlined">add_circle</span>
</button>
<textarea class="flex-1 bg-transparent border-none focus:ring-0 py-2.5 md:py-3 text-body-md resize-none scrollbar-thin min-h-[44px] max-h-48 leading-relaxed placeholder:text-on-surface-variant/50 dark:placeholder:text-outline/40 text-on-surface dark:text-white" id="chat-input" placeholder="Type request..." rows="1"></textarea>
<div class="flex items-center gap-1 md:gap-xs mb-0.5">
<button class="hidden sm:flex w-10 h-10 rounded-full items-center justify-center text-primary-container dark:text-inverse-primary hover:bg-primary/10 dark:hover:bg-white/10 transition-colors shrink-0">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">auto_awesome</span>
</button>
<button class="h-9 md:h-10 px-3 md:px-md rounded-full bg-brand-gradient text-white flex items-center gap-1.5 md:gap-xs font-label-md shadow-lg shadow-primary/20 hover:brightness-110 active:scale-95 transition-all shrink-0" id="send-btn">
<span class="material-symbols-outlined text-[18px] md:text-[20px]">send</span>
<span class="hidden sm:inline">Send</span>
</button>
</div>
</div>
<!-- Input Contextual Chips (Scrollable Mobile) -->
<div class="flex overflow-x-auto gap-xs mt-2 px-xs pb-xs border-t border-outline-variant/10 dark:border-white/5 pt-2 no-scrollbar scroll-smooth">
<div class="px-sm py-1 rounded-full bg-surface-container dark:bg-white/5 text-on-surface-variant dark:text-outline text-[10px] md:text-[11px] font-bold flex items-center gap-1 cursor-pointer hover:bg-surface-container-high dark:hover:bg-white/10 transition-colors whitespace-nowrap shrink-0">
<span class="material-symbols-outlined text-[14px]">tune</span> Precision
                                </div>
<div class="px-sm py-1 rounded-full bg-surface-container dark:bg-white/5 text-on-surface-variant dark:text-outline text-[10px] md:text-[11px] font-bold flex items-center gap-1 cursor-pointer hover:bg-surface-container-high dark:hover:bg-white/10 transition-colors whitespace-nowrap shrink-0">
<span class="material-symbols-outlined text-[14px]">history</span> Sync
                                </div>
<div class="px-sm py-1 rounded-full bg-primary/10 dark:bg-primary/20 text-primary dark:text-inverse-primary text-[10px] md:text-[11px] font-bold flex items-center gap-1 cursor-pointer hover:bg-primary/20 dark:hover:bg-white/10 transition-colors whitespace-nowrap shrink-0">
<span class="material-symbols-outlined text-[14px]">bolt</span> Ultra Core v4
                                </div>
</div>
</div>
</div>
<p class="text-center text-[10px] md:text-caption-italic text-on-surface-variant/60 dark:text-outline/40 mt-2 md:mt-sm">Verify critical architectural data.</p>
</div>
</section>
</main>
</div>
<!-- Global Delete Modal -->
<div class="fixed inset-0 z-[200] hidden items-center justify-center p-4 bg-black/60 dark:bg-black/80 backdrop-blur-md transition-opacity duration-300" id="global-delete-modal" onclick="if(event.target === this) closeModal()">
<div class="bg-surface dark:bg-[#1d232b] w-full max-w-sm rounded-[32px] p-8 shadow-2xl border border-outline-variant/20 dark:border-white/10 transform transition-transform duration-300 scale-95">
<div class="w-16 h-16 rounded-full bg-error/10 text-error flex items-center justify-center mx-auto mb-6">
<span class="material-symbols-outlined text-[32px]">delete_forever</span>
</div>
<h3 class="text-headline-md text-center mb-2 text-on-surface dark:text-white">Delete Activity?</h3>
<p class="text-on-surface-variant dark:text-outline text-center mb-8">This will permanently remove this session from your history. This action cannot be undone.</p>
<div class="flex gap-3">
<button class="flex-1 py-3.5 rounded-full font-label-md bg-surface-container-high dark:bg-white/10 hover:brightness-95 transition-all text-on-surface dark:text-white" onclick="closeModal()">Cancel</button>
<button class="flex-1 py-3.5 rounded-full font-label-md bg-error text-white shadow-lg shadow-error/20 hover:brightness-110 active:scale-95 transition-all" id="global-confirm-delete">Delete</button>
</div>
</div>
</div>
<!-- Interactive Scripts -->
<script>
        // DOM Elements
        const html = document.documentElement;
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebar-overlay');
        const openBtn = document.getElementById('open-sidebar');
        const closeBtn = document.getElementById('close-sidebar');
        const chatInput = document.getElementById('chat-input');
        const themeToggle = document.getElementById('theme-toggle');
        const profileBtn = document.getElementById('profile-btn');
        const profileDropdown = document.getElementById('profile-dropdown');
        const notificationBtn = document.getElementById('notification-btn');
        const notificationOverlay = document.getElementById('notification-overlay');

        // Theme Switcher Logic
        function initTheme() {
            const savedTheme = localStorage.getItem('luntian-theme') || 'dark'; // Defaulting to dark as requested
            html.className = savedTheme;
        }

        themeToggle.addEventListener('click', () => {
            const isDark = html.classList.contains('dark');
            const newTheme = isDark ? 'light' : 'dark';
            html.className = newTheme;
            localStorage.setItem('luntian-theme', newTheme);
        });

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

        // Sidebar Toggle Logic
        function toggleSidebar() {
            const isHidden = sidebar.classList.contains('mobile-hidden');
            if (isHidden) {
                sidebar.classList.remove('mobile-hidden');
                overlay.classList.remove('hidden');
                requestAnimationFrame(() => {
                    overlay.classList.add('opacity-100');
                    overlay.classList.remove('pointer-events-none');
                });
            } else {
                sidebar.classList.add('mobile-hidden');
                overlay.classList.remove('opacity-100');
                overlay.classList.add('pointer-events-none');
                setTimeout(() => {
                    overlay.classList.add('hidden');
                }, 200);
            }
        }

        if(openBtn) openBtn.addEventListener('click', toggleSidebar);
        if(closeBtn) closeBtn.addEventListener('click', toggleSidebar);
        if(overlay) overlay.addEventListener('click', toggleSidebar);

        // Close sidebar on escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                if (sidebar && !sidebar.classList.contains('mobile-hidden')) toggleSidebar();
                if (profileDropdown) profileDropdown.classList.add('dropdown-hidden');
                if (notificationOverlay) notificationOverlay.classList.add('dropdown-hidden');
            }
        });

        // Auto-expand textarea
        if(chatInput) {
            chatInput.addEventListener("input", function() {
                this.style.height = 'auto';
                const newHeight = Math.min(this.scrollHeight, 192);
                this.style.height = newHeight + 'px';
            }, false);
        }

        // Parallax background (Desktop only)
        if (window.innerWidth > 1024) {
            document.addEventListener('mousemove', (e) => {
                const x = e.clientX / window.innerWidth;
                const y = e.clientY / window.innerHeight;
                document.body.style.backgroundPosition = `${x * 8}px ${y * 8}px`;
            });
        }

        // Activity Management Logic
        (function() {
            let itemToDelete = null;
            const modal = document.getElementById('global-delete-modal');
            const confirmBtn = document.getElementById('global-confirm-delete');

            window.requestDelete = function(e, element) {
                e.stopPropagation();
                itemToDelete = element;
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                setTimeout(() => modal.querySelector('div').classList.remove('scale-95'), 10);
            };

            window.closeModal = function() {
                modal.querySelector('div').classList.add('scale-95');
                setTimeout(() => {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                    itemToDelete = null;
                }, 200);
            };

            if(confirmBtn) {
                confirmBtn.addEventListener('click', () => {
                    if (itemToDelete) {
                        itemToDelete.style.opacity = '0';
                        itemToDelete.style.transform = 'scale(0.9)';
                        setTimeout(() => {
                            itemToDelete.remove();
                            closeModal();
                        }, 200);
                    }
                });
            }

            window.switchActivity = function(element) {
                const titleElement = element.querySelector('p');
                if(!titleElement) return;
                const title = titleElement.textContent;
                const welcomeSection = document.querySelector('#chat-feed .text-center');
                if (welcomeSection) {
                    const h2 = welcomeSection.querySelector('h2');
                    const p = welcomeSection.querySelector('p');
                    if(h2) h2.textContent = title;
                    if(p) p.textContent = 'Viewing archived session...';
                    const chips = welcomeSection.querySelector('.flex-wrap');
                    if (chips) chips.style.display = 'none';
                }
                if (sidebar && !sidebar.classList.contains('mobile-hidden')) toggleSidebar();
            };
        })();

        // Initialize
        initTheme();

        document.querySelector('meta[name="luntian-api-base"]').content =
            window.location.origin + window.location.pathname.replace(/\/[^/]*$/, '');

        document.getElementById('logout-link')?.addEventListener('click', async (e) => {
            e.preventDefault();
            if (window.LuntianAPI) {
                await LuntianAPI.signOut();
            }
            window.location.href = 'signinPage.php';
        });
    </script>
<script src="assets/js/luntian-api.js"></script>
<script src="assets/js/chat-client.js"></script>
</body></html>
