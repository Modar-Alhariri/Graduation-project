<?php if(isset($_SESSION['flash_success'])): ?>
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
        <?= $_SESSION['flash_success']; unset($_SESSION['flash_success']); ?>
    </div>
<?php elseif(isset($_SESSION['flash_error'])): ?>
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
        <?= $_SESSION['flash_error']; unset($_SESSION['flash_error']); ?>
    </div>
<?php endif; ?>
<!DOCTYPE html>

<html dir="<?= $_SESSION['lang']=='ar'?'rtl':'ltr' ?>" 

      lang="<?= $_SESSION['lang']=='ar'?'ar':'en' ?>"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>GTS Admin - Roles &amp; Permissions</title>
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
<!-- Page Body -->
<div class="p-8">
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
<div>
<h2 class="text-3xl font-black text-slate-900 dark:text-white tracking-tight">الأدوار والصلاحيات</h2>
<p class="text-slate-500 dark:text-slate-400 mt-2">Manage system roles and access control levels for the GTS Portal.</p>
</div>
<button id="addRoleBtn" class="bg-primary hover:bg-primary/90 text-white px-6 py-2.5 rounded-xl font-bold flex items-center gap-2 shadow-lg shadow-primary/20 transition-all">
<span class="material-symbols-outlined">add</span>
                   إضافة دور
                </button>
</div>
<!-- Tabs -->
<div class="flex border-b border-slate-200 dark:border-slate-800 mb-6 overflow-x-auto">
<button class="px-6 py-3 border-b-2 border-primary text-primary font-bold text-sm whitespace-nowrap">Roles List</button>
<button class="px-6 py-3 border-b-2 border-transparent text-slate-500 dark:text-slate-400 hover:text-slate-700 font-medium text-sm whitespace-nowrap">Permission Matrix</button>
</div>
<!-- Roles Table Section -->
<div class="p-6">
    <h2 class="text-2xl font-bold mb-6">إدارة الأدوار</h2>

    <div class="overflow-x-auto bg-white dark:bg-slate-900 rounded-2xl shadow">
        <table class="min-w-full text-sm text-right">

            <!-- Header -->
            <thead class="bg-slate-100 dark:bg-slate-800">
                <tr>
                    <th class="p-4">ID</th>
                    <th class="p-4">اسم الدور</th>
                    <th class="p-4">عدد المستخدمين</th>
                    <th class="p-4">الإجراءات</th>
                </tr>
            </thead>

            <!-- Body -->
            <tbody class="divide-y">
                <?php foreach($roles as $role): ?>
                <tr class="hover:bg-slate-50">
                    <td class="p-4"><?= $role->role_id ?></td>
                    <td class="p-4 font-medium"><?= $role->role_name ?></td>
                    <td class="p-4"><?= $role->users_count ?></td>

                    <td class="p-4 flex gap-2">
                        <button 
                        class="editRoleBtn px-3 py-1 text-xs  text-gray rounded-lg hover:bg-yellow-500"
                        data-id="<?= $role->role_id ?>"
                        data-name="<?= htmlspecialchars($role->role_name, ENT_QUOTES) ?>">
                         <span class="material-symbols-outlined">edit</span>
                        </button>

                        <button class="deleteRoleBtn px-2 py-1 text-gray rounded-lg hover:bg-red-500"
                        data-id="<?= $role->role_id ?>">
                        <span class="material-symbols-outlined">delete</span>
                        </button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</div>
<!-- Permission Matrix Section -->
<div class="mb-8">
<div class="flex items-center justify-between mb-4">
<h3 class="text-xl font-bold text-slate-900 dark:text-white">Permission Matrix</h3>
<button class="text-sm font-bold text-primary flex items-center gap-1 hover:underline">
<span class="material-symbols-outlined text-sm">save</span>
                        Update All Permissions
                    </button>
</div>
<div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden shadow-sm">
<div class="overflow-x-auto">
<table class="w-full text-right border-collapse">
<thead>
<tr class="bg-slate-50 dark:bg-slate-800/50">
<th class="px-6 py-4 text-sm font-bold text-slate-900 dark:text-white border-l border-slate-200 dark:border-slate-800 w-64">Permission Name</th>
<th class="px-6 py-4 text-center text-xs font-bold uppercase text-slate-500 border-l border-slate-200 dark:border-slate-800">Admin</th>
<th class="px-6 py-4 text-center text-xs font-bold uppercase text-slate-500 border-l border-slate-200 dark:border-slate-800">Faculty</th>
<th class="px-6 py-4 text-center text-xs font-bold uppercase text-slate-500">Company</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-200 dark:divide-slate-800">
<tr>
<td class="px-6 py-4 border-l border-slate-200 dark:border-slate-800">
<div class="flex flex-col">
<span class="text-sm font-semibold text-slate-800 dark:text-slate-200">Manage Users</span>
<span class="text-xs text-slate-500">Create, edit, and delete user accounts</span>
</div>
</td>
<td class="px-6 py-4 text-center border-l border-slate-200 dark:border-slate-800">
<input checked="" class="rounded border-slate-300 text-primary focus:ring-primary h-5 w-5" type="checkbox"/>
</td>
<td class="px-6 py-4 text-center border-l border-slate-200 dark:border-slate-800">
<input class="rounded border-slate-300 text-primary focus:ring-primary h-5 w-5" type="checkbox"/>
</td>
<td class="px-6 py-4 text-center">
<input class="rounded border-slate-300 text-primary focus:ring-primary h-5 w-5" type="checkbox"/>
</td>
</tr>
<tr>
<td class="px-6 py-4 border-l border-slate-200 dark:border-slate-800">
<div class="flex flex-col">
<span class="text-sm font-semibold text-slate-800 dark:text-slate-200">Post Jobs</span>
<span class="text-xs text-slate-500">Create internship and job listings</span>
</div>
</td>
<td class="px-6 py-4 text-center border-l border-slate-200 dark:border-slate-800">
<input checked="" class="rounded border-slate-300 text-primary focus:ring-primary h-5 w-5" type="checkbox"/>
</td>
<td class="px-6 py-4 text-center border-l border-slate-200 dark:border-slate-800">
<input checked="" class="rounded border-slate-300 text-primary focus:ring-primary h-5 w-5" type="checkbox"/>
</td>
<td class="px-6 py-4 text-center">
<input checked="" class="rounded border-slate-300 text-primary focus:ring-primary h-5 w-5" type="checkbox"/>
</td>
</tr>
<tr>
<td class="px-6 py-4 border-l border-slate-200 dark:border-slate-800">
<div class="flex flex-col">
<span class="text-sm font-semibold text-slate-800 dark:text-slate-200">View Reports</span>
<span class="text-xs text-slate-500">Access student and internship analytics</span>
</div>
</td>
<td class="px-6 py-4 text-center border-l border-slate-200 dark:border-slate-800">
<input checked="" class="rounded border-slate-300 text-primary focus:ring-primary h-5 w-5" type="checkbox"/>
</td>
<td class="px-6 py-4 text-center border-l border-slate-200 dark:border-slate-800">
<input checked="" class="rounded border-slate-300 text-primary focus:ring-primary h-5 w-5" type="checkbox"/>
</td>
<td class="px-6 py-4 text-center">
<input class="rounded border-slate-300 text-primary focus:ring-primary h-5 w-5" type="checkbox"/>
</td>
</tr>
<tr>
<td class="px-6 py-4 border-l border-slate-200 dark:border-slate-800">
<div class="flex flex-col">
<span class="text-sm font-semibold text-slate-800 dark:text-slate-200">System Configuration</span>
<span class="text-xs text-slate-500">Change global portal settings</span>
</div>
</td>
<td class="px-6 py-4 text-center border-l border-slate-200 dark:border-slate-800">
<input checked="" class="rounded border-slate-300 text-primary focus:ring-primary h-5 w-5" type="checkbox"/>
</td>
<td class="px-6 py-4 text-center border-l border-slate-200 dark:border-slate-800">
<input class="rounded border-slate-300 text-primary focus:ring-primary h-5 w-5" type="checkbox"/>
</td>
<td class="px-6 py-4 text-center">
<input class="rounded border-slate-300 text-primary focus:ring-primary h-5 w-5" type="checkbox"/>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<!-- Footer Note -->
<div class="flex items-center gap-2 text-slate-400 text-xs">
<span class="material-symbols-outlined text-sm">info</span>
<span>Any changes to roles or permissions will take effect after the user's next login.</span>
</div>
</div>
</main>
</div>
<!-- adding new role form -->
 <div id="addRoleModal" class="fixed inset-0 hidden items-center justify-center bg-black/50 z-50">

  <div class="bg-white dark:bg-slate-900 rounded-2xl shadow-lg w-full max-w-sm p-6 relative">

    <button id="closeRoleModal" class="absolute top-3 right-3">✖</button>

    <h2 class="text-lg font-bold mb-4">إضافة دور جديد</h2>

    <form action="<?= BASE_URL ?>admin/AddRole" method="POST" class="space-y-4">
      
      <div>
        <label class="block text-sm">اسم الدور</label>
        <input type="text" name="role_name" class="w-full border p-2 rounded" required>
      </div>

      <div class="flex justify-end gap-2">
        <button type="submit" class="bg-primary text-white px-4 py-2 rounded">
          حفظ
        </button>
        <button type="button" id="cancelRoleBtn" class="border px-4 py-2 rounded">
          إلغاء
        </button>
      </div>

    </form>

  </div>
</div>
<!-- script to avtivate adding form -->
 <script>
const addRoleBtn = document.getElementById('addRoleBtn');
const roleModal = document.getElementById('addRoleModal');
const closeRoleModal = document.getElementById('closeRoleModal');
const cancelRoleBtn = document.getElementById('cancelRoleBtn');

addRoleBtn.addEventListener('click', () => {
    roleModal.classList.remove('hidden');
    roleModal.classList.add('flex');
});

function closeModal(){
    roleModal.classList.add('hidden');
    roleModal.classList.remove('flex');
}

closeRoleModal.addEventListener('click', closeModal);
cancelRoleBtn.addEventListener('click', closeModal);
</script>
<!-- editing  roles form  -->
 <div id="editRoleModal" class="fixed inset-0 hidden items-center justify-center bg-black/50 z-50">

  <div class="bg-white dark:bg-slate-900 rounded-2xl shadow-lg w-full max-w-sm p-6 relative">

    <button onclick="closeEditRoleModal()" class="absolute top-3 right-3">✖</button>

    <h2 class="text-lg font-bold mb-4">تعديل الدور</h2>

    <form id="editRoleForm" method="POST" class="space-y-4">

      <input type="hidden" id="edit_role_id" name="id">

      <div>
        <label class="block text-sm">اسم الدور</label>
        <input type="text" id="edit_role_name" name="role_name" class="w-full border p-2 rounded" required>
      </div>

      <div class="flex justify-end gap-2">
        <button type="submit" class="bg-primary text-white px-4 py-2 rounded">حفظ</button>
        <button type="button" onclick="closeEditRoleModal()" class="border px-4 py-2 rounded">إلغاء</button>
      </div>

    </form>

  </div>
</div>
<!-- script to activate editing form  -->
 <script>
const editRoleBtns = document.querySelectorAll('.editRoleBtn');
const editRoleModal = document.getElementById('editRoleModal');

editRoleBtns.forEach(btn => {
    btn.addEventListener('click', () => {

        document.getElementById('edit_role_id').value = btn.dataset.id;
        document.getElementById('edit_role_name').value = btn.dataset.name;

        document.getElementById('editRoleForm').action =
        "<?= BASE_URL ?>admin/UpdateRole/" + btn.dataset.id;

        editRoleModal.classList.remove('hidden');
        editRoleModal.classList.add('flex');
    });
});

function closeEditRoleModal(){
    editRoleModal.classList.add('hidden');
    editRoleModal.classList.remove('flex');
}
</script>
<!-- dleete role form  -->
 <div id="deleteRoleModal" class="fixed inset-0 hidden items-center justify-center bg-black/50 z-50">
  <div class="bg-white p-6 rounded-xl text-center">
    <h2 class="text-lg font-bold mb-4">تأكيد الحذف</h2>
    <p class="mb-4">هل أنت متأكد من حذف هذا الدور؟</p>

    <div class="flex justify-center gap-3">
      <button id="confirmDeleteRole" class="bg-red-500 text-white px-4 py-2 rounded">حذف</button>
      <button onclick="closeDeleteRoleModal()" class="border px-4 py-2 rounded">إلغاء</button>
    </div>
  </div>
</div>
<!-- script for delete form  -->
 <script>
let roleId = null;

const deleteBtns = document.querySelectorAll('.deleteRoleBtn');
const deleteModal = document.getElementById('deleteRoleModal');

deleteBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        roleId = btn.dataset.id;

        deleteModal.classList.remove('hidden');
        deleteModal.classList.add('flex');
    });
});

function closeDeleteRoleModal(){
    deleteModal.classList.add('hidden');
    deleteModal.classList.remove('flex');
}

document.getElementById('confirmDeleteRole').addEventListener('click', () => {
    window.location.href = "<?= BASE_URL ?>admin/DeleteRole/" + roleId;
});
</script>
<!-- script to activate toogle button  -->
<script>
function toggleSidebar() {
    const sidebar = document.getElementById("sidebar");
    sidebar.classList.toggle("translate-x-full");
}
</script>
</body></html>