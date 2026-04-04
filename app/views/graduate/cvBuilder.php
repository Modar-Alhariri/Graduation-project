<!DOCTYPE html>

<html dir="rtl" lang="ar"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
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
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        body {
            font-family: 'Public Sans', sans-serif;
        }
        .cv-preview-shadow {
            box-shadow: 0 10px 25px -5px rgba(236, 91, 19, 0.1), 0 8px 10px -6px rgba(236, 91, 19, 0.1);
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-display">
<!-- Main Layout Container -->
<div class="relative flex min-h-screen flex-col overflow-x-hidden">
<!-- Navigation Bar -->
<header class="sticky top-0 z-50 w-full border-b border-primary/10 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md px-6 lg:px-20 py-4">
<div class="flex items-center justify-between max-w-7xl mx-auto">
<div class="flex items-center gap-4">
<div class="bg-primary text-white p-2 rounded-lg">
<span class="material-symbols-outlined text-2xl">school</span>
</div>
<h2 class="text-xl font-bold tracking-tight text-slate-900 dark:text-white">نظام تتبع الخريجين</h2>
</div>
<nav class="hidden md:flex items-center gap-8">
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">الرئيسية</a>
<a class="text-sm font-medium text-primary underline underline-offset-8" href="#">بناء السيرة الذاتية</a>
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">الوظائف</a>
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">التقارير</a>
</nav>
<div class="flex items-center gap-3">
<button class="p-2 rounded-xl bg-primary/10 text-primary hover:bg-primary/20 transition-colors">
<span class="material-symbols-outlined">notifications</span>
</button>
<div class="h-10 w-10 rounded-full border-2 border-primary bg-cover bg-center" data-alt="صورة ملف المستخدم الشخصية" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCf7j53gwZFeyz8bYCPzh8y2NVjuPzSTPMo7lKaSHdd_se0YipPMVnQjW4Bw3ecgOY1rycxDCpAIzWEx96_vkv3qAOLNaoP8car1KkiB51XL-2WBb-MZOYw0bo0eLp_VFxsJBPGULI6rRUTz9oCiyynny2e6sVwHCqpHlirM_RwyBwuii5P2tr6cyMoG17UjfCZjXpIylolg_TwkI74EHFOkFL1hCCgzlIFaCR0Q7ufevTzqcQc-suX93YrwFsNNnB2zoBEp_b24mo')"></div>
</div>
</div>
</header>
<main class="flex-1 max-w-7xl mx-auto w-full px-6 lg:px-20 py-10">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
<!-- Right Column: Controls & Options -->
<div class="lg:col-span-5 flex flex-col gap-6">
<div class="space-y-2">
<h1 class="text-4xl font-black tracking-tight text-slate-900 dark:text-white">بناء السيرة الذاتية</h1>
<p class="text-slate-600 dark:text-slate-400">قم بإنشاء وتحديث سيرتك الذاتية بشكل احترافي لزيادة فرصك الوظيفية.</p>
</div>
<!-- Action Cards -->
<div class="space-y-4">
<!-- Auto Generate -->
<div class="p-6 rounded-2xl border-2 border-primary/20 bg-white dark:bg-slate-900/50 hover:border-primary transition-all group">
<div class="flex items-start gap-4">
<div class="bg-primary/10 text-primary p-3 rounded-xl group-hover:bg-primary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-3xl">auto_awesome</span>
</div>
<div class="flex-1">
<h3 class="text-lg font-bold">التوليد التلقائي ذكي</h3>
<p class="text-sm text-slate-500 dark:text-slate-400 mb-4">استخدم بيانات ملفك الشخصي الأكاديمية والمهنية لإنشاء سيرة ذاتية فوراً.</p>
<button class="w-full bg-primary text-white py-3 rounded-xl font-bold hover:shadow-lg hover:shadow-primary/30 transition-all flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-sm">magic_button</span>
                                        إنشاء سيرة ذاتية الآن
                                    </button>
</div>
</div>
</div>
<!-- Manual Upload -->
<div class="p-6 rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/50 hover:bg-slate-50 dark:hover:bg-slate-800 transition-all">
<div class="flex items-start gap-4">
<div class="bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 p-3 rounded-xl">
<span class="material-symbols-outlined text-3xl">upload_file</span>
</div>
<div class="flex-1">
<h3 class="text-lg font-bold">رفع ملف جاهز</h3>
<p class="text-sm text-slate-500 dark:text-slate-400 mb-4">هل تملك سيرة ذاتية مصممة مسبقاً؟ قم برفعها بصيغة PDF.</p>
<button class="w-full border-2 border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-300 py-3 rounded-xl font-bold hover:bg-slate-100 dark:hover:bg-slate-700 transition-all flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-sm">attach_file</span>
                                        رفع ملف PDF
                                    </button>
</div>
</div>
</div>
</div>
<!-- Export Options -->
<div class="flex flex-wrap gap-3">
<button class="flex-1 bg-slate-900 dark:bg-white dark:text-slate-900 text-white py-4 rounded-xl font-bold flex items-center justify-center gap-2 hover:opacity-90 transition-opacity">
<span class="material-symbols-outlined">download</span>
                            تحميل PDF
                        </button>
<button class="flex-1 bg-white border border-slate-200 dark:border-slate-800 dark:bg-slate-900 dark:text-white py-4 rounded-xl font-bold flex items-center justify-center gap-2 hover:bg-slate-50 transition-all">
<span class="material-symbols-outlined">visibility</span>
                            معاينة
                        </button>
</div>
</div>
<!-- Left Column: CV Preview -->
<div class="lg:col-span-7">
<div class="relative bg-slate-200 dark:bg-slate-800 rounded-3xl p-8 min-h-[800px] flex justify-center">
<!-- CV Document Mockup -->
<div class="w-full max-w-[600px] bg-white text-slate-900 rounded-sm shadow-2xl p-10 flex flex-col gap-6 origin-top">
<!-- CV Header -->
<div class="flex justify-between items-start border-b-4 border-primary pb-6">
<div class="space-y-1">
<h2 class="text-3xl font-black text-slate-900">أحمد محمد العلي</h2>
<p class="text-primary font-bold">مهندس برمجيات و خريج جامعة الملك سعود</p>
<div class="flex gap-4 text-xs text-slate-500 mt-2">
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-sm">mail</span> ahmed@example.com</span>
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-sm">call</span> +966 50 000 0000</span>
</div>
</div>
<div class="w-24 h-24 bg-slate-100 rounded-lg overflow-hidden grayscale">
<img class="w-full h-full object-cover" data-alt="صورة شخصية رسمية للسيرة الذاتية" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDJVH7LTuAgCXHRAKDsp4CqCGspKAHYlc5I0NSRfqacAOV6rkHO057VHmHl34INL3ZZkon5ehbfCvt5Om5gTnCoKzULa5P80Hm1g2mv-EPFKmw645wNG1rQ5u3cp3c1Itt3umqy_fUsqG20YmlpFZJmhxqqFLldgrrmWNuBCHkDDcbBR189yLQl4Ie05xJJHT-oryZl3TTfVhK0mPEboFDPC7_XPi2_a2zkMs6byYu2dxRfLRjnbczLFYIChJ_vFwtzjzdlB5Jp-9M"/>
</div>
</div>
<!-- CV Content Grid -->
<div class="grid grid-cols-3 gap-8 text-[11px]">
<!-- Right Sidebar in CV -->
<div class="col-span-1 space-y-6">
<section>
<h4 class="font-bold border-b border-slate-200 mb-2 pb-1 uppercase tracking-wider text-primary">المهارات</h4>
<ul class="space-y-1 text-slate-600">
<li>• JavaScript (React/Node)</li>
<li>• Python &amp; Django</li>
<li>• SQL &amp; PostgreSQL</li>
<li>• UI/UX Design</li>
<li>• Git &amp; GitHub</li>
</ul>
</section>
<section>
<h4 class="font-bold border-b border-slate-200 mb-2 pb-1 uppercase tracking-wider text-primary">اللغات</h4>
<ul class="space-y-1 text-slate-600">
<li>• العربية (الأم)</li>
<li>• الإنجليزية (متقدم)</li>
</ul>
</section>
</div>
<!-- Main Body in CV -->
<div class="col-span-2 space-y-6 text-sm">
<section>
<h4 class="font-bold border-b border-slate-200 mb-3 pb-1 uppercase tracking-wider text-primary">الملخص المهني</h4>
<p class="text-slate-600 text-xs leading-relaxed">
                                            خريج متميز في علوم الحاسب مع شغف بتطوير حلول برمجية مبتكرة. أمتلك خبرة في بناء تطبيقات الويب الحديثة وحل المشكلات المعقدة. أسعى للانضمام لبيئة عمل محفزة للإبداع.
                                        </p>
</section>
<section>
<h4 class="font-bold border-b border-slate-200 mb-3 pb-1 uppercase tracking-wider text-primary">التعليم</h4>
<div class="mb-3">
<div class="flex justify-between font-bold text-xs">
<span>بكالوريوس هندسة برمجيات</span>
<span>2019 - 2023</span>
</div>
<p class="text-[10px] text-slate-500 italic">جامعة الملك سعود - الرياض</p>
</div>
</section>
<section>
<h4 class="font-bold border-b border-slate-200 mb-3 pb-1 uppercase tracking-wider text-primary">المشاريع</h4>
<div class="space-y-3">
<div>
<p class="font-bold text-xs">نظام إدارة المحتوى التعليمي</p>
<p class="text-[10px] text-slate-500">مشروع تخرج - تقييم ممتاز</p>
<p class="text-[10px] text-slate-600 mt-1">تطوير منصة شاملة باستخدام React و Firebase لدعم التعليم عن بعد.</p>
</div>
</div>
</section>
</div>
</div>
<!-- Footer in CV -->
<div class="mt-auto pt-4 border-t border-slate-100 text-[8px] text-center text-slate-400">
                                تم إنشاء هذه السيرة الذاتية عبر نظام تتبع الخريجين (GTS)
                            </div>
</div>
<!-- Floating Badge -->
<div class="absolute bottom-12 right-12 bg-primary text-white px-4 py-2 rounded-full shadow-xl flex items-center gap-2 text-sm font-bold">
<span class="material-symbols-outlined text-sm">verified</span>
                            نموذج معتمد
                        </div>
</div>
</div>
</div>
</main>
<!-- Footer Section -->
<footer class="mt-20 border-t border-slate-200 dark:border-slate-800 py-10 px-6 lg:px-20 bg-white dark:bg-background-dark">
<div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-6">
<div class="text-slate-500 text-sm">
                    © 2024 نظام تتبع الخريجين. جميع الحقوق محفوظة.
                </div>
<div class="flex gap-6">
<a class="text-slate-400 hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">language</span></a>
<a class="text-slate-400 hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">help</span></a>
<a class="text-slate-400 hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">settings</span></a>
</div>
</div>
</footer>
</div>
</body></html>