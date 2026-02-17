🎓 GTS - Graduate Tracking System

نظام مبني باستخدام PHP Native MVC Architecture

📁 Project Structure
GTS-SYSTEM
│
├── app
│   ├── config
│   │   └── Database.php
│   │
│   ├── controllers
│   │
│   ├── core
│   │   ├── App.php
│   │   ├── Controller.php
│   │   └── Model.php
│   │
│   ├── models
│   └── views
│
├── assets
├── .htaccess
└── index.php

🔹 index.php

نقطة دخول النظام (Front Controller)

يقوم بتحميل الملفات الأساسية

ينشئ كائن من App لتشغيل النظام

🔹 .htaccess

إعادة توجيه جميع الروابط إلى index.php

يسمح بإنشاء روابط نظيفة مثل:

/auth/login

🔹 app/core
App.php

مسؤول عن Routing

يقرأ الرابط

يحدد:

Controller

Method

Parameters

Controller.php

الأب لجميع Controllers

يحتوي على دالة:

$this->view()


لعرض الصفحات

Model.php

الأب لجميع Models

يحتوي على الاتصال بقاعدة البيانات

🔹 app/controllers

يحتوي على ملفات التحكم

كل Controller يمثل جزء من النظام
مثال:

AuthController.php
HomeController.php

🔹 app/models

يحتوي على منطق التعامل مع قاعدة البيانات
مثال:

User.php
Graduate.php

🔹 app/views

يحتوي على ملفات العرض (HTML + PHP)

كل Controller له مجلد خاص به

مثال:

views/home/index.php
views/auth/login.php

🔹 assets

ملفات التصميم:

CSS

JavaScript

Images

🔁 كيف يعمل النظام؟

المستخدم يكتب رابط:

/auth/login


.htaccess يرسله إلى:

index.php


App.php يحلل الرابط:

Controller = AuthController

Method = login

يتم تنفيذ الميثود وعرض الـ View

🎯 الهدف من الهيكلية

فصل المنطق عن العرض

تنظيم المشروع

سهولة التوسعة

قابلية الصيانة