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
<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/50 px-6 py-3 lg:px-40">
<div class="flex items-center gap-4">
<div class="text-primary size-8 flex items-center justify-center">
<span class="material-symbols-outlined text-4xl">school</span>
</div>
<h2 class="text-lg font-bold leading-tight tracking-[-0.015em]">GTS Graduate Search</h2>
</div>
<div class="flex flex-1 justify-end gap-8 items-center">
<nav class="hidden md:flex items-center gap-9">
<a class="text-sm font-medium leading-normal hover:text-primary transition-colors" href="#">لوحة القيادة</a>
<a class="text-sm font-semibold leading-normal text-primary" href="#">الخريجين</a>
<a class="text-sm font-medium leading-normal hover:text-primary transition-colors" href="#">الرسائل</a>
<a class="text-sm font-medium leading-normal hover:text-primary transition-colors" href="#">التقارير</a>
</nav>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border-2 border-primary/20" data-alt="User avatar placeholder profile picture" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBlVsXU8DJHhrtRSeSc9YlhicLDy5OZKQ2RhPhzg-fcsS3anDHpwO-bQ4JInvd_JHBT7LExtBDqfRcPuCBl0302khErHyjazdxhDK4TSI12IK_-_3L3tMnBxnwS3YXqMPVUXlSiQ1vaV10y7LGzRuaXLYRiqXViC6gnADf8tQs0ntt5JIH1WSZ7yz0AwpUBH0tFyHQ5xqdNq09h6L8MpoMxp8fluOo2L8DJ-WFQWrXo0JM4OXQHrXIiKPGI0RyObXME9bJVCMGukIE");'></div>
</div>
</header>
<main class="flex-1 flex flex-col lg:px-40 py-8">
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
<th class="px-6 py-4 text-sm font-bold text-slate-500 uppercase tracking-wider text-center">الخبرة</th>
<th class="px-6 py-4 text-sm font-bold text-slate-500 uppercase tracking-wider text-center">الإجراءات</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-200 dark:divide-slate-800">
<!-- Row 1 -->
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4 whitespace-nowrap">
<div class="flex items-center gap-3">
<div class="size-10 rounded-full bg-slate-200 dark:bg-slate-700 overflow-hidden" data-alt="Professional profile headshot of a candidate" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCr37uL4V2cOAJdWaOGXO8Y9leC50nzHs1jnve4NyfrW7ofq1wHvlEjlMP0t9TTNX4pOFsLL4OhHsnax4cE1tycbcOdEjs3V3m52qKrnP_01xjijgXFcuLneWq_poDenpa8Vtu_SYa0qLmS9olSGVQWoeaJ66RBVlln_ktjEen5dA5t5Fw8EYKNmTlhvcv58p2NPVUZ8fbN77u0u5pXf2Ag5Ny-FKyrSUWQ-dtulWwPozZ9K1qR31lHJQHhjvLdW_4OokjWeiM0-aE"); background-size: cover;'></div>
<div>
<div class="font-bold">أحمد محمد</div>
<div class="text-xs text-slate-500">خريج 2023</div>
</div>
</div>
</td>
<td class="px-6 py-4 text-sm">هندسة البرمجيات</td>
<td class="px-6 py-4">
<div class="flex flex-wrap gap-1">
<span class="px-2 py-0.5 bg-slate-100 dark:bg-slate-800 text-[10px] font-bold rounded">Python</span>
<span class="px-2 py-0.5 bg-slate-100 dark:bg-slate-800 text-[10px] font-bold rounded">React</span>
<span class="px-2 py-0.5 bg-slate-100 dark:bg-slate-800 text-[10px] font-bold rounded">AWS</span>
</div>
</td>
<td class="px-6 py-4 text-sm text-center">2 سنة</td>
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
<!-- Row 2 -->
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4 whitespace-nowrap">
<div class="flex items-center gap-3">
<div class="size-10 rounded-full bg-slate-200 dark:bg-slate-700 overflow-hidden" data-alt="Abstract candidate avatar with brand color" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDqEieBg_yOAmwASujntBbTuiehmH6mKbPlAqivstSpr9VsnrrThMEr08DuQ4VnHThZRMyZrV2-lRz-pZwWFZe40XbOecyFJY5N2vZVROi4eFamdp7toi8PLXfXuQ4dxVXaT5mdqpgrTOQvnc7324-n_fK5eMkkLf8o0mOoGLIulV7qJ0jmaJLnzIPqaX4P_jfzMZs88IvU37LQ_3OZDRSNc2zLOWKhimdr6NoJLfS-O91Pbwwi1zD-Lq0mB2OS3okXPaHM_kkUdwQ"); background-size: cover;'></div>
<div>
<div class="font-bold">سارة خالد</div>
<div class="text-xs text-slate-500">خريجة 2022</div>
</div>
</div>
</td>
<td class="px-6 py-4 text-sm">تصميم واجهة المستخدم</td>
<td class="px-6 py-4">
<div class="flex flex-wrap gap-1">
<span class="px-2 py-0.5 bg-slate-100 dark:bg-slate-800 text-[10px] font-bold rounded">Figma</span>
<span class="px-2 py-0.5 bg-slate-100 dark:bg-slate-800 text-[10px] font-bold rounded">UI/UX</span>
<span class="px-2 py-0.5 bg-slate-100 dark:bg-slate-800 text-[10px] font-bold rounded">+2</span>
</div>
</td>
<td class="px-6 py-4 text-sm text-center">1 سنة</td>
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
<!-- Row 3 -->
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4 whitespace-nowrap">
<div class="flex items-center gap-3">
<div class="size-10 rounded-full bg-slate-200 dark:bg-slate-700 overflow-hidden" data-alt="Candidate profile picture placeholder" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC-Xq6UWLnBpy_p98x1rkWDMitUy-vnMMd_OxUIHK8tj43MBn5EfpmTb9LUighfF3Bz3LD7xGwp8htQ7LkSY8paP5zGHdf6_m0AFAgOUafcGN3zUzzm-PiwBwtxCMB0aEgEObDct_fnAbjz8cXxOONcsg40b7KzGwcF7XMIewetjD6e7xnWyVZFoqYQozFIMPl1MIuArkJ4LzYDZ28RqbjTzENKusWqq87AwDCGYcWqzecSMSWemdfs6XFtPQ8shkaTQS3nni4sjZE"); background-size: cover;'></div>
<div>
<div class="font-bold">فهد العتيبي</div>
<div class="text-xs text-slate-500">خريج 2024</div>
</div>
</div>
</td>
<td class="px-6 py-4 text-sm">علوم البيانات</td>
<td class="px-6 py-4">
<div class="flex flex-wrap gap-1">
<span class="px-2 py-0.5 bg-slate-100 dark:bg-slate-800 text-[10px] font-bold rounded">SQL</span>
<span class="px-2 py-0.5 bg-slate-100 dark:bg-slate-800 text-[10px] font-bold rounded">R</span>
<span class="px-2 py-0.5 bg-slate-100 dark:bg-slate-800 text-[10px] font-bold rounded">Tableau</span>
</div>
</td>
<td class="px-6 py-4 text-sm text-center">حديث تخرج</td>
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
<!-- Row 4 -->
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4 whitespace-nowrap">
<div class="flex items-center gap-3">
<div class="size-10 rounded-full bg-slate-200 dark:bg-slate-700 overflow-hidden" data-alt="Professional female headshot of a student graduate" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBWBjZYFD4PB_S9PSxgF9JRpuWzAUx7ROE1QzAYc4IqpEPQmnVGFjfLu7SBD4aav5jvzwRJoD0JechVfK1ytFV-t4nqM6ybTK2dC9A3fWHe3P2xLZ73rR8X-Acv1KOIvkTyY94ch_o5amF9Z4Cn09BAqB8pBuo-LmMvRZ6dbpqJoEq8QP3KWsAPdkY65xCEwRNoa-6mK1yhPcv4fKxi86clRpC2R69J9_rRTSQhSc5ZV8L2PbSdwSL3CcpRo9Fn9LyqjIE7LxABnmM"); background-size: cover;'></div>
<div>
<div class="font-bold">نورة العمري</div>
<div class="text-xs text-slate-500">خريجة 2021</div>
</div>
</div>
</td>
<td class="px-6 py-4 text-sm">نظم المعلومات الإدارية</td>
<td class="px-6 py-4">
<div class="flex flex-wrap gap-1">
<span class="px-2 py-0.5 bg-slate-100 dark:bg-slate-800 text-[10px] font-bold rounded">SAP</span>
<span class="px-2 py-0.5 bg-slate-100 dark:bg-slate-800 text-[10px] font-bold rounded">Agile</span>
</div>
</td>
<td class="px-6 py-4 text-sm text-center">3 سنوات</td>
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
</tbody>
</table>
</div>
<!-- Pagination -->
<div class="p-6 border-t border-slate-200 dark:border-slate-800 flex justify-center">
<nav class="flex gap-2">
<button class="size-10 flex items-center justify-center rounded-lg border border-slate-200 dark:border-slate-800 hover:bg-slate-50 dark:hover:bg-slate-800">
<span class="material-symbols-outlined">chevron_right</span>
</button>
<button class="size-10 flex items-center justify-center rounded-lg bg-primary text-white font-bold">1</button>
<button class="size-10 flex items-center justify-center rounded-lg border border-slate-200 dark:border-slate-800 hover:bg-slate-50 dark:hover:bg-slate-800 font-bold">2</button>
<button class="size-10 flex items-center justify-center rounded-lg border border-slate-200 dark:border-slate-800 hover:bg-slate-50 dark:hover:bg-slate-800 font-bold">3</button>
<button class="size-10 flex items-center justify-center rounded-lg border border-slate-200 dark:border-slate-800 hover:bg-slate-50 dark:hover:bg-slate-800">
<span class="material-symbols-outlined">chevron_left</span>
</button>
</nav>
</div>
</div>
</section>
</div>
</main>
<footer class="mt-auto border-t border-slate-200 dark:border-slate-800 py-8 lg:px-40 text-center">
<p class="text-sm text-slate-500">© 2024 GTS للتوظيف. جميع الحقوق محفوظة.</p>
</footer>
</div>
</body></html>