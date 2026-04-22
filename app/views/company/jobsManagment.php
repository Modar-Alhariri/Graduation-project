<?php if(isset($_SESSION['flash_success'])): ?>
<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
    <?= $_SESSION['flash_success']; unset($_SESSION['flash_success']); ?>
</div>
<?php elseif(isset($_SESSION['flash_error'])): ?>
<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
    <?= $_SESSION['flash_error']; unset($_SESSION['flash_error']); ?>
</div>
<?php endif; ?>
<!DOCTYPE html>
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
<p class="text-slate-900 dark:text-white text-3xl font-bold"><?= $activeJobs ?></p>

</div>
<div class="flex flex-col gap-3 rounded-xl p-6 bg-white dark:bg-slate-800/40 border border-slate-200 dark:border-slate-700 shadow-sm">
<div class="flex justify-between items-start">
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">إجمالي المتقدمين</p>
<span class="p-2 bg-blue-500/10 text-blue-500 rounded-lg material-symbols-outlined">groups</span>
</div>
<p class="text-slate-900 dark:text-white text-3xl font-bold"><?= $allApplications ?></p>
</div>
<div class="flex flex-col gap-3 rounded-xl p-6 bg-white dark:bg-slate-800/40 border border-slate-200 dark:border-slate-700 shadow-sm">
<div class="flex justify-between items-start">
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">مراجعات معلقة</p>
<span class="p-2 bg-amber-500/10 text-amber-500 rounded-lg material-symbols-outlined">pending_actions</span>
</div>
<p class="text-slate-900 dark:text-white text-3xl font-bold"><?= $jobsHoldingApplications ?></p>
</div>
</div>
<!-- Jobs Table Section -->
<div class="bg-white dark:bg-slate-800/20 rounded-xl border border-slate-200 dark:border-slate-700 overflow-hidden shadow-sm mb-12">
<div class="overflow-x-auto">
<table class="w-full text-right">
<thead>
<tr class="bg-slate-50 dark:bg-slate-800/60 border-b border-slate-200 dark:border-slate-700">
<th class="px-6 py-4 text-slate-600 dark:text-slate-300 text-sm font-semibold"> الوظيفة</th>
<th class="px-6 py-4 text-slate-600 dark:text-slate-300 text-sm font-semibold">النوع</th>
<th class="px-6 py-4 text-slate-600 dark:text-slate-300 text-sm font-semibold">تاريخ الانتهاء</th>
<th class="px-6 py-4 text-slate-600 dark:text-slate-300 text-sm font-semibold">المتقدمين</th>
<th class="px-6 py-4 text-slate-600 dark:text-slate-300 text-sm font-semibold text-center">الإجراءات</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-700/50">
  <?php foreach($allJobs as $job): ?>
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-700/20 transition-colors">
<td class="px-6 py-5 text-slate-900 dark:text-white font-medium"><?= $job->title ?></td>
<td class="px-6 py-5">
<span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 text-xs font-bold rounded-full"><?= $job->job_type ?></span>
</td>
<td class="px-6 py-5 text-slate-500 dark:text-slate-400"><?= $job->deadline ?></td>
<td class="px-6 py-5 text-slate-500 dark:text-slate-400"><?= $job->applications_count ?></td>
<td class="px-6 py-5">
<div class="flex justify-center gap-3">
<button 
onclick="openViewModal(this)"
            data-id="<?= $job->id ?>"
            data-title="<?= htmlspecialchars($job->title) ?>"
            data-type="<?= $job->job_type ?>"
            data-desc="<?= htmlspecialchars($job->description ??'') ?>"
            data-skills="<?= htmlspecialchars($job->skills ??'') ?>"
            data-location="<?= htmlspecialchars($job->location ??'') ?>"
            data-salary="<?= htmlspecialchars($job->salary ??'') ?>"
            data-deadline="<?= htmlspecialchars($job->deadline ??'') ?>"
class="text-slate-400 hover:text-primary transition-colors" title="عرض"><span class="material-symbols-outlined text-[20px]">visibility</span></button>
<button
 onclick="openEditModal(this)"
            data-id="<?= $job->id ?>"
            data-title="<?= htmlspecialchars($job->title) ?>"
            data-type="<?= $job->job_type ?>"
            data-desc="<?= htmlspecialchars($job->description ??'') ?>"
            data-skills="<?= htmlspecialchars($job->skills ??'') ?>"
            data-location="<?= htmlspecialchars($job->location ??'') ?>"
            data-salary="<?= htmlspecialchars($job->salary ??'') ?>"
            data-deadline="<?= htmlspecialchars($job->deadline ??'') ?>"
class="text-slate-400 hover:text-blue-500 transition-colors" title="تعديل"><span class="material-symbols-outlined text-[20px]">edit</span></button>
<button
 onclick="openDeleteModal(<?= $job->id ?>)" 
class="text-slate-400 hover:text-red-500 transition-colors" title="حذف"><span class="material-symbols-outlined text-[20px]">delete</span></button>
</div>
</td>
</tr>
 <?php endforeach; ?>
</tbody>
</table>
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
<form class="space-y-6" method="POST" action="<?= BASE_URL ?>company/storeJob">
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">عنوان الوظيفة</label>
<input name="title" class="form-input w-full rounded-xl border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:border-primary focus:ring-primary h-12" placeholder="مثلاً: مطور بايثون أول" type="text"/>
</div>
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">نوع الوظيفة</label>
<select name="job_type" class="form-select w-full rounded-xl border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:border-primary focus:ring-primary h-12">
<option>دوام كامل</option>
<option>دوام جزئي</option>
<option>تدريب</option>
<option>عمل حر</option>
</select>
</div>
</div>
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">وصف الوظيفة</label>
<textarea name="description" class="form-textarea w-full rounded-xl border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:border-primary focus:ring-primary" placeholder="اكتب تفاصيل الوظيفة هنا..." rows="4"></textarea>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">الموقع</label>
<div class="relative">
<span class="material-symbols-outlined absolute right-3 top-3 text-slate-400">location_on</span>
<input name="location" class="form-input w-full pr-10 rounded-xl border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:border-primary focus:ring-primary h-12" placeholder="المدينة، الدولة" type="text"/>
</div>
</div>
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">الراتب المتوقع</label>
<div class="relative">
<span class="material-symbols-outlined absolute right-3 top-3 text-slate-400">payments</span>
<input name="salary" class="form-input w-full pr-10 rounded-xl border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:border-primary focus:ring-primary h-12" placeholder="مثلاً: 10,000 - 15,000" type="text"/>
</div>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">المهارات المطلوبة</label>
<input name="skills" class="form-input w-full rounded-xl border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:border-primary focus:ring-primary h-12" placeholder="افصل بين المهارات بفاصلة" type="text"/>
</div>
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">الموعد النهائي للتقديم</label>
<div class="relative">
<span class="material-symbols-outlined absolute right-3 top-3 text-slate-400">calendar_today</span>
<input name="deadline" class="form-input w-full pr-10 rounded-xl border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white focus:border-primary focus:ring-primary h-12" type="date"/>
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
<script>
function toggleSidebar() {
    const sidebar = document.getElementById("sidebar");
    const overlay = document.getElementById("overlay");

    sidebar.classList.toggle("translate-x-full");
    overlay.classList.toggle("hidden");
}
</script>
<!-- hidden form for editing jobs -->

<div id="editJobModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">

    <div class="bg-gradient-to-br from-blue-50 to-white w-full max-w-lg p-8 rounded-2xl shadow-2xl relative h-96 overflow-y-auto">

        <!-- زر إغلاق -->
        <button onclick="closeEditModal()" 
            class="absolute top-3 right-4 text-gray-400 text-2xl hover:text-red-500 transition duration-200">
            ×
        </button>

        <h2 class="text-2xl font-extrabold mb-6 text-center text-blue-700">✏️ تعديل الوظيفة ✏️</h2>

        <form id="editJobForm" class="space-y-4" action="<?= BASE_URL ?>Company/UpdateJob" method="POST">
               <input type="hidden" name="id" id="editId">


            <input type="text" name="title" id="editTitle" placeholder="📌 عنوان الوظيفة"
                class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" required>

            <textarea name="description" id="editDescription" placeholder="📝 الوصف"
                class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" rows="4" required></textarea>
            <input type="text" name="skills" id="editSkills" placeholder="� المهارات المطلوبة" 
                class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" required>

            <select name="job_type" id="editJobType"
                class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" required>
                <option value="">⚙️ نوع الوظيفة</option>
                <option value="Full-time">دوام كامل</option>
                <option value="Part-time">دوام جزئي</option>
                <option value="Remote">عن بعد</option>
            </select>

            <input type="text" name="location" id="editLocation" placeholder="📍 الموقع"
                class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" required>

            <input type="number" name="salary" id="editSalary" placeholder="💰 الراتب"
                class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">

            <input type="date" name="deadline" id="editDeadline"
                class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" required>

            <button type="submit"
                class="bg-blue-600 text-white w-full py-3 rounded-lg font-bold text-lg shadow-md hover:bg-blue-700 transition duration-300">
                🔄 حفظ التغييرات
            </button>

        </form>

    </div>
</div>

<!-- script for edit modal -->
<script>
function openEditModal(button) {
    const jobData = {
        id: button.getAttribute('data-id'),
        title: button.getAttribute('data-title'),
        description: button.getAttribute('data-desc'),
        skills: button.getAttribute('data-skills'),
        job_type: button.getAttribute('data-type'),
        location: button.getAttribute('data-location'),
        salary: button.getAttribute('data-salary'),
        deadline: button.getAttribute('data-deadline')
    };

    // 👇 هذا هو السطر الناقص
    populateEditForm(jobData);

    document.getElementById('editJobModal').classList.remove('hidden');
    document.getElementById('editJobModal').classList.add('flex');
}

function closeEditModal() {
    document.getElementById('editJobModal').classList.add('hidden');
}

function populateEditForm(jobData) {
    document.getElementById('editId').value = jobData.id ;
    document.getElementById('editTitle').value = jobData.title || '';
    document.getElementById('editDescription').value = jobData.description || '';
    document.getElementById('editSkills').value = jobData.skills || '';
    document.getElementById('editJobType').value = jobData.job_type || '';
    document.getElementById('editLocation').value = jobData.location || '';
    document.getElementById('editSalary').value = jobData.salary || '';
    document.getElementById('editDeadline').value = jobData.deadline || '';
}
</script>
<!-- form for confirm delete job -->
 <div id="deleteModal" class="hidden fixed inset-0 bg-black bg-opacity-50 items-center justify-center">

    <div class="bg-white p-6 rounded-lg shadow-lg w-96 text-center">
        <h2 class="text-lg font-bold mb-4">تأكيد الحذف</h2>
        <p class="mb-6">هل أنت متأكد من حذف هذه الوظيفة؟</p>

        <form method="POST" action="<?= BASE_URL ?>company/deleteJob">
            <input type="hidden" name="id" id="deleteId">

            <div class="flex justify-center gap-4">
                <button type="submit" 
                    class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded">
                    نعم، حذف
                </button>

                <button type="button" onclick="closeDeleteModal()" 
                    class="bg-gray-300 px-4 py-2 rounded">
                    إلغاء
                </button>
            </div>
        </form>
    </div>

</div>
<!-- script for delete modal -->
 <script>
 function openDeleteModal(id) {
    document.getElementById('deleteId').value = id;
    document.getElementById('deleteModal').classList.remove('hidden');
    document.getElementById('deleteModal').classList.add('flex');
}

function closeDeleteModal() {
    document.getElementById('deleteModal').classList.add('hidden');
}
</script>
<!-- form for view job -->

<div id="viewJobModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
  <div class="bg-white p-8 rounded-xl shadow-2xl w-[420px] text-right border border-gray-200">
    
    <h2 class="text-2xl font-extrabold text-indigo-700 mb-6">🚀 عرض الوظيفة</h2>
    
    <div class="space-y-4 text-gray-700">
      <p><span class="font-bold text-indigo-600">العنوان:</span> <span id="viewTitle"></span></p>
      <p><span class="font-bold text-indigo-600">الوصف:</span> <span id="viewDescription"></span></p>
      <p><span class="font-bold text-indigo-600">المهارات المطلوبة:</span> <span id="viewSkills"></span></p>
      <p><span class="font-bold text-indigo-600">نوع الوظيفة:</span> <span id="viewJobType"></span></p>
      <p><span class="font-bold text-indigo-600">الموقع:</span> <span id="viewLocation"></span></p>
      <p><span class="font-bold text-indigo-600">الراتب:</span> <span id="viewSalary"></span></p>
      <p><span class="font-bold text-indigo-600">آخر موعد للتقديم:</span> <span id="viewDeadline"></span></p>
    </div>
    
    <button onclick="document.getElementById('viewJobModal').classList.add('hidden')" 
            class="mt-6 px-6 py-2 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700 transition">
      إغلاق
    </button>
  </div>
</div>



<script>
function openViewModal(button) {
    const jobData = {
        id: button.getAttribute('data-id'),
        title: button.getAttribute('data-title'),
        description: button.getAttribute('data-desc'),
        skills: button.getAttribute('data-skills'),
        job_type: button.getAttribute('data-type'),
        location: button.getAttribute('data-location'),
        salary: button.getAttribute('data-salary'),
        deadline: button.getAttribute('data-deadline')
    };

    populateViewForm(jobData);

    document.getElementById('viewJobModal').classList.remove('hidden');
    document.getElementById('viewJobModal').classList.add('flex');
}

function closeViewModal() {
    document.getElementById('viewJobModal').classList.add('hidden');
}

function populateViewForm(jobData) {
    document.getElementById('viewTitle').textContent = jobData.title || '';
    document.getElementById('viewDescription').textContent = jobData.description || '';
    document.getElementById('viewSkills').textContent = jobData.skills || '';
    document.getElementById('viewJobType').textContent = jobData.job_type || '';
    document.getElementById('viewLocation').textContent = jobData.location || '';
    document.getElementById('viewSalary').textContent = jobData.salary || '';
    document.getElementById('viewDeadline').textContent = jobData.deadline || '';
}
</script>