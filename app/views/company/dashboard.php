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
<a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary/10 text-primary font-semibold" href="<?= BASE_URL ?>Company/dashboard">
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
<span class="text-3xl font-bold"><?= $totalJobs ?></span>

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
<span class="text-3xl font-bold"><?= $totalApplications ?></span>

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
<span class="text-3xl font-bold"><?= $acceptedapplications ?></span>

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
<span class="text-3xl font-bold"><?= $rejectedapplications ?></span>

</div>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
<div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden flex flex-col">
<div class="p-6 border-b border-slate-200 dark:border-slate-800 flex justify-between items-center">
<h3 class="text-lg font-bold">الخريجين المرشحين </h3>
<button class="text-primary text-sm font-bold hover:underline">عرض الكل</button>
</div>
<div class="overflow-x-auto">
<table class="w-full text-right border-collapse">
<thead class="bg-slate-50 dark:bg-slate-800/50">
<tr>
<th class="px-6 py-4 text-slate-500 text-sm font-semibold">الوظيفة</th>
<th class="px-6 py-4 text-slate-500 text-sm font-semibold">العدد</th>
<th class="px-6 py-4 text-slate-500 text-sm font-semibold">الاجراء</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-800">

<?php foreach($candidateGraduates as $job): ?>

<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">

    <!-- اسم الوظيفة -->
    <td class="px-6 py-4 font-medium">
        <?= $job->title ?>
    </td>

    <!-- عدد المرشحين -->
    <td class="px-6 py-4 text-slate-500">
        <?= count($job->candidates) ?>
    </td>

    <!-- زر عرض التفاصيل -->
    <td class="px-6 py-4">
        <a href="<?= BASE_URL ?>company/jobCandidates/<?= $job->id ?>"
           class="bg-primary hover:bg-primary/90 text-white px-4 py-2 rounded-lg text-sm font-bold">
            عرض
        </a>
    </td>

</tr>

<?php endforeach; ?>

</tbody>
</table>
</div>
</div>
<div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden flex flex-col">
<div class="p-6 border-b border-slate-200 dark:border-slate-800 flex justify-between items-center">
<h3 class="text-lg font-bold">آخر الوظائف المنشورة</h3>
<button  onclick="openModal()" class="bg-primary text-white px-4 py-2 rounded-lg text-sm font-bold flex items-center gap-2">
<span class="material-symbols-outlined text-[18px]">add</span> وظيفة جديدة
 </button>

</div>
<div class="overflow-x-auto">
<table class="w-full text-right border-collapse">
<thead class="bg-slate-50 dark:bg-slate-800/50">
<tr>
<th class="px-6 py-4 text-slate-500 text-sm font-semibold">مسمى الوظيفة</th>
<th class="px-6 py-4 text-slate-500 text-sm font-semibold">المتقدمين</th>
<th class="px-6 py-4 text-slate-500 text-sm font-semibold">تاريخ النشر</th>
<th class="px-3 py-4 text-slate-500 text-sm font-semibold">الإجراءات</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-800">

<?php foreach($lastJobs as $job): ?>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
    <td class="px-2 py-4 flex items-center gap-3">
        <?= $job->title ?>
    </td>

    <td class="px-3 py-4 text-sm">
        <?= $job->applications_count ?>
    </td>

    <td class="px-3 py-4 text-sm">
        <?= $job->deadline ?>
    </td>
    <td class="px-2 py-4">
        <div class="flex items-center gap-2">
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

            class=" text-sm px-2 py-1 text-gray rounded-lg hover:bg-yellow-400">
            
            <span class="material-symbols-outlined text-sm">edit</span>
        </button>
        <button 
            onclick="openDeleteModal(<?= $job->id ?>)" 
            class=" text-sm hover:bg-red-600 text-gray px-2 py-1 rounded">
            <span class="material-symbols-outlined text-xl">delete</span>
        </button>   
     </td>
     </div>
</tr>
<?php endforeach; ?>
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
<!-- hidden form for posting jobs -->
 <div id="jobModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">

    <div class="bg-gradient-to-br from-green-50 to-white w-full max-w-lg p-6 rounded-2xl shadow-2xl relative h-96 overflow-y-auto">

        <!-- زر إغلاق -->
        <button onclick="closeModal()" 
            class="absolute top-3 right-4 text-gray-400 text-2xl hover:text-red-500 transition duration-200">
            ×
        </button>

        <h2 class="text-2xl font-extrabold mb-6 text-center text-green-700">✨ نشر وظيفة جديدة ✨</h2>

        <form id="jobForm" class="space-y-4">

            <input type="text" name="title" placeholder="📌 عنوان الوظيفة"
                class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none" required>

            <textarea name="description" placeholder="📝 الوصف"
                class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none" rows="4" required></textarea>
            
            <input type="text" name="skills" placeholder=" المهارات المطلوبة"
                class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none" required>

                <select name="job_type" 
                class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none" required>
                <option value="">⚙️ نوع الوظيفة</option>
                <option value="Full-time">دوام كامل</option>
                <option value="Part-time">دوام جزئي</option>
                <option value="Remote">عن بعد</option>
            </select>

            <input type="text" name="location" placeholder="📍 الموقع"
                class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none" required>

            <input type="number" name="salary" placeholder="💰 الراتب"
                class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">

            <input type="date" name="deadline"
                class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none" required>

            <button type="submit"
                class="bg-green-600 text-white w-full py-3 rounded-lg font-bold text-lg shadow-md hover:bg-green-700 transition duration-300">
                🚀 نشر الوظيفة
            </button>

        </form>

        <!-- رسالة -->
        

    </div>
</div>

<!-- script to avtivate posting job form  -->
<script>
function openModal() {
    document.getElementById('jobModal').classList.remove('hidden');
    document.getElementById('jobModal').classList.add('flex');
}

function closeModal() {
    document.getElementById('jobModal').classList.add('hidden');
}

document.getElementById('jobForm').addEventListener('submit', function(e) {
    e.preventDefault();

    let formData = new FormData(this);

    fetch("<?= BASE_URL ?>company/storeJob", {
        method: "POST",
        body: formData
    })
    .then(res => res.text())
    .then(data => {
        let msg = document.getElementById('responseMsg');

        if (data.trim() === "success") {
            msg.innerHTML = "<span class='text-green-600'>تم النشر بنجاح ✅</span>";
            this.reset();

            setTimeout(() => {
                closeModal();
                location.reload();
            }, 1500);

        } else {
            closeModal();
        }
    });
});
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
</body>
</html>