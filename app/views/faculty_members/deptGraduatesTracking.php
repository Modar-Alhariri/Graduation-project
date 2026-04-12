<!DOCTYPE html>

<html dir="rtl" lang="ar"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100..900;1,100..900&amp;display=swap" rel="stylesheet"/>
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
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-display transition-colors duration-300">
<div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
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
<a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary/10 text-primary font-semibold" href="<?= BASE_URL ?>FacultyMembers/dashboard">
<span class="material-symbols-outlined">dashboard</span>
<span>لوحة التحكم </span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 transition-colors" href="<?= BASE_URL ?>FacultyMembers/deptGraduatesTracking">
<span class="material-symbols-outlined">group</span>
<span>سجلات الخريجين</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 transition-colors" href="<?= BASE_URL ?>FacultyMembers/acadimicRecomendations">
<span class="material-symbols-outlined">work</span>
<span> التوصيات الاكاديمية</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 transition-colors" href="<?= BASE_URL ?>FacultyMembers/feedbackForms">
<span class="material-symbols-outlined">assignment</span>
<span> نماذج التغذية الراجعة  </span>
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
<main class="mx-auto flex w-full max-w-7xl flex-1 flex-col p-6 md:p-12 gap-8">
<section class="flex flex-col md:flex-row justify-between items-end gap-6">
<div class="space-y-2">
<h1 class="text-3xl font-black tracking-tight text-slate-900 dark:text-white">تتبع الخريجين</h1>
<p class="text-slate-500 dark:text-slate-400">إدارة وعرض بيانات خريجي قسم علوم الحاسب والبرمجيات</p>
</div>
<div class="flex flex-wrap gap-2">
<button class="flex items-center gap-2 rounded-xl bg-primary px-5 py-2.5 text-sm font-bold text-white shadow-lg shadow-primary/20 hover:bg-primary/90">
<span class="material-symbols-outlined text-lg">add</span>
                        إضافة خريج جديد
                    </button>
<button class="flex items-center gap-2 rounded-xl bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 px-5 py-2.5 text-sm font-bold hover:bg-slate-50">
<span class="material-symbols-outlined text-lg">download</span>
                        تصدير البيانات
                    </button>
</div>
</section>
<section class="grid grid-cols-1 md:grid-cols-4 gap-4 bg-white dark:bg-slate-800 p-6 rounded-2xl border border-slate-100 dark:border-slate-700 shadow-sm">
<div class="space-y-1.5">
<label class="text-xs font-bold text-slate-500 uppercase">سنة التخرج</label>
<select class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 text-sm focus:ring-primary">
<option>الكل</option>
<option>2023</option>
<option>2022</option>
<option>2021</option>
</select>
</div>
<div class="space-y-1.5">
<label class="text-xs font-bold text-slate-500 uppercase">حالة التوظيف</label>
<select class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 text-sm focus:ring-primary">
<option>الكل</option>
<option>موظف</option>
<option>باحث عن عمل</option>
<option>تدريب</option>
<option>دراسات عليا</option>
</select>
</div>
<div class="space-y-1.5">
<label class="text-xs font-bold text-slate-500 uppercase">جهة العمل</label>
<input class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 text-sm focus:ring-primary" placeholder="اسم الشركة..." type="text"/>
</div>
<div class="flex items-end">
<button class="w-full bg-primary/10 text-primary hover:bg-primary/20 rounded-lg py-2 text-sm font-bold transition-colors">تطبيق الفلاتر</button>
</div>
</section>
<section class="overflow-hidden rounded-2xl border border-slate-100 dark:border-slate-700 bg-white dark:bg-slate-800 shadow-sm">
<div class="overflow-x-auto">
<table class="w-full text-right border-collapse">
<thead>
<tr class="bg-slate-50 dark:bg-slate-900/50 text-slate-500 text-sm">
<th class="px-6 py-4 font-bold uppercase">الرقم الجامعي</th>
<th class="px-6 py-4 font-bold uppercase">الاسم</th>
<th class="px-6 py-4 font-bold uppercase">سنة التخرج</th>
<th class="px-6 py-4 font-bold uppercase">الحالة الوظيفية</th>
<th class="px-6 py-4 font-bold uppercase">جهة العمل الحالية</th>
<th class="px-6 py-4 font-bold uppercase text-center">الإجراءات</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-700">
<tr class="hover:bg-slate-50 dark:hover:bg-slate-900/30 transition-colors">
<td class="px-6 py-4 text-sm font-mono text-slate-500">201901234</td>
<td class="px-6 py-4 font-semibold">أحمد عبد الله العتيبي</td>
<td class="px-6 py-4 text-sm">2023</td>
<td class="px-6 py-4">
<span class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900/30 dark:text-green-300">موظف</span>
</td>
<td class="px-6 py-4 text-sm">شركة أرامكو السعودية</td>
<td class="px-6 py-4 text-center">
<button class="text-primary hover:underline text-sm font-bold inline-flex items-center gap-1">
<span class="material-symbols-outlined text-base">visibility</span>
                                        عرض الملف
                                    </button>
</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-900/30 transition-colors">
<td class="px-6 py-4 text-sm font-mono text-slate-500">201902567</td>
<td class="px-6 py-4 font-semibold">سارة محمد الشهري</td>
<td class="px-6 py-4 text-sm">2023</td>
<td class="px-6 py-4">
<span class="inline-flex items-center rounded-full bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-blue-800 dark:bg-blue-900/30 dark:text-blue-300">دراسات عليا</span>
</td>
<td class="px-6 py-4 text-sm italic text-slate-400">جامعة الملك سعود</td>
<td class="px-6 py-4 text-center">
<button class="text-primary hover:underline text-sm font-bold inline-flex items-center gap-1">
<span class="material-symbols-outlined text-base">visibility</span>
                                        عرض الملف
                                    </button>
</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-900/30 transition-colors">
<td class="px-6 py-4 text-sm font-mono text-slate-500">201803890</td>
<td class="px-6 py-4 font-semibold">خالد فهد الدوسري</td>
<td class="px-6 py-4 text-sm">2022</td>
<td class="px-6 py-4">
<span class="inline-flex items-center rounded-full bg-yellow-100 px-2.5 py-0.5 text-xs font-medium text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-300">تدريب</span>
</td>
<td class="px-6 py-4 text-sm">هيئة البيانات والذكاء الاصطناعي</td>
<td class="px-6 py-4 text-center">
<button class="text-primary hover:underline text-sm font-bold inline-flex items-center gap-1">
<span class="material-symbols-outlined text-base">visibility</span>
                                        عرض الملف
                                    </button>
</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-900/30 transition-colors">
<td class="px-6 py-4 text-sm font-mono text-slate-500">201904122</td>
<td class="px-6 py-4 font-semibold">ليلى ناصر المري</td>
<td class="px-6 py-4 text-sm">2023</td>
<td class="px-6 py-4">
<span class="inline-flex items-center rounded-full bg-slate-100 px-2.5 py-0.5 text-xs font-medium text-slate-800 dark:bg-slate-700 dark:text-slate-300">باحث عن عمل</span>
</td>
<td class="px-6 py-4 text-sm text-slate-400">-</td>
<td class="px-6 py-4 text-center">
<button class="text-primary hover:underline text-sm font-bold inline-flex items-center gap-1">
<span class="material-symbols-outlined text-base">visibility</span>
                                        عرض الملف
                                    </button>
</td>
</tr>
</tbody>
</table>
</div>
<div class="px-6 py-4 flex justify-between items-center border-t border-slate-100 dark:border-slate-700">
<p class="text-xs text-slate-500">عرض 1-4 من أصل 125 خريج</p>
<div class="flex gap-2">
<button class="p-2 rounded-lg border border-slate-200 dark:border-slate-700 hover:bg-slate-50 disabled:opacity-50" disabled="">
<span class="material-symbols-outlined text-lg">chevron_right</span>
</button>
<button class="p-2 rounded-lg border border-slate-200 dark:border-slate-700 hover:bg-slate-50">
<span class="material-symbols-outlined text-lg">chevron_left</span>
</button>
</div>
</div>
</section>
<section class="mt-8 border-t-2 border-primary/20 pt-10">
<div class="bg-white dark:bg-slate-800 p-8 rounded-3xl border border-slate-100 dark:border-slate-700 shadow-xl relative overflow-hidden">
<div class="absolute -top-12 -left-12 w-48 h-48 bg-primary/5 rounded-full blur-3xl"></div>
<div class="flex flex-col md:flex-row gap-10">
<div class="flex-shrink-0 flex flex-col items-center gap-4">
<div class="size-32 rounded-3xl bg-slate-100 dark:bg-slate-900 overflow-hidden border-4 border-white dark:border-slate-700 shadow-md" data-alt="Detailed portrait of an alumni">
<img alt="Profile Detail" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCbXCt75RD8mVTdpwM0aH8fkoh3vuQrpi3v55CdQ1Yw-WhuPugufGhowdGpZii1oKG7NBMoU9lxZlk3ZkVAG4XBOqzNsmeJKajuhPovbLLUjZdxLqQVDby8pLqTMUK5AORsunqcJP0BL9efNvAg3sbipdhnyHDTEtaI6Cz0BGsPV37AZVtVGPgXkrwmg4qeHH9CPPipr2ogtWtIlJB_Hu01FHf9UOC_KGkGDJkHUu6-WDo7UkOy5HcMIN04qm1Fp7CILP93vaQM1YY"/>
</div>
<div class="text-center">
<h3 class="text-xl font-bold">أحمد عبد الله العتيبي</h3>
<p class="text-primary text-sm font-medium">علوم حاسب - دفعة 2023</p>
</div>
</div>
<div class="flex-1 grid grid-cols-1 md:grid-cols-2 gap-8">
<div>
<h4 class="text-sm font-bold text-slate-400 mb-4 border-b border-slate-100 dark:border-slate-700 pb-2 uppercase tracking-widest">البيانات الأكاديمية</h4>
<ul class="space-y-3">
<li class="flex justify-between text-sm"><span class="text-slate-500">المعدل التراكمي:</span> <span class="font-bold">3.85 / 4.00</span></li>
<li class="flex justify-between text-sm"><span class="text-slate-500">التخصص الدقيق:</span> <span class="font-bold">الأمن السيبراني</span></li>
<li class="flex justify-between text-sm"><span class="text-slate-500">مشروع التخرج:</span> <span class="font-bold">نظام كشف التسلل بالذكاء الاصطناعي</span></li>
</ul>
</div>
<div>
<h4 class="text-sm font-bold text-slate-400 mb-4 border-b border-slate-100 dark:border-slate-700 pb-2 uppercase tracking-widest">المهارات التقنية</h4>
<div class="flex flex-wrap gap-2">
<span class="px-3 py-1 bg-slate-100 dark:bg-slate-900 text-xs font-bold rounded-full">Python</span>
<span class="px-3 py-1 bg-slate-100 dark:bg-slate-900 text-xs font-bold rounded-full">React</span>
<span class="px-3 py-1 bg-slate-100 dark:bg-slate-900 text-xs font-bold rounded-full">SQL</span>
<span class="px-3 py-1 bg-slate-100 dark:bg-slate-900 text-xs font-bold rounded-full">Docker</span>
<span class="px-3 py-1 bg-slate-100 dark:bg-slate-900 text-xs font-bold rounded-full">AWS</span>
</div>
</div>
<div class="md:col-span-2">
<h4 class="text-sm font-bold text-slate-400 mb-4 border-b border-slate-100 dark:border-slate-700 pb-2 uppercase tracking-widest">الحياة المهنية الحالية</h4>
<div class="bg-primary/5 p-4 rounded-xl flex items-center gap-6">
<div class="size-12 bg-white dark:bg-slate-700 rounded-lg flex items-center justify-center text-primary shadow-sm">
<span class="material-symbols-outlined text-2xl">business</span>
</div>
<div class="flex-1">
<div class="flex justify-between items-center mb-1">
<p class="font-bold">مطور برمجيات مبتدئ</p>
<span class="text-xs text-slate-500">منذ يونيو 2023</span>
</div>
<p class="text-sm text-slate-600 dark:text-slate-400">شركة أرامكو السعودية - مركز التحول الرقمي</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</main>
<footer class="mt-auto py-8 border-t border-slate-100 dark:border-slate-800">
<div class="mx-auto max-w-7xl px-6 md:px-12 flex flex-col md:flex-row justify-between items-center gap-4">
<p class="text-sm text-slate-500">© 2024 نظام تتبع الخريجين - GTS. جميع الحقوق محفوظة.</p>
<div class="flex gap-6">
<a class="text-sm text-slate-500 hover:text-primary" href="#">الشروط والأحكام</a>
<a class="text-sm text-slate-500 hover:text-primary" href="#">سياسة الخصوصية</a>
<a class="text-sm text-slate-500 hover:text-primary" href="#">تواصل معنا</a>
</div>
</div>
</footer>
</div>
</body></html>