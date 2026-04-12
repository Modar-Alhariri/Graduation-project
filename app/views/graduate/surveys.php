<!DOCTYPE html>

<html dir="rtl" lang="ar"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
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
<style>
        body {
            font-family: 'Public Sans', sans-serif;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen">
<div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
<div class="layout-container flex h-full grow flex-col">
<aside id="sidebar"
class="w-64 bg-white dark:bg-slate-900 border-l border-slate-200 dark:border-slate-800 flex flex-col fixed h-full z-50 transform translate-x-full md:translate-x-0 transition-transform duration-300">

<div class="p-6 flex items-center gap-3 border-b border-slate-100 dark:border-slate-800">
<div class="bg-primary rounded-xl p-2 flex items-center justify-center text-white">
<span class="material-symbols-outlined text-2xl">school</span>
</div>
<div>
<h1 class="text-lg font-bold leading-tight">نظام تتبع الخريجين</h1>
<p class="text-xs text-slate-500 dark:text-slate-400">جامعة المستقبل</p>
</div>
<button onclick="toggleSidebar()" 
    class="md:hidden p-1 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg">
        <span class="material-symbols-outlined">close</span>
    </button>
</div>
<nav class="flex-1 p-4 space-y-2 overflow-y-auto">
<a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary/10 text-primary font-bold" href="<?= BASE_URL ?>graduate/dashboard">
<span class="material-symbols-outlined">dashboard</span>
<span>لوحة القيادة</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 transition-colors" href="<?= BASE_URL ?>graduate/jobs">
<span class="material-symbols-outlined">work</span>
<span>الوظائف المتاحة</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 transition-colors" href="<?= BASE_URL ?>graduate/myApplecations">
<span class="material-symbols-outlined">description</span>
<span>طلباتي</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 transition-colors" href="<?= BASE_URL ?>graduate/surveys">
<span class="material-symbols-outlined">mail</span>
<span>Surveys</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 transition-colors" href="<?= BASE_URL ?>graduate/cvBuilder">
    <span class="material-symbols-outlined">badge</span>
    <span>CV</span>
</a>
<div class="pt-4 mt-4 border-t border-slate-100 dark:border-slate-800">
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 transition-colors" href="#">
    <span class="material-symbols-outlined">account_circle</span>
    <span>حسابي</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-red-50 text-red-600 transition-colors" href="#">
<span class="material-symbols-outlined">logout</span>
<span>تسجيل الخروج</span>
</a>
</div>
</nav>
<div class="p-4 border-t border-slate-100 dark:border-slate-800">
<div class="flex items-center gap-3 px-2 py-2">
<div class="size-10 rounded-full bg-slate-200 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Profile picture of the graduate" src="https://lh3.googleusercontent.com/aida-public/AB6AXuByECDc2YKpgTQXk51KFWLv7YYnQ24xpgLx2-1yvuLcxwu-3bV8oQfju3JNYG7_IQ8GL_8DlhouSHnUedSqhBxWQjQcUUm57myD2qoPCUH3B-WMLDf3rjPDy1SXP24rNS7baZSTmUk4tkpK8TZ55fZIeu3wGzYqOVAHkxIsWa3bGykodQAQQO1Lt2ar58PhYBgJ03nQhR6cXh-i1Zs74E_tueTT3AegFW6nrwniZ_IwVSgwPQ02dL2bOCxu03ChmJIWqVEH3lD4c9s"/>
</div>
<div class="flex-1 min-w-0">
<p class="text-sm font-bold truncate">أحمد محمد</p>
<p class="text-xs text-slate-500 truncate">خريج هندسة حاسب</p>
</div>
</div>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 md:mr-64">
<!-- Header -->
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
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

<div class="lg:col-span-9 space-y-8">
<section>
<div class="flex items-center justify-between mb-4">
<h3 class="text-xl font-bold">الاستطلاعات النشطة</h3>
<span class="px-2.5 py-1 rounded-full bg-primary/10 text-primary text-xs font-bold">2 متبقية</span>
</div>
<div class="grid md:grid-cols-2 gap-4">
<div class="flex flex-col bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl overflow-hidden hover:shadow-md transition-shadow">
<div class="h-32 w-full bg-slate-200 dark:bg-slate-800 relative overflow-hidden">
<div class="absolute inset-0 bg-gradient-to-br from-primary/20 to-transparent"></div>
<div class="absolute inset-0 flex items-center justify-center">
<span class="material-symbols-outlined text-5xl text-primary/30">badge</span>
</div>
</div>
<div class="p-5 flex flex-col flex-1">
<h4 class="font-bold text-lg mb-1">حالة التوظيف الحالية</h4>
<p class="text-slate-500 text-sm mb-4 line-clamp-2">نحتاج لتحديث بياناتك المهنية لضمان دقة إحصائيات التوظيف لدفعتك.</p>
<div class="mt-auto flex items-center justify-between">
<span class="text-xs text-slate-400">ينتهي في: 15 مارس</span>
<button class="bg-primary hover:bg-primary/90 text-white px-5 py-2 rounded-xl text-sm font-bold transition-transform active:scale-95">بدء الاستطلاع</button>
</div>
</div>
</div>
<div class="flex flex-col bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl overflow-hidden hover:shadow-md transition-shadow">
<div class="h-32 w-full bg-slate-200 dark:bg-slate-800 relative overflow-hidden">
<div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 to-transparent"></div>
<div class="absolute inset-0 flex items-center justify-center">
<span class="material-symbols-outlined text-5xl text-slate-400/30">school</span>
</div>
</div>
<div class="p-5 flex flex-col flex-1">
<h4 class="font-bold text-lg mb-1">تقييم المناهج الدراسية</h4>
<p class="text-slate-500 text-sm mb-4 line-clamp-2">رأيك يهمنا في تطوير المناهج لتناسب متطلبات سوق العمل الحالية.</p>
<div class="mt-auto flex items-center justify-between">
<span class="text-xs text-slate-400">ينتهي في: 20 مارس</span>
<button class="bg-primary hover:bg-primary/90 text-white px-5 py-2 rounded-xl text-sm font-bold transition-transform active:scale-95">بدء الاستطلاع</button>
</div>
</div>
</div>
</div>
</section>
<section>
<h3 class="text-xl font-bold mb-4">رسائل الشركات</h3>
<div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl overflow-hidden">
<div class="overflow-x-auto">
<table class="w-full text-right border-collapse">
<thead class="bg-slate-50 dark:bg-slate-800/50 border-b border-slate-200 dark:border-slate-800">
<tr>
<th class="px-6 py-4 text-sm font-bold text-slate-600 dark:text-slate-300">الشركة</th>
<th class="px-6 py-4 text-sm font-bold text-slate-600 dark:text-slate-300">محتوى الرسالة</th>
<th class="px-6 py-4 text-sm font-bold text-slate-600 dark:text-slate-300">التاريخ</th>
<th class="px-6 py-4 text-sm font-bold text-slate-600 dark:text-slate-300"></th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-800">
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-8 rounded-lg bg-slate-100 dark:bg-slate-800 flex items-center justify-center">
<span class="material-symbols-outlined text-primary">apartment</span>
</div>
<span class="font-semibold text-sm">أرامكو السعودية</span>
</div>
</td>
<td class="px-6 py-4">
<p class="text-sm text-slate-500 truncate max-w-xs">نود دعوتكم لإجراء مقابلة أولية بخصوص منصب مهندس برمجيات...</p>
</td>
<td class="px-6 py-4 text-sm text-slate-400">منذ ساعتين</td>
<td class="px-6 py-4">
<button class="text-primary hover:underline text-sm font-bold">عرض</button>
</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-8 rounded-lg bg-slate-100 dark:bg-slate-800 flex items-center justify-center">
<span class="material-symbols-outlined text-primary">business_center</span>
</div>
<span class="font-semibold text-sm">شركة علم</span>
</div>
</td>
<td class="px-6 py-4">
<p class="text-sm text-slate-500 truncate max-w-xs">لقد تم استلام طلبكم بنجاح وجاري المراجعة من قبل فريق التوظيف...</p>
</td>
<td class="px-6 py-4 text-sm text-slate-400">أمس</td>
<td class="px-6 py-4">
<button class="text-primary hover:underline text-sm font-bold">عرض</button>
</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-8 rounded-lg bg-slate-100 dark:bg-slate-800 flex items-center justify-center">
<span class="material-symbols-outlined text-primary">hub</span>
</div>
<span class="font-semibold text-sm">نيوم NEOM</span>
</div>
</td>
<td class="px-6 py-4">
<p class="text-sm text-slate-500 truncate max-w-xs">نحن مهتمون بملفك الشخصي، هل أنت متاح لمناقشة فرص تعاون؟</p>
</td>
<td class="px-6 py-4 text-sm text-slate-400">2 مارس 2024</td>
<td class="px-6 py-4">
<button class="text-primary hover:underline text-sm font-bold">عرض</button>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</section>
<section>
<h3 class="text-xl font-bold mb-4">تنبيهات النظام</h3>
<div class="space-y-3">
<div class="flex items-start gap-4 p-4 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl">
<div class="size-10 rounded-full bg-blue-100 dark:bg-blue-900/30 text-blue-600 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined">info</span>
</div>
<div class="flex-1">
<div class="flex items-center justify-between mb-1">
<h5 class="font-bold text-sm">تحديث نظام التخرج</h5>
<span class="text-xs text-slate-400">اليوم، 10:00 ص</span>
</div>
<p class="text-sm text-slate-500">تم إضافة ميزات جديدة في لوحة التحكم الخاصة بالخريجين، يمكنك الآن تصدير سيرتك الذاتية مباشرة.</p>
</div>
</div>
<div class="flex items-start gap-4 p-4 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl">
<div class="size-10 rounded-full bg-amber-100 dark:bg-amber-900/30 text-amber-600 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined">warning</span>
</div>
<div class="flex-1">
<div class="flex items-center justify-between mb-1">
<h5 class="font-bold text-sm">موعد نهائي يقترب</h5>
<span class="text-xs text-slate-400">أمس، 04:30 م</span>
</div>
<p class="text-sm text-slate-500">يرجى ملاحظة أن استطلاع "حالة التوظيف" سينتهي خلال 3 أيام. يرجى إكماله لتجنب توقف الحساب مؤقتاً.</p>
</div>
</div>
<div class="flex items-start gap-4 p-4 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl opacity-70">
<div class="size-10 rounded-full bg-green-100 dark:bg-green-900/30 text-green-600 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined">check_circle</span>
</div>
<div class="flex-1">
<div class="flex items-center justify-between mb-1">
<h5 class="font-bold text-sm">تم توثيق الحساب</h5>
<span class="text-xs text-slate-400">28 فبراير 2024</span>
</div>
<p class="text-sm text-slate-500">مبروك! تم التحقق من شهادتك الجامعية بنجاح وتوثيق ملفك كخريج معتمد.</p>
</div>
</div>
</div>
</section>
</div>
</div>
</main>
<footer class="bg-white dark:bg-background-dark border-t border-slate-200 dark:border-slate-800 py-6 text-center text-slate-400 text-sm">
<p>© 2024 نظام تتبع الخريجين (GTS). جميع الحقوق محفوظة.</p>
</footer>
</div>
</div>
</body></html>