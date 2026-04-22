<!DOCTYPE html>

<html dir="rtl" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>GTS Graduate Search</title>
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
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen">
<div class="layout-container flex h-full grow flex-col">
<!-- Top Navigation -->
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
<a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary/10 text-primary font-semibold" href="<?= BASE_URL ?>company/dashboard">
<span class="material-symbols-outlined">dashboard</span>
<span>Dashboard</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 transition-colors" href="<?= BASE_URL ?>company/jobsManagment">
<span class="material-symbols-outlined">work</span>
<span>Jobs</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 transition-colors" href="<?= BASE_URL ?>company/manageApplecations">
<span class="material-symbols-outlined">group</span>
<span>Applicants</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 transition-colors" href="<?= BASE_URL ?>company/graduatesSearch">
<span class="material-symbols-outlined">groups</span>
<span>Graduates</span>
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
<div class="px-4 mb-8">
<h1 class="text-4xl font-black leading-tight tracking-[-0.033em] mb-2">البحث عن الخريجين</h1>
<p class="text-slate-500 dark:text-slate-400 text-lg">اكتشف أفضل المواهب لشركتك من خلال قاعدة بياناتنا المتطورة</p>
</div>
<div class="flex flex-col lg:flex-row gap-6 px-4">
<!-- Filters Sidebar -->
<aside class="w-full lg:w-1/4 flex flex-col gap-6 bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm h-fit">
<div class="flex items-center gap-2 mb-2">
<span class="material-symbols-outlined text-primary">filter_list</span>
<h3 class="text-lg font-bold leading-tight tracking-[-0.015em]">تصفية النتائج</h3>
</div>
<div class="flex flex-col gap-4">
<!-- Search Keyword -->
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold">بحث بالكلمات المفتاحية</label>
<div class="relative">
<span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
<input class="w-full pr-10 rounded-lg border-slate-200 dark:border-slate-800 bg-background-light dark:bg-background-dark focus:ring-primary focus:border-primary" placeholder="الاسم، المهارة..." type="text"/>
</div>
</div>
<!-- Major -->
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold">التخصص الجامعي</label>
<select class="w-full rounded-lg border-slate-200 dark:border-slate-800 bg-background-light dark:bg-background-dark focus:ring-primary focus:border-primary">
<option>كل التخصصات</option>
<option>علوم الحاسب</option>
<option>هندسة البرمجيات</option>
<option>نظم المعلومات</option>
<option>الذكاء الاصطناعي</option>
</select>
</div>
<!-- Skills -->
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold">المهارات</label>
<div class="flex flex-wrap gap-2">
<span class="px-3 py-1 bg-primary/10 text-primary text-xs font-medium rounded-full flex items-center gap-1">Python <span class="material-symbols-outlined text-xs">close</span></span>
<span class="px-3 py-1 bg-primary/10 text-primary text-xs font-medium rounded-full flex items-center gap-1">React <span class="material-symbols-outlined text-xs">close</span></span>
</div>
<input class="mt-2 w-full rounded-lg border-slate-200 dark:border-slate-800 bg-background-light dark:bg-background-dark focus:ring-primary focus:border-primary" placeholder="أضف مهارة..." type="text"/>
</div>
<!-- Experience -->
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold">سنوات الخبرة</label>
<select class="w-full rounded-lg border-slate-200 dark:border-slate-800 bg-background-light dark:bg-background-dark focus:ring-primary focus:border-primary">
<option>أي خبرة</option>
<option>حديث تخرج (0-1 سنة)</option>
<option>مبتدئ (1-3 سنوات)</option>
<option>متوسط (3-5 سنوات)</option>
<option>خبير (+5 سنوات)</option>
</select>
</div>
<!-- Graduation Year -->
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold">سنة التخرج</label>
<div class="flex gap-2">
<input class="w-1/2 rounded-lg border-slate-200 dark:border-slate-800 bg-background-light dark:bg-background-dark focus:ring-primary focus:border-primary" placeholder="من" type="number"/>
<input class="w-1/2 rounded-lg border-slate-200 dark:border-slate-800 bg-background-light dark:bg-background-dark focus:ring-primary focus:border-primary" placeholder="إلى" type="number"/>
</div>
</div>
<button class="w-full mt-4 bg-primary text-white font-bold py-3 rounded-xl hover:opacity-90 transition-opacity">تطبيق الفلاتر</button>
<button class="w-full text-slate-500 text-sm font-medium py-1 hover:underline">إعادة تعيين</button>
</div>
</aside>
<!-- Results Content -->
<section class="flex-1">
<div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden shadow-sm">
<div class="p-6 border-b border-slate-200 dark:border-slate-800 flex justify-between items-center">
<p class="font-medium text-slate-500">تم العثور على <span class="text-slate-900 dark:text-white font-bold">124</span> خريج</p>
<div class="flex items-center gap-2">
<label class="text-sm text-slate-500 whitespace-nowrap">ترتيب حسب:</label>
<select class="text-sm border-none bg-transparent focus:ring-0 font-semibold cursor-pointer">
<option>الأحدث تخرجاً</option>
<option>الأكثر خبرة</option>
<option>الأبجدي</option>
</select>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-right border-collapse">
<thead>
<tr class="bg-slate-50 dark:bg-slate-800/50">
<th class="px-6 py-4 text-sm font-bold text-slate-500 uppercase tracking-wider">الاسم</th>
<th class="px-6 py-4 text-sm font-bold text-slate-500 uppercase tracking-wider">التخصص</th>
<th class="px-6 py-4 text-sm font-bold text-slate-500 uppercase tracking-wider">المهارات</th>
<th class="px-6 py-4 text-sm font-bold text-slate-500 uppercase tracking-wider text-center">الإجراءات</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-200 dark:divide-slate-800">
<?php foreach($data["graduates"] as $graduate): ?>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4 whitespace-nowrap">
<div class="flex items-center gap-3">
<div class="size-10 rounded-full bg-slate-200 dark:bg-slate-700 overflow-hidden" data-alt="Professional profile headshot of a candidate" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCr37uL4V2cOAJdWaOGXO8Y9leC50nzHs1jnve4NyfrW7ofq1wHvlEjlMP0t9TTNX4pOFsLL4OhHsnax4cE1tycbcOdEjs3V3m52qKrnP_01xjijgXFcuLneWq_poDenpa8Vtu_SYa0qLmS9olSGVQWoeaJ66RBVlln_ktjEen5dA5t5Fw8EYKNmTlhvcv58p2NPVUZ8fbN77u0u5pXf2Ag5Ny-FKyrSUWQ-dtulWwPozZ9K1qR31lHJQHhjvLdW_4OokjWeiM0-aE"); background-size: cover;'></div>
<div>
<div class="font-bold"><?= $graduate->name ?></div>
<div class="text-xs text-slate-500">خريج <?= $graduate->graduation_year ?></div>
</div>
</div>
</td>
<td class="px-6 py-4 text-sm"><?= $graduate->major ?></td>
<td class="px-6 py-4">
<div class="flex flex-wrap gap-1">
<span class="px-2 py-0.5 bg-slate-100 dark:bg-slate-800 text-[10px] font-bold rounded"><?= $graduate->skills ?></span>
<span class="px-2 py-0.5 bg-slate-100 dark:bg-slate-800 text-[10px] font-bold rounded">React</span>
<span class="px-2 py-0.5 bg-slate-100 dark:bg-slate-800 text-[10px] font-bold rounded">AWS</span>
</div>
</td>
<td class="px-6 py-4 whitespace-nowrap text-center">
<div class="flex justify-center gap-2">
<button class="p-2 text-primary hover:bg-primary/10 rounded-lg transition-colors" title="View Profile">
<span class="material-symbols-outlined">visibility</span>
</button>
<button class="p-2 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-colors" title="Send Message">
<span class="material-symbols-outlined">mail</span>
</button>
</div>
</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
<!-- Pagination -->

</div>
</section>
</div>
</main>
<footer class="mt-auto border-t border-slate-200 dark:border-slate-800 py-8 lg:px-40 text-center">
<p class="text-sm text-slate-500">© 2024 GTS للتوظيف. جميع الحقوق محفوظة.</p>
</footer>
</div>
</body></html>