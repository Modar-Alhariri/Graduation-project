<!DOCTYPE html>

<html dir="rtl" lang="ar"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>لوحة تحكم العميد - دعم القرار</title>
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
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 transition-colors duration-200">
<div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
<div class="layout-container flex h-full grow flex-col">
<!-- Top Navigation Bar -->
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
<a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary/10 text-primary font-semibold" href="<?= BASE_URL ?>dean/dashboard">
<span class="material-symbols-outlined">dashboard</span>
<span>Dashboard</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 transition-colors" href="<?= BASE_URL ?>dean/analyticsReports">
<span class="material-symbols-outlined">work</span>
<span>Analytics Reports</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 transition-colors" href="<?= BASE_URL ?>dean/decisions">
<span class="material-symbols-outlined">group</span>
<span>Decisions</span>
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
<!-- Hero Section / Title -->
<div class="mb-8 flex flex-col md:flex-row md:items-end justify-between gap-4">
<div>
<h2 class="text-3xl font-black text-slate-900 dark:text-white mb-2">تطوير البرامج الأكاديمية</h2>
<p class="text-slate-500 dark:text-slate-400 max-w-2xl text-lg">تحليل شامل للفجوات المهارية وتوصيات التطوير بناءً على احتياجات سوق العمل المتغيرة.</p>
</div>
<div class="flex gap-2">
<button class="bg-primary text-white px-6 py-2.5 rounded-xl font-bold text-sm shadow-lg shadow-primary/20 hover:brightness-110 transition-all flex items-center gap-2">
<span class="material-symbols-outlined text-sm">download</span>
                            تصدير التقرير الكامل
                        </button>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
<!-- Skills Gap Analysis Table (Main Column) -->
<div class="lg:col-span-2 space-y-8">
<section class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden shadow-sm">
<div class="px-6 py-5 border-b border-slate-100 dark:border-slate-800 flex justify-between items-center">
<h3 class="text-lg font-bold flex items-center gap-2">
<span class="material-symbols-outlined text-primary">data_exploration</span>
                                    تحليل فجوة المهارات
                                </h3>
<span class="text-xs font-medium px-2.5 py-1 bg-primary/10 text-primary rounded-full">تحديث: اليوم</span>
</div>
<div class="overflow-x-auto">
<table class="w-full text-right border-collapse">
<thead>
<tr class="bg-slate-50 dark:bg-slate-800/50">
<th class="px-6 py-4 text-sm font-semibold text-slate-600 dark:text-slate-300">المهارة</th>
<th class="px-6 py-4 text-sm font-semibold text-slate-600 dark:text-slate-300">طلب السوق</th>
<th class="px-6 py-4 text-sm font-semibold text-slate-600 dark:text-slate-300">تغطية المنهج</th>
<th class="px-6 py-4 text-sm font-semibold text-slate-600 dark:text-slate-300">الفجوة</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-800">
<tr>
<td class="px-6 py-5 font-medium">الذكاء الاصطناعي</td>
<td class="px-6 py-5">
<span class="px-3 py-1 bg-red-100 text-red-700 dark:bg-red-900/30 dark:text-red-400 rounded-full text-xs font-bold">مرتفع جداً</span>
</td>
<td class="px-6 py-5">
<div class="flex items-center gap-3">
<div class="w-24 h-2 bg-slate-100 dark:bg-slate-700 rounded-full overflow-hidden">
<div class="bg-primary h-full" style="width: 30%"></div>
</div>
<span class="text-sm font-bold">30%</span>
</div>
</td>
<td class="px-6 py-5 text-red-600 font-bold text-sm">70% فجوة</td>
</tr>
<tr>
<td class="px-6 py-5 font-medium">الأمن السيبراني</td>
<td class="px-6 py-5">
<span class="px-3 py-1 bg-red-100 text-red-700 dark:bg-red-900/30 dark:text-red-400 rounded-full text-xs font-bold">مرتفع</span>
</td>
<td class="px-6 py-5">
<div class="flex items-center gap-3">
<div class="w-24 h-2 bg-slate-100 dark:bg-slate-700 rounded-full overflow-hidden">
<div class="bg-primary h-full" style="width: 60%"></div>
</div>
<span class="text-sm font-bold">60%</span>
</div>
</td>
<td class="px-6 py-5 text-orange-600 font-bold text-sm">40% فجوة</td>
</tr>
<tr>
<td class="px-6 py-5 font-medium">هندسة السحابة</td>
<td class="px-6 py-5">
<span class="px-3 py-1 bg-orange-100 text-orange-700 dark:bg-orange-900/30 dark:text-orange-400 rounded-full text-xs font-bold">متوسط</span>
</td>
<td class="px-6 py-5">
<div class="flex items-center gap-3">
<div class="w-24 h-2 bg-slate-100 dark:bg-slate-700 rounded-full overflow-hidden">
<div class="bg-primary h-full" style="width: 40%"></div>
</div>
<span class="text-sm font-bold">40%</span>
</div>
</td>
<td class="px-6 py-5 text-orange-600 font-bold text-sm">60% فجوة</td>
</tr>
<tr>
<td class="px-6 py-5 font-medium">تطوير الويب الشامل</td>
<td class="px-6 py-5">
<span class="px-3 py-1 bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 rounded-full text-xs font-bold">مستقر</span>
</td>
<td class="px-6 py-5">
<div class="flex items-center gap-3">
<div class="w-24 h-2 bg-slate-100 dark:bg-slate-700 rounded-full overflow-hidden">
<div class="bg-primary h-full" style="width: 85%"></div>
</div>
<span class="text-sm font-bold">85%</span>
</div>
</td>
<td class="px-6 py-5 text-green-600 font-bold text-sm">15% فجوة</td>
</tr>
</tbody>
</table>
</div>
</section>
<!-- Market Alignment Reports -->
<section class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm relative overflow-hidden group">
<div class="absolute -right-4 -top-4 size-24 bg-primary/5 rounded-full group-hover:scale-110 transition-transform"></div>
<h3 class="text-lg font-bold mb-4 flex items-center gap-2">
<span class="material-symbols-outlined text-primary">school</span>
                                    مواءمة تخصص علوم الحاسب
                                </h3>
<div class="flex items-center justify-between mb-2">
<span class="text-sm text-slate-500">مستوى المواءمة مع السوق</span>
<span class="text-primary font-bold">مرتفع (88%)</span>
</div>
<div class="w-full h-3 bg-slate-100 dark:bg-slate-800 rounded-full overflow-hidden">
<div class="bg-primary h-full" style="width: 88%"></div>
</div>
<p class="mt-4 text-xs text-slate-500 leading-relaxed">الخريجون يمتلكون المهارات التقنية الأساسية المطلوبة بشكل جيد، مع الحاجة لتعزيز المهارات الناعمة.</p>
</div>
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm relative overflow-hidden group">
<div class="absolute -right-4 -top-4 size-24 bg-slate-100 dark:bg-slate-800 rounded-full group-hover:scale-110 transition-transform"></div>
<h3 class="text-lg font-bold mb-4 flex items-center gap-2">
<span class="material-symbols-outlined text-primary">business_center</span>
                                    مواءمة تخصص نظم المعلومات
                                </h3>
<div class="flex items-center justify-between mb-2">
<span class="text-sm text-slate-500">مستوى المواءمة مع السوق</span>
<span class="text-orange-500 font-bold">متوسط (64%)</span>
</div>
<div class="w-full h-3 bg-slate-100 dark:bg-slate-800 rounded-full overflow-hidden">
<div class="bg-orange-500 h-full" style="width: 64%"></div>
</div>
<p class="mt-4 text-xs text-slate-500 leading-relaxed">هناك فجوة ملحوظة في التقنيات السحابية الحديثة وتحليل البيانات الكبيرة في المنهج الحالي.</p>
</div>
</section>
</div>
<!-- Curriculum Development Recommendations (Sidebar) -->
<div class="space-y-6">
<section class="bg-primary/5 dark:bg-primary/10 p-6 rounded-xl border border-primary/20">
<div class="flex items-center gap-3 mb-6">
<div class="p-2 bg-primary text-white rounded-lg">
<span class="material-symbols-outlined">lightbulb</span>
</div>
<h3 class="text-lg font-bold">توصيات التطوير</h3>
</div>
<div class="space-y-4">
<!-- Recommendation Card 1 -->
<div class="bg-white dark:bg-slate-900 p-4 rounded-lg shadow-sm border-r-4 border-primary">
<h4 class="font-bold text-sm mb-1">إضافة مقرر علم البيانات</h4>
<p class="text-xs text-slate-500 mb-3">سد فجوة تحليل البيانات في السنة الثالثة لتخصص علوم الحاسب.</p>
<div class="flex justify-between items-center">
<span class="text-[10px] bg-primary/10 text-primary px-2 py-0.5 rounded uppercase font-bold">أولوية عالية</span>
<button class="text-primary text-xs font-bold hover:underline">عرض التفاصيل</button>
</div>
</div>
<!-- Recommendation Card 2 -->
<div class="bg-white dark:bg-slate-900 p-4 rounded-lg shadow-sm border-r-4 border-slate-300 dark:border-slate-700">
<h4 class="font-bold text-sm mb-1">تحديث مقرر نظم قواعد البيانات</h4>
<p class="text-xs text-slate-500 mb-3">دمج تقنيات NoSQL وقواعد البيانات الموزعة في المنهج.</p>
<div class="flex justify-between items-center">
<span class="text-[10px] bg-slate-100 dark:bg-slate-800 text-slate-500 px-2 py-0.5 rounded uppercase font-bold">أولوية متوسطة</span>
<button class="text-primary text-xs font-bold hover:underline">عرض التفاصيل</button>
</div>
</div>
<!-- Recommendation Card 3 -->
<div class="bg-white dark:bg-slate-900 p-4 rounded-lg shadow-sm border-r-4 border-primary">
<h4 class="font-bold text-sm mb-1">برنامج شراكة مع Microsoft</h4>
<p class="text-xs text-slate-500 mb-3">توفير شهادات معتمدة في هندسة السحابة للطلاب.</p>
<div class="flex justify-between items-center">
<span class="text-[10px] bg-primary/10 text-primary px-2 py-0.5 rounded uppercase font-bold">أولوية عالية</span>
<button class="text-primary text-xs font-bold hover:underline">عرض التفاصيل</button>
</div>
</div>
<!-- Recommendation Card 4 -->
<div class="bg-white dark:bg-slate-900 p-4 rounded-lg shadow-sm border-r-4 border-slate-300 dark:border-slate-700">
<h4 class="font-bold text-sm mb-1">تطوير مختبرات الأمن السيبراني</h4>
<p class="text-xs text-slate-500 mb-3">تحديث البنية التحتية لتشمل بيئات محاكاة الهجمات المعقدة.</p>
<div class="flex justify-between items-center">
<span class="text-[10px] bg-slate-100 dark:bg-slate-800 text-slate-500 px-2 py-0.5 rounded uppercase font-bold">أولوية متوسطة</span>
<button class="text-primary text-xs font-bold hover:underline">عرض التفاصيل</button>
</div>
</div>
</div>
<button class="w-full mt-6 py-3 border-2 border-dashed border-primary/30 text-primary font-bold rounded-xl hover:bg-primary/5 transition-colors text-sm">
                                إنشاء توصية جديدة
                            </button>
</section>
<!-- Quick Stats -->
<div class="bg-slate-900 text-white p-6 rounded-xl">
<p class="text-slate-400 text-xs mb-1">معدل التوظيف العام</p>
<h4 class="text-3xl font-black mb-4">84%</h4>
<div class="space-y-3">
<div class="flex justify-between text-xs">
<span>مقارنة بالعام الماضي</span>
<span class="text-green-400 flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">trending_up</span>
                                        +5.2%
                                    </span>
</div>
<div class="w-full h-1.5 bg-slate-800 rounded-full">
<div class="bg-primary h-full" style="width: 84%"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Footer / Action bar -->
<footer class="mt-12 pt-8 border-t border-slate-200 dark:border-slate-800 flex flex-col md:flex-row justify-between items-center gap-4 text-slate-500 dark:text-slate-400 text-sm">
<p>© 2024 نظام دعم القرار الأكاديمي - كلية علوم الحاسب</p>
<div class="flex gap-6">
<a class="hover:text-primary transition-colors" href="#">دليل المستخدم</a>
<a class="hover:text-primary transition-colors" href="#">الدعم الفني</a>
<a class="hover:text-primary transition-colors" href="#">إعدادات النظام</a>
</div>
</footer>
</main>
</div>
</div>
</body></html>