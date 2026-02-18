<!DOCTYPE html>

<html dir="<?= $_SESSION['lang']=='ar'?'rtl':'ltr' ?>" 

      lang="<?= $_SESSION['lang']=='ar'?'ar':'en' ?>"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title><?= $lang['hero_title']?></title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&amp;family=Noto+Kufi+Arabic:wght@300;400;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#1152d4",
                        "accent-gold": "#d4af37",
                        "background-light": "#f6f6f8",
                        "background-dark": "#101622",
                    },
                    fontFamily: {
                        "display": ["Public Sans", "Noto Kufi Arabic", "sans-serif"]
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
            font-family: 'Public Sans', 'Noto Kufi Arabic', sans-serif;
        }
        .hero-overlay {
            background: linear-gradient(to left, rgba(16, 22, 34, 0.85), rgba(16, 22, 34, 0.4));
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-800 dark:text-slate-100 font-display">
<!-- Navigation Bar -->
<nav class="sticky top-0 z-50 bg-white/95 dark:bg-background-dark/95 backdrop-blur-md border-b border-primary/10 shadow-sm">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex justify-between items-center h-20">
<!-- Logo -->
<div class="flex items-center gap-3">
<div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center text-white">
<span class="material-icons text-3xl">school</span>
</div>
<div>
<h1 class="text-xl font-bold text-primary dark:text-white leading-tight">GTS</h1>
<p class="text-xs text-slate-500 dark:text-slate-400"><?= $lang['hero_title']?></p>
</div>
</div>
<?php if($_SESSION['lang'] == 'ar'): ?>
    
    <a href="<?= BASE_URL ?>Language/change/en"
       class="flex items-center gap-2 px-4 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition">

        <span class="material-icons text-lg">language</span>
        EN
    </a>

<?php else: ?>

    <a href="<?= BASE_URL ?>Language/change/ar"
       class="flex items-center gap-2 px-4 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition">

        <span class="material-icons text-lg">language</span>
        AR
    </a>

<?php endif; ?>

<!-- Desktop Menu -->
<div class="hidden md:flex items-center gap-8">
<a class="text-primary font-semibold border-b-2 border-primary pb-1" href="#">الرئيسية</a>
<a class="text-slate-600 dark:text-slate-300 hover:text-primary transition-colors" href="#about">عن النظام</a>
<a class="text-slate-600 dark:text-slate-300 hover:text-primary transition-colors" href="#news">الأخبار</a>
<a class="text-slate-600 dark:text-slate-300 hover:text-primary transition-colors" href="#">تواصل معنا</a>
</div>
<!-- Auth Buttons -->
<div class="flex items-center gap-4">
<a class="px-5 py-2 text-primary font-medium hover:bg-primary/5 rounded-lg transition-all" href="#">تسجيل الدخول</a>
<a class="px-6 py-2 bg-primary text-white font-medium rounded-lg hover:bg-primary/90 shadow-lg shadow-primary/20 transition-all" href="#">بوابة الخريجين</a>
</div>
</div>
</div>
</nav>
<!-- Hero Section -->
<section class="relative h-[600px] flex items-center overflow-hidden">
<div class="absolute inset-0">
<img alt="University Campus" class="w-full h-full object-cover" data-alt="Wide aerial shot of modern university campus architecture" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA3sunfYGBZ0Tcl0tRZQUmDnaOIJvYrK6l8iW64ZCpK7lb-pSlUMZtKx1jYKMYJ1A4LNnlvcOutBXLdVkNYfB98d6F547A9nzYC8dfwbuOkE9Lvyow9OAdqRNcNfTPwIm_-zVjsc2ab3ITmIkyA37_cq4oDTs0uv6aD_CDtzfRy1aWnRnLA6_etRJ_DpsaruLkHk5UCf6r0LYbTcPEF251_rUPphzQGxxO6qa_7K9gbXLXlFdiJC6mnMByoJ2hJpostDnv5t86pxg"/>
<div class="absolute inset-0 hero-overlay"></div>
</div>
<div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
<div class="max-w-2xl text-white">
<span class="inline-block px-4 py-1 bg-accent-gold/20 border border-accent-gold/30 text-accent-gold rounded-full text-sm font-medium mb-6">مستقبلك يبدأ من هنا</span>
<h1 class="text-5xl lg:text-6xl font-bold mb-6 leading-tight">نظام تتبع الخريجين (GTS)</h1>
<p class="text-xl text-slate-200 mb-10 leading-relaxed">
                    جسر التواصل الدائم بين الجامعة وخريجيها. نسعى لتمكين خريجينا من خلال توفير فرص مهنية، وبناء شبكة عالمية من الكفاءات الوطنية.
                </p>
<div class="flex flex-wrap gap-4">
<button class="bg-primary hover:bg-primary/90 text-white px-8 py-4 rounded-xl font-bold flex items-center gap-2 transition-all">
<span>تسجيل خريج جديد</span>
<span class="material-icons">person_add</span>
</button>
<button class="bg-white/10 hover:bg-white/20 backdrop-blur-md border border-white/30 text-white px-8 py-4 rounded-xl font-bold transition-all">
                        بوابة أصحاب العمل
                    </button>
</div>
</div>
</div>
</section>
<!-- Statistics Section -->
<section class="relative -mt-16 z-10">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<div class="bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-xl shadow-primary/5 flex items-center gap-6 border border-primary/5">
<div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center text-primary">
<span class="material-icons text-4xl">groups</span>
</div>
<div>
<div class="text-3xl font-bold text-slate-900 dark:text-white">45,000+</div>
<div class="text-slate-500 dark:text-slate-400">إجمالي الخريجين</div>
</div>
</div>
<div class="bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-xl shadow-primary/5 flex items-center gap-6 border border-primary/5">
<div class="w-16 h-16 bg-accent-gold/10 rounded-2xl flex items-center justify-center text-accent-gold">
<span class="material-icons text-4xl">trending_up</span>
</div>
<div>
<div class="text-3xl font-bold text-slate-900 dark:text-white">88%</div>
<div class="text-slate-500 dark:text-slate-400">معدل التوظيف</div>
</div>
</div>
<div class="bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-xl shadow-primary/5 flex items-center gap-6 border border-primary/5">
<div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center text-primary">
<span class="material-icons text-4xl">public</span>
</div>
<div>
<div class="text-3xl font-bold text-slate-900 dark:text-white">120+</div>
<div class="text-slate-500 dark:text-slate-400">شريك دولي</div>
</div>
</div>
</div>
</div>
</section>
<!-- About Section -->
<section class="py-24" id="about">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
<div class="relative">
<div class="absolute -top-4 -right-4 w-64 h-64 bg-primary/5 rounded-full blur-3xl"></div>
<img alt="About GTS" class="rounded-3xl shadow-2xl relative z-10" data-alt="Group of happy graduates celebrating at university ceremony" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBjUZFskuT78_cRWmSRmn2nBJBrjZLr0OfARIb4GdxU7LvAjpR5FKss2zWbjD4DcMnuIsprUQp1KEXJxpkTLYWwhPh2buRLK6zsANgt6llooqYtvRuPbLb4b71rNx8QTri9LIECn1lEpUT3OQBioBUq1fmNj2Gjv5fS0l_aTcg27S19uM3Fv5ySxN3pcCCsehj77qmELNjluHT_utqJ-7Lh6SS3P7ssavgZe670DKP901Vvt-lBEFM7QE6fr_3to3_VkCfS_2B9QQ"/>
<div class="absolute -bottom-6 -left-6 bg-white dark:bg-slate-800 p-6 rounded-2xl shadow-lg z-20 hidden md:block border border-primary/10">
<div class="flex items-center gap-4">
<div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center text-white">
<span class="material-icons">verified</span>
</div>
<p class="font-bold text-slate-800 dark:text-white leading-tight">معتمد من قبل<br/><span class="text-sm font-normal text-slate-500">وزارة التعليم العالي</span></p>
</div>
</div>
</div>
<div class="text-right">
<h2 class="text-primary font-bold tracking-wider mb-2">عن النظام</h2>
<h3 class="text-4xl font-bold text-slate-900 dark:text-white mb-6">رؤيتنا لمستقبل مهني مشرق</h3>
<p class="text-lg text-slate-600 dark:text-slate-400 mb-8 leading-relaxed">
                        يهدف نظام تتبع الخريجين (GTS) إلى تعزيز العلاقة المستدامة بين الجامعة وخريجيها، ومساعدتهم في الاندماج في سوق العمل من خلال توفير بيانات دقيقة وفرص تدريبية ومهنية متميزة.
                    </p>
<ul class="space-y-4 mb-10">
<li class="flex items-center gap-3 justify-end">
<span class="text-slate-700 dark:text-slate-300">توفير قاعدة بيانات شاملة للخريجين ومساراتهم المهنية</span>
<span class="material-icons text-primary">check_circle</span>
</li>
<li class="flex items-center gap-3 justify-end">
<span class="text-slate-700 dark:text-slate-300">تسهيل التواصل بين جهات التوظيف والكفاءات الوطنية</span>
<span class="material-icons text-primary">check_circle</span>
</li>
<li class="flex items-center gap-3 justify-end">
<span class="text-slate-700 dark:text-slate-300">قياس مدى مواءمة المخرجات التعليمية مع متطلبات السوق</span>
<span class="material-icons text-primary">check_circle</span>
</li>
</ul>
<a class="inline-flex items-center gap-2 text-primary font-bold hover:gap-4 transition-all" href="#">
<span>اقرأ المزيد عن أهدافنا</span>
<span class="material-icons">arrow_back</span>
</a>
</div>
</div>
</div>
</section>
<!-- Latest News Carousel Section -->
<section class="py-24 bg-white dark:bg-slate-900/50" id="news">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex justify-between items-end mb-12">
<div class="flex gap-2">
<button class="w-12 h-12 rounded-full border border-primary/20 flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all">
<span class="material-icons">chevron_right</span>
</button>
<button class="w-12 h-12 rounded-full border border-primary/20 flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all">
<span class="material-icons">chevron_left</span>
</button>
</div>
<div class="text-right">
<h2 class="text-primary font-bold mb-2">آخر الأخبار</h2>
<h3 class="text-3xl font-bold text-slate-900 dark:text-white">قصص نجاح خريجينا</h3>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<!-- Card 1 -->
<div class="bg-white dark:bg-slate-800 rounded-2xl overflow-hidden shadow-md border border-slate-100 dark:border-slate-700 group">
<div class="relative h-56">
<img alt="Alumni Event" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Group of business professionals in a meeting room talking" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDLDcE8JE8gsKR0NckQcxqgpXz3e6lO2VGCaYk7dbKsIMeCS9TiWQZuIBT7EzlNvrFARKc8Dv-9EgRMWbsgip7MermJRPY6P7CZvUzcb2h4crqvTmYaPJzoZHrfwaarFcLlUmFtXmiF9IlsORC9kI6XlTruYYT0sKOCFpSt9hVM-Msxub85KsZP_SfygPRNWUVp5OYjvCg8Y3OKCzpnILso9LZPUfz5RSzZMgOvKGPKm95B43u2-RowI-Z0T4CuVWa2HVK_pUpXMQ"/>
<div class="absolute top-4 right-4 bg-primary text-white text-xs font-bold px-3 py-1 rounded-full">قصص نجاح</div>
</div>
<div class="p-6 text-right">
<span class="text-sm text-slate-500">15 أكتوبر 2023</span>
<h4 class="text-xl font-bold mt-2 mb-3 text-slate-900 dark:text-white">الخريج أحمد يحصل على جائزة ريادة الأعمال</h4>
<p class="text-slate-600 dark:text-slate-400 text-sm line-clamp-2">قامت الجامعة بتكريم الخريج أحمد لمساهماته المتميزة في مجال التقنية الحيوية وإطلاق شركته الناشئة...</p>
<a class="mt-4 inline-block text-primary font-semibold text-sm" href="#">اقرأ المزيد ←</a>
</div>
</div>
<!-- Card 2 -->
<div class="bg-white dark:bg-slate-800 rounded-2xl overflow-hidden shadow-md border border-slate-100 dark:border-slate-700 group">
<div class="relative h-56">
<img alt="Industry Partnership" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Modern office interior with corporate team working together" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDn8DoLAfRDF-bNy_1G2buCg_t10NWP3pQ1QNDepFKpnQMOmh3hdfB7AL0mzteUMQ1IgcQWpigfaJXIZBt3uu3iVlpV-MN59UqHcirrzL389jnkt_ok-lZOL-I-3ccfWAoNHcEL6XbTDuhaLclkj2UJnXlBS5W0pqxj_hHMY1Vik5jKbPoo1rU1bEpMNP0qsAiiJgoH8qjzdYNrjy3p1QqliQg3x2ll3JgqY59BEYm2pHAQ0YeODV57FuZTFGoEstCxOpwlK5Q5kQ"/>
<div class="absolute top-4 right-4 bg-accent-gold text-white text-xs font-bold px-3 py-1 rounded-full">شراكات</div>
</div>
<div class="p-6 text-right">
<span class="text-sm text-slate-500">12 أكتوبر 2023</span>
<h4 class="text-xl font-bold mt-2 mb-3 text-slate-900 dark:text-white">توقيع اتفاقية تعاون مع كبرى الشركات الصناعية</h4>
<p class="text-slate-600 dark:text-slate-400 text-sm line-clamp-2">تهدف الاتفاقية إلى توفير 200 فرصة تدريبية سنوية لخريجي كلية الهندسة وتقنية المعلومات...</p>
<a class="mt-4 inline-block text-primary font-semibold text-sm" href="#">اقرأ المزيد ←</a>
</div>
</div>
<!-- Card 3 -->
<div class="bg-white dark:bg-slate-800 rounded-2xl overflow-hidden shadow-md border border-slate-100 dark:border-slate-700 group">
<div class="relative h-56">
<img alt="Alumni Forum" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="People sitting in an auditorium for a conference or presentation" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCWbGNuPGfCUSPUHuBbeLPBzHxtTtMOOijqrlgislO8Sw8zKFPlBg9-v3MTJjJLaNEouRK9x1g80HvQzcxXZOZDW1UQidyPQUlpbWj9av7Zx9ZEbbZPyiTGJstBcqOAVkXcb8pjsFLXpjQv_SPGe9zxZ-Ly-U8GhuN_rXPIAXIJa6UX8lGl0LrnFo30jPUEMFupQj1QV__hmIdufgeTrBv58QXj_QSG7b-bkjsoEjOA5nZbNbRLRRyzjQ4ZGBFryLGcF-69SqOLSw"/>
<div class="absolute top-4 right-4 bg-primary text-white text-xs font-bold px-3 py-1 rounded-full">فعاليات</div>
</div>
<div class="p-6 text-right">
<span class="text-sm text-slate-500">08 أكتوبر 2023</span>
<h4 class="text-xl font-bold mt-2 mb-3 text-slate-900 dark:text-white">انعقاد ملتقى الخريجين السنوي الخامس</h4>
<p class="text-slate-600 dark:text-slate-400 text-sm line-clamp-2">شهد الملتقى حضور أكثر من 1000 خريج من مختلف الدفعات لتبادل الخبرات وتعزيز التواصل الاجتماعي...</p>
<a class="mt-4 inline-block text-primary font-semibold text-sm" href="#">اقرأ المزيد ←</a>
</div>
</div>
</div>
</div>
</section>
<!-- Call to Action Sections -->
<section class="py-24 px-4 sm:px-6 lg:px-8">
<div class="max-w-7xl mx-auto">
<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
<!-- Graduate CTA -->
<div class="relative rounded-3xl overflow-hidden h-80 flex items-center group">
<img alt="Graduate Registration" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="A graduate hat and diploma resting on a wooden table" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA2_IyviqdI2vETA683Zs2WTNGonLSbBu4JNfU-b0i0VWRmEniihkGyBwhJT7Uql1FW7KX4aVcVZC_-pqZGgSjoQdIaoVd_DFHukEV2uGE0Qd2FsP3fSxvl8G79wn-05gZtBdEhJodxi0mZfxbvYY9sYTDTYcC6U7MtkT8C7SiV-8st15XbK112NKF8lDJMNb9bz4qGJC7zbF6GFmIwz8_YLv8jG7Njx55tds45g7vhpE8dDJDT_-2IUciNly58Ork6n3qntqqnfA"/>
<div class="absolute inset-0 bg-primary/80 backdrop-blur-[2px]"></div>
<div class="relative p-12 text-white w-full">
<h3 class="text-3xl font-bold mb-4">كن جزءاً من شبكتنا</h3>
<p class="text-primary-100 mb-8 max-w-sm">سجل بياناتك الآن لتبقى على اطلاع بأحدث الفرص الوظيفية والفعاليات الخاصة بالخريجين.</p>
<button class="bg-white text-primary px-8 py-3 rounded-xl font-bold hover:shadow-xl transition-all">سجل كخريج الآن</button>
</div>
</div>
<!-- Employer CTA -->
<div class="relative rounded-3xl overflow-hidden h-80 flex items-center group">
<img alt="Employer Partnership" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="Professional hands typing on a laptop in a business setting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBJq7CCZ1Ce1WIYe8Z4OD991Z_l4PoXKKXkw0pF934c8-dBHlSPDCzD8rtkuRkqb6lQQpAVcOhCXB9OkceU7CYlIIjtpbrvFqZSJ0OTnjh2x37lQTnn9Sb-D8xlpKRy91_cLvJzRC82cBl7b-eT0QAt9HMauSYdXzYMU9kGZyGlPRwvnnvaLUcSCaBl7O2E_oPU6MoJeamFCHizURjO8-Nv7qX_0JRqPrclXVairGO5b2RJN3zR3ocgZpEZG5__KqfuaPyms8xXqQ"/>
<div class="absolute inset-0 bg-slate-900/80 backdrop-blur-[2px]"></div>
<div class="relative p-12 text-white w-full">
<h3 class="text-3xl font-bold mb-4">استقطب أفضل الكفاءات</h3>
<p class="text-slate-300 mb-8 max-w-sm">نمنح أصحاب العمل وصولاً مباشراً إلى قاعدة بيانات متنوعة من الخريجين المتميزين في كافة التخصصات.</p>
<button class="bg-accent-gold text-white px-8 py-3 rounded-xl font-bold hover:shadow-xl transition-all">شراكة أصحاب العمل</button>
</div>
</div>
</div>
</div>
</section>
<!-- Footer -->
<footer class="bg-slate-900 text-white pt-20 pb-10">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16 text-right">
<div class="col-span-1 md:col-span-1">
<div class="flex items-center gap-3 justify-end mb-6">
<div>
<h1 class="text-2xl font-bold leading-tight">GTS</h1>
<p class="text-xs text-slate-400">نظام تتبع الخريجين</p>
</div>
<div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center">
<span class="material-icons text-white">school</span>
</div>
</div>
<p class="text-slate-400 text-sm leading-relaxed">
                        المنصة الرسمية لربط خريجي الجامعة بوطنهم ومستقبلهم المهني، وتوفير الدعم اللازم لنموهم المستمر.
                    </p>
</div>
<div>
<h4 class="text-lg font-bold mb-6">روابط سريعة</h4>
<ul class="space-y-4 text-slate-400">
<li><a class="hover:text-primary transition-colors" href="#">عن الجامعة</a></li>
<li><a class="hover:text-primary transition-colors" href="#">بوابة القبول</a></li>
<li><a class="hover:text-primary transition-colors" href="#">البحث العلمي</a></li>
<li><a class="hover:text-primary transition-colors" href="#">الخدمات الإلكترونية</a></li>
</ul>
</div>
<div>
<h4 class="text-lg font-bold mb-6">الدعم والمساعدة</h4>
<ul class="space-y-4 text-slate-400">
<li><a class="hover:text-primary transition-colors" href="#">الأسئلة الشائعة</a></li>
<li><a class="hover:text-primary transition-colors" href="#">سياسة الخصوصية</a></li>
<li><a class="hover:text-primary transition-colors" href="#">شروط الاستخدام</a></li>
<li><a class="hover:text-primary transition-colors" href="#">اتصل بنا</a></li>
</ul>
</div>
<div>
<h4 class="text-lg font-bold mb-6">تواصل معنا</h4>
<ul class="space-y-4 text-slate-400">
<li class="flex items-center gap-3 justify-end">
<span>info@university.edu.sa</span>
<span class="material-icons text-sm text-primary">email</span>
</li>
<li class="flex items-center gap-3 justify-end">
<span>9200XXXXX</span>
<span class="material-icons text-sm text-primary">phone</span>
</li>
<li class="flex items-center gap-3 justify-end">
<span>الرياض، المملكة العربية السعودية</span>
<span class="material-icons text-sm text-primary">location_on</span>
</li>
</ul>
</div>
</div>
<div class="border-t border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-6">
<p class="text-slate-500 text-sm">© 2023 جميع الحقوق محفوظة لجامعة التقنية والعلوم</p>
<div class="flex gap-4">
<a class="w-10 h-10 bg-slate-800 rounded-full flex items-center justify-center hover:bg-primary transition-all" href="#">
<svg class="w-5 h-5 fill-current" viewbox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg>
</a>
<a class="w-10 h-10 bg-slate-800 rounded-full flex items-center justify-center hover:bg-primary transition-all" href="#">
<svg class="w-5 h-5 fill-current" viewbox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg>
</a>
<a class="w-10 h-10 bg-slate-800 rounded-full flex items-center justify-center hover:bg-primary transition-all" href="#">
<svg class="w-5 h-5 fill-current" viewbox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path></svg>
</a>
</div>
</div>
</div>
</footer>
</body></html>