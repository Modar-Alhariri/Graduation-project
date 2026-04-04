<!DOCTYPE html>

<html dir="<?= $_SESSION['lang']=='ar'?'rtl':'ltr' ?>" 

      lang="<?= $_SESSION['lang']=='ar'?'ar':'en' ?>"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>GTS Admin - إدارة الأقسام</title>
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
                        "primary": "#0f49bd",
                        "background-light": "#f8f6f6",
                        "background-dark": "#221610",
                    },
                    fontFamily: {
                        "display": ["Public Sans", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
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
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-display">
<div class="flex min-h-screen">
<!-- Sidebar -->
<aside class="w-64 bg-white dark:bg-slate-900 border-l border-slate-200 dark:border-slate-800 flex flex-col fixed h-full z-50">
<div class="p-6 flex items-center gap-3">
<div class="w-10 h-10 bg-primary rounded-xl flex items-center justify-center text-white">
<span class="material-symbols-outlined">school</span>
</div>
<div>
<h1 class="text-sm font-bold leading-tight"><?= $lang['system_name'] ?></h1>
<p class="text-xs text-slate-500 dark:text-slate-400"><?= $lang['academic_management'] ?></p>
</div>
</div>
<nav class="flex-1 px-4 space-y-1">
<a class="flex items-center gap-3 px-3 py-2 rounded-xl bg-primary/10 text-primary font-medium" href="<?= BASE_URL ?>admin/dashboard">
<span class="material-symbols-outlined">dashboard</span>
<span class="text-sm"><?= $lang['dashboard'] ?> </span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="<?= BASE_URL ?>admin/userManagment">
<span class="material-symbols-outlined">group</span>
<span class="text-sm"><?= $lang['users'] ?></span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="<?= BASE_URL ?>admin/rolesPermetion">
<span class="material-symbols-outlined">admin_panel_settings</span>
<span class="text-sm"><?= $lang['roles'] ?></span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="<?= BASE_URL ?>admin/departments">
<span class="material-symbols-outlined">corporate_fare</span>
<span class="text-sm"><?= $lang['departments'] ?></span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="<?= BASE_URL ?>admin/majors">
<span class="material-symbols-outlined">history_edu</span>
<span class="text-sm"><?= $lang['majors'] ?></span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="<?= BASE_URL ?>admin/reports">
<span class="material-symbols-outlined">bar_chart</span>
<span class="text-sm"><?= $lang['reports'] ?></span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="<?= BASE_URL ?>admin/settings">
<span class="material-symbols-outlined">settings</span>
<span class="text-sm"><?= $lang['settings'] ?></span>
</a>
</nav>
<div class="p-4 border-t border-slate-200 dark:border-slate-800">
<div class="flex items-center gap-3 p-2">
<div class="size-8 rounded-full bg-slate-200 dark:bg-slate-700 bg-cover bg-center" data-alt="User avatar profile picture" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAf1nLXfo3IS7esVmGpDlQncG3JdQVMTTxr8OWATWfrctiLCTNdp2cEM5gQ6EjI6u8WJoMdNmb0xqu0psE7WROwasTh8Mfej1ILuGbW8IlHSzPWys5UPZliT_e2POmS_2ELY5uo4H52twgjvFvRlzMPXjLmZLIH56Bc4y-xcZttMgZjk9IBDmyqVQZ7D_OvztZVmwxufkblSS0MCv0frnlaxFci7Z6UEXvOc3aNcQFsOt1Ylqum3yuBBfg6kk05vfW28MCPd3bUm-k')"></div>
<div class="flex-1 overflow-hidden">
<p class="text-xs font-bold truncate"><?= $lang['user_name'] ?> </p>
<p class="text-[10px] text-slate-500 truncate"><?= $lang['system_admin'] ?> </p>
</div>
</div>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 <?= $_SESSION['lang']=='ar'?'mr-64':'ml-64' ?>">
<!-- Navbar -->
<header class="h-16 border-b border-slate-200 dark:border-slate-800 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md sticky top-0 z-40 px-8 flex items-center justify-between">
<div class="flex items-center gap-4 flex-1">
<!-- Search bar removed as per request -->
</div>
<div class="flex items-center gap-3">
<button class="p-2 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg relative">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-2 right-2 w-2 h-2 bg-primary rounded-full border-2 border-white dark:border-slate-900"></span>
</button>
<?php if($_SESSION['lang'] == 'ar'): ?> 
    
    <a href="<?= BASE_URL ?>Language/change/en"
       class="flex items-center gap-2 px-4 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition">

       <span class="material-symbols-outlined">language</span>
        EN
    </a>

<?php else: ?>

    <a href="<?= BASE_URL ?>Language/change/ar"
       class="flex items-center gap-2 px-4 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition">

       <span class="material-symbols-outlined">language</span>
        AR
    </a>

<?php endif; ?>

</div>
</header>
<!-- Content Area -->
<div class="p-8 space-y-8">
<!-- Page Header -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
<div>
<h2 class="text-3xl font-black text-slate-900 dark:text-white">إدارة الأقسام الأكاديمية</h2>
<p class="text-slate-500 dark:text-slate-400 mt-1">عرض وتنظيم كافة الأقسام الأكاديمية وتوزيعها على الكليات</p>
</div>
<button class="bg-primary hover:bg-primary/90 text-white px-6 py-3 rounded-xl font-bold flex items-center gap-2 transition-transform active:scale-95 shadow-lg shadow-primary/20">
<span class="material-symbols-outlined">add</span>
                        إضافة قسم جديد
                    </button>
</div>
<!-- Stats Cards (Quick View) -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800">
<div class="flex items-center justify-between">
<span class="text-slate-500 dark:text-slate-400 text-sm font-medium">إجمالي الأقسام</span>
<span class="material-symbols-outlined text-primary">category</span>
</div>
<p class="text-2xl font-bold mt-2">24</p>
</div>
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800">
<div class="flex items-center justify-between">
<span class="text-slate-500 dark:text-slate-400 text-sm font-medium">الكليات النشطة</span>
<span class="material-symbols-outlined text-primary">apartment</span>
</div>
<p class="text-2xl font-bold mt-2">8</p>
</div>
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800">
<div class="flex items-center justify-between">
<span class="text-slate-500 dark:text-slate-400 text-sm font-medium">إجمالي التخصصات</span>
<span class="material-symbols-outlined text-primary">book</span>
</div>
<p class="text-2xl font-bold mt-2">112</p>
</div>
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800">
<div class="flex items-center justify-between">
<span class="text-slate-500 dark:text-slate-400 text-sm font-medium">أقسام جديدة (هذا العام)</span>
<span class="material-symbols-outlined text-primary">fiber_new</span>
</div>
<p class="text-2xl font-bold mt-2">3</p>
</div>
</div>
<!-- Main Layout Grid (Table + Form) -->
<div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
<!-- Table Section -->
<div class="xl:col-span-2 space-y-4">
<div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden shadow-sm">
<div class="p-4 border-b border-slate-200 dark:border-slate-800 flex items-center justify-between">
<h3 class="font-bold">قائمة الأقسام</h3>
<div class="flex gap-2">
<button class="text-xs font-medium px-3 py-1 rounded-lg bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">تصدير PDF</button>
<button class="text-xs font-medium px-3 py-1 rounded-lg bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">تصفية</button>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-right">
<thead>
<tr class="bg-slate-50 dark:bg-slate-800/50">
<th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">معرف القسم</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">اسم القسم</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">الكلية</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">عدد التخصصات</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider text-center">الإجراءات</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-200 dark:divide-slate-800">
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4 text-sm font-medium text-slate-400">DEPT-001</td>
<td class="px-6 py-4 text-sm font-bold">قسم علوم الحاسب</td>
<td class="px-6 py-4">
<span class="px-3 py-1 bg-primary/10 text-primary text-xs font-bold rounded-full border border-primary/20">كلية الهندسة</span>
</td>
<td class="px-6 py-4 text-sm">12</td>
<td class="px-6 py-4 flex items-center justify-center gap-2">
<button class="p-2 text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[20px]">edit</span>
</button>
<button class="p-2 text-slate-400 hover:text-red-500 transition-colors">
<span class="material-symbols-outlined text-[20px]">delete</span>
</button>
</td>
</tr>
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4 text-sm font-medium text-slate-400">DEPT-002</td>
<td class="px-6 py-4 text-sm font-bold">قسم المحاسبة والتمويل</td>
<td class="px-6 py-4">
<span class="px-3 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 text-xs font-bold rounded-full border border-slate-200 dark:border-slate-700">كلية الإدارة</span>
</td>
<td class="px-6 py-4 text-sm">8</td>
<td class="px-6 py-4 flex items-center justify-center gap-2">
<button class="p-2 text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[20px]">edit</span>
</button>
<button class="p-2 text-slate-400 hover:text-red-500 transition-colors">
<span class="material-symbols-outlined text-[20px]">delete</span>
</button>
</td>
</tr>
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4 text-sm font-medium text-slate-400">DEPT-003</td>
<td class="px-6 py-4 text-sm font-bold">قسم التصميم الجرافيكي</td>
<td class="px-6 py-4">
<span class="px-3 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 text-xs font-bold rounded-full border border-slate-200 dark:border-slate-700">كلية التصميم</span>
</td>
<td class="px-6 py-4 text-sm">5</td>
<td class="px-6 py-4 flex items-center justify-center gap-2">
<button class="p-2 text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[20px]">edit</span>
</button>
<button class="p-2 text-slate-400 hover:text-red-500 transition-colors">
<span class="material-symbols-outlined text-[20px]">delete</span>
</button>
</td>
</tr>
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4 text-sm font-medium text-slate-400">DEPT-004</td>
<td class="px-6 py-4 text-sm font-bold">قسم هندسة الميكانيك</td>
<td class="px-6 py-4">
<span class="px-3 py-1 bg-primary/10 text-primary text-xs font-bold rounded-full border border-primary/20">كلية الهندسة</span>
</td>
<td class="px-6 py-4 text-sm">15</td>
<td class="px-6 py-4 flex items-center justify-center gap-2">
<button class="p-2 text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[20px]">edit</span>
</button>
<button class="p-2 text-slate-400 hover:text-red-500 transition-colors">
<span class="material-symbols-outlined text-[20px]">delete</span>
</button>
</td>
</tr>
</tbody>
</table>
</div>
<div class="p-4 border-t border-slate-200 dark:border-slate-800 flex items-center justify-center">
<nav class="flex items-center gap-1">
<button class="w-8 h-8 flex items-center justify-center rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
<span class="material-symbols-outlined">chevron_right</span>
</button>
<button class="w-8 h-8 flex items-center justify-center rounded-lg bg-primary text-white font-bold">1</button>
<button class="w-8 h-8 flex items-center justify-center rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">2</button>
<button class="w-8 h-8 flex items-center justify-center rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">3</button>
<button class="w-8 h-8 flex items-center justify-center rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
<span class="material-symbols-outlined">chevron_left</span>
</button>
</nav>
</div>
</div>
</div>
<!-- Form Section -->
<div class="space-y-4">
<div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
<div class="p-6 bg-slate-50 dark:bg-slate-800/50 border-b border-slate-200 dark:border-slate-800">
<h3 class="font-bold text-lg">إضافة قسم جديد</h3>
<p class="text-xs text-slate-500 dark:text-slate-400">يرجى تعبئة كافة الحقول المطلوبة</p>
</div>
<form class="p-6 space-y-6">
<div class="space-y-2">
<label class="text-sm font-bold text-slate-700 dark:text-slate-300">اسم القسم الأكاديمي</label>
<input class="w-full px-4 py-3 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all text-sm outline-none" placeholder="مثال: قسم الأمن السيبراني" type="text"/>
</div>
<div class="space-y-2">
<label class="text-sm font-bold text-slate-700 dark:text-slate-300">الكلية التابع لها</label>
<div class="relative">
<select class="w-full px-4 py-3 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl focus:ring-2 focus:ring-primary/50 focus:border-primary appearance-none transition-all text-sm outline-none">
<option value="">اختر الكلية</option>
<option value="1">كلية الهندسة</option>
<option value="2">كلية الإدارة</option>
<option value="3">كلية الآداب</option>
<option value="4">كلية العلوم</option>
</select>
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none">expand_more</span>
</div>
</div>
<div class="space-y-2">
<label class="text-sm font-bold text-slate-700 dark:text-slate-300">وصف القسم</label>
<textarea class="w-full px-4 py-3 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all text-sm outline-none resize-none" placeholder="اكتب وصفاً مختصراً لأهداف القسم..." rows="4"></textarea>
</div>
<div class="pt-4 border-t border-slate-100 dark:border-slate-800 flex gap-3">
<button class="flex-1 bg-primary text-white font-bold py-3 rounded-xl hover:bg-primary/90 transition-colors shadow-md shadow-primary/20" type="submit">حفظ البيانات</button>
<button class="px-6 py-3 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 font-bold rounded-xl hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors border border-slate-200 dark:border-slate-700" type="reset">إلغاء</button>
</div>
</form>
</div>
<!-- Info Tip -->
<div class="bg-primary/5 border border-primary/10 p-4 rounded-xl flex gap-3 items-start">
<span class="material-symbols-outlined text-primary">info</span>
<p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed">
                                سيتم إرسال إشعار إلى عميد الكلية المعنية بمجرد إضافة القسم الجديد ليتمكن من مراجعة التفاصيل.
                            </p>
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
</body></html>