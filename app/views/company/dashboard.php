<!DOCTYPE html>

<html dir="rtl" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>GTS Dashboard - Company Overview</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
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
                        "display": ["Public Sans"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        body {
            font-family: "Public Sans", sans-serif;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 antialiased">
<div class="relative flex h-auto min-h-screen w-full flex-row overflow-x-hidden">
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
<div class="p-8 space-y-8 max-w-[1400px] mx-auto w-full">
<div class="flex flex-col gap-2">
<h1 class="text-3xl font-black text-slate-900 dark:text-white tracking-tight">لوحة تحكم الشركة</h1>
<p class="text-slate-500 dark:text-slate-400">مرحباً بك مجدداً، إليك ملخص نشاط GTS لهذا اليوم.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<div class="p-6 bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col gap-3">
<div class="flex justify-between items-start">
<span class="text-slate-500 text-sm font-medium">الوظائف المنشورة</span>
<div class="p-2 bg-primary/10 rounded-lg text-primary">
<span class="material-symbols-outlined">work</span>
</div>
</div>
<div class="flex items-baseline gap-2">
<span class="text-3xl font-bold">124</span>
<span class="text-emerald-500 text-xs font-bold">+12%</span>
</div>
</div>
<div class="p-6 bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col gap-3">
<div class="flex justify-between items-start">
<span class="text-slate-500 text-sm font-medium">إجمالي المتقدمين</span>
<div class="p-2 bg-blue-100 dark:bg-blue-900/30 rounded-lg text-blue-600 dark:text-blue-400">
<span class="material-symbols-outlined">groups</span>
</div>
</div>
<div class="flex items-baseline gap-2">
<span class="text-3xl font-bold">3,850</span>
<span class="text-rose-500 text-xs font-bold">-5%</span>
</div>
</div>
<div class="p-6 bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col gap-3">
<div class="flex justify-between items-start">
<span class="text-slate-500 text-sm font-medium">الطلبات المقبولة</span>
<div class="p-2 bg-emerald-100 dark:bg-emerald-900/30 rounded-lg text-emerald-600 dark:text-emerald-400">
<span class="material-symbols-outlined">check_circle</span>
</div>
</div>
<div class="flex items-baseline gap-2">
<span class="text-3xl font-bold">420</span>
<span class="text-emerald-500 text-xs font-bold">+18%</span>
</div>
</div>
<div class="p-6 bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col gap-3">
<div class="flex justify-between items-start">
<span class="text-slate-500 text-sm font-medium">الطلبات المرفوضة</span>
<div class="p-2 bg-rose-100 dark:bg-rose-900/30 rounded-lg text-rose-600 dark:text-rose-400">
<span class="material-symbols-outlined">cancel</span>
</div>
</div>
<div class="flex items-baseline gap-2">
<span class="text-3xl font-bold">1,150</span>
<span class="text-emerald-500 text-xs font-bold">+2%</span>
</div>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
<div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden flex flex-col">
<div class="p-6 border-b border-slate-200 dark:border-slate-800 flex justify-between items-center">
<h3 class="text-lg font-bold">آخر المتقدمين</h3>
<button class="text-primary text-sm font-bold hover:underline">عرض الكل</button>
</div>
<div class="overflow-x-auto">
<table class="w-full text-right border-collapse">
<thead class="bg-slate-50 dark:bg-slate-800/50">
<tr>
<th class="px-6 py-4 text-slate-500 text-sm font-semibold">الخريج</th>
<th class="px-6 py-4 text-slate-500 text-sm font-semibold">الوظيفة</th>
<th class="px-6 py-4 text-slate-500 text-sm font-semibold">الحالة</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-800">
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-8 rounded-full bg-slate-200 bg-cover" data-alt="Applicant portrait" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA97KVThHBcmABTEo9f17WvFBpEvRCTBa5WiRc8EzLfWZzSe7L2_CJBdyyd-cDgHFh-GS20wRrgTEu_en6AgPISJanwk3Mym0LHyORGvX3Q_J6SBDmlpsH82HoLZni3brB31Qtl6s_SZo0vzmkCvSE4Yc5Cp0zpoX8MoWfoJnm3jS50OQVH87ffQYsnAI-xfDjS1q2pd9-nV8Q5DgxTtI-roGLfc3BMC7ToecUTo8v6uW6hyB5Hq8X8aCgUx_-P_asZVrf7D2sp9-g')"></div>
<span class="font-medium text-sm">أحمد علي</span>
</div>
</td>
<td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">مهندس برمجيات</td>
<td class="px-6 py-4">
<span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/40 text-blue-600 dark:text-blue-400 text-xs font-bold rounded-full">قيد المراجعة</span>
</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-8 rounded-full bg-slate-200 bg-cover" data-alt="Applicant portrait" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCu7pJvwHS1EaVFuToRXPKME8X6gBPVSJI3PFg0vfwC-ii8D3kUGsVmF1vLsa6EjCVeDOY_frfc4i8oXmxemTGdwkwd6lQ4ddoFCkChr3DLTSeS5K57xBz6oW7c0xZ1w6csABIurHVzbXzCmH8IKcMM3mSTyEkPtfhT_FJZJnjScI4yLGX8PLTQSK4B44o5Mi8OZ7pB_RqlMiWgCUGW3WwSrywtHtFl_IcEL-YEGmlA8f-uunSf5W3DplwuNBrhFqpCUR9edKmBVfI')"></div>
<span class="font-medium text-sm">سارة خالد</span>
</div>
</td>
<td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">مصمم واجهات</td>
<td class="px-6 py-4">
<span class="px-3 py-1 bg-emerald-100 dark:bg-emerald-900/40 text-emerald-600 dark:text-emerald-400 text-xs font-bold rounded-full">مقبول</span>
</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-8 rounded-full bg-slate-200 bg-cover" data-alt="Applicant portrait" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBOt2-2FsSgGJ38aNlYE4qqTo1P894WgoEpTlJDsaE1H79v820grItHNeDIt_OORYStjq9u8XHz_XDxT_fIZbqRZFDHa4kcnr6mqHvVPZHzmYlL7fAzHDRPmi90om3-DKoMVJZF8v6G4AFnSsIUDx9ZXnI38lvKCVLaGqXQzoSy7J2AWcgeiaMI0VjdN086vh5ufvNdljDqM4VphbnhDJQxEOM_362oPdDZn5MRB2SwVBjvZ9LEDwCxSnegRYfIOVRMri1uWr3wENU')"></div>
<span class="font-medium text-sm">محمد حسن</span>
</div>
</td>
<td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">محلل بيانات</td>
<td class="px-6 py-4">
<span class="px-3 py-1 bg-rose-100 dark:bg-rose-900/40 text-rose-600 dark:text-rose-400 text-xs font-bold rounded-full">مرفوض</span>
</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-8 rounded-full bg-slate-200 bg-cover" data-alt="Applicant portrait" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBGg0L-PD1zDgaHVNkMVsQB76OJ72mNUTVX90VpfuQ1i-3EeFd5PdA4J5QIslYXp1FJWabGgcGNX2BNupmb1JVWhuYTJZoE4XhJI3-2V6qS_4HkOuP0kys0l0PlMPG4qq-43gsrXjYiBiNVIz7ZPK4hucotmpgFX0eH1QkeZgK_LKR1YpIt1dLNB07A8EaBVXxKoQ8w9uFmKwiqvPt6CF6jibC7WNeEBF-r6hn7eYpMoqp-KYC0xsU4Ks2G6wpcVr9isiM2rmcFJo0')"></div>
<span class="font-medium text-sm">ليلى إبراهيم</span>
</div>
</td>
<td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">مدير مشروع</td>
<td class="px-6 py-4">
<span class="px-3 py-1 bg-amber-100 dark:bg-amber-900/40 text-amber-600 dark:text-amber-400 text-xs font-bold rounded-full">مقابلة</span>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden flex flex-col">
<div class="p-6 border-b border-slate-200 dark:border-slate-800 flex justify-between items-center">
<h3 class="text-lg font-bold">آخر الوظائف المنشورة</h3>
<button class="bg-primary text-white px-4 py-2 rounded-lg text-sm font-bold flex items-center gap-2">
<span class="material-symbols-outlined text-[18px]">add</span>
                                وظيفة جديدة
                            </button>
</div>
<div class="overflow-x-auto">
<table class="w-full text-right border-collapse">
<thead class="bg-slate-50 dark:bg-slate-800/50">
<tr>
<th class="px-6 py-4 text-slate-500 text-sm font-semibold">مسمى الوظيفة</th>
<th class="px-6 py-4 text-slate-500 text-sm font-semibold">المتقدمين</th>
<th class="px-6 py-4 text-slate-500 text-sm font-semibold">تاريخ النشر</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-800">
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
<td class="px-6 py-4 font-medium text-sm">مطور Flutter سينيور</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<span class="text-sm font-bold text-slate-700 dark:text-slate-200">86</span>
<div class="w-16 h-1.5 bg-slate-100 dark:bg-slate-700 rounded-full overflow-hidden">
<div class="h-full bg-primary" style="width: 70%"></div>
</div>
</div>
</td>
<td class="px-6 py-4 text-sm text-slate-500">12 أكتوبر 2023</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
<td class="px-6 py-4 font-medium text-sm">مصمم جرافيك</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<span class="text-sm font-bold text-slate-700 dark:text-slate-200">142</span>
<div class="w-16 h-1.5 bg-slate-100 dark:bg-slate-700 rounded-full overflow-hidden">
<div class="h-full bg-primary" style="width: 95%"></div>
</div>
</div>
</td>
<td class="px-6 py-4 text-sm text-slate-500">10 أكتوبر 2023</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
<td class="px-6 py-4 font-medium text-sm">مسؤول تسويق رقمي</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<span class="text-sm font-bold text-slate-700 dark:text-slate-200">54</span>
<div class="w-16 h-1.5 bg-slate-100 dark:bg-slate-700 rounded-full overflow-hidden">
<div class="h-full bg-primary" style="width: 45%"></div>
</div>
</div>
</td>
<td class="px-6 py-4 text-sm text-slate-500">08 أكتوبر 2023</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
<td class="px-6 py-4 font-medium text-sm">مدير مبيعات</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<span class="text-sm font-bold text-slate-700 dark:text-slate-200">28</span>
<div class="w-16 h-1.5 bg-slate-100 dark:bg-slate-700 rounded-full overflow-hidden">
<div class="h-full bg-primary" style="width: 25%"></div>
</div>
</div>
</td>
<td class="px-6 py-4 text-sm text-slate-500">05 أكتوبر 2023</td>
</tr>
</tbody>
</table>
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