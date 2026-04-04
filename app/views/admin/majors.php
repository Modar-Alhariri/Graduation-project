<!DOCTYPE html>

<html dir="rtl" lang="ar"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
                        "display": ["Public Sans", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
<style>
        body {
            font-family: 'Public Sans', sans-serif;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100">
<div class="flex h-screen overflow-hidden">
<!-- Side Navigation -->
<aside class="w-64 bg-slate-100 dark:bg-slate-900 border-l border-slate-200 dark:border-slate-800 flex flex-col h-full transition-colors shrink-0">
<div class="p-6 flex items-center gap-3 border-b border-slate-200 dark:border-slate-800">
<div class="bg-primary rounded-lg p-1.5 text-white flex items-center justify-center">
<span class="material-symbols-outlined">school</span>
</div>
<div>
<h1 class="text-slate-900 dark:text-slate-100 text-lg font-bold leading-none">GTS Admin</h1>
<p class="text-slate-500 dark:text-slate-400 text-xs mt-1">نظام إدارة التخصصات</p>
</div>
</div>
<nav class="flex-1 overflow-y-auto p-4 space-y-1">
<a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-800 rounded-xl transition-colors" href="#">
<span class="material-symbols-outlined">dashboard</span>
<span class="text-sm font-medium">لوحة القيادة</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 bg-primary/10 text-primary rounded-xl font-semibold" href="#">
<span class="material-symbols-outlined">terminal</span>
<span class="text-sm">إدارة التخصصات</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-800 rounded-xl transition-colors" href="#">
<span class="material-symbols-outlined">account_tree</span>
<span class="text-sm font-medium">إدارة الأقسام</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-800 rounded-xl transition-colors" href="#">
<span class="material-symbols-outlined">group</span>
<span class="text-sm font-medium">الخريجين</span>
</a>
<div class="pt-4 mt-4 border-t border-slate-200 dark:border-slate-800">
<a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-800 rounded-xl transition-colors" href="#">
<span class="material-symbols-outlined">settings</span>
<span class="text-sm font-medium">الإعدادات</span>
</a>
</div>
</nav>
<div class="p-4 border-t border-slate-200 dark:border-slate-800">
<div class="flex items-center gap-3 p-2 bg-slate-200/50 dark:bg-slate-800/50 rounded-xl">
<div class="size-9 rounded-full bg-slate-300 dark:bg-slate-700 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="User avatar for admin profile" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBR4c4mlFVryf9MdYb97n7j01HTzRyXp8FMTQ-z1t5XQ90YMN3MsYzvpLPrSEoTQ5lOSC_Z8GHU-mLGjWqD6ArZb4paCI9IxCv-VkLBZ_njFrZ5CnOB-mSFNUtIdpYjdcKcSQEe4wWoZN42DdeQzGrL8vOej26aHQVtl559iT9TYONw1D7nxisqI_plhkf2TpEOMdnaJ8pLbdgcMwd0pfqx8mtVv5RRgQCHiNS6dBRBeD2qeNT-jQcuxatuQr-79Kq8ZDYKGXXSZpA"/>
</div>
<div class="flex-1 overflow-hidden">
<p class="text-xs font-bold truncate">أحمد العتيبي</p>
<p class="text-[10px] text-slate-500 truncate">مدير النظام</p>
</div>
<span class="material-symbols-outlined text-slate-400 text-sm cursor-pointer">logout</span>
</div>
</div>
</aside>
<!-- Main Content Area -->
<main class="flex-1 flex flex-col h-full bg-background-light dark:bg-background-dark overflow-hidden">
<!-- Navbar -->
<header class="h-16 flex items-center justify-between px-8 border-b border-slate-200 dark:border-slate-800 bg-white/50 dark:bg-slate-900/50 backdrop-blur-md shrink-0">
<div class="flex items-center gap-4">
<div class="relative w-64">
<span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 text-lg">search</span>
<input class="w-full h-9 bg-slate-100 dark:bg-slate-800 border-none rounded-lg text-sm pr-10 focus:ring-2 focus:ring-primary/20 placeholder:text-slate-400" placeholder="بحث عن تخصص..." type="text"/>
</div>
</div>
<div class="flex items-center gap-3">
<button class="size-9 flex items-center justify-center rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors text-slate-500">
<span class="material-symbols-outlined">notifications</span>
</button>
<button class="size-9 flex items-center justify-center rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors text-slate-500">
<span class="material-symbols-outlined">help_outline</span>
</button>
<div class="h-6 w-px bg-slate-200 dark:bg-slate-800 mx-1"></div>
<div class="flex items-center gap-2">
<span class="text-sm font-semibold hidden md:block">GTS Portal</span>
<span class="material-symbols-outlined text-primary">verified_user</span>
</div>
</div>
</header>
<!-- Page Content -->
<div class="flex-1 overflow-y-auto p-8 space-y-6">
<!-- Page Header -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
<div>
<h2 class="text-2xl font-black text-slate-900 dark:text-slate-100">إدارة التخصصات</h2>
<p class="text-slate-500 dark:text-slate-400 mt-1">عرض وإدارة جميع التخصصات الأكاديمية المتاحة في النظام</p>
</div>
<button class="bg-primary hover:bg-primary/90 text-white px-6 py-2.5 rounded-xl font-bold flex items-center gap-2 transition-all shadow-lg shadow-primary/20 shrink-0">
<span class="material-symbols-outlined">add</span>
                        إضافة تخصص جديد
                    </button>
</div>
<!-- Filters -->
<div class="flex flex-wrap items-center gap-3">
<span class="text-sm font-semibold text-slate-400 ml-2">تصفية حسب القسم:</span>
<button class="px-4 py-1.5 rounded-full bg-primary text-white text-sm font-medium">كل الأقسام</button>
<button class="px-4 py-1.5 rounded-full bg-slate-200 dark:bg-slate-800 text-slate-600 dark:text-slate-300 text-sm font-medium hover:bg-slate-300 dark:hover:bg-slate-700 transition-colors">هندسة البرمجيات</button>
<button class="px-4 py-1.5 rounded-full bg-slate-200 dark:bg-slate-800 text-slate-600 dark:text-slate-300 text-sm font-medium hover:bg-slate-300 dark:hover:bg-slate-700 transition-colors">نظم المعلومات</button>
<button class="px-4 py-1.5 rounded-full bg-slate-200 dark:bg-slate-800 text-slate-600 dark:text-slate-300 text-sm font-medium hover:bg-slate-300 dark:hover:bg-slate-700 transition-colors">الأمن السيبراني</button>
<button class="px-4 py-1.5 rounded-full bg-slate-200 dark:bg-slate-800 text-slate-600 dark:text-slate-300 text-sm font-medium hover:bg-slate-300 dark:hover:bg-slate-700 transition-colors">الذكاء الاصطناعي</button>
</div>
<!-- Table Container -->
<div class="bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
<div class="overflow-x-auto @container">
<table class="w-full text-right border-collapse">
<thead>
<tr class="bg-slate-50 dark:bg-slate-800/50 text-slate-500 dark:text-slate-400 border-b border-slate-200 dark:border-slate-800">
<th class="px-6 py-4 font-semibold text-sm w-24">معرف التخصص</th>
<th class="px-6 py-4 font-semibold text-sm">اسم التخصص</th>
<th class="px-6 py-4 font-semibold text-sm">القسم المرتبط</th>
<th class="px-6 py-4 font-semibold text-sm">عدد الخريجين</th>
<th class="px-6 py-4 font-semibold text-sm text-center">الإجراءات</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-800">
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors group">
<td class="px-6 py-4 text-sm font-mono text-slate-400">#101</td>
<td class="px-6 py-4">
<span class="font-bold text-slate-900 dark:text-slate-100">علوم الحاسب</span>
</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-3 py-1 rounded-lg bg-primary/10 text-primary text-xs font-bold">
                                            قسم التقنية
                                        </span>
</td>
<td class="px-6 py-4 font-semibold text-slate-700 dark:text-slate-300">450</td>
<td class="px-6 py-4">
<div class="flex items-center justify-center gap-2">
<button class="size-8 rounded-lg flex items-center justify-center text-slate-400 hover:text-primary hover:bg-primary/10 transition-all">
<span class="material-symbols-outlined text-lg">edit</span>
</button>
<button class="size-8 rounded-lg flex items-center justify-center text-slate-400 hover:text-red-500 hover:bg-red-500/10 transition-all">
<span class="material-symbols-outlined text-lg">delete</span>
</button>
</div>
</td>
</tr>
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors group">
<td class="px-6 py-4 text-sm font-mono text-slate-400">#102</td>
<td class="px-6 py-4">
<span class="font-bold text-slate-900 dark:text-slate-100">هندسة الشبكات</span>
</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-3 py-1 rounded-lg bg-blue-500/10 text-blue-500 text-xs font-bold">
                                            قسم الهندسة
                                        </span>
</td>
<td class="px-6 py-4 font-semibold text-slate-700 dark:text-slate-300">320</td>
<td class="px-6 py-4">
<div class="flex items-center justify-center gap-2">
<button class="size-8 rounded-lg flex items-center justify-center text-slate-400 hover:text-primary hover:bg-primary/10 transition-all">
<span class="material-symbols-outlined text-lg">edit</span>
</button>
<button class="size-8 rounded-lg flex items-center justify-center text-slate-400 hover:text-red-500 hover:bg-red-500/10 transition-all">
<span class="material-symbols-outlined text-lg">delete</span>
</button>
</div>
</td>
</tr>
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors group">
<td class="px-6 py-4 text-sm font-mono text-slate-400">#103</td>
<td class="px-6 py-4">
<span class="font-bold text-slate-900 dark:text-slate-100">الذكاء الاصطناعي</span>
</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-3 py-1 rounded-lg bg-primary/10 text-primary text-xs font-bold">
                                            قسم التقنية
                                        </span>
</td>
<td class="px-6 py-4 font-semibold text-slate-700 dark:text-slate-300">180</td>
<td class="px-6 py-4">
<div class="flex items-center justify-center gap-2">
<button class="size-8 rounded-lg flex items-center justify-center text-slate-400 hover:text-primary hover:bg-primary/10 transition-all">
<span class="material-symbols-outlined text-lg">edit</span>
</button>
<button class="size-8 rounded-lg flex items-center justify-center text-slate-400 hover:text-red-500 hover:bg-red-500/10 transition-all">
<span class="material-symbols-outlined text-lg">delete</span>
</button>
</div>
</td>
</tr>
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors group">
<td class="px-6 py-4 text-sm font-mono text-slate-400">#104</td>
<td class="px-6 py-4">
<span class="font-bold text-slate-900 dark:text-slate-100">إدارة الأعمال</span>
</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-3 py-1 rounded-lg bg-emerald-500/10 text-emerald-500 text-xs font-bold">
                                            قسم الإدارة
                                        </span>
</td>
<td class="px-6 py-4 font-semibold text-slate-700 dark:text-slate-300">600</td>
<td class="px-6 py-4">
<div class="flex items-center justify-center gap-2">
<button class="size-8 rounded-lg flex items-center justify-center text-slate-400 hover:text-primary hover:bg-primary/10 transition-all">
<span class="material-symbols-outlined text-lg">edit</span>
</button>
<button class="size-8 rounded-lg flex items-center justify-center text-slate-400 hover:text-red-500 hover:bg-red-500/10 transition-all">
<span class="material-symbols-outlined text-lg">delete</span>
</button>
</div>
</td>
</tr>
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors group">
<td class="px-6 py-4 text-sm font-mono text-slate-400">#105</td>
<td class="px-6 py-4">
<span class="font-bold text-slate-900 dark:text-slate-100">الأمن السيبراني</span>
</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-3 py-1 rounded-lg bg-primary/10 text-primary text-xs font-bold">
                                            قسم التقنية
                                        </span>
</td>
<td class="px-6 py-4 font-semibold text-slate-700 dark:text-slate-300">215</td>
<td class="px-6 py-4">
<div class="flex items-center justify-center gap-2">
<button class="size-8 rounded-lg flex items-center justify-center text-slate-400 hover:text-primary hover:bg-primary/10 transition-all">
<span class="material-symbols-outlined text-lg">edit</span>
</button>
<button class="size-8 rounded-lg flex items-center justify-center text-slate-400 hover:text-red-500 hover:bg-red-500/10 transition-all">
<span class="material-symbols-outlined text-lg">delete</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Table Footer -->
<div class="px-6 py-4 border-t border-slate-200 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-800/20 flex items-center justify-between">
<div class="text-sm text-slate-500">
                            عرض 1 إلى 5 من أصل 24 تخصص
                        </div>
<div class="flex items-center gap-2">
<button class="size-8 flex items-center justify-center rounded-lg border border-slate-200 dark:border-slate-700 text-slate-400 hover:bg-white dark:hover:bg-slate-800 transition-colors">
<span class="material-symbols-outlined text-sm">chevron_right</span>
</button>
<button class="size-8 flex items-center justify-center rounded-lg bg-primary text-white font-bold text-sm">1</button>
<button class="size-8 flex items-center justify-center rounded-lg border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-400 hover:bg-white dark:hover:bg-slate-800 transition-colors text-sm">2</button>
<button class="size-8 flex items-center justify-center rounded-lg border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-400 hover:bg-white dark:hover:bg-slate-800 transition-colors text-sm">3</button>
<button class="size-8 flex items-center justify-center rounded-lg border border-slate-200 dark:border-slate-700 text-slate-400 hover:bg-white dark:hover:bg-slate-800 transition-colors">
<span class="material-symbols-outlined text-sm">chevron_left</span>
</button>
</div>
</div>
</div>
<!-- Stats Overview (Academic Feel) -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="bg-white dark:bg-slate-900 p-6 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm flex items-center gap-4">
<div class="size-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
<span class="material-symbols-outlined">menu_book</span>
</div>
<div>
<p class="text-slate-500 text-sm font-medium">إجمالي التخصصات</p>
<p class="text-2xl font-black">24</p>
</div>
</div>
<div class="bg-white dark:bg-slate-900 p-6 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm flex items-center gap-4">
<div class="size-12 rounded-xl bg-blue-500/10 text-blue-500 flex items-center justify-center">
<span class="material-symbols-outlined">account_balance</span>
</div>
<div>
<p class="text-slate-500 text-sm font-medium">الأقسام النشطة</p>
<p class="text-2xl font-black">6</p>
</div>
</div>
<div class="bg-white dark:bg-slate-900 p-6 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm flex items-center gap-4">
<div class="size-12 rounded-xl bg-emerald-500/10 text-emerald-500 flex items-center justify-center">
<span class="material-symbols-outlined">how_to_reg</span>
</div>
<div>
<p class="text-slate-500 text-sm font-medium">إجمالي الخريجين</p>
<p class="text-2xl font-black">1,765</p>
</div>
</div>
</div>
</div>
</main>
</div>
</body></html>