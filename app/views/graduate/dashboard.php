<!DOCTYPE html>

<html dir="rtl" lang="ar"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
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
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 antialiased">
<div class="flex min-h-screen">
<!-- Side Navigation Bar -->
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
<a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary/10 text-primary font-bold" href="<?= BASE_URL ?>Graduate/dashboard">
<span class="material-symbols-outlined">dashboard</span>
<span>لوحة القيادة</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 transition-colors" href="<?= BASE_URL ?>Graduate/jobs">
<span class="material-symbols-outlined">work</span>
<span>الوظائف المتاحة</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 transition-colors" href="<?= BASE_URL ?>Graduate/myApplecations">
<span class="material-symbols-outlined">description</span>
<span>طلباتي</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 transition-colors" href="<?= BASE_URL ?>Graduate/surveys">
<span class="material-symbols-outlined">mail</span>
<span>Surveys</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 transition-colors" href="<?= BASE_URL ?>Graduate/cvBuilder">
    <span class="material-symbols-outlined">badge</span>
    <span>CV</span>
</a>
<div class="pt-4 mt-4 border-t border-slate-100 dark:border-slate-800">
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 transition-colors" href="<?= BASE_URL ?>Graduate/profileManagement">
    <span class="material-symbols-outlined">account_circle</span>
    <span>حسابي</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-red-50 text-red-600 transition-colors" href="">
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
<!-- Dashboard Content -->
<div class="p-8 max-w-7xl mx-auto w-full space-y-8">
<!-- Welcome Section -->
<section class="bg-primary/5 dark:bg-primary/10 rounded-3xl p-8 flex items-center justify-between border border-primary/10">
<div class="space-y-2">
<h3 class="text-2xl font-bold text-slate-900 dark:text-slate-100">مرحباً بك، أحمد! 👋</h3>
<p class="text-slate-600 dark:text-slate-400">لديك ٤ وظائف جديدة تتناسب مع مهاراتك الهندسية اليوم.</p>
</div>
<button class="bg-primary text-white px-6 py-3 rounded-xl font-bold shadow-lg shadow-primary/20 hover:scale-105 transition-transform">
                    تحديث الملف الشخصي
                </button>
</section>
<!-- Stats Grid -->
<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<div class="bg-white dark:bg-slate-900 p-6 rounded-2xl shadow-sm border border-slate-100 dark:border-slate-800 group hover:border-primary/50 transition-colors">
<div class="flex items-center justify-between mb-4">
<div class="size-12 rounded-xl bg-orange-100 dark:bg-orange-900/30 text-orange-600 flex items-center justify-center">
<span class="material-symbols-outlined text-2xl">work</span>
</div>
<span class="text-xs font-bold text-emerald-500 bg-emerald-50 dark:bg-emerald-900/20 px-2 py-1 rounded-full">+١٢٪</span>
</div>
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">الوظائف المتاحة</p>
<h4 class="text-3xl font-bold mt-1"><?= $totalJobs ?></h4>
</div>
<div class="bg-white dark:bg-slate-900 p-6 rounded-2xl shadow-sm border border-slate-100 dark:border-slate-800 group hover:border-primary/50 transition-colors">
<div class="flex items-center justify-between mb-4">
<div class="size-12 rounded-xl bg-blue-100 dark:bg-blue-900/30 text-blue-600 flex items-center justify-center">
<span class="material-symbols-outlined text-2xl">assignment</span>
</div>
<span class="text-xs font-bold text-red-500 bg-red-50 dark:bg-red-900/20 px-2 py-1 rounded-full">-٥٪</span>
</div>
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">الطلبات المقدمة</p>
<h4 class="text-3xl font-bold mt-1"><?= $myApplication ?></h4>
</div>
<div class="bg-white dark:bg-slate-900 p-6 rounded-2xl shadow-sm border border-slate-100 dark:border-slate-800 group hover:border-primary/50 transition-colors">
<div class="flex items-center justify-between mb-4">
<div class="size-12 rounded-xl bg-purple-100 dark:bg-purple-900/30 text-purple-600 flex items-center justify-center">
<span class="material-symbols-outlined text-2xl">chat</span>
</div>
<span class="text-xs font-bold text-emerald-500 bg-emerald-50 dark:bg-emerald-900/20 px-2 py-1 rounded-full">+٢</span>
</div>
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">رسائل الشركات</p>
<h4 class="text-3xl font-bold mt-1"><?= $notificationsCount->total ?></h4>
</div>
<div class="bg-white dark:bg-slate-900 p-6 rounded-2xl shadow-sm border border-slate-100 dark:border-slate-800 group hover:border-primary/50 transition-colors">
<div class="flex items-center justify-between mb-4">
<div class="size-12 rounded-xl bg-amber-100 dark:bg-amber-900/30 text-amber-600 flex items-center justify-center">
<span class="material-symbols-outlined text-2xl">notification_important</span>
</div>
<span class="text-xs font-bold text-slate-400 bg-slate-50 dark:bg-slate-800 px-2 py-1 rounded-full">ثابت</span>
</div>
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">تنبيهات النظام</p>
<h4 class="text-3xl font-bold mt-1">٤</h4>
</div>
</section>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
<!-- Latest Suitable Jobs Table -->
<div class="lg:col-span-2 space-y-4">
<div class="flex items-center justify-between px-2">
<h3 class="text-xl font-bold">أحدث الوظائف المناسبة</h3>
<a class="text-primary text-sm font-bold hover:underline" href="#">عرض الكل</a>
</div>
<div class="bg-white dark:bg-slate-900 rounded-2xl border border-slate-100 dark:border-slate-800 overflow-hidden shadow-sm">
<table class="w-full text-right">
<thead>
<tr class="bg-slate-50 dark:bg-slate-800/50">
<th class="px-6 py-4 text-sm font-bold text-slate-600 dark:text-slate-400">مسمى الوظيفة</th>
<th class="px-6 py-4 text-sm font-bold text-slate-600 dark:text-slate-400">الشركة</th>
<th class="px-6 py-4 text-sm font-bold text-slate-600 dark:text-slate-400">الموقع</th>
<th class="px-6 py-4 text-sm font-bold text-slate-600 dark:text-slate-400 text-center">الإجراء</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-800">
<?php foreach($suitJobs as $suitJob):?>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-8 rounded bg-primary/10 text-primary flex items-center justify-center">
</div>
<span class="font-medium"><?= $suitJob->title ?></span>
</div>
</td>
<td class="px-6 py-4 text-slate-500 dark:text-slate-400"><?= $suitJob->job_type ?></td>
<td class="px-6 py-4 text-slate-500 dark:text-slate-400"> <?= $suitJob->location ?></td>
<td class="px-6 py-4 text-center">
<button class="bg-primary hover:bg-primary/90 text-white px-4 py-2 rounded-lg text-sm font-bold transition-all">تقديم</button>
</td>
</tr>
<?php endforeach;?>
</tbody>
</table>
</div>
</div>
<!-- Notifications List -->
<div class="space-y-4">
<div class="flex items-center justify-between px-2">
<h3 class="text-xl font-bold">آخر الإشعارات</h3>
<button class="text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined">more_horiz</span>
</button>
</div>
<div class="bg-white dark:bg-slate-900 rounded-2xl border border-slate-100 dark:border-slate-800 p-2 shadow-sm space-y-1">
<?php foreach($notifications as $notification): ?>
<a type="button" onclick="showNotification(this)"   
data-title='<?= $notification->title ?>'
data-message='<?= $notification->message ?>'
data-created_at='<?= $notification->created_at ?>'
>
    <div class="flex gap-4 p-4 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors cursor-pointer border-r-4 border-emerald-500">
<div class="size-10 shrink-0 rounded-full bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600 flex items-center justify-center">
<span class="material-symbols-outlined">work_outline</span>
</div>
<div class="flex-1 min-w-0">
<p class="text-sm font-bold text-slate-900 dark:text-slate-100"><?= $notification->title ?> </p>
<span class="text-[10px] text-slate-400 mt-2 block"> <?= $notification->created_at ?></span>
</div>
</div>
</a>
<?php endforeach; ?>

</div>
</div>
</div>
</div>
</main>
</div>
<!-- script to activate toogle button  -->
<script>
function toggleSidebar() {
    const sidebar = document.getElementById("sidebar");
    sidebar.classList.toggle("translate-x-full");
}
</script>
<!-- model to view notification details -->
 <div id="applyForm"
     class="fixed inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center hidden z-50">
    <div class="bg-white dark:bg-slate-900 rounded-xl p-6 w-full max-w-md">
        <h2 id="title" class="text-xl font-bold mb-4">عنوان الإشعار</h2>
        <p id="message" class="text-slate-700 dark:text-slate-300 mb-4">تفاصيل الإشعار...</p>
        <span id="created_at" class="text-xs text-slate-400">تاريخ الإنشاء</span>
</div>
 <!-- script to handle notification details -->
    <script>
        function showNotification(element) {
            const title = element.getAttribute("data-title");
            const message = element.getAttribute("data-message");
            const created_at = element.getAttribute("data-created_at");
    
            document.getElementById("title").innerText = title;
            document.getElementById("message").innerText = message;
            document.getElementById("created_at").innerText = created_at;
    
            document.getElementById("applyForm").classList.remove("hidden");
        }
    
        // Close the modal when clicking outside of it
        window.addEventListener("click", function(event) {
            const modal = document.getElementById("applyForm");
            if (event.target === modal) {
                modal.classList.add("hidden");
            }
        });
    </script>
</body></html>