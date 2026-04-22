<?php if(isset($_SESSION['flash_success'])): ?>
<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
    <?= $_SESSION['flash_success']; unset($_SESSION['flash_success']); ?>
</div>
<?php elseif(isset($_SESSION['flash_error'])): ?>
<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
    <?= $_SESSION['flash_error']; unset($_SESSION['flash_error']); ?>
</div>
<?php endif; ?>
<!DOCTYPE html>
<html dir="rtl" lang="ar"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>إكمال الملف الشخصي | GTS</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            line-height: 1;
            text-transform: none;
            letter-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            direction: ltr;
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }
        h1, h2, h3, .font-headline {
            font-family: 'Manrope', sans-serif;
        }
    </style>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "error": "#ba1a1a",
              "surface-container-low": "#f3f4f5",
              "on-tertiary-fixed": "#001e2f",
              "on-background": "#191c1d",
              "surface-dim": "#d9dadb",
              "secondary-fixed": "#dde4e6",
              "on-tertiary": "#ffffff",
              "surface-container-lowest": "#ffffff",
              "on-error": "#ffffff",
              "on-error-container": "#93000a",
              "outline": "#8d7166",
              "background": "#f8f9fa",
              "surface-variant": "#e1e3e4",
              "surface-tint": "#a63b00",
              "secondary-fixed-dim": "#c1c8ca",
              "on-primary-container": "#4f1800",
              "inverse-on-surface": "#f0f1f2",
              "surface-container-high": "#e7e8e9",
              "tertiary": "#006492",
              "on-secondary-container": "#5d6466",
              "tertiary-container": "#009ade",
              "primary-fixed-dim": "#ffb599",
              "on-surface": "#191c1d",
              "surface-container": "#edeeef",
              "on-secondary": "#ffffff",
              "inverse-primary": "#ffb599",
              "surface": "#f8f9fa",
              "primary-fixed": "#ffdbce",
              "tertiary-fixed-dim": "#8cceff",
              "surface-bright": "#f8f9fa",
              "on-tertiary-container": "#002d45",
              "on-primary-fixed": "#370e00",
              "on-tertiary-fixed-variant": "#004b6f",
              "outline-variant": "#e1bfb3",
              "on-surface-variant": "#594138",
              "on-primary-fixed-variant": "#7f2b00",
              "on-secondary-fixed-variant": "#41484a",
              "secondary-container": "#dae1e3",
              "primary": "#a63b00",
              "secondary": "#586062",
              "on-secondary-fixed": "#161d1f",
              "inverse-surface": "#2e3132",
              "surface-container-highest": "#e1e3e4",
              "tertiary-fixed": "#cae6ff",
              "on-primary": "#ffffff",
              "error-container": "#ffdad6",
              "primary-container": "#f26522"
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
</head>
<body class="bg-surface text-on-surface">

<!-- Main Content -->
<main class="min-h-screen flex items-center justify-center px-4 py-12">
<div class="w-full max-w-2xl bg-surface-container-lowest rounded-xl p-8 md:p-12 shadow-sm border border-outline-variant/10">
<!-- Header Section -->
<div class="text-center mb-10">
<div class="inline-flex items-center justify-center w-20 h-20 bg-primary-fixed rounded-full mb-6">
<span class="material-symbols-outlined text-primary text-4xl" data-icon="person_edit">person_edit</span>
</div>
<h1 class="text-3xl font-extrabold text-on-surface mb-2 tracking-tight">إكمال الملف الشخصي</h1>
<p class="text-secondary text-sm">يرجى تزويدنا بالمعلومات اللازمة لتحسين تجربتك الأكاديمية والمهنية.</p>
</div>
<!-- Form -->
<form action="<?= BASE_URL ?>Graduate/ConmpleteGraduateProfile"  method="POST"class="space-y-6">
<!-- Grid Layout for Inputs -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<!-- Major -->
<div class="flex flex-col gap-2">
<label class="text-on-surface-variant font-semibold text-sm mr-1">التخصص</label>
<div class="relative">
<select required  name="major_id" class="w-full bg-surface-container-low border-none rounded-lg px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary/20 appearance-none">
<option disabled="" selected="" value="">اختر التخصص</option>
<?php foreach($data["majors"] as $major): ?>
  <option  value="<?= $major->id ?>"><?= $major->major_name ?></option>
<?php endforeach; ?>
</select>
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-secondary pointer-events-none" data-icon="keyboard_arrow_down">keyboard_arrow_down</span>
</div>
</div>
<div class="flex flex-col gap-2">
<label class="text-on-surface-variant font-semibold text-sm mr-1">الرقم الجامعي</label>
<div class="relative">
<input required name="graduate_id" type="number" class="w-full bg-surface-container-low border-none rounded-lg px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary/20 appearance-none"/>
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-secondary pointer-events-none" data-icon="keyboard_arrow_down">keyboard_arrow_down</span>
</div>
</div>
<!-- Graduation Year -->
<div class="flex flex-col gap-2">
<label class="text-on-surface-variant font-semibold text-sm mr-1">سنة التخرج</label>
<div class="relative">
<input required name="graduation_year" type="number" class="w-full bg-surface-container-low border-none rounded-lg px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary/20 appearance-none"/>
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-secondary pointer-events-none" data-icon="calendar_today">calendar_today</span>
</div>
</div>
<!-- GPA -->
<div class="flex flex-col gap-2">
<label class="text-on-surface-variant font-semibold text-sm mr-1">المعدل التراكمي (GPA)</label>
<input required name="gpa" class="w-full bg-surface-container-low border-none rounded-lg px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary/20 placeholder:text-secondary/50" placeholder="مثال: 4.80" type="number" step="0.01" min="0" max="5"/>
</div>
<!-- Phone Number -->
<div class="flex flex-col gap-2">
<label class="text-on-surface-variant font-semibold text-sm mr-1">رقم الهاتف</label>
<div class="flex items-center bg-surface-container-low rounded-lg overflow-hidden focus-within:ring-2 focus-within:ring-primary/20">
<span class="bg-surface-container-high px-4 py-3 text-on-surface font-medium border-l border-outline-variant/20" dir="ltr">+966</span>
<input required name="phone" type="tel" class="w-full bg-transparent border-none px-4 py-3 text-on-surface placeholder:text-secondary/50 focus:ring-0" placeholder="5XXXXXXXX" type="tel"/>
</div>
</div>
</div>
<!-- Address (Full Width) -->
<div class="flex flex-col gap-2">
<label class="text-on-surface-variant font-semibold text-sm mr-1">العنوان</label>
<div class="relative">
<input required name="address" type="text" class="w-full bg-surface-container-low border-none rounded-lg px-4 py-3 pr-11 text-on-surface focus:ring-2 focus:ring-primary/20 placeholder:text-secondary/50" placeholder="المدينة، الحي، الشارع" />
<span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-secondary" data-icon="location_on">location_on</span>
</div>
</div>
<!-- Employment Status & Conditional Field -->
<div class="bg-surface-container-low/50 p-6 rounded-xl border border-outline-variant/10 space-y-6">
<div class="flex flex-col gap-3">
<label class="text-on-surface-variant font-semibold text-sm">الحالة المهنية</label>
<div class="flex gap-6">

<label class="flex items-center gap-2 cursor-pointer group">
<div class="relative flex items-center">
<input class="peer appearance-none w-5 h-5 border-2 border-outline rounded-full checked:border-primary transition-all"
       name="employment_status" type="radio" value="working"/>
<div class="absolute w-2.5 h-2.5 bg-primary rounded-full scale-0 peer-checked:scale-100 transition-transform left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2"></div>
</div>
<span class="text-on-surface group-hover:text-primary transition-colors">يعمل</span>
</label>

<label class="flex items-center gap-2 cursor-pointer group">
<div class="relative flex items-center">
<input checked class="peer appearance-none w-5 h-5 border-2 border-outline rounded-full checked:border-primary transition-all"
       name="employment_status" type="radio" value="searching"/>
<div class="absolute w-2.5 h-2.5 bg-primary rounded-full scale-0 peer-checked:scale-100 transition-transform left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2"></div>
</div>
<span class="text-on-surface group-hover:text-primary transition-colors">يبحث عن عمل</span>
</label>

</div>
</div>

<!-- Job Start Date -->
<div class="flex flex-col gap-2 border-r-4 border-primary/40 pr-4 bg-primary/5 py-4 rounded-l-lg">
<label class="text-on-surface-variant font-semibold text-sm">تاريخ بدء العمل</label>
<div class="relative">
<input name="employment_date" type="date"
class="w-full bg-surface-container-lowest border-none rounded-lg px-4 py-3 text-on-surface focus:ring-2 focus:ring-primary/20" />
<p class="text-[10px] text-primary mt-1 font-medium">مطلوب في حال كنت "يعمل" حالياً</p>
</div>
</div>

</div>
<!-- Action Button -->
<div class="pt-6">
<button class="w-full bg-primary-container text-on-primary font-headline font-bold text-lg py-4 rounded-xl shadow-lg shadow-primary/20 hover:scale-[1.01] active:scale-95 transition-all flex items-center justify-center gap-2" type="submit">
<span>حفظ وإكمال</span>
<span class="material-symbols-outlined" data-icon="arrow_back" style="transform: rotate(180deg);">arrow_back</span>
</button>
</div>
</form>
</div>
</main>

</body></html>