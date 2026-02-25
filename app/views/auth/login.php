<?php
// login check 

?>

<!DOCTYPE html>
<html lang="en"><head>
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
<nav class="w-full max-w-7xl mx-auto flex justify-end items-center p-6 space-x-6">
<div class="flex items-center space-x-2 text-sm font-medium text-slate-600 dark:text-slate-400">
<button class="hover:text-primary transition-colors">العربية</button>
<span class="text-slate-300">|</span>
<button class="text-primary">English</button>
</div>
<a class="flex items-center space-x-1 text-sm font-medium text-slate-600 dark:text-slate-400 hover:text-primary transition-colors" href="#">
<span class="material-icons text-lg">help_outline</span>
<span>Help Center</span>
</a>
</nav>
<main class="flex-1 flex items-center justify-center p-4 sm:p-6 lg:p-8">
<div class="w-full max-w-5xl bg-white dark:bg-slate-900 rounded-2xl shadow-2xl overflow-hidden flex flex-col md:flex-row min-h-[650px]">
<section class="hidden md:flex md:w-5/12 relative overflow-hidden">
<div class="absolute inset-0">
<img alt="Modern university campus architecture" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDOxwJP5VORmcriP2ScVsjW1GbJEEzM-7TPHOv-T_BXRR-SCW7ixoZbfyn52SOk7JziC0LM3JjMNkAMz6ix7sKogbTD0kA5e4NFyHa170w1oDe6b6AslIUbMJBjLCYQv62J-_Irmb8Bz6bCNq4nq4bq6dU6FDvR5H3j9jrlx16Hos9bDW81GRoQgkCMuugFCq27pUfL263nZZCT4O6Wr8epNb8gZAY8UGLGiwffWo6j0u9jo6--rjTnV__T7g47ALhMQIGXDGxwdc1v"/>
<div class="absolute inset-0 glass-overlay"></div>
</div>
<div class="relative z-10 flex flex-col justify-between p-12 text-white">
<div class="flex items-center space-x-2">
<div class="w-8 h-8 bg-white/20 rounded-lg flex items-center justify-center backdrop-blur-sm">
<span class="material-icons text-sm text-white">school</span>
</div>
<span class="text-xs font-bold tracking-[0.2em] uppercase">GTS Ecosystem</span>
</div>
<div class="space-y-6">
<span class="material-icons text-5xl opacity-40">format_quote</span>
<blockquote class="text-2xl font-light leading-relaxed italic">
                            "GTS helped me bridge the gap between my degree and my dream job. The platform is intuitive and professional."
                        </blockquote>
<div class="flex items-center space-x-4">
<div class="h-px w-8 bg-white/40"></div>
<div>
<p class="text-lg font-semibold">Sarah Jenkins</p>
<p class="text-sm text-white/70">Class of 2023, Alumni</p>
</div>
</div>
</div>
<div class="text-xs text-white/50">
                        © 2024 Graduate Tracking System
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
<div class="p-1.5 bg-slate-100 dark:bg-slate-800 rounded-xl flex mb-10">
<button class="flex-1 py-2.5 text-sm font-semibold rounded-lg bg-white dark:bg-primary text-primary dark:text-white shadow-sm transition-all">Graduate</button>
<button class="flex-1 py-2.5 text-sm font-semibold text-slate-500 dark:text-slate-400 hover:text-slate-700 dark:hover:text-slate-200 transition-all">Employer</button>
<button class="flex-1 py-2.5 text-sm font-semibold text-slate-500 dark:text-slate-400 hover:text-slate-700 dark:hover:text-slate-200 transition-all">Staff</button>
</div>
<form  method="POST" action="<?= BASE_URL?>Auth/login" class="space-y-6">
<div>
<label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2" for="id-email">Email Address / ID</label>
<div class="relative">
<span class="material-icons absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 text-lg">alternate_email</span>
<input class="w-full pl-11 pr-4 py-3.5 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all placeholder:text-slate-400" id="id-email" name="email" placeholder="name@university.edu" type="text"/>
</div>
</div>
<div>
<div class="flex justify-between items-center mb-2">
<label class="block text-sm font-semibold text-slate-700 dark:text-slate-300" for="password">Password</label>
<a class="text-sm font-semibold text-primary hover:underline" href="#">Forgot Password?</a>
</div>
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
</div>
<div class="space-y-4 pt-4">
<button class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-4 px-4 rounded-xl shadow-xl shadow-primary/20 transition-all active:scale-[0.99]" type="submit">
                                Sign In
                            </button>
<div class="relative flex items-center py-2">
<div class="flex-grow border-t border-slate-100 dark:border-slate-800"></div>
<span class="flex-shrink mx-4 text-[10px] font-bold text-slate-400 uppercase tracking-[0.2em]">Partner Login</span>
<div class="flex-grow border-t border-slate-100 dark:border-slate-800"></div>
</div>
<button class="w-full bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-700 text-slate-700 dark:text-white font-bold py-3.5 px-4 rounded-xl flex items-center justify-center space-x-3 transition-all" type="button">
<svg class="w-5 h-5 fill-linkedin" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
</svg>
<span>Sign in with LinkedIn</span>
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