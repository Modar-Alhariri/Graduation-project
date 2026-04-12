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
                        "display": ["Public Sans"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
<title>لوحة بيانات العميد - Executive Dashboard</title>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 antialiased">
<div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
<div class="layout-container flex h-full grow flex-col">
<aside id="sidebar"
class="w-64 bg-white dark:bg-slate-900 border-l border-slate-200 dark:border-slate-800 flex flex-col fixed h-full z-50 transform translate-x-full md:translate-x-0 transition-transform duration-300">

<div class="p-6 flex items-center gap-3 border-b border-slate-200 dark:border-slate-800">
<div class="bg-primary p-2 rounded-lg flex items-center justify-center text-white">
<span class="material-symbols-outlined">analytics</span>
</div>
<h2 class="text-xl font-bold tracking-tight text-primary">GTS Dashboard</h2>
<button onclick="toggleSidebar()" 
    class="md:hidden p-1 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg">
        <span class="material-symbols-outlined">close</span>
    </button>
</div>
<nav class="flex-1 p-4 space-y-2">
<a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary/10 text-primary font-semibold" href="<?= BASE_URL ?>dean/dashboard">
<span class="material-symbols-outlined">dashboard</span>
<span>Dashboard</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 transition-colors" href="<?= BASE_URL ?>dean/analyticsReports">
<span class="material-symbols-outlined">work</span>
<span>Analytics Reports</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 transition-colors" href="<?= BASE_URL ?>dean/decisions">
<span class="material-symbols-outlined">group</span>
<span>Decisions</span>
</a>


</nav>
<div class="p-4 border-t border-slate-200 dark:border-slate-800">
<div class="flex items-center gap-3 p-2 rounded-xl bg-slate-100 dark:bg-slate-800">
<div class="size-10 rounded-full bg-slate-300 dark:bg-slate-600 bg-cover" data-alt="User avatar profile picture" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCO2pxVAQ6FY8-ILaabaq5CiriNhVYGfsIWcRr7LPeW20OBv-JHFo0QVeYrojV8tFLm77q37aKTw4rgch8a09yVnhUWkHLdBFlLWWObqoSs48jw44FcA6sRV7cxbBEi20IwQnJ962TGwAIoXHJXjaYcD1vkchI5qUFhWIpMPo-g0lMMhV2P3NoyPxTGzHL47EybXezPou1XQhyEuIiQSmo5-vpAOtSPfIJ23fxgxTLCnsPGEtCQw2XgDn-486aYGtIqeGMx_AanUKs')"></div>
<div class="flex flex-col overflow-hidden">
<span class="text-sm font-bold truncate">Admin GTS</span>
<span class="text-xs text-slate-500 truncate">admin@gts.com</span>
</div>
</div>
</div>
</aside>
<main class="flex-1 md:mr-64">
<header class="h-16 border-b border-slate-200 dark:border-slate-800 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md sticky top-0 z-40 px-8 flex items-center justify-between">
<button onclick="toggleSidebar()" 
class="md:hidden p-2 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg">
    <span class="material-symbols-outlined">menu</span>
</button>
<div class="flex items-center gap-4 flex-1">

</div>
<div class="flex items-center gap-3">
<button class="p-2 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg relative">
<span class="material-symbols-outlined">language</span>
<span class="absolute top-2 right-2 w-2 h-2 bg-primary rounded-full border-2 border-white dark:border-slate-900"></span>
</button>

</div>
</header>
<div class="mb-8 flex flex-col md:flex-row md:items-end justify-between gap-4">
<div>
<h1 class="text-3xl font-black text-slate-900 dark:text-slate-100 tracking-tight">لوحة البيانات التنفيذية</h1>
<p class="text-slate-500 dark:text-slate-400 mt-1">نظرة شاملة على أداء الكلية ومسارات الخريجين</p>
</div>
<div class="flex gap-3">
<button class="flex items-center gap-2 px-4 py-2 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg text-sm font-semibold hover:bg-slate-50 transition-colors">
<span class="material-symbols-outlined text-lg">calendar_today</span>
<span>التقرير السنوي</span>
</button>
<button class="flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-lg text-sm font-semibold hover:bg-primary/90 shadow-lg shadow-primary/20 transition-all">
<span class="material-symbols-outlined text-lg">download</span>
<span>تصدير البيانات</span>
</button>
</div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
<div class="bg-white dark:bg-slate-800 p-6 rounded-xl border border-slate-100 dark:border-slate-700 shadow-sm flex flex-col gap-2">
<div class="flex justify-between items-start">
<span class="p-2 bg-primary/10 rounded-lg material-symbols-outlined text-primary">groups</span>
<span class="text-emerald-500 text-sm font-bold bg-emerald-50 dark:bg-emerald-500/10 px-2 py-0.5 rounded-full flex items-center gap-1">
<span class="material-symbols-outlined text-xs">trending_up</span> 8%+
                            </span>
</div>
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">إجمالي الخريجين</p>
<p class="text-3xl font-bold text-slate-900 dark:text-slate-100">1,428</p>
</div>
<div class="bg-white dark:bg-slate-800 p-6 rounded-xl border border-slate-100 dark:border-slate-700 shadow-sm flex flex-col gap-2">
<div class="flex justify-between items-start">
<span class="p-2 bg-primary/10 rounded-lg material-symbols-outlined text-primary">work_history</span>
<span class="text-emerald-500 text-sm font-bold bg-emerald-50 dark:bg-emerald-500/10 px-2 py-0.5 rounded-full flex items-center gap-1">
<span class="material-symbols-outlined text-xs">trending_up</span> 12%+
                            </span>
</div>
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">معدل التوظيف العام</p>
<p class="text-3xl font-bold text-slate-900 dark:text-slate-100">82.5%</p>
</div>
<div class="bg-white dark:bg-slate-800 p-6 rounded-xl border border-slate-100 dark:border-slate-700 shadow-sm flex flex-col gap-2">
<div class="flex justify-between items-start">
<span class="p-2 bg-primary/10 rounded-lg material-symbols-outlined text-primary">person_search</span>
<span class="text-rose-500 text-sm font-bold bg-rose-50 dark:bg-rose-500/10 px-2 py-0.5 rounded-full flex items-center gap-1">
<span class="material-symbols-outlined text-xs">trending_down</span> 3%-
                            </span>
</div>
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">الباحثون عن عمل</p>
<p class="text-3xl font-bold text-slate-900 dark:text-slate-100">214</p>
</div>
<div class="bg-white dark:bg-slate-800 p-6 rounded-xl border border-slate-100 dark:border-slate-700 shadow-sm flex flex-col gap-2">
<div class="flex justify-between items-start">
<span class="p-2 bg-primary/10 rounded-lg material-symbols-outlined text-primary">corporate_fare</span>
<span class="text-slate-500 text-sm font-bold bg-slate-50 dark:bg-slate-700/50 px-2 py-0.5 rounded-full">0%</span>
</div>
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">الشركات الشريكة</p>
<p class="text-3xl font-bold text-slate-900 dark:text-slate-100">156</p>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
<div class="bg-white dark:bg-slate-800 p-6 rounded-xl border border-slate-100 dark:border-slate-700 shadow-sm">
<div class="flex items-center justify-between mb-6">
<h3 class="text-lg font-bold">نمو معدل التوظيف</h3>
<span class="text-xs text-slate-400">تحليل ربع سنوي</span>
</div>
<div class="relative h-64 w-full flex items-end justify-between gap-4 px-2">
<div class="absolute inset-0 flex flex-col justify-between pointer-events-none">
<div class="border-t border-slate-100 dark:border-slate-700/50 w-full h-0"></div>
<div class="border-t border-slate-100 dark:border-slate-700/50 w-full h-0"></div>
<div class="border-t border-slate-100 dark:border-slate-700/50 w-full h-0"></div>
<div class="border-t border-slate-100 dark:border-slate-700/50 w-full h-0"></div>
</div>
<div class="relative flex flex-col items-center gap-2 group w-full">
<div class="w-full bg-primary/20 rounded-t-lg h-32 group-hover:bg-primary/30 transition-all relative">
<div class="absolute -top-1 w-2 h-2 rounded-full bg-primary left-1/2 -translate-x-1/2 shadow-[0_0_8px_rgba(236,91,19,0.8)]"></div>
</div>
<span class="text-xs font-medium text-slate-500">2021</span>
</div>
<div class="relative flex flex-col items-center gap-2 group w-full">
<div class="w-full bg-primary/20 rounded-t-lg h-40 group-hover:bg-primary/30 transition-all relative">
<div class="absolute -top-1 w-2 h-2 rounded-full bg-primary left-1/2 -translate-x-1/2 shadow-[0_0_8px_rgba(236,91,19,0.8)]"></div>
</div>
<span class="text-xs font-medium text-slate-500">2022</span>
</div>
<div class="relative flex flex-col items-center gap-2 group w-full">
<div class="w-full bg-primary/20 rounded-t-lg h-48 group-hover:bg-primary/30 transition-all relative">
<div class="absolute -top-1 w-2 h-2 rounded-full bg-primary left-1/2 -translate-x-1/2 shadow-[0_0_8px_rgba(236,91,19,0.8)]"></div>
</div>
<span class="text-xs font-medium text-slate-500">2023</span>
</div>
<div class="relative flex flex-col items-center gap-2 group w-full">
<div class="w-full bg-primary rounded-t-lg h-56 transition-all relative">
<div class="absolute -top-1 w-2 h-2 rounded-full bg-primary left-1/2 -translate-x-1/2 shadow-[0_0_8px_rgba(236,91,19,1)]"></div>
</div>
<span class="text-xs font-bold text-primary">2024</span>
</div>
</div>
</div>
<div class="bg-white dark:bg-slate-800 p-6 rounded-xl border border-slate-100 dark:border-slate-700 shadow-sm">
<div class="flex items-center justify-between mb-6">
<h3 class="text-lg font-bold">مقارنة أداء الأقسام</h3>
<button class="text-primary text-sm font-semibold hover:underline">مشاهدة الكل</button>
</div>
<div class="space-y-4">
<div class="space-y-2">
<div class="flex justify-between text-sm">
<span class="font-medium">هندسة الحاسوب</span>
<span class="text-slate-500">70%</span>
</div>
<div class="h-2 w-full bg-slate-100 dark:bg-slate-700 rounded-full overflow-hidden">
<div class="h-full bg-primary w-[70%]"></div>
</div>
</div>
<div class="space-y-2">
<div class="flex justify-between text-sm">
<span class="font-medium">هندسة البرمجيات</span>
<span class="text-slate-500">65%</span>
</div>
<div class="h-2 w-full bg-slate-100 dark:bg-slate-700 rounded-full overflow-hidden">
<div class="h-full bg-primary w-[65%]"></div>
</div>
</div>
<div class="space-y-2">
<div class="flex justify-between text-sm">
<span class="font-medium">الهندسة الميكانيكية</span>
<span class="text-slate-500">85%</span>
</div>
<div class="h-2 w-full bg-slate-100 dark:bg-slate-700 rounded-full overflow-hidden">
<div class="h-full bg-primary w-[85%]"></div>
</div>
</div>
<div class="space-y-2">
<div class="flex justify-between text-sm">
<span class="font-medium">التصميم والفنون</span>
<span class="text-slate-500">64%</span>
</div>
<div class="h-2 w-full bg-slate-100 dark:bg-slate-700 rounded-full overflow-hidden">
<div class="h-full bg-primary w-[64%]"></div>
</div>
</div>
</div>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">
<div class="lg:col-span-2 bg-white dark:bg-slate-800 rounded-xl border border-slate-100 dark:border-slate-700 shadow-sm overflow-hidden">
<div class="px-6 py-5 border-b border-slate-100 dark:border-slate-700 flex justify-between items-center">
<h3 class="text-lg font-bold">أداء الأقسام الأكاديمية</h3>
<span class="material-symbols-outlined text-slate-400 cursor-pointer">filter_list</span>
</div>
<div class="overflow-x-auto">
<table class="w-full text-right border-collapse">
<thead class="bg-slate-50 dark:bg-slate-800/50 text-slate-500 text-xs font-semibold uppercase">
<tr>
<th class="px-6 py-4">القسم</th>
<th class="px-6 py-4">عدد الخريجين</th>
<th class="px-6 py-4">معدل التوظيف</th>
<th class="px-6 py-4 text-left">الحالة</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-700">
<tr class="hover:bg-slate-50 dark:hover:bg-slate-700/30 transition-colors">
<td class="px-6 py-4 font-medium">علوم الحاسب</td>
<td class="px-6 py-4">200</td>
<td class="px-6 py-4 font-semibold">70%</td>
<td class="px-6 py-4 text-left">
<span class="inline-flex px-2 py-1 rounded-md bg-emerald-100 dark:bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 text-[10px] font-bold">نشط</span>
</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-700/30 transition-colors">
<td class="px-6 py-4 font-medium">هندسة البرمجيات</td>
<td class="px-6 py-4">150</td>
<td class="px-6 py-4 font-semibold">65%</td>
<td class="px-6 py-4 text-left">
<span class="inline-flex px-2 py-1 rounded-md bg-amber-100 dark:bg-amber-500/10 text-amber-600 dark:text-amber-400 text-[10px] font-bold">متوسط</span>
</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-700/30 transition-colors">
<td class="px-6 py-4 font-medium">الهندسة الميكانيكية</td>
<td class="px-6 py-4">180</td>
<td class="px-6 py-4 font-semibold text-emerald-600">85%</td>
<td class="px-6 py-4 text-left">
<span class="inline-flex px-2 py-1 rounded-md bg-emerald-100 dark:bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 text-[10px] font-bold">مرتفع</span>
</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-700/30 transition-colors">
<td class="px-6 py-4 font-medium">التصميم والفنون</td>
<td class="px-6 py-4">140</td>
<td class="px-6 py-4 font-semibold">64%</td>
<td class="px-6 py-4 text-left">
<span class="inline-flex px-2 py-1 rounded-md bg-amber-100 dark:bg-amber-500/10 text-amber-600 dark:text-amber-400 text-[10px] font-bold">متوسط</span>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-100 dark:border-slate-700 shadow-sm overflow-hidden flex flex-col">
<div class="px-6 py-5 border-b border-slate-100 dark:border-slate-700">
<h3 class="text-lg font-bold">المقارنة السنوية</h3>
</div>
<div class="flex-1 overflow-x-auto">
<table class="w-full text-right border-collapse">
<thead class="bg-slate-50 dark:bg-slate-800/50 text-slate-500 text-xs font-semibold uppercase">
<tr>
<th class="px-6 py-4">السنة</th>
<th class="px-6 py-4">الخريجين</th>
<th class="px-6 py-4">المعدل</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-700">
<tr class="hover:bg-slate-50 dark:hover:bg-slate-700/30 transition-colors">
<td class="px-6 py-4 font-bold">2022</td>
<td class="px-6 py-4">300</td>
<td class="px-6 py-4">55%</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-700/30 transition-colors">
<td class="px-6 py-4 font-bold">2023</td>
<td class="px-6 py-4">320</td>
<td class="px-6 py-4">60%</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-700/30 transition-colors bg-primary/5">
<td class="px-6 py-4 font-bold text-primary">2024</td>
<td class="px-6 py-4 font-semibold text-primary">350</td>
<td class="px-6 py-4 font-bold text-primary">65%</td>
</tr>
</tbody>
</table>
</div>
<div class="p-6 mt-auto">
<div class="p-4 bg-primary/10 rounded-lg border border-primary/20">
<p class="text-sm font-semibold text-primary flex items-center gap-2">
<span class="material-symbols-outlined text-base">info</span>
                                    تنبيه ذكاء الأعمال
                                </p>
<p class="text-xs text-slate-600 dark:text-slate-400 mt-1 leading-relaxed">
                                    يُظهر عام 2024 زيادة مستمرة في كل من أعداد الخريجين ومعدل التوظيف بنسبة نمو سنوية مركب تبلغ 7.2%.
                                </p>
</div>
</div>
</div>
</div>
</main>
<footer class="mt-auto px-6 md:px-10 py-6 border-t border-slate-200 dark:border-slate-800 text-center text-slate-400 text-sm">
<p>جميع الحقوق محفوظة © 2024 لوحة بيانات العميد التنفيذية</p>
</footer>
</div>
</div>
</body></html>