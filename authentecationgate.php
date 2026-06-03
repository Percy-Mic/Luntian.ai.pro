<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Luntian AI - Workspace</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "surface": "#fdf8fd",
                    "surface-container-highest": "#e5e1e7",
                    "on-secondary": "#ffffff",
                    "on-surface-variant": "#484555",
                    "surface-bright": "#fdf8fd",
                    "secondary-fixed": "#b6ebff",
                    "secondary": "#00677f",
                    "on-error": "#ffffff",
                    "on-error-container": "#93000a",
                    "secondary-fixed-dim": "#47d6ff",
                    "inverse-on-surface": "#f4eff5",
                    "error-container": "#ffdad6",
                    "on-primary-fixed": "#1b0062",
                    "surface-container-lowest": "#ffffff",
                    "tertiary": "#822b8a",
                    "on-primary-container": "#eee7ff",
                    "inverse-primary": "#cabeff",
                    "outline": "#797586",
                    "primary-fixed": "#e6deff",
                    "on-background": "#1c1b1f",
                    "surface-container": "#f1ecf2",
                    "surface-container-high": "#ebe7ec",
                    "sage-mist": "#8DA47E",
                    "inverse-surface": "#313034",
                    "on-surface": "#1c1b1f",
                    "surface-variant": "#e5e1e7",
                    "moss-deep": "#2D3E1A",
                    "on-tertiary-fixed": "#36003d",
                    "on-tertiary-fixed-variant": "#751e7e",
                    "tertiary-fixed": "#ffd6fb",
                    "wet-stone": "#E1E5DC",
                    "on-primary-fixed-variant": "#4720c2",
                    "background-cool": "#F8F9FE",
                    "on-primary": "#ffffff",
                    "on-secondary-container": "#00566a",
                    "secondary-container": "#00d2ff",
                    "surface-tint": "#5f41da",
                    "surface-dim": "#ddd9de",
                    "surface-glass": "rgba(253, 248, 253, 0.8)",
                    "outline-variant": "#c9c4d7",
                    "primary": "#5230cd",
                    "tertiary-fixed-dim": "#ffa9ff",
                    "surface-container-low": "#f7f2f8",
                    "on-secondary-fixed-variant": "#004e60",
                    "primary-container": "#6b4ee6",
                    "on-tertiary": "#ffffff",
                    "on-tertiary-container": "#ffe2fa",
                    "on-secondary-fixed": "#001f28",
                    "tertiary-container": "#9e45a4",
                    "primary-fixed-dim": "#cabeff",
                    "brand-gradient": "linear-gradient(135deg, #00D2FF 0%, #6B4EE6 100%)",
                    "background": "#fdf8fd",
                    "error": "#ba1a1a"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "max-content-width": "896px",
                    "xl": "64px",
                    "sm": "12px",
                    "md": "24px",
                    "xs": "4px",
                    "sidebar-width": "320px",
                    "base": "8px",
                    "lg": "40px"
            },
            "fontFamily": {
                    "caption-italic": ["Inter"],
                    "label-md": ["Inter"],
                    "headline-md": ["Inter"],
                    "label-sm": ["Inter"],
                    "body-lg": ["Inter"],
                    "headline-xl": ["Inter"],
                    "body-md": ["Inter"],
                    "headline-lg": ["Inter"]
            },
            "fontSize": {
                    "caption-italic": ["10px", {"lineHeight": "12px", "fontWeight": "400"}],
                    "label-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "500"}],
                    "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                    "label-sm": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                    "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                    "headline-xl": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                    "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600"}]
            }
          },
        },
      }
    </script>
<style>
        body { font-family: 'Inter', sans-serif; background-color: #fdf8fd; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            vertical-align: middle;
        }
        .brand-gradient-text {
            background: linear-gradient(135deg, #00D2FF 0%, #6B4EE6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .custom-scrollbar::-webkit-scrollbar { width: 4px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #C7C6D0; border-radius: 4px; }
        .glass-panel {
            backdrop-filter: blur(12px);
            background: rgba(253, 248, 253, 0.8);
        }
        .ai-glow {
            box-shadow: 0 0 20px rgba(107, 78, 230, 0.15);
        }
    </style>
</head>
<body class="flex min-h-screen">
<!-- SideNavBar (Left) -->
<aside class="fixed left-0 top-0 h-full w-64 z-40 bg-surface dark:bg-surface-dim border-r border-outline-variant/20 flex flex-col py-stack-lg shadow-lg shadow-secondary/5">
<div class="px-6 py-8 flex flex-col gap-2">
<div class="flex items-center gap-2">
<div class="w-10 h-10 rounded-xl bg-brand-gradient flex items-center justify-center shadow-lg shadow-primary/20">
<span class="material-symbols-outlined text-white text-2xl" data-icon="auto_awesome">auto_awesome</span>
</div>
<h1 class="font-headline-md text-headline-md font-bold text-primary">Luntian AI</h1>
</div>
<p class="font-label-sm text-label-sm font-semibold text-on-surface-variant uppercase tracking-wider">Precision Intelligence</p>
</div>
<nav class="flex-grow px-4 flex flex-col gap-1">
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high rounded-lg transition-all duration-300" href="#">
<span class="material-symbols-outlined" data-icon="screen_search_desktop">screen_search_desktop</span>
<span class="font-body-md text-body-md font-medium">Screen Analysis</span>
</a>
<a class="flex items-center gap-md p-3 text-on-surface-variant hover:bg-surface-container-high transition-all duration-300 ease-in-out font-label-md text-label-md" href="#"><span class="material-symbols-outlined">code</span> Developer</a>
<a class="flex items-center gap-3 px-4 py-3 bg-primary/10 text-primary border-r-4 border-primary rounded-r-lg hover:bg-surface-container-high transition-all duration-300" href="#">
<span class="material-symbols-outlined" data-icon="movie">movie</span>
<span class="font-body-md text-body-md font-medium">Video Studio</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high rounded-lg transition-all duration-300" href="#">
<span class="material-symbols-outlined" data-icon="history">history</span>
<span class="font-body-md text-body-md font-medium">History</span>
</a>
</nav>
<div class="mt-auto px-4 pb-8 flex flex-col gap-4">
<button class="w-full py-3 bg-primary text-on-primary rounded-xl font-medium shadow-lg shadow-primary/20 hover:brightness-110 active:scale-95 transition-all">
            Manage Subscription
        </button>
<div class="flex flex-col gap-1">
<a class="flex items-center gap-3 px-4 py-2 text-on-surface-variant hover:bg-surface-container-high rounded-lg transition-all" href="#">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
<span class="font-body-md text-body-md">Settings</span>
</a>
<a class="flex items-center gap-3 px-4 py-2 text-on-surface-variant hover:bg-surface-container-high rounded-lg transition-all" href="#">
<span class="material-symbols-outlined" data-icon="help">help</span>
<span class="font-body-md text-body-md">Help</span>
</a>
</div>
</div>
</aside>
<!-- Main Content Canvas -->
<main class="flex-grow ml-64 bg-background-cool min-h-screen relative overflow-y-auto custom-scrollbar"><div class="fixed inset-0 z-[60] flex items-center justify-center p-6 bg-background/60 backdrop-blur-md">
<div class="max-w-md w-full bg-inverse-surface/95 text-inverse-on-surface rounded-[2rem] p-8 border border-white/10 shadow-2xl flex flex-col items-center text-center gap-6 ai-glow">
<div class="w-16 h-16 rounded-2xl bg-brand-gradient flex items-center justify-center shadow-lg shadow-primary/20">
<span class="material-symbols-outlined text-white text-4xl" data-icon="auto_awesome">auto_awesome</span>
</div>
<div class="space-y-2">
<h2 class="font-headline-lg text-headline-lg font-bold bg-brand-gradient bg-clip-text text-transparent">Pro Access Required</h2>
<p class="font-body-md text-body-md text-surface-container-highest/80">
                Unlock precision intelligence. Create an account or sign in to start generating cinematic sequences and analyzing neural telemetry.
            </p>
</div>
<div class="flex flex-col w-full gap-3 mt-4">
<button class="w-full py-4 bg-primary text-on-primary rounded-2xl font-bold text-label-md shadow-lg shadow-primary/30 hover:brightness-110 active:scale-95 transition-all" onclick="window.location.href='signupPage.php'">
                Create Free Account
            </button>
<button class="w-full py-4 bg-transparent text-white border-2 border-primary/50 rounded-2xl font-bold text-label-md hover:bg-white/5 active:scale-95 transition-all" onclick="window.location.href='signinPage.php'">
                Sign In
            </button>
</div>
<p class="text-caption-italic font-caption-italic opacity-40">
            Luntian AI Pro v4.2 • Enterprise Secure
        </p>
</div>
</div>
<!-- TopAppBar -->
<header class="fixed top-0 left-64 right-0 h-16 glass-panel border-b border-outline-variant/20 flex items-center justify-between px-md z-50">
<div class="flex items-center gap-4">
<span class="material-symbols-outlined text-primary" data-icon="memory">memory</span>
<div class="h-8 w-px bg-outline-variant/30"></div>
<span class="font-headline-md text-headline-md font-bold bg-brand-gradient bg-clip-text text-transparent">Video Studio</span>
</div>
<div class="flex items-center gap-6">
<div class="flex items-center gap-2 px-3 py-1 bg-surface-container rounded-full border border-outline-variant/20">
<span class="material-symbols-outlined text-xs text-primary" data-icon="sensors">sensors</span>
<span class="text-label-sm font-label-sm uppercase tracking-wider text-on-surface-variant">Neural Link: Active</span>
</div>
<div class="flex items-center gap-3">
<div class="flex flex-col items-end">
<div class="flex items-center gap-2">
<span class="text-label-md font-label-md text-on-surface">Alex Chen</span>
<span class="px-2 py-0.5 bg-brand-gradient text-[10px] font-bold text-white rounded-md tracking-tighter shadow-sm">PRO</span>
</div>
<span class="text-caption-italic font-caption-italic text-on-surface-variant">Enterprise Tier</span>
</div>
<div class="h-10 w-10 rounded-full bg-primary-container flex items-center justify-center text-on-primary font-bold overflow-hidden border-2 border-primary/20 ring-2 ring-primary/10">
<img alt="Profile" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAOv49MOr6EIr-UwksAzJkLvo7FjvR8rb-DJffYthXfOt3T4BgweSXwwV-WvxHFZkwymUyUfx6_up959-z3ZbXHqW8BglmDnovXPn1LdONgcZyrzHI6_HPhr17KvjFsmDS0VS7EKIGoSlA1EYhNxuE4tuJ9MPnv7bVZCJszzKR_ExlNEBCy_0epNyr-ouZhSoQOTIQAfWOrJmxNu2x9xA-t1ov89YEGVy8cyVsHK9Y9REebTtOuX4NcxsEWthFSsNcvvphExQL-yhQT"/>
</div>
</div>
</div>
</header>
<!-- Content Area -->
<div class="pt-24 pb-40 px-md flex flex-col items-center">
<div class="max-w-4xl w-full flex flex-col gap-md">
<!-- Chat Interface Segment: User Prompt -->
<div class="flex flex-col items-end gap-3 self-end max-w-[80%]">
<div class="bg-primary text-on-primary p-4 rounded-2xl rounded-tr-none shadow-lg shadow-primary/10">
<p class="text-body-md font-body-md">Generate a high-fidelity cinematic sequence of a futuristic vertical garden city during golden hour. Incorporate biomechanical drones pollinating synthetic flowers with a focus on macro-lens depth of field.</p>
</div>
<div class="flex items-center gap-2 text-on-surface-variant/60">
<span class="text-label-sm font-label-sm">Delivered • 14:02</span>
</div>
</div>
<!-- AI Response: Video Generation Status -->
<div class="flex items-start gap-4 w-full">
<div class="w-10 h-10 rounded-xl bg-brand-gradient flex items-center justify-center flex-shrink-0 shadow-md">
<span class="material-symbols-outlined text-white text-lg" data-icon="bolt" style="font-variation-settings: 'FILL' 1;">bolt</span>
</div>
<div class="flex-grow flex flex-col gap-4">
<div class="bg-surface p-6 rounded-2xl rounded-tl-none border border-outline-variant/10 shadow-[0_8px_32px_-8px_rgba(107,78,230,0.1)] ai-glow">
<div class="flex items-center justify-between mb-4">
<h3 class="font-headline-md text-headline-md text-primary">Scene Construction Initialized</h3>
<span class="px-2 py-1 bg-surface-container text-xs font-bold rounded text-on-surface-variant border border-outline-variant/20">V4.2 Engine</span>
</div>
<p class="text-body-md font-body-md text-on-surface-variant mb-6">Processing spatial temporal data for <span class="text-primary font-medium">"Biophilic Urbanism"</span>. Neural engine is synthesizing 240 frames at 8K resolution with ray-traced global illumination.</p>
<!-- Video Preview Container -->
<div class="relative aspect-video rounded-xl overflow-hidden bg-surface-container-highest border border-outline-variant/30 group">
<img class="w-full h-full object-cover opacity-70" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDbstMVI_CejluNyyiWB6uTV_0bU9d9HExT2DIRlSMYDrnwCcdF9m7X8FT8Pr23BqiGIduDO_DSqoaONc-iQKXXzCBTqXg2yOwsiPFmwwuvRnX9azUs5TUsnJk3ITedl_wFXpvSXJ59nFfR_Vspuw2ISfcVphkF4yIRSI6q9nRo1hEXSC8cIiTqs0fQ6JsYCJHP5MJYhLcDxopFP-T5YwK7jqiQTLanST4UMjjWf1HSclBawlZD0uT0iMmN9fwqI84fOGw1zVq8T7R9"/>
<!-- Rendering Overlay -->
<div class="absolute inset-0 bg-primary/10 flex flex-col items-center justify-center">
<div class="w-16 h-16 rounded-full bg-surface-glass border border-white/40 flex items-center justify-center backdrop-blur-md mb-4 shadow-xl">
<div class="w-8 h-8 border-4 border-primary border-t-transparent rounded-full animate-spin"></div>
</div>
<div class="px-4 py-2 bg-inverse-surface/90 text-inverse-on-surface rounded-full text-label-md font-label-md flex items-center gap-2 shadow-2xl backdrop-blur-sm" id="render-status">
<span class="material-symbols-outlined animate-pulse text-sm" data-icon="lens">lens</span>
                                    Rendering: 64% Complete
                                </div>
</div>
<!-- Control Buttons -->
<div class="absolute bottom-4 right-4 flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
<button class="w-10 h-10 flex items-center justify-center bg-surface-glass rounded-full border border-white/40 shadow-lg backdrop-blur-sm hover:bg-white transition-colors"><span class="material-symbols-outlined text-on-surface" data-icon="fullscreen">fullscreen</span></button>
<button class="w-10 h-10 flex items-center justify-center bg-surface-glass rounded-full border border-white/40 shadow-lg backdrop-blur-sm hover:bg-white transition-colors"><span class="material-symbols-outlined text-on-surface" data-icon="more_horiz">more_horiz</span></button>
</div>
</div>
<!-- Technical Stats Badges -->
<div class="mt-6 flex flex-wrap gap-2">
<span class="px-3 py-1 bg-surface-container-low text-on-surface-variant text-label-sm font-semibold rounded-full border border-outline-variant/20 flex items-center gap-1">
<span class="material-symbols-outlined text-xs text-primary" data-icon="psychology">psychology</span>
                                Spatial Coherence: 0.98
                            </span>
<span class="px-3 py-1 bg-surface-container-low text-on-surface-variant text-label-sm font-semibold rounded-full border border-outline-variant/20 flex items-center gap-1">
<span class="material-symbols-outlined text-xs text-primary" data-icon="speed">speed</span>
                                ETA: 42s
                            </span>
<span class="px-3 py-1 bg-surface-container-low text-on-surface-variant text-label-sm font-semibold rounded-full border border-outline-variant/20 flex items-center gap-1">
<span class="material-symbols-outlined text-xs text-primary" data-icon="memory">memory</span>
                                VRAM Usage: 18.4GB
                            </span>
</div>
</div>
</div>
</div>
<!-- Bento Grid: Analytics & Actions -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
<div class="md:col-span-2 bg-surface border border-outline-variant/10 rounded-2xl p-6 shadow-sm flex flex-col gap-6">
<div class="flex justify-between items-center border-b border-outline-variant/10 pb-4">
<h4 class="font-headline-md text-headline-md text-on-surface flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-2xl" data-icon="monitoring">monitoring</span>
                            Neural Telemetry
                        </h4>
<div class="flex items-center gap-2">
<span class="relative flex h-2 w-2">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-secondary opacity-75"></span>
<span class="relative inline-flex rounded-full h-2 w-2 bg-secondary"></span>
</span>
<span class="text-label-sm font-bold text-secondary uppercase tracking-widest px-2 py-1 bg-secondary-fixed/30 rounded">Real-time</span>
</div>
</div>
<div class="grid grid-cols-3 gap-4">
<div class="bg-background-cool rounded-xl p-4 border border-outline-variant/10 hover:border-primary/30 transition-colors">
<span class="text-label-sm font-medium text-on-surface-variant uppercase tracking-tighter">Resolution</span>
<p class="font-headline-md text-headline-md text-primary mt-1">7680×4320</p>
</div>
<div class="bg-background-cool rounded-xl p-4 border border-outline-variant/10 hover:border-primary/30 transition-colors">
<span class="text-label-sm font-medium text-on-surface-variant uppercase tracking-tighter">Samples</span>
<p class="font-headline-md text-headline-md text-primary mt-1">2048/px</p>
</div>
<div class="bg-background-cool rounded-xl p-4 border border-outline-variant/10 hover:border-secondary/30 transition-colors">
<span class="text-label-sm font-medium text-on-surface-variant uppercase tracking-tighter">Confidence</span>
<p class="font-headline-md text-headline-md text-secondary mt-1">99.2%</p>
</div>
</div>
</div>
<!-- Enhancement Card -->
<div class="bg-brand-gradient rounded-2xl p-6 text-on-primary flex flex-col justify-between shadow-lg shadow-primary/20 relative overflow-hidden group">
<div class="absolute -right-4 -top-4 opacity-10 group-hover:scale-110 transition-transform duration-500">
<span class="material-symbols-outlined text-[120px]" data-icon="auto_awesome">auto_awesome</span>
</div>
<div class="flex justify-between items-start relative z-10">
<span class="material-symbols-outlined text-3xl" data-icon="auto_awesome">auto_awesome</span>
<span class="text-label-sm font-bold bg-white/20 px-3 py-1 rounded-full backdrop-blur-md border border-white/30 uppercase tracking-widest">Active</span>
</div>
<div class="relative z-10">
<p class="text-label-sm font-semibold opacity-80 mb-1">PRO SUGGESTION</p>
<p class="font-headline-md text-headline-md leading-tight mb-4">Enhance Lighting</p>
<button class="w-full py-3 bg-white text-primary rounded-xl font-bold text-label-md shadow-lg hover:scale-[1.02] active:scale-95 transition-all">
                            Apply Refinement
                        </button>
</div>
</div>
</div>
</div>
</div>
<!-- Floating Input Bar -->
<div class="fixed bottom-8 left-64 right-0 px-md z-50 flex justify-center">
<div class="max-w-4xl w-full glass-panel border border-outline-variant/20 rounded-3xl p-2 shadow-2xl flex flex-col gap-2 ai-glow">
<div class="flex items-center gap-2 px-4 py-2">
<button class="w-10 h-10 flex items-center justify-center text-on-surface-variant hover:bg-surface-container rounded-full transition-colors">
<span class="material-symbols-outlined" data-icon="add_circle">add_circle</span>
</button>
<input class="flex-grow bg-transparent border-none focus:ring-0 text-body-md font-body-md text-on-surface placeholder:text-on-surface-variant/40" placeholder="Refine scene with 'more cinematic lighting' or 'add heavy rain'..." type="text"/>
<button class="w-12 h-12 flex items-center justify-center bg-brand-gradient text-on-primary rounded-2xl shadow-lg shadow-primary/30 hover:scale-105 active:scale-95 transition-transform">
<span class="material-symbols-outlined" data-icon="send" style="font-variation-settings: 'FILL' 1;">send</span>
</button>
</div>
<div class="flex gap-2 px-4 pb-2">
<button class="px-4 py-1.5 bg-surface-container text-on-surface-variant text-label-sm font-semibold rounded-full border border-outline-variant/20 hover:bg-surface-container-high transition-colors flex items-center gap-1.5">
<span class="material-symbols-outlined text-xs" data-icon="palette">palette</span> Color Grading
                </button>
<button class="px-4 py-1.5 bg-surface-container text-on-surface-variant text-label-sm font-semibold rounded-full border border-outline-variant/20 hover:bg-surface-container-high transition-colors flex items-center gap-1.5">
<span class="material-symbols-outlined text-xs" data-icon="camera">camera</span> Focal Length
                </button>
<button class="px-4 py-1.5 bg-surface-container text-on-surface-variant text-label-sm font-semibold rounded-full border border-outline-variant/20 hover:bg-surface-container-high transition-colors flex items-center gap-1.5">
<span class="material-symbols-outlined text-xs" data-icon="timer">timer</span> Duration
                </button>
<div class="ml-auto flex items-center gap-4 pr-2">
<div class="flex items-center gap-2 text-on-surface-variant/60">
<span class="w-2 h-2 rounded-full bg-error animate-pulse"></span>
<span class="text-label-sm font-bold uppercase tracking-widest">Rec Mode</span>
</div>
</div>
</div>
</div>
</div>
</main>
<script>
    // Micro-interaction for the render percentage
    let progress = 64;
    const progressElement = document.getElementById('render-status');
    
    const interval = setInterval(() => {
        if (progress < 99) {
            progress += Math.floor(Math.random() * 2);
            progressElement.innerHTML = `
                <span class="material-symbols-outlined animate-pulse text-sm" data-icon="lens">lens</span>
                Rendering: ${progress}% Complete
            `;
        } else if (progress >= 99) {
            progressElement.classList.remove('bg-inverse-surface/90');
            progressElement.classList.add('bg-secondary');
            progressElement.innerHTML = `
                <span class="material-symbols-outlined text-sm" data-icon="check_circle">check_circle</span>
                Synthesis Complete
            `;
            clearInterval(interval);
        }
    }, 3000);

    // Header scroll effect
    const mainContent = document.querySelector('main');
    const header = document.querySelector('header');
    mainContent.addEventListener('scroll', () => {
        if (mainContent.scrollTop > 20) {
            header.classList.add('shadow-lg');
            header.style.background = 'rgba(253, 248, 253, 0.95)';
        } else {
            header.classList.remove('shadow-lg');
            header.style.background = 'rgba(253, 248, 253, 0.8)';
        }
    });
</script>
</body></html>
