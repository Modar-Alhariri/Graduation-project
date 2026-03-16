<?php
// login check 

?>

<!DOCTYPE html>
<html dir="<?= $_SESSION['lang']=='ar'?'rtl':'ltr' ?>" 

      lang="<?= $_SESSION['lang']=='ar'?'ar':'en' ?>">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>GTS - Graduate Tracking System Login</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "primary": "#0f49bd",
              "background-light": "#f8fafc",
              "background-dark": "#0f172a",
              "linkedin": "#0077B5",
            },
            fontFamily: {
              "display": ["Inter", "sans-serif"]
            },
            borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "2xl": "1rem", "full": "9999px"},
          },
        },
      }
    </script>
<style type="text/tailwindcss">
        @layer utilities {
            .glass-overlay {
                background: linear-gradient(135deg, rgba(15, 73, 189, 0.85) 0%, rgba(10, 50, 130, 0.95) 100%);
            }
        }
    </style>
</head>
<body class="font-display bg-background-light dark:bg-background-dark min-h-screen flex flex-col">

<main class="flex-1 flex items-center justify-center p-4 sm:p-6 lg:p-8">
<div class="w-full max-w-5xl bg-white dark:bg-slate-900 rounded-2xl shadow-2xl overflow-hidden flex flex-col md:flex-row min-h-[650px]">
<section class="hidden md:flex md:w-5/12 relative overflow-hidden">
  <div class="absolute top-6 left-6 z-50">

<?php if($_SESSION['lang'] == 'ar'): ?> 
    
    <a href="<?= BASE_URL ?>Language/change/en"
       class="flex items-center gap-2 px-5 py-3 border-2 border-primary text-primary rounded-xl font-bold 
       hover:bg-primary hover:text-white transition-all duration-300 
       bg-white/80 backdrop-blur-sm shadow-lg">

        <span class="material-symbols-outlined text-xl">language</span>
        EN

    </a>

<?php else: ?>

    <a href="<?= BASE_URL ?>Language/change/ar"
       class="flex items-center gap-2 px-5 py-3 border-2 border-primary text-primary rounded-xl font-bold 
       hover:bg-primary hover:text-white transition-all duration-300 
       bg-white/80 backdrop-blur-sm shadow-lg">

        <span class="material-symbols-outlined text-xl">language</span>
        AR

    </a>

<?php endif; ?>

</div>
    <!-- Background Image -->
    <img 
        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDw-FkhMHy0JFMv0Iq5trTJQlfN6_JU6ynBo5Zh-XSsgSvD0OLSh9YMFP7OQl3NB4x95nUqs7YK4UZ0l4qhPZEDUzICvbjIvRklYnarnT7isADFtordcV0Othuha1BdIFfdr6QT8ATcvTdca7MFrVx81SG3VQ0ty8Bx-mXqSkV-3ybk6MKZLXD-nw1DqcvLcHff_Izr2sE0Tf50UPgmnYzNCCsc3hErlaHZXLpfLUT4hyv0nquMs3XqaLsCZyP9EL0QZhsWufISx30"
        class="absolute inset-0 w-full h-full object-cover"
        alt="University Campus">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-gradient-to-br from-primary/90 to-slate-900/95 flex flex-col items-center justify-center text-center text-white p-12">

        <!-- Logo -->
        <div class="mb-8 p-4 bg-white/10 backdrop-blur-md rounded-2xl border border-white/20">
            <div class="w-20 h-20 bg-primary flex items-center justify-center rounded-xl shadow-xl">
                <span class="material-symbols-outlined text-5xl text-white">
                    school
                </span>
            </div>
        </div>

        <!-- Title -->
        <h1 class="text-4xl font-bold mb-4">
            Welcome to the GTS System
        </h1>

        <!-- Description -->
        <p class="text-lg text-slate-200 max-w-md leading-relaxed">
            The integrated platform for tracking graduates and connecting them with companies and career opportunities.
        </p>

        <!-- Indicators -->
        <div class="mt-12 flex space-x-4">
            <div class="h-1 w-12 bg-yellow-400 rounded-full"></div>
            <div class="h-1 w-4 bg-white/30 rounded-full"></div>
            <div class="h-1 w-4 bg-white/30 rounded-full"></div>
        </div>

    </div>

</section>
<section class="w-full md:w-7/12 p-8 sm:p-12 lg:p-16 flex flex-col justify-center">
<div class="max-w-md mx-auto w-full">
<div class="flex items-center space-x-3 mb-12">
<div class="w-10 h-10 bg-primary rounded-xl flex items-center justify-center shadow-lg shadow-primary/20">
<span class="material-icons text-white">insights</span>
</div>
<span class="text-2xl font-bold text-slate-900 dark:text-white tracking-tight">GTS Portal</span>
</div>
<header class="mb-10">
<h1 class="text-3xl font-bold text-slate-900 dark:text-white mb-2">Welcome Back</h1>
<p class="text-slate-500 dark:text-slate-400">Please enter your credentials to access your dashboard.</p>
</header>
<form  method="POST" action="<?= BASE_URL?>Auth/login" class="space-y-6">
<div>
<label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2" for="id-email">Email Address / ID</label>
<div class="relative">
<span class="material-icons absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 text-lg">alternate_email</span>
<input class="w-full pl-11 pr-4 py-3.5 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all placeholder:text-slate-400" id="id-email" name="email" placeholder="name@university.edu" type="text"/>
</div>
</div>
<div>

<div class="relative">
<span class="material-icons absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 text-lg">lock_outline</span>
<input class="w-full pl-11 pr-4 py-3.5 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all placeholder:text-slate-400" id="password" name="password" placeholder="••••••••" type="password"/>
</div>
</div>
<div class="flex items-center justify-between">
<div class="flex items-center">
<input class="w-4 h-4 text-primary border-slate-300 dark:border-slate-700 rounded focus:ring-primary bg-white dark:bg-slate-900" id="remember" name="remember" type="checkbox"/>
<label class="ml-2 text-sm text-slate-600 dark:text-slate-400" for="remember">Keep me signed in</label>
</div>
<div class="flex justify-between items-center mb-2">
<a class="text-sm font-semibold text-primary hover:underline" href="#">Forgot Password?</a>
</div>
</div>
<div class="space-y-4 pt-4">
<button class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-4 px-4 rounded-xl shadow-xl shadow-primary/20 transition-all active:scale-[0.99]" type="submit">
                                Sign In
                            </button>


</div>
</form>
<footer class="mt-12 pt-8 border-t border-slate-100 dark:border-slate-800 text-center">
<p class="text-sm text-slate-600 dark:text-slate-400">
                            New to the portal? 
                            <a class="font-bold text-primary hover:underline ml-1" href=  "<?= BASE_URL?>Auth/register">Create an account</a>
</p>
</footer>
</div>
</section>
</div>
</main>
<footer class="w-full max-w-7xl mx-auto px-8 py-8 flex flex-col sm:flex-row justify-between items-center gap-4">
<p class="text-xs text-slate-400 tracking-wide">© 2024 Graduate Tracking System. All rights reserved.</p>
<div class="flex space-x-6 text-xs font-medium text-slate-400">
<a class="hover:text-primary transition-colors" href="#">Privacy Policy</a>
<a class="hover:text-primary transition-colors" href="#">Terms of Service</a>
<a class="hover:text-primary transition-colors" href="#">System Status</a>
</div>
</footer>

</body></html>