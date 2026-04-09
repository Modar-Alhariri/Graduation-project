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

<html dir="<?= $_SESSION['lang']=='ar'?'rtl':'ltr' ?>" 

      lang="<?= $_SESSION['lang']=='ar'?'ar':'en' ?>"><head>
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
                        "primary": "#0f49bd",
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
<style>
        body {
            font-family: 'Public Sans', sans-serif;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-display">
<div class="flex min-h-screen">
<!-- Sidebar -->
<aside class="w-64 bg-white dark:bg-slate-900 border-l border-slate-200 dark:border-slate-800 flex flex-col fixed h-full z-50">
<div class="p-6 flex items-center gap-3">
<div class="w-10 h-10 bg-primary rounded-xl flex items-center justify-center text-white">
<span class="material-symbols-outlined">school</span>
</div>
<div>
<h1 class="text-sm font-bold leading-tight"><?= $lang['system_name'] ?></h1>
<p class="text-xs text-slate-500 dark:text-slate-400"><?= $lang['academic_management'] ?></p>
</div>
</div>
<nav class="flex-1 px-4 space-y-1">
<a class="flex items-center gap-3 px-3 py-2 rounded-xl bg-primary/10 text-primary font-medium" href="<?= BASE_URL ?>admin/dashboard">
<span class="material-symbols-outlined">dashboard</span>
<span class="text-sm"><?= $lang['dashboard'] ?> </span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="<?= BASE_URL ?>admin/userManagment">
<span class="material-symbols-outlined">group</span>
<span class="text-sm"><?= $lang['users'] ?></span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="<?= BASE_URL ?>admin/rolesPermetion">
<span class="material-symbols-outlined">admin_panel_settings</span>
<span class="text-sm"><?= $lang['roles'] ?></span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="<?= BASE_URL ?>admin/departments">
<span class="material-symbols-outlined">corporate_fare</span>
<span class="text-sm"><?= $lang['departments'] ?></span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="<?= BASE_URL ?>admin/majors">
<span class="material-symbols-outlined">history_edu</span>
<span class="text-sm"><?= $lang['majors'] ?></span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="<?= BASE_URL ?>admin/reports">
<span class="material-symbols-outlined">bar_chart</span>
<span class="text-sm"><?= $lang['reports'] ?></span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="<?= BASE_URL ?>admin/settings">
<span class="material-symbols-outlined">settings</span>
<span class="text-sm"><?= $lang['settings'] ?></span>
</a>
</nav>
<div class="p-4 border-t border-slate-200 dark:border-slate-800">
<div class="flex items-center gap-3 p-2">
<div class="size-8 rounded-full bg-slate-200 dark:bg-slate-700 bg-cover bg-center" data-alt="User avatar profile picture" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAf1nLXfo3IS7esVmGpDlQncG3JdQVMTTxr8OWATWfrctiLCTNdp2cEM5gQ6EjI6u8WJoMdNmb0xqu0psE7WROwasTh8Mfej1ILuGbW8IlHSzPWys5UPZliT_e2POmS_2ELY5uo4H52twgjvFvRlzMPXjLmZLIH56Bc4y-xcZttMgZjk9IBDmyqVQZ7D_OvztZVmwxufkblSS0MCv0frnlaxFci7Z6UEXvOc3aNcQFsOt1Ylqum3yuBBfg6kk05vfW28MCPd3bUm-k')"></div>
<div class="flex-1 overflow-hidden">
<p class="text-xs font-bold truncate"><?= $lang['user_name'] ?> </p>
<p class="text-[10px] text-slate-500 truncate"><?= $lang['system_admin'] ?> </p>
</div>
</div>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 <?= $_SESSION['lang']=='ar'?'mr-64':'ml-64' ?>">
<!-- Navbar -->
<header class="h-16 border-b border-slate-200 dark:border-slate-800 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md sticky top-0 z-40 px-8 flex items-center justify-between">
<div class="flex items-center gap-4 flex-1">
<!-- Search bar removed as per request -->
</div>
<div class="flex items-center gap-3">
<button class="p-2 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg relative">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-2 right-2 w-2 h-2 bg-primary rounded-full border-2 border-white dark:border-slate-900"></span>
</button>
<?php if($_SESSION['lang'] == 'ar'): ?> 
    
    <a href="<?= BASE_URL ?>Language/change/en"
       class="flex items-center gap-2 px-4 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition">

       <span class="material-symbols-outlined">language</span>
        EN
    </a>

<?php else: ?>

    <a href="<?= BASE_URL ?>Language/change/ar"
       class="flex items-center gap-2 px-4 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition">

       <span class="material-symbols-outlined">language</span>
        AR
    </a>

<?php endif; ?>

</div>
</header>
<!-- Page Content -->
<div class="flex-1 overflow-y-auto p-8 space-y-6">
<!-- Page Header -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
<div>
<h2 class="text-2xl font-black text-slate-900 dark:text-slate-100">إدارة التخصصات</h2>
<p class="text-slate-500 dark:text-slate-400 mt-1">عرض وإدارة جميع التخصصات الأكاديمية المتاحة في النظام</p>
</div>
<button id="addMajorBtn"  class="bg-primary hover:bg-primary/90 text-white px-6 py-2.5 rounded-xl font-bold flex items-center gap-2 transition-all shadow-lg shadow-primary/20 shrink-0">
<span class="material-symbols-outlined">add</span>
                        إضافة تخصص جديد
                    </button>
</div>
<!-- Filters -->
<div class="flex flex-wrap items-center gap-3">
<span class="text-sm font-semibold text-slate-400 ml-2">تصفية حسب القسم:</span>
<button class="px-4 py-1.5 rounded-full bg-primary text-white text-sm font-medium">كل الأقسام</button>
<button class="px-4 py-1.5 rounded-full bg-slate-200 dark:bg-slate-800 text-slate-600 dark:text-slate-300 text-sm font-medium hover:bg-slate-300 dark:hover:bg-slate-700 transition-colors">هندسة البرمجيات</button>
<button class="px-4 py-1.5 rounded-full bg-slate-200 dark:bg-slate-800 text-slate-600 dark:text-slate-300 text-sm font-medium hover:bg-slate-300 dark:hover:bg-slate-700 transition-colors">نظم المعلومات</button>
<button class="px-4 py-1.5 rounded-full bg-slate-200 dark:bg-slate-800 text-slate-600 dark:text-slate-300 text-sm font-medium hover:bg-slate-300 dark:hover:bg-slate-700 transition-colors">الأمن السيبراني</button>
<button class="px-4 py-1.5 rounded-full bg-slate-200 dark:bg-slate-800 text-slate-600 dark:text-slate-300 text-sm font-medium hover:bg-slate-300 dark:hover:bg-slate-700 transition-colors">الذكاء الاصطناعي</button>
</div>
<!-- Table Container -->
<div class="bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
 <div class="overflow-x-auto bg-white rounded-2xl shadow">
        <table class="min-w-full text-sm text-right">
            <thead class="bg-slate-100 text-slate-600">
                <tr>
                    <th class="p-3">ID</th>
                    <th class="p-3">اسم التخصص</th>
                    <th class="p-3">القسم</th>
                    <th class="p-3">عدد الخريجين</th>
                    <th class="p-3">الإجراءات</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200">
                <?php foreach($majors as $major): ?>
                <tr class="hover:bg-slate-50">
                    <td class="p-3"><?= $major->id ?></td>
                    <td class="p-3 font-medium"><?= $major->major_name ?></td>
                    <td class="p-3"><?= $major->department_name ?></td>
                    <td class="p-3"><?= $major->graduates_count ?></td>
                    <td class="p-3 flex gap-2">
                        <!-- زر تعديل -->
                       <button 
                        onclick="openEditMajorModal(this)"
                        data-id="<?= $major->id ?>"
                        data-name="<?= htmlspecialchars($major->major_name) ?>"
                        data-department="<?= $major->department_id ?>"
                        class="px-3 py-1 text-gray rounded-lg hover:bg-yellow-400">
                        <span class="material-symbols-outlined text-xl">edit</span>
                    </button>
                        <!-- زر حذف -->
                       <button type="button"
                        onclick="openDeleteMajorModal(<?= $major->id ?>,'<?= addslashes($major->major_name) ?>')"
                        class="px-3 py-1 text-gray rounded-lg hover:bg-red-400">
                        <span class="material-symbols-outlined text-xl">delete</span>
                    </button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<!-- Stats Overview (Academic Feel) -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="bg-white dark:bg-slate-900 p-6 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm flex items-center gap-4">
<div class="size-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
<span class="material-symbols-outlined">menu_book</span>
</div>
<div>
<p class="text-slate-500 text-sm font-medium">إجمالي التخصصات</p>
<p class="text-2xl font-black"><?=$total_majors?></p>
</div>
</div>
<div class="bg-white dark:bg-slate-900 p-6 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm flex items-center gap-4">
<div class="size-12 rounded-xl bg-blue-500/10 text-blue-500 flex items-center justify-center">
<span class="material-symbols-outlined">account_balance</span>
</div>
<div>
<p class="text-slate-500 text-sm font-medium">الأقسام النشطة</p>
<p class="text-2xl font-black"><?= $total_departments ?></p>
</div>
</div>
<div class="bg-white dark:bg-slate-900 p-6 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm flex items-center gap-4">
<div class="size-12 rounded-xl bg-emerald-500/10 text-emerald-500 flex items-center justify-center">
<span class="material-symbols-outlined">how_to_reg</span>
</div>
<div>
<p class="text-slate-500 text-sm font-medium">إجمالي الخريجين</p>
<p class="text-2xl font-black"><?= $totalGraduates ?></p>
</div>
</div>
</div>
</div>
</main>
</div>
<!-- form for adding new major -->
 <div id="addMajorModal" class="fixed inset-0 hidden items-center justify-center bg-black/50 z-50">
  <div class="bg-white rounded-xl p-6 w-full max-w-md relative">

    <button type="button" id="closeAddMajor" class="absolute top-3 right-3">✖</button>

    <h2 class="text-xl font-bold mb-4">إضافة تخصص جديد</h2>

    <form action="<?= BASE_URL ?>admin/AddMajor" method="POST" class="space-y-4">
      <div>
        <label>اسم التخصص</label>
        <input type="text" name="name" class="w-full border p-2 rounded" required>
      </div>

      <div>
        <label>القسم</label>
        <select name="department_id" class="w-full border p-2 rounded" required>
          <?php foreach($departments as $dep): ?>
            <option value="<?= $dep->id ?>"><?= $dep->department_name ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <div class="flex justify-end gap-2">
        <button type="submit" class="bg-primary text-white px-4 py-2 rounded">إضافة</button>
        <button type="button" id="cancelAddMajor" class="px-4 py-2 border rounded">إلغاء</button>
      </div>

    </form>
  </div>
</div>
<!-- script to activate adding form  -->
 <script>
const addMajorBtn = document.getElementById('addMajorBtn');
const addMajorModal = document.getElementById('addMajorModal');
const cancelAddMajor = document.getElementById('cancelAddMajor');
const closeAddMajor = document.getElementById('closeAddMajor');

addMajorBtn.addEventListener('click', () => {
    addMajorModal.classList.remove('hidden');
    addMajorModal.classList.add('flex');
});

cancelAddMajor.addEventListener('click', () => {
    addMajorModal.classList.add('hidden');
    addMajorModal.classList.remove('flex');
});

closeAddMajor.addEventListener('click', () => {
    addMajorModal.classList.add('hidden');
    addMajorModal.classList.remove('flex');
});
</script>
<!-- form for updating majors -->
 <div id="editMajorModal" class="fixed inset-0 hidden items-center justify-center bg-black/50 z-50">
  <div class="bg-white rounded-xl p-6 w-full max-w-md relative">

    <button type="button" onclick="closeEditMajorModal()" class="absolute top-3 right-3">✖</button>

    <h2 class="text-xl font-bold mb-4">تعديل التخصص</h2>

    <form id="editMajorForm" method="POST" class="space-y-4">
      <input type="hidden" name="id" id="edit_major_id">

      <div>
        <label>اسم التخصص</label>
        <input type="text" name="name" id="edit_major_name" class="w-full border p-2 rounded" required>
      </div>

      <div>
        <label>القسم</label>
        <select name="department_id" id="edit_major_department" class="w-full border p-2 rounded" required>
          <?php foreach($departments as $dep): ?>
            <option value="<?= $dep->id ?>"><?= $dep->department_name ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <div class="flex justify-end gap-2">
        <button type="submit" class="bg-primary text-white px-4 py-2 rounded">حفظ</button>
        <button type="button" onclick="closeEditMajorModal()" class="px-4 py-2 border rounded">إلغاء</button>
      </div>

    </form>
  </div>
</div>
<!-- script to activate updating form  -->
<script>
function openEditMajorModal(btn){
    // جلب البيانات من data-attributes
    const id = btn.dataset.id;
    const name = btn.dataset.name;
    const department = btn.dataset.department;

    // ملء الفورم
    document.getElementById('edit_major_id').value = id;
    document.getElementById('edit_major_name').value = name;
    document.getElementById('edit_major_department').value = department;
    document.getElementById('editMajorForm').action = "<?= BASE_URL ?>admin/UpdateMajor/" + id;
    // عرض المودال
    const modal = document.getElementById('editMajorModal');
    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

function closeEditMajorModal(){
    const modal = document.getElementById('editMajorModal');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
}
</script>
<!-- delete major confirm -->
 <div id="deleteMajorModal" class="fixed inset-0 hidden items-center justify-center bg-black/50 z-50">
  <div class="bg-white rounded-xl p-6 w-full max-w-sm text-center">

    <h2 class="text-lg font-bold mb-4">تأكيد الحذف</h2>
    <p class="text-slate-500 mb-6">
      هل أنت متأكد من حذف التخصص <span id="majorNameToDelete"></span>؟
    </p>

    <div class="flex justify-center gap-3">
      <a id="confirmDeleteMajorBtn" href="#"
         class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600">
         نعم، حذف
      </a>
      <button type="button" onclick="closeDeleteMajorModal()" class="px-4 py-2 border rounded hover:bg-gray-100">
        إلغاء
      </button>
    </div>

  </div>
</div>
<!-- script to activate delete confirm -->
 <script>
function openDeleteMajorModal(id, name){
    document.getElementById('majorNameToDelete').textContent = name;
    document.getElementById('confirmDeleteMajorBtn').href = "<?= BASE_URL ?>admin/deleteMajor/" + id;

    const modal = document.getElementById('deleteMajorModal');
    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

function closeDeleteMajorModal(){
    const modal = document.getElementById('deleteMajorModal');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
}
</script>
</body></html>