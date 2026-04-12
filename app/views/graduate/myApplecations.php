<!DOCTYPE html>

<html dir="rtl" lang="ar"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "surface-dim": "#d9dadb",
                    "error": "#ba1a1a",
                    "surface-bright": "#f8f9fa",
                    "tertiary": "#006492",
                    "on-tertiary": "#ffffff",
                    "on-secondary-container": "#5d6466",
                    "surface-container": "#edeeef",
                    "inverse-surface": "#2e3132",
                    "secondary": "#586062",
                    "primary": "#a63b00",
                    "outline-variant": "#e1bfb3",
                    "secondary-fixed": "#dde4e6",
                    "secondary-fixed-dim": "#c1c8ca",
                    "on-primary-fixed": "#370e00",
                    "surface-tint": "#a63b00",
                    "on-background": "#191c1d",
                    "error-container": "#ffdad6",
                    "tertiary-container": "#009ade",
                    "primary-fixed-dim": "#ffb599",
                    "primary-container": "#f26522",
                    "outline": "#8d7166",
                    "background": "#f8f9fa",
                    "tertiary-fixed": "#cae6ff",
                    "on-surface": "#191c1d",
                    "tertiary-fixed-dim": "#8cceff",
                    "surface-container-lowest": "#ffffff",
                    "on-error-container": "#93000a",
                    "surface-container-highest": "#e1e3e4",
                    "on-tertiary-fixed": "#001e2f",
                    "on-secondary-fixed": "#161d1f",
                    "surface": "#f8f9fa",
                    "surface-container-low": "#f3f4f5",
                    "surface-container-high": "#e7e8e9",
                    "secondary-container": "#dae1e3",
                    "on-tertiary-fixed-variant": "#004b6f",
                    "inverse-on-surface": "#f0f1f2",
                    "on-primary-container": "#4f1800",
                    "on-error": "#ffffff",
                    "on-tertiary-container": "#002d45",
                    "on-primary-fixed-variant": "#7f2b00",
                    "on-primary": "#ffffff",
                    "on-surface-variant": "#594138",
                    "surface-variant": "#e1e3e4",
                    "on-secondary": "#ffffff",
                    "primary-fixed": "#ffdbce",
                    "on-secondary-fixed-variant": "#41484a",
                    "inverse-primary": "#ffb599"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "fontFamily": {
                    "headline": ["Manrope"],
                    "body": ["Inter"],
                    "label": ["Inter"]
            }
          },
        },
      }
    </script>
<style>
        body { font-family: 'Inter', sans-serif; background-color: #f8f9fa; }
        h1, h2, h3, .headline { font-family: 'Manrope', sans-serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .tonal-shift-boundary { transition: background-color 0.3s ease; }
    </style>
</head>
<body class="text-on-background">
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
<!-- Hero / Page Header Section -->
<section class="mb-12">
<div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
<div>
<h1 class="text-4xl font-extrabold text-on-surface mb-2 tracking-tight">طلباتي (My Applications)</h1>
<p class="text-secondary max-w-2xl font-medium">تتبع مسار حياتك المهنية وإدارتها بكل سهولة من خلال عرض كافة طلبات التوظيف التي قمت بتقديمها في مكان واحد.</p>
</div>
<div class="flex gap-3">
<div class="bg-surface-container-low px-4 py-3 rounded-xl flex items-center gap-3">
<span class="text-xs uppercase tracking-widest font-bold text-secondary">إجمالي الطلبات</span>
<span class="text-2xl font-bold text-primary">12</span>
</div>
<div class="bg-tertiary-container/10 px-4 py-3 rounded-xl flex items-center gap-3">
<span class="text-xs uppercase tracking-widest font-bold text-tertiary">مقبول</span>
<span class="text-2xl font-bold text-tertiary">2</span>
</div>
</div>
</div>
</section>
<!-- Filters & Search Bento Grid -->
<section class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
<div class="md:col-span-2 bg-surface-container-low p-2 rounded-xl flex items-center gap-2 group transition-all duration-300 focus-within:ring-2 focus-within:ring-primary/20">
<span class="material-symbols-outlined text-secondary mr-2">search</span>
<input class="bg-transparent border-none focus:ring-0 w-full text-on-surface placeholder:text-secondary/50 font-medium py-2" placeholder="ابحث عن وظيفة، شركة..." type="text"/>
</div>
<div class="bg-surface-container-low px-4 py-2 rounded-xl flex items-center justify-between">
<span class="text-sm font-semibold text-secondary">الحالة:</span>
<select class="bg-transparent border-none focus:ring-0 text-sm font-bold text-on-surface">
<option>الكل</option>
<option>قيد المراجعة</option>
<option>مقبول</option>
<option>مرفوض</option>
</select>
</div>
<div class="bg-surface-container-low px-4 py-2 rounded-xl flex items-center justify-between">
<span class="text-sm font-semibold text-secondary">التاريخ:</span>
<button class="flex items-center gap-2 text-sm font-bold text-on-surface">
                    الأحدث أولاً
                    <span class="material-symbols-outlined text-sm">keyboard_arrow_down</span>
</button>
</div>
</section>
<!-- Applications Content Canvas -->
<div class="bg-surface-container-low rounded-xl overflow-hidden">
<div class="overflow-x-auto">
<table class="w-full text-right border-collapse">
<thead>
<tr class="bg-surface-container-high/50 text-secondary text-xs uppercase tracking-widest font-bold">
<th class="px-8 py-5">الوظيفة</th>
<th class="px-8 py-5">الشركة</th>
<th class="px-8 py-5 text-center">التاريخ</th>
<th class="px-8 py-5 text-center">الحالة</th>
<th class="px-8 py-5 text-left">الإجراءات</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant/10">
<!-- Row 1 -->
<tr class="bg-surface-container-lowest hover:bg-surface transition-colors">
<td class="px-8 py-6">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-lg bg-surface-container overflow-hidden flex items-center justify-center">
<img class="w-8 h-8 object-contain" data-alt="minimalist corporate tech logo design on a clean grey background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDV2AAwJk4jN-IrZerT7dth-YBMEHJAwpCiu0cp5Ksy2Cx0p-YtD7aLQ5WyZerbjND_EekTmvWjq4piwsH1LZlZaz1l8dpw60GZkk9bG2ZRFJ9s4O1tNtFgcxYr74gdpMbY-_v3anhcKg7Mv29K95d8TwQy26Wv-s3vEIJV_GL2MPMXn_T9G-NajDR7x0bC_ajnqOgDSwAwfk9o-DUFG1bfuJfDwiWyly31hXSmrEx0r75BDU1rFfZHcnFZlNz6hYo6w-CIfvQPhww"/>
</div>
<div>
<div class="font-bold text-on-surface">مطور واجهات</div>
<div class="text-xs text-secondary">دوام كامل • الرياض</div>
</div>
</div>
</td>
<td class="px-8 py-6">
<span class="font-semibold text-on-surface-variant">شركة علم</span>
</td>
<td class="px-8 py-6 text-center text-sm font-medium text-secondary">
                                2024-05-10
                            </td>
<td class="px-8 py-6 text-center">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-tertiary-container/10 text-tertiary text-xs font-bold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                                    قيد المراجعة
                                </span>
</td>
<td class="px-8 py-6 text-left">
<button class="p-2 hover:bg-surface-container-high rounded-lg transition-colors">
<span class="material-symbols-outlined text-secondary">visibility</span>
</button>
</td>
</tr>
<!-- Row 2 -->
<tr class="bg-surface-container-lowest hover:bg-surface transition-colors">
<td class="px-8 py-6">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-lg bg-surface-container overflow-hidden flex items-center justify-center">
<img class="w-8 h-8 object-contain" data-alt="professional energy sector company logo with abstract circular shapes" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCNgdqurqbeSy4jQ2R95l4aREiE3KvzL3ZVTR7rp1kHrck6ZQb3eh42V8QuvoAJSP8jue97__84AsURcr2Mng_yT8UFB8UaWN0RSjaCYmRXLNmG9Z5Nd8UnVkccNxk_-9AARLS6gpQzPZbpZNaKXa0JaAl9dmq1MYuZp4C9INB1zdgspKJCuvh4WsxH76_RkiapeAghV7X1rROElyQqC3UkmaxqDOKEZmm05OCH1PGRM6rhKmqGFxZvEMv044g0svOKV25ntLpZcKg"/>
</div>
<div>
<div class="font-bold text-on-surface">محلل بيانات</div>
<div class="text-xs text-secondary">دوام كامل • الظهران</div>
</div>
</div>
</td>
<td class="px-8 py-6">
<span class="font-semibold text-on-surface-variant">أرامكو</span>
</td>
<td class="px-8 py-6 text-center text-sm font-medium text-secondary">
                                2024-04-15
                            </td>
<td class="px-8 py-6 text-center">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-bold">
<span class="w-1.5 h-1.5 rounded-full bg-green-600"></span>
                                    مقبول
                                </span>
</td>
<td class="px-8 py-6 text-left">
<button class="p-2 hover:bg-surface-container-high rounded-lg transition-colors">
<span class="material-symbols-outlined text-secondary">visibility</span>
</button>
</td>
</tr>
<!-- Row 3 -->
<tr class="bg-surface-container-lowest hover:bg-surface transition-colors">
<td class="px-8 py-6">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-lg bg-surface-container overflow-hidden flex items-center justify-center">
<img class="w-8 h-8 object-contain" data-alt="simple modern financial services icon or logo with geometric lines" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDxlwRetQoMInJQ7vi5dGJZ5vFBWZg-031t-Py0W9hHQ-Syha5CQrRkQln0C_OJoXKaFhlY_6d1QyUzkFolOAcK--g5fPTDUGfndldTJ4uG5as0_caX_yxWAJG60sbNnPo3d3tyI3bo3hDhH_tJWcexTQwesnsNlmFSie0g4OUHzre9IOdg62ty5qD1MXJY6u1_-EwjWDnmr2U1de2vKWjzqM8B1TmiB1JpcypPvs9zZFEtAAulH7igP-zTOsKeiAfN9qhvhIbF6TY"/>
</div>
<div>
<div class="font-bold text-on-surface">مهندس برمجيات</div>
<div class="text-xs text-secondary">عن بعد</div>
</div>
</div>
</td>
<td class="px-8 py-6">
<span class="font-semibold text-on-surface-variant">بنك الراجحي</span>
</td>
<td class="px-8 py-6 text-center text-sm font-medium text-secondary">
                                2024-03-22
                            </td>
<td class="px-8 py-6 text-center">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-error-container/20 text-error text-xs font-bold">
<span class="w-1.5 h-1.5 rounded-full bg-error"></span>
                                    مرفوض
                                </span>
</td>
<td class="px-8 py-6 text-left">
<button class="p-2 hover:bg-surface-container-high rounded-lg transition-colors">
<span class="material-symbols-outlined text-secondary">visibility</span>
</button>
</td>
</tr>
<!-- Row 4 -->
<tr class="bg-surface-container-lowest hover:bg-surface transition-colors">
<td class="px-8 py-6">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-lg bg-surface-container overflow-hidden flex items-center justify-center">
<img class="w-8 h-8 object-contain" data-alt="minimalist design agency logo featuring sleek bold lettering" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBxgKIK_VULPgJp8zgh5LcGFdsqKLOJJJfF5FZ6V-_qeboFiotSmXjvEnIfArN7oVBdRmd_QZevffMoDGXjFpschANgYuvWPwFHZHuNA7y_hOvXHeBpOumWSHx_GIHfsZ-7pR4vB5jp4i5yCgc0S1P20tKLAMqLRbWWc8C48cnPY-21S1VL42I7lQSKnuYDRdH6w0WZh9NYZzdOjv9AMmDBCVq_XFbZqngtXaRRfS9ifwkvPkhg_6O0gxUw70WPUhBo40JJOwVqUDc"/>
</div>
<div>
<div class="font-bold text-on-surface">أخصائي تسويق رقمي</div>
<div class="text-xs text-secondary">دوام جزئي • جدة</div>
</div>
</div>
</td>
<td class="px-8 py-6">
<span class="font-semibold text-on-surface-variant">شركة تطوير</span>
</td>
<td class="px-8 py-6 text-center text-sm font-medium text-secondary">
                                2024-05-12
                            </td>
<td class="px-8 py-6 text-center">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-tertiary-container/10 text-tertiary text-xs font-bold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                                    قيد المراجعة
                                </span>
</td>
<td class="px-8 py-6 text-left">
<button class="p-2 hover:bg-surface-container-high rounded-lg transition-colors">
<span class="material-symbols-outlined text-secondary">visibility</span>
</button>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination Section -->
<div class="px-8 py-4 bg-surface-container flex items-center justify-between">
<span class="text-xs font-semibold text-secondary uppercase tracking-wider">عرض 4 من أصل 12 طلب</span>
<div class="flex items-center gap-2">
<button class="w-8 h-8 rounded-lg flex items-center justify-center bg-surface-container-lowest text-secondary hover:text-primary transition-all shadow-sm">
<span class="material-symbols-outlined">chevron_right</span>
</button>
<span class="text-sm font-bold text-on-surface mx-2">صفحة 1 من 3</span>
<button class="w-8 h-8 rounded-lg flex items-center justify-center bg-surface-container-lowest text-secondary hover:text-primary transition-all shadow-sm">
<span class="material-symbols-outlined">chevron_left</span>
</button>
</div>
</div>
</div>
</main>
<!-- Footer -->
<footer class="w-full py-12 bg-[#f3f4f5] dark:bg-slate-900 mt-12">
<div class="flex flex-col md:flex-row justify-between items-center px-12 gap-6 max-w-screen-2xl mx-auto">
<span class="text-lg font-bold text-[#586062] dark:text-slate-300">Scholar Metric</span>
<div class="flex flex-wrap justify-center gap-8">
<a class="font-['Inter'] text-xs uppercase tracking-wider font-medium text-[#586062] dark:text-slate-400 hover:text-[#f26522] underline underline-offset-4 transition-all duration-300" href="#">Privacy Policy</a>
<a class="font-['Inter'] text-xs uppercase tracking-wider font-medium text-[#586062] dark:text-slate-400 hover:text-[#f26522] underline underline-offset-4 transition-all duration-300" href="#">Terms of Service</a>
<a class="font-['Inter'] text-xs uppercase tracking-wider font-medium text-[#586062] dark:text-slate-400 hover:text-[#f26522] underline underline-offset-4 transition-all duration-300" href="#">Help Center</a>
<a class="font-['Inter'] text-xs uppercase tracking-wider font-medium text-[#586062] dark:text-slate-400 hover:text-[#f26522] underline underline-offset-4 transition-all duration-300" href="#">Contact Support</a>
</div>
<p class="font-['Inter'] text-xs uppercase tracking-wider font-medium text-[#586062] dark:text-slate-400">© 2024 Scholar Metric. All rights reserved.</p>
</div>
</footer>
</body></html>