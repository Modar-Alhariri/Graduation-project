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
<!-- Page Content -->
<div class="p-8 space-y-6 overflow-y-auto">
<!-- Page Header -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
<div>
<h2 class="text-2xl font-black tracking-tight">إدارة المستخدمين</h2>
<p class="text-slate-500 dark:text-slate-400 text-sm mt-1">عرض وإدارة جميع حسابات المستخدمين في النظام</p>
</div>
<button id="addUserBtn"  class="bg-primary text-white px-5 py-2.5 rounded-xl font-bold text-sm flex items-center justify-center gap-2 hover:bg-primary/90 transition-colors shadow-lg shadow-primary/20">
<span class="material-symbols-outlined text-lg">add</span>
                        إضافة مستخدم جديد
                    </button>
</div>
<!-- Filters -->
<div class="bg-white dark:bg-slate-900 p-4 rounded-xl border border-slate-200 dark:border-slate-800 flex flex-wrap items-center gap-4">
<div class="flex items-center gap-2 text-sm font-medium text-slate-500 dark:text-slate-400">
<span class="material-symbols-outlined text-xl leading-none">filter_list</span>
                        تصفية حسب:
                    </div>
<div class="flex gap-2">
<button class="bg-primary text-white px-4 py-1.5 rounded-lg text-sm font-medium">الكل</button>
<button class="bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 px-4 py-1.5 rounded-lg text-sm font-medium hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">مسؤول</button>
<button class="bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 px-4 py-1.5 rounded-lg text-sm font-medium hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">خريج</button>
<button class="bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 px-4 py-1.5 rounded-lg text-sm font-medium hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">عضو هيئة تدريس</button>
</div>
<div class="mr-auto">
<select class="bg-slate-100 dark:bg-slate-800 border-none rounded-lg text-sm font-medium py-1.5 pr-8 pl-4 focus:ring-primary/20">
<option>ترتيب حسب: الأحدث</option>
<option>ترتيب حسب: الاسم (أ-ي)</option>
<option>ترتيب حسب: الحالة</option>
</select>
</div>
</div>
<!-- Table Card -->
<div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden shadow-sm">
<div class="overflow-x-auto">
<div class="p-6">
    <h2 class="text-2xl font-bold mb-6">إدارة المستخدمين</h2>

     <div class="overflow-x-auto bg-white dark:bg-slate-900 rounded-2xl shadow">
        <table class="min-w-full text-sm text-right">
            <!-- Header -->
            <thead class="bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300">
                <tr>
                    <th class="p-3 md:p-4">ID</th>
                    <th class="p-3 md:p-4">الاسم</th>
                    <th class="p-3 md:p-4">البريد</th>
                    <th class="p-3 md:p-4">الدور</th>
                    <th class="p-3 md:p-4">الإجراءات</th>
                </tr>
            </thead>

            <!-- Body -->
            <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                <?php foreach($users as $user): ?>
                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/40 transition">
                    <td class="p-3 md:p-4 text-sm font-medium"><?= $user->user_id ?></td>
                    <td class="p-3 md:p-4 font-medium"><?= $user->name ?></td>
                    <td class="p-3 md:p-4 text-slate-500"><?= $user->email ?></td>
                    <td class="p-3 md:p-4">
                        <span class="px-3 py-1 text-xs rounded-full bg-blue-100 text-blue-600">
                            <?= $user->role_name ?>
                        </span>
                    </td>
                    <td class="p-3 md:p-4 flex gap-2">
                      <button 
                        class="editBtn px-3 py-1 text-xs text-gray rounded-lg hover:bg-yellow-400"
                        data-id="<?= $user->user_id ?>"
                        data-name="<?= htmlspecialchars($user->name, ENT_QUOTES) ?>"
                        data-email="<?= htmlspecialchars($user->email, ENT_QUOTES) ?>"
                        data-role="<?= $user->role_name?>">
                        <span class="material-symbols-outlined text-xl">edit</span>
                        </button>
                        <button class="deleteBtn px-3 py-1 text-xs  text-gray rounded-lg hover:bg-red-500"
                        data-id="<?= $user->user_id ?>">
                        <span class="material-symbols-outlined">delete</span>
                        </button>
                       

                        <!-- <a href="<?= BASE_URL ?>admin/deleteUser/<?= $user->user_id ?>" 
                           class="px-3 py-1 text-xs  text-gray rounded-lg hover:bg-red-500"
                           onclick="return confirm('هل أنت متأكد من حذف هذا المستخدم؟');">
                          <span class="material-symbols-outlined text-xl">delete</span>
                        </a> -->
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>
</div>
<!-- Pagination -->

</div>
</div>
</main>
</div>
<!-- script show/hide sidebar -->
 <script>
function toggleSidebar() {
    const sidebar = document.getElementById("sidebar");
    sidebar.classList.toggle("translate-x-full");
}
</script>
<!-- form for adding new user  -->
 <div id="addUserModal" class="fixed inset-0 hidden items-center justify-center bg-black/50 z-50">
    <div class="bg-white dark:bg-slate-900 rounded-2xl shadow-lg w-full max-w-md p-6 relative">
        <button id="closeModal" class="absolute top-3 right-3 text-slate-500 hover:text-red-500">
            <span class="material-symbols-outlined">close</span>
        </button>
        <h2 class="text-xl font-bold mb-4">إضافة مستخدم جديد</h2>

        <form action="<?= BASE_URL ?>admin/AddUser" method="POST" class="space-y-4">
            <div>
                <label class="block text-sm font-medium">الاسم</label>
                <input type="text" name="name" class="w-full px-3 py-2 border rounded-lg" required>
            </div>
            <div>
                <label class="block text-sm font-medium">البريد الإلكتروني</label>
                <input type="email" name="email" class="w-full px-3 py-2 border rounded-lg" required>
            </div>
            <div>
                <label class="block text-sm font-medium">كلمة المرور</label>
                <input type="password" name="password" class="w-full px-3 py-2 border rounded-lg" required>
            </div>
            <div>
                <label class="block text-sm font-medium">الدور</label>
                <select name="role_id" class="w-full px-3 py-2 border rounded-lg" required>
                    <option value="1">Admin</option>
                    <option value="2">Graduate</option>
                    <option value="3">Company</option>
                </select>
            </div>
            <div class="flex justify-end gap-2">
                <button type="submit" class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary/90">إضافة</button>
                <button type="button" id="cancelBtn" class="px-4 py-2 rounded-lg border hover:bg-gray-100">إلغاء</button>
            </div>
        </form>
    </div>
</div>
<!-- javascript code for showing add user form   -->
<script>
const addBtn = document.getElementById('addUserBtn');
const modal = document.getElementById('addUserModal');
const cancelBtn = document.getElementById('cancelBtn');
const closeBtn = document.getElementById('closeModal');

addBtn.addEventListener('click', () => {
    modal.classList.remove('hidden'); // إظهار الفورم
    modal.classList.add('flex');       // جعلها flex لتوسيطها
});

cancelBtn.addEventListener('click', () => {
    modal.classList.add('hidden');     // إخفاء الفورم
    modal.classList.remove('flex');
});

closeBtn.addEventListener('click', () => {
    modal.classList.add('hidden');
    modal.classList.remove('flex');
});
</script>
<!-- form for updating user data -->
 <div id="editModal" class="fixed inset-0 hidden items-center justify-center bg-black/50 z-50">
  <div class="bg-white dark:bg-slate-900 rounded-2xl shadow-lg w-full max-w-md p-6 relative">
    
    <button onclick="closeEditModal()" class="absolute top-3 right-3">✖</button>

    <h2 class="text-xl font-bold mb-4">تعديل المستخدم</h2>

    <form id="editForm" method="POST" class="space-y-4">
      
      <input type="hidden" name="id" id="edit_id">

      <div>
        <label>الاسم</label>
        <input type="text" name="name" id="edit_name" class="w-full border p-2 rounded">
      </div>

      <div>
        <label>البريد</label>
        <input type="email" name="email" id="edit_email" class="w-full border p-2 rounded">
      </div>

      <div>
        <label>الدور</label>
        <select name="role_id" id="edit_role" class="w-full border p-2 rounded" required>
          <option value="1">Admin</option>
          <option value="2">Graduate</option>
          <option value="3">Company</option>
        </select>
      </div>

      

      <div class="flex justify-end gap-2">
        <button type="submit" class="bg-primary text-white px-4 py-2 rounded">حفظ</button>
        <button type="button" onclick="closeEditModal()" class="px-4 py-2 border rounded">إلغاء</button>
      </div>

    </form>
  </div>
</div>
<!-- script for showing update form  -->
 <script>
const editButtons = document.querySelectorAll('.editBtn');
const editModal = document.getElementById('editModal');

editButtons.forEach(btn => {
    btn.addEventListener('click', () => {

        document.getElementById('edit_id').value = btn.dataset.id;
        document.getElementById('edit_name').value = btn.dataset.name;
        document.getElementById('edit_email').value = btn.dataset.email;
        document.getElementById('edit_role').value = btn.dataset.role;

        document.getElementById('editForm').action = "<?= BASE_URL ?>admin/UpdateUser/" + btn.dataset.id;

        editModal.classList.remove('hidden');
        editModal.classList.add('flex');
    });
});

function closeEditModal(){
    editModal.classList.add('hidden');
    editModal.classList.remove('flex');
}
</script>
<!-- delete user confirm -->
 <div id="deleteModal" class="fixed inset-0 hidden items-center justify-center bg-black/50 z-50">
  <div class="bg-white p-6 rounded-xl text-center ">
    <h2 class="text-lg font-bold mb-4">تأكيد الحذف</h2>
    <p class="mb-4">هل أنت متأكد؟</p>

    <div class="flex justify-center gap-3">
      <button id="confirmDelete" class="bg-red-500 text-white px-4 py-2 rounded">حذف</button>
      <button onclick="closeDeleteModal()" class="border px-4 py-2 rounded">إلغاء</button>
    </div>
  </div>
</div>
<!-- script for delete user -->
 <script>
let deleteId = null;

const deleteButtons = document.querySelectorAll('.deleteBtn');
const deleteModal = document.getElementById('deleteModal');

deleteButtons.forEach(btn => {
    btn.addEventListener('click', () => {
        deleteId = btn.dataset.id;
        deleteModal.classList.remove('hidden');
        deleteModal.classList.add('flex');
    });
});

function closeDeleteModal(){
    deleteModal.classList.add('hidden');
    deleteModal.classList.remove('flex');
}

document.getElementById('confirmDelete').addEventListener('click', () => {
    window.location.href = "<?= BASE_URL ?>admin/DeleteUser/" + deleteId;
});
</script>

</body></html>