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
<style>
        body {
            font-family: 'Public Sans', sans-serif;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen font-display">
<!-- Sidebar & Main Content Wrapper -->
<div class="flex min-h-screen">
<!-- Sidebar -->
<aside class="w-64 bg-white dark:bg-slate-900 border-l border-slate-200 dark:border-slate-800 hidden md:flex flex-col">
<div class="p-6">
<div class="flex items-center gap-3 text-primary">
<span class="material-icons text-3xl">school</span>
<span class="text-xl font-bold tracking-tight">إدارة الخريجين</span>
</div>
</div>
<nav class="flex-1 px-4 space-y-2 mt-4">
<a class="flex items-center gap-3 px-4 py-3 bg-primary/10 text-primary rounded-lg font-medium" href="#">
<span class="material-icons">dashboard</span>
<span>لوحة التحكم</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-colors" href="#">
<span class="material-icons">people</span>
<span>قاعدة بيانات الخريجين</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-colors" href="#">
<span class="material-icons">event</span>
<span>الفعاليات</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-colors" href="#">
<span class="material-icons">business_center</span>
<span>فرص العمل</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-colors" href="#">
<span class="material-icons">settings</span>
<span>الإعدادات</span>
</a>
</nav>
<div class="p-4 border-t border-slate-200 dark:border-slate-800">
<div class="flex items-center gap-3 px-4">
<div class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center text-primary">
<span class="material-icons">person</span>
</div>
<div>
<p class="text-sm font-semibold">أدمن النظام</p>
<p class="text-xs text-slate-500">مكتب الخريجين</p>
</div>
</div>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 flex flex-col min-w-0">
<!-- Header -->
<header class="h-16 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 flex items-center justify-between px-8 sticky top-0 z-10">
<div class="flex items-center gap-4">
<button class="md:hidden text-slate-600"><span class="material-icons">menu</span></button>
<h1 class="text-lg font-bold">إدارة بيانات الخريجين</h1>
</div>
<div class="flex items-center gap-4">
<button class="p-2 rounded-full hover:bg-slate-100 dark:hover:bg-slate-800 relative">
<span class="material-icons text-slate-600 dark:text-slate-400">notifications</span>
<span class="absolute top-2 right-2 w-2 h-2 bg-primary rounded-full"></span>
</button>
<button class="p-2 rounded-full hover:bg-slate-100 dark:hover:bg-slate-800">
<span class="material-icons text-slate-600 dark:text-slate-400">dark_mode</span>
</button>
</div>
</header>
<!-- Content Area -->
<div class="p-8 space-y-6">
<!-- Action Buttons & Export -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
<div class="flex items-center gap-3">
<button class="bg-primary text-white px-6 py-2.5 rounded-lg font-medium hover:bg-primary/90 transition-colors flex items-center gap-2">
<span class="material-icons text-sm">add</span>
<span>إضافة خريج جديد</span>
</button>
</div>
<div class="flex items-center gap-2">
<button class="flex items-center gap-2 px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-lg text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
<span class="material-icons text-green-600">table_view</span>
<span>تصدير Excel</span>
</button>
<button class="flex items-center gap-2 px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-lg text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
<span class="material-icons text-red-600">picture_as_pdf</span>
<span>تصدير PDF</span>
</button>
</div>
</div>
<!-- Filters Section -->
<section class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-4">
<div class="space-y-1">
<label class="text-xs font-semibold text-slate-500 uppercase">الاسم</label>
<div class="relative">
<span class="material-icons absolute right-3 top-2.5 text-slate-400 text-sm">search</span>
<input class="w-full pr-10 pl-4 py-2 rounded-lg border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" placeholder="البحث بالاسم..." type="text"/>
</div>
</div>
<div class="space-y-1">
<label class="text-xs font-semibold text-slate-500 uppercase">البريد الإلكتروني</label>
<input class="w-full px-4 py-2 rounded-lg border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" placeholder="example@domain.com" type="email"/>
</div>
<div class="space-y-1">
<label class="text-xs font-semibold text-slate-500 uppercase">التخصص</label>
<select class="w-full px-4 py-2 rounded-lg border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all appearance-none">
<option value="">الكل</option>
<option value="cs">علوم الحاسب</option>
<option value="eng">الهندسة</option>
<option value="bus">إدارة الأعمال</option>
<option value="des">التصميم</option>
</select>
</div>
<div class="space-y-1">
<label class="text-xs font-semibold text-slate-500 uppercase">سنة التخرج</label>
<select class="w-full px-4 py-2 rounded-lg border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all appearance-none">
<option value="">الكل</option>
<option value="2024">2024</option>
<option value="2023">2023</option>
<option value="2022">2022</option>
<option value="2021">2021</option>
</select>
</div>
<div class="space-y-1">
<label class="text-xs font-semibold text-slate-500 uppercase">الحالة الوظيفية</label>
<select class="w-full px-4 py-2 rounded-lg border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all appearance-none">
<option value="">الكل</option>
<option value="employed">موظف</option>
<option value="seeking">باحث عن عمل</option>
<option value="student">متابع للدراسة</option>
<option value="freelance">عمل حر</option>
</select>
</div>
</div>
<div class="mt-4 flex justify-end">
<button class="text-primary hover:text-primary/80 font-medium text-sm flex items-center gap-1">
<span class="material-icons text-sm">filter_list_off</span>
                            مسح التصفية
                        </button>
</div>
</section>
<!-- Table Section -->
<div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
<div class="overflow-x-auto">
<table class="w-full text-right border-collapse">
<thead>
<tr class="bg-slate-50 dark:bg-slate-800/50 border-b border-slate-200 dark:border-slate-800">
<th class="px-6 py-4 text-sm font-semibold text-slate-600 dark:text-slate-400">المعرف</th>
<th class="px-6 py-4 text-sm font-semibold text-slate-600 dark:text-slate-400">الاسم الكامل</th>
<th class="px-6 py-4 text-sm font-semibold text-slate-600 dark:text-slate-400">التخصص</th>
<th class="px-6 py-4 text-sm font-semibold text-slate-600 dark:text-slate-400 text-center">سنة التخرج</th>
<th class="px-6 py-4 text-sm font-semibold text-slate-600 dark:text-slate-400">الحالة</th>
<th class="px-6 py-4 text-sm font-semibold text-slate-600 dark:text-slate-400 text-center">الإجراءات</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-800">
<!-- Row 1 -->
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4 text-sm font-medium text-slate-500">#GRD-4521</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-full bg-orange-100 text-primary flex items-center justify-center font-bold">أ</div>
<div>
<p class="font-semibold text-slate-900 dark:text-slate-100">أحمد محمد العتيبي</p>
<p class="text-xs text-slate-500">ahmed@example.com</p>
</div>
</div>
</td>
<td class="px-6 py-4 text-sm">هندسة البرمجيات</td>
<td class="px-6 py-4 text-sm text-center">2023</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">
                                            موظف
                                        </span>
</td>
<td class="px-6 py-4 text-center">
<div class="flex items-center justify-center gap-2">
<button class="p-1.5 rounded-lg text-slate-400 hover:text-primary hover:bg-primary/10 transition-colors" title="عرض الملف">
<span class="material-icons text-lg">visibility</span>
</button>
<button class="p-1.5 rounded-lg text-slate-400 hover:text-blue-600 hover:bg-blue-50 transition-colors" title="تعديل">
<span class="material-icons text-lg">edit</span>
</button>
<button class="p-1.5 rounded-lg text-slate-400 hover:text-red-600 hover:bg-red-50 transition-colors" title="حذف">
<span class="material-icons text-lg">delete</span>
</button>
</div>
</td>
</tr>
<!-- Row 2 -->
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4 text-sm font-medium text-slate-500">#GRD-4522</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-bold">س</div>
<div>
<p class="font-semibold text-slate-900 dark:text-slate-100">سارة فهد القحطاني</p>
<p class="text-xs text-slate-500">sara.f@example.com</p>
</div>
</div>
</td>
<td class="px-6 py-4 text-sm">نظم المعلومات</td>
<td class="px-6 py-4 text-sm text-center">2022</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800 dark:bg-amber-900/30 dark:text-amber-400">
                                            باحث عن عمل
                                        </span>
</td>
<td class="px-6 py-4 text-center">
<div class="flex items-center justify-center gap-2">
<button class="p-1.5 rounded-lg text-slate-400 hover:text-primary hover:bg-primary/10 transition-colors">
<span class="material-icons text-lg">visibility</span>
</button>
<button class="p-1.5 rounded-lg text-slate-400 hover:text-blue-600 hover:bg-blue-50 transition-colors">
<span class="material-icons text-lg">edit</span>
</button>
<button class="p-1.5 rounded-lg text-slate-400 hover:text-red-600 hover:bg-red-50 transition-colors">
<span class="material-icons text-lg">delete</span>
</button>
</div>
</td>
</tr>
<!-- Row 3 -->
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4 text-sm font-medium text-slate-500">#GRD-4523</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-full bg-purple-100 text-purple-600 flex items-center justify-center font-bold">خ</div>
<div>
<p class="font-semibold text-slate-900 dark:text-slate-100">خالد وليد المطيري</p>
<p class="text-xs text-slate-500">khaled.w@example.com</p>
</div>
</div>
</td>
<td class="px-6 py-4 text-sm">إدارة الأعمال</td>
<td class="px-6 py-4 text-sm text-center">2024</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-400">
                                            متابع للدراسة
                                        </span>
</td>
<td class="px-6 py-4 text-center">
<div class="flex items-center justify-center gap-2">
<button class="p-1.5 rounded-lg text-slate-400 hover:text-primary hover:bg-primary/10 transition-colors">
<span class="material-icons text-lg">visibility</span>
</button>
<button class="p-1.5 rounded-lg text-slate-400 hover:text-blue-600 hover:bg-blue-50 transition-colors">
<span class="material-icons text-lg">edit</span>
</button>
<button class="p-1.5 rounded-lg text-slate-400 hover:text-red-600 hover:bg-red-50 transition-colors">
<span class="material-icons text-lg">delete</span>
</button>
</div>
</td>
</tr>
<!-- Row 4 -->
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4 text-sm font-medium text-slate-500">#GRD-4524</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-full bg-slate-100 text-slate-600 flex items-center justify-center font-bold">ر</div>
<div>
<p class="font-semibold text-slate-900 dark:text-slate-100">ريم علي الشهري</p>
<p class="text-xs text-slate-500">reem.a@example.com</p>
</div>
</div>
</td>
<td class="px-6 py-4 text-sm">التصميم الجرافيكي</td>
<td class="px-6 py-4 text-sm text-center">2021</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800 dark:bg-emerald-900/30 dark:text-emerald-400">
                                            عمل حر
                                        </span>
</td>
<td class="px-6 py-4 text-center">
<div class="flex items-center justify-center gap-2">
<button class="p-1.5 rounded-lg text-slate-400 hover:text-primary hover:bg-primary/10 transition-colors">
<span class="material-icons text-lg">visibility</span>
</button>
<button class="p-1.5 rounded-lg text-slate-400 hover:text-blue-600 hover:bg-blue-50 transition-colors">
<span class="material-icons text-lg">edit</span>
</button>
<button class="p-1.5 rounded-lg text-slate-400 hover:text-red-600 hover:bg-red-50 transition-colors">
<span class="material-icons text-lg">delete</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination -->
<div class="px-6 py-4 border-t border-slate-200 dark:border-slate-800 bg-slate-50 dark:bg-slate-800/30 flex items-center justify-between">
<div class="text-sm text-slate-500">
                            عرض 1 إلى 4 من أصل 1,240 خريج
                        </div>
<div class="flex items-center gap-1">
<button class="w-8 h-8 flex items-center justify-center rounded border border-slate-200 dark:border-slate-700 text-slate-400 hover:bg-white transition-colors">
<span class="material-icons text-sm">chevron_right</span>
</button>
<button class="w-8 h-8 flex items-center justify-center rounded border border-primary bg-primary text-white font-medium">1</button>
<button class="w-8 h-8 flex items-center justify-center rounded border border-slate-200 dark:border-slate-700 hover:bg-white transition-colors">2</button>
<button class="w-8 h-8 flex items-center justify-center rounded border border-slate-200 dark:border-slate-700 hover:bg-white transition-colors">3</button>
<button class="w-8 h-8 flex items-center justify-center rounded border border-slate-200 dark:border-slate-700 text-slate-400 hover:bg-white transition-colors">
<span class="material-icons text-sm">chevron_left</span>
</button>
</div>
</div>
</div>
<!-- Stats Summary (Quick View) -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-4">
<div class="bg-white dark:bg-slate-900 p-4 rounded-xl border border-slate-200 dark:border-slate-800 flex items-center gap-4">
<div class="w-12 h-12 bg-primary/10 text-primary rounded-lg flex items-center justify-center">
<span class="material-icons">groups</span>
</div>
<div>
<p class="text-xs text-slate-500 font-medium">إجمالي الخريجين</p>
<p class="text-xl font-bold">1,240</p>
</div>
</div>
<div class="bg-white dark:bg-slate-900 p-4 rounded-xl border border-slate-200 dark:border-slate-800 flex items-center gap-4">
<div class="w-12 h-12 bg-green-100 text-green-600 rounded-lg flex items-center justify-center">
<span class="material-icons">work</span>
</div>
<div>
<p class="text-xs text-slate-500 font-medium">موظفون</p>
<p class="text-xl font-bold">842</p>
</div>
</div>
<div class="bg-white dark:bg-slate-900 p-4 rounded-xl border border-slate-200 dark:border-slate-800 flex items-center gap-4">
<div class="w-12 h-12 bg-amber-100 text-amber-600 rounded-lg flex items-center justify-center">
<span class="material-icons">search</span>
</div>
<div>
<p class="text-xs text-slate-500 font-medium">باحثون عن عمل</p>
<p class="text-xl font-bold">156</p>
</div>
</div>
<div class="bg-white dark:bg-slate-900 p-4 rounded-xl border border-slate-200 dark:border-slate-800 flex items-center gap-4">
<div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center">
<span class="material-icons">history_edu</span>
</div>
<div>
<p class="text-xs text-slate-500 font-medium">دراسات عليا</p>
<p class="text-xl font-bold">242</p>
</div>
</div>
</div>
</div>
<!-- Footer -->
<footer class="mt-auto py-6 px-8 text-center text-xs text-slate-500 border-t border-slate-200 dark:border-slate-800">
                © 2024 نظام إدارة الخريجين - GTS. جميع الحقوق محفوظة.
            </footer>
</main>
</div>
</body></html>