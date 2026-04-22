<!DOCTYPE html>

<html class="light" dir="rtl" lang="ar"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Scholarly Archive - ملف الشركة</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@300;400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-secondary-fixed-variant": "#41484a",
                        "primary": "#a63b00",
                        "outline-variant": "#e1bfb3",
                        "on-primary-fixed": "#370e00",
                        "secondary-fixed": "#dde4e6",
                        "background": "#f8f9fa",
                        "inverse-surface": "#2e3132",
                        "surface-dim": "#d9dadb",
                        "on-secondary-container": "#5d6466",
                        "surface-variant": "#e1e3e4",
                        "on-tertiary": "#ffffff",
                        "surface": "#f8f9fa",
                        "primary-container": "#f26522",
                        "inverse-primary": "#ffb599",
                        "tertiary-fixed": "#cae6ff",
                        "surface-container": "#edeeef",
                        "on-tertiary-fixed": "#001e2f",
                        "tertiary-fixed-dim": "#8cceff",
                        "surface-bright": "#f8f9fa",
                        "on-tertiary-container": "#002d45",
                        "secondary-fixed-dim": "#c1c8ca",
                        "surface-container-highest": "#e1e3e4",
                        "primary-fixed": "#ffdbce",
                        "surface-container-lowest": "#ffffff",
                        "on-error-container": "#93000a",
                        "tertiary-container": "#009ade",
                        "on-primary-container": "#4f1800",
                        "on-background": "#191c1d",
                        "outline": "#8d7166",
                        "error": "#ba1a1a",
                        "tertiary": "#006492",
                        "surface-container-low": "#f3f4f5",
                        "on-primary": "#ffffff",
                        "on-tertiary-fixed-variant": "#004b6f",
                        "on-surface-variant": "#594138",
                        "on-secondary-fixed": "#161d1f",
                        "surface-tint": "#a63b00",
                        "on-secondary": "#ffffff",
                        "error-container": "#ffdad6",
                        "inverse-on-surface": "#f0f1f2",
                        "secondary-container": "#dae1e3",
                        "secondary": "#586062",
                        "on-surface": "#191c1d",
                        "surface-container-high": "#e7e8e9",
                        "primary-fixed-dim": "#ffb599",
                        "on-primary-fixed-variant": "#7f2b00",
                        "on-error": "#ffffff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "fontFamily": {
                        "headline": ["Manrope"],
                        "body": ["Inter"],
                        "label": ["Inter"]
                    }
                },
            },
        }
    </script>
<style>
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3, .font-manrope { font-family: 'Manrope', sans-serif; }
        .glass-nav {
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
    </style>
</head>
<body class="bg-surface text-on-surface min-h-screen">
<!-- Header Navigation -->

<main class="pt-32 pb-20 px-4 flex justify-center">
<!-- Main Form Container -->
<div class="w-full max-w-2xl">
<!-- Header Section with Tonal Background -->
<div class="mb-10 text-center space-y-2">
<h1 class="text-4xl font-extrabold text-on-surface tracking-tight font-headline">إكمال ملف الشركة</h1>
<p class="text-secondary text-lg">يُرجى تزويدنا بالمعلومات التالية لإكمال ملفك التعريفي. هذه البيانات ضرورية لعملية التحقق ولضمان ظهور شركتك بشكل احترافي أمام الخريجين والمؤسسات التعليمية.</p>
</div>
<!-- Card Layout using Tonal Layering -->
<div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant/15 overflow-hidden">
<div class="p-8 md:p-12">
<form class="space-y-8" method="POST" action="<?= BASE_URL ?>company/profileComplete">
<!-- Company Identity Section -->
<div class="space-y-6">
<div class="flex items-center gap-3 mb-2">
<span class="w-1.5 h-6 bg-primary rounded-full"></span>
<h3 class="text-xl font-bold font-headline text-secondary">المعلومات الأساسية</h3>
</div>
<!-- Company Name -->
<div class="group relative">
<label class="block text-sm font-semibold text-secondary mb-2 pr-1" >اسم الشركة</label>
<div class="relative flex items-center">
<span class="material-symbols-outlined absolute right-4 text-secondary/60 group-focus-within:text-primary transition-colors">business</span>
<input required name="company_name"  class="w-full pr-12 pl-4 py-4 bg-surface-container-low rounded-xl border-none focus:ring-2 focus:ring-primary-fixed focus:bg-surface-container-lowest transition-all duration-200 text-on-surface placeholder:text-secondary/40" placeholder="أدخل اسم الشركة الرسمي" type="text"/>
</div>
</div>
<!-- Description -->
<div class="group relative">
<label class="block text-sm font-semibold text-secondary mb-2 pr-1">وصف الشركة</label>
<div class="relative">
<span class="material-symbols-outlined absolute right-4 top-4 text-secondary/60 group-focus-within:text-primary transition-colors">description</span>
<textarea required name="company_name" class="w-full pr-12 pl-4 py-4 bg-surface-container-low rounded-xl border-none focus:ring-2 focus:ring-primary-fixed focus:bg-surface-container-lowest transition-all duration-200 text-on-surface placeholder:text-secondary/40 resize-none" placeholder="تحدث عن رؤية الشركة وأهدافها في بضعة أسطر..." rows="4"></textarea>
</div>
</div>
<!-- Grid for Industry & Website -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="group relative">
<label class="block text-sm font-semibold text-secondary mb-2 pr-1">مجال العمل</label>
<div class="relative flex items-center">
<span class="material-symbols-outlined absolute right-4 text-secondary/60 group-focus-within:text-primary transition-colors">category</span>
<input name="industry" class="w-full pr-12 pl-4 py-4 bg-surface-container-low rounded-xl border-none focus:ring-2 focus:ring-primary-fixed focus:bg-surface-container-lowest transition-all duration-200 text-on-surface appearance-none"/>


<span class="material-symbols-outlined absolute left-4 text-secondary/40 pointer-events-none">expand_more</span>
</div>
</div>
<div class="group relative">
<label class="block text-sm font-semibold text-secondary mb-2 pr-1">رابط الموقع الإلكتروني</label>
<div class="relative flex items-center">
<span class="material-symbols-outlined absolute right-4 text-secondary/60 group-focus-within:text-primary transition-colors">language</span>
<input required name="website" class="w-full pr-12 pl-4 py-4 bg-surface-container-low rounded-xl border-none focus:ring-2 focus:ring-primary-fixed focus:bg-surface-container-lowest transition-all duration-200 text-on-surface placeholder:text-secondary/40" dir="ltr" placeholder="https://www.example.com" type="url"/>
</div>
</div>
</div>
</div>
<!-- Contact Details Section -->
<div class="pt-4 space-y-6">
<div class="flex items-center gap-3 mb-2">
<span class="w-1.5 h-6 bg-tertiary rounded-full"></span>
<h3 class="text-xl font-bold font-headline text-secondary">بيانات التواصل</h3>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="group relative">
<label class="block text-sm font-semibold text-secondary mb-2 pr-1">رقم الهاتف</label>
<div class="relative flex items-center">
<span class="material-symbols-outlined absolute right-4 text-secondary/60 group-focus-within:text-primary transition-colors">call</span>
<input required name="phone" class="w-full pr-12 pl-4 py-4 bg-surface-container-low rounded-xl border-none focus:ring-2 focus:ring-primary-fixed focus:bg-surface-container-lowest transition-all duration-200 text-on-surface placeholder:text-secondary/40" dir="ltr" placeholder="+966 5X XXX XXXX" type="tel"/>
</div>
</div>
<div class="group relative">
<label class="block text-sm font-semibold text-secondary mb-2 pr-1">البريد الإلكتروني للشركة</label>
<div class="relative flex items-center">
<span class="material-symbols-outlined absolute right-4 text-secondary/60 group-focus-within:text-primary transition-colors">mail</span>
<input required name="email" class="w-full pr-12 pl-4 py-4 bg-surface-container-low rounded-xl border-none focus:ring-2 focus:ring-primary-fixed focus:bg-surface-container-lowest transition-all duration-200 text-on-surface placeholder:text-secondary/40" dir="ltr" placeholder="info@company.com" type="email"/>
</div>
</div>
</div>
<div class="group relative">
<label class="block text-sm font-semibold text-secondary mb-2 pr-1">العنوان التفصيلي</label>
<div class="relative flex items-center">
<span class="material-symbols-outlined absolute right-4 text-secondary/60 group-focus-within:text-primary transition-colors">location_on</span>
<input required name="address" class="w-full pr-12 pl-4 py-4 bg-surface-container-low rounded-xl border-none focus:ring-2 focus:ring-primary-fixed focus:bg-surface-container-lowest transition-all duration-200 text-on-surface placeholder:text-secondary/40" placeholder="المدينة، الحي، اسم الشارع، المبنى" type="text"/>
</div>
</div>
</div>
<!-- Form Actions -->
<div class="flex flex-col md:flex-row gap-4 pt-8">
<button class="flex-1 bg-primary-container text-on-primary font-bold py-4 rounded-xl hover:bg-primary transition-all duration-300 shadow-sm active:scale-95 flex justify-center items-center gap-2" type="submit">
<span class="material-symbols-outlined">save</span>
                                حفظ ومتابعة
                            </button>
<button class="md:w-1/3 bg-surface-container-highest text-secondary font-bold py-4 rounded-xl hover:bg-surface-dim transition-all duration-300 active:scale-95" type="button">
                                إلغاء
                            </button>
</div>
</form>
</div>
</div>

</div>
</main>

</body></html>