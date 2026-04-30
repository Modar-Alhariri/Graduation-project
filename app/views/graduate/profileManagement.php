
<!DOCTYPE html>

<html dir="rtl" lang="ar"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>إدارة الملف الشخصي - نظام تتبع الخريجين</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen">
<div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
<div class="layout-container flex h-full grow flex-col">
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
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 transition-colors" href="<?= BASE_URL ?>graduate/profileManagement">
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
<header class=" h-16 border-b border-slate-200 dark:border-slate-800 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md sticky top-0 z-40 px-8 flex items-center justify-between">
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
<?php if(isset($_SESSION['flash_success'])): ?>
<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
    <?= $_SESSION['flash_success']; unset($_SESSION['flash_success']); ?>
</div>
<?php elseif(isset($_SESSION['flash_error'])): ?>
<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
    <?= $_SESSION['flash_error']; unset($_SESSION['flash_error']); ?>
</div>
<?php endif; ?>

<!-- Content Area -->
<div class="flex-1 flex flex-col gap-6">
<!-- Tabs Navigation -->
<div class="bg-white dark:bg-slate-800 rounded-xl shadow-sm overflow-hidden p-1 flex">
<button class="flex-1 py-3 text-sm font-bold border-b-2 border-primary text-primary bg-primary/5">المعلومات الشخصية</button>
<button class="flex-1 py-3 text-sm font-bold text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors">الأكاديمية</button>
<button class="flex-1 py-3 text-sm font-bold text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors">المهارات والخبرات</button>
</div>
<?php $info =  $myInfo;?>
<!-- Personal Info Section -->
<section id="personal" class="bg-white dark:bg-slate-800 rounded-xl shadow-sm p-6">
    <form action="<?= BASE_URL ?>Graduate/UpdateMyInfo" method="POST">
<div class="flex items-center gap-2 mb-6 border-r-4 border-primary pr-3">
<h2 class="text-xl font-bold">المعلومات الشخصية</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="flex flex-col gap-2">
<label class="text-sm font-medium text-slate-700 dark:text-slate-300">الاسم الكامل</label>
<input id="name" name="full_name" class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 focus:border-primary focus:ring-primary" type="text" placeholder="<?= $myInfo->name ?>" required/>
</div>
<div class="flex flex-col gap-2">
<label class="text-sm font-medium text-slate-700 dark:text-slate-300">البريد الإلكتروني</label>
<input id="email" name="email" class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 focus:border-primary focus:ring-primary text-left" dir="ltr" type="email" placeholder="<?= $myInfo->email ?>" required/>
</div>
<div class="flex flex-col gap-2">
<label class="text-sm font-medium text-slate-700 dark:text-slate-300">رقم الهاتف</label>
<input id="phone" name="phone" class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 focus:border-primary focus:ring-primary text-left" dir="ltr" type="tel" placeholder="<?= $myInfo->phone ?>" required/>
</div>
<div class="flex flex-col gap-2">
<label class="text-sm font-medium text-slate-700 dark:text-slate-300">العنوان</label>
<input id="address" name="address" class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 focus:border-primary focus:ring-primary" type="text" placeholder="<?= $myInfo->address ?>" required />
</div>
</div>
<br>
<button
 type="submit" class="bg-primary hover:bg-primary/80 text-white font-bold py-2 px-4 rounded-lg transition-colors">حفظ التغييرات</button>
</form>
</section>
<!-- Academic Info Section -->
<section id="academic" class="bg-white dark:bg-slate-800 rounded-xl shadow-sm p-6">
<div class="flex items-center gap-2 mb-6 border-r-4 border-primary pr-3">
<h2 class="text-xl font-bold">المعلومات الأكاديمية</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="flex flex-col gap-2 col-span-1 md:col-span-2">
<label class="text-sm font-medium text-slate-700 dark:text-slate-300">الرقم الجامعي </label>
<input id="graduateNumber" name="graduate_id" class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 focus:border-primary focus:ring-primary" type="text" placeholder="20224738" required disabled value="<?= $myInfo->graduate_id ?>"/>
</div>
<div class="flex flex-col gap-2">
<label class="text-sm font-medium text-slate-700 dark:text-slate-300">سنة التخرج</label>
<input id="graduate_Year" name="graduate_year" type="number" class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 focus:border-primary focus:ring-primary" required placeholder="2020" disabled value="<?= $myInfo->graduate_year ?>">
</div>
<div class="flex flex-col gap-2">
<label class="text-sm font-medium text-slate-700 dark:text-slate-300">الكلية</label>
<input id="college" name="college" class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 focus:border-primary focus:ring-primary" type="text" placeholder="<?= $myInfo->college ?>" required disabled value="<?= $myInfo->college ?>"/>
</div>
<div class="flex flex-col gap-2">
<label class="text-sm font-medium text-slate-700 dark:text-slate-300">التخصص </label>
<input id="major" name="major" class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 focus:border-primary focus:ring-primary" type="text" placeholder="<?= $myInfo->major ?>" required disabled value="<?= $myInfo->major ?>"/>
</div>
<div class="flex flex-col gap-2">
<label class="text-sm font-medium text-slate-700 dark:text-slate-300">المعدل التراكمي (GPA)</label>
<input id="gpa" name="gpa" class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 focus:border-primary focus:ring-primary text-left" dir="ltr" type="number" step="0.01" min="0" max="100" placeholder="87.7" required disabled value="<?= $myInfo->gpa ?>"/>
</div>
</div>
</section>
<!-- Skills Section -->
<section id="skills" class="bg-white dark:bg-slate-800 rounded-xl shadow-sm p-6">
<div class="flex items-center justify-between mb-6 border-r-4 border-primary pr-3">
<h2 class="text-xl font-bold">المهارات التقنية</h2>
<button onclick="addSkillModel()" id="addSkillButton" class="text-primary text-sm font-bold flex items-center gap-1">
<span class="material-symbols-outlined text-base">add</span>
                                إضافة مهارة
                            </button>
</div>
<div class="flex flex-wrap gap-2">
    <?php foreach($skills as $skill): ?>
<span class="px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-medium border border-primary/20 flex items-center gap-2">
                               <?= $skill->name ?>
<form action="<?= BASE_URL?>Graduate/DeleteSkill" method="POST">
    <input type="hidden" name="skill_id" value="<?= $skill->id ?>">
    <button type="submit" class="material-symbols-outlined text-xs">close</button>
</form>
</span>

<?php endforeach; ?>
</div>
</section>
<!-- Training Courses Section -->
<section id="trainign" class="bg-white dark:bg-slate-800 rounded-xl shadow-sm p-6">
<div class="flex items-center justify-between mb-6 border-r-4 border-primary pr-3">
<h2 class="text-xl font-bold">الدورات التدريبية</h2>
<button onclick="openCourseModal()" id="addCourseButton" 
        class="text-primary text-sm font-bold flex items-center gap-1">
    <span class="material-symbols-outlined text-base">add</span> 
    إضافة دورة
</button>
</div>
<div class="overflow-x-auto">
<table class="w-full text-right border-collapse">
<thead>
<tr class="border-b border-slate-100 dark:border-slate-700">
<th class="py-4 px-2 text-sm font-bold text-slate-500 dark:text-slate-400">اسم الدورة</th>
<th class="py-4 px-2 text-sm font-bold text-slate-500 dark:text-slate-400">الجهة المانحة</th>
<th class="py-4 px-2 text-sm font-bold text-slate-500 dark:text-slate-400">السنة</th>
<th class="py-4 px-2 text-sm font-bold text-slate-500 dark:text-slate-400">الإجراءات</th>
</tr>
</thead>
<tbody>
    <?php foreach($courses as $course): ?>
<tr class="border-b border-slate-50 dark:border-slate-700/50 hover:bg-slate-50/50 dark:hover:bg-slate-700/30 transition-colors">
<td class="py-4 px-2 text-sm font-medium"><?= $course->title ?></td>
<td class="py-4 px-2 text-sm"><?= $course->the_entity ?></td>
<td class="py-4 px-2 text-sm"><?= $course->gain_in ?></td>
<td class="py-4 px-2">
<form action="<?= BASE_URL ?>Graduate/DeleteCourse" method="POST">
    <input type="hidden" name="course_id" value="<?= $course->id ?>">
    <button type="submit" class="text-slate-400 hover:text-primary transition-colors">
        <span class="material-symbols-outlined text-xl">delete</span>
    </button>
</form>
</td>
</tr>
    <?php endforeach; ?>
</tbody>
</table>
</div>
</section>
<!-- end foreach -->


</div>

</main>
<!-- Footer -->
<footer class="bg-white dark:bg-background-dark border-t border-slate-200 dark:border-slate-800 py-6 px-10 text-center text-slate-500 dark:text-slate-400 text-sm">
<p>© 2024 نظام تتبع الخريجين (GTS). جميع الحقوق محفوظة.</p>
</footer>
</div>
</div>
<!-- hidden model to add courses as course name the entity and  date  -->
<div id="addCourseModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
    <div class="bg-white dark:bg-slate-800 rounded-xl shadow-lg p-6 w-full max-w-md relative">
        
        <h2 class="text-xl font-bold mb-4 text-center">إضافة دورة جديدة</h2>
        
        <form action="<?= BASE_URL ?>Graduate/AddCourse" method="POST">
            <input type="hidden" name="gradiate_id" value="<?= $_SESSION["graduate_id"] ?>">
            <div class="flex flex-col gap-4">
                <div class="flex flex-col gap-2">
                    <label class="text-sm font-medium text-slate-700 dark:text-slate-300">اسم الدورة</label>
                    <input type="text" name="course_name" required
                           class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 focus:border-primary focus:ring-primary"
                           placeholder="مثال: تطوير الويب (React)">
                </div>
                
                <div class="flex flex-col gap-2">
                    <label class="text-sm font-medium text-slate-700 dark:text-slate-300">الجهة المانحة</label>
                    <input type="text" name="entity_name" required
                           class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 focus:border-primary focus:ring-primary"
                           placeholder="مثال: Udemy">
                </div>
                
                <div class="flex flex-col gap-2">
                    <label class="text-sm font-medium text-slate-700 dark:text-slate-300">التاريخ</label>
                    <input type="date" name="date" required
                           class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 focus:border-primary focus:ring-primary">
                </div>
                
                <div class="flex justify-end gap-2 mt-2">
                    
                    <button type="submit"
                            class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary/80 transition-colors">
                        إضافة الدورة
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- script to handel courses model -->
<script>
document.addEventListener('DOMContentLoaded', function () {

    const addCourseModal = document.getElementById('addCourseModal');
    const addCourseButton = document.getElementById('addCourseButton');

    // فتح المودال
    addCourseButton.addEventListener('click', function () {
        addCourseModal.classList.remove('hidden');
    });

    // إغلاق من زر X
    window.closeCourseModal = function () {
        addCourseModal.classList.add('hidden');
    }

    // إغلاق عند الضغط خارج المودال
    addCourseModal.addEventListener('click', function (e) {
        if (e.target === addCourseModal) {
            addCourseModal.classList.add('hidden');
        }
    });

});
</script>
<!-- hidden model for adding skills -->
<div id="addSkillModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
<div class="bg-white dark:bg-slate-800 rounded-xl shadow-lg p-6 w-full max-w-md">
<h2 class="text-xl font-bold mb-4">إضافة مهارة جديدة</h2>
<form action="<?= BASE_URL ?>Graduate/AddSkill" method="POST">
<div class="flex flex-col gap-4">
<div class="flex flex-col gap-2">
<label class="text-sm font-medium text-slate-700 dark:text-slate-300">اسم المهارة</label>
<input id="skill" name="skill_name" class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg
-slate-50 dark:bg-slate-900 focus:border-primary focus:ring-primary" type="text" placeholder="مثال: تطوير الويب (React)" required/>
</div>
<div class="flex justify-end gap-2"></div>
<button type="submit" class="bg-primary text-white py-2 px-4 rounded-lg hover:bg-primary-dark transition-colors">إضافة مهارة</button>
</form>
</div>
</div>
<!-- script to handle skills modal -->
<script>
    const addSkillModal = document.getElementById('addSkillModal');
    const addSkillButton = document.getElementById('addSkillButton');
    function addSkillModel() {
        addSkillModal.classList.remove('hidden');
    }
    // close modal when clicking outside of it
    addSkillModal.addEventListener('click', (e) => {
        if (e.target === addSkillModal) {
            addSkillModal.classList.add('hidden');
        }
    });
</script>

</body></html>