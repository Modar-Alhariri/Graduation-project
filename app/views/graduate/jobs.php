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
<!-- Main Content -->
<main class="flex-1 md:mr-64 px-4 sm:px-6 lg:px-8 py-6">

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
                            الوظائف المتاحة 
                        </h3>
</div>
<?php foreach($jobs as $job): ?>
<!-- Job Card 1 -->
<div class="group relative flex flex-col gap-4 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 p-5 hover:border-primary/50 transition-all shadow-sm">
<div class="flex items-start justify-between">
<div class="flex gap-4">
<div class="h-14 w-14 rounded-xl bg-slate-100 dark:bg-slate-800 flex items-center justify-center overflow-hidden">
<img alt="" class="h-10 w-10" data-alt="Company logo for STC" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCXCbxdG-oi4Et6jG5moHdKSv_UJMw9E8KoPDZ8YGeCO7cRzAdErhXCBFwZ20aZ4SPc27Meilkm3zn2SOgl369RJrLRlwlIU2hvHTPa58cnI0SOwiNsq4CSyE3gwg0z8zPNDcSLKmfqH1MktY2ta_zAVwWRskDadR0cAVY-J24R1wLo0J83VqAo8kiIxsORzXdiZPgju9I_lizImAewNccmBOJ2gDw7FOHsmZKTCUPtUo7dIXAFJvl-WyAPfV6QmZt1-rzt2ZITcOE"/>
</div>
<div>
<h4 class="text-lg font-bold group-hover:text-primary transition-colors"><?= $job->title ?></h4>
<p class="text-sm text-slate-500"><?= $job->location ?></p>
</div>
</div>
<span class="rounded-lg bg-green-100 dark:bg-green-900/30 px-3 py-1 text-xs font-bold text-green-700 dark:text-green-400"><?= $job->job_type ?></span>
</div>
<div class="flex items-center justify-between mt-2 border-t border-slate-100 dark:border-slate-800 pt-4">
<div class="flex gap-4 text-xs text-slate-500">
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-sm">schedule</span>$<?= $job->deadline ?></span>
</div>
<div class="flex gap-2">
<button 
onclick="openJobModal(this)"
data-id="<?= $job->id ?>"
data-title="<?= htmlspecialchars($job->title) ?>"
data-location="<?= htmlspecialchars($job->location) ?>"
data-description="<?= htmlspecialchars($job->description ?? '') ?>"
data-Jobtype="<?= htmlspecialchars($job->job_type) ?>"
data-salary="<?= htmlspecialchars($job->salary ?? '') ?>"
data-deadline="<?= htmlspecialchars($job->deadline) ?>"
class="rounded-lg border border-slate-200 dark:border-slate-700 px-4 py-2 text-sm font-semibold hover:bg-slate-50 dark:hover:bg-slate-800">
التفاصيل
</button>
<button
onclick="toggleApplyForm(this)"
data-id="<?= $job->id ?>"
data-graduate="<?= $_SESSION['graduate_id'] ?>"
data-company="<?= $job->company_id ?>"
 class="rounded-lg bg-primary px-4 py-2 text-sm font-bold text-white hover:bg-primary/90">قدم الآن</button>
</div>
</div>
</div>
<?php endforeach; ?>
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
<?php foreach($myapplications as $application): ?>
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/50">
<td class="px-4 py-4">
<div class="font-bold"><?= $application->job_title ?></div>
<div class="text-xs text-slate-500"> <?= $application->company_name ?> . <?= $application->applied_at ?></div>
</td>
<td class="px-4 py-4">
<span class="inline-flex items-center gap-1 rounded-full bg-yellow-100 dark:bg-yellow-900/30 px-2 py-0.5 text-[10px] font-bold text-yellow-700 dark:text-yellow-400 uppercase">قيد المراجعة</span>
</td>
</tr>
<?php endforeach; ?>
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
<!-- script to activate toogle button  -->
<script>
  function toggleSidebar() {
        const sidebar = document.getElementById("sidebar");
        sidebar.classList.toggle("translate-x-full");
    }
</script>
<!-- hidden model for showing job details -->
 <div id="jobDetailsModal"
     class="fixed inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center hidden z-50">

    <div class="bg-white dark:bg-slate-900 rounded-2xl w-full max-w-xl shadow-2xl p-6 animate-fadeIn">

        <!-- Header -->
        <div class="flex items-start justify-between mb-4">
            <h2 id="modalTitle"
                class="text-2xl font-extrabold text-slate-900 dark:text-white"></h2>

            <button onclick="closeModal()"
                    class="text-slate-400 hover:text-red-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg p-1 transition">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>

        <!-- Description -->
        <div class="mb-6">
            <h3 class="text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">
                وصف الوظيفة
            </h3>
            <p id="modalDescription"
               class="text-sm text-slate-600 dark:text-slate-300 leading-relaxed"></p>
        </div>

        <!-- Details Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">

            <!-- Salary -->
            <div class="p-3 rounded-xl bg-slate-50 dark:bg-slate-800">
                <div class="text-xs text-slate-500 flex items-center gap-1">
                    <span class="material-symbols-outlined text-sm">payments</span>
                    الراتب
                </div>
                <div id="modalSalary"
                     class="text-sm font-bold text-slate-900 dark:text-white mt-1"></div>
            </div>

            <!-- Job Type -->
            <div class="p-3 rounded-xl bg-slate-50 dark:bg-slate-800">
                <div class="text-xs text-slate-500 flex items-center gap-1">
                    <span class="material-symbols-outlined text-sm">work</span>
                    نوع الوظيفة
                </div>

                <span id="modalType"
                      class="inline-block mt-2 bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 px-3 py-1 rounded-full text-xs font-bold">
                </span>
            </div>

            <!-- Location -->
            <div class="p-3 rounded-xl bg-slate-50 dark:bg-slate-800">
                <div class="text-xs text-slate-500 flex items-center gap-1">
                    <span class="material-symbols-outlined text-sm">location_on</span>
                    الموقع
                </div>
                <div id="modalLocation"
                     class="text-sm font-bold text-slate-900 dark:text-white mt-1"></div>
            </div>

            <!-- Deadline -->
            <div class="p-3 rounded-xl bg-slate-50 dark:bg-slate-800">
                <div class="text-xs text-slate-500 flex items-center gap-1">
                    <span class="material-symbols-outlined text-sm">schedule</span>
                    آخر موعد
                </div>
                <div id="modalDeadline"
                     class="text-sm font-bold text-slate-900 dark:text-white mt-1"></div>
            </div>

        </div>

        <!-- Actions -->
        <div class="flex gap-3">

            <!-- Apply -->
            <button type="button"
                    onclick="toggleApplyForm(this)"
                    data-id="<?= $job->id ?>"
                    data-graduate="<?= $_SESSION['graduate_id'] ?>"
                    data-company="<?= $job->company_id ?>"
                    class="flex-1 bg-primary text-white py-2 rounded-lg font-bold hover:bg-primary/90 transition flex items-center justify-center gap-2">
                <span class="material-symbols-outlined text-sm">send</span>
                قدم الآن
            </button>

            <!-- Cancel -->
            <button onclick="closeModal()"
                    class="flex-1 border border-slate-200 dark:border-slate-700 py-2 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800 transition">
                إلغاء
            </button>

        </div>

    </div>
</div>

 <!--script to avtivate showing job details model  -->
<script>
function openJobModal(button) {
    const modal = document.getElementById('jobDetailsModal');

    const title = button.dataset.title || '';
    const location = button.dataset.location || '';
    const description = button.dataset.description || '';
    const jobId = button.dataset.id || '';
    const jobType = button.dataset.jobtype || '';
    const salary = button.dataset.salary || '';
    const deadline = button.dataset.deadline || '';

    // تعبئة البيانات
    document.getElementById('modalTitle').textContent = title;
    document.getElementById('modalLocation').textContent = location;
    document.getElementById('modalDescription').textContent = description;
    document.getElementById('modalType').textContent = jobType;
    document.getElementById('modalSalary').textContent = salary;
    document.getElementById('modalDeadline').textContent = deadline;

    // مهم: لو عندك input hidden لازم يكون موجود
    const jobInput = document.getElementById('modalJobId');
    if (jobInput) {
        jobInput.value = jobId;
    }

    modal.classList.remove('hidden');
}

function closeModal() {
    document.getElementById('jobDetailsModal').classList.add('hidden');
}

// إغلاق عند الضغط خارج المودال (نسخة آمنة)
document.addEventListener('click', function (e) {
    const modal = document.getElementById('jobDetailsModal');

    if (e.target === modal) {
        closeModal();
    }
});
</script>
<!-- for upload cv  -->
 <div id="applyForm"
     class="fixed inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center hidden z-50">

    <form method="POST"
          action="<?= BASE_URL ?>Graduate/apply"
          enctype="multipart/form-data"
          class="space-y-4 bg-white dark:bg-slate-900 rounded-2xl p-6 w-full max-w-md shadow-lg">

        <!-- Job ID (يتم تعبئته من JS) -->
        <input type="hidden" name="job_id" id="applyJobId">

        <!-- Graduate ID -->
        <input type="hidden" name="graduate_id" id="applyGraduateId"
               value="<?= $_SESSION['graduate_id'] ?>">

        <!-- Company ID (يتم تعبئته من JS) -->
        <input type="hidden" name="company_id" id="applyCompanyId">

        <!-- CV Options -->
        <div>
            <label class="block font-bold mb-2">اختر السيرة الذاتية</label>

            <!-- profile CV -->
            <label class="flex items-center gap-2 cursor-pointer mb-2">
                <input type="radio" name="cv_option" value="profile" checked onchange="toggleCVInput()">
                <span>استخدام CV من ملفي</span>
            </label>

            <!-- upload CV -->
            <label class="flex items-center gap-2 cursor-pointer">
                <input type="radio" name="cv_option" value="upload" onchange="toggleCVInput()">
                <span>رفع CV من الجهاز</span>
            </label>

            <!-- file input -->
            <div id="cvFileInput" class="hidden mt-3">
                <input type="file"
                       name="cv_file"
                       accept="application/pdf"
                       class="block w-full border p-2 rounded-lg">
            </div>
        </div>

        <!-- Submit -->
        <button type="submit"
                class="w-full bg-green-600 text-white px-4 py-2 rounded-xl hover:opacity-90">
            إرسال الطلب
        </button>

    </form>
</div>
<!-- script for handling CV upload -->
<script>
function toggleApplyForm(btn) {
    const form = document.getElementById("applyForm");

    // فتح/إغلاق
    form.classList.toggle("hidden");

    // إذا تم فتحه من زر وظيفة
    if (btn) {
        const jobId = btn.dataset.id || '';
        const companyId = btn.dataset.company || '';
        const graduateId = btn.dataset.graduate || '';

        document.getElementById("applyJobId").value = jobId;
        document.getElementById("applyCompanyId").value = companyId;
        document.getElementById("applyGraduateId").value = graduateId;
    }
}

function toggleCVInput() {
    const selected = document.querySelector('input[name="cv_option"]:checked');
    const fileInput = document.getElementById("cvFileInput");

    if (!selected) return;

    if (selected.value === "upload") {
        fileInput.classList.remove("hidden");
    } else {
        fileInput.classList.add("hidden");
    }
}

// إغلاق عند الضغط خارج الفورم (آمن)
document.addEventListener("click", function (e) {
    const modal = document.getElementById("applyForm");

    if (e.target === modal) {
        modal.classList.add("hidden");
    }
});
</script>
</body></html>
