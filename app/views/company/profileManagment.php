<!DOCTYPE html>

<html dir="rtl" lang="ar"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>تسجيل شركة جديدة - نظام تتبع الخريجين</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700;900&amp;family=Noto+Sans+Arabic:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
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
                        "display": ["Public Sans", "Noto Sans Arabic", "sans-serif"]
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
            font-family: 'Public Sans', 'Noto Sans Arabic', sans-serif;
        }
        .form-input:focus {
            border-color: #ec5b13;
            ring-color: #ec5b13;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen">
<div class="relative flex flex-col w-full min-h-screen">
<!-- Top Navigation Bar -->
<header class="w-full border-b border-slate-200 dark:border-slate-800 bg-white dark:bg-background-dark/50 backdrop-blur-md sticky top-0 z-50">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex items-center justify-between h-16">
<div class="flex items-center gap-3">
<div class="bg-primary p-2 rounded-lg text-white">
<span class="material-symbols-outlined block">school</span>
</div>
<h2 class="text-xl font-bold tracking-tight text-slate-900 dark:text-white">نظام تتبع الخريجين</h2>
</div>
<div class="flex items-center gap-4">
<button class="text-slate-600 dark:text-slate-300 hover:text-primary transition-colors font-medium">الرئيسية</button>
<button class="bg-primary hover:bg-primary/90 text-white px-6 py-2 rounded-xl text-sm font-bold transition-all shadow-lg shadow-primary/20">
                            تسجيل الدخول
                        </button>
</div>
</div>
</div>
</header>
<main class="flex-1 flex flex-col items-center py-12 px-4">
<div class="w-full max-w-4xl bg-white dark:bg-slate-900/50 rounded-2xl shadow-xl border border-slate-100 dark:border-slate-800 overflow-hidden">
<div class="flex flex-col md:flex-row">
<!-- Sidebar/Info -->
<div class="md:w-1/3 bg-primary p-8 text-white flex flex-col justify-between">
<div>
<h1 class="text-3xl font-black mb-4 leading-tight">انضم إلى شبكتنا المهنية</h1>
<p class="text-white/80 leading-relaxed">
                                سجل شركتك الآن للوصول إلى أفضل الكفاءات من خريجينا المتميزين ومتابعة مساراتهم المهنية.
                            </p>
</div>
<div class="mt-8 space-y-4">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-white/70">check_circle</span>
<span class="text-sm">تواصل مباشر مع الخريجين</span>
</div>
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-white/70">check_circle</span>
<span class="text-sm">نشر فرص العمل والتدريب</span>
</div>
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-white/70">check_circle</span>
<span class="text-sm">تقارير وإحصائيات دقيقة</span>
</div>
</div>
<div class="mt-12">
<div class="w-full h-32 bg-white/10 rounded-xl overflow-hidden relative">
<div class="absolute inset-0 bg-gradient-to-br from-primary/20 to-transparent"></div>
<img alt="Professional office background" class="w-full h-full object-cover mix-blend-overlay" data-alt="Abstract modern office interior with warm lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBYUqTI5QuyOa-Sp1dRnW4NnAvcGRVDmxJbSqhEFDNc-WAJ3PWyPIl8xb3LGwcn_EZKSaXHrb6RR8l4v7qZJUFM4kdB99oqHEPAMQyAJhQnEFEuV_c75e1Dn4pd3wH1IJaIt9SpQxbB9p35vEYnZHpeJpuxA7vVR97Vfh35aWEdEqK2Qmcu13wRDi1EnW6QhcwXcZcknhgKpS6JBIxuZs7K_NuSqXHTnTFJsfr9mc8iP7Huj37puegW2gUR-KoyAb6zjSNBKw6yMmQ"/>
</div>
</div>
</div>
<!-- Registration Form -->
<div class="md:w-2/3 p-8 md:p-12">
<div class="mb-8">
<h2 class="text-2xl font-bold text-slate-900 dark:text-white">تسجيل شركة جديدة</h2>
<p class="text-slate-500 dark:text-slate-400 mt-2">يرجى تعبئة كافة البيانات المطلوبة لإنشاء حساب شركتك</p>
</div>
<form class="space-y-6">
<!-- Basic Info Group -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">اسم الشركة</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-sm">business</span>
<input class="w-full pr-4 pl-10 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" placeholder="أدخل اسم الشركة الرسمي" type="text"/>
</div>
</div>
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">قطاع الصناعة</label>
<select class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all appearance-none">
<option disabled="" selected="" value="">اختر مجال العمل</option>
<option value="it">تقنية المعلومات</option>
<option value="engineering">الهندسة</option>
<option value="finance">المالية والمصرفية</option>
<option value="education">التعليم</option>
<option value="healthcare">الرعاية الصحية</option>
</select>
</div>
</div>
<!-- Description -->
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">وصف الشركة</label>
<textarea class="w-full p-4 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all resize-none" placeholder="نبذة مختصرة عن نشاط الشركة وأهدافها" rows="3"></textarea>
</div>
<!-- Contact Group -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">البريد الإلكتروني</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-sm">mail</span>
<input class="w-full pr-4 pl-10 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" placeholder="company@example.com" type="email"/>
</div>
</div>
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">رقم الهاتف</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-sm">call</span>
<input class="w-full pr-4 pl-10 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all text-left" dir="ltr" placeholder="+966 5X XXX XXXX" type="tel"/>
</div>
</div>
</div>
<!-- Website & Address -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">الموقع الإلكتروني</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-sm">language</span>
<input class="w-full pr-4 pl-10 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all text-left" dir="ltr" placeholder="https://www.company.com" type="url"/>
</div>
</div>
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">العنوان</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-sm">location_on</span>
<input class="w-full pr-4 pl-10 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" placeholder="المدينة، الحي، الشارع" type="text"/>
</div>
</div>
</div>
<!-- Password -->
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">كلمة المرور</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-sm">lock</span>
<input class="w-full pr-4 pl-10 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" placeholder="••••••••" type="password"/>
</div>
<p class="text-xs text-slate-400 mt-1">يجب أن تحتوي على 8 رموز على الأقل</p>
</div>
<!-- Submit Action -->
<div class="pt-4">
<button class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-4 rounded-xl shadow-lg shadow-primary/30 transition-all flex items-center justify-center gap-2 group" type="submit">
<span>إكمال التسجيل</span>
<span class="material-symbols-outlined group-hover:translate-x-[-4px] transition-transform">arrow_back</span>
</button>
<p class="text-center text-sm text-slate-500 mt-6">
                                    بالتسجيل، أنت توافق على <a class="text-primary hover:underline" href="#">شروط الخدمة</a> و <a class="text-primary hover:underline" href="#">سياسة الخصوصية</a>
</p>
</div>
</form>
</div>
</div>
</div>
<!-- Map Preview (Location Context) -->
<div class="w-full max-w-4xl mt-8 bg-white dark:bg-slate-900/50 rounded-2xl p-4 border border-slate-100 dark:border-slate-800">
<div class="flex items-center gap-2 mb-4 px-2">
<span class="material-symbols-outlined text-primary">map</span>
<h3 class="font-semibold text-slate-800 dark:text-slate-200">موقع الشركة الرئيسي</h3>
</div>
<div class="w-full h-48 rounded-xl overflow-hidden bg-slate-100 dark:bg-slate-800">
<img alt="Map view placeholder" class="w-full h-full object-cover opacity-60" data-alt="Stylized map showing business district locations" data-location="Riyadh" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCE-u5YxncrUeORI5K7_DJkdoFXssE22zM8By8jcQadpxsPD-KmMptRwpLWxdZO83wVOgVrur_e0hNAW0GfDU5V7r-zw2fBIQS-K-OXFHX2-truFWs7rX3N4DYVao58BJ2KybnwM8RM40CkEc_hkiy0i2ZzLoh2h3mBnbRyJApkbyjDoHIN2PjNe6RwNkyHvdSYjRl4q3iruaxe8-kvtQYxMC7un_Zko3r21sxc40wHn6yd0irdUAiZahzcg4tn8dk8e3sYRE3IfeQ"/>
</div>
</div>
</main>
<footer class="w-full py-8 border-t border-slate-200 dark:border-slate-800 mt-12">
<div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center gap-4">
<div class="flex items-center gap-2 text-slate-500 dark:text-slate-400 text-sm">
<span class="material-symbols-outlined text-sm">copyright</span>
<span>2024 نظام تتبع الخريجين. جميع الحقوق محفوظة.</span>
</div>
<div class="flex gap-6 text-sm">
<a class="text-slate-500 hover:text-primary transition-colors" href="#">الدعم الفني</a>
<a class="text-slate-500 hover:text-primary transition-colors" href="#">اتصل بنا</a>
<a class="text-slate-500 hover:text-primary transition-colors" href="#">الأسئلة الشائعة</a>
</div>
</div>
</footer>
</div>
</body></html>