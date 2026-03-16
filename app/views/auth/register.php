<!DOCTYPE html>
<html dir="<?= $_SESSION['lang']=='ar'?'rtl':'ltr' ?>" 

      lang="<?= $_SESSION['lang']=='ar'?'ar':'en' ?>">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#1152d4",
                        "navy-blue": "#0a192f",
                        "background-light": "#f8fafc",
                        "background-dark": "#0f172a",
                    },
                    fontFamily: {
                        "display": ["Lexend"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.375rem",
                        "lg": "0.5rem",
                        "xl": "1rem",
                        "2xl": "1.5rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
<style type="text/tailwindcss">
        .floating-label-group {
            @apply relative;
        }
        .floating-label-group input:focus ~ label,
        .floating-label-group input:not(:placeholder-shown) ~ label {
            @apply -top-2.5 left-3 text-xs text-primary bg-white px-1;
        }
        .floating-label-group label {
            @apply absolute top-3.5 left-4 transition-all duration-200 pointer-events-none text-slate-500;
        }.custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #e2e8f0;
            border-radius: 10px;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display min-h-screen flex items-center justify-center p-4 md:p-8">

<main class="w-full max-w-6xl bg-white dark:bg-slate-900 rounded-2xl shadow-2xl shadow-slate-200 dark:shadow-none overflow-hidden flex flex-col lg:flex-row min-h-[850px]">
<section class="hidden lg:flex lg:w-5/12 relative flex-col justify-center items-center p-12 text-white overflow-hidden">

<div class="absolute top-6 left-6 z-50">
<?php if($_SESSION['lang'] == 'ar'): ?> 
    <a href="<?= BASE_URL ?>Language/change/en"
       class="flex items-center gap-2 px-5 py-3 border-2 border-primary text-primary rounded-xl font-bold 
       hover:bg-primary hover:text-white transition-all duration-300 
       bg-white/80 backdrop-blur-sm shadow-lg">

        <!-- أيقونة الكرة الأرضية -->
        <span class="material-icons text-xl">public</span>
        EN
    </a>
<?php else: ?>
    <a href="<?= BASE_URL ?>Language/change/ar"
       class="flex items-center gap-2 px-5 py-3 border-2 border-primary text-primary rounded-xl font-bold 
       hover:bg-primary hover:text-white transition-all duration-300 
       bg-white/80 backdrop-blur-sm shadow-lg">

        <span class="material-icons text-xl">public</span>
        AR
    </a>
<?php endif; ?>
</div>
<div class="absolute inset-0 z-0">
    
<img alt="University Library" class="w-full h-full object-cover scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCuHtUC_ZpD6e11celWKRe3AEnCg9XiGk5fxLrmmYij2QgFe-ad1nLuzbKQUUG4GrFKM8hUPOhaVWxz3TKRswZ3oGjkq1DNBV7bhBXWyEnrCDfH3Nq2G5LJXgFKAt4m0_cDCCneA4L69THjIYA3y4bjtRBPCrW5MTV782KRyswCdqQUMuFuvatJUbXty7toZiLQ8VgQLMLCLBqki35S90IlJPJcVR8Y6oQfH9ps_V0qVpF4Xzzina1WVxqYDrDRS9-_zgwiIBQpETx5"/>
<div class="absolute inset-0 bg-navy-blue/60 mix-blend-multiply"></div>
<div class="absolute inset-0 bg-gradient-to-br from-primary/40 to-navy-blue/80"></div>
</div>
<div class="relative z-10 text-center flex flex-col items-center">
<div class="mb-8 inline-flex items-center justify-center w-24 h-24 bg-white/10 backdrop-blur-xl rounded-3xl border border-white/30 shadow-2xl">
<span class="material-symbols-outlined text-5xl text-white">school</span>
</div>
<h1 class="text-4xl font-bold mb-6 leading-tight tracking-tight">Join a network of excellence</h1>
<p class="text-lg text-white/80 font-light max-w-sm mb-12">Unlock your professional potential and connect with high-achieving alumni and global institutions.</p>
<div class="flex flex-col items-center gap-4">
<div class="flex -space-x-3">
<img alt="Professional portrait" class="h-12 w-12 rounded-full border-2 border-white/50 object-cover shadow-lg" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDJiw1PyF0ZU3HBUUMTJEL48dHUfItoA4oPMQu0Qa-qtVDQSVtoSyEEibTf6YospulIQvm5tyQaFlbFdNe0xu2D-V-4r7wVBgDLAnPn3M-mf-2369Xvw3F8GzYu3CC8qWmhwhS-PzR4_cm8zJ5yx73XYfC8qUsDlTaq3pB61uOKdyvFXk8HlhrJAmnlOgZdk26z6AFZephibkF1YWiFVBqbFoBNOGRDdnqxIZfTxGGhyCPUPJ19fmPVa53JhkSyhTXRAYuRbosh9BV_"/>
<img alt="Professional portrait" class="h-12 w-12 rounded-full border-2 border-white/50 object-cover shadow-lg" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA2B2z-My9QnqfDJhvhrR2FZzOdw5c_T2Fr6rzRaxosAex6u4McRkM2K77oQrhEvWvsixRxSwWLcHN6JB7uoer_DDbNupHwtamIazOT5U6QEgN1x1hR_ouBllW7aJGFeDXLL0vKFivo_FCdK0VTXSc8sBuh2Y4PstZdDSKXItUERHym02rySEcjl5lPJXjQSctyWrTsWw_46-PZZ2kIzp4z2CtVNAI8XCS-v5TL40EPPgHf7JpDrgU4eR9Q2_bl1P4mv7hqKWMF0_VA"/>
<img alt="Professional portrait" class="h-12 w-12 rounded-full border-2 border-white/50 object-cover shadow-lg" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAflKy-jBYyjDPlqE4jgNru3iNE6C42iuXh7mw-LmHuKI8tWfjNyWA5G07oO3Bl6JRT9oKW4zNYiuDzYkaaxo9rs8bPKi-xLnUigKMypgKOrS60xh4zr6VHAb2HZQmWn9WDjhvFFRQrEyy-Fz1pE7ZHTDNkvbFLhLNfVMTjxBX2eD3GxE-oUKZ7W-84QAd7UADGW6nzZ9kORl7JkMQwEXUa4As3Ck3FpgAps-K86CLJRFCihYDzwfDsAHkBE838S1JOXJS38PhCh8Hm"/>
<div class="flex h-12 w-12 items-center justify-center rounded-full border-2 border-white/50 bg-primary text-sm font-bold shadow-lg">+5k</div>
</div>
<span class="text-sm font-medium text-white/90">Trusted by graduates worldwide</span>
</div>
</div>
<div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-black/20 to-transparent pointer-events-none"></div>
</section>
<section class="w-full lg:w-7/12 bg-white dark:bg-slate-900 flex flex-col p-8 md:p-12 lg:p-16 overflow-y-auto custom-scrollbar">
<div class="w-full max-w-md mx-auto">
<div class="mb-10">
<div class="flex items-center gap-3 mb-6">
<div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center shadow-lg shadow-primary/20">
<span class="material-symbols-outlined text-white text-3xl">analytics</span>
</div>
<span class="text-3xl font-bold tracking-tighter text-slate-900 dark:text-white">GTS</span>
</div>
<h2 class="text-3xl font-bold text-slate-900 dark:text-white">Create your account</h2>
<p class="text-slate-500 dark:text-slate-400 mt-2 font-light">Join the professional academic portal</p>
</div>
<form class="space-y-5" method="POST" action="<?= BASE_URL?>Auth/register">
<div class="floating-label-group">
<input class="w-full px-4 py-4 bg-transparent border border-slate-200 dark:border-slate-700 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/10 focus:border-primary transition-all text-slate-900 dark:text-white" id="fullname" name="fullname" placeholder=" " type="text"/>
<label for="fullname" >Full Name</label>
</div>
<!-- <div class="floating-label-group">
<input class="w-full px-4 py-4 bg-transparent border border-slate-200 dark:border-slate-700 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/10 focus:border-primary transition-all text-slate-900 dark:text-white" id="idnumber" name="idnumber" placeholder=" " type="text"/>
<label for="idnumber">University ID / National ID</label>
</div> -->
<div class="floating-label-group">
<input class="w-full px-4 py-4 bg-transparent border border-slate-200 dark:border-slate-700 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/10 focus:border-primary transition-all text-slate-900 dark:text-white" id="email" name="email" placeholder=" " type="email"/>
<label for="email" name="email">Email Address</label>
</div>
<div class="floating-label-group">
<input class="w-full px-4 py-4 bg-transparent border border-slate-200 dark:border-slate-700 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/10 focus:border-primary transition-all text-slate-900 dark:text-white" id="password" name="password" placeholder=" " type="password"/>
<label for="password" name="password">Password</label>
</div>
<div class="floating-label-group">
<input class="w-full px-4 py-4 bg-transparent border border-slate-200 dark:border-slate-700 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/10 focus:border-primary transition-all text-slate-900 dark:text-white" id="password" name="confirm_password" placeholder=" " type="password"/>
<label for="password" name="confirm_password">Confirm Password</label>
</div>
<div class="floating-label-group">
    <select 
        class="w-full px-4 py-4 bg-transparent border border-slate-200 dark:border-slate-700 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/10 focus:border-primary transition-all text-slate-900 dark:text-white"
        id="role_id"
        name="role_id">
        <option value="" disabled selected>Role</option>
        <option value="1">Admin</option>
        <option value="2">Graduate</option>
        <option value="3">Company</option>

    </select>

    

</div>

<button type="submit" class="w-full bg-navy-blue hover:bg-slate-800 text-white font-bold py-4 rounded-xl shadow-xl shadow-slate-200 dark:shadow-none transition-all flex items-center justify-center gap-2 mt-4" type="submit">
<span>Register</span>
<!-- <span class="material-symbols-outlined text-xl">arrow_right_alt</span> -->
</button>
</form>


<p class="text-center mt-12 text-slate-600 dark:text-slate-400 text-sm">
                    Already have an account? 
                    <a class="text-primary font-bold hover:underline" href="<?= BASE_URL ?>Auth/login">Login here</a>
</p>
</div>
</section>
</main>

</body></html>