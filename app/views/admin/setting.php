<!DOCTYPE html>

<html dir="<?= $_SESSION['lang']=='ar'?'rtl':'ltr' ?>" 

      lang="<?= $_SESSION['lang']=='ar'?'ar':'en' ?>"><head>
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
                        "primary": "#0f49bd",
                        "background-light": "#f8f6f6",
                        "background-dark": "#221610",
                    },
                    fontFamily: {
                        "display": ["Public Sans", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
<style>
        body {
            font-family: 'Public Sans', sans-serif;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-display">
<div class="flex min-h-screen">
<!-- Sidebar -->
<aside class="w-64 bg-white dark:bg-slate-900 border-l border-slate-200 dark:border-slate-800 flex flex-col fixed h-full z-50">
<div class="p-6 flex items-center gap-3">
<div class="w-10 h-10 bg-primary rounded-xl flex items-center justify-center text-white">
<span class="material-symbols-outlined">school</span>
</div>
<div>
<h1 class="text-sm font-bold leading-tight"><?= $lang['system_name'] ?></h1>
<p class="text-xs text-slate-500 dark:text-slate-400"><?= $lang['academic_management'] ?></p>
</div>
</div>
<nav class="flex-1 px-4 space-y-1">
<a class="flex items-center gap-3 px-3 py-2 rounded-xl bg-primary/10 text-primary font-medium" href="<?= BASE_URL ?>admin/dashboard">
<span class="material-symbols-outlined">dashboard</span>
<span class="text-sm"><?= $lang['dashboard'] ?> </span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="<?= BASE_URL ?>admin/userManagment">
<span class="material-symbols-outlined">group</span>
<span class="text-sm"><?= $lang['users'] ?></span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="<?= BASE_URL ?>admin/rolesPermetion">
<span class="material-symbols-outlined">admin_panel_settings</span>
<span class="text-sm"><?= $lang['roles'] ?></span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="<?= BASE_URL ?>admin/departments">
<span class="material-symbols-outlined">corporate_fare</span>
<span class="text-sm"><?= $lang['departments'] ?></span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="<?= BASE_URL ?>admin/majors">
<span class="material-symbols-outlined">history_edu</span>
<span class="text-sm"><?= $lang['majors'] ?></span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="<?= BASE_URL ?>admin/reports">
<span class="material-symbols-outlined">bar_chart</span>
<span class="text-sm"><?= $lang['reports'] ?></span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="<?= BASE_URL ?>admin/settings">
<span class="material-symbols-outlined">settings</span>
<span class="text-sm"><?= $lang['settings'] ?></span>
</a>
</nav>
<div class="p-4 border-t border-slate-200 dark:border-slate-800">
<div class="flex items-center gap-3 p-2">
<div class="size-8 rounded-full bg-slate-200 dark:bg-slate-700 bg-cover bg-center" data-alt="User avatar profile picture" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAf1nLXfo3IS7esVmGpDlQncG3JdQVMTTxr8OWATWfrctiLCTNdp2cEM5gQ6EjI6u8WJoMdNmb0xqu0psE7WROwasTh8Mfej1ILuGbW8IlHSzPWys5UPZliT_e2POmS_2ELY5uo4H52twgjvFvRlzMPXjLmZLIH56Bc4y-xcZttMgZjk9IBDmyqVQZ7D_OvztZVmwxufkblSS0MCv0frnlaxFci7Z6UEXvOc3aNcQFsOt1Ylqum3yuBBfg6kk05vfW28MCPd3bUm-k')"></div>
<div class="flex-1 overflow-hidden">
<p class="text-xs font-bold truncate"><?= $lang['user_name'] ?> </p>
<p class="text-[10px] text-slate-500 truncate"><?= $lang['system_admin'] ?> </p>
</div>
</div>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 <?= $_SESSION['lang']=='ar'?'mr-64':'ml-64' ?>">
<!-- Navbar -->
<header class="h-16 border-b border-slate-200 dark:border-slate-800 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md sticky top-0 z-40 px-8 flex items-center justify-between">
<div class="flex items-center gap-4 flex-1">
<!-- Search bar removed as per request -->
</div>
<div class="flex items-center gap-3">
<button class="p-2 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg relative">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-2 right-2 w-2 h-2 bg-primary rounded-full border-2 border-white dark:border-slate-900"></span>
</button>
<?php if($_SESSION['lang'] == 'ar'): ?> 
    
    <a href="<?= BASE_URL ?>Language/change/en"
       class="flex items-center gap-2 px-4 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition">

       <span class="material-symbols-outlined">language</span>
        EN
    </a>

<?php else: ?>

    <a href="<?= BASE_URL ?>Language/change/ar"
       class="flex items-center gap-2 px-4 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition">

       <span class="material-symbols-outlined">language</span>
        AR
    </a>

<?php endif; ?>

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