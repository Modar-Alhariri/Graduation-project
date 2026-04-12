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
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
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
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-display">
<div class="flex h-screen overflow-hidden">
<!-- Sidebar Navigation -->
<aside class="w-64 flex-shrink-0 bg-white dark:bg-slate-900 border-l border-slate-200 dark:border-slate-800 flex flex-col">
<div class="p-6 flex items-center gap-3">
<div class="bg-primary rounded-xl p-2 text-white">
<span class="material-symbols-outlined">school</span>
</div>
<div>
<h1 class="text-lg font-bold leading-tight">نظام تتبع الخريجين</h1>
<p class="text-xs text-slate-500 dark:text-slate-400">مكتب شؤون الخريجين</p>
</div>
</div>
<nav class="flex-1 px-4 space-y-2 mt-4">
<a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary text-white" href="<?= BASE_URL ?>alumni_office/dashboard">
<span class="material-symbols-outlined">dashboard</span>
<span class="text-sm font-medium">لوحة القيادة</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-300 transition-colors" href="<?= BASE_URL ?>AlumniOffice/graduatesManagment">
<span class="material-symbols-outlined">group</span>
<span class="text-sm font-medium">الخريجون</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-300 transition-colors" href="<?= BASE_URL ?>AlumniOffice/employmentManagment">
<span class="material-symbols-outlined">work</span>
<span class="text-sm font-medium">التوظيف</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-300 transition-colors" href="<?= BASE_URL ?>AlumniOffice/graduatesContact">
<span class="material-symbols-outlined">chat_bubble</span>
<span class="text-sm font-medium">التواصل</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-300 transition-colors" href="<?= BASE_URL ?>AlumniOffice/reports">
<span class="material-symbols-outlined">analytics</span>
<span class="text-sm font-medium">التقارير</span>
</a>
</nav>
<div class="p-4 border-t border-slate-200 dark:border-slate-800">
<div class="flex items-center gap-3 p-2">
<div class="w-10 h-10 rounded-full bg-slate-200" data-alt="User profile avatar icon" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuASzQdleLUSKYRete4_4Qw65DCoWytIUeyVg7zBLzNatxV5uPJ-55TeNE8DchU3_3C1bD2g-p89znUBuK-TnqWfRCbPGvcuEiDgXmWHqJnr3K33xDTBmb-ETPvqL5iIhBlQbjMXGrHgssZkwmNSSRQK-PVDfIP_QdQAx67RLKipiulWxpHuaSusoamvmivrmgoerzq_2sttkTUrecZsFzz4BZXVhmVM4Z1GlI0_GzE87zGGWcy9J1KlcEHyW-Vw1e0PK_N6-Oi3nPA')"></div>
<div class="flex-1 min-w-0">
<p class="text-sm font-semibold truncate">د. أحمد العلي</p>
<p class="text-xs text-slate-500 truncate">مدير المكتب</p>
</div>
<span class="material-symbols-outlined text-slate-400">settings</span>
</div>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 flex flex-col overflow-y-auto">
<!-- Header -->
<header class="h-16 flex items-center justify-between px-8 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 sticky top-0 z-10">
<div class="flex items-center gap-4">
<h2 class="text-xl font-bold">نظرة عامة</h2>
</div>
<div class="flex items-center gap-4">
<div class="relative w-64">
<span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
<input class="w-full pr-10 pl-4 py-2 rounded-xl border-slate-200 dark:border-slate-800 bg-slate-50 dark:bg-slate-800 focus:ring-primary focus:border-primary text-sm" placeholder="بحث عن خريج..." type="text"/>
</div>
<button class="p-2 rounded-xl bg-slate-100 dark:bg-slate-800 relative">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-2 right-2 w-2 h-2 bg-primary rounded-full ring-2 ring-white dark:ring-slate-900"></span>
</button>
</div>
</header>
<div class="p-8 space-y-8">
<!-- Page Header -->
<div class="flex flex-col gap-1">
<h1 class="text-3xl font-black tracking-tight text-slate-900 dark:text-white">التقارير والتحليلات</h1>
<p class="text-slate-500 dark:text-slate-400">نظرة شاملة على أداء الخريجين ومؤشرات التوظيف لعام 2024</p>
</div>
<!-- Employment Rate Summary Card -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
<div class="lg:col-span-1 bg-white dark:bg-slate-900 p-6 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col justify-between">
<div>
<div class="flex justify-between items-start">
<h3 class="text-lg font-bold">معدل التوظيف الإجمالي</h3>
<span class="bg-green-100 text-green-600 dark:bg-green-900/30 dark:text-green-400 px-2 py-1 rounded-lg text-xs font-bold">+5.2%</span>
</div>
<div class="mt-4 flex items-baseline gap-2">
<span class="text-5xl font-black text-primary">65%</span>
<span class="text-slate-500 text-sm">من إجمالي الخريجين</span>
</div>
</div>
<div class="mt-6 flex items-end gap-2 h-32">
<!-- Simple Bar Chart Mockup -->
<div class="flex-1 bg-primary/20 rounded-t-lg h-[40%]" title="2021"></div>
<div class="flex-1 bg-primary/40 rounded-t-lg h-[55%]" title="2022"></div>
<div class="flex-1 bg-primary/60 rounded-t-lg h-[60%]" title="2023"></div>
<div class="flex-1 bg-primary rounded-t-lg h-[65%]" title="2024"></div>
</div>
<div class="mt-4 grid grid-cols-2 gap-4">
<div class="p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
<p class="text-xs text-slate-500">موظفون</p>
<p class="text-lg font-bold">1,240</p>
</div>
<div class="p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
<p class="text-xs text-slate-500">باحثون عن عمل</p>
<p class="text-lg font-bold">660</p>
</div>
</div>
</div>
<!-- Timeline Comparison Chart -->
<div class="lg:col-span-2 bg-white dark:bg-slate-900 p-6 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="flex justify-between items-center mb-6">
<h3 class="text-lg font-bold">نمو معدل التوظيف (2022 - 2024)</h3>
<div class="flex gap-2">
<span class="flex items-center gap-1 text-xs text-slate-500">
<span class="size-2 rounded-full bg-primary"></span> التوظيف
                                </span>
</div>
</div>
<div class="relative h-64 w-full">
<!-- SVG Line Chart Mockup -->
<svg class="w-full h-full overflow-visible" viewbox="0 0 400 150">
<path class="text-primary" d="M0,130 L100,110 L200,95 L300,75 L400,60" fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="3"></path>
<circle class="fill-primary" cx="0" cy="130" r="4"></circle>
<circle class="fill-primary" cx="100" cy="110" r="4"></circle>
<circle class="fill-primary" cx="200" cy="95" r="4"></circle>
<circle class="fill-primary" cx="300" cy="75" r="4"></circle>
<circle class="fill-primary" cx="400" cy="60" r="4"></circle>
<!-- Grid Lines -->
<line class="text-slate-200 dark:text-slate-800" stroke="currentColor" x1="0" x2="400" y1="150" y2="150"></line>
<line class="text-slate-200 dark:text-slate-800" stroke="currentColor" stroke-dasharray="4" x1="0" x2="400" y1="100" y2="100"></line>
<line class="text-slate-200 dark:text-slate-800" stroke="currentColor" stroke-dasharray="4" x1="0" x2="400" y1="50" y2="50"></line>
</svg>
<div class="flex justify-between mt-4 text-xs text-slate-500 font-bold">
<span>يناير 2022</span>
<span>يوليو 2022</span>
<span>يناير 2023</span>
<span>يوليو 2023</span>
<span>يناير 2024</span>
</div>
</div>
</div>
</div>
<!-- Tables Section -->
<div class="grid grid-cols-1 xl:grid-cols-2 gap-8">
<!-- Report by Major -->
<div class="bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 overflow-hidden shadow-sm">
<div class="p-6 border-b border-slate-200 dark:border-slate-800 flex justify-between items-center">
<h3 class="text-lg font-bold">تقرير التوظيف حسب التخصص</h3>
<button class="text-primary text-sm font-bold hover:underline">عرض الكل</button>
</div>
<div class="overflow-x-auto">
<table class="w-full text-right border-collapse">
<thead class="bg-slate-50 dark:bg-slate-800/50 text-slate-500 text-sm font-bold">
<tr>
<th class="px-6 py-4">اسم التخصص</th>
<th class="px-6 py-4">عدد الموظفين</th>
<th class="px-6 py-4">باحث عن عمل</th>
<th class="px-6 py-4">النسبة</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-800">
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4 font-bold">هندسة الحاسب</td>
<td class="px-6 py-4">450</td>
<td class="px-6 py-4">120</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="w-16 h-2 bg-slate-200 dark:bg-slate-700 rounded-full overflow-hidden">
<div class="h-full bg-primary" style="width: 78%"></div>
</div>
<span class="text-sm font-bold text-slate-700 dark:text-slate-300">78%</span>
</div>
</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4 font-bold">إدارة الأعمال</td>
<td class="px-6 py-4">380</td>
<td class="px-6 py-4">240</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="w-16 h-2 bg-slate-200 dark:bg-slate-700 rounded-full overflow-hidden">
<div class="h-full bg-primary" style="width: 61%"></div>
</div>
<span class="text-sm font-bold text-slate-700 dark:text-slate-300">61%</span>
</div>
</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4 font-bold">اللغة الإنجليزية</td>
<td class="px-6 py-4">210</td>
<td class="px-6 py-4">180</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="w-16 h-2 bg-slate-200 dark:bg-slate-700 rounded-full overflow-hidden">
<div class="h-full bg-primary" style="width: 53%"></div>
</div>
<span class="text-sm font-bold text-slate-700 dark:text-slate-300">53%</span>
</div>
</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4 font-bold">التصميم الجرافيكي</td>
<td class="px-6 py-4">200</td>
<td class="px-6 py-4">120</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="w-16 h-2 bg-slate-200 dark:bg-slate-700 rounded-full overflow-hidden">
<div class="h-full bg-primary" style="width: 62%"></div>
</div>
<span class="text-sm font-bold text-slate-700 dark:text-slate-300">62%</span>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Report by Batch/Year -->
<div class="bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 overflow-hidden shadow-sm">
<div class="p-6 border-b border-slate-200 dark:border-slate-800 flex justify-between items-center">
<h3 class="text-lg font-bold">تقرير التوظيف حسب الدفعة</h3>
<button class="text-primary text-sm font-bold hover:underline">تحميل التقرير</button>
</div>
<div class="overflow-x-auto">
<table class="w-full text-right border-collapse">
<thead class="bg-slate-50 dark:bg-slate-800/50 text-slate-500 text-sm font-bold">
<tr>
<th class="px-6 py-4">السنة / الدفعة</th>
<th class="px-6 py-4">إجمالي الخريجين</th>
<th class="px-6 py-4">الموظفين</th>
<th class="px-6 py-4">حالة البيانات</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-800">
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4 font-bold">2024</td>
<td class="px-6 py-4">750</td>
<td class="px-6 py-4">487</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-300">قيد التحديث</span>
</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4 font-bold">2023</td>
<td class="px-6 py-4">680</td>
<td class="px-6 py-4">442</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-300">مكتمل</span>
</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4 font-bold">2022</td>
<td class="px-6 py-4">620</td>
<td class="px-6 py-4">372</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-300">مكتمل</span>
</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4 font-bold">2021</td>
<td class="px-6 py-4">590</td>
<td class="px-6 py-4">320</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-300">مكتمل</span>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<!-- Footer Summary -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
<div class="bg-primary/5 dark:bg-primary/10 p-4 rounded-xl border border-primary/20">
<p class="text-xs text-slate-500 dark:text-slate-400">متوسط الراتب المتوقع</p>
<p class="text-xl font-black text-primary">8,500 ر.س</p>
</div>
<div class="bg-primary/5 dark:bg-primary/10 p-4 rounded-xl border border-primary/20">
<p class="text-xs text-slate-500 dark:text-slate-400">فترة التوظيف (أشهر)</p>
<p class="text-xl font-black text-primary">4.2</p>
</div>
<div class="bg-primary/5 dark:bg-primary/10 p-4 rounded-xl border border-primary/20">
<p class="text-xs text-slate-500 dark:text-slate-400">الشركات الشريكة</p>
<p class="text-xl font-black text-primary">124+</p>
</div>
<div class="bg-primary/5 dark:bg-primary/10 p-4 rounded-xl border border-primary/20">
<p class="text-xs text-slate-500 dark:text-slate-400">رضا أصحاب العمل</p>
<p class="text-xl font-black text-primary">92%</p>
</div>
</div>
</div>
</main>
</div>
</body></html>