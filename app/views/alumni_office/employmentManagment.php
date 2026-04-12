<!DOCTYPE html>

<html dir="rtl" lang="ar"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
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
<title>إدارة توظيف الخريجين | مكتب الخريجين</title>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 min-h-screen">
<!-- Navigation Bar -->
<nav class="bg-white dark:bg-slate-900 border-b border-primary/10 px-6 py-4 sticky top-0 z-50">
<div class="max-w-7xl mx-auto flex justify-between items-center">
<div class="flex items-center gap-4">
<div class="bg-primary p-2 rounded-lg">
<span class="material-icons text-white">school</span>
</div>
<div>
<h1 class="text-xl font-bold tracking-tight">نظام متابعة الخريجين</h1>
<p class="text-xs text-slate-500 dark:text-slate-400">جامعة المستقبل - مكتب الخريجين</p>
</div>
</div>
<div class="flex items-center gap-6">
<div class="hidden md:flex gap-4">
<a class="text-primary font-medium" href="#">الرئيسية</a>
<a class="text-slate-600 dark:text-slate-300 hover:text-primary transition-colors" href="#">التقارير</a>
<a class="text-slate-600 dark:text-slate-300 hover:text-primary transition-colors" href="#">الإعدادات</a>
</div>
<div class="h-10 w-10 rounded-full bg-primary/10 flex items-center justify-center border border-primary/20">
<span class="material-icons text-primary">person</span>
</div>
</div>
</div>
</nav>
<main class="max-w-7xl mx-auto px-6 py-8">
<!-- Header Section -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
<div>
<h2 class="text-2xl font-bold">لوحة إدارة حالة التوظيف</h2>
<p class="text-slate-500 dark:text-slate-400">متابعة وتحديث البيانات الوظيفية لخريجي الدفعات السابقة</p>
</div>
<div class="flex gap-3">
<button class="bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 px-4 py-2 rounded-lg flex items-center gap-2 text-sm font-medium hover:bg-slate-50 transition-colors">
<span class="material-icons text-sm">file_download</span>
                    تصدير التقرير
                </button>
<button class="bg-primary text-white px-4 py-2 rounded-lg flex items-center gap-2 text-sm font-medium shadow-lg shadow-primary/20 hover:bg-primary/90 transition-all">
<span class="material-icons text-sm">add</span>
                    إضافة خريج جديد
                </button>
</div>
</div>
<!-- Summary Statistics Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
<!-- Employed Card -->
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-primary/10 shadow-sm relative overflow-hidden group">
<div class="absolute -right-4 -top-4 w-24 h-24 bg-primary/5 rounded-full group-hover:scale-110 transition-transform"></div>
<div class="flex items-center gap-4 relative z-10">
<div class="bg-green-100 dark:bg-green-900/30 p-3 rounded-lg">
<span class="material-icons text-green-600 dark:text-green-400">work</span>
</div>
<div>
<p class="text-sm text-slate-500 dark:text-slate-400">موظفون</p>
<h3 class="text-3xl font-bold">120</h3>
</div>
</div>
<div class="mt-4 flex items-center text-xs text-green-600 font-medium">
<span class="material-icons text-xs">trending_up</span>
<span class="mr-1">+5% من الشهر الماضي</span>
</div>
</div>
<!-- Job Seekers Card -->
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-primary/10 shadow-sm relative overflow-hidden group">
<div class="absolute -right-4 -top-4 w-24 h-24 bg-primary/5 rounded-full group-hover:scale-110 transition-transform"></div>
<div class="flex items-center gap-4 relative z-10">
<div class="bg-amber-100 dark:bg-amber-900/30 p-3 rounded-lg">
<span class="material-icons text-amber-600 dark:text-amber-400">search</span>
</div>
<div>
<p class="text-sm text-slate-500 dark:text-slate-400">باحثون عن عمل</p>
<h3 class="text-3xl font-bold">40</h3>
</div>
</div>
<div class="mt-4 flex items-center text-xs text-amber-600 font-medium">
<span class="material-icons text-xs">info</span>
<span class="mr-1">بحاجة إلى دعم توظيفي</span>
</div>
</div>
<!-- Training Card -->
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-primary/10 shadow-sm relative overflow-hidden group">
<div class="absolute -right-4 -top-4 w-24 h-24 bg-primary/5 rounded-full group-hover:scale-110 transition-transform"></div>
<div class="flex items-center gap-4 relative z-10">
<div class="bg-blue-100 dark:bg-blue-900/30 p-3 rounded-lg">
<span class="material-icons text-blue-600 dark:text-blue-400">model_training</span>
</div>
<div>
<p class="text-sm text-slate-500 dark:text-slate-400">تحت التدريب</p>
<h3 class="text-3xl font-bold">20</h3>
</div>
</div>
<div class="mt-4 flex items-center text-xs text-blue-600 font-medium">
<span class="material-icons text-xs">schedule</span>
<span class="mr-1">برامج منتهية بالتوظيف</span>
</div>
</div>
<!-- Higher Studies Card -->
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-primary/10 shadow-sm relative overflow-hidden group">
<div class="absolute -right-4 -top-4 w-24 h-24 bg-primary/5 rounded-full group-hover:scale-110 transition-transform"></div>
<div class="flex items-center gap-4 relative z-10">
<div class="bg-purple-100 dark:bg-purple-900/30 p-3 rounded-lg">
<span class="material-icons text-purple-600 dark:text-purple-400">menu_book</span>
</div>
<div>
<p class="text-sm text-slate-500 dark:text-slate-400">دراسات عليا</p>
<h3 class="text-3xl font-bold">10</h3>
</div>
</div>
<div class="mt-4 flex items-center text-xs text-purple-600 font-medium">
<span class="material-icons text-xs">auto_awesome</span>
<span class="mr-1">ماجستير ودكتوراه</span>
</div>
</div>
</div>
<!-- Filters and Table Card -->
<div class="bg-white dark:bg-slate-900 rounded-xl border border-primary/10 shadow-sm overflow-hidden">
<div class="p-6 border-b border-slate-100 dark:border-slate-800 flex flex-col md:flex-row md:items-center justify-between gap-4">
<div class="relative w-full md:w-96">
<span class="material-icons absolute right-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
<input class="w-full pr-10 pl-4 py-2 bg-background-light dark:bg-slate-800 border-none rounded-lg focus:ring-2 focus:ring-primary text-sm outline-none" placeholder="البحث باسم الخريج أو الشركة..." type="text"/>
</div>
<div class="flex items-center gap-2">
<select class="bg-background-light dark:bg-slate-800 border-none rounded-lg text-sm py-2 px-4 focus:ring-2 focus:ring-primary outline-none">
<option>جميع التخصصات</option>
<option>علوم الحاسب</option>
<option>هندسة البرمجيات</option>
<option>نظم المعلومات</option>
</select>
<select class="bg-background-light dark:bg-slate-800 border-none rounded-lg text-sm py-2 px-4 focus:ring-2 focus:ring-primary outline-none">
<option>حالة التوظيف</option>
<option>موظف</option>
<option>باحث عن عمل</option>
</select>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-right border-collapse">
<thead>
<tr class="bg-slate-50 dark:bg-slate-800/50 text-slate-500 dark:text-slate-400 text-sm uppercase">
<th class="px-6 py-4 font-semibold">اسم الخريج</th>
<th class="px-6 py-4 font-semibold">التخصص</th>
<th class="px-6 py-4 font-semibold">جهة العمل / الشركة</th>
<th class="px-6 py-4 font-semibold text-center">حالة التوظيف</th>
<th class="px-6 py-4 font-semibold">آخر تحديث</th>
<th class="px-6 py-4 font-semibold text-center">الإجراءات</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-800">
<!-- Row 1 -->
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="h-8 w-8 rounded bg-primary/10 flex items-center justify-center font-bold text-primary">أ</div>
<span class="font-medium text-slate-900 dark:text-slate-100">أحمد محمد علي</span>
</div>
</td>
<td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-300">هندسة برمجيات</td>
<td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-300">شركة الحلول الرقمية</td>
<td class="px-6 py-4 text-center">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/40 dark:text-green-300">موظف</span>
</td>
<td class="px-6 py-4 text-sm text-slate-500">12 أكتوبر 2023</td>
<td class="px-6 py-4">
<div class="flex justify-center gap-2">
<button class="p-1.5 text-slate-400 hover:text-primary transition-colors" title="تحديث الحالة">
<span class="material-icons text-[20px]">sync_alt</span>
</button>
<button class="p-1.5 text-slate-400 hover:text-primary transition-colors" title="تحديث معلومات العمل">
<span class="material-icons text-[20px]">business</span>
</button>
</div>
</td>
</tr>
<!-- Row 2 -->
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="h-8 w-8 rounded bg-primary/10 flex items-center justify-center font-bold text-primary">س</div>
<span class="font-medium text-slate-900 dark:text-slate-100">سارة فهد القحطاني</span>
</div>
</td>
<td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-300">علوم حاسب</td>
<td class="px-6 py-4 text-sm text-slate-400 italic">لا يوجد</td>
<td class="px-6 py-4 text-center">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800 dark:bg-amber-900/40 dark:text-amber-300">باحث عن عمل</span>
</td>
<td class="px-6 py-4 text-sm text-slate-500">05 نوفمبر 2023</td>
<td class="px-6 py-4">
<div class="flex justify-center gap-2">
<button class="p-1.5 text-slate-400 hover:text-primary transition-colors" title="تحديث الحالة">
<span class="material-icons text-[20px]">sync_alt</span>
</button>
<button class="p-1.5 text-slate-400 hover:text-primary transition-colors" title="تحديث معلومات العمل">
<span class="material-icons text-[20px]">business</span>
</button>
</div>
</td>
</tr>
<!-- Row 3 -->
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="h-8 w-8 rounded bg-primary/10 flex items-center justify-center font-bold text-primary">خ</div>
<span class="font-medium text-slate-900 dark:text-slate-100">خالد بن وليد</span>
</div>
</td>
<td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-300">نظم معلومات</td>
<td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-300">هيئة الاتصالات والتقنية</td>
<td class="px-6 py-4 text-center">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900/40 dark:text-blue-300">تحت التدريب</span>
</td>
<td class="px-6 py-4 text-sm text-slate-500">28 سبتمبر 2023</td>
<td class="px-6 py-4">
<div class="flex justify-center gap-2">
<button class="p-1.5 text-slate-400 hover:text-primary transition-colors" title="تحديث الحالة">
<span class="material-icons text-[20px]">sync_alt</span>
</button>
<button class="p-1.5 text-slate-400 hover:text-primary transition-colors" title="تحديث معلومات العمل">
<span class="material-icons text-[20px]">business</span>
</button>
</div>
</td>
</tr>
<!-- Row 4 -->
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="h-8 w-8 rounded bg-primary/10 flex items-center justify-center font-bold text-primary">م</div>
<span class="font-medium text-slate-900 dark:text-slate-100">مريم عبدالله</span>
</div>
</td>
<td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-300">تقنية المعلومات</td>
<td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-300">جامعة الملك سعود</td>
<td class="px-6 py-4 text-center">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800 dark:bg-purple-900/40 dark:text-purple-300">دراسات عليا</span>
</td>
<td class="px-6 py-4 text-sm text-slate-500">01 ديسمبر 2023</td>
<td class="px-6 py-4">
<div class="flex justify-center gap-2">
<button class="p-1.5 text-slate-400 hover:text-primary transition-colors" title="تحديث الحالة">
<span class="material-icons text-[20px]">sync_alt</span>
</button>
<button class="p-1.5 text-slate-400 hover:text-primary transition-colors" title="تحديث معلومات العمل">
<span class="material-icons text-[20px]">business</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination -->
<div class="p-4 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between">
<span class="text-xs text-slate-500">عرض 1-4 من أصل 190 خريج</span>
<div class="flex gap-1">
<button class="w-8 h-8 rounded border border-slate-200 dark:border-slate-700 flex items-center justify-center text-slate-400 hover:bg-slate-50 transition-colors">
<span class="material-icons text-sm">chevron_right</span>
</button>
<button class="w-8 h-8 rounded bg-primary text-white flex items-center justify-center text-xs font-bold">1</button>
<button class="w-8 h-8 rounded border border-slate-200 dark:border-slate-700 flex items-center justify-center text-xs text-slate-600 dark:text-slate-300 hover:bg-slate-50 transition-colors">2</button>
<button class="w-8 h-8 rounded border border-slate-200 dark:border-slate-700 flex items-center justify-center text-xs text-slate-600 dark:text-slate-300 hover:bg-slate-50 transition-colors">3</button>
<button class="w-8 h-8 rounded border border-slate-200 dark:border-slate-700 flex items-center justify-center text-slate-400 hover:bg-slate-50 transition-colors">
<span class="material-icons text-sm">chevron_left</span>
</button>
</div>
</div>
</div>
<!-- Extra Information & Charts Section -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mt-8">
<div class="lg:col-span-2 bg-white dark:bg-slate-900 rounded-xl border border-primary/10 p-6 shadow-sm">
<div class="flex items-center justify-between mb-6">
<h3 class="font-bold text-lg">التوزيع الجغرافي للتوظيف</h3>
<span class="text-xs text-slate-400">آخر 6 أشهر</span>
</div>
<div class="aspect-video w-full rounded-lg bg-slate-50 dark:bg-slate-800/50 flex items-center justify-center overflow-hidden border border-dashed border-slate-200 dark:border-slate-700">
<div class="text-center p-8">
<img class="max-w-full h-auto rounded opacity-60 grayscale hover:grayscale-0 transition-all duration-500" data-alt="Digital map showing employment locations distribution" data-location="Riyadh" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBazTkQ8Q2LY6PTJEkqxjSNUOoxJBWxWoVDUW2h5RSl5UCwYXEI3sbPfAkGiisdhWiYvFj-gNjIICGs5tSuiOj-OdMUHhv0lv2XO3AI9GWAWl1GDErZRSCVRAxqOoud9sjInM3I1v3UIoutX4WXzb4sP5WPZFSKsZ4fVLqALMUQutT0-YB-r_B6xQn6P1bkdTpl3oNFBzcIG8_FZUQPLjMjrrciDDBSuGG_7k0puXSX6SxMt36ZSTeCl_VgZda3OsdCrhOthwpMHPQ"/>
<p class="mt-4 text-sm text-slate-500 font-medium">خريطة تفاعلية لتوزيع الشركات في المملكة</p>
</div>
</div>
</div>
<div class="bg-primary/5 rounded-xl border border-primary/20 p-6 shadow-sm">
<h3 class="font-bold text-lg mb-4 text-primary">تنبيهات المتابعة</h3>
<div class="space-y-4">
<div class="bg-white dark:bg-slate-900 p-4 rounded-lg border-r-4 border-primary shadow-sm">
<p class="text-sm font-medium">35 خريجاً لم يتم تحديث حالاتهم منذ 3 أشهر</p>
<button class="mt-2 text-xs text-primary font-bold hover:underline flex items-center gap-1">
                            إرسال تذكير بالبريد 
                            <span class="material-icons text-xs">send</span>
</button>
</div>
<div class="bg-white dark:bg-slate-900 p-4 rounded-lg border-r-4 border-blue-500 shadow-sm">
<p class="text-sm font-medium">12 طلب تحديث معلومات عمل قيد المراجعة</p>
<button class="mt-2 text-xs text-blue-500 font-bold hover:underline flex items-center gap-1">
                            مراجعة الطلبات 
                            <span class="material-icons text-xs">visibility</span>
</button>
</div>
</div>
<div class="mt-8 pt-8 border-t border-primary/10">
<div class="flex items-center gap-4 mb-4">
<div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white font-bold">85%</div>
<div>
<p class="text-xs text-slate-500">نسبة التوظيف المستهدفة</p>
<p class="text-sm font-bold">تم تحقيق 72% حتى الآن</p>
</div>
</div>
<div class="w-full bg-slate-200 dark:bg-slate-700 h-2 rounded-full overflow-hidden">
<div class="bg-primary h-full w-[72%]"></div>
</div>
</div>
</div>
</div>
</main>
<footer class="mt-12 py-8 bg-white dark:bg-slate-900 border-t border-slate-100 dark:border-slate-800 text-center">
<p class="text-sm text-slate-500 dark:text-slate-400">جميع الحقوق محفوظة © 2023 مكتب الخريجين - جامعة المستقبل</p>
</footer>
</body></html>