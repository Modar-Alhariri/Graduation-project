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
        body { font-family: 'Public Sans', sans-serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 transition-colors duration-200">
<div class="relative flex min-h-screen flex-col">
<!-- Top Navigation -->
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
<main class="flex-1 md:mr-64 px-4 sm:px-6 lg:px-8 py-6">

<div class="grid grid-cols-1 gap-8 lg:grid-cols-12">
<!-- Left Content: Applications Table -->
<div class="lg:col-span-8 space-y-6">
<div class="flex items-end justify-between">
<div>
<h1 class="text-3xl font-black tracking-tight text-slate-900 dark:text-slate-50">إدارة الطلبات</h1>
<p class="mt-2 text-slate-500 dark:text-slate-400">مراجعة وإدارة طلبات الخريجين المقدمة لشركتك</p>
</div>

</div>
<!-- Filters -->
<div class="flex gap-3 overflow-x-auto pb-2 scrollbar-hide">
<button class="flex shrink-0 items-center gap-2 rounded-xl bg-primary px-4 py-2 text-sm font-medium text-white">الكل</button>
<button class="flex shrink-0 items-center gap-2 rounded-xl bg-white dark:bg-primary/10 border border-primary/10 px-4 py-2 text-sm font-medium hover:bg-primary/5 transition-colors">قيد الانتظار</button>
<button class="flex shrink-0 items-center gap-2 rounded-xl bg-white dark:bg-primary/10 border border-primary/10 px-4 py-2 text-sm font-medium hover:bg-primary/5 transition-colors">مقبول</button>
<button class="flex shrink-0 items-center gap-2 rounded-xl bg-white dark:bg-primary/10 border border-primary/10 px-4 py-2 text-sm font-medium hover:bg-primary/5 transition-colors">مرفوض</button>
</div>
<!-- Table Card -->
<div class="overflow-hidden rounded-2xl border border-primary/10 bg-white dark:bg-background-dark shadow-sm">
<div class="overflow-x-auto">
<table class="w-full text-right border-collapse">
<thead class="bg-primary/5 dark:bg-primary/10">
<tr>
<th class="px-6 py-4 text-sm font-bold text-slate-600 dark:text-slate-300">اسم الخريج</th>
<th class="px-6 py-4 text-sm font-bold text-slate-600 dark:text-slate-300">الوظيفة</th>
<th class="px-6 py-4 text-sm font-bold text-slate-600 dark:text-slate-300 text-center">الحالة</th>
<th class="px-6 py-4 text-sm font-bold text-slate-600 dark:text-slate-300 text-center">إجراءات</th>
</tr>
</thead>
<tbody class="divide-y divide-primary/10 text-sm">
    <?php foreach($data["allApplications"] as $application): ?>
<tr class="group hover:bg-primary/5 transition-colors cursor-pointer bg-primary/2 ">
<td class="px-6 py-5">
<div class="flex items-center gap-3">
<div class="h-10 w-10 rounded-full bg-primary/20 flex items-center justify-center font-bold text-primary">أ</div>
<span class="text-sm font-semibold text-slate-900 dark:text-slate-100"> <?= $application->graduate_name ?></span>
</div>
</td>
<td class="px-6 py-5 text-sm text-slate-500 dark:text-slate-400 font-medium"> <?= $application->job_title ?></td>
<td class="px-6 py-5 text-center">
<span class="inline-flex items-center px-3 py-1 rounded-full bg-amber-100 text-amber-700 dark:bg-amber-900/30 dark:text-amber-400 text-xs font-bold"> <?= $application->status ?></span>
</td>
<td class="px-3 py-5 text-center  ">
    <!-- button to show details that send all application data as data parameters  -->
<button onclick="showDetails(this)"
data-graduate-name="<?= $application->graduate_name ?>"
data-graduate-email="<?= $application->graduate_email ?>"
data-graduate-phone="<?= $application->graduate_phone ?>"
data-graduate-cv="<?= $application->cv_link ?>"
class="text-slate-400 hover:text-primary transition-colors" title="عرض"><span class="material-symbols-outlined text-[20px]">visibility</span></button>
</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
</div>
</div>
<!-- Right Content: Detail View Sidebar hidden by default when show button is clicked right content shows -->

<div id="detailsPanel" class="hidden lg:col-span-4 space-y-6  transition-all duration-300">
<div class="sticky top-8 rounded-2xl border border-primary/10 bg-white dark:bg-primary/5 p-6 shadow-sm">
 <div class="flex justify-end mb-2">
    <button onclick="hideDetails()" class="text-sm text-red-500 hover:underline">
         <span class="material-symbols-outlined">close</span>
    </button>
</div>
<div class="flex flex-col items-center text-center">
<div class="relative mb-4">
<div class="h-24 w-24 rounded-full bg-primary/10 border-4 border-white dark:border-background-dark shadow-md overflow-hidden flex items-center justify-center">
<span class="material-symbols-outlined text-4xl text-primary">person</span>
</div>
<span class="absolute bottom-0 right-0 h-5 w-5 rounded-full border-2 border-white bg-emerald-500 dark:border-background-dark"></span>
</div>
<h2 id="gname" class="text-xl font-bold text-slate-900 dark:text-slate-50">أحمد الفارسي</h2>
<!-- <p class="text-sm font-medium text-primary">خريج جامعة الملك سعود</p> -->
</div>
<div class="mt-8 space-y-4">
<div class="rounded-xl bg-background-light dark:bg-background-dark/40 p-4">
<div class="flex items-center justify-between mb-2">
<div class="flex items-center gap-2 text-slate-600 dark:text-slate-400">
<span class="material-symbols-outlined text-sm">description</span>
<span class="text-xs font-bold uppercase tracking-wider">السيرة الذاتية</span>
</div>
<span class="text-[10px] text-slate-400">PDF • 1.2 MB</span>
</div>
<div class="flex gap-2">
<button id="gcv" class="flex-1 rounded-lg bg-white dark:bg-primary/20 border border-primary/10 py-2 text-xs font-bold text-slate-700 dark:text-slate-200 transition-colors hover:bg-primary/10">عرض الملف</button>
<button id="gcvdown" class="flex h-8 w-8 items-center justify-center rounded-lg bg-primary text-white shadow-sm transition-transform hover:scale-105">
<span class="material-symbols-outlined text-[18px]">download</span>
</button>
</div>
</div>
<div class="space-y-3 pt-2">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-slate-400 text-[18px]">mail</span>
<span class="text-sm font-medium" id="gemail"></span>
</div>
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-slate-400 text-[18px]">call</span>
<span class="text-sm font-medium" id="gphone"></span>
</div>

</div>
</div>
<div class="mt-8 border-t border-primary/10 pt-6">
<h3 class="mb-4 text-sm font-bold text-slate-900 dark:text-slate-100">الإجراءات</h3>
<div class="grid grid-cols-2 gap-3">
<button onclick="sendNotification()"
class="flex items-center justify-center gap-2 rounded-xl bg-emerald-600 py-3 text-sm font-bold text-white transition-opacity hover:opacity-90">
<span class="material-symbols-outlined text-[18px]">check_circle</span>
                                    قبول
                                </button>
<button class="flex items-center justify-center gap-2 rounded-xl bg-rose-600 py-3 text-sm font-bold text-white transition-opacity hover:opacity-90">
<span class="material-symbols-outlined text-[18px]">cancel</span>
                                    رفض
                                </button>
<button class="col-span-2 flex items-center justify-center gap-2 rounded-xl bg-primary/10 py-3 text-sm font-bold text-primary transition-colors hover:bg-primary/20">
<span class="material-symbols-outlined text-[18px]">send</span>
                                    إرسال رسالة للمرشح
                                </button>
</div>
</div>
</div>
</div>
</div>
</main>
<footer class="border-t border-primary/10 bg-white dark:bg-background-dark py-6 mt-auto">
<div class="mx-auto max-w-[1400px] px-6 lg:px-12 flex flex-col sm:flex-row items-center justify-between gap-4">
<p class="text-xs font-medium text-slate-500 dark:text-slate-400">© 2023 منصة GTS لإدارة التوظيف. جميع الحقوق محفوظة.</p>
<div class="flex gap-6">
<a class="text-xs font-bold text-slate-400 hover:text-primary transition-colors" href="#">اتفاقية الاستخدام</a>
<a class="text-xs font-bold text-slate-400 hover:text-primary transition-colors" href="#">سياسة الخصوصية</a>
<a class="text-xs font-bold text-slate-400 hover:text-primary transition-colors" href="#">الدعم الفني</a>
</div>
</div>
</footer>
</div>
<!-- script to active right content  -->
 <script>
function showDetails(btn) {
    document.getElementById("detailsPanel").classList.remove("hidden");
    document.getElementById("gname").innerText = btn.dataset.graduateName;
    document.getElementById("gemail").innerText= btn.dataset.graduateEmail;
    document.getElementById("gphone").innerText= btn.dataset.graduatePhone;
    let cvdownload =document.getElementById("gcvdown");
    cvdownload.value=btn.dataset.graduateCv;
    cvdownload.addEventListener("click",()=>{
        let link = cvdownload.value;  
        window.location.href = "<?= BASE_URL ?>" + link ;

    });
    let cv = document.getElementById("gcv");
    cv.value = btn.dataset.graduateCv;
    cv.addEventListener("click",()=>{
        let link = cv.value;  
    window.open("<?= BASE_URL ?>"+link, "_blank");
    });
}

function hideDetails() {
    document.getElementById("detailsPanel").classList.add("hidden");
}
</script>
<!-- hidden form to send notification for accepted graduate  -->
 
</body></html>