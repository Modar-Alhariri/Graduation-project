<html dir="rtl" lang="ar"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
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
    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }
  </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100">
<div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
<div class="layout-container flex h-full grow flex-col">
<!-- Top Navigation Bar -->
<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-slate-200 dark:border-slate-800 px-6 py-3 bg-white dark:bg-background-dark/50 backdrop-blur-md sticky top-0 z-50">
<div class="flex items-center gap-8">
<div class="flex items-center gap-3 text-primary">
<div class="size-8 bg-primary rounded-lg flex items-center justify-center text-white">
<span class="material-symbols-outlined">work</span>
</div>
<h2 class="text-slate-900 dark:text-white text-xl font-bold leading-tight tracking-tight">GTS Jobs</h2>
</div>
<label class="flex flex-col min-w-64 h-10 hidden md:block">
<div class="flex w-full flex-1 items-stretch rounded-xl h-full border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800/50">
<div class="text-slate-400 flex items-center justify-center px-3">
<span class="material-symbols-outlined text-[20px]">search</span>
</div>
<input class="form-input flex w-full min-w-0 flex-1 border-none bg-transparent focus:ring-0 text-sm placeholder:text-slate-400" placeholder="البحث عن الوظائف..." value=""/>
</div>
</label>
</div>
<div class="flex flex-1 justify-end gap-4 items-center">
<button class="flex items-center justify-center rounded-xl h-10 px-5 bg-primary text-white text-sm font-bold transition-all hover:bg-primary/90">
<span>نشر وظيفة جديدة</span>
</button>
<div class="h-10 w-10 rounded-full border-2 border-primary/20 p-0.5">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-full w-full" data-alt="User profile avatar circle" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC9ejCcTDLLSBqTnqTB9uSqlywDTqoId0t2mCy8XKv6RA5_xH2N31i7835jOBgk3P51Z4UkDdzPEyf-A6tIygPLDxzIBhzpzjb4xo1GygttbekgmcM6vMeVKvYtHiM8wIfPBhZ_IrMtf4DfZ4aSOuUcDl78bNvbCJJ0MStPEmWfpOhIwTQjl5T27-p1oN3ba_PgGwTS2CsBVPT1oTflYVaps2UZTw2qtUL3IVb8Lq029tzM3ZGFcx1eckUgJytqj6XSFJmD6TWIQzg");'></div>
</div>
</div>
</header>
<main class="flex-1 px-4 md:px-10 lg:px-20 py-8">
<!-- Header Section -->
<div class="flex flex-wrap justify-between items-end gap-4 mb-8">
<div class="flex flex-col gap-2">
<h1 class="text-slate-900 dark:text-white text-4xl font-black leading-tight">إدارة الوظائف</h1>
<p class="text-slate-500 dark:text-slate-400 text-base">إدارة ومتابعة جميع قوائم الوظائف الخاصة بك في مكان واحد.</p>
</div>
<div class="flex gap-2">
<button class="flex items-center gap-2 rounded-xl h-11 px-6 bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-200 text-sm font-bold border border-slate-200 dark:border-slate-700">
<span class="material-symbols-outlined text-[20px]">filter_list</span>
<span>تصفية</span>
</button>
</div>
</div>
<!-- Stats Overview -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-10">
<div class="flex flex-col gap-3 rounded-xl p-6 bg-white dark:bg-slate-800/40 border border-slate-200 dark:border-slate-700 shadow-sm">
<div class="flex justify-between items-start">
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">الوظائف النشطة</p>
<span class="p-2 bg-primary/10 text-primary rounded-lg material-symbols-outlined">bolt</span>
</div>
<p class="text-slate-900 dark:text-white text-3xl font-bold">12</p>
<div class="text-xs text-green-600 font-medium">+2 هذا الشهر</div>
</div>
<div class="flex flex-col gap-3 rounded-xl p-6 bg-white dark:bg-slate-800/40 border border-slate-200 dark:border-slate-700 shadow-sm">
<div class="flex justify-between items-start">
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">إجمالي المتقدمين</p>
<span class="p-2 bg-blue-500/10 text-blue-500 rounded-lg material-symbols-outlined">groups</span>
</div>
<p class="text-slate-900 dark:text-white text-3xl font-bold">458</p>
<div class="text-xs text-green-600 font-medium">+15% زيادة</div>
</div>
<div class="flex flex-col gap-3 rounded-xl p-6 bg-white dark:bg-slate-800/40 border border-slate-200 dark:border-slate-700 shadow-sm">
<div class="flex justify-between items-start">
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">مراجعات معلقة</p>
<span class="p-2 bg-amber-500/10 text-amber-500 rounded-lg material-symbols-outlined">pending_actions</span>
</div>
<p class="text-slate-900 dark:text-white text-3xl font-bold">24</p>
<div class="text-xs text-slate-400">تتطلب إجراءً سريعاً</div>
</div>
</div>
<!-- Jobs Table Section -->
<div class="bg-white dark:bg-slate-800/20 rounded-xl border border-slate-200 dark:border-slate-700 overflow-hidden shadow-sm mb-12">
<div class="overflow-x-auto">
<table class="w-full text-right">
<thead>
<tr class="bg-slate-50 dark:bg-slate-800/60 border-b border-slate-200 dark:border-slate-700">
<th class="px-6 py-4 text-slate-600 dark:text-slate-300 text-sm font-semibold">عنوان الوظيفة</th>
<th class="px-6 py-4 text-slate-600 dark:text-slate-300 text-sm font-semibold">النوع</th>
<th class="px-6 py-4 text-slate-600 dark:text-slate-300 text-sm font-semibold">الموقع</th>
<th class="px-6 py-4 text-slate-600 dark:text-slate-300 text-sm font-semibold">المتقدمين</th>
<th class="px-6 py-4 text-slate-600 dark:text-slate-300 text-sm font-semibold">الحالة</th>
<th class="px-6 py-4 text-slate-600 dark:text-slate-300 text-sm font-semibold text-center">الإجراءات</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-700/50">
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-700/20 transition-colors">
<td class="px-6 py-5 text-slate-900 dark:text-white font-medium">مطور واجهات أمامية أول</td>
<td class="px-6 py-5">
<span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 text-xs font-bold rounded-full">دوام كامل</span>
</td>
<td class="px-6 py-5 text-slate-500 dark:text-slate-400">الرياض، السعودية</td>
<td class="px-6 py-5 text-slate-500 dark:text-slate-400">124</td>
<td class="px-6 py-5">
<div class="flex items-center gap-1.5 text-green-600">
<div class="size-2 rounded-full bg-green-600"></div>
<span class="text-sm font-medium">نشط</span>
</div>
</td>
<td class="px-6 py-5">
<div class="flex justify-center gap-3">
<button class="text-slate-400 hover:text-primary transition-colors" title="عرض"><span class="material-symbols-outlined text-[20px]">visibility</span></button>
<button class="text-slate-400 hover:text-blue-500 transition-colors" title="تعديل"><span class="material-symbols-outlined text-[20px]">edit</span></button>
<button class="text-slate-400 hover:text-red-500 transition-colors" title="حذف"><span class="material-symbols-outlined text-[20px]">delete</span></button>
</div>
</td>
</tr>
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-700/20 transition-colors">
<td class="px-6 py-5 text-slate-900 dark:text-white font-medium">مصمم تجربة المستخدم</td>
<td class="px-6 py-5">
<span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-400 text-xs font-bold rounded-full">تدريب</span>
</td>
<td class="px-6 py-5 text-slate-500 dark:text-slate-400">دبي، الإمارات</td>
<td class="px-6 py-5 text-slate-500 dark:text-slate-400">45</td>
<td class="px-6 py-5">
<div class="flex items-center gap-1.5 text-slate-400">
<div class="size-2 rounded-full bg-slate-400"></div>
<span class="text-sm font-medium">مسودة</span>
</div>
</td>
<td class="px-6 py-5">
<div class="flex justify-center gap-3">
<button class="text-slate-400 hover:text-primary transition-colors"><span class="material-symbols-outlined text-[20px]">visibility</span></button>
<button class="text-slate-400 hover:text-blue-500 transition-colors"><span class="material-symbols-outlined text-[20px]">edit</span></button>
<button class="text-slate-400 hover:text-red-500 transition-colors"><span class="material-symbols-outlined text-[20px]">delete</span></button>
</div>
</td>
</tr>
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-700/20 transition-colors">
<td class="px-6 py-5 text-slate-900 dark:text-white font-medium">مدير منتج</td>
<td class="px-6 py-5">
<span class="px-3 py-1 bg-amber-100 dark:bg-amber-900/30 text-amber-700 dark:text-amber-400 text-xs font-bold rounded-full">دوام جزئي</span>
</td>
<td class="px-6 py-5 text-slate-500 dark:text-slate-400">عمان، الأردن</td>
<td class="px-6 py-5 text-slate-500 dark:text-slate-400">89</td>
<td class="px-6 py-5">
<div class="flex items-center gap-1.5 text-red-500">
<div class="size-2 rounded-full bg-red-500"></div>
<span class="text-sm font-medium">مغلق</span>
</div>
</td>
<td class="px-6 py-5">
<div class="flex justify-center gap-3">
<button class="text-slate-400 hover:text-primary transition-colors"><span class="material-symbols-outlined text-[20px]">visibility</span></button>
<button class="text-slate-400 hover:text-blue-500 transition-colors"><span class="material-symbols-outlined text-[20px]">edit</span></button>
<button class="text-slate-400 hover:text-red-500 transition-colors"><span class="material-symbols-outlined text-[20px]">delete</span></button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<div class="px-6 py-4 border-t border-slate-100 dark:border-slate-700 bg-slate-50/50 dark:bg-slate-800/40 flex items-center justify-between">
<span class="text-sm text-slate-500">عرض 1-3 من أصل 12 وظيفة</span>
<div class="flex gap-2">
<button class="px-3 py-1 border border-slate-200 dark:border-slate-700 rounded-lg text-sm disabled:opacity-50" disabled="">السابق</button>
<button class="px-3 py-1 border border-slate-200 dark:border-slate-700 rounded-lg text-sm bg-primary text-white">1</button>
<button class="px-3 py-1 border border-slate-200 dark:border-slate-700 rounded-lg text-sm hover:bg-slate-100 dark:hover:bg-slate-800">2</button>
<button class="px-3 py-1 border border-slate-200 dark:border-slate-700 rounded-lg text-sm">التالي</button>
</div>
</div>
</div>
<!-- Add New Job Form Section -->
<div class="max-w-4xl mx-auto">
<div class="flex items-center gap-3 mb-6">
<div class="size-10 bg-primary/20 text-primary rounded-xl flex items-center justify-center">
<span class="material-symbols-outlined">add_circle</span>
</div>
<h2 class="text-slate-900 dark:text-white text-2xl font-bold">نشر وظيفة جديدة</h2>
</div>
<div class="bg-white dark:bg-slate-800/40 border border-slate-200 dark:border-slate-700 rounded-2xl p-8 shadow-sm">
<form class="space-y-6">
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">عنوان الوظيفة</label>
<input class="form-input w-full rounded-xl border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:border-primary focus:ring-primary h-12" placeholder="مثلاً: مطور بايثون أول" type="text"/>
</div>
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">نوع الوظيفة</label>
<select class="form-select w-full rounded-xl border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:border-primary focus:ring-primary h-12">
<option>دوام كامل</option>
<option>دوام جزئي</option>
<option>تدريب</option>
<option>عمل حر</option>
</select>
</div>
</div>
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">وصف الوظيفة</label>
<textarea class="form-textarea w-full rounded-xl border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:border-primary focus:ring-primary" placeholder="اكتب تفاصيل الوظيفة هنا..." rows="4"></textarea>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">الموقع</label>
<div class="relative">
<span class="material-symbols-outlined absolute right-3 top-3 text-slate-400">location_on</span>
<input class="form-input w-full pr-10 rounded-xl border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:border-primary focus:ring-primary h-12" placeholder="المدينة، الدولة" type="text"/>
</div>
</div>
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">الراتب المتوقع</label>
<div class="relative">
<span class="material-symbols-outlined absolute right-3 top-3 text-slate-400">payments</span>
<input class="form-input w-full pr-10 rounded-xl border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:border-primary focus:ring-primary h-12" placeholder="مثلاً: 10,000 - 15,000" type="text"/>
</div>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">المهارات المطلوبة</label>
<input class="form-input w-full rounded-xl border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:border-primary focus:ring-primary h-12" placeholder="افصل بين المهارات بفاصلة" type="text"/>
</div>
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">الموعد النهائي للتقديم</label>
<div class="relative">
<span class="material-symbols-outlined absolute right-3 top-3 text-slate-400">calendar_today</span>
<input class="form-input w-full pr-10 rounded-xl border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:border-primary focus:ring-primary h-12" type="date"/>
</div>
</div>
</div>
<div class="pt-4 flex gap-4 justify-end">
<button class="px-8 h-12 rounded-xl border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-300 font-bold hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors" type="button">إلغاء</button>
<button class="px-10 h-12 rounded-xl bg-primary text-white font-bold hover:bg-primary/90 transition-all shadow-lg shadow-primary/20" type="submit">نشر الوظيفة الآن</button>
</div>
</form>
</div>
</div>
</main>
<!-- Footer Footer -->
<footer class="mt-20 border-t border-slate-200 dark:border-slate-800 py-10 px-6">
<div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-6">
<div class="flex items-center gap-3">
<div class="size-6 bg-primary rounded flex items-center justify-center text-white">
<span class="material-symbols-outlined text-[14px]">work</span>
</div>
<span class="text-slate-900 dark:text-white font-bold">GTS Jobs © 2024</span>
</div>
<div class="flex gap-8 text-sm text-slate-500 dark:text-slate-400">
<a class="hover:text-primary transition-colors" href="#">عن الشركة</a>
<a class="hover:text-primary transition-colors" href="#">الشروط والأحكام</a>
<a class="hover:text-primary transition-colors" href="#">سياسة الخصوصية</a>
<a class="hover:text-primary transition-colors" href="#">الدعم الفني</a>
</div>
<div class="flex gap-4">
<div class="size-8 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-500 cursor-pointer hover:bg-primary/10 hover:text-primary transition-all">
<span class="material-symbols-outlined text-[18px]">share</span>
</div>
<div class="size-8 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-500 cursor-pointer hover:bg-primary/10 hover:text-primary transition-all">
<span class="material-symbols-outlined text-[18px]">mail</span>
</div>
</div>
</div>
</footer>
</div>
</div>
</body></html>