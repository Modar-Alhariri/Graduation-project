<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Graduate Portal Dashboard</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#135bec",
                        "background-light": "#f6f6f8",
                        "background-dark": "#101622",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
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
            font-family: 'Inter', sans-serif;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .active-nav {
            background-color: rgba(19, 91, 236, 0.1);
            color: #135bec;
            border-left: 4px solid #135bec;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-display">
<div class="flex min-h-screen">
<!-- Sidebar -->
<aside class="w-64 bg-white dark:bg-slate-900 border-r border-slate-200 dark:border-slate-800 flex flex-col fixed h-full">
<div class="p-6 flex items-center gap-3">
<div class="bg-primary rounded-lg p-2 text-white">
<span class="material-symbols-outlined">school</span>
</div>
<div>
<h1 class="text-lg font-bold leading-none">GTS Portal</h1>
<p class="text-xs text-slate-500 dark:text-slate-400">Graduate Tracking</p>
</div>
</div>
<nav class="flex-1 px-4 py-4 space-y-1">
<a class="flex items-center gap-3 px-4 py-3 rounded-lg active-nav group" href="#">
<span class="material-symbols-outlined">dashboard</span>
<span class="font-medium">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-lg group" href="#">
<span class="material-symbols-outlined">person</span>
<span class="font-medium">Profile</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-lg group" href="#">
<span class="material-symbols-outlined">description</span>
<span class="font-medium">CV Builder</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-lg group" href="#">
<span class="material-symbols-outlined">work</span>
<span class="font-medium">Jobs</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-lg group" href="#">
<span class="material-symbols-outlined">notifications</span>
<span class="font-medium">Notifications</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-lg group" href="#">
<span class="material-symbols-outlined">poll</span>
<span class="font-medium">Surveys</span>
</a>
</nav>
<div class="p-4 border-t border-slate-200 dark:border-slate-800">
<div class="flex items-center gap-3 p-2 rounded-lg bg-slate-50 dark:bg-slate-800/50">
<div class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center text-primary font-bold">AB</div>
<div class="flex-1 overflow-hidden">
<p class="text-sm font-semibold truncate">Alex Bennett</p>
<p class="text-xs text-slate-500 truncate">Computer Science '24</p>
</div>
<button class="text-slate-400 hover:text-slate-600">
<span class="material-symbols-outlined text-xl">settings</span>
</button>
</div>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 ml-64 p-8">
<!-- Header -->
<header class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
<div>
<h2 class="text-3xl font-black tracking-tight">Welcome back, Alex! 👋</h2>
<p class="text-slate-500 dark:text-slate-400 mt-1">Here is an overview of your career progress and opportunities.</p>
</div>
<div class="flex items-center gap-3">
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
<input class="pl-10 pr-4 py-2 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl focus:ring-2 focus:ring-primary focus:border-primary outline-none text-sm w-64" placeholder="Search jobs, articles..." type="text"/>
</div>
<button class="bg-primary text-white px-4 py-2 rounded-xl font-bold text-sm flex items-center gap-2 hover:bg-primary/90 transition-colors">
<span class="material-symbols-outlined text-lg">add</span>
                        Update CV
                    </button>
</div>
</header>
<div class="grid grid-cols-12 gap-6">
<!-- Profile Strength Widget -->
<div class="col-span-12 lg:col-span-4 bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 flex flex-col items-center justify-center text-center">
<h3 class="text-lg font-bold mb-6 self-start w-full text-left">Profile Strength</h3>
<div class="relative w-40 h-40 flex items-center justify-center mb-6">
<svg class="w-full h-full -rotate-90">
<circle class="text-slate-100 dark:text-slate-800" cx="80" cy="80" fill="transparent" r="70" stroke="currentColor" stroke-width="12"></circle>
<circle class="text-primary rounded-full" cx="80" cy="80" fill="transparent" r="70" stroke="currentColor" stroke-dasharray="440" stroke-dashoffset="110" stroke-width="12"></circle>
</svg>
<div class="absolute inset-0 flex flex-col items-center justify-center">
<span class="text-3xl font-black text-primary">75%</span>
<span class="text-[10px] uppercase font-bold tracking-wider text-slate-400">Complete</span>
</div>
</div>
<p class="text-sm text-slate-600 dark:text-slate-400 mb-4">You're doing great! Complete your skills and projects section to reach 100%.</p>
<button class="w-full py-2 bg-primary/10 text-primary rounded-lg font-bold text-sm hover:bg-primary/20 transition-colors">Complete Profile</button>
</div>
<!-- Recent Applications -->
<div class="col-span-12 lg:col-span-8 bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800">
<div class="flex items-center justify-between mb-6">
<h3 class="text-lg font-bold">Recent Applications</h3>
<a class="text-sm text-primary font-semibold hover:underline" href="#">View all</a>
</div>
<div class="space-y-4">
<div class="flex items-center justify-between p-4 bg-slate-50 dark:bg-slate-800/50 rounded-lg">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-lg bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 flex items-center justify-center overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Tech corp logo" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDIAy1IOyldQJC2JERlCYwy7_-7u-ZUJlQ8ZtgZ8W9uDZbNyEiPCqfOkjI_U4Shc3yhyzs_wWKg5dtWnim89F2M6pOXzpGtjT9t04-nX5KpLu2pcJF574HnwyaNzWwtoO85N0YpdbRg_Hs9XoBDWPEmSd4YZuRT6MsJ22xoWBT9L3mQyQEmMlS-CPj1ZUzwP87tLAc2jo4CfwjXx2Io8k3FJeBil-bXl_8lACNy6OGL7akNEu2RW6PVtPzgvpF7-y4A4EvPNThlj5g"/>
</div>
<div>
<p class="font-bold text-sm">Frontend Developer</p>
<p class="text-xs text-slate-500">TechCorp Solutions • Applied 2 days ago</p>
</div>
</div>
<span class="px-3 py-1 bg-yellow-100 text-yellow-700 dark:bg-yellow-900/30 dark:text-yellow-400 text-[10px] font-black uppercase tracking-wider rounded-full">Under Review</span>
</div>
<div class="flex items-center justify-between p-4 bg-slate-50 dark:bg-slate-800/50 rounded-lg">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-lg bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 flex items-center justify-center overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Startup hub logo" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCo69IXVr3YgU24Wb-tp-HcW7xXPCPxghSBqev6xx-qeogSQ0gTdzJZXo4iDSkELxpnfakQG6HbkVVB9Qw157b4ILb6QsUluqqHXuyznWH-3RkfM-UagCnd_KfkCmwtTuaS3uoVn7p_N49n1Oj3MMVIsqM2aJg2Cz1jHRTzct1ATHPz56Wl_PYGujjQ80ofj8pKHku3O9bJZFTRDkPPwmm60Cngc8oqPjaOHH_c2ga7t6VMYJexxoF7v1nUh3Jc9Zkc2QVFg1zaBX8"/>
</div>
<div>
<p class="font-bold text-sm">Product Intern</p>
<p class="text-xs text-slate-500">StartupHub • Applied 5 days ago</p>
</div>
</div>
<span class="px-3 py-1 bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400 text-[10px] font-black uppercase tracking-wider rounded-full">Interviewing</span>
</div>
<div class="flex items-center justify-between p-4 bg-slate-50 dark:bg-slate-800/50 rounded-lg">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-lg bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 flex items-center justify-center overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Global finance logo" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDJ5ZzGVYqbmZYjXsxr28g-BOMM7ahETpxLokFIq8rlsAwvTqUzf0h7pMUiQRdUCFdv1Q8c0ZOSXjwG6Y-ArwG4JPbnM8hXcUr6sjdlr7Lm-zUdxvArFucrVlqKPmiRzkHqJPV1ZfusPmhM_5dJ8Sg2Mj9AwjrirvhLWp36z-u5pTrZZ0ic8yJMUQT5IoyUOs61AfdUPv2g-1NbhgvPZQ2YgQTi2t7ct0zTyi8f56IyYXZibJ7MVO8JiduCB2tSQWn6NrkAyUZ-rFI"/>
</div>
<div>
<p class="font-bold text-sm">Junior Analyst</p>
<p class="text-xs text-slate-500">Global Finance • Applied 1 week ago</p>
</div>
</div>
<span class="px-3 py-1 bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 text-[10px] font-black uppercase tracking-wider rounded-full">Offer Received</span>
</div>
</div>
</div>
<!-- Recommended Jobs Carousel Section -->
<div class="col-span-12">
<div class="flex items-center justify-between mb-4">
<h3 class="text-xl font-bold">Recommended Jobs for You</h3>
<div class="flex gap-2">
<button class="w-8 h-8 rounded-full border border-slate-200 dark:border-slate-800 flex items-center justify-center hover:bg-slate-50 dark:hover:bg-slate-800">
<span class="material-symbols-outlined text-sm">chevron_left</span>
</button>
<button class="w-8 h-8 rounded-full border border-slate-200 dark:border-slate-800 flex items-center justify-center hover:bg-slate-50 dark:hover:bg-slate-800">
<span class="material-symbols-outlined text-sm">chevron_right</span>
</button>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<!-- Job Card 1 -->
<div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 p-5 rounded-xl hover:shadow-lg transition-shadow">
<div class="flex justify-between items-start mb-4">
<div class="w-12 h-12 rounded-lg bg-blue-50 dark:bg-blue-900/20 flex items-center justify-center">
<span class="material-symbols-outlined text-primary">data_object</span>
</div>
<button class="text-slate-400 hover:text-primary">
<span class="material-symbols-outlined">bookmark</span>
</button>
</div>
<h4 class="font-bold text-base mb-1">Software Engineer Trainee</h4>
<p class="text-sm text-slate-500 mb-4">Innovate Systems • Remote</p>
<div class="flex flex-wrap gap-2 mb-4">
<span class="px-2 py-1 bg-slate-100 dark:bg-slate-800 text-[10px] font-medium rounded text-slate-600 dark:text-slate-400">Python</span>
<span class="px-2 py-1 bg-slate-100 dark:bg-slate-800 text-[10px] font-medium rounded text-slate-600 dark:text-slate-400">React</span>
<span class="px-2 py-1 bg-slate-100 dark:bg-slate-800 text-[10px] font-medium rounded text-slate-600 dark:text-slate-400">AWS</span>
</div>
<div class="flex items-center justify-between pt-4 border-t border-slate-100 dark:border-slate-800">
<p class="text-sm font-bold text-primary">$45k - $60k</p>
<button class="text-xs font-bold uppercase tracking-tight text-slate-500 hover:text-primary">Details</button>
</div>
</div>
<!-- Job Card 2 -->
<div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 p-5 rounded-xl hover:shadow-lg transition-shadow">
<div class="flex justify-between items-start mb-4">
<div class="w-12 h-12 rounded-lg bg-purple-50 dark:bg-purple-900/20 flex items-center justify-center">
<span class="material-symbols-outlined text-purple-600">palette</span>
</div>
<button class="text-slate-400 hover:text-primary">
<span class="material-symbols-outlined">bookmark</span>
</button>
</div>
<h4 class="font-bold text-base mb-1">UI/UX Designer</h4>
<p class="text-sm text-slate-500 mb-4">Creative Agency • Hybrid</p>
<div class="flex flex-wrap gap-2 mb-4">
<span class="px-2 py-1 bg-slate-100 dark:bg-slate-800 text-[10px] font-medium rounded text-slate-600 dark:text-slate-400">Figma</span>
<span class="px-2 py-1 bg-slate-100 dark:bg-slate-800 text-[10px] font-medium rounded text-slate-600 dark:text-slate-400">UI/UX</span>
</div>
<div class="flex items-center justify-between pt-4 border-t border-slate-100 dark:border-slate-800">
<p class="text-sm font-bold text-primary">$40k - $55k</p>
<button class="text-xs font-bold uppercase tracking-tight text-slate-500 hover:text-primary">Details</button>
</div>
</div>
<!-- Job Card 3 -->
<div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 p-5 rounded-xl hover:shadow-lg transition-shadow">
<div class="flex justify-between items-start mb-4">
<div class="w-12 h-12 rounded-lg bg-green-50 dark:bg-green-900/20 flex items-center justify-center">
<span class="material-symbols-outlined text-green-600">leaderboard</span>
</div>
<button class="text-slate-400 hover:text-primary">
<span class="material-symbols-outlined">bookmark</span>
</button>
</div>
<h4 class="font-bold text-base mb-1">Data Analyst Intern</h4>
<p class="text-sm text-slate-500 mb-4">Metro Bank • New York</p>
<div class="flex flex-wrap gap-2 mb-4">
<span class="px-2 py-1 bg-slate-100 dark:bg-slate-800 text-[10px] font-medium rounded text-slate-600 dark:text-slate-400">SQL</span>
<span class="px-2 py-1 bg-slate-100 dark:bg-slate-800 text-[10px] font-medium rounded text-slate-600 dark:text-slate-400">Tableau</span>
</div>
<div class="flex items-center justify-between pt-4 border-t border-slate-100 dark:border-slate-800">
<p class="text-sm font-bold text-primary">$35/hr</p>
<button class="text-xs font-bold uppercase tracking-tight text-slate-500 hover:text-primary">Details</button>
</div>
</div>
</div>
</div>
<!-- Upcoming Surveys & Notifications -->
<div class="col-span-12 lg:col-span-12 bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800">
<h3 class="text-lg font-bold mb-6">Upcoming Surveys &amp; Action Items</h3>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div class="flex items-start gap-4 p-4 border border-slate-100 dark:border-slate-800 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
<div class="bg-primary/10 text-primary p-3 rounded-lg">
<span class="material-symbols-outlined">assignment</span>
</div>
<div>
<h4 class="font-bold text-sm">Annual Graduate Employment Survey</h4>
<p class="text-xs text-slate-500 mt-1">Help us track your career journey since graduation. Takes 5 minutes.</p>
<button class="mt-3 text-primary text-xs font-bold flex items-center gap-1">
                                    Start Now <span class="material-symbols-outlined text-sm">arrow_forward</span>
</button>
</div>
</div>
<div class="flex items-start gap-4 p-4 border border-slate-100 dark:border-slate-800 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
<div class="bg-primary/10 text-primary p-3 rounded-lg">
<span class="material-symbols-outlined">rate_review</span>
</div>
<div>
<h4 class="font-bold text-sm">Internship Feedback Form</h4>
<p class="text-xs text-slate-500 mt-1">Share your experience at TechCorp Solutions to help future graduates.</p>
<button class="mt-3 text-primary text-xs font-bold flex items-center gap-1">
                                    Start Now <span class="material-symbols-outlined text-sm">arrow_forward</span>
</button>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
</body></html>