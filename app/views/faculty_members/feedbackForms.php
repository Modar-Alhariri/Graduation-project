<!DOCTYPE html>

<html dir="rtl" lang="ar"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
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
            borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
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
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-display">
<div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
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
<!-- Main Content -->
<main class="flex-1 p-6 md:p-10 max-w-5xl mx-auto w-full">
<div class="mb-8">
<div class="flex flex-wrap items-center justify-between gap-4 mb-4">
<div class="flex flex-col gap-1">
<h1 class="text-slate-900 dark:text-white text-3xl font-black tracking-tight">نموذج التغذية الراجعة لتطوير المناهج</h1>
<p class="text-slate-500 dark:text-slate-400 text-base">جمع البيانات والتحليلات لتحسين المخرجات التعليمية بما يتوافق مع رؤية المملكة 2030</p>
</div>
<button class="bg-primary hover:bg-primary/90 text-white px-6 py-2.5 rounded-lg font-bold flex items-center gap-2 transition-all shadow-md">
<span class="material-symbols-outlined">save</span>
                        حفظ المسودة
                    </button>
</div>
<div class="h-1.5 w-full bg-slate-200 dark:bg-slate-800 rounded-full overflow-hidden">
<div class="h-full bg-primary w-1/2"></div>
</div>
<p class="text-xs text-primary mt-2 font-medium">تم إكمال 50% من النموذج</p>
</div>
<!-- Section 1: Labor Market Survey -->
<section class="bg-white dark:bg-background-dark/40 border border-slate-200 dark:border-slate-800 rounded-xl p-6 mb-8 shadow-sm">
<div class="flex items-center gap-3 mb-6 border-b border-slate-100 dark:border-slate-800 pb-4">
<div class="p-2 bg-primary/10 rounded-lg text-primary">
<span class="material-symbols-outlined">query_stats</span>
</div>
<div>
<h2 class="text-slate-900 dark:text-white text-xl font-bold">1. استطلاع رأي سوق العمل</h2>
<p class="text-slate-500 dark:text-slate-400 text-sm">تقييم مدى مواءمة المهارات الأكاديمية مع متطلبات الصناعة الحالية</p>
</div>
</div>
<div class="grid grid-cols-1 gap-8">
<!-- Q1 -->
<div class="space-y-4">
<label class="block text-sm font-bold text-slate-700 dark:text-slate-200">أ- كيف تقيم كفاية المهارات التقنية الحالية للخريجين في بيئة العمل؟</label>
<div class="grid grid-cols-2 sm:grid-cols-5 gap-3">
<button class="px-4 py-3 rounded-lg border border-slate-200 dark:border-slate-700 text-sm hover:border-primary transition-colors text-center">ضعيفة جداً</button>
<button class="px-4 py-3 rounded-lg border border-slate-200 dark:border-slate-700 text-sm hover:border-primary transition-colors text-center">بحاجة لتحسين</button>
<button class="px-4 py-3 rounded-lg border-2 border-primary bg-primary/5 text-primary text-sm font-bold text-center">مرضية</button>
<button class="px-4 py-3 rounded-lg border border-slate-200 dark:border-slate-700 text-sm hover:border-primary transition-colors text-center">جيدة</button>
<button class="px-4 py-3 rounded-lg border border-slate-200 dark:border-slate-700 text-sm hover:border-primary transition-colors text-center">ممتازة</button>
</div>
</div>
<!-- Q2 -->
<div class="space-y-4">
<label class="block text-sm font-bold text-slate-700 dark:text-slate-200">ب- ما هي الأدوات التقنية (Software/Tools) التي ترى ضرورة إدراجها في المنهج؟</label>
<div class="relative">
<textarea class="w-full rounded-xl border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-background-dark/60 focus:border-primary focus:ring-primary text-sm" placeholder="مثال: Python, AWS, Docker, BIM Tools..." rows="3"></textarea>
</div>
</div>
<!-- Q3 -->
<div class="space-y-4">
<label class="block text-sm font-bold text-slate-700 dark:text-slate-200">ج- المهارات الناعمة (Soft Skills) الأكثر طلباً في الصناعة حالياً:</label>
<div class="flex flex-wrap gap-4">
<label class="inline-flex items-center gap-2 cursor-pointer">
<input checked="" class="rounded border-slate-300 text-primary focus:ring-primary size-5" type="checkbox"/>
<span class="text-sm text-slate-600 dark:text-slate-300">حل المشكلات المعقدة</span>
</label>
<label class="inline-flex items-center gap-2 cursor-pointer">
<input checked="" class="rounded border-slate-300 text-primary focus:ring-primary size-5" type="checkbox"/>
<span class="text-sm text-slate-600 dark:text-slate-300">العمل الجماعي</span>
</label>
<label class="inline-flex items-center gap-2 cursor-pointer">
<input class="rounded border-slate-300 text-primary focus:ring-primary size-5" type="checkbox"/>
<span class="text-sm text-slate-600 dark:text-slate-300">القيادة الإدارية</span>
</label>
<label class="inline-flex items-center gap-2 cursor-pointer">
<input class="rounded border-slate-300 text-primary focus:ring-primary size-5" type="checkbox"/>
<span class="text-sm text-slate-600 dark:text-slate-300">التفكير النقدي</span>
</label>
</div>
</div>
</div>
</section>
<!-- Section 2: Learning Outcomes Assessment Report -->
<section class="bg-white dark:bg-background-dark/40 border border-slate-200 dark:border-slate-800 rounded-xl p-6 shadow-sm">
<div class="flex items-center gap-3 mb-6 border-b border-slate-100 dark:border-slate-800 pb-4">
<div class="p-2 bg-primary/10 rounded-lg text-primary">
<span class="material-symbols-outlined">table_chart</span>
</div>
<div>
<h2 class="text-slate-900 dark:text-white text-xl font-bold">2. تقرير تقييم مخرجات التعلم (CLOs)</h2>
<p class="text-slate-500 dark:text-slate-400 text-sm">مقارنة مخرجات التعلم مع مستوى التغطية الفعلي في المقررات الدراسية</p>
</div>
</div>
<div class="overflow-x-auto rounded-lg border border-slate-200 dark:border-slate-800">
<table class="w-full text-right border-collapse">
<thead>
<tr class="bg-slate-50 dark:bg-background-dark/80 text-slate-700 dark:text-slate-200">
<th class="px-4 py-4 text-sm font-bold border-b border-slate-200 dark:border-slate-800">المهارة / المخرج التعليمي</th>
<th class="px-4 py-4 text-sm font-bold border-b border-slate-200 dark:border-slate-800 text-center">الأهمية النسبية</th>
<th class="px-4 py-4 text-sm font-bold border-b border-slate-200 dark:border-slate-800 text-center">تغطية المنهج</th>
<th class="px-4 py-4 text-sm font-bold border-b border-slate-200 dark:border-slate-800 text-center">الإجراء التصحيحي</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-800">
<tr>
<td class="px-4 py-4 text-sm font-medium text-slate-900 dark:text-slate-100">تحليل وتصميم الأنظمة البرمجية</td>
<td class="px-4 py-4 text-center">
<span class="inline-flex px-2.5 py-1 rounded-full text-xs font-bold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400">عالية جداً</span>
</td>
<td class="px-4 py-4">
<div class="flex items-center justify-center gap-1">
<div class="size-2 bg-primary rounded-full"></div>
<div class="size-2 bg-primary rounded-full"></div>
<div class="size-2 bg-primary rounded-full"></div>
<div class="size-2 bg-slate-200 dark:bg-slate-700 rounded-full"></div>
<div class="size-2 bg-slate-200 dark:bg-slate-700 rounded-full"></div>
</div>
</td>
<td class="px-4 py-4 text-center">
<button class="text-primary text-xs font-bold hover:underline">إضافة مشروع عملي</button>
</td>
</tr>
<tr class="bg-slate-50/30 dark:bg-white/5">
<td class="px-4 py-4 text-sm font-medium text-slate-900 dark:text-slate-100">إدارة قواعد البيانات السحابية</td>
<td class="px-4 py-4 text-center">
<span class="inline-flex px-2.5 py-1 rounded-full text-xs font-bold bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400">متوسطة</span>
</td>
<td class="px-4 py-4">
<div class="flex items-center justify-center gap-1">
<div class="size-2 bg-primary rounded-full"></div>
<div class="size-2 bg-slate-200 dark:bg-slate-700 rounded-full"></div>
<div class="size-2 bg-slate-200 dark:bg-slate-700 rounded-full"></div>
<div class="size-2 bg-slate-200 dark:bg-slate-700 rounded-full"></div>
<div class="size-2 bg-slate-200 dark:bg-slate-700 rounded-full"></div>
</div>
</td>
<td class="px-4 py-4 text-center">
<button class="text-primary text-xs font-bold hover:underline">تحديث الوصف</button>
</td>
</tr>
<tr>
<td class="px-4 py-4 text-sm font-medium text-slate-900 dark:text-slate-100">الأمن السيبراني وحماية البيانات</td>
<td class="px-4 py-4 text-center">
<span class="inline-flex px-2.5 py-1 rounded-full text-xs font-bold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400">عالية جداً</span>
</td>
<td class="px-4 py-4">
<div class="flex items-center justify-center gap-1">
<div class="size-2 bg-primary rounded-full"></div>
<div class="size-2 bg-primary rounded-full"></div>
<div class="size-2 bg-primary rounded-full"></div>
<div class="size-2 bg-primary rounded-full"></div>
<div class="size-2 bg-primary rounded-full"></div>
</div>
</td>
<td class="px-4 py-4 text-center text-xs text-slate-400">لا يوجد</td>
</tr>
</tbody>
</table>
</div>
<div class="mt-6 flex justify-between items-center bg-slate-50 dark:bg-background-dark/60 p-4 rounded-lg">
<p class="text-sm text-slate-600 dark:text-slate-400">مجموع المخرجات المقيّمة: <span class="font-bold text-slate-900 dark:text-white">12 مخرج</span></p>
<button class="flex items-center gap-2 text-primary text-sm font-bold">
<span class="material-symbols-outlined text-sm">add_circle</span>
                        إضافة مخرج تعلم جديد
                    </button>
</div>
</section>
<!-- Footer Actions -->
<div class="mt-10 flex flex-col sm:flex-row items-center justify-end gap-4 border-t border-slate-200 dark:border-slate-800 pt-8">
<button class="w-full sm:w-auto px-8 py-3 rounded-lg text-slate-600 dark:text-slate-400 font-bold hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">إلغاء</button>
<button class="w-full sm:w-auto px-8 py-3 rounded-lg border-2 border-primary text-primary font-bold hover:bg-primary/5 transition-colors">معاينة التقرير النهائي</button>
<button class="w-full sm:w-auto px-10 py-3 rounded-lg bg-primary text-white font-bold shadow-lg shadow-primary/30 hover:shadow-primary/40 transition-all">إرسال للاعتماد</button>
</div>
</main>
</div>
<!-- Footer -->
<footer class="bg-white dark:bg-background-dark border-t border-slate-200 dark:border-slate-800 py-6 px-10 mt-auto">
<div class="flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-slate-500">
<p>© 2024 بوابة GTS الأكاديمية. جميع الحقوق محفوظة.</p>
<div class="flex gap-6">
<a class="hover:text-primary transition-colors" href="#">سياسة الخصوصية</a>
<a class="hover:text-primary transition-colors" href="#">الدعم الفني</a>
<a class="hover:text-primary transition-colors" href="#">دليل المستخدم</a>
</div>
</div>
</footer>
</div>
</body></html>