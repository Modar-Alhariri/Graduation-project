<!DOCTYPE html>

<html dir="rtl" lang="ar"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
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
        body { font-family: 'Public Sans', sans-serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-display">
<div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
<!-- Top Navigation Bar -->
<aside id="sidebar"
class="w-64 bg-white dark:bg-slate-900 border-l border-slate-200 dark:border-slate-800 flex flex-col fixed h-full z-50 transform translate-x-full md:translate-x-0 transition-transform duration-300">

<div class="p-6 flex items-center gap-3 border-b border-slate-200 dark:border-slate-800">
<div class="bg-primary p-2 rounded-lg flex items-center justify-center text-white">
<span class="material-symbols-outlined">analytics</span>
</div>
<h2 class="text-xl font-bold tracking-tight text-primary">GTS Dashboard</h2>
<button onclick="toggleSidebar()" 
    class="md:hidden p-1 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg">
        <span class="material-symbols-outlined">close</span>
    </button>
</div>
<nav class="flex-1 p-4 space-y-2">
<a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary/10 text-primary font-semibold" href="<?= BASE_URL ?>FacultyMembers/dashboard">
<span class="material-symbols-outlined">dashboard</span>
<span>لوحة التحكم </span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 transition-colors" href="<?= BASE_URL ?>FacultyMembers/deptGraduatesTracking">
<span class="material-symbols-outlined">group</span>
<span>سجلات الخريجين</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 transition-colors" href="<?= BASE_URL ?>FacultyMembers/acadimicRecomendations">
<span class="material-symbols-outlined">work</span>
<span> التوصيات الاكاديمية</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 transition-colors" href="<?= BASE_URL ?>FacultyMembers/feedbackForms">
<span class="material-symbols-outlined">assignment</span>
<span> نماذج التغذية الراجعة  </span>
</a>

</nav>
<div class="p-4 border-t border-slate-200 dark:border-slate-800">
<div class="flex items-center gap-3 p-2 rounded-xl bg-slate-100 dark:bg-slate-800">
<div class="size-10 rounded-full bg-slate-300 dark:bg-slate-600 bg-cover" data-alt="User avatar profile picture" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCO2pxVAQ6FY8-ILaabaq5CiriNhVYGfsIWcRr7LPeW20OBv-JHFo0QVeYrojV8tFLm77q37aKTw4rgch8a09yVnhUWkHLdBFlLWWObqoSs48jw44FcA6sRV7cxbBEi20IwQnJ962TGwAIoXHJXjaYcD1vkchI5qUFhWIpMPo-g0lMMhV2P3NoyPxTGzHL47EybXezPou1XQhyEuIiQSmo5-vpAOtSPfIJ23fxgxTLCnsPGEtCQw2XgDn-486aYGtIqeGMx_AanUKs')"></div>
<div class="flex flex-col overflow-hidden">
<span class="text-sm font-bold truncate">Admin GTS</span>
<span class="text-xs text-slate-500 truncate">admin@gts.com</span>
</div>
</div>
</div>
</aside>
<main class="flex-1 md:mr-64">
<header class="h-16 border-b border-slate-200 dark:border-slate-800 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md sticky top-0 z-40 px-8 flex items-center justify-between">
<button onclick="toggleSidebar()" 
class="md:hidden p-2 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg">
    <span class="material-symbols-outlined">menu</span>
</button>
<div class="flex items-center gap-4 flex-1">

</div>
<div class="flex items-center gap-3">
<button class="p-2 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg relative">
<span class="material-symbols-outlined">language</span>
<span class="absolute top-2 right-2 w-2 h-2 bg-primary rounded-full border-2 border-white dark:border-slate-900"></span>
</button>

</div>
</header>
<main class="flex-1 max-w-7xl mx-auto w-full p-4 md:p-8">
<div class="mb-8">
<h1 class="text-3xl font-black text-slate-900 dark:text-white mb-2">مركز التوصيات الأكاديمية</h1>
<p class="text-slate-500 dark:text-slate-400">أدوات مخصصة لأعضاء هيئة التدريس لتقديم مقترحات تطوير المناهج والبرامج التدريبية</p>
</div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
<!-- Sidebar Navigation/Stats -->
<div class="lg:col-span-3 space-y-4">
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
<h3 class="font-bold mb-4">إحصائياتك</h3>
<div class="space-y-4">
<div class="flex justify-between items-center">
<span class="text-sm text-slate-500">توصيات مقدمة</span>
<span class="font-bold text-primary">12</span>
</div>
<div class="flex justify-between items-center">
<span class="text-sm text-slate-500">قيد المراجعة</span>
<span class="font-bold text-amber-500">4</span>
</div>
<div class="flex justify-between items-center">
<span class="text-sm text-slate-500">تم اعتمادها</span>
<span class="font-bold text-emerald-500">8</span>
</div>
</div>
</div>
<div class="flex flex-col gap-2">
<button class="flex items-center gap-3 w-full px-4 py-3 rounded-xl bg-primary text-white font-bold">
<span class="material-symbols-outlined">add_circle</span>
<span>توصية جديدة</span>
</button>
<button class="flex items-center gap-3 w-full px-4 py-3 rounded-xl hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
<span class="material-symbols-outlined text-slate-500">history</span>
<span>سجل المقترحات</span>
</button>
</div>
</div>
<!-- Main Content Area -->
<div class="lg:col-span-9 space-y-8">
<!-- Forms Section -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<!-- Form 1: Curriculum Update -->
<div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
<div class="bg-primary/5 dark:bg-primary/10 p-4 border-b border-slate-100 dark:border-slate-800">
<h3 class="font-bold flex items-center gap-2">
<span class="material-symbols-outlined text-primary">auto_stories</span>
                                مقترح تحديث منهج دراسي
                            </h3>
</div>
<form class="p-6 space-y-4">
<div>
<label class="block text-sm font-medium mb-1">اسم المقرر</label>
<input class="w-full rounded-lg border-slate-300 dark:border-slate-700 dark:bg-slate-800 focus:border-primary focus:ring-primary" placeholder="مثال: هندسة البرمجيات" type="text"/>
</div>
<div>
<label class="block text-sm font-medium mb-1">المقترح بالتفصيل</label>
<textarea class="w-full rounded-lg border-slate-300 dark:border-slate-700 dark:bg-slate-800 focus:border-primary focus:ring-primary" placeholder="اشرح التعديل المطلوب..." rows="3"></textarea>
</div>
<div>
<label class="block text-sm font-medium mb-1">المبررات / متطلبات سوق العمل</label>
<textarea class="w-full rounded-lg border-slate-300 dark:border-slate-700 dark:bg-slate-800 focus:border-primary focus:ring-primary" placeholder="لماذا هذا التحديث ضروري الآن؟" rows="2"></textarea>
</div>
<button class="w-full py-2.5 bg-primary text-white rounded-lg font-bold hover:bg-primary/90 transition-all" type="submit">إرسال المقترح</button>
</form>
</div>
<!-- Form 2: Training Course -->
<div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
<div class="bg-emerald-500/5 dark:bg-emerald-500/10 p-4 border-b border-slate-100 dark:border-slate-800">
<h3 class="font-bold flex items-center gap-2">
<span class="material-symbols-outlined text-emerald-500">model_training</span>
                                مقترح دورة تدريبية جديدة
                            </h3>
</div>
<form class="p-6 space-y-4">
<div>
<label class="block text-sm font-medium mb-1">اسم الدورة التدريبية</label>
<input class="w-full rounded-lg border-slate-300 dark:border-slate-700 dark:bg-slate-800 focus:border-emerald-500 focus:ring-emerald-500" placeholder="مثال: الذكاء الاصطناعي التوليدي" type="text"/>
</div>
<div>
<label class="block text-sm font-medium mb-1">الفئة المستهدفة من الطلاب</label>
<select class="w-full rounded-lg border-slate-300 dark:border-slate-700 dark:bg-slate-800 focus:border-emerald-500 focus:ring-emerald-500">
<option>طلاب السنة النهائية</option>
<option>طلاب السنة الثالثة</option>
<option>كافة التخصصات التقنية</option>
</select>
</div>
<div>
<label class="block text-sm font-medium mb-1">وصف الدورة وأهدافها</label>
<textarea class="w-full rounded-lg border-slate-300 dark:border-slate-700 dark:bg-slate-800 focus:border-emerald-500 focus:ring-emerald-500" placeholder="وصف موجز للمحتوى التدريبي..." rows="3"></textarea>
</div>
<button class="w-full py-2.5 bg-emerald-600 text-white rounded-lg font-bold hover:bg-emerald-700 transition-all" type="submit">تقديم الدورة</button>
</form>
</div>
</div>
<!-- Recent Recommendations Table -->
<div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
<div class="p-6 border-b border-slate-100 dark:border-slate-800 flex justify-between items-center">
<h3 class="font-bold text-lg">التوصيات الأخيرة في القسم</h3>
<span class="text-xs font-semibold px-2 py-1 bg-primary/10 text-primary rounded-full uppercase">آخر 30 يوم</span>
</div>
<div class="overflow-x-auto">
<table class="w-full text-right border-collapse">
<thead>
<tr class="bg-slate-50 dark:bg-slate-800/50">
<th class="px-6 py-4 text-sm font-bold text-slate-500">عضو هيئة التدريس</th>
<th class="px-6 py-4 text-sm font-bold text-slate-500">نوع التوصية</th>
<th class="px-6 py-4 text-sm font-bold text-slate-500">المقترح</th>
<th class="px-6 py-4 text-sm font-bold text-slate-500">التاريخ</th>
<th class="px-6 py-4 text-sm font-bold text-slate-500">الحالة</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-800">
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4 flex items-center gap-3">
<div class="size-8 rounded-full bg-slate-200 flex items-center justify-center overflow-hidden">
<img alt="Lecturer" data-alt="Portrait of a male university lecturer" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDxcaf-zZXQHknc5Q1uWzF70OLkTAbPGrnnQppbXQwfzs6Up2PPZip7qgg05o1TeH_6ryg1K4MqByhg_O3PZy_loXY80GR4dyPz66QjmWrMNLvw5ibDWnXtMMfchGoxkHguM8SRAOTw-UyfhxVT2iQxir7jNmiT7nhy1QsPvb1R_IhUCOo7TBsZNCkrFx80abCinGejGLMMO63plwdajjdEpu4iqE5CCZPEd7tgLX6QreTTSdGsGlpwD8CoVVr7xn4j-kk1EMkxPKY"/>
</div>
<span class="text-sm font-medium">د. أحمد الشمري</span>
</td>
<td class="px-6 py-4">
<span class="text-xs px-2 py-1 bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-300 rounded-full font-bold">تحديث منهج</span>
</td>
<td class="px-6 py-4 text-sm max-w-xs truncate">إضافة تقنيات الكلاود لمنهج قواعد البيانات</td>
<td class="px-6 py-4 text-sm text-slate-500">12 مايو 2024</td>
<td class="px-6 py-4">
<span class="flex items-center gap-1.5 text-amber-500 font-bold text-xs">
<span class="size-2 rounded-full bg-amber-500 animate-pulse"></span>
                                            تحت المراجعة
                                        </span>
</td>
</tr>
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4 flex items-center gap-3">
<div class="size-8 rounded-full bg-slate-200 flex items-center justify-center overflow-hidden">
<img alt="Lecturer" data-alt="Portrait of a female university lecturer" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDqapqkwVN3g7R1PSelwAQHa-zaMl0OZH3uIuUUQUFkTq9VbzIDEPTj3BzJ6UsumPJe7Gn6YY9t8gAqUpRvThqoAiKv9dvTKvYnQGi193hOYa69oAPuXjITEBzscg4GOplf7qvv-Hfo71FDd4JvNrsyhB-1u-MKwS4Cd_4u39nTPRhvqArh78Wj00v8zVDnG2LG2jdT0jnnSKcTGsSgmbbCjxjhGL3-IvetPVE7-f4gM7XsU8IMCMxq86tqXIdHeugbx0cJbITocjQ"/>
</div>
<span class="text-sm font-medium">د. سارة خالد</span>
</td>
<td class="px-6 py-4">
<span class="text-xs px-2 py-1 bg-emerald-100 text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-300 rounded-full font-bold">دورة تدريبية</span>
</td>
<td class="px-6 py-4 text-sm max-w-xs truncate">دورة متخصصة في تحليل البيانات الضخمة</td>
<td class="px-6 py-4 text-sm text-slate-500">08 مايو 2024</td>
<td class="px-6 py-4">
<span class="flex items-center gap-1.5 text-emerald-600 font-bold text-xs">
<span class="size-2 rounded-full bg-emerald-600"></span>
                                            تمت الموافقة
                                        </span>
</td>
</tr>
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-4 flex items-center gap-3">
<div class="size-8 rounded-full bg-slate-200 flex items-center justify-center overflow-hidden">
<img alt="Lecturer" data-alt="Portrait of a university professor" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBXWQr5uCNGLjdTddn_77Q86pkYJCaslplaGJXPQWR6vLUSryo0PnQ4KLfLRssgA2GK9hpN6yuoti84neQZhhXW6TnkRk7DBaWOLoX1Lrjo1yRDnzOpEsR32hGAKKwJLaM5VJgNOGzX-5LpWjBky1tzDM24czAgZgKB80tO70V01ZeNsXo-4nH9BjiCOoObX_hTgudOwkec7mEAathtqYLVrLVVkhL7eO7ESHOyI_odruv_45hnWf1Hs-w6KxaCT_cIEtZt7CpVVOg"/>
</div>
<span class="text-sm font-medium">د. محمد العتيبي</span>
</td>
<td class="px-6 py-4">
<span class="text-xs px-2 py-1 bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-300 rounded-full font-bold">تحديث منهج</span>
</td>
<td class="px-6 py-4 text-sm max-w-xs truncate">تطوير مقرر أمن المعلومات ليشمل التشفير الكمي</td>
<td class="px-6 py-4 text-sm text-slate-500">01 مايو 2024</td>
<td class="px-6 py-4">
<span class="flex items-center gap-1.5 text-slate-400 font-bold text-xs">
<span class="size-2 rounded-full bg-slate-400"></span>
                                            مؤرشف
                                        </span>
</td>
</tr>
</tbody>
</table>
</div>
<div class="p-4 bg-slate-50 dark:bg-slate-800/20 text-center">
<button class="text-primary text-sm font-bold hover:underline">عرض جميع التوصيات التاريخية</button>
</div>
</div>
</div>
</div>
</main>
<footer class="border-t border-slate-200 dark:border-slate-800 py-8 px-10 text-center">
<p class="text-slate-500 text-sm">© 2024 بوابة GTS الأكاديمية - جميع الحقوق محفوظة لهيئة التدريس</p>
</footer>
</div>
</body></html>