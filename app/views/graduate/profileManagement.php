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
<header class="flex items-center justify-between border-b border-slate-200 dark:border-slate-800 bg-white dark:bg-background-dark px-6 md:px-20 py-4 sticky top-0 z-50">
<div class="flex items-center gap-4">
<div class="size-8 text-primary">
<svg fill="currentColor" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path clip-rule="evenodd" d="M47.2426 24L24 47.2426L0.757355 24L24 0.757355L47.2426 24ZM12.2426 21H35.7574L24 9.24264L12.2426 21Z" fill-rule="evenodd"></path>
</svg>
</div>
<h2 class="text-xl font-bold tracking-tight">نظام تتبع الخريجين</h2>
</div>
<div class="flex flex-1 justify-end gap-4">
<div class="flex gap-2">
<button class="flex items-center justify-center rounded-xl h-10 w-10 bg-slate-100 dark:bg-slate-800 hover:bg-primary/10 transition-colors">
<span class="material-symbols-outlined text-slate-600 dark:text-slate-300">notifications</span>
</button>
<button class="flex items-center justify-center rounded-xl h-10 w-10 bg-slate-100 dark:bg-slate-800 hover:bg-primary/10 transition-colors">
<span class="material-symbols-outlined text-slate-600 dark:text-slate-300">settings</span>
</button>
</div>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border-2 border-primary" data-alt="صورة الملف الشخصي للمستخدم" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAOFQAuRg8dO2sv_jtKaJN62aYjM_UnpHiP78mT6vph9dxu7JHsmuSgBmLoirDqbTt5BqzxRxpY-43mO1wg4S4zNB_acxAPHsXMMDwtmyB7npSwjLhUjSVvKjC0bBqF17nBD1BA_yDm6fGBBGXS8Ut_3oNOxLmR1g-p-aMwhUtM24J4txBNtr6zI9x8hihcieVy63QqbipESvR_9OD1EgvMpzFQQFIscZGndV2tH3DxWmsn2P1HGEWb6vVFClsQMkCGY-8GmGewUOc");'></div>
</div>
</header>
<main class="flex-1 flex flex-col md:flex-row max-w-7xl mx-auto w-full px-4 md:px-10 py-8 gap-8">
<!-- Sidebar Navigation -->
<aside class="w-full md:w-64 flex flex-col gap-2">
<div class="p-4 bg-white dark:bg-slate-800 rounded-xl shadow-sm mb-4 text-center">
<div class="relative inline-block mb-3">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-24 mx-auto border-4 border-primary/20" data-alt="صورة الخريج" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDagHeprETOzP760dlDnnQW3TE1LuL1aNsnzA33VKECyCCn8_UJxGhVjgeh8ZdMDrYFx_nyUsDTVIOZLsWM2n3X2gDGrlAoPuCborJnJ7yjlI_YnyzDgQTg8RowGC7LAxudPed8Gr0kE1csQvMYWQ_I50aHuNQVwNBMml35lxfVvnwo-fztUmbkvZpWj5Sw2nIM98ZYvwfCCjsb1ELDtrx1Ul7aCZrbWx9oJ7HHAdD1urc47gDMlsapwsfqgEegSxtLRRyAZh7rluY");'></div>
<button class="absolute bottom-0 right-0 bg-primary text-white p-1.5 rounded-full shadow-lg hover:scale-105 transition-transform">
<span class="material-symbols-outlined text-sm">photo_camera</span>
</button>
</div>
<h3 class="font-bold text-lg">أحمد محمد علي</h3>
<p class="text-sm text-slate-500 dark:text-slate-400">خريج علوم الحاسب</p>
</div>
<nav class="flex flex-col gap-1">
<a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary text-white shadow-md shadow-primary/20" href="#">
<span class="material-symbols-outlined">person</span>
<span class="font-medium text-sm">الملف الشخصي</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="#">
<span class="material-symbols-outlined">work</span>
<span class="font-medium text-sm">فرص العمل</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="#">
<span class="material-symbols-outlined">school</span>
<span class="font-medium text-sm">الأبحاث العلمية</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="#">
<span class="material-symbols-outlined">forum</span>
<span class="font-medium text-sm">المنتدى</span>
</a>
</nav>
</aside>
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