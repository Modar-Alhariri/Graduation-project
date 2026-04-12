<!DOCTYPE html>

<html dir="rtl" lang="ar"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>لوحة بيانات العميد - التقارير التحليلية</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
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
                        "display": ["Public Sans", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100">
<div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
<!-- Top Nav Bar -->
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
<!-- Hero Header -->
<section class="flex flex-col gap-2">
<h1 class="text-3xl font-black text-slate-900 dark:text-slate-100">التقارير التحليلية</h1>
<p class="text-slate-500 dark:text-slate-400">نظام دعم القرار: تحليل عميق لبيانات التوظيف والمهارات المطلوبة في سوق العمل</p>
</section>
<!-- Chart Overviews -->
<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
<!-- Bar Chart Simulation -->
<div class="bg-white dark:bg-background-dark p-6 rounded-xl border border-primary/10 shadow-sm">
<div class="flex items-center justify-between mb-6">
<h3 class="font-bold">توزيع التوظيف</h3>
<span class="material-symbols-outlined text-primary">monitoring</span>
</div>
<div class="h-48 flex items-end justify-around gap-2 px-2">
<div class="w-full bg-primary/20 rounded-t-lg relative group h-[60%]">
<div class="absolute inset-x-0 bottom-0 bg-primary rounded-t-lg h-[40%] transition-all group-hover:h-[60%]"></div>
</div>
<div class="w-full bg-primary/20 rounded-t-lg relative group h-[80%]">
<div class="absolute inset-x-0 bottom-0 bg-primary rounded-t-lg h-[65%] transition-all group-hover:h-[80%]"></div>
</div>
<div class="w-full bg-primary/20 rounded-t-lg relative group h-[45%]">
<div class="absolute inset-x-0 bottom-0 bg-primary rounded-t-lg h-[30%] transition-all group-hover:h-[45%]"></div>
</div>
<div class="w-full bg-primary/20 rounded-t-lg relative group h-[90%]">
<div class="absolute inset-x-0 bottom-0 bg-primary rounded-t-lg h-[75%] transition-all group-hover:h-[90%]"></div>
</div>
<div class="w-full bg-primary/20 rounded-t-lg relative group h-[70%]">
<div class="absolute inset-x-0 bottom-0 bg-primary rounded-t-lg h-[55%] transition-all group-hover:h-[70%]"></div>
</div>
</div>
<div class="mt-4 text-xs text-slate-400 flex justify-between px-1">
<span>2020</span><span>2021</span><span>2022</span><span>2023</span><span>2024</span>
</div>
</div>
<!-- Pie Chart Simulation -->
<div class="bg-white dark:bg-background-dark p-6 rounded-xl border border-primary/10 shadow-sm">
<div class="flex items-center justify-between mb-6">
<h3 class="font-bold">حالة التوظيف</h3>
<span class="material-symbols-outlined text-primary">donut_large</span>
</div>
<div class="relative flex items-center justify-center h-48">
<svg class="size-40 -rotate-90">
<circle class="text-primary/10" cx="80" cy="80" fill="transparent" r="70" stroke="currentColor" stroke-width="20"></circle>
<circle class="text-primary" cx="80" cy="80" fill="transparent" r="70" stroke="currentColor" stroke-dasharray="440" stroke-dashoffset="110" stroke-width="20"></circle>
<circle class="text-primary/40" cx="80" cy="80" fill="transparent" r="70" stroke="currentColor" stroke-dasharray="440" stroke-dashoffset="350" stroke-width="20"></circle>
</svg>
<div class="absolute flex flex-col items-center">
<span class="text-2xl font-black">75%</span>
<span class="text-[10px] text-slate-400">توظيف نشط</span>
</div>
</div>
</div>
<!-- Line Chart Simulation -->
<div class="bg-white dark:bg-background-dark p-6 rounded-xl border border-primary/10 shadow-sm md:col-span-2 lg:col-span-1">
<div class="flex items-center justify-between mb-6">
<h3 class="font-bold">نمو الطلب على التخصصات</h3>
<span class="material-symbols-outlined text-primary">show_chart</span>
</div>
<div class="h-48 flex items-end">
<svg class="w-full h-full" viewbox="0 0 100 40">
<path class="text-primary" d="M0 35 Q 20 10, 40 25 T 80 5 T 100 20" fill="none" stroke="currentColor" stroke-width="2"></path>
<path d="M0 35 Q 20 10, 40 25 T 80 5 T 100 20 L 100 40 L 0 40 Z" fill="url(#grad)" opacity="0.1"></path>
<defs>
<lineargradient id="grad" x1="0%" x2="0%" y1="0%" y2="100%">
<stop offset="0%" style="stop-color:var(--primary);stop-opacity:1"></stop>
<stop offset="100%" style="stop-color:var(--primary);stop-opacity:0"></stop>
</lineargradient>
</defs>
</svg>
</div>
<div class="mt-2 text-center">
<span class="text-xs font-semibold text-primary">+12.4% زيادة سنوية</span>
</div>
</div>
</section>
<!-- Table Sections -->
<section class="grid grid-cols-1 xl:grid-cols-2 gap-8">
<!-- Employment by Specialization -->
<div class="bg-white dark:bg-background-dark rounded-xl border border-primary/10 shadow-sm overflow-hidden">
<div class="p-6 border-b border-primary/10 flex justify-between items-center">
<h3 class="text-lg font-bold">التوظيف حسب التخصص</h3>
<span class="text-xs bg-primary/10 text-primary px-2 py-1 rounded-lg font-bold">2023 - 2024</span>
</div>
<div class="overflow-x-auto">
<table class="w-full text-right text-sm">
<thead class="bg-slate-50 dark:bg-white/5 text-slate-500 font-bold">
<tr>
<th class="px-6 py-4">التخصص الرئيسي</th>
<th class="px-6 py-4">عدد الخريجين</th>
<th class="px-6 py-4">الموظفون</th>
<th class="px-6 py-4">نسبة التوظيف</th>
</tr>
</thead>
<tbody class="divide-y divide-primary/5">
<tr>
<td class="px-6 py-4 font-bold">هندسة البرمجيات</td>
<td class="px-6 py-4">120</td>
<td class="px-6 py-4">105</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="flex-1 h-2 bg-primary/10 rounded-full overflow-hidden">
<div class="h-full bg-primary" style="width: 87%"></div>
</div>
<span class="font-bold">87%</span>
</div>
</td>
</tr>
<tr>
<td class="px-6 py-4 font-bold">نظم المعلومات</td>
<td class="px-6 py-4">85</td>
<td class="px-6 py-4">68</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="flex-1 h-2 bg-primary/10 rounded-full overflow-hidden">
<div class="h-full bg-primary" style="width: 80%"></div>
</div>
<span class="font-bold">80%</span>
</div>
</td>
</tr>
<tr>
<td class="px-6 py-4 font-bold">علوم الحاسب</td>
<td class="px-6 py-4">150</td>
<td class="px-6 py-4">138</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="flex-1 h-2 bg-primary/10 rounded-full overflow-hidden">
<div class="h-full bg-primary" style="width: 92%"></div>
</div>
<span class="font-bold">92%</span>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Required Skills -->
<div class="bg-white dark:bg-background-dark rounded-xl border border-primary/10 shadow-sm overflow-hidden">
<div class="p-6 border-b border-primary/10 flex justify-between items-center">
<h3 class="text-lg font-bold">المهارات المطلوبة في السوق</h3>
<span class="material-symbols-outlined text-primary">bolt</span>
</div>
<div class="overflow-x-auto">
<table class="w-full text-right text-sm">
<thead class="bg-slate-50 dark:bg-white/5 text-slate-500 font-bold">
<tr>
<th class="px-6 py-4">المهارة</th>
<th class="px-6 py-4 text-center">مستوى الطلب</th>
<th class="px-6 py-4">الاتجاه</th>
</tr>
</thead>
<tbody class="divide-y divide-primary/5">
<tr>
<td class="px-6 py-4 font-bold">برمجة بايثون (Python)</td>
<td class="px-6 py-4 text-center">
<span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-bold">مرتفع جداً</span>
</td>
<td class="px-6 py-4 text-green-600"><span class="material-symbols-outlined align-middle">trending_up</span></td>
</tr>
<tr>
<td class="px-6 py-4 font-bold">تحليل البيانات (Data Analysis)</td>
<td class="px-6 py-4 text-center">
<span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-bold">مرتفع</span>
</td>
<td class="px-6 py-4 text-green-600"><span class="material-symbols-outlined align-middle">trending_up</span></td>
</tr>
<tr>
<td class="px-6 py-4 font-bold">الحوسبة السحابية (Cloud Computing)</td>
<td class="px-6 py-4 text-center">
<span class="bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-xs font-bold">متوسط</span>
</td>
<td class="px-6 py-4 text-slate-400"><span class="material-symbols-outlined align-middle">trending_flat</span></td>
</tr>
<tr>
<td class="px-6 py-4 font-bold">الأمن السيبراني</td>
<td class="px-6 py-4 text-center">
<span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-bold">مرتفع</span>
</td>
<td class="px-6 py-4 text-green-600"><span class="material-symbols-outlined align-middle">trending_up</span></td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Reports by Companies -->
<div class="bg-white dark:bg-background-dark rounded-xl border border-primary/10 shadow-sm overflow-hidden xl:col-span-2">
<div class="p-6 border-b border-primary/10 flex justify-between items-center">
<h3 class="text-lg font-bold">توزيع الخريجين حسب الشركات</h3>
<div class="flex gap-2">
<div class="relative">
<span class="material-symbols-outlined absolute right-3 top-2.5 text-slate-400 text-sm">search</span>
<input class="pr-9 h-9 rounded-lg border-primary/20 text-sm bg-background-light dark:bg-white/5 focus:ring-primary focus:border-primary" placeholder="بحث عن شركة..." type="text"/>
</div>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 p-6">
<div class="p-4 rounded-xl border border-primary/5 bg-slate-50 dark:bg-white/5 flex flex-col items-center text-center gap-3">
<div class="size-12 rounded-full bg-primary/10 flex items-center justify-center">
<span class="material-symbols-outlined text-primary">corporate_fare</span>
</div>
<div>
<h4 class="font-bold">أرامكو السعودية</h4>
<p class="text-sm text-slate-500">42 خريج عامل</p>
</div>
<div class="w-full h-1.5 bg-primary/20 rounded-full overflow-hidden">
<div class="h-full bg-primary w-[85%]"></div>
</div>
</div>
<div class="p-4 rounded-xl border border-primary/5 bg-slate-50 dark:bg-white/5 flex flex-col items-center text-center gap-3">
<div class="size-12 rounded-full bg-primary/10 flex items-center justify-center">
<span class="material-symbols-outlined text-primary">account_balance</span>
</div>
<div>
<h4 class="font-bold">بنك الراجحي</h4>
<p class="text-sm text-slate-500">28 خريج عامل</p>
</div>
<div class="w-full h-1.5 bg-primary/20 rounded-full overflow-hidden">
<div class="h-full bg-primary w-[60%]"></div>
</div>
</div>
<div class="p-4 rounded-xl border border-primary/5 bg-slate-50 dark:bg-white/5 flex flex-col items-center text-center gap-3">
<div class="size-12 rounded-full bg-primary/10 flex items-center justify-center">
<span class="material-symbols-outlined text-primary">cell_tower</span>
</div>
<div>
<h4 class="font-bold">STC للاتصالات</h4>
<p class="text-sm text-slate-500">35 خريج عامل</p>
</div>
<div class="w-full h-1.5 bg-primary/20 rounded-full overflow-hidden">
<div class="h-full bg-primary w-[75%]"></div>
</div>
</div>
<div class="p-4 rounded-xl border border-primary/5 bg-slate-50 dark:bg-white/5 flex flex-col items-center text-center gap-3">
<div class="size-12 rounded-full bg-primary/10 flex items-center justify-center">
<span class="material-symbols-outlined text-primary">developer_board</span>
</div>
<div>
<h4 class="font-bold">نيوم (NEOM)</h4>
<p class="text-sm text-slate-500">19 خريج عامل</p>
</div>
<div class="w-full h-1.5 bg-primary/20 rounded-full overflow-hidden">
<div class="h-full bg-primary w-[45%]"></div>
</div>
</div>
</div>
</div>
</section>
</main>
</div>
<!-- Footer -->
<footer class="p-6 text-center text-slate-400 text-sm border-t border-primary/10 bg-white dark:bg-background-dark">
        © 2024 لوحة بيانات العميد للتقارير التحليلية - جميع الحقوق محفوظة
    </footer>
</div>
</body></html>