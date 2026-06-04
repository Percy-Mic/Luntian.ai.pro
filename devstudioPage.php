<!DOCTYPE html>
<html class="light" lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Luntian AI - Dev Studio</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=JetBrains+Mono:wght@400;500&amp;display=swap" rel="stylesheet"/>
<style>
    .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
    .sidebar-active { font-variation-settings: 'FILL' 1; }
    ::-webkit-scrollbar { width: 6px; height: 6px; }
    ::-webkit-scrollbar-track { background: transparent; }
    ::-webkit-scrollbar-thumb { background: #C7C6D0; border-radius: 10px; }
    
    #floatingPreview { 
        position: fixed; 
        z-index: 100; 
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2); 
        transition: width 0.3s cubic-bezier(0.4, 0, 0.2, 1), height 0.3s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.2s ease, transform 0.2s ease; 
        background: #ffffff;
        border: 1px solid #e5e7eb;
        overflow: hidden;
        display: none; 
        flex-direction: column;
    }
    .preview-header { cursor: move;}
    #floatingPreview.desktop { width: 1024px; height: 640px; border-radius: 12px; }
    #floatingPreview.tablet-p { width: 600px; height: 800px; border-radius: 12px; }
    #floatingPreview.mobile-p { width: 375px; height: 667px; border-radius: 12px; }
    #floatingPreview.minimized { width: 260px; height: 48px; overflow: hidden; border-radius: 8px; }
    
    .device-btn.active { background-color: #5230cd !important; color: white !important; }
    
    #editorOverlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        pointer-events: none;
        padding: 16px;
        white-space: pre;
        color: #1c1b1f;
        overflow: hidden;
        z-index: 10;
    }
    .dark #editorOverlay { color: #c9d1d9; }

    #fileContent {  
        caret-color: #5230cd; 
        background: transparent;
        z-index: 20;
        position: relative;
        tab-size: 2;
        -moz-tab-size: 2;
    }
    .dark #fileContent { caret-color: #ffffff; }

    .tab-active { border-bottom: 2px solid #5230cd; background: white !important; }
    .dark .tab-active { border-bottom: 2px solid #5230cd; background: #0d1117 !important; color: #f0f6fc !important; }
    
    .no-scrollbar::-webkit-scrollbar { display: none; }

    #aiCompanionPanel {
        transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    #aiCompanionPanel.collapsed {
        transform: translateX(100%);
    }
    #responsivebtn {
        display: none;
    }
    #mobileclosefolder {
        display: none;
    }

    /* Mobile Responsiveness Overrides */
    @media (max-width: 768px) {
        .mobile-hidden { display: none !important; }
        .sidebar-drawer {
            position: fixed;
            left: -100%;
            top: 0;
            bottom: 0;
            z-index: 60;
            transition: left 0.3s ease;
            box-shadow: 20px 0 50px rgba(0,0,0,0.1);
        }
        .sidebar-drawer.open { left: 0; }
        .explorer-drawer {
            position: fixed;
            bottom: -100%;
            left: 0;
            right: 0;
            height: 60vh;
            z-index: 55;
            background: white;
            transition: bottom 0.3s ease;
            border-radius: 20px 20px 0 0;
            box-shadow: 0 -10px 40px rgba(0,0,0,0.1);
        }
        .explorer-drawer.open { bottom: 0; }
        .mobile-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.4);
            z-index: 50;
            display: none;
        }
        .mobile-overlay.active { display: block; }
        
        #floatingPreview.desktop, 
        #floatingPreview.tablet-p, 
        #floatingPreview.mobile-p {
            width: 100% !important;
            height: 100% !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            bottom: 0 !important;
            border-radius: 0;
        }
        
        #editorSection { width: 100vw; }
        .h-screen { height: 100dvh; }
        
        #aiCompanionPanel {
            position: fixed;
            top: 0;
            bottom: 0;
            right: 0;
            z-index: 70;
            width: 85%;
        }#responsivebtn {
        display: block;
        }
        #mobileclosefolder {
            display: block;
        }
        #profileBtn {
            display: none;
        }
    }
</style>
<script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                colors: {
                    "primary": "#5230cd",
                    "primary-container": "#6b4ee6",
                    "secondary": "#00677f",
                    "background-cool": "#f6f8fa",
                    "surface": "#ffffff",
                    "surface-dim": "#f6f8fa",
                    "on-surface": "#1c1b1f",
                    "outline": "#d0d7de",
                    "outline-variant": "#e1e4e8",
                    "error": "#cf222e"
                },
                fontFamily: {
                    'body': ['Inter', 'sans-serif'],
                    'mono': ['JetBrains Mono', 'monospace'],
                }
            }
        }
    }
</script>
</head>
<body class="bg-background-cool dark:bg-[#010409] text-on-surface dark:text-[#c9d1d9] font-body overflow-hidden h-screen flex transition-colors">
<!-- Mobile Overlay -->
<div class="mobile-overlay" id="mobileOverlay" onclick="closeDrawers()"></div>
<!-- Floating Preview Window -->
<div id="floatingPreview" style="top: 80px; right: 40px;">
<div class="preview-header h-12 bg-surface-dim dark:bg-[#161b22] border-b border-outline-variant flex items-center justify-between px-4 select-none" id="previewHeader">
<div class="flex items-center gap-2">
<button class="material-symbols-outlined text-sm text-outline hover:text-primary transition-colors" onclick="previewHistory(-1)">arrow_back</button>
<button class="material-symbols-outlined text-sm text-outline hover:text-primary transition-colors" onclick="previewHistory(1)">arrow_forward</button>
<button class="material-symbols-outlined text-sm text-outline hover:text-primary transition-colors" onclick="injectPreviewContent()">refresh</button>
</div>
<div class="flex-1 max-w-md px-2 md:px-4">
<div class="bg-white dark:bg-[#0d1117] border border-outline-variant rounded px-2 md:px-3 py-1 flex items-center gap-2">
<span class="material-symbols-outlined text-[10px] md:text-xs text-green-500">lock</span>
<input class="bg-transparent border-none text-[10px] md:text-[11px] font-mono outline-none w-full p-0" id="previewUrlInput" onkeydown="handleUrlInput(event)" type="text" value="localhost/index.html"/>
</div>
</div>
<div class="flex items-center gap-2 md:gap-3">
<div class="flex items-center bg-outline/20 rounded p-0.5 mobile-hidden">
<button class="device-btn p-1 rounded-sm text-outline transition-all" id="mobileBtn" onclick="resizePreview('mobile-p')">
<span class="material-symbols-outlined text-sm">smartphone</span>
</button>
<button class="device-btn p-1 rounded-sm text-outline transition-all" id="tabletBtn" onclick="resizePreview('tablet-p')">
<span class="material-symbols-outlined text-sm">tablet</span>
</button>
<button class="device-btn active p-1 rounded-sm text-outline transition-all" id="desktopBtn" onclick="resizePreview('desktop')">
<span class="material-symbols-outlined text-sm">desktop_windows</span>
</button>
</div>
<button class="material-symbols-outlined text-outline hover:text-primary text-sm mobile-hidden" onclick="toggleMinimizePreview()">remove</button>
<button class="material-symbols-outlined text-outline hover:text-error text-sm" onclick="closePreview()">close</button>
</div>
</div>
<div class="flex-1 relative bg-white" id="previewViewport">
<iframe class="w-full h-full border-none" id="previewFrame" sandbox="allow-scripts allow-modals allow-forms allow-same-origin"></iframe>
</div>
</div>
<!-- Project Creation Modal -->
<div class="fixed inset-0 z-[100] flex items-center justify-center bg-black/50 hidden" id="projectModal">
<div class="bg-white dark:bg-[#161b22] rounded-xl shadow-2xl w-[90%] max-w-md p-6 border border-outline-variant">
<h3 class="text-lg font-bold mb-4">Create New Project</h3>
<p class="text-sm text-gray-500 mb-6">This will clear your current workspace. Are you sure you want to proceed?</p>
<div class="space-y-4 mb-6">
<div>
<label class="block text-[10px] font-bold uppercase text-gray-400 mb-1">Project Name</label>
<input class="w-full bg-background-cool dark:bg-[#0d1117] border border-outline rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-primary outline-none" id="newProjectName" placeholder="my-awesome-app" type="text"/>
</div>
</div>
<div class="flex gap-3 justify-end">
<button class="px-4 py-2 text-sm font-semibold hover:bg-gray-100 dark:hover:bg-white/5 rounded-lg" onclick="closeProjectModal()">Cancel</button>
<button class="px-6 py-2 bg-primary text-white text-sm font-bold rounded-lg shadow-md hover:brightness-110" onclick="confirmCreateProject()">Create Project</button>
</div>
</div>
</div>
<!-- Delete Confirmation Modal -->
<div class="fixed inset-0 z-[110] flex items-center justify-center bg-black/50 hidden" id="deleteModal">
<div class="bg-white dark:bg-[#161b22] rounded-xl shadow-2xl w-[90%] max-w-md p-6 border border-outline-variant transform transition-all scale-95 opacity-0" id="deleteModalContent">
<div class="flex items-center gap-3 mb-4 text-error">
<span class="material-symbols-outlined text-2xl font-variation-settings-fill-1">warning</span>
<h3 class="text-lg font-bold text-on-surface dark:text-white">Delete file?</h3>
</div>
<p class="text-sm text-gray-500 dark:text-gray-400 mb-8 leading-relaxed">
            Are you sure you want to delete <span class="font-bold text-on-surface dark:text-white" id="deleteTargetName"></span>? This action cannot be undone.
        </p>
<div class="flex gap-3 justify-end">
<button class="px-4 py-2 text-sm font-semibold text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-white/5 rounded-lg transition-colors" onclick="closeDeleteModal()">Cancel</button>
<button class="px-6 py-2 bg-gradient-to-r from-error to-[#ff4d4d] text-white text-sm font-bold rounded-lg shadow-lg hover:shadow-error/20 hover:brightness-110 transition-all" id="confirmDeleteBtn">Delete</button>
</div>
</div>
</div>
<!-- Sidebar (Drawer on mobile) -->
<aside class="sidebar-drawer w-64 bg-surface dark:bg-[#161b22] border-r border-outline-variant flex flex-col shrink-0 md:relative md:left-0" id="mainSidebar">
<div class="p-6">
<div class="flex items-center justify-between mb-6">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-xl bg-brand-gradient flex items-center justify-center shadow-lg shadow-primary/20 shrink-0">
<span class="material-symbols-outlined">navigation</span>
</div>
<div>
<h1 class="text-sm font-bold tracking-tight">Luntian AI</h1>
<p class="text-[10px] text-gray-400 uppercase tracking-widest font-semibold">Dev Studio</p>
</div>
</div>
<button class="material-symbols-outlined md:hidden text-gray-400" onclick="closeDrawers()">close</button>
</div>
<nav class="space-y-1">
<a class="flex items-center gap-3 px-3 py-2 text-gray-500 hover:text-primary hover:bg-primary/5 rounded transition-colors text-sm font-medium" href="index.php">
<span class="material-symbols-outlined text-lg">chat</span> Chat
            </a>
<a class="flex items-center gap-3 px-3 py-2 text-gray-500 hover:text-primary hover:bg-primary/5 rounded transition-colors text-sm font-medium" href="analysisPage.php">
<span class="material-symbols-outlined text-lg">laptop</span> Screen analysis
            </a>
<a class="flex items-center gap-3 px-3 py-2 bg-primary/10 text-primary rounded text-sm font-bold shadow-sm" href="devstudioPage.php">
<span class="material-symbols-outlined sidebar-active text-lg">terminal</span> Dev Studio
            </a>
<a class="flex items-center gap-3 px-3 py-2 text-gray-500 hover:text-primary hover:bg-primary/5 rounded transition-colors text-sm font-medium" href="editingPage.php">
<span class="material-symbols-outlined text-lg">palette</span> Editing
            </a>
<a class="flex items-center gap-3 px-3 py-2 text-gray-500 hover:text-primary hover:bg-primary/5 rounded transition-colors text-sm font-medium" href="helpPage.php">
<span class="material-symbols-outlined">help_outline</span>
<span class="font-label-md text-label-md">Help</span>
</a>
</nav>
</div>
<div class="mt-auto p-6 border-t border-outline-variant">
<button class="w-full py-2 bg-primary text-white rounded font-bold text-xs hover:shadow-lg transition-all flex items-center justify-center gap-2" onclick="openProjectModal()">
<span class="material-symbols-outlined text-sm">add</span> New Project
        </button>
</div>
</aside>
<!-- Workspace -->
<main class="flex-1 flex flex-col h-screen overflow-hidden bg-white dark:bg-[#0d1117] w-full">
<!-- Top Header -->
<header class="h-14 flex items-center justify-between px-4 md:px-6 border-b border-outline-variant bg-white dark:bg-[#161b22] z-40">
<div class="flex items-center gap-3 md:gap-8">
<button class="material-symbols-outlined md:hidden text-gray-500" onclick="toggleSidebar()" id="responsivebtn">menu</button>
<button class="material-symbols-outlined md:hidden text-gray-500" onclick="toggleExplorer()" id="responsivebtn">folder_open</button>
</div>
<div class="flex items-center gap-2 md:gap-3">
<button class="flex items-center gap-1.5 px-3 md:px-4 py-1.5 text-primary rounded text-[10px] md:text-xs font-bold transition-all" onclick="triggerAIGenerate()">
<span class="material-symbols-outlined text-sm">auto_fix_high</span> <span class="hidden sm:inline">AI Generate</span>
</button>
<button class="flex items-center gap-1.5 px-3 py-1.5 border border-outline hover:bg-gray-50 dark:hover:bg-white/5 rounded text-[10px] md:text-xs font-semibold transition-all" onclick="openStandaloneBrowser()" >
<span class="material-symbols-outlined text-sm">open_in_new</span>
            </button>
<button class="flex items-center gap-1.5 px-3 md:px-4 py-1.5 bg-primary text-white rounded text-[10px] md:text-xs font-bold hover:brightness-110 transition-all shadow-sm" onclick="enhancedRun()">
<span class="material-symbols-outlined text-sm">play_arrow</span> <span class="hidden sm:inline">Run</span>
</button>
<div class="w-px h-6 bg-outline-variant mx-1"></div>
<button class="material-symbols-outlined text-gray-400 hover:text-primary text-xl" id="themeToggle">dark_mode</button>
<button class="material-symbols-outlined text-gray-400 hover:text-primary text-xl" onclick="toggleAICompanion()" title="AI Companion">auto_awesome</button>
<!-- Interactive Profile Avatar -->
<div class="relative">
<button class="flex items-center gap-2 p-1 rounded-full hover:bg-surface-container-high dark:hover:bg-white/10 transition-colors" onclick="toggleProfileMenu()" id="profileBtn">
<img alt="User profile" class="w-8 h-8 rounded-full border-2 border-primary/20 object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBAPyBtcfjofTeFlJP7FYUGFPT_ZFXj2jqlI2BiMaLkdoG0xEMHoMcwFgQIMgKag2Mb6j_J5kQXV2C0VY6C-zVUqS1P4pjFaIRGhxKdy2j49JN51mo1Mdhf6agbD_J76GbqpoQOAdqwUg7DObzpMWXDBDUXVNwEK3qEuhV-xmeDtw11djyiiNjB5q_s_kdHmS7cFM4p2NKxb8Pxww2G6lZkJ7sb_KzIjEyTsG31QagPe-BI9YYgy9V6l_YVrAnQt2ea7aXXZoSXPCHw"/>
</button>
<!-- Profile Dropdown -->
<div class="hidden absolute right-0 mt-2 w-48 bg-white dark:bg-[#161b22] border border-outline-variant rounded-lg shadow-xl py-2 z-50" id="profileMenu">
<div class="block px-4 py-2 text-xs hover:bg-primary/5 hover:text-primary transition-colors">
<p class="font-bold text-label-md truncate dark:text-white">Alexander Pierce</p>
<p class="text-[11px] text-on-surface-variant dark:text-outline truncate">alexander.p@luntian.ai</p>
</div>
<div class="p-xs">
<a class="block px-4 py-2 text-xs hover:bg-primary/5 hover:text-primary transition-colors" href="subscriptionPage.php">
<span class="material-symbols-outlined text-[18px]">work</span>Manage Subscription
                            </a>
<a class="block px-4 py-2 text-xs hover:bg-primary/5 hover:text-primary transition-colors" href="profilePage.php">
<span class="material-symbols-outlined text-[18px]">person</span> Profile
                            </a>
<div class="h-px bg-outline-variant/10 dark:bg-white/5 my-xs"></div>
<a class="block px-4 py-2 text-xs hover:bg-primary/5 hover:text-primary hover:bg-error/5 text-error text-label-md transition-colors" href="signinPage.php">
<span class="material-symbols-outlined text-[18px]">logout</span> Logout
                            </a>
</div>
</div>
</div>
</div>
</header>
<div class="flex flex-1 overflow-hidden relative">
<!-- File Explorer (Drawer on mobile) -->
<aside class="explorer-drawer w-64 border-r border-outline-variant flex flex-col shrink-0 bg-surface dark:bg-[#0d1117] md:relative md:bottom-auto md:left-auto md:right-auto md:h-auto" id="fileExplorerDrawer">
<div class="h-10 flex items-center justify-between px-4 border-b border-outline-variant/50">
<span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Explorer</span>
<div class="flex gap-1">
<button class="material-symbols-outlined text-base text-gray-400 hover:text-primary p-0.5" onclick="showInlineInput('file')" title="New File">add</button>
<button class="material-symbols-outlined text-base text-gray-400 hover:text-primary p-0.5" onclick="showInlineInput('folder')" title="New Folder">create_new_folder</button>
<button class="material-symbols-outlined text-base md:hidden text-gray-400 p-0.5" onclick="closeDrawers()" id="mobileCloseFolder">keyboard_double_arrow_down</button>
</div>
</div>
<div class="hidden px-4 py-2" id="inlineInputArea">
<input class="w-full text-xs bg-white dark:bg-[#161b22] border border-outline rounded py-1 px-2 focus:ring-1 focus:ring-primary outline-none" id="newPathInput" onkeydown="handleNewPath(event)" placeholder="Name..." type="text"/>
</div>
<div class="flex-1 overflow-y-auto py-2" id="fileExplorer"></div>
<div class="p-4 border-t border-outline-variant">
<div class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-2">Dependencies</div>
<div class="space-y-2 mb-3 max-h-24 overflow-y-auto" id="installedDepsList">
<!-- Dependency tags will appear here -->
</div>
<div class="relative">
<span class="absolute left-2 top-1.5 text-[10px] text-gray-400 font-mono">$</span>
<input class="w-full text-[11px] bg-background-cool dark:bg-[#161b22] border border-outline rounded py-1 pl-4 pr-2 font-mono outline-none focus:border-primary/50" id="dependencyInput" onkeydown="handleDependencyInstall(event)" placeholder="npm install..." type="text"/>
</div>
</div>
</aside>
<!-- Main Editor -->
<section class="flex-1 flex flex-col min-w-0" id="editorSection">
<div class="h-10 border-b border-outline-variant bg-surface-dim dark:bg-[#161b22] flex items-center justify-between px-2" id="tabsContainerWrapper">
<div class="flex h-full overflow-x-auto no-scrollbar" id="tabsContainer"></div>
<div class="flex items-center gap-3 px-3 mobile-hidden">
<div class="flex items-center gap-1.5">
<span class="text-[10px] font-bold text-gray-400 uppercase">Lang:</span>
<select class="bg-transparent border-none text-[10px] font-bold p-0 text-gray-500 focus:ring-0 cursor-pointer outline-none" id="langSwitcher" onchange="updateEditorSyntax()">
<option value="html">HTML</option>
<option value="javascript">JavaScript</option>
<option value="python">Python</option>
</select>
</div>
</div>
</div>
<div class="flex-1 relative flex overflow-hidden group/editor">
<div class="w-10 md:w-12 text-right text-[10px] md:text-[12px] py-4 pr-3 select-none flex-shrink-0 bg-[#f6f8fa] dark:bg-[#0d1117] text-gray-400 border-r border-outline-variant" id="lineNumbers">1</div>
<div class="flex-1 relative overflow-hidden bg-white dark:bg-[#0d1117]">
<!-- AI Inline Actions -->
<div class="absolute right-4 top-4 z-30 opacity-0 group-hover/editor:opacity-100 transition-opacity flex flex-col gap-2 pointer-events-none">
<button class="w-8 h-8 bg-white dark:bg-[#161b22] border border-outline-variant rounded shadow-lg flex items-center justify-center text-primary hover:text-white hover:bg-primary transition-all pointer-events-auto" onclick="triggerInlineAI()" title="Complete with AI">
<span class="material-symbols-outlined text-lg">auto_awesome</span>
</button>
</div>
<div class="font-mono text-[12px] md:text-[13px] leading-6 w-full h-full pointer-events-none" id="editorOverlay"></div>
<div class="absolute inset-0 overflow-auto scroll-smooth" id="editorScrollContainer" onscroll="syncEditorScroll()">
<div class="font-mono text-[12px] md:text-[13px] leading-6 py-4 px-4 w-full h-full min-h-full outline-none whitespace-pre caret-primary" contenteditable="true" id="fileContent" oninput="handleEditorInput(event)" onkeydown="handleEditorKeyDown(event)" spellcheck="false"></div>
</div>
</div>
</div>
<!-- Terminal -->
<div class="h-32 md:h-48 border-t border-outline-variant bg-white dark:bg-[#010409] flex flex-col" id="bottomPanel">
<div class="flex h-9 border-b border-outline-variant px-4 items-center gap-4 md:gap-6">
<button class="text-[10px] font-bold text-primary border-b-2 border-primary h-full">TERMINAL</button>
<button class="text-[10px] font-bold text-gray-400 hover:text-gray-600 dark:hover:text-gray-200">OUTPUT</button>
<button class="text-[10px] font-bold text-gray-400 hover:text-gray-600 dark:hover:text-gray-200 mobile-hidden">DEBUG CONSOLE</button>
<div class="ml-auto flex gap-2">
<button class="material-symbols-outlined text-sm text-gray-400 hover:text-error" onclick="clearTerminal()">delete</button>
</div>
</div>
<div class="flex-1 p-3 md:p-4 font-mono text-[10px] md:text-[11px] overflow-y-auto text-green-600 dark:text-[#7ee787]" id="terminalBody">
<div id="terminalContent">
<div class="text-gray-400 mb-1">luntian-pro@cloud-v4:~/project/dev-studio$ session started...</div>
</div>
<div class="flex items-center gap-2 mt-1">
<span class="text-primary font-bold">luntian-pro:~$</span>
<input autocomplete="off" class="flex-1 bg-transparent border-none focus:ring-0 p-0 text-on-surface dark:text-[#c9d1d9] font-mono text-[10px] md:text-[11px] outline-none" id="terminalInput" type="text"/>
</div>
</div>
</div>
</section>
<!-- AI Assistant Panel (Right) -->
<aside class="w-80 bg-surface dark:bg-[#161b22] border-l border-outline-variant flex flex-col shrink-0 h-full overflow-hidden" id="aiCompanionPanel">
<div class="h-14 border-b border-outline-variant flex items-center justify-between px-4 bg-surface-dim dark:bg-[#0d1117]/50">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-xl">auto_awesome</span>
<span class="text-[11px] font-bold uppercase tracking-wider">AI Companion</span>
</div>
<button class="material-symbols-outlined text-gray-400 hover:text-primary transition-colors" onclick="toggleAICompanion()">chevron_right</button>
</div>
<div class="flex-1 flex flex-col overflow-hidden">
<!-- Context Awareness Info -->
<div class="p-3 bg-primary/5 border-b border-outline-variant">
<div class="flex items-center gap-2 mb-1">
<span class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></span>
<span class="text-[10px] font-medium text-gray-500 uppercase">Context Active</span>
</div>
<div class="text-[11px] font-mono text-primary truncate" id="aiContextFile">/index.html</div>
</div>
<!-- Message Stream -->
<div class="flex-1 overflow-y-auto p-4 space-y-4" id="aiMessageStream">
<div class="space-y-2">
<div class="flex items-center gap-2">
<div class="w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center">
<span class="material-symbols-outlined text-xs text-primary">smart_toy</span>
</div>
<span class="text-[10px] font-bold text-gray-400">LUNTIAN AI</span>
</div>
<div class="bg-gray-50 dark:bg-[#0d1117] rounded-lg p-3 text-xs leading-relaxed border border-outline-variant">
I've analyzed your active file. Here are some observations:
<ul class="mt-2 space-y-1 list-disc list-inside opacity-80">
<li>Semantic structure looks good.</li>
<li>Accessibility: consider adding <code class="bg-black/5 dark:bg-white/5 px-1">aria-labels</code> to interactive elements.</li>
<li>Tailwind: You're using primary color tokens correctly.</li>
</ul>
</div>
</div>
</div>
<!-- Chat Interface -->
<div class="p-4 border-t border-outline-variant bg-white dark:bg-[#161b22]">
<div class="relative">
<textarea class="w-full bg-background-cool dark:bg-[#0d1117] border border-outline rounded-lg px-3 py-2 pr-10 text-xs focus:ring-1 focus:ring-primary outline-none resize-none h-20" id="aiInput" placeholder="Ask anything about the code..."></textarea>
<button class="absolute right-2 bottom-2 material-symbols-outlined text-primary hover:scale-110 transition-transform" onclick="sendAIMessage()">send</button>
</div>
</div>
</div>
</aside>
</div>
</main>
<script>
    let vfs = {
        'index.html': `<!DOCTYPE html>\n<html lang="en">\n<head>\n  <meta charset="UTF-8">\n  <script src="https://cdn.tailwindcss.com"><\/script>\n  <title>Luntian App</title>\n</head>\n<body class="bg-slate-50 min-h-screen p-8 font-sans">\n  <div class="max-w-md mx-auto bg-white rounded-2xl shadow-xl overflow-hidden md:max-w-2xl p-8 border border-slate-100">\n    <h1 class="text-3xl font-extrabold text-indigo-900 mb-2">Precision Intelligence</h1>\n    <p class="text-slate-500 mb-6">Experience the future of intelligent development with Luntian AI Pro.</p>\n    <button class="w-full py-3 bg-indigo-600 text-white rounded-xl font-bold shadow-lg shadow-indigo-200 hover:bg-indigo-700 transition-all">Get Started</button>\n  </div>\n</body>\n</html>`,
        'styles.css': `body {\n  font-family: 'Inter', sans-serif;\n  background-color: #f8fafc;\n}`,
        'script.js': `console.log("Dev Studio Initialized");\n\nfunction handleAction() {\n  console.log("Action performed");\n}`,
        'components/Header.html': `<!-- Shared Header Component -->\n<div class="p-4 bg-primary text-white">\n  <h1 class="text-xl">Dev Studio Pro</h1>\n</div>`
    };

    let structure = [
        { id: 'f_root', name: 'root', type: 'folder', isOpen: true, children: [
            { id: 'index.html', name: 'index.html', type: 'file' },
            { id: 'styles.css', name: 'styles.css', type: 'file' },
            { id: 'script.js', name: 'script.js', type: 'file' },
            { id: 'f_comp', name: 'components', type: 'folder', isOpen: true, children: [
                { id: 'components/Header.html', name: 'Header.html', type: 'file' }
            ]}
        ]}
    ];

    let activeFile = 'index.html';
    let currentPreviewPath = 'index.html';
    let selectedNodeId = 'f_root'; 
    let openTabs = ['index.html', 'styles.css', 'script.js'];
    let isDark = false;
    let nextInputType = 'file';
    const previewHistoryStack = ['index.html'];
    let previewHistoryIndex = 0;
    let installedDependencies = ['tailwindcss', 'autoprefixer'];

    window.onload = () => {
        renderExplorer();
        renderTabs();
        loadActiveFile();
        setupTerminal();
        setupDraggable();
        renderDependencies();
        
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.relative')) {
                const menu = document.getElementById('profileMenu');
                if (menu) menu.classList.add('hidden');
            }
        });
    };

    function toggleProfileMenu() {
        document.getElementById('profileMenu').classList.toggle('hidden');
    }

    /* Dependency Management */
    function renderDependencies() {
        const list = document.getElementById('installedDepsList');
        list.innerHTML = installedDependencies.map(dep => `
            <div class="inline-flex items-center gap-1.5 px-2 py-0.5 bg-gray-100 dark:bg-white/5 border border-outline-variant rounded-full text-[10px] font-mono text-gray-500 dark:text-gray-400 group">
                <span>${dep}</span>
                <button class="material-symbols-outlined text-[10px] hover:text-error opacity-0 group-hover:opacity-100 transition-opacity" onclick="removeDependency('${dep}')">close</button>
            </div>
        `).join(' ');
    }

    function removeDependency(dep) {
        installedDependencies = installedDependencies.filter(d => d !== dep);
        renderDependencies();
        writeTerminalLine(`$ npm uninstall ${dep}`, 'gray-400');
        writeTerminalLine(`Removed package '${dep}' from project.`, 'yellow-600');
    }

    function handleDependencyInstall(e) {
        if (e.key === 'Enter') {
            const input = e.target;
            let depName = input.value.trim();
            if (!depName) return;

            // Strip "npm install" or "npm i" if user typed it out of habit
            depName = depName.replace(/^npm install\s+/, '').replace(/^npm i\s+/, '');
            
            input.value = '';
            input.disabled = true;

            const terminal = document.getElementById('terminalContent');
            const scrollBody = document.getElementById('terminalBody');

            writeTerminalLine(`$ npm install ${depName}`, 'primary');
            
            setTimeout(() => {
                writeTerminalLine(`⠋ Searching for ${depName} in registry...`, 'gray-400');
                scrollBody.scrollTop = scrollBody.scrollHeight;
            }, 400);

            setTimeout(() => {
                writeTerminalLine(`✔ Found version 1.0.4`, 'green-600');
                writeTerminalLine(`↓ Downloading binaries... [============] 100%`, 'gray-400');
                scrollBody.scrollTop = scrollBody.scrollHeight;
            }, 1200);

            setTimeout(() => {
                writeTerminalLine(`📦 Extracting files...`, 'gray-400');
                scrollBody.scrollTop = scrollBody.scrollHeight;
            }, 1800);

            setTimeout(() => {
                writeTerminalLine(`🚀 Success: ${depName} installed and linked.`, 'green-600 font-bold');
                if (!installedDependencies.includes(depName)) {
                    installedDependencies.push(depName);
                    renderDependencies();
                }
                input.disabled = false;
                input.focus();
                scrollBody.scrollTop = scrollBody.scrollHeight;
            }, 2500);
        }
    }

    function writeTerminalLine(text, colorClass) {
        const content = document.getElementById('terminalContent');
        const color = colorClass.includes('text-') ? colorClass : `text-${colorClass}`;
        content.innerHTML += `<div class="${color} mt-0.5">${text}</div>`;
        document.getElementById('terminalBody').scrollTop = document.getElementById('terminalBody').scrollHeight;
    }

    /* AI Companion Controls */
    function toggleAICompanion() {
        const panel = document.getElementById('aiCompanionPanel');
        panel.classList.toggle('collapsed');
        if (panel.classList.contains('collapsed')) {
            panel.style.display = 'none';
        } else {
            panel.style.display = 'flex';
        }
    }

    function triggerAIGenerate() {
        writeTerminalLine(`[AI] Initiating generation based on project requirements...`, 'primary flex items-center gap-2');
        
        setTimeout(() => {
            const msgStream = document.getElementById('aiMessageStream');
            msgStream.innerHTML += `
                <div class="space-y-2 animate-pulse">
                    <div class="flex items-center gap-2">
                        <div class="w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center">
                            <span class="material-symbols-outlined text-xs text-primary">auto_awesome</span>
                        </div>
                        <span class="text-[10px] font-bold text-gray-400">LUNTIAN AI</span>
                    </div>
                    <div class="bg-primary/5 rounded-lg p-3 text-xs border border-primary/20 italic">Generating boilerplate assets...</div>
                </div>
            `;
            msgStream.scrollTop = msgStream.scrollHeight;
        }, 800);
    }

    function triggerInlineAI() {
        const editor = document.getElementById('fileContent');
        const selection = window.getSelection();
        if(selection.rangeCount > 0) {
            const range = selection.getRangeAt(0);
            const span = document.createElement('span');
            span.className = 'text-primary/40 animate-pulse font-mono';
            span.innerText = '';
            range.insertNode(span);
            
            setTimeout(() => {
                span.remove();
                document.execCommand('insertText', false, '  <!-- Suggested block added by AI -->');
                handleEditorInput({target: editor});
            }, 1000);
        }
    }

    function sendAIMessage() {
        const input = document.getElementById('aiInput');
        const text = input.value.trim();
        if (!text) return;
        
        const msgStream = document.getElementById('aiMessageStream');
        msgStream.innerHTML += `
            <div class="space-y-2 flex flex-col items-end">
                <span class="text-[10px] font-bold text-gray-400">YOU</span>
                <div class="bg-primary text-white rounded-lg p-3 text-xs border border-primary/20 max-w-[90%] shadow-sm">${text}</div>
            </div>
        `;
        
        input.value = '';
        msgStream.scrollTop = msgStream.scrollHeight;

        setTimeout(() => {
            msgStream.innerHTML += `
                <div class="space-y-2">
                    <div class="flex items-center gap-2">
                        <div class="w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center">
                            <span class="material-symbols-outlined text-xs text-primary">smart_toy</span>
                        </div>
                        <span class="text-[10px] font-bold text-gray-400">LUNTIAN AI</span>
                    </div>
                    <div class="bg-gray-50 dark:bg-[#0d1117] rounded-lg p-3 text-xs leading-relaxed border border-outline-variant">
                        Understood. Based on <strong>${activeFile}</strong>, I recommend adjusting the layout constraints to better handle responsive breakpoints. Would you like me to generate the Tailwind code for that?
                    </div>
                </div>
            `;
            msgStream.scrollTop = msgStream.scrollHeight;
        }, 1000);
    }

    /* Responsive Drawer Toggles */
    function toggleSidebar() {
        const sidebar = document.getElementById('mainSidebar');
        const overlay = document.getElementById('mobileOverlay');
        sidebar.classList.toggle('open');
        overlay.classList.toggle('active');
        document.getElementById('fileExplorerDrawer').classList.remove('open');
    }

    function toggleExplorer() {
        const drawer = document.getElementById('fileExplorerDrawer');
        const overlay = document.getElementById('mobileOverlay');
        drawer.classList.toggle('open');
        overlay.classList.toggle('active');
        document.getElementById('mainSidebar').classList.remove('open');
    }

    function closeDrawers() {
        document.getElementById('mainSidebar').classList.remove('open');
        document.getElementById('fileExplorerDrawer').classList.remove('open');
        document.getElementById('mobileOverlay').classList.remove('active');
    }

    /* New Project Logic */
    function openProjectModal() {
        document.getElementById('projectModal').classList.remove('hidden');
        document.getElementById('newProjectName').focus();
    }

    function closeProjectModal() {
        document.getElementById('projectModal').classList.add('hidden');
    }

    function confirmCreateProject() {
        const name = document.getElementById('newProjectName').value || 'untitled-project';
        
        // Reset Logic
        vfs = { 'index.html': `<!-- New Project: ${name} -->\n<!DOCTYPE html>\n<html>\n<body>\n  <h1>Welcome to ${name}</h1>\n</body>\n</html>` };
        structure = [{ id: 'f_root', name: name, type: 'folder', isOpen: true, children: [{ id: 'index.html', name: 'index.html', type: 'file' }] }];
        openTabs = ['index.html'];
        activeFile = 'index.html';
        
        renderExplorer();
        renderTabs();
        loadActiveFile();
        closeProjectModal();
        closeDrawers();
        
        writeTerminalLine(`[SYSTEM] Created new project: ${name}`, 'blue-400');
    }

    function renderExplorer() {
        const container = document.getElementById('fileExplorer');
        container.innerHTML = '';
        const renderList = (items, depth = 0) => {
            items.forEach(item => {
                const div = document.createElement('div');
                const isSelected = selectedNodeId === item.id;
                const isActiveFile = activeFile === item.id;
                
                div.className = `group flex items-center gap-2 py-1.5 md:py-1 px-4 cursor-pointer text-[12px] transition-colors
                    ${isSelected ? 'bg-primary/10 text-primary border-l-2 border-primary' : 'hover:bg-black/5 dark:hover:bg-white/5 text-gray-600 dark:text-gray-400'} 
                    ${isActiveFile ? 'font-semibold' : ''}`;
                
                div.style.paddingLeft = `${(depth * 16) + 16}px`;

                const icon = item.type === 'folder' ? (item.isOpen ? 'expand_more' : 'chevron_right') : getFileIcon(item.name);
                const folderIcon = item.type === 'folder' ? (item.isOpen ? 'folder_open' : 'folder') : '';
                
                div.innerHTML = `
                    <span class="material-symbols-outlined text-sm leading-none opacity-60">${icon}</span>
                    ${folderIcon ? `<span class="material-symbols-outlined text-sm text-yellow-500">${folderIcon}</span>` : ''}
                    <span class="flex-1 truncate ml-0.5">${item.name}</span>
                    <button class="delete-btn material-symbols-outlined text-[16px] opacity-0 group-hover:opacity-60 hover:!opacity-100 hover:text-error transition-all p-0.5 rounded" title="Delete">delete</button>
                `;

                div.onclick = (e) => {
                    if (e.target.closest('.delete-btn')) {
                        e.stopPropagation();
                        openDeleteModal(item);
                        return;
                    }
                    selectedNodeId = item.id;
                    if (item.type === 'folder') {
                        item.isOpen = !item.isOpen;
                    } else {
                        switchFile(item.id);
                        if(window.innerWidth <= 768) closeDrawers();
                    }
                    renderExplorer();
                };
                container.appendChild(div);

                if (item.type === 'folder' && item.isOpen && item.children) {
                    renderList(item.children, depth + 1);
                }
            });
        };
        renderList(structure);
    }

    function openDeleteModal(item) {
        document.getElementById('deleteTargetName').innerText = item.name;
        const modal = document.getElementById('deleteModal');
        const content = document.getElementById('deleteModalContent');
        modal.classList.remove('hidden');
        setTimeout(() => {
            content.classList.remove('scale-95', 'opacity-0');
            content.classList.add('scale-100', 'opacity-100');
        }, 10);
        document.getElementById('confirmDeleteBtn').onclick = () => confirmDelete(item);
    }

    function closeDeleteModal() {
        const modal = document.getElementById('deleteModal');
        const content = document.getElementById('deleteModalContent');
        content.classList.add('scale-95', 'opacity-0');
        setTimeout(() => modal.classList.add('hidden'), 200);
    }

    function confirmDelete(target) {
        const removeItem = (list) => {
            for (let i = 0; i < list.length; i++) {
                if (list[i].id === target.id) {
                    list.splice(i, 1);
                    return true;
                }
                if (list[i].children && removeItem(list[i].children)) return true;
            }
            return false;
        };
        removeItem(structure);
        if (target.type === 'file') {
            delete vfs[target.id];
            openTabs = openTabs.filter(t => t !== target.id);
            if (activeFile === target.id) activeFile = openTabs[0] || '';
        } else if (target.type === 'folder') {
            // Remove all files belonging to this folder from VFS and tabs
            const prefix = target.id.replace('f_', '') + '/';
            Object.keys(vfs).forEach(path => {
                if (path.startsWith(prefix)) {
                    delete vfs[path];
                    openTabs = openTabs.filter(t => t !== path);
                }
            });
            if (!vfs[activeFile]) activeFile = openTabs[0] || '';
        }
        renderExplorer();
        renderTabs();
        loadActiveFile();
        closeDeleteModal();
        writeTerminalLine(`[SYSTEM] Deleted ${target.type}: ${target.name}`, 'text-error font-bold');
    }

    function showInlineInput(type) {
        nextInputType = type;
        const inputArea = document.getElementById('inlineInputArea');
        inputArea.classList.remove('hidden');
        document.getElementById('newPathInput').focus();
    }

    function handleNewPath(e) {
        if (e.key === 'Enter') {
            const name = e.target.value.trim();
            if (!name) return;
            
            const newItem = {
                id: name,
                name: name,
                type: nextInputType,
                children: nextInputType === 'folder' ? [] : undefined
            };

            const findAndAdd = (items) => {
                for (let item of items) {
                    if (item.id === selectedNodeId && item.type === 'folder') {
                        if (!item.children) item.children = [];
                        item.children.push(newItem);
                        return true;
                    }
                    if (item.children && findAndAdd(item.children)) return true;
                }
                return false;
            };

            if (!findAndAdd(structure)) {
                structure[0].children.push(newItem);
            }

            if (nextInputType === 'file') vfs[name] = '';
            
            e.target.value = '';
            document.getElementById('inlineInputArea').classList.add('hidden');
            renderExplorer();
        } else if (e.key === 'Escape') {
            document.getElementById('inlineInputArea').classList.add('hidden');
        }
    }

    function getFileIcon(name) {
        if (name.endsWith('.html')) return 'html';
        if (name.endsWith('.css')) return 'css';
        if (name.endsWith('.js')) return 'javascript';
        if (name.endsWith('.py')) return 'code';
        return 'description';
    }

    function renderTabs() {
        const container = document.getElementById('tabsContainer');
        container.innerHTML = '';
        openTabs.forEach(id => {
            const isActive = activeFile === id;
            const tab = document.createElement('div');
            tab.className = `flex items-center gap-2 px-4 h-full text-[11px] cursor-pointer border-r border-outline-variant/30 transition-all select-none ${isActive ? 'tab-active text-primary shrink-0' : 'bg-gray-100 dark:bg-[#0d1117]/50 text-gray-400 hover:bg-gray-200 dark:hover:bg-white/5 shrink-0'}`;
            tab.innerHTML = `
                <span class="material-symbols-outlined text-sm opacity-60">${getFileIcon(id)}</span>
                <span class="truncate max-w-[100px] font-medium">${id.split('/').pop()}</span>
                <span class="material-symbols-outlined text-[12px] opacity-40 hover:opacity-100 hover:text-error" onclick="closeTab('${id}', event)">close</span>
            `;
            tab.onclick = () => switchFile(id);
            container.appendChild(tab);
        });
    }

    function switchFile(id) {
        if (!openTabs.includes(id)) openTabs.push(id);
        activeFile = id;
        selectedNodeId = id;
        renderTabs();
        renderExplorer();
        loadActiveFile();
        
        // Update AI Context
        document.getElementById('aiContextFile').innerText = '/' + id;
    }

    function closeTab(id, e) {
        e.stopPropagation();
        openTabs = openTabs.filter(t => t !== id);
        if (activeFile === id) activeFile = openTabs[openTabs.length - 1] || '';
        renderTabs();
        loadActiveFile();
    }

    function loadActiveFile() {
        const editor = document.getElementById('fileContent');
        const switcher = document.getElementById('langSwitcher');
        if (!activeFile) { 
            editor.innerText = ''; 
            document.getElementById('editorOverlay').innerHTML = ''; 
            return; 
        }
        if (activeFile.endsWith('.html')) switcher.value = 'html';
        else if (activeFile.endsWith('.js')) switcher.value = 'javascript';
        else if (activeFile.endsWith('.py')) switcher.value = 'python';
        
        editor.innerText = vfs[activeFile] || '';
        updateEditorSyntax();
        updateLineNumbers();
    }

    function handleEditorInput(e) {
        vfs[activeFile] = e.target.innerText;
        updateEditorSyntax();
        updateLineNumbers();
    }

    function updateEditorSyntax() {
        const code = vfs[activeFile] || '';
        let lang = document.getElementById('langSwitcher').value;
        if (activeFile && activeFile.endsWith('.css')) lang = 'css';
    }

    function updateLineNumbers() {
        const code = vfs[activeFile] || '';
        const lines = code.split('\n').length;
        document.getElementById('lineNumbers').innerHTML = Array.from({length: lines}, (_, i) => i + 1).join('<br>');
    }

    function syncEditorScroll() {
        const container = document.getElementById('editorScrollContainer');
        const overlay = document.getElementById('editorOverlay');
        const lineNums = document.getElementById('lineNumbers');
        overlay.scrollTop = container.scrollTop;
        overlay.scrollLeft = container.scrollLeft;
        lineNums.scrollTop = container.scrollTop;
    }

    function handleEditorKeyDown(e) {
        if (e.key === 'Tab') {
            e.preventDefault();
            document.execCommand('insertText', false, '  ');
            handleEditorInput({target: document.getElementById('fileContent')});
        }
        if (e.key === 'Enter') {
            e.preventDefault();
            const selection = window.getSelection();
            if(selection.rangeCount > 0) {
                const range = selection.getRangeAt(0);
                const text = document.getElementById('fileContent').innerText;
                const lines = text.substring(0, range.startOffset).split('\n');
                const lastLine = lines[lines.length-1];
                const match = lastLine.match(/^\s*/);
                const indent = match ? match[0] : "";
                
                document.execCommand('insertText', false, '\n' + indent);
                handleEditorInput({target: document.getElementById('fileContent')});
            }
        }
    }

    function updatePreviewPath(path, isHistoryNav = false) {
        currentPreviewPath = path;
        document.getElementById('previewUrlInput').value = `localhost/${path}`;
        if (!isHistoryNav) {
            previewHistoryStack.push(path);
            previewHistoryIndex = previewHistoryStack.length - 1;
        }
        injectPreviewContent();
    }

    function injectPreviewContent() {
        const iframe = document.getElementById('previewFrame');
        const path = currentPreviewPath;
        let content = vfs[path] || '<html><body>404 Not Found</body></html>';
        iframe.srcdoc = content;
    }

    function handleUrlInput(e) {
        if (e.key === 'Enter') {
            let val = e.target.value.replace('localhost/', '');
            updatePreviewPath(val);
        }
    }

    function previewHistory(dir) {
        const nextIdx = previewHistoryIndex + dir;
        if (nextIdx >= 0 && nextIdx < previewHistoryStack.length) {
            previewHistoryIndex = nextIdx;
            updatePreviewPath(previewHistoryStack[previewHistoryIndex], true);
        }
    }

    function resizePreview(mode) {
        const preview = document.getElementById('floatingPreview');
        preview.className = mode;
        preview.style.display = 'flex';
        document.querySelectorAll('.device-btn').forEach(b => b.classList.remove('active'));
        const btnId = mode === 'desktop' ? 'desktopBtn' : mode === 'tablet-p' ? 'tabletBtn' : 'mobileBtn';
        const btn = document.getElementById(btnId);
        if(btn) btn.classList.add('active');
    }

    function toggleMinimizePreview() { 
        document.getElementById('floatingPreview').classList.toggle('minimized'); 
    }

    function closePreview() {
        document.getElementById('floatingPreview').style.display = 'none';
    }

    function showPreview() {
        const preview = document.getElementById('floatingPreview');
        preview.style.display = 'flex';
        if (!preview.classList.contains('desktop') && !preview.classList.contains('tablet-p') && !preview.classList.contains('mobile-p')) {
            if(window.innerWidth <= 768) resizePreview('mobile-p');
            else resizePreview('desktop');
        }
    }

    function openStandaloneBrowser() {
        const win = window.open('', '_blank');
        if (win) {
            win.document.write(vfs[activeFile] || '');
            win.document.close();
        }
    }

    function enhancedRun() {
        writeTerminalLine(`[BUILD] Initializing virtual server...`, 'blue-500');
        setTimeout(() => {
            writeTerminalLine(`[SERVER] Application running at http://localhost:3000`, 'green-600 dark:text-[#7ee787]');
            showPreview();
            updatePreviewPath(activeFile && activeFile.endsWith('.html') ? activeFile : 'index.html');
        }, 300);
    }

    function clearTerminal() { document.getElementById('terminalContent').innerHTML = ''; }

    function setupTerminal() {
        const input = document.getElementById('terminalInput');
        input.onkeydown = (e) => {
            if (e.key === 'Enter' && input.value) {
                const cmd = input.value;
                const content = document.getElementById('terminalContent');
                content.innerHTML += `<div class="flex gap-2"><span class="text-primary font-bold">luntian-pro:~$</span> <span>${cmd}</span></div>`;
                if (cmd === 'ls') content.innerHTML += `<div class="text-gray-400">${Object.keys(vfs).join('  ')}</div>`;
                else if (cmd === 'clear') content.innerHTML = '';
                else if (cmd.startsWith('npm install ') || cmd.startsWith('npm i ')) {
                    const dep = cmd.split(' ').pop();
                    document.getElementById('dependencyInput').value = dep;
                    handleDependencyInstall({key: 'Enter', target: document.getElementById('dependencyInput')});
                }
                else content.innerHTML += `<div class="text-error">sh: command not found: ${cmd}</div>`;
                input.value = '';
                document.getElementById('terminalBody').scrollTop = document.getElementById('terminalBody').scrollHeight;
            }
        };
    }

    function setupDraggable() {
        const preview = document.getElementById('floatingPreview');
        const header = document.getElementById('previewHeader');
        let isDragging = false, startX, startY, initialX, initialY;
        header.onmousedown = (e) => {
            if(window.innerWidth <= 768) return;
            if (e.target.closest('button') || e.target.tagName === 'INPUT') return;
            isDragging = true; startX = e.clientX; startY = e.clientY;
            initialX = preview.offsetLeft; initialY = preview.offsetTop;
            preview.style.transition = 'none';
        };
        document.onmousemove = (e) => { 
            if (!isDragging) return; 
            preview.style.left = `${initialX + (e.clientX - startX)}px`; 
            preview.style.top = `${initialY + (e.clientY - startY)}px`; 
        };
        document.onmouseup = () => { 
            isDragging = false; 
            preview.style.transition = 'width 0.3s cubic-bezier(0.4, 0, 0.2, 1), height 0.3s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.2s ease, transform 0.2s ease'; 
        };
    }

    document.getElementById('themeToggle').onclick = function() {
        isDark = !isDark;
        document.documentElement.classList.toggle('dark');
        this.innerText = isDark ? 'light_mode' : 'dark_mode';
        updateEditorSyntax(); 
    };
</script>
</body></html>
