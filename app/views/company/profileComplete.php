<!DOCTYPE html>

<html class="light" dir="rtl" lang="ar"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "surface-dim": "#d9dadb",
              "inverse-primary": "#ffb599",
              "surface-variant": "#e1e3e4",
              "tertiary-fixed": "#cae6ff",
              "outline": "#8d7166",
              "surface-container": "#edeeef",
              "on-tertiary-container": "#002d45",
              "on-background": "#191c1d",
              "surface-tint": "#a63b00",
              "on-surface-variant": "#594138",
              "inverse-on-surface": "#f0f1f2",
              "on-secondary": "#ffffff",
              "primary": "#a63b00",
              "primary-fixed": "#ffdbce",
              "tertiary-fixed-dim": "#8cceff",
              "background": "#f8f9fa",
              "primary-container": "#f26522",
              "outline-variant": "#e1bfb3",
              "on-primary-container": "#4f1800",
              "on-tertiary-fixed-variant": "#004b6f",
              "surface": "#f8f9fa",
              "error": "#ba1a1a",
              "surface-container-lowest": "#ffffff",
              "on-primary-fixed-variant": "#7f2b00",
              "error-container": "#ffdad6",
              "on-error": "#ffffff",
              "on-secondary-fixed": "#161d1f",
              "surface-container-low": "#f3f4f5",
              "inverse-surface": "#2e3132",
              "tertiary": "#006492",
              "surface-container-highest": "#e1e3e4",
              "secondary-fixed-dim": "#c1c8ca",
              "secondary": "#586062",
              "on-tertiary": "#ffffff",
              "on-primary": "#ffffff",
              "on-surface": "#191c1d",
              "on-error-container": "#93000a",
              "secondary-container": "#dae1e3",
              "on-primary-fixed": "#370e00",
              "primary-fixed-dim": "#ffb599",
              "surface-bright": "#f8f9fa",
              "on-secondary-fixed-variant": "#41484a",
              "tertiary-container": "#009ade",
              "surface-container-high": "#e7e8e9",
              "secondary-fixed": "#dde4e6",
              "on-tertiary-fixed": "#001e2f",
              "on-secondary-container": "#5d6466"
            },
            fontFamily: {
              "headline": ["Manrope"],
              "body": ["Inter"],
              "label": ["Inter"]
            },
            borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3, .font-headline { font-family: 'Manrope', sans-serif; }
    </style>
</head>
<body class="bg-background text-on-background min-h-screen flex flex-col">
<!-- TopAppBar -->
<header class="bg-[#f8f9fa]/80 dark:bg-[#191c1d]/80 backdrop-blur-md docked full-width top-0 z-50 shadow-[0_0_32px_rgba(25,28,29,0.06)]">
<div class="flex justify-between items-center w-full px-8 py-4 max-w-screen-2xl mx-auto">
<div class="flex items-center gap-8">
<span class="text-2xl font-extrabold text-[#586062] dark:text-[#f8f9fa] font-['Manrope'] tracking-tight">Scholar Metric</span>
<nav class="hidden md:flex items-center gap-6">
<a class="text-[#586062] dark:text-[#e7e8e9] font-['Manrope'] font-semibold tracking-tight hover:text-[#a63b00] transition-all duration-300" href="#">Dashboard</a>
<a class="text-[#586062] dark:text-[#e7e8e9] font-['Manrope'] font-semibold tracking-tight hover:text-[#a63b00] transition-all duration-300" href="#">Graduates</a>
<a class="text-[#586062] dark:text-[#e7e8e9] font-['Manrope'] font-semibold tracking-tight hover:text-[#a63b00] transition-all duration-300" href="#">Analytics</a>
<a class="text-[#f26522] border-b-2 border-[#f26522] pb-1 font-['Manrope'] font-semibold tracking-tight" href="#">Settings</a>
</nav>
</div>
<div class="flex items-center gap-4">
<button class="material-symbols-outlined text-secondary hover:text-primary transition-colors">notifications</button>
<button class="material-symbols-outlined text-secondary hover:text-primary transition-colors">help</button>
<div class="h-10 w-10 rounded-full overflow-hidden bg-surface-container">
<img alt="Company Administrator Profile" class="w-full h-full object-cover" data-alt="Professional corporate headshot of a middle-aged executive in a clean studio setting with soft lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVzxZKzKmIetdhzuhlDaFy85ThQL5a6VbM9hX6_BDXrs_N_vnKESh7kFDX87ZvMg4-U-uVgL1KA6K0YioJEbWOu-ZFykt5zHhB04UHpWVM3GDFIp-FKHQUERu-M03DvTigR6eA5BX61kBCzQdPEXyQEaYFact2zMKuhFs_-vIMzl08iiZYc2ASOVrvvaDcXfUO7mZNgEYYuLB4ueWJudfOSGJmPC2kGpnCgkykj9qnQoDPtMAPMtJWjV6jsPiJbT7IXwNYKmJBu5A"/>
</div>
</div>
</div>
</header>
<!-- Main Content Canvas -->
<main class="flex-grow flex items-center justify-center px-4 py-16">
<div class="w-full max-w-2xl">
<!-- Asymmetric Decorative Background Element -->
<div class="absolute top-0 right-0 -z-10 w-1/2 h-full opacity-5 pointer-events-none">
<div class="w-full h-full bg-gradient-to-bl from-primary to-transparent blur-3xl"></div>
</div>
<div class="bg-surface-container-lowest rounded-xl shadow-[0_0_32px_rgba(25,28,29,0.06)] overflow-hidden relative border border-outline-variant/10">
<!-- Header Section -->
<div class="bg-surface-container-low p-8 md:p-12 border-b border-outline-variant/5">
<h1 class="text-3xl md:text-4xl font-extrabold text-on-surface tracking-tight mb-4">إكمال ملف الشركة</h1>
<p class="text-secondary leading-relaxed max-w-lg">
                        يُرجى تزويدنا بالمعلومات التالية لإكمال ملفك التعريفي. هذه البيانات ضرورية لعملية التحقق ولضمان ظهور شركتك بشكل احترافي أمام الخريجين والمؤسسات التعليمية.
                    </p>
</div>
<!-- Form Section -->
<form class="p-8 md:p-12 space-y-8" method="post" action="">
<div class="grid grid-cols-1 gap-8">
<!-- Industry Field -->
<div class="space-y-2">
<label class="block text-sm font-semibold text-on-surface-variant font-label">مجال العمل</label>
<div class="relative group">
<select class="w-full bg-surface-container-low border-none focus:ring-2 focus:ring-primary/20 rounded-lg py-4 px-4 appearance-none text-on-surface font-body">
<option disabled="" selected="" value="">اختر مجال العمل...</option>
<option>التكنولوجيا والبرمجيات</option>
<option>الهندسة والإنشاءات</option>
<option>الخدمات المالية</option>
<option>الرعاية الصحية</option>
<option>التعليم والتدريب</option>
</select>
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-secondary pointer-events-none group-focus-within:text-primary transition-colors">expand_more</span>
</div>
</div>
<!-- Website URL -->
<div class="space-y-2">
<label class="block text-sm font-semibold text-on-surface-variant font-label">رابط الموقع الإلكتروني</label>
<div class="relative flex items-center group">
<span class="material-symbols-outlined absolute right-4 text-secondary group-focus-within:text-primary transition-colors">language</span>
<input class="w-full bg-surface-container-low border-none focus:ring-2 focus:ring-primary/20 rounded-lg py-4 pr-12 pl-4 text-on-surface font-body" dir="ltr" placeholder="https://www.company.com" type="url"/>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
<!-- Contact Email -->
<div class="space-y-2">
<label class="block text-sm font-semibold text-on-surface-variant font-label">إيميل الشركة للتواصل</label>
<div class="relative flex items-center group">
<span class="material-symbols-outlined absolute right-4 text-secondary group-focus-within:text-primary transition-colors">mail</span>
<input class="w-full bg-surface-container-low border-none focus:ring-2 focus:ring-primary/20 rounded-lg py-4 pr-12 pl-4 text-on-surface font-body" dir="ltr" placeholder="contact@company.com" type="email"/>
</div>
</div>
<!-- Phone Number -->
<div class="space-y-2">
<label class="block text-sm font-semibold text-on-surface-variant font-label">رقم الهاتف</label>
<div class="relative flex items-center group">
<span class="material-symbols-outlined absolute right-4 text-secondary group-focus-within:text-primary transition-colors">call</span>
<input class="w-full bg-surface-container-low border-none focus:ring-2 focus:ring-primary/20 rounded-lg py-4 pr-12 pl-4 text-on-surface font-body" dir="ltr" placeholder="+966 5X XXX XXXX" type="tel"/>
</div>
</div>
</div>
<!-- Address -->
<div class="space-y-2">
<label class="block text-sm font-semibold text-on-surface-variant font-label">العنوان</label>
<div class="relative group">
<span class="material-symbols-outlined absolute right-4 top-4 text-secondary group-focus-within:text-primary transition-colors">location_on</span>
<textarea class="w-full bg-surface-container-low border-none focus:ring-2 focus:ring-primary/20 rounded-lg py-4 pr-12 pl-4 text-on-surface font-body resize-none" placeholder="أدخل العنوان التفصيلي للمقر الرئيسي للشركة..." rows="3"></textarea>
</div>
</div>
</div>
<!-- Actions -->
<div class="pt-6 flex items-center justify-end gap-4">
<button class="px-8 py-3 text-secondary font-semibold hover:bg-surface-container-high rounded-xl transition-all duration-300" type="button">إلغاء</button>
<button class="px-12 py-4 bg-primary-container text-on-primary font-bold text-lg rounded-xl shadow-lg shadow-primary-container/20 hover:bg-gradient-to-r hover:from-primary hover:to-primary-container active:scale-95 transition-all duration-300" type="submit">حفظ ومتابعة</button>
</div>
</form>
</div>
</div>
</main>
<!-- Footer -->
<footer class="bg-[#f8f9fa] dark:bg-[#191c1d] full-width py-12 border-t-0">
<div class="flex flex-col md:flex-row justify-between items-center px-12 max-w-7xl mx-auto space-y-4 md:space-y-0">
<div class="flex flex-col items-center md:items-start space-y-2">
<span class="font-['Manrope'] font-bold text-[#586062] text-xl">Scholar Metric</span>
<p class="font-['Inter'] text-sm font-medium text-[#586062] dark:text-[#e7e8e9]">© 2024 Scholar Metric Graduate Tracking System. All rights reserved.</p>
</div>
<nav class="flex gap-8">
<a class="font-['Inter'] text-sm font-medium text-[#586062] dark:text-[#e7e8e9] hover:underline hover:text-[#f26522] opacity-80 hover:opacity-100 transition-all" href="#">Privacy Policy</a>
<a class="font-['Inter'] text-sm font-medium text-[#586062] dark:text-[#e7e8e9] hover:underline hover:text-[#f26522] opacity-80 hover:opacity-100 transition-all" href="#">Terms of Service</a>
<a class="font-['Inter'] text-sm font-medium text-[#586062] dark:text-[#e7e8e9] hover:underline hover:text-[#f26522] opacity-80 hover:opacity-100 transition-all" href="#">Contact Support</a>
</nav>
</div>
</footer>
</body></html>