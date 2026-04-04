<!DOCTYPE html>

<html dir="rtl" lang="ar"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
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
        body {
            font-family: 'Public Sans', sans-serif;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-display transition-colors duration-300">
<div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
<!-- Header / Top Navigation -->
<header class="sticky top-0 z-50 w-full border-b border-slate-200 dark:border-slate-800 bg-white/80 dark:bg-background-dark/80 backdrop-blur-md">
<div class="mx-auto flex max-w-[1280px] items-center justify-between px-6 py-4">
<div class="flex items-center gap-4">
<div class="flex h-10 w-10 items-center justify-center rounded-xl bg-primary text-white">
<span class="material-symbols-outlined">school</span>
</div>
<div>
<h2 class="text-lg font-bold leading-tight tracking-tight">نظام تتبع الخريجين</h2>
<p class="text-xs text-slate-500 dark:text-slate-400">GTS Portal</p>
</div>
</div>
<nav class="hidden md:flex flex-1 justify-center gap-8">
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">لوحة القيادة</a>
<a class="text-sm font-bold text-primary border-b-2 border-primary pb-1" href="#">الوظائف</a>
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">طلباتي</a>
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">الملف الشخصي</a>
</nav>
<div class="flex items-center gap-3">
<button class="flex h-10 w-10 items-center justify-center rounded-xl bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 hover:bg-primary/10 hover:text-primary transition-all">
<span class="material-symbols-outlined">notifications</span>
</button>
<button class="flex items-center gap-2 rounded-xl bg-slate-100 dark:bg-slate-800 p-1 pl-3">
<div class="h-8 w-8 rounded-lg bg-primary/20 flex items-center justify-center">
<span class="material-symbols-outlined text-primary text-xl">person</span>
</div>
<span class="text-sm font-semibold hidden sm:inline">أحمد علي</span>
</button>
</div>
</div>
</header>
<main class="mx-auto w-full max-w-[1280px] flex-1 px-6 py-8">
<!-- Page Title & Hero -->
<div class="mb-10 flex flex-col gap-2">
<h1 class="text-4xl font-black tracking-tight text-slate-900 dark:text-white">فرص العمل والتدريب</h1>
<p class="text-slate-500 dark:text-slate-400">استكشف أحدث الوظائف المتاحة وتابع حالة طلباتك في مكان واحد.</p>
</div>
<!-- Search & Filters -->
<section class="mb-12 rounded-2xl bg-white dark:bg-slate-900/50 p-6 shadow-sm border border-slate-200 dark:border-slate-800">
<div class="grid grid-cols-1 md:grid-cols-12 gap-4">
<div class="md:col-span-6 relative">
<span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-slate-400">search</span>
<input class="w-full h-12 rounded-xl border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 pr-12 focus:border-primary focus:ring-primary text-sm" placeholder="ابحث عن مسمى وظيفي، مهارة، أو شركة..." type="text"/>
</div>
<div class="md:col-span-3">
<select class="w-full h-12 rounded-xl border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 focus:border-primary focus:ring-primary text-sm">
<option>نوع العمل (الكل)</option>
<option>دوام كامل</option>
<option>تدريب تعاوني</option>
<option>عن بعد</option>
</select>
</div>
<div class="md:col-span-3">
<button class="w-full h-12 rounded-xl bg-primary text-white font-bold hover:bg-primary/90 transition-all flex items-center justify-center gap-2">
<span class="material-symbols-outlined">filter_list</span>
                            بحث متقدم
                        </button>
</div>
</div>
<div class="mt-4 flex flex-wrap gap-2">
<span class="inline-flex items-center gap-1 rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold text-primary">
                        تقنية المعلومات <span class="material-symbols-outlined text-sm cursor-pointer">close</span>
</span>
<span class="inline-flex items-center gap-1 rounded-full bg-slate-100 dark:bg-slate-800 px-3 py-1 text-xs font-semibold">
                        الرياض <span class="material-symbols-outlined text-sm cursor-pointer">close</span>
</span>
<button class="text-xs text-slate-500 underline">مسح الكل</button>
</div>
</section>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
<!-- Jobs List -->
<div class="lg:col-span-2 flex flex-col gap-4">
<div class="flex items-center justify-between">
<h3 class="text-xl font-bold flex items-center gap-2">
<span class="material-symbols-outlined text-primary">work</span>
                            الوظائف المتاحة (24)
                        </h3>
</div>
<!-- Job Card 1 -->
<div class="group relative flex flex-col gap-4 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 p-5 hover:border-primary/50 transition-all shadow-sm">
<div class="flex items-start justify-between">
<div class="flex gap-4">
<div class="h-14 w-14 rounded-xl bg-slate-100 dark:bg-slate-800 flex items-center justify-center overflow-hidden">
<img alt="" class="h-10 w-10" data-alt="Company logo for STC" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCXCbxdG-oi4Et6jG5moHdKSv_UJMw9E8KoPDZ8YGeCO7cRzAdErhXCBFwZ20aZ4SPc27Meilkm3zn2SOgl369RJrLRlwlIU2hvHTPa58cnI0SOwiNsq4CSyE3gwg0z8zPNDcSLKmfqH1MktY2ta_zAVwWRskDadR0cAVY-J24R1wLo0J83VqAo8kiIxsORzXdiZPgju9I_lizImAewNccmBOJ2gDw7FOHsmZKTCUPtUo7dIXAFJvl-WyAPfV6QmZt1-rzt2ZITcOE"/>
</div>
<div>
<h4 class="text-lg font-bold group-hover:text-primary transition-colors">مطور واجهات أمامية (React)</h4>
<p class="text-sm text-slate-500">شركة الاتصالات السعودية (STC) • الرياض</p>
</div>
</div>
<span class="rounded-lg bg-green-100 dark:bg-green-900/30 px-3 py-1 text-xs font-bold text-green-700 dark:text-green-400">دوام كامل</span>
</div>
<div class="flex items-center justify-between mt-2 border-t border-slate-100 dark:border-slate-800 pt-4">
<div class="flex gap-4 text-xs text-slate-500">
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-sm">schedule</span> منذ يومين</span>
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-sm">groups</span> +50 متقدم</span>
</div>
<div class="flex gap-2">
<button class="rounded-lg border border-slate-200 dark:border-slate-700 px-4 py-2 text-sm font-semibold hover:bg-slate-50 dark:hover:bg-slate-800">التفاصيل</button>
<button class="rounded-lg bg-primary px-4 py-2 text-sm font-bold text-white hover:bg-primary/90">قدم الآن</button>
</div>
</div>
</div>
<!-- Job Card 2 -->
<div class="group relative flex flex-col gap-4 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 p-5 hover:border-primary/50 transition-all shadow-sm">
<div class="flex items-start justify-between">
<div class="flex gap-4">
<div class="h-14 w-14 rounded-xl bg-slate-100 dark:bg-slate-800 flex items-center justify-center overflow-hidden">
<img alt="" class="h-10 w-10" data-alt="Company logo for Aramco" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDb-w1Ch5bWzFOOsm-Nb6bkHzL6SQo5KkSfeDa5Ei7fEN6L9BAe5sKvvDaMPjS_Sb1fHm_-tPWLD3WK4JcA5RcxHT1WU1wg0RA65ahLi4slw9h3tpbOkZB0VQZbNeuVHQbiqEOIa1s3jX-oWylCNkeCL9z__RjGL-jD5qyqCmU3IXLkVDqyYH_n6J88fr8DQPUST3sfrMav7mLC6ot_r50iVPHnBLT4W_20NU0UzbfuSdp8-2quxnX0defrFRchTdVxRhkazAmbiF8"/>
</div>
<div>
<h4 class="text-lg font-bold group-hover:text-primary transition-colors">محلل بيانات ناشئ</h4>
<p class="text-sm text-slate-500">أرامكو السعودية • الظهران</p>
</div>
</div>
<span class="rounded-lg bg-blue-100 dark:bg-blue-900/30 px-3 py-1 text-xs font-bold text-blue-700 dark:text-blue-400">تدريب تعاوني</span>
</div>
<div class="flex items-center justify-between mt-2 border-t border-slate-100 dark:border-slate-800 pt-4">
<div class="flex gap-4 text-xs text-slate-500">
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-sm">schedule</span> منذ 5 ساعات</span>
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-sm">groups</span> 12 متقدم</span>
</div>
<div class="flex gap-2">
<button class="rounded-lg border border-slate-200 dark:border-slate-700 px-4 py-2 text-sm font-semibold hover:bg-slate-50 dark:hover:bg-slate-800">التفاصيل</button>
<button class="rounded-lg bg-primary px-4 py-2 text-sm font-bold text-white hover:bg-primary/90">قدم الآن</button>
</div>
</div>
</div>
<!-- Job Card 3 -->
<div class="group relative flex flex-col gap-4 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 p-5 hover:border-primary/50 transition-all shadow-sm">
<div class="flex items-start justify-between">
<div class="flex gap-4">
<div class="h-14 w-14 rounded-xl bg-slate-100 dark:bg-slate-800 flex items-center justify-center overflow-hidden">
<img alt="" class="h-10 w-10" data-alt="Company logo for SDAIA" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAfqhl5R22HouFh_esRzrlc98W6tKdxQqYLUvEHLTxEdahnjeOoPCEgNMLaR3yoi3u-3SKhf4ICXFO13aetqiJNZdnc3bjSynlZIjnAZpbjmVZqyKf3c5x75x1SicRcVl-NwQ2hHA1wFBZ50-dz6lm97Spw4ohlc2tD4asaw0vpDxRpHaCcGF6AKy84Jp19hX5_BQLEM6Pm3dz53HnINhmy_yfftr-4Af_3H2uxULTn5o5Fm4NWG8IDUllCqsGF51h0isn5PDz12es"/>
</div>
<div>
<h4 class="text-lg font-bold group-hover:text-primary transition-colors">مهندس أمن سيبراني</h4>
<p class="text-sm text-slate-500">سدايا (SDAIA) • عن بعد</p>
</div>
</div>
<span class="rounded-lg bg-purple-100 dark:bg-purple-900/30 px-3 py-1 text-xs font-bold text-purple-700 dark:text-purple-400">عن بعد</span>
</div>
<div class="flex items-center justify-between mt-2 border-t border-slate-100 dark:border-slate-800 pt-4">
<div class="flex gap-4 text-xs text-slate-500">
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-sm">schedule</span> أسبوع مضى</span>
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-sm">groups</span> +100 متقدم</span>
</div>
<div class="flex gap-2">
<button class="rounded-lg border border-slate-200 dark:border-slate-700 px-4 py-2 text-sm font-semibold hover:bg-slate-50 dark:hover:bg-slate-800">التفاصيل</button>
<button class="rounded-lg bg-primary px-4 py-2 text-sm font-bold text-white hover:bg-primary/90">قدم الآن</button>
</div>
</div>
</div>
</div>
<!-- Applications Sidebar -->
<div class="flex flex-col gap-4">
<h3 class="text-xl font-bold flex items-center gap-2">
<span class="material-symbols-outlined text-primary">assignment</span>
                        طلباتي الأخيرة
                    </h3>
<div class="rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 overflow-hidden shadow-sm">
<div class="overflow-x-auto">
<table class="w-full text-right text-sm">
<thead class="bg-slate-50 dark:bg-slate-800 text-slate-600 dark:text-slate-400 font-bold">
<tr>
<th class="px-4 py-3">الوظيفة</th>
<th class="px-4 py-3">الحالة</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-800">
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/50">
<td class="px-4 py-4">
<div class="font-bold">مصمم واجهات</div>
<div class="text-xs text-slate-500">شركة علم • 12 أكتوبر</div>
</td>
<td class="px-4 py-4">
<span class="inline-flex items-center gap-1 rounded-full bg-yellow-100 dark:bg-yellow-900/30 px-2 py-0.5 text-[10px] font-bold text-yellow-700 dark:text-yellow-400 uppercase">قيد المراجعة</span>
</td>
</tr>
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/50">
<td class="px-4 py-4">
<div class="font-bold">مطور بايثون</div>
<div class="text-xs text-slate-500">البنك الأهلي • 05 أكتوبر</div>
</td>
<td class="px-4 py-4">
<span class="inline-flex items-center gap-1 rounded-full bg-green-100 dark:bg-green-900/30 px-2 py-0.5 text-[10px] font-bold text-green-700 dark:text-green-400 uppercase">تم القبول</span>
</td>
</tr>
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/50">
<td class="px-4 py-4">
<div class="font-bold">محلل أمن</div>
<div class="text-xs text-slate-500">نيوم • 28 سبتمبر</div>
</td>
<td class="px-4 py-4">
<span class="inline-flex items-center gap-1 rounded-full bg-red-100 dark:bg-red-900/30 px-2 py-0.5 text-[10px] font-bold text-red-700 dark:text-red-400 uppercase">مرفوض</span>
</td>
</tr>
</tbody>
</table>
</div>
<div class="p-4 bg-slate-50 dark:bg-slate-800/50 border-t border-slate-100 dark:border-slate-800">
<a class="text-xs font-bold text-primary flex items-center justify-center gap-1" href="#">عرض كل الطلبات <span class="material-symbols-outlined text-sm">arrow_back</span></a>
</div>
</div>
<!-- Quick Stats -->
<div class="rounded-2xl bg-primary/10 border border-primary/20 p-6">
<h4 class="font-bold text-primary mb-4">نصيحة المهنة</h4>
<p class="text-sm text-slate-700 dark:text-slate-300 leading-relaxed">
                            تأكد من تحديث مهاراتك في "React" و "Tailwind CSS" لزيادة فرصك في القبول بنسبة 40% في الوظائف التقنية الحالية.
                        </p>
<button class="mt-4 text-sm font-bold text-primary underline">اقرأ المزيد</button>
</div>
</div>
</div>
</main>
<!-- Simple Footer -->
<footer class="mt-auto border-t border-slate-200 dark:border-slate-800 py-6">
<div class="mx-auto max-w-[1280px] px-6 flex flex-col md:flex-row justify-between items-center gap-4">
<p class="text-sm text-slate-500">© 2024 نظام تتبع الخريجين. جميع الحقوق محفوظة.</p>
<div class="flex gap-6">
<a class="text-xs text-slate-500 hover:text-primary" href="#">سياسة الخصوصية</a>
<a class="text-xs text-slate-500 hover:text-primary" href="#">الشروط والأحكام</a>
<a class="text-xs text-slate-500 hover:text-primary" href="#">اتصل بنا</a>
</div>
</div>
</footer>
</div>
</body></html>