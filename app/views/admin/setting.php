<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>GTS Admin - System Settings</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#ec5b13",
                        "background-light": "#f8f6f6",
                        "background-dark": "#221610",
                    },
                    fontFamily: {
                        "display": ["Public Sans"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        body { font-family: 'Public Sans', sans-serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100">
<div class="flex min-h-screen">
<!-- SideNavBar Component -->
<aside class="w-64 bg-white dark:bg-slate-900 border-r border-slate-200 dark:border-slate-800 flex flex-col fixed h-full z-50">
<div class="p-6 flex items-center gap-3">
<div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center text-white">
<span class="material-symbols-outlined">shield_person</span>
</div>
<div>
<h1 class="text-slate-900 dark:text-white text-base font-bold leading-none">GTS Admin</h1>
<p class="text-slate-500 dark:text-slate-400 text-xs mt-1">Super Administrator</p>
</div>
</div>
<nav class="flex-1 px-4 py-4 space-y-1">
<a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-xl transition-colors" href="#">
<span class="material-symbols-outlined">dashboard</span>
<span class="text-sm font-medium">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 bg-primary/10 text-primary rounded-xl" href="#">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">settings</span>
<span class="text-sm font-medium">System Settings</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-xl transition-colors" href="#">
<span class="material-symbols-outlined">group</span>
<span class="text-sm font-medium">User Management</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-xl transition-colors" href="#">
<span class="material-symbols-outlined">description</span>
<span class="text-sm font-medium">Reports</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-xl transition-colors" href="#">
<span class="material-symbols-outlined">security_update_good</span>
<span class="text-sm font-medium">Audit Logs</span>
</a>
</nav>
<div class="p-4 border-t border-slate-200 dark:border-slate-800">
<div class="flex items-center gap-3 px-2 py-2">
<div class="w-8 h-8 rounded-full bg-slate-200 dark:bg-slate-700 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="User profile avatar of a professional administrator" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBbU5rbIzQOu44i_hnx1JnUVMPTACBls7dMLVIr-3p38hsgeFFgi3XuAiqmOnuNNKiVC4YvEctucGodbGhCpbhcGv3W-hj7fLZl2RpZferiPC2Pghcgb_ffyp99W6EBwN5bKBq57_tyIe_q9Hy_XTfW6DdZbZw76bNHfBTN_3gdbqZ5WvfhzZe9Fj9s-xw6_fp7r-tQc9zPQy5bJQL0cKDMWsW_wEZdR6RqI2QfUFgK1mbZtqAkT1J-0pAnpip3ykJH_eW0juWMU8A"/>
</div>
<div class="flex-1 min-w-0">
<p class="text-xs font-semibold truncate">Alex Rivera</p>
<p class="text-[10px] text-slate-500">Log out</p>
</div>
<span class="material-symbols-outlined text-slate-400 text-sm">logout</span>
</div>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 ml-64 flex flex-col min-h-screen">
<!-- Header / Navbar -->
<header class="h-16 flex items-center justify-between px-8 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 sticky top-0 z-40">
<div class="flex items-center gap-2">
<span class="text-slate-400 text-sm">Admin</span>
<span class="text-slate-400 text-sm">/</span>
<span class="text-slate-900 dark:text-white text-sm font-medium">System Settings</span>
</div>
<div class="flex items-center gap-4">
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xl">search</span>
<input class="pl-10 pr-4 py-2 bg-slate-100 dark:bg-slate-800 border-none rounded-xl text-sm focus:ring-2 focus:ring-primary w-64" placeholder="Search settings..." type="text"/>
</div>
<button class="w-10 h-10 flex items-center justify-center rounded-xl bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400">
<span class="material-symbols-outlined">notifications</span>
</button>
</div>
</header>
<!-- Page Hero -->
<div class="px-8 py-8">
<div class="mb-8">
<h2 class="text-3xl font-black tracking-tight text-slate-900 dark:text-white">System Configuration</h2>
<p class="text-slate-500 dark:text-slate-400 mt-2">Global application environment settings, communication protocols, and security enforcement.</p>
</div>
<!-- Tabbed Navigation -->
<div class="border-b border-slate-200 dark:border-slate-800 mb-8 overflow-x-auto">
<div class="flex gap-8 whitespace-nowrap">
<button class="pb-4 border-b-2 border-primary text-primary font-bold text-sm flex items-center gap-2">
<span class="material-symbols-outlined text-lg">info</span> General
                    </button>
<button class="pb-4 border-b-2 border-transparent text-slate-500 hover:text-slate-700 dark:hover:text-slate-300 font-medium text-sm flex items-center gap-2">
<span class="material-symbols-outlined text-lg">language</span> Language
                    </button>
<button class="pb-4 border-b-2 border-transparent text-slate-500 hover:text-slate-700 dark:hover:text-slate-300 font-medium text-sm flex items-center gap-2">
<span class="material-symbols-outlined text-lg">mail</span> Email (SMTP)
                    </button>
<button class="pb-4 border-b-2 border-transparent text-slate-500 hover:text-slate-700 dark:hover:text-slate-300 font-medium text-sm flex items-center gap-2">
<span class="material-symbols-outlined text-lg">lock</span> Security
                    </button>
<button class="pb-4 border-b-2 border-transparent text-slate-500 hover:text-slate-700 dark:hover:text-slate-300 font-medium text-sm flex items-center gap-2">
<span class="material-symbols-outlined text-lg">backup</span> Backup
                    </button>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
<!-- Main Form Column -->
<div class="lg:col-span-2 space-y-8">
<!-- SMTP Settings Section -->
<section class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="flex items-center gap-2 mb-6">
<span class="material-symbols-outlined text-primary">alternate_email</span>
<h3 class="text-lg font-bold">Email (SMTP) Settings</h3>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="space-y-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">SMTP Host</label>
<input class="w-full rounded-lg border-slate-200 dark:border-slate-700 dark:bg-slate-800 text-sm focus:border-primary focus:ring-primary" type="text" value="smtp.gts-services.com"/>
</div>
<div class="space-y-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">SMTP Port</label>
<input class="w-full rounded-lg border-slate-200 dark:border-slate-700 dark:bg-slate-800 text-sm focus:border-primary focus:ring-primary" type="number" value="587"/>
</div>
<div class="space-y-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Username</label>
<input class="w-full rounded-lg border-slate-200 dark:border-slate-700 dark:bg-slate-800 text-sm focus:border-primary focus:ring-primary" type="email" value="notifications@gts-admin.com"/>
</div>
<div class="space-y-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Password</label>
<input class="w-full rounded-lg border-slate-200 dark:border-slate-700 dark:bg-slate-800 text-sm focus:border-primary focus:ring-primary" type="password" value="••••••••••••"/>
</div>
<div class="md:col-span-2 space-y-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Encryption Method</label>
<select class="w-full rounded-lg border-slate-200 dark:border-slate-700 dark:bg-slate-800 text-sm focus:border-primary focus:ring-primary">
<option>STARTTLS</option>
<option>SSL/TLS</option>
<option>None</option>
</select>
</div>
</div>
<div class="mt-6 flex justify-end gap-3">
<button class="px-4 py-2 rounded-lg text-sm font-semibold bg-slate-100 dark:bg-slate-800 text-slate-600">Test Connection</button>
<button class="px-4 py-2 rounded-lg text-sm font-semibold bg-primary text-white hover:bg-opacity-90 transition-all">Save SMTP Changes</button>
</div>
</section>
<!-- Security Toggles Section -->
<section class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="flex items-center gap-2 mb-6">
<span class="material-symbols-outlined text-primary">security</span>
<h3 class="text-lg font-bold">Security &amp; Authentication</h3>
</div>
<div class="space-y-6">
<div class="flex items-center justify-between p-4 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
<div>
<p class="font-bold text-sm">Two-Factor Authentication (2FA)</p>
<p class="text-xs text-slate-500">Require all administrative users to use 2FA apps.</p>
</div>
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary"></div>
</label>
</div>
<div class="flex items-center justify-between p-4 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
<div>
<p class="font-bold text-sm">Session Timeout</p>
<p class="text-xs text-slate-500">Automatically logout users after 30 minutes of inactivity.</p>
</div>
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary"></div>
</label>
</div>
<div class="flex items-center justify-between p-4 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
<div>
<p class="font-bold text-sm">IP Whitelisting</p>
<p class="text-xs text-slate-500">Restrict admin access to specific IP ranges.</p>
</div>
<label class="relative inline-flex items-center cursor-pointer">
<input class="sr-only peer" type="checkbox"/>
<div class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary"></div>
</label>
</div>
</div>
</section>
</div>
<!-- Side Info Column / Backup Section -->
<div class="space-y-8">
<!-- Backup Section -->
<section class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden relative">
<div class="absolute top-0 right-0 p-4 opacity-10">
<span class="material-symbols-outlined text-6xl">database</span>
</div>
<div class="flex items-center gap-2 mb-6">
<span class="material-symbols-outlined text-primary">cloud_upload</span>
<h3 class="text-lg font-bold">System Backup</h3>
</div>
<p class="text-sm text-slate-500 mb-6">Create a complete snapshot of the system database and configuration files.</p>
<div class="space-y-4">
<div class="p-3 bg-primary/5 border border-primary/20 rounded-lg">
<p class="text-[10px] uppercase font-bold text-primary mb-1">Last Backup</p>
<p class="text-sm font-semibold">October 24, 2023 - 04:12 AM</p>
</div>
<button class="w-full flex items-center justify-center gap-2 bg-primary text-white py-3 rounded-xl font-bold text-sm hover:shadow-lg hover:shadow-primary/20 transition-all">
<span class="material-symbols-outlined text-lg">add_circle</span>
                                Create New Backup
                            </button>
<div class="pt-4 border-t border-slate-100 dark:border-slate-800 space-y-2">
<p class="text-xs font-bold text-slate-400">Recent Snapshots</p>
<div class="flex items-center justify-between py-2">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-slate-400">description</span>
<span class="text-xs font-medium">backup_20231024.zip</span>
</div>
<button class="text-primary hover:underline text-xs font-bold flex items-center gap-1">
<span class="material-symbols-outlined text-base">download</span>
                                        Download
                                    </button>
</div>
<div class="flex items-center justify-between py-2">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-slate-400">description</span>
<span class="text-xs font-medium">backup_20231017.zip</span>
</div>
<button class="text-primary hover:underline text-xs font-bold flex items-center gap-1">
<span class="material-symbols-outlined text-base">download</span>
                                        Download
                                    </button>
</div>
</div>
</div>
</section>
<!-- Quick Support Card -->
<section class="bg-slate-900 text-white p-6 rounded-xl shadow-lg relative overflow-hidden">
<div class="absolute -right-4 -bottom-4 w-24 h-24 bg-primary/20 rounded-full blur-2xl"></div>
<h4 class="font-bold mb-2">Need assistance?</h4>
<p class="text-xs text-slate-400 mb-4 leading-relaxed">If you're unsure about SMTP or security settings, please consult the technical manual or contact dev support.</p>
<button class="text-xs font-bold text-primary flex items-center gap-1">
                            Read documentation <span class="material-symbols-outlined text-xs">arrow_forward</span>
</button>
</section>
</div>
</div>
</div>
</main>
</div>
</body></html>