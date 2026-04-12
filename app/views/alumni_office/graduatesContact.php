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
<title>مركز التواصل - مكتب الخريجين</title>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 min-h-screen">
<div class="layout-container flex flex-col min-h-screen">
<!-- Top Navigation -->
<header class="flex items-center justify-between border-b border-primary/10 bg-white dark:bg-slate-900 px-6 py-3 lg:px-20">
<div class="flex items-center gap-4">
<div class="size-10 bg-primary rounded-lg flex items-center justify-center text-white">
<span class="material-symbols-outlined">school</span>
</div>
<div>
<h2 class="text-lg font-bold leading-tight">مكتب الخريجين</h2>
<p class="text-xs text-slate-500 dark:text-slate-400">بوابة الإدارة المركزية</p>
</div>
</div>
<div class="flex items-center gap-4">
<div class="hidden md:flex gap-1 bg-slate-100 dark:bg-slate-800 p-1 rounded-xl">
<button class="px-4 py-2 text-sm font-medium rounded-lg hover:bg-white dark:hover:bg-slate-700 transition-colors">الرئيسية</button>
<button class="px-4 py-2 text-sm font-medium rounded-lg hover:bg-white dark:hover:bg-slate-700 transition-colors">الخريجين</button>
<button class="px-4 py-2 text-sm font-medium rounded-lg bg-primary text-white shadow-sm">التواصل</button>
<button class="px-4 py-2 text-sm font-medium rounded-lg hover:bg-white dark:hover:bg-slate-700 transition-colors">التقارير</button>
</div>
<div class="flex items-center gap-2 border-r border-slate-200 dark:border-slate-700 pr-4 mr-2">
<button class="p-2 rounded-full hover:bg-slate-100 dark:hover:bg-slate-800 relative">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-2 right-2 size-2 bg-primary rounded-full"></span>
</button>
<div class="size-10 rounded-full bg-primary/20 overflow-hidden border-2 border-primary/30">
<img class="w-full h-full object-cover" data-alt="Admin user profile picture" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCkIEGVr6wBDxfGCNT747gJrIuHQFSK_9LUxI2PjVopW6HfShoylvk8ipkisDoAYeA49KTA8BMXEbtQ2cV1vHiTWdI2QI37BGT6UfVxBpIrICGQ9LeDfGF8TVTn41UPrTctKo7aiv4ZZcKn1E1dGZXj5w7KKwkdnYdnINLN5C1jfz64SABjxwdQyAWCRG1pbnI6weFbOHHT0H-4-JJsWn_8nI--IwrA6ArlETsjqKzbWbffs1p_uHeVCZovPkbVB1EdxZljFxVoge8"/>
</div>
</div>
</div>
</header>
<main class="flex-1 px-6 py-8 lg:px-20 max-w-7xl mx-auto w-full">
<!-- Header Section -->
<div class="mb-8">
<h1 class="text-3xl font-black tracking-tight mb-2">مركز التواصل</h1>
<p class="text-slate-500 dark:text-slate-400">إدارة الرسائل الجماعية والإشعارات والتواصل المباشر مع الخريجين</p>
</div>
<!-- Dashboard Grid -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
<!-- Right Column: Bulk Messaging -->
<div class="lg:col-span-8 space-y-6">
<div class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 overflow-hidden">
<div class="p-6 border-b border-slate-100 dark:border-slate-800 flex justify-between items-center">
<h3 class="text-xl font-bold flex items-center gap-2">
<span class="material-symbols-outlined text-primary">campaign</span>
                                إرسال رسالة جماعية
                            </h3>
<span class="text-xs font-medium text-primary bg-primary/10 px-3 py-1 rounded-full">بريد إلكتروني + تنبيه تطبيق</span>
</div>
<div class="p-6">
<form class="space-y-6">
<div>
<label class="block text-sm font-semibold mb-2">عنوان الرسالة</label>
<input class="w-full rounded-lg border-slate-300 dark:border-slate-700 bg-transparent focus:ring-primary focus:border-primary" placeholder="أدخل عنواناً جذاباً للرسالة..." type="text"/>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div>
<label class="block text-sm font-semibold mb-2">المستلمون</label>
<select class="w-full rounded-lg border-slate-300 dark:border-slate-700 bg-transparent focus:ring-primary focus:border-primary">
<option>جميع الخريجين</option>
<option>سنة تخرج محددة</option>
<option>تخصص محدد</option>
<option>حسب الكلية</option>
</select>
</div>
<div>
<label class="block text-sm font-semibold mb-2">الفئة الفرعية</label>
<select class="w-full rounded-lg border-slate-300 dark:border-slate-700 bg-transparent focus:ring-primary focus:border-primary">
<option>اختر السنة / التخصص...</option>
<option>دفعة 2023</option>
<option>دفعة 2022</option>
<option>علوم الحاسب</option>
<option>إدارة الأعمال</option>
</select>
</div>
</div>
<div>
<label class="block text-sm font-semibold mb-2">نص الرسالة</label>
<textarea class="w-full rounded-lg border-slate-300 dark:border-slate-700 bg-transparent focus:ring-primary focus:border-primary" placeholder="اكتب محتوى الرسالة هنا..." rows="6"></textarea>
</div>
<div class="flex items-center justify-between pt-4 border-t border-slate-100 dark:border-slate-800">
<div class="flex gap-2">
<button class="p-2 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg" type="button">
<span class="material-symbols-outlined">attach_file</span>
</button>
<button class="p-2 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg" type="button">
<span class="material-symbols-outlined">image</span>
</button>
</div>
<button class="bg-primary hover:bg-primary/90 text-white px-8 py-2.5 rounded-lg font-bold shadow-lg shadow-primary/20 flex items-center gap-2">
<span>إرسال الآن</span>
<span class="material-symbols-outlined text-sm">send</span>
</button>
</div>
</form>
</div>
</div>
<!-- Direct Contact Card -->
<div class="bg-primary/5 border border-primary/20 rounded-xl p-6">
<div class="flex flex-col md:flex-row items-center justify-between gap-6">
<div class="flex items-center gap-4">
<div class="size-12 rounded-full bg-primary flex items-center justify-center text-white">
<span class="material-symbols-outlined">alternate_email</span>
</div>
<div>
<h4 class="text-lg font-bold">تواصل مباشر مع خريج</h4>
<p class="text-sm text-slate-600 dark:text-slate-400">يمكنك إرسال رسالة خاصة ومباشرة لأي خريج مسجل في النظام</p>
</div>
</div>
<button class="whitespace-nowrap bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 px-6 py-2 rounded-lg font-bold hover:shadow-md transition-shadow">
                                بحث عن خريج
                            </button>
</div>
</div>
</div>
<!-- Left Column: Notifications & History -->
<div class="lg:col-span-4 space-y-6">
<!-- Notifications List -->
<div class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 h-full">
<div class="p-6 border-b border-slate-100 dark:border-slate-800">
<h3 class="text-xl font-bold flex items-center gap-2">
<span class="material-symbols-outlined text-primary">notifications_active</span>
                                التنبيهات النظامية
                            </h3>
</div>
<div class="divide-y divide-slate-100 dark:divide-slate-800">
<!-- Job Notification -->
<div class="p-4 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors cursor-pointer group">
<div class="flex gap-4">
<div class="size-10 shrink-0 rounded-full bg-blue-100 dark:bg-blue-900/30 text-blue-600 flex items-center justify-center">
<span class="material-symbols-outlined">work</span>
</div>
<div class="flex-1">
<div class="flex justify-between items-start mb-1">
<h5 class="font-bold text-sm">فرصة وظيفية جديدة</h5>
<span class="text-[10px] text-slate-400">منذ ساعتين</span>
</div>
<p class="text-xs text-slate-600 dark:text-slate-400 line-clamp-2">تم نشر وظيفة "مطور برمجيات" في شركة التقنية المتقدمة لخريجي الهندسة.</p>
</div>
</div>
</div>
<!-- Survey Notification -->
<div class="p-4 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors cursor-pointer group">
<div class="flex gap-4">
<div class="size-10 shrink-0 rounded-full bg-amber-100 dark:bg-amber-900/30 text-amber-600 flex items-center justify-center">
<span class="material-symbols-outlined">quiz</span>
</div>
<div class="flex-1">
<div class="flex justify-between items-start mb-1">
<h5 class="font-bold text-sm">استبيان رضا الخريجين</h5>
<span class="text-[10px] text-slate-400">أمس</span>
</div>
<p class="text-xs text-slate-600 dark:text-slate-400 line-clamp-2">يرجى من جميع خريجي دفعة 2022 تعبئة استبيان التوظيف السنوي.</p>
</div>
</div>
</div>
<!-- Event Notification -->
<div class="p-4 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors cursor-pointer group">
<div class="flex gap-4">
<div class="size-10 shrink-0 rounded-full bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600 flex items-center justify-center">
<span class="material-symbols-outlined">event</span>
</div>
<div class="flex-1">
<div class="flex justify-between items-start mb-1">
<h5 class="font-bold text-sm">فعالية كلية العلوم</h5>
<span class="text-[10px] text-slate-400">3 أيام</span>
</div>
<p class="text-xs text-slate-600 dark:text-slate-400 line-clamp-2">ندوة بعنوان "مستقبل الذكاء الاصطناعي" في مدرج الكلية الرئيسي.</p>
</div>
</div>
</div>
<!-- News Notification -->
<div class="p-4 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors cursor-pointer group">
<div class="flex gap-4">
<div class="size-10 shrink-0 rounded-full bg-purple-100 dark:bg-purple-900/30 text-purple-600 flex items-center justify-center">
<span class="material-symbols-outlined">newspaper</span>
</div>
<div class="flex-1">
<div class="flex justify-between items-start mb-1">
<h5 class="font-bold text-sm">نشرة أخبار الجامعة</h5>
<span class="text-[10px] text-slate-400">أسبوع</span>
</div>
<p class="text-xs text-slate-600 dark:text-slate-400 line-clamp-2">صدر العدد الجديد من مجلة الجامعة الدورية للخريجين لشهر مايو.</p>
</div>
</div>
</div>
</div>
<div class="p-4 border-t border-slate-100 dark:border-slate-800">
<button class="w-full text-center py-2 text-sm font-bold text-primary hover:bg-primary/5 rounded-lg transition-colors">عرض جميع التنبيهات</button>
</div>
</div>
<!-- Quick Stats -->
<div class="grid grid-cols-2 gap-4">
<div class="bg-white dark:bg-slate-900 p-4 rounded-xl border border-slate-200 dark:border-slate-800">
<p class="text-xs text-slate-500 mb-1">رسائل الشهر</p>
<p class="text-2xl font-black text-primary">124</p>
</div>
<div class="bg-white dark:bg-slate-900 p-4 rounded-xl border border-slate-200 dark:border-slate-800">
<p class="text-xs text-slate-500 mb-1">نسبة الفتح</p>
<p class="text-2xl font-black text-primary">68%</p>
</div>
</div>
</div>
</div>
</main>
<footer class="mt-12 border-t border-slate-200 dark:border-slate-800 py-8 px-6 lg:px-20 bg-white dark:bg-slate-900/50">
<div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-4">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary">verified</span>
<p class="text-sm font-semibold">جامعة المستقبل - مكتب شؤون الخريجين</p>
</div>
<div class="flex gap-6 text-sm text-slate-500">
<a class="hover:text-primary" href="#">الشروط والأحكام</a>
<a class="hover:text-primary" href="#">سياسة الخصوصية</a>
<a class="hover:text-primary" href="#">الدعم الفني</a>
</div>
</div>
</footer>
</div>
</body></html>