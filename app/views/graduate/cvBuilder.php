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

<html dir="rtl" lang="ar">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
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
        .cv-preview-shadow {
            box-shadow: 0 10px 25px -5px rgba(236, 91, 19, 0.1), 0 8px 10px -6px rgba(236, 91, 19, 0.1);
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-display">
<!-- Main Layout Container -->
<div class="relative flex min-h-screen flex-col overflow-x-hidden">
<!-- Navigation Bar -->
<aside id="sidebar"
class="w-64 bg-white dark:bg-slate-900 border-l border-slate-200 dark:border-slate-800 flex flex-col fixed h-full z-50 transform translate-x-full  transition-transform duration-300">

<div class="p-6 flex items-center gap-3 border-b border-slate-100 dark:border-slate-800">
<div class="bg-primary rounded-xl p-2 flex items-center justify-center text-white">
<span class="material-symbols-outlined text-2xl">school</span>
</div>
<div>
<h1 class="text-lg font-bold leading-tight">نظام تتبع الخريجين</h1>
<p class="text-xs text-slate-500 dark:text-slate-400">جامعة المستقبل</p>
</div>
<button onclick="toggleSidebar()" 
    class=" p-1 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg">
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
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-red-50 text-red-600 transition-colors" href="<?= BASE_URL ?>Auth/logout">
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
<p class="text-sm font-bold truncate"> <?= $_SESSION['name'] ?> </p>
<p class="text-xs text-slate-500 truncate">خريج هندسة حاسب</p>
</div>
</div>
</div>
</aside>
<!-- Header -->
<header class="h-16 border-b border-slate-200 dark:border-slate-800 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md sticky top-0 z-40 px-8 flex items-center justify-between">
<button onclick="toggleSidebar()" 
class=" p-2 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg">
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
<main class="flex-1 p-6 lg:px-20">

<div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
<!-- Right Column: Controls & Options -->
<div class="lg:col-span-5 flex flex-col gap-6">
<div class="space-y-2">
<h1 class="text-4xl font-black tracking-tight text-slate-900 dark:text-white">بناء السيرة الذاتية</h1>
<p class="text-slate-600 dark:text-slate-400">قم بإنشاء وتحديث سيرتك الذاتية بشكل احترافي لزيادة فرصك الوظيفية.</p>
</div>
<button onclick="openCvModal()"
 class="w-full bg-primary text-white py-3 rounded-xl font-bold hover:shadow-lg hover:shadow-primary/30 transition-all flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-sm">magic_button</span>
 إنشاء سيرة ذاتية الآن
</button>
<!-- Action Cards -->
<div class="space-y-4">
<!-- Auto Generate -->
<div class="p-6 rounded-2xl border-2 border-primary/20 bg-white dark:bg-slate-900/50 hover:border-primary transition-all group">
<div class="flex items-start gap-4">
<div class="bg-primary/10 text-primary p-3 rounded-xl group-hover:bg-primary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-3xl">auto_awesome</span>
</div>
<div class="flex-1">
<h3 class="text-lg font-bold">التوليد التلقائي ذكي</h3>
<p class="text-sm text-slate-500 dark:text-slate-400 mb-4">استخدم بيانات ملفك الشخصي الأكاديمية والمهنية لإنشاء سيرة ذاتية فوراً.</p>
<button class="w-full bg-primary text-white py-3 rounded-xl font-bold hover:shadow-lg hover:shadow-primary/30 transition-all flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-sm">magic_button</span>
 توليد سيرة ذاتية الآن
</button>
</div>
</div>
</div>
<!-- Manual Upload -->
<div class="p-6 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/50 hover:bg-slate-50 dark:hover:bg-slate-800 transition-all">
<div class="flex items-start gap-4">
<div class="bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 p-3 rounded-xl">
<span class="material-symbols-outlined text-3xl">upload_file</span>
</div>
<div class="flex-1">
<h3 class="text-lg font-bold">رفع ملف جاهز</h3>
<p class="text-sm text-slate-500 dark:text-slate-400 mb-4">هل تملك سيرة ذاتية مصممة مسبقاً؟ قم برفعها بصيغة PDF.</p>
<button onclick="openApplyModal()" class="w-full border-2 border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-300 py-3 rounded-xl font-bold hover:bg-slate-100 dark:hover:bg-slate-700 transition-all flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-sm">attach_file</span>
                                        رفع ملف PDF
</button>
</div>
</div>
</div>
</div>
<!-- Export Options -->
<div class="flex flex-wrap gap-3">
  <a href="<?= BASE_URL ?>Graduate/downloadCV" class="flex-1 bg-slate-900 dark:bg-white dark:text-slate-900 text-white py-4 rounded-xl font-bold flex items-center justify-center gap-2 hover:opacity-90 transition-opacity">
<button >
<span class="material-symbols-outlined">download</span>
                            تحميل PDF
                        </button>
                        </a>
<a class="flex-1 bg-white border border-slate-200 dark:border-slate-800 dark:bg-slate-900 dark:text-white py-4 rounded-xl font-bold flex items-center justify-center gap-2 hover:bg-slate-50 transition-all" href="<?= BASE_URL ?>Graduate/viewCV">
  <button  >
<span class="material-symbols-outlined">visibility</span>
                            معاينة
 </button>
</a>
</div>
</div>
<!-- Left Column: CV Preview -->
 <div class="lg:col-span-7">
                <div class="relative bg-slate-200 dark:bg-slate-800 rounded-3xl p-8 min-h-[800px] flex justify-center">
                    <!-- CV Document -->
                    <div id="cvDocument" class="w-full max-w-[600px] bg-white text-slate-900 rounded-sm shadow-2xl p-10 flex flex-col gap-6 origin-top">
                        <!-- Header -->
                        <div class="flex justify-between items-start border-b-4 border-primary pb-6">
                            <div class="space-y-1">
                                <h2 class="cv-name text-3xl font-black text-slate-900">أحمد محمد العلي</h2>
                                <p class="cv-title text-primary font-bold">مهندس برمجيات</p>
                                <div class="flex gap-4 text-xs text-slate-500 mt-2">
                                    <span class="flex items-center gap-1"><span class="material-symbols-outlined text-sm">mail</span> <span class="cv-email">ahmed@example.com</span></span>
                                    <span class="flex items-center gap-1"><span class="material-symbols-outlined text-sm">call</span> <span class="cv-phone">+966 50 000 0000</span></span>
                                </div>
                            </div>
                            <div class="w-24 h-24 bg-slate-100 rounded-lg overflow-hidden grayscale">
                                <img class="cv-image w-full h-full object-cover" src="https://png.pngtree.com/png-vector/20190411/ourlarge/pngtree-vector-business-man-icon-png-image_924785.jpg" alt="الصورة الشخصية">
                            </div>
                        </div>

                        <!-- Content Grid -->
                        <div class="grid grid-cols-3 gap-8 text-[11px]">
                            <!-- Right sidebar -->
                           
                            <div class="col-span-1 space-y-6">
                               
                                <section>
                                    <h4 class="font-bold border-b border-slate-200 mb-2 pb-1 uppercase tracking-wider text-primary">المهارات</h4>
                                    <ul class="cv-languages-list space-y-1 text-slate-600">
                                        <li>problem solving</li>
                                    </ul>
                                </section>
                                <div class="cv-other-info-container"></div>
                            
                                <section>
                                    <h4 class="font-bold border-b border-slate-200 mb-2 pb-1 uppercase tracking-wider text-primary">اللغات</h4>
                                    <ul class="cv-languages-list space-y-1 text-slate-600">
                                        <li>• العربية (الأم)</li>
                                    </ul>
                                </section>
                                <div class="cv-other-info-container"></div>
                            </div>
                            <!-- Main column -->
                            <div class="col-span-2 space-y-6 text-sm">
                                <section>
                                    <h4 class="font-bold border-b border-slate-200 mb-3 pb-1 uppercase tracking-wider text-primary">الملخص المهني</h4>
                                    <p class="cv-summary text-slate-600 text-xs leading-relaxed">نص الملخص الافتراضي...</p>
                                </section>
                                <section>
                                    <h4 class="font-bold border-b border-slate-200 mb-3 pb-1 uppercase tracking-wider text-primary">التعليم</h4>
                                    <div class="cv-education-container space-y-3"></div>
                                </section>
                                <section>
                                    <h4 class="font-bold border-b border-slate-200 mb-3 pb-1 uppercase tracking-wider text-primary">المشاريع</h4>
                                    <div class="cv-projects-container space-y-3"></div>
                                </section>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="mt-auto pt-4 border-t border-slate-100 text-[8px] text-center text-slate-400">
                            تم إنشاء هذه السيرة الذاتية عبر نظام تتبع الخريجين (GTS)
                        </div>
                    </div>
                    <!-- Floating Badge -->
                    <div class="absolute bottom-12 right-12 bg-primary text-white px-4 py-2 rounded-full shadow-xl flex items-center gap-2 text-sm font-bold">
                        <span class="material-symbols-outlined text-sm">verified</span> نموذج معتمد
                    </div>
                </div>
            </div>
</div>
</main>
<!-- Footer Section -->
<footer class="mt-20 border-t border-slate-200 dark:border-slate-800 py-10 px-6 lg:px-20 bg-white dark:bg-background-dark">
<div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-6">
<div class="text-slate-500 text-sm">
                    © 2024 نظام تتبع الخريجين. جميع الحقوق محفوظة.
                </div>
<div class="flex gap-6">
<a class="text-slate-400 hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">language</span></a>
<a class="text-slate-400 hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">help</span></a>
<a class="text-slate-400 hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">settings</span></a>
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
<!-- form for building CV manually -->
 <div id="cvModal" class="fixed inset-0 bg-gradient-to-br from-black/70 to-gray-900/70 hidden items-start justify-start pt-10 z-50 transition-opacity duration-300">
    <div class="bg-white rounded-2xl shadow-2xl w-11/12 md:w-2/3 lg:w-1/2 p-8 overflow-y-auto max-h-[90vh] animate-fadeIn">
        <div class="flex justify-between items-center border-b pb-3 mb-6">
            <h2 class="text-3xl font-extrabold text-blue-600 flex items-center gap-2">✍️ إنشاء سيرة ذاتية</h2>
            <button onclick="closeModal()" class="text-gray-400 hover:text-red-500 text-3xl transition">×</button>
        </div>

        <form id="cvForm" action="createCV" method="POST" enctype="multipart/form-data" class="space-y-6">
            <!-- الصورة الشخصية -->
            <div>
                <label class="block mb-2 font-semibold text-slate-700">الصورة الشخصية</label>
                <input type="file" name="profile_image" accept="image/*" class="w-full border p-3 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- الاسم الكامل -->
            <div>
                <label class="block mb-2 font-semibold text-slate-700">الاسم الكامل</label>
                <input type="text" name="full_name" class="w-full border p-3 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500" placeholder="أحمد محمد العلي">
            </div>

            <!-- البريد الإلكتروني -->
            <div>
                <label class="block mb-2 font-semibold text-slate-700">البريد الإلكتروني</label>
                <input type="email" name="email" class="w-full border p-3 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500" placeholder="ahmed@example.com">
            </div>

            <!-- رقم الهاتف -->
            <div>
                <label class="block mb-2 font-semibold text-slate-700">رقم الهاتف</label>
                <input type="tel" name="phone" class="w-full border p-3 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500" placeholder="+966 50 000 0000">
            </div>

            <!-- الملخص المهني -->
            <div>
                <label class="block mb-2 font-semibold text-slate-700">الملخص المهني</label>
                <textarea name="summary" class="w-full border p-3 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500" placeholder="اكتب ملخصك المهني..."></textarea>
            </div>

            <!-- التعليم -->
            <div>
                <label class="block mb-2 font-semibold text-slate-700">التعليم</label>
                <div id="education-wrapper" class="space-y-3"></div>
                <button type="button" onclick="addEducation()" class="mt-2 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg shadow transition">+ إضافة تعليم</button>
            </div>

            <!-- المشاريع -->
            <div>
                <label class="block mb-2 font-semibold text-slate-700">المشاريع</label>
                <div id="projects-wrapper" class="space-y-3"></div>
                <button type="button" onclick="addProject()" class="mt-2 bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg shadow transition">+ إضافة مشروع</button>
            </div>

            <!-- اللغات -->
            <div>
                <label class="block mb-2 font-semibold text-slate-700">اللغات</label>
                <textarea name="languages" class="w-full border p-3 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500" placeholder="مثال: العربية - الإنجليزية"></textarea>
            </div>

            <!-- معلومات أخرى -->
            <div>
                <label class="block mb-2 font-semibold text-slate-700">معلومات أخرى</label>
                <textarea name="other_info" class="w-full border p-3 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500" placeholder="أي معلومات إضافية..."></textarea>
            </div>

            <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-lg w-full font-bold shadow-lg transition">💾 حفظ السيرة الذاتية</button>
        </form>
    </div>
</div>
 <!-- script to handle building CV -->
<script>
    // Sidebar toggle
    function toggleSidebar() {
        const sidebar = document.getElementById("sidebar");
        sidebar.classList.toggle("translate-x-full");
    }

    // Modal controls
    function openCvModal() {
        document.getElementById('cvModal').classList.remove('hidden');
        document.getElementById('cvModal').style.display = 'flex';
        updateCvPreview(); // تحديث فوري عند فتح المودال
    }
    function closeModal() {
        document.getElementById('cvModal').classList.add('hidden');
        document.getElementById('cvModal').style.display = 'none';
    }
    document.addEventListener("click", function (e) {
        const modal = document.getElementById("cvModal");
        if (e.target === modal) closeModal();
    });

    // Helper: escapeHtml
    function escapeHtml(str) {
        if (!str) return '';
        return str.replace(/[&<>]/g, function(m) {
            if (m === '&') return '&amp;';
            if (m === '<') return '&lt;';
            if (m === '>') return '&gt;';
            return m;
        });
    }

    // Add Education (with center field)
    function addEducation() {
        const wrapper = document.getElementById('education-wrapper');
        const div = document.createElement('div');
        div.className = "flex gap-2 items-center education-item mb-2";
        div.innerHTML = `
            <input type="text" name="education_title[]" placeholder="بكالوريوس علم حاسوب" class="w-1/3 border p-2 rounded">
            <input type="text" name="education_center[]" placeholder="الجامعة / المؤسسة" class="w-1/3 border p-2 rounded">
            <input type="text" name="education_year[]" placeholder="2019 - 2023" class="w-1/4 border p-2 rounded">
            <button type="button" onclick="removeItem(this)" class="text-red-500 text-xl px-2">-</button>
        `;
        wrapper.appendChild(div);
        updateCvPreview();
    }

    // Add Project
    function addProject() {
        const wrapper = document.getElementById('projects-wrapper');
        const div = document.createElement('div');
        div.className = "project-item space-y-1 mb-3";
        div.innerHTML = `
            <input type="text" name="project_title[]" placeholder="اسم المشروع" class="w-full border p-2 rounded">
            <textarea name="project_desc[]" placeholder="وصف المشروع" class="w-full border p-2 rounded"></textarea>
            <button type="button" onclick="removeItem(this)" class="text-red-500">- حذف</button>
        `;
        wrapper.appendChild(div);
        updateCvPreview();
    }

    // Remove item
    function removeItem(btn) {
        btn.parentElement.remove();
        updateCvPreview();
    }

    // Handle image upload and preview
    function handleImageUpload(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const cvImg = document.querySelector('.cv-image');
                if (cvImg) {
                    cvImg.src = e.target.result;
                    cvImg.parentElement.classList.remove('grayscale');
                }
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    // Main update function: reads form and refreshes CV preview
    function updateCvPreview() {
        // Name
        const fullName = document.querySelector('input[name="full_name"]')?.value || 'اسم المستخدم';
        const cvName = document.querySelector('.cv-name');
        if (cvName) cvName.innerText = fullName;

        // Email & Phone
        const email = document.querySelector('input[name="email"]')?.value || 'user@example.com';
        const phone = document.querySelector('input[name="phone"]')?.value || '+966 5XXXXXXXX';
        const cvEmail = document.querySelector('.cv-email');
        const cvPhone = document.querySelector('.cv-phone');
        if (cvEmail) cvEmail.innerText = email;
        if (cvPhone) cvPhone.innerText = phone;

        // Summary
        const summary = document.querySelector('textarea[name="summary"]')?.value || '';
        const cvSummary = document.querySelector('.cv-summary');
        if (cvSummary) cvSummary.innerText = summary || "لم يتم إدخال ملخص بعد.";

        // Education
        const eduTitles = document.querySelectorAll('input[name="education_title[]"]');
        const eduCenters = document.querySelectorAll('input[name="education_center[]"]');
        const eduYears = document.querySelectorAll('input[name="education_year[]"]');
        const eduContainer = document.querySelector('.cv-education-container');
        if (eduContainer) {
            eduContainer.innerHTML = '';
            for (let i = 0; i < eduTitles.length; i++) {
                const title = eduTitles[i]?.value || 'بدون عنوان';
                const center = eduCenters[i]?.value || 'بدون مؤسسة';
                const year = eduYears[i]?.value || '';
                const div = document.createElement('div');
                div.className = 'mb-3';
                div.innerHTML = `
                    <div class="flex justify-between font-bold text-xs">
                        <span>${escapeHtml(title)}</span>
                        <span>${escapeHtml(year)}</span>
                    </div>
                    <p class="text-[10px] text-slate-500 italic">${escapeHtml(center)}</p>
                `;
                eduContainer.appendChild(div);
            }
        }

        // Projects
        const projTitles = document.querySelectorAll('input[name="project_title[]"]');
        const projDescs = document.querySelectorAll('textarea[name="project_desc[]"]');
        const projContainer = document.querySelector('.cv-projects-container');
        if (projContainer) {
            projContainer.innerHTML = '';
            for (let i = 0; i < projTitles.length; i++) {
                const title = projTitles[i]?.value || 'مشروع بدون عنوان';
                const desc = projDescs[i]?.value || '';
                const div = document.createElement('div');
                div.className = 'mb-3';
                div.innerHTML = `
                    <p class="font-bold text-xs">${escapeHtml(title)}</p>
                    <p class="text-[10px] text-slate-600 mt-1">${escapeHtml(desc)}</p>
                `;
                projContainer.appendChild(div);
            }
        }

        // Languages (split by comma or newline)
        const languagesText = document.querySelector('textarea[name="languages"]')?.value || '';
        const langList = document.querySelector('.cv-languages-list');
        if (langList) {
            langList.innerHTML = '';
            if (languagesText.trim() === '') {
                langList.innerHTML = '<li>• لم يتم إدخال لغات</li>';
            } else {
                const items = languagesText.split(/[,\n]+/).map(l => l.trim()).filter(l => l);
                items.forEach(lang => {
                    const li = document.createElement('li');
                    li.textContent = `• ${lang}`;
                    langList.appendChild(li);
                });
            }
        }

        // Other Info
        const otherInfo = document.querySelector('textarea[name="other_info"]')?.value || '';
        const otherContainer = document.querySelector('.cv-other-info-container');
        if (otherContainer) {
            otherContainer.innerHTML = '';
            if (otherInfo.trim() !== '') {
                const section = document.createElement('section');
                section.className = 'mt-4';
                section.innerHTML = `
                    <h4 class="font-bold border-b border-slate-200 mb-2 pb-1 uppercase tracking-wider text-primary">معلومات أخرى</h4>
                    <p class="text-slate-600 text-xs">${escapeHtml(otherInfo)}</p>
                `;
                otherContainer.appendChild(section);
            }
        }
    }

    // Auto-bind events for all inputs inside modal
    function bindPreviewEvents() {
        const form = document.getElementById('cvForm');
        if (!form) return;

        const allInputs = form.querySelectorAll('input, textarea');
        allInputs.forEach(input => {
            input.addEventListener('input', () => updateCvPreview());
            input.addEventListener('change', () => updateCvPreview());
        });

        // Image upload
        const imageInput = document.querySelector('input[name="profile_image"]');
        if (imageInput) {
            imageInput.addEventListener('change', function() {
                handleImageUpload(this);
                updateCvPreview();
            });
        }

        // Observe dynamic additions (education, projects)
        const eduWrapper = document.getElementById('education-wrapper');
        const projWrapper = document.getElementById('projects-wrapper');
        if (eduWrapper) {
            const eduObserver = new MutationObserver(() => updateCvPreview());
            eduObserver.observe(eduWrapper, { childList: true, subtree: true });
        }
        if (projWrapper) {
            const projObserver = new MutationObserver(() => updateCvPreview());
            projObserver.observe(projWrapper, { childList: true, subtree: true });
        }
    }

    // Initialize: add default education and project if empty, bind events, update preview
    document.addEventListener('DOMContentLoaded', () => {
        // Add initial empty fields for education and projects if not present
        if (document.getElementById('education-wrapper') && document.querySelectorAll('#education-wrapper .education-item').length === 0) {
            addEducation();  // will also call updateCvPreview inside
        }
        if (document.getElementById('projects-wrapper') && document.querySelectorAll('#projects-wrapper .project-item').length === 0) {
            addProject();
        }
        bindPreviewEvents();
        updateCvPreview();
    });
</script>
<!-- hidden model contain form for uploading CV -->
<div id="applyForm"
     class="fixed inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center hidden z-50">

    <form method="POST"
          action="<?= BASE_URL ?>Graduate/uploadCV"
          enctype="multipart/form-data"
          class="space-y-4 bg-white dark:bg-slate-900 rounded-2xl p-6 w-full max-w-md shadow-lg">

        

        <!-- Graduate ID -->
        <input type="hidden" name="graduate_id" id="applyGraduateId"
               value="<?= $_SESSION['graduate_id'] ?>">
        <!-- CV Options -->
        <div>
            <label class="block font-bold mb-2">اختر السيرة الذاتية</label>
            <!-- file input -->
            <div id="cvFileInput" class="mt-3">
                <input type="file"
                       name="cv_file"
                       accept="application/pdf"
                       class="block w-full border p-2 rounded-lg">
            </div>
        </div>

        <!-- Submit -->
        <button type="submit"
                class="w-full bg-green-600 text-white px-4 py-2 rounded-xl hover:opacity-90">
            رفع السيرة الذاتية
        </button>

    </form>
</div>
<!-- script to handle CV upload -->
<script>
    function openApplyModal(graduateId) {
        document.getElementById('applyGraduateId').value = graduateId;
        document.getElementById('applyForm').classList.remove('hidden');
    }
    function closeApplyModal() {
        document.getElementById('applyForm').classList.add('hidden');
    }
    // Close modal when clicking outside the form
    document.getElementById('applyForm').addEventListener('click', function(e) {
        if (e.target === this) {
            closeApplyModal();
        }
    });
</script>
</body></html>