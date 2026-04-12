<!DOCTYPE html>

<html dir="rtl" lang="ar"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
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
        body { font-family: 'Public Sans', sans-serif; }
        .material-symbols-outlined { font-size: 24px; }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 transition-colors duration-200">
<div class="flex h-screen overflow-hidden">
<!-- Sidebar -->
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
<!-- Stats Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="flex items-center justify-between mb-4">
<span class="text-sm font-medium text-slate-500">إجمالي الخريجين</span>
<div class="p-2 bg-primary/10 text-primary rounded-lg">
<span class="material-symbols-outlined">school</span>
</div>
</div>
<div class="flex items-end justify-between">
<span class="text-3xl font-bold">١٢,٥٠٠</span>
<span class="text-emerald-500 text-sm font-medium flex items-center gap-1">
<span class="material-symbols-outlined text-sm">arrow_upward</span> ٥٪
                            </span>
</div>
</div>
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="flex items-center justify-between mb-4">
<span class="text-sm font-medium text-slate-500">معدل التوظيف</span>
<div class="p-2 bg-emerald-100 text-emerald-600 rounded-lg">
<span class="material-symbols-outlined">verified_user</span>
</div>
</div>
<div class="flex items-end justify-between">
<span class="text-3xl font-bold">٨٥٪</span>
<span class="text-emerald-500 text-sm font-medium flex items-center gap-1">
<span class="material-symbols-outlined text-sm">arrow_upward</span> ٢٪
                            </span>
</div>
</div>
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="flex items-center justify-between mb-4">
<span class="text-sm font-medium text-slate-500">الباحثون عن عمل</span>
<div class="p-2 bg-amber-100 text-amber-600 rounded-lg">
<span class="material-symbols-outlined">person_search</span>
</div>
</div>
<div class="flex items-end justify-between">
<span class="text-3xl font-bold">١,٢٠٠</span>
<span class="text-rose-500 text-sm font-medium flex items-center gap-1">
<span class="material-symbols-outlined text-sm">arrow_downward</span> ٣٪
                            </span>
</div>
</div>
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="flex items-center justify-between mb-4">
<span class="text-sm font-medium text-slate-500">الوظائف المتاحة</span>
<div class="p-2 bg-blue-100 text-blue-600 rounded-lg">
<span class="material-symbols-outlined">work_outline</span>
</div>
</div>
<div class="flex items-end justify-between">
<span class="text-3xl font-bold">٤٥٠</span>
<span class="text-emerald-500 text-sm font-medium flex items-center gap-1">
<span class="material-symbols-outlined text-sm">arrow_upward</span> ١٢٪
                            </span>
</div>
</div>
</div>
<!-- Charts Section -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
<!-- Line Chart Placeholder -->
<div class="lg:col-span-2 bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800">
<div class="flex items-center justify-between mb-6">
<h3 class="font-bold">معدل التوظيف السنوي</h3>
<select class="text-sm border-slate-200 dark:border-slate-800 rounded-lg bg-slate-50 dark:bg-slate-800">
<option>آخر ٥ سنوات</option>
<option>آخر ١٠ سنوات</option>
</select>
</div>
<div class="h-64 relative flex items-end justify-between gap-4 px-2">
<div class="absolute inset-0 flex flex-col justify-between text-xs text-slate-400">
<div class="border-b border-slate-100 dark:border-slate-800 w-full h-0"></div>
<div class="border-b border-slate-100 dark:border-slate-800 w-full h-0"></div>
<div class="border-b border-slate-100 dark:border-slate-800 w-full h-0"></div>
<div class="border-b border-slate-100 dark:border-slate-800 w-full h-0"></div>
<div class="w-full h-0"></div>
</div>
<div class="flex-1 flex flex-col items-center gap-2 group">
<div class="w-full bg-primary/20 rounded-t-lg transition-all duration-300 group-hover:bg-primary" style="height: 60%"></div>
<span class="text-xs text-slate-500">٢٠١٩</span>
</div>
<div class="flex-1 flex flex-col items-center gap-2 group">
<div class="w-full bg-primary/20 rounded-t-lg transition-all duration-300 group-hover:bg-primary" style="height: 75%"></div>
<span class="text-xs text-slate-500">٢٠٢٠</span>
</div>
<div class="flex-1 flex flex-col items-center gap-2 group">
<div class="w-full bg-primary/20 rounded-t-lg transition-all duration-300 group-hover:bg-primary" style="height: 70%"></div>
<span class="text-xs text-slate-500">٢٠٢١</span>
</div>
<div class="flex-1 flex flex-col items-center gap-2 group">
<div class="w-full bg-primary/20 rounded-t-lg transition-all duration-300 group-hover:bg-primary" style="height: 85%"></div>
<span class="text-xs text-slate-500">٢٠٢٢</span>
</div>
<div class="flex-1 flex flex-col items-center gap-2 group">
<div class="w-full bg-primary rounded-t-lg shadow-lg shadow-primary/20" style="height: 95%"></div>
<span class="text-xs text-slate-500">٢٠٢٣</span>
</div>
</div>
</div>
<!-- Donut Chart Placeholder -->
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800">
<h3 class="font-bold mb-6">توزيع الخريجين</h3>
<div class="relative flex justify-center py-4">
<div class="w-48 h-48 rounded-full border-[16px] border-slate-100 dark:border-slate-800 flex items-center justify-center relative overflow-hidden">
<div class="absolute inset-0 rounded-full border-[16px] border-primary border-l-transparent border-b-transparent rotate-45"></div>
<div class="absolute inset-0 rounded-full border-[16px] border-emerald-500 border-t-transparent border-r-transparent border-b-transparent -rotate-12"></div>
<div class="text-center">
<p class="text-2xl font-bold">١٢.٥ ألف</p>
<p class="text-xs text-slate-500">إجمالي</p>
</div>
</div>
</div>
<div class="space-y-3 mt-4">
<div class="flex items-center justify-between text-sm">
<div class="flex items-center gap-2">
<div class="w-3 h-3 rounded-full bg-primary"></div>
<span>موظفون</span>
</div>
<span class="font-semibold">٦٥٪</span>
</div>
<div class="flex items-center justify-between text-sm">
<div class="flex items-center gap-2">
<div class="w-3 h-3 rounded-full bg-emerald-500"></div>
<span>تدريب</span>
</div>
<span class="font-semibold">١٥٪</span>
</div>
<div class="flex items-center justify-between text-sm">
<div class="flex items-center gap-2">
<div class="w-3 h-3 rounded-full bg-amber-500"></div>
<span>باحثون عن عمل</span>
</div>
<span class="font-semibold">١٠٪</span>
</div>
<div class="flex items-center justify-between text-sm">
<div class="flex items-center gap-2">
<div class="w-3 h-3 rounded-full bg-slate-400"></div>
<span>دراسات عليا</span>
</div>
<span class="font-semibold">١٠٪</span>
</div>
</div>
</div>
</div>
<!-- Recent Activity -->
<div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="p-6 border-b border-slate-200 dark:border-slate-800 flex justify-between items-center">
<h3 class="font-bold text-lg">النشاطات الأخيرة</h3>
<button class="text-sm text-primary font-medium hover:underline">عرض الكل</button>
</div>
<div class="p-2">
<div class="flex items-center gap-4 p-4 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-lg transition-colors border-b border-slate-50 dark:border-slate-800 last:border-0">
<div class="w-10 h-10 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center">
<span class="material-symbols-outlined">person_edit</span>
</div>
<div class="flex-1">
<p class="text-sm font-medium"><span class="font-bold">محمد الحربي</span> قام بتحديث ملفه الشخصي</p>
<p class="text-xs text-slate-500 mt-1">قبل ١٠ دقائق</p>
</div>
<span class="text-xs bg-slate-100 dark:bg-slate-800 px-3 py-1 rounded-full text-slate-500">تحديث</span>
</div>
<div class="flex items-center gap-4 p-4 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-lg transition-colors border-b border-slate-50 dark:border-slate-800 last:border-0">
<div class="w-10 h-10 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center">
<span class="material-symbols-outlined">business_center</span>
</div>
<div class="flex-1">
<p class="text-sm font-medium"><span class="font-bold">شركة سابك</span> أضافت فرصة عمل جديدة (مهندس نظم)</p>
<p class="text-xs text-slate-500 mt-1">قبل ساعة</p>
</div>
<span class="text-xs bg-emerald-100/50 text-emerald-600 px-3 py-1 rounded-full">وظيفة</span>
</div>
<div class="flex items-center gap-4 p-4 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-lg transition-colors border-b border-slate-50 dark:border-slate-800 last:border-0">
<div class="w-10 h-10 rounded-full bg-amber-100 text-amber-600 flex items-center justify-center">
<span class="material-symbols-outlined">send</span>
</div>
<div class="flex-1">
<p class="text-sm font-medium"><span class="font-bold">سارة خالد</span> قدمت على وظيفة محلل بيانات</p>
<p class="text-xs text-slate-500 mt-1">قبل ٣ ساعات</p>
</div>
<span class="text-xs bg-slate-100 dark:bg-slate-800 px-3 py-1 rounded-full text-slate-500">طلب</span>
</div>
</div>
</div>
</div>
</main>
</div>
</body></html>