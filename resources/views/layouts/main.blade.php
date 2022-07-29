<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rasa&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/korda.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Korda</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="w-full shadow-md fixed top-0 bg-white z-30">
        <nav class="w-full bg-white max-w-5xl mx-auto py-2">
            <div class="flex justify-between items-center">
                <img src="/korda.png" alt="korda">
                <div class="space-x-8">
                    <a href="/frekuensi-kata">
                        <button type="button" class="bg-secondary text-xl font-majalla py-1 px-8 text-center text-white rounded-full custom-shadow hover:scale-105 transition-all duration-300">
                            إدخال
                        </button>
                    </a>
                    <a href="/#home" class="text-main text-2xl font-majalla hover:text-secondary duration-300 transition-all">الصفحة الرئيسية</a>
                    <a href="/#tujuan" class="text-main text-2xl font-majalla hover:text-secondary duration-300 transition-all">الأغراض</a>
                    <a href="/#petunjuk-penggunaan" class="text-main text-2xl font-majalla hover:text-secondary duration-300 transition-all">دليل الاستخدام</a>
                    <a href="/#peneliti" class="text-main text-2xl font-majalla hover:text-secondary duration-300 transition-all">الباحث</a>
                </div>
            </div>
        </nav>
    </div>
    <div>
        @yield("content")
    </div>
</body>

</html>