<!DOCTYPE html>

<html class="light" lang="en"><head>
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
                        "display": ["Public Sans"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        body { font-family: 'Public Sans', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100">
<div class="flex h-screen overflow-hidden">
<!-- Sidebar -->
<aside class="w-64 border-r border-slate-200 dark:border-slate-800 bg-white dark:bg-background-dark flex flex-col">
<div class="p-6 flex items-center gap-3 border-b border-slate-200 dark:border-slate-800">
<div class="w-10 h-10 bg-primary rounded-xl flex items-center justify-center text-white">
<span class="material-symbols-outlined">monitoring</span>
</div>
<div>
<h1 class="text-sm font-bold leading-none">GTS Admin</h1>
<p class="text-[10px] text-slate-500 uppercase tracking-widest mt-1">Global Tracking</p>
</div>
</div>
<nav class="flex-1 p-4 space-y-1">
<a class="flex items-center gap-3 px-3 py-2 text-primary bg-primary/10 rounded-xl" href="#">
<span class="material-symbols-outlined">dashboard</span>
<span class="text-sm font-medium">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-xl transition-colors" href="#">
<span class="material-symbols-outlined">group</span>
<span class="text-sm font-medium">User Analytics</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-xl transition-colors" href="#">
<span class="material-symbols-outlined">work</span>
<span class="text-sm font-medium">Employment</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-xl transition-colors" href="#">
<span class="material-symbols-outlined">history</span>
<span class="text-sm font-medium">System Logs</span>
</a>
<div class="pt-4 pb-2 px-3 text-[10px] font-bold text-slate-400 uppercase tracking-wider">Reports</div>
<a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-xl transition-colors" href="#">
<span class="material-symbols-outlined">description</span>
<span class="text-sm font-medium">Performance</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-xl transition-colors" href="#">
<span class="material-symbols-outlined">query_stats</span>
<span class="text-sm font-medium">Metrics Archive</span>
</a>
</nav>
<div class="p-4 border-t border-slate-200 dark:border-slate-800">
<a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-xl transition-colors" href="#">
<span class="material-symbols-outlined">settings</span>
<span class="text-sm font-medium">Settings</span>
</a>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 flex flex-col overflow-y-auto">
<!-- Navbar -->
<header class="h-16 border-b border-slate-200 dark:border-slate-800 bg-white/80 dark:bg-background-dark/80 backdrop-blur-md sticky top-0 z-10 px-8 flex items-center justify-between">
<div class="flex items-center gap-4 flex-1">
<div class="relative w-full max-w-md">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-lg">search</span>
<input class="w-full bg-slate-100 dark:bg-slate-800 border-none rounded-xl pl-10 pr-4 py-2 text-sm focus:ring-2 focus:ring-primary/20" placeholder="Search reports..." type="text"/>
</div>
</div>
<div class="flex items-center gap-4">
<button class="w-10 h-10 flex items-center justify-center rounded-xl hover:bg-slate-100 dark:hover:bg-slate-800 relative">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-2 right-2 w-2 h-2 bg-primary rounded-full"></span>
</button>
<div class="h-8 w-px bg-slate-200 dark:border-slate-800 mx-2"></div>
<div class="flex items-center gap-3 pl-2">
<div class="text-right hidden sm:block">
<p class="text-xs font-bold leading-none">Alex Rivera</p>
<p class="text-[10px] text-slate-500 mt-1">Senior Admin</p>
</div>
<div class="w-10 h-10 rounded-full bg-slate-200 overflow-hidden">
<img alt="User avatar" data-alt="Portrait of a male administrator avatar" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBADLBdU4Xy-EnYxERFiTlaTXAYhqx3dFJIaZ6l_LG_VBIUuMbFIMmf5VR-UqS02GWyFvF2kJR7zYT-2mqt7I7bJlRNZbm-CA5ah4LLtzd21t05JSody8wSKfYF_NcfZe8i8U5IRMFIYo8zZOsrOtHi6tSA15JLfXnxqqgDoa18iepO_oXbMhM5jFkqi5EEZY0d71APg9lhuU_de_e0OuiDkZkKY19LYovi0JqCH72vNQ6FpXOzpqPW8SywfhKWtaHOxdijV3VtdNY"/>
</div>
</div>
</div>
</header>
<div class="p-8 space-y-8">
<!-- Page Header -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
<div>
<h2 class="text-3xl font-extrabold tracking-tight">Reports &amp; Analytics</h2>
<p class="text-slate-500 dark:text-slate-400 mt-1">Real-time overview of system performance and user metrics.</p>
</div>
<div class="flex items-center gap-3">
<button class="flex items-center gap-2 px-4 py-2 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl text-sm font-semibold hover:shadow-sm transition-all">
<span class="material-symbols-outlined text-green-600">file_download</span>
                            Excel
                        </button>
<button class="flex items-center gap-2 px-4 py-2 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl text-sm font-semibold hover:shadow-sm transition-all">
<span class="material-symbols-outlined text-red-500">picture_as_pdf</span>
                            PDF
                        </button>
<button class="flex items-center gap-2 px-5 py-2 bg-primary text-white rounded-xl text-sm font-bold shadow-lg shadow-primary/20 hover:opacity-90 transition-all">
<span class="material-symbols-outlined">add</span>
                            Create Report
                        </button>
</div>
</div>
<!-- Filters -->
<div class="bg-white dark:bg-slate-800/50 p-4 rounded-2xl border border-slate-200 dark:border-slate-800 flex flex-wrap gap-4 items-center">
<div class="flex flex-col gap-1.5 flex-1 min-w-[200px]">
<label class="text-[10px] font-bold uppercase text-slate-400 px-1">Date Range</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-lg">calendar_today</span>
<select class="w-full bg-slate-50 dark:bg-slate-900 border-none rounded-lg pl-10 pr-8 py-2 text-sm focus:ring-1 focus:ring-primary/40 appearance-none">
<option>Last 30 Days</option>
<option>This Quarter</option>
<option>Last 6 Months</option>
<option>Fiscal Year 2023</option>
</select>
</div>
</div>
<div class="flex flex-col gap-1.5 flex-1 min-w-[150px]">
<label class="text-[10px] font-bold uppercase text-slate-400 px-1">Department</label>
<select class="w-full bg-slate-50 dark:bg-slate-900 border-none rounded-lg px-3 py-2 text-sm focus:ring-1 focus:ring-primary/40">
<option>All Departments</option>
<option>Engineering</option>
<option>Sales &amp; Marketing</option>
<option>Human Resources</option>
</select>
</div>
<div class="flex flex-col gap-1.5 flex-1 min-w-[150px]">
<label class="text-[10px] font-bold uppercase text-slate-400 px-1">Role</label>
<select class="w-full bg-slate-50 dark:bg-slate-900 border-none rounded-lg px-3 py-2 text-sm focus:ring-1 focus:ring-primary/40">
<option>All Roles</option>
<option>Admin</option>
<option>Manager</option>
<option>Staff</option>
</select>
</div>
<div class="flex items-end h-full">
<button class="h-10 px-6 bg-slate-900 dark:bg-primary text-white rounded-lg text-sm font-bold">Apply</button>
</div>
</div>
<!-- Metrics Grid -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="bg-white dark:bg-slate-800 p-6 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="flex justify-between items-start mb-4">
<div class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
<span class="material-symbols-outlined">trending_up</span>
</div>
<span class="text-xs font-bold text-green-500 bg-green-50 dark:bg-green-500/10 px-2 py-1 rounded-full">+12.4%</span>
</div>
<h3 class="text-slate-500 dark:text-slate-400 text-sm font-medium">User Growth</h3>
<p class="text-3xl font-black mt-1">24,592</p>
<div class="mt-4 h-1 w-full bg-slate-100 dark:bg-slate-700 rounded-full overflow-hidden">
<div class="h-full bg-primary" style="width: 65%;"></div>
</div>
<p class="text-[11px] text-slate-400 mt-2">Target: 30,000 (82%)</p>
</div>
<div class="bg-white dark:bg-slate-800 p-6 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="flex justify-between items-start mb-4">
<div class="w-12 h-12 rounded-xl bg-blue-100 dark:bg-blue-500/10 text-blue-600 flex items-center justify-center">
<span class="material-symbols-outlined">verified</span>
</div>
<span class="text-xs font-bold text-green-500 bg-green-50 dark:bg-green-500/10 px-2 py-1 rounded-full">+4.2%</span>
</div>
<h3 class="text-slate-500 dark:text-slate-400 text-sm font-medium">Employment Success</h3>
<p class="text-3xl font-black mt-1">88.5%</p>
<div class="mt-4 h-1 w-full bg-slate-100 dark:bg-slate-700 rounded-full overflow-hidden">
<div class="h-full bg-blue-500" style="width: 88%;"></div>
</div>
<p class="text-[11px] text-slate-400 mt-2">Global Benchmark: 75%</p>
</div>
<div class="bg-white dark:bg-slate-800 p-6 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="flex justify-between items-start mb-4">
<div class="w-12 h-12 rounded-xl bg-orange-100 dark:bg-orange-500/10 text-orange-600 flex items-center justify-center">
<span class="material-symbols-outlined">bolt</span>
</div>
<span class="text-xs font-bold text-red-500 bg-red-50 dark:bg-red-500/10 px-2 py-1 rounded-full">-2.1%</span>
</div>
<h3 class="text-slate-500 dark:text-slate-400 text-sm font-medium">System Activity</h3>
<p class="text-3xl font-black mt-1">142.8k</p>
<div class="mt-4 h-1 w-full bg-slate-100 dark:bg-slate-700 rounded-full overflow-hidden">
<div class="h-full bg-orange-500" style="width: 45%;"></div>
</div>
<p class="text-[11px] text-slate-400 mt-2">Avg. Response: 120ms</p>
</div>
</div>
<!-- Visualization Row -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
<!-- Pie Chart Simulation -->
<div class="bg-white dark:bg-slate-800 p-8 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="flex items-center justify-between mb-8">
<h3 class="font-bold text-lg">Users by Role</h3>
<button class="text-slate-400 hover:text-slate-600">
<span class="material-symbols-outlined">more_horiz</span>
</button>
</div>
<div class="flex flex-col md:flex-row items-center gap-12">
<div class="relative w-48 h-48">
<svg class="w-full h-full -rotate-90" viewbox="0 0 36 36">
<circle cx="18" cy="18" fill="transparent" r="16" stroke="#f1f5f9" stroke-width="4"></circle>
<circle cx="18" cy="18" fill="transparent" r="16" stroke="#ec5b13" stroke-dasharray="45, 100" stroke-width="4"></circle>
<circle cx="18" cy="18" fill="transparent" r="16" stroke="#3b82f6" stroke-dasharray="30, 100" stroke-dashoffset="-45" stroke-width="4"></circle>
<circle cx="18" cy="18" fill="transparent" r="16" stroke="#10b981" stroke-dasharray="25, 100" stroke-dashoffset="-75" stroke-width="4"></circle>
</svg>
<div class="absolute inset-0 flex flex-col items-center justify-center">
<span class="text-2xl font-black">100%</span>
<span class="text-[10px] uppercase font-bold text-slate-400 tracking-wider">Total</span>
</div>
</div>
<div class="flex-1 space-y-4">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<div class="w-3 h-3 rounded-full bg-primary"></div>
<span class="text-sm font-medium text-slate-600 dark:text-slate-400">Admin</span>
</div>
<span class="text-sm font-bold">45%</span>
</div>
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<div class="w-3 h-3 rounded-full bg-blue-500"></div>
<span class="text-sm font-medium text-slate-600 dark:text-slate-400">Manager</span>
</div>
<span class="text-sm font-bold">30%</span>
</div>
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<div class="w-3 h-3 rounded-full bg-emerald-500"></div>
<span class="text-sm font-medium text-slate-600 dark:text-slate-400">Staff</span>
</div>
<span class="text-sm font-bold">25%</span>
</div>
</div>
</div>
</div>
<!-- Bar Chart Simulation -->
<div class="bg-white dark:bg-slate-800 p-8 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="flex items-center justify-between mb-8">
<h3 class="font-bold text-lg">Employment by Major</h3>
<button class="text-slate-400 hover:text-slate-600">
<span class="material-symbols-outlined">more_horiz</span>
</button>
</div>
<div class="flex flex-col gap-6">
<div class="space-y-2">
<div class="flex justify-between text-sm font-medium">
<span>Computer Science</span>
<span class="text-primary font-bold">92%</span>
</div>
<div class="h-3 w-full bg-slate-100 dark:bg-slate-700 rounded-full overflow-hidden">
<div class="h-full bg-primary rounded-full" style="width: 92%;"></div>
</div>
</div>
<div class="space-y-2">
<div class="flex justify-between text-sm font-medium">
<span>Business Administration</span>
<span class="text-primary font-bold">78%</span>
</div>
<div class="h-3 w-full bg-slate-100 dark:bg-slate-700 rounded-full overflow-hidden">
<div class="h-full bg-primary rounded-full" style="width: 78%;"></div>
</div>
</div>
<div class="space-y-2">
<div class="flex justify-between text-sm font-medium">
<span>Mechanical Engineering</span>
<span class="text-primary font-bold">85%</span>
</div>
<div class="h-3 w-full bg-slate-100 dark:bg-slate-700 rounded-full overflow-hidden">
<div class="h-full bg-primary rounded-full" style="width: 85%;"></div>
</div>
</div>
<div class="space-y-2">
<div class="flex justify-between text-sm font-medium">
<span>Design &amp; Arts</span>
<span class="text-primary font-bold">64%</span>
</div>
<div class="h-3 w-full bg-slate-100 dark:bg-slate-700 rounded-full overflow-hidden">
<div class="h-full bg-primary rounded-full" style="width: 64%;"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Table Content -->
<div class="bg-white dark:bg-slate-800 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
<div class="p-6 border-b border-slate-200 dark:border-slate-800 flex justify-between items-center">
<h3 class="font-bold">Recent System Logs</h3>
<a class="text-primary text-sm font-bold hover:underline" href="#">View All</a>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left">
<thead class="bg-slate-50 dark:bg-slate-900/50 text-[10px] font-black uppercase text-slate-400">
<tr>
<th class="px-6 py-4">Status</th>
<th class="px-6 py-4">User</th>
<th class="px-6 py-4">Action</th>
<th class="px-6 py-4">Timestamp</th>
<th class="px-6 py-4 text-right">Details</th>
</tr>
</thead>
<tbody class="text-sm divide-y divide-slate-100 dark:divide-slate-800">
<tr>
<td class="px-6 py-4">
<span class="flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-green-500"></span>
<span class="font-medium">Success</span>
</span>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-slate-100">
<img alt="User avatar" data-alt="Avatar of user John" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAb_G7EAVNTHYSW57qXHjQy-OCtGQ_V5B4__frgz-6nbOnLFeV45XNzF3CvWDqeTplucvLSbbuo9tCgfH6v54_P9m1Z31ysZHakIsg6ICVlIYwWHxZJ9DPtA_9vFRtsCWtC2TFzogvobhtrRiQTqXnbn4CfTHw0IE6eYaaUlutipw0VOfHHbFjVL6LTjRe1VIwXuC6Q4j6hNxptLIk2DC_dZkHfizpr463fTXY7vrHbtTqSjXprc4EccTySRyPkoKsN5KrccW9mXYI"/>
</div>
<span class="font-semibold">John Doe</span>
</div>
</td>
<td class="px-6 py-4 text-slate-600 dark:text-slate-400">Updated user employment status</td>
<td class="px-6 py-4 text-slate-500">2 mins ago</td>
<td class="px-6 py-4 text-right">
<button class="material-symbols-outlined text-slate-400 hover:text-primary">visibility</button>
</td>
</tr>
<tr>
<td class="px-6 py-4">
<span class="flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-yellow-500"></span>
<span class="font-medium">Pending</span>
</span>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-slate-100">
<img alt="User avatar" data-alt="Avatar of user Sarah" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDZiaVd3QN3_yp21IMz3IZfU34wwrcHU28qbyv9dZDQLdEkJdtU18kSQqQr7z2PuhZ4wPtEYOFaBIxc95j1TDU2ufN3gXud_j6DhiRVzs9oAt_4LR3Bbu0mpwkChrrdmjvpfScb0IDsYReowa0Hplhl4_unAgtH3VqO3T6XEqpwfz0dP-RffsQOzX_CazgnxaYcsnQu60CxjqV_mZJN7OUha9aqPWt7_NUSnPekZLCyQe-GJk9Mqnyu2MCS-7omRQUmOlPKHATeIlc"/>
</div>
<span class="font-semibold">Sarah Smith</span>
</div>
</td>
<td class="px-6 py-4 text-slate-600 dark:text-slate-400">Exported monthly metrics report</td>
<td class="px-6 py-4 text-slate-500">15 mins ago</td>
<td class="px-6 py-4 text-right">
<button class="material-symbols-outlined text-slate-400 hover:text-primary">visibility</button>
</td>
</tr>
<tr>
<td class="px-6 py-4">
<span class="flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-red-500"></span>
<span class="font-medium">Failed</span>
</span>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-slate-100">
<img alt="User avatar" data-alt="System automation avatar" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDHFi9ZFJ1Y9BsJcdw8XWli2qn7B7D-Pr3SmBNpyhaXWBpkbWsWy8TO3Hop7cKXVNYk4LMw3WR5Iak3q1qJRaQvCR1YuBgZTXkWfC79OpCznDTllivl3vbG1EZCZEoJTCmD23Sjsf3Zjb8LmJMQA3u2ZMPwipDccSp98e2l2DdPMLpK_Q94hhdMl77acoa6YNJxg8XWoAX_nvcmruOjY2tDz5bG73I0GtJZQeFB2d1S-Pxz-088jI3-l17qtVGXAa3I_yIiDy_gz-U"/>
</div>
<span class="font-semibold">System Cron</span>
</div>
</td>
<td class="px-6 py-4 text-slate-600 dark:text-slate-400">Database synchronization failure</td>
<td class="px-6 py-4 text-slate-500">1 hour ago</td>
<td class="px-6 py-4 text-right">
<button class="material-symbols-outlined text-slate-400 hover:text-primary">visibility</button>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<!-- Footer -->
<footer class="p-8 border-t border-slate-200 dark:border-slate-800 text-center text-slate-400 text-xs">
                © 2023 GTS Admin Portal. All rights reserved. System Version 4.2.1-stable
            </footer>
</main>
</div>
</body></html>