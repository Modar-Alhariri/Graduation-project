<!DOCTYPE html>

<html dir="rtl" lang="ar"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>إدارة الملف الشخصي - نظام تتبع الخريجين</title>
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen">
<div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
<div class="layout-container flex h-full grow flex-col">
<!-- Top Navigation Bar -->
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
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 transition-colors" href="<?= BASE_URL ?>graduate/profileManagement">
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
<!-- Content Area -->
<div class="flex-1 flex flex-col gap-6">
<!-- Tabs Navigation -->
<div class="bg-white dark:bg-slate-800 rounded-xl shadow-sm overflow-hidden p-1 flex">
<button class="flex-1 py-3 text-sm font-bold border-b-2 border-primary text-primary bg-primary/5">المعلومات الشخصية</button>
<button class="flex-1 py-3 text-sm font-bold text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors">الأكاديمية</button>
<button class="flex-1 py-3 text-sm font-bold text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors">المهارات والخبرات</button>
</div>
<!-- Personal Info Section -->
<section class="bg-white dark:bg-slate-800 rounded-xl shadow-sm p-6">
<div class="flex items-center gap-2 mb-6 border-r-4 border-primary pr-3">
<h2 class="text-xl font-bold">المعلومات الشخصية</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="flex flex-col gap-2">
<label class="text-sm font-medium text-slate-700 dark:text-slate-300">الاسم الكامل</label>
<input class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 focus:border-primary focus:ring-primary" type="text" value="أحمد محمد علي"/>
</div>
<div class="flex flex-col gap-2">
<label class="text-sm font-medium text-slate-700 dark:text-slate-300">البريد الإلكتروني</label>
<input class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 focus:border-primary focus:ring-primary text-left" dir="ltr" type="email" value="ahmed.m@example.com"/>
</div>
<div class="flex flex-col gap-2">
<label class="text-sm font-medium text-slate-700 dark:text-slate-300">رقم الهاتف</label>
<input class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 focus:border-primary focus:ring-primary text-left" dir="ltr" type="tel" value="+966 50 123 4567"/>
</div>
<div class="flex flex-col gap-2">
<label class="text-sm font-medium text-slate-700 dark:text-slate-300">العنوان</label>
<input class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 focus:border-primary focus:ring-primary" type="text" value="الرياض، المملكة العربية السعودية"/>
</div>
</div>
</section>
<!-- Academic Info Section -->
<section class="bg-white dark:bg-slate-800 rounded-xl shadow-sm p-6">
<div class="flex items-center gap-2 mb-6 border-r-4 border-primary pr-3">
<h2 class="text-xl font-bold">المعلومات الأكاديمية</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="flex flex-col gap-2 col-span-1 md:col-span-2">
<label class="text-sm font-medium text-slate-700 dark:text-slate-300">الجامعة</label>
<input class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 focus:border-primary focus:ring-primary" type="text" value="جامعة الملك سعود"/>
</div>
<div class="flex flex-col gap-2">
<label class="text-sm font-medium text-slate-700 dark:text-slate-300">سنة التخرج</label>
<select class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 focus:border-primary focus:ring-primary">
<option>2023</option>
<option selected="">2024</option>
<option>2025 (متوقع)</option>
</select>
</div>
<div class="flex flex-col gap-2">
<label class="text-sm font-medium text-slate-700 dark:text-slate-300">الكلية</label>
<input class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 focus:border-primary focus:ring-primary" type="text" value="علوم الحاسب والمعلومات"/>
</div>
<div class="flex flex-col gap-2">
<label class="text-sm font-medium text-slate-700 dark:text-slate-300">التخصص الرئيسي</label>
<input class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 focus:border-primary focus:ring-primary" type="text" value="هندسة البرمجيات"/>
</div>
<div class="flex flex-col gap-2">
<label class="text-sm font-medium text-slate-700 dark:text-slate-300">المعدل التراكمي (GPA)</label>
<input class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 focus:border-primary focus:ring-primary text-left" dir="ltr" type="text" value="4.85 / 5.0"/>
</div>
</div>
</section>
<!-- Skills Section -->
<section class="bg-white dark:bg-slate-800 rounded-xl shadow-sm p-6">
<div class="flex items-center justify-between mb-6 border-r-4 border-primary pr-3">
<h2 class="text-xl font-bold">المهارات التقنية</h2>
<button class="text-primary text-sm font-bold flex items-center gap-1">
<span class="material-symbols-outlined text-base">add</span>
                                إضافة مهارة
                            </button>
</div>
<div class="flex flex-wrap gap-2">
<span class="px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-medium border border-primary/20 flex items-center gap-2">
                                تطوير الويب (React)
                                <button class="material-symbols-outlined text-xs">close</button>
</span>
<span class="px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-medium border border-primary/20 flex items-center gap-2">
                                قواعد البيانات (SQL)
                                <button class="material-symbols-outlined text-xs">close</button>
</span>
<span class="px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-medium border border-primary/20 flex items-center gap-2">
                                Python
                                <button class="material-symbols-outlined text-xs">close</button>
</span>
<span class="px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-medium border border-primary/20 flex items-center gap-2">
                                تحليل البيانات
                                <button class="material-symbols-outlined text-xs">close</button>
</span>
<span class="px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-medium border border-primary/20 flex items-center gap-2">
                                UI/UX Design
                                <button class="material-symbols-outlined text-xs">close</button>
</span>
</div>
</section>
<!-- Training Courses Section -->
<section class="bg-white dark:bg-slate-800 rounded-xl shadow-sm p-6">
<div class="flex items-center justify-between mb-6 border-r-4 border-primary pr-3">
<h2 class="text-xl font-bold">الدورات التدريبية</h2>
<button class="text-primary text-sm font-bold flex items-center gap-1">
<span class="material-symbols-outlined text-base">add</span>
                                إضافة دورة
                            </button>
</div>
<div class="overflow-x-auto">
<table class="w-full text-right border-collapse">
<thead>
<tr class="border-b border-slate-100 dark:border-slate-700">
<th class="py-4 px-2 text-sm font-bold text-slate-500 dark:text-slate-400">اسم الدورة</th>
<th class="py-4 px-2 text-sm font-bold text-slate-500 dark:text-slate-400">الجهة المانحة</th>
<th class="py-4 px-2 text-sm font-bold text-slate-500 dark:text-slate-400">السنة</th>
<th class="py-4 px-2 text-sm font-bold text-slate-500 dark:text-slate-400">الإجراءات</th>
</tr>
</thead>
<tbody>
<tr class="border-b border-slate-50 dark:border-slate-700/50 hover:bg-slate-50/50 dark:hover:bg-slate-700/30 transition-colors">
<td class="py-4 px-2 text-sm font-medium">مطور ويب محترف</td>
<td class="py-4 px-2 text-sm">أكاديمية طويق</td>
<td class="py-4 px-2 text-sm">2023</td>
<td class="py-4 px-2">
<button class="text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined text-xl">edit</span>
</button>
</td>
</tr>
<tr class="border-b border-slate-50 dark:border-slate-700/50 hover:bg-slate-50/50 dark:hover:bg-slate-700/30 transition-colors">
<td class="py-4 px-2 text-sm font-medium">أمن المعلومات والسيبراني</td>
<td class="py-4 px-2 text-sm">Udemy (Online)</td>
<td class="py-4 px-2 text-sm">2022</td>
<td class="py-4 px-2">
<button class="text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined text-xl">edit</span>
</button>
</td>
</tr>
<tr class="border-b border-slate-50 dark:border-slate-700/50 hover:bg-slate-50/50 dark:hover:bg-slate-700/30 transition-colors">
<td class="py-4 px-2 text-sm font-medium">إدارة المشاريع البرمجية</td>
<td class="py-4 px-2 text-sm">Coursera</td>
<td class="py-4 px-2 text-sm">2021</td>
<td class="py-4 px-2">
<button class="text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined text-xl">edit</span>
</button>
</td>
</tr>
</tbody>
</table>
</div>
</section>
<!-- Action Buttons -->
<div class="flex items-center justify-end gap-4 pb-12">
<button class="px-8 py-3 rounded-xl border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300 font-bold hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                            إلغاء
                        </button>
<button class="px-8 py-3 rounded-xl bg-primary text-white font-bold shadow-lg shadow-primary/30 hover:bg-primary/90 hover:scale-[1.02] transition-all">
                            حفظ التعديلات
                        </button>
</div>
</div>
</main>
<!-- Footer -->
<footer class="bg-white dark:bg-background-dark border-t border-slate-200 dark:border-slate-800 py-6 px-10 text-center text-slate-500 dark:text-slate-400 text-sm">
<p>© 2024 نظام تتبع الخريجين (GTS). جميع الحقوق محفوظة.</p>
</footer>
</div>
</div>
</body></html>