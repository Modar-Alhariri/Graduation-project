<!DOCTYPE html>

<html dir="rtl" lang="ar">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
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
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-display overflow-x-hidden">
<div class="flex min-h-screen">
<!-- Sidebar -->
<aside id="sidebar"
class="w-64 bg-white dark:bg-slate-900 border-l border-slate-200 dark:border-slate-800 flex flex-col fixed h-full z-50 transform translate-x-full md:translate-x-0 transition-transform duration-300">

<!-- الهيدر -->
<div class="p-4 flex items-center justify-between">

    <div class="flex items-center gap-3">
        <div class="w-10 h-10 bg-primary rounded-xl flex items-center justify-center text-white">
            <span class="material-symbols-outlined">school</span>
        </div>
        <div>
            <h1 class="text-sm font-bold leading-tight">نظام تتبع الخريجين</h1>
            <p class="text-xs text-slate-500 dark:text-slate-400">الإدارة الأكاديمية</p>
        </div>
    </div>

    <!-- زر الإغلاق -->
    <button onclick="toggleSidebar()" 
    class="md:hidden p-1 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg">
        <span class="material-symbols-outlined">close</span>
    </button>

</div>
<nav class="flex-1 px-4 space-y-1">
<a class="flex items-center gap-3 px-3 py-2 rounded-xl bg-primary/10 text-primary font-medium" href="<?= BASE_URL ?>admin/dashboard">
<span class="material-symbols-outlined">dashboard</span>
<span class="text-sm">لوحة القيادة</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="<?= BASE_URL ?>admin/userManagment">
<span class="material-symbols-outlined">group</span>
<span class="text-sm">المستخدمين</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="<?= BASE_URL ?>admin/rolesPermetion">
<span class="material-symbols-outlined">admin_panel_settings</span>
<span class="text-sm">الأدوار</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="<?= BASE_URL ?>admin/departments">
<span class="material-symbols-outlined">corporate_fare</span>
<span class="text-sm">الأقسام</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="<?= BASE_URL ?>admin/majors">
<span class="material-symbols-outlined">history_edu</span>
<span class="text-sm">التخصصات</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="<?= BASE_URL ?>admin/settings">
<span class="material-symbols-outlined">bar_chart</span>
<span class="text-sm">التقارير</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="<?= BASE_URL ?>admin/repors">
<span class="material-symbols-outlined">settings</span>
<span class="text-sm">الإعدادات</span>
</a>
</nav>
<div class="p-4 border-t border-slate-200 dark:border-slate-800">
<div class="flex items-center gap-3 p-2">
<div class="size-8 rounded-full bg-slate-200 dark:bg-slate-700 bg-cover bg-center" data-alt="User avatar profile picture" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAf1nLXfo3IS7esVmGpDlQncG3JdQVMTTxr8OWATWfrctiLCTNdp2cEM5gQ6EjI6u8WJoMdNmb0xqu0psE7WROwasTh8Mfej1ILuGbW8IlHSzPWys5UPZliT_e2POmS_2ELY5uo4H52twgjvFvRlzMPXjLmZLIH56Bc4y-xcZttMgZjk9IBDmyqVQZ7D_OvztZVmwxufkblSS0MCv0frnlaxFci7Z6UEXvOc3aNcQFsOt1Ylqum3yuBBfg6kk05vfW28MCPd3bUm-k')"></div>
<div class="flex-1 overflow-hidden">
<p class="text-xs font-bold truncate">أحمد ممدوح</p>
<p class="text-[10px] text-slate-500 truncate">مسؤول النظام</p>
</div>
</div>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 md:mr-64">
<!-- Navbar -->
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
<!-- Dashboard Content -->
<div class="p-8 space-y-8">
<!-- Stats Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-primary/10 rounded-lg text-primary">
<span class="material-symbols-outlined">school</span>
</div>
<span class="text-emerald-500 text-xs font-bold flex items-center gap-1">
<span class="material-symbols-outlined text-sm">trending_up</span>
                                +5.2%
                            </span>
</div>
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">إجمالي الخريجين</p>
<h3 class="text-2xl font-bold mt-1"><?= $totalGraduates?></h3>
</div>
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-blue-500/10 rounded-lg text-blue-500">
<span class="material-symbols-outlined">business</span>
</div>
<span class="text-rose-500 text-xs font-bold flex items-center gap-1">
<span class="material-symbols-outlined text-sm">trending_down</span>
                                -1.8%
                            </span>
</div>
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">الشركات المسجلة</p>
<h3 class="text-2xl font-bold mt-1"><?=$totalCompanies ?></h3>
</div>
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-amber-500/10 rounded-lg text-amber-500">
<span class="material-symbols-outlined">work</span>
</div>
<span class="text-emerald-500 text-xs font-bold flex items-center gap-1">
<span class="material-symbols-outlined text-sm">trending_up</span>
                                +12%
                            </span>
</div>
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">الوظائف المعلنة</p>
<h3 class="text-2xl font-bold mt-1"><?= $totalJobs ?></h3>
</div>
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-purple-500/10 rounded-lg text-purple-500">
<span class="material-symbols-outlined">person_check</span>
</div>
<span class="text-emerald-500 text-xs font-bold flex items-center gap-1">
<span class="material-symbols-outlined text-sm">trending_up</span>
                                +8.4%
                            </span>
</div>
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">المستخدمين النشطين</p>
<h3 class="text-2xl font-bold mt-1"><?= $activeUsers ?></h3>
</div>
</div>
<!-- Charts Section -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
<!-- Line Chart -->
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div style="width: auto; height: 100%;">
  <canvas id="myChart"></canvas>
</div>
</div>
<!-- Bar Chart -->
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="flex justify-between items-center mb-6">
<h4 class="font-bold">التسجيلات الجديدة</h4>
<div class="flex items-center gap-4">
<div class="flex items-center gap-1">
<span class="w-2 h-2 rounded-full bg-primary"></span>
<span class="text-[10px] text-slate-500">خريجين</span>
</div>
<div class="flex items-center gap-1">
<span class="w-2 h-2 rounded-full bg-slate-300 dark:bg-slate-700"></span>
<span class="text-[10px] text-slate-500">شركات</span>
</div>
</div>
</div>
<canvas id="new_registerations"></canvas>

</div>
</div>
<!-- Activity Table -->

</div>
</main>
</div>
<script>
function toggleSidebar() {
    const sidebar = document.getElementById("sidebar");
    sidebar.classList.toggle("translate-x-full");
}
</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: <?= json_encode(array_keys($employmentRates)) ?>,
      datasets: [{
        label: 'معدل توظيف الخريجين ',
        data: <?= json_encode(array_values($employmentRates)) ?>,
         borderColor: '#ec5b13',   // لون الخط
        backgroundColor: '#ec5b13', // لون النقاط
         borderWidth: 2
        
      }]
    },
    options: {
         plugins: {
    legend: {
      labels: {
        font: {
          size: 25   // حجم الخط
        }
      }
    }
  },
         responsive: true,
  maintainAspectRatio: false,
      scales: {
         x: { ticks: { font: { size: 20 } } },
        y: {
          beginAtZero: true, ticks: { font: { size: 20 } }
        }
      }
    }
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const months = <?php echo json_encode($newRegisterations['months']); ?>;
const graduates = <?php echo json_encode(array_values($newRegisterations['graduates'])); ?>;
const companies = <?php echo json_encode(array_values($newRegisterations['companies'])); ?>;

new Chart(document.getElementById('new_registerations'), {
    type: 'bar',
    data: {
        labels: months,
        datasets: [
            {
                label: 'الخريجين',
                data: graduates,
                backgroundColor: '#f25c05', // برتقالي
                borderRadius: 5
            },
            {
                label: 'الشركات',
                data: companies,
                backgroundColor: '#10f053', // رمادي
                borderRadius: 5
            }
        ]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { position: 'top' }
        },
        scales: {
            x: { stacked: true }, // تكديس على المحور X
            y: { stacked: true, beginAtZero: true } // تكديس على المحور Y
        }
    }
});
</script>
 
</body></html>