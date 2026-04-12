<!DOCTYPE html>

<html dir="rtl" lang="ar"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
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
<title>لوحة بيانات الخريجين - GTS</title>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100">
<div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
<!-- Top Navigation Bar -->
 <div class="flex flex-1 overflow-hidden"></div>
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
<a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary/10 text-primary font-semibold" href="<?= BASE_URL ?>FacultyMembers/dashboard">
<span class="material-symbols-outlined">dashboard</span>
<span>لوحة التحكم </span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 transition-colors" href="<?= BASE_URL ?>FacultyMembers/deptGraduatesTracking">
<span class="material-symbols-outlined">group</span>
<span>سجلات الخريجين</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 transition-colors" href="<?= BASE_URL ?>FacultyMembers/acadimicRecomendations">
<span class="material-symbols-outlined">work</span>
<span> التوصيات الاكاديمية</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 transition-colors" href="<?= BASE_URL ?>FacultyMembers/feedbackForms">
<span class="material-symbols-outlined">assignment</span>
<span> نماذج التغذية الراجعة  </span>
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
<!-- Main Content -->
<main class="flex-1 overflow-y-auto p-4 lg:p-8 space-y-8 bg-background-light dark:bg-background-dark">
<!-- Hero Header -->
<div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
<div>
<h1 class="text-3xl font-black tracking-tight text-slate-900 dark:text-white">ملخص خريجي الهندسة الكهربائية</h1>
<p class="text-slate-500 dark:text-slate-400 mt-1">جامعة الملك سعود - الفصل الدراسي الأول 2024</p>
</div>
<button class="flex items-center gap-2 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 px-4 py-2 rounded-xl text-sm font-semibold hover:bg-slate-50 transition-colors">
<span class="material-symbols-outlined text-[18px]">download</span>
                    تحميل التقرير الشامل
                </button>
</div>
<!-- Stats Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6">
<!-- Card 1 -->
<div class="bg-white dark:bg-slate-900 p-6 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm relative overflow-hidden">
<div class="relative z-10 flex flex-col h-full justify-between">
<div class="flex justify-between items-start mb-4">
<span class="material-symbols-outlined text-primary bg-primary/10 p-2 rounded-lg">school</span>
<span class="text-green-500 text-xs font-bold px-2 py-1 bg-green-500/10 rounded-full">+8%</span>
</div>
<div>
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">إجمالي الخريجين (التخصص)</p>
<p class="text-3xl font-black mt-1">1,428</p>
</div>
</div>
<div class="absolute -right-4 -bottom-4 text-primary/5">
<span class="material-symbols-outlined text-9xl">school</span>
</div>
</div>
<!-- Card 2 -->
<div class="bg-white dark:bg-slate-900 p-6 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm relative overflow-hidden">
<div class="relative z-10 flex flex-col h-full justify-between">
<div class="flex justify-between items-start mb-4">
<span class="material-symbols-outlined text-primary bg-primary/10 p-2 rounded-lg">work_history</span>
<span class="text-green-500 text-xs font-bold px-2 py-1 bg-green-500/10 rounded-full">+12%</span>
</div>
<div>
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">معدل التوظيف</p>
<p class="text-3xl font-black mt-1">82.5%</p>
</div>
</div>
<div class="absolute -right-4 -bottom-4 text-primary/5">
<span class="material-symbols-outlined text-9xl">work_history</span>
</div>
</div>
<!-- Card 3 -->
<div class="bg-white dark:bg-slate-900 p-6 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm relative overflow-hidden">
<div class="relative z-10 flex flex-col h-full justify-between">
<div class="flex justify-between items-start mb-4">
<span class="material-symbols-outlined text-primary bg-primary/10 p-2 rounded-lg">hub</span>
<span class="text-slate-500 text-xs font-bold px-2 py-1 bg-slate-500/10 rounded-full">0%</span>
</div>
<div>
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">فرص التدريب المتاحة</p>
<p class="text-3xl font-black mt-1">156</p>
</div>
</div>
<div class="absolute -right-4 -bottom-4 text-primary/5">
<span class="material-symbols-outlined text-9xl">hub</span>
</div>
</div>
<!-- Card 4 -->
<div class="bg-white dark:bg-slate-900 p-6 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm relative overflow-hidden">
<div class="relative z-10 flex flex-col h-full justify-between">
<div class="flex justify-between items-start mb-4">
<span class="material-symbols-outlined text-primary bg-primary/10 p-2 rounded-lg">person_search</span>
<span class="text-red-500 text-xs font-bold px-2 py-1 bg-red-500/10 rounded-full">-3%</span>
</div>
<div>
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">الباحثون عن عمل</p>
<p class="text-3xl font-black mt-1">214</p>
</div>
</div>
<div class="absolute -right-4 -bottom-4 text-primary/5">
<span class="material-symbols-outlined text-9xl">person_search</span>
</div>
</div>
</div>
<!-- Charts Section -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
<!-- Main Trend Chart -->
<div class="lg:col-span-2 bg-white dark:bg-slate-900 p-6 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="flex items-center justify-between mb-8">
<div>
<h3 class="text-lg font-bold">تطور معدل التوظيف</h3>
<p class="text-xs text-slate-500">مقارنة السنوات الخمس الأخيرة</p>
</div>
<div class="flex gap-2">
<div class="flex items-center gap-1.5">
<div class="size-2 rounded-full bg-primary"></div>
<span class="text-[10px] text-slate-500 font-medium">معدل التوظيف</span>
</div>
</div>
</div>
<!-- Chart Simulation -->
<div class="h-64 flex items-end justify-between gap-4 px-4">
<div class="flex flex-col items-center flex-1 group">
<div class="w-full bg-primary/20 rounded-t-lg transition-all duration-300 h-[60%] group-hover:bg-primary/40 relative">
<div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100">60%</div>
</div>
<span class="text-[10px] mt-4 text-slate-400 font-bold">2020</span>
</div>
<div class="flex flex-col items-center flex-1 group">
<div class="w-full bg-primary/20 rounded-t-lg transition-all duration-300 h-[65%] group-hover:bg-primary/40 relative">
<div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100">65%</div>
</div>
<span class="text-[10px] mt-4 text-slate-400 font-bold">2021</span>
</div>
<div class="flex flex-col items-center flex-1 group">
<div class="w-full bg-primary/20 rounded-t-lg transition-all duration-300 h-[72%] group-hover:bg-primary/40 relative">
<div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100">72%</div>
</div>
<span class="text-[10px] mt-4 text-slate-400 font-bold">2022</span>
</div>
<div class="flex flex-col items-center flex-1 group">
<div class="w-full bg-primary/20 rounded-t-lg transition-all duration-300 h-[78%] group-hover:bg-primary/40 relative">
<div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100">78%</div>
</div>
<span class="text-[10px] mt-4 text-slate-400 font-bold">2023</span>
</div>
<div class="flex flex-col items-center flex-1 group">
<div class="w-full bg-primary rounded-t-lg transition-all duration-300 h-[82%] relative">
<div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-100">82%</div>
</div>
<span class="text-[10px] mt-4 text-slate-900 dark:text-white font-bold">2024</span>
</div>
</div>
</div>
<!-- Distribution Chart -->
<div class="bg-white dark:bg-slate-900 p-6 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm">
<h3 class="text-lg font-bold mb-1">توزيع حالة الخريجين</h3>
<p class="text-xs text-slate-500 mb-8">التصنيف المهني للخريجين حالياً</p>
<div class="flex flex-col gap-5">
<div class="space-y-2">
<div class="flex justify-between text-xs font-bold">
<span>موظف</span>
<span>65%</span>
</div>
<div class="h-2 w-full bg-slate-100 dark:bg-slate-800 rounded-full overflow-hidden">
<div class="h-full bg-green-500 rounded-full" style="width: 65%;"></div>
</div>
</div>
<div class="space-y-2">
<div class="flex justify-between text-xs font-bold">
<span>باحث عن عمل</span>
<span>15%</span>
</div>
<div class="h-2 w-full bg-slate-100 dark:bg-slate-800 rounded-full overflow-hidden">
<div class="h-full bg-red-400 rounded-full" style="width: 15%;"></div>
</div>
</div>
<div class="space-y-2">
<div class="flex justify-between text-xs font-bold">
<span>تحت التدريب</span>
<span>12%</span>
</div>
<div class="h-2 w-full bg-slate-100 dark:bg-slate-800 rounded-full overflow-hidden">
<div class="h-full bg-primary rounded-full" style="width: 12%;"></div>
</div>
</div>
<div class="space-y-2">
<div class="flex justify-between text-xs font-bold">
<span>دراسات عليا</span>
<span>8%</span>
</div>
<div class="h-2 w-full bg-slate-100 dark:bg-slate-800 rounded-full overflow-hidden">
<div class="h-full bg-blue-400 rounded-full" style="width: 8%;"></div>
</div>
</div>
</div>
<div class="mt-8 p-4 bg-slate-50 dark:bg-slate-800 rounded-xl">
<p class="text-[11px] text-slate-500 leading-relaxed">
<span class="material-symbols-outlined text-[14px] align-middle ml-1">info</span>
                            هذه البيانات محدثة تلقائياً بناءً على منصة LinkedIn والتواصل المباشر مع الخريجين.
                        </p>
</div>
</div>
</div>
<!-- Recent Grads Table -->
<div class="bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
<div class="px-6 py-4 border-b border-slate-200 dark:border-slate-800 flex justify-between items-center">
<h3 class="text-lg font-bold">أحدث التغيرات الوظيفية</h3>
<a class="text-primary text-sm font-semibold hover:underline" href="#">عرض الكل</a>
</div>
<div class="overflow-x-auto">
<table class="w-full text-right">
<thead class="bg-slate-50 dark:bg-slate-800/50">
<tr>
<th class="px-6 py-3 text-xs font-bold text-slate-500 uppercase">الخريج</th>
<th class="px-6 py-3 text-xs font-bold text-slate-500 uppercase">سنة التخرج</th>
<th class="px-6 py-3 text-xs font-bold text-slate-500 uppercase">الشركة / الجهة</th>
<th class="px-6 py-3 text-xs font-bold text-slate-500 uppercase">الحالة</th>
<th class="px-6 py-3 text-xs font-bold text-slate-500 uppercase">آخر تحديث</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-800">
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-8 rounded-full bg-primary/10 flex items-center justify-center font-bold text-primary text-xs">م ع</div>
<span class="text-sm font-bold">محمد علي الشمري</span>
</div>
</td>
<td class="px-6 py-4 text-sm">2023</td>
<td class="px-6 py-4 text-sm">سابك (SABIC)</td>
<td class="px-6 py-4">
<span class="px-2 py-1 text-[10px] font-bold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full">موظف</span>
</td>
<td class="px-6 py-4 text-xs text-slate-500">أمس، 04:30 م</td>
</tr>
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-8 rounded-full bg-primary/10 flex items-center justify-center font-bold text-primary text-xs">هـ ن</div>
<span class="text-sm font-bold">هدى ناصر الرويلي</span>
</div>
</td>
<td class="px-6 py-4 text-sm">2024</td>
<td class="px-6 py-4 text-sm">برنامج التدريب التعاوني</td>
<td class="px-6 py-4">
<span class="px-2 py-1 text-[10px] font-bold bg-orange-100 text-orange-700 dark:bg-orange-900/30 dark:text-orange-400 rounded-full">متدرب</span>
</td>
<td class="px-6 py-4 text-xs text-slate-500">منذ يومين</td>
</tr>
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-8 rounded-full bg-primary/10 flex items-center justify-center font-bold text-primary text-xs">ع م</div>
<span class="text-sm font-bold">عبدالله منصور الحربي</span>
</div>
</td>
<td class="px-6 py-4 text-sm">2022</td>
<td class="px-6 py-4 text-sm">جامعة ستانفورد</td>
<td class="px-6 py-4">
<span class="px-2 py-1 text-[10px] font-bold bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400 rounded-full">دراسات عليا</span>
</td>
<td class="px-6 py-4 text-xs text-slate-500">24 نوفمبر 2024</td>
</tr>
</tbody>
</table>
</div>
</div>
</main>
</div>
</div>
</body></html>