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
    @yield("style")

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

                    <a href="/" class="text-main text-2xl hover:text-secondary duration-300 transition-all font-majalla">خروج</a>
                    <a></a>
                    <a href="/frekuensi-kata" class="{{ request()->is('frekuensi-kata') ? "text-2xl text-secondaries duration-300 font-majalla transition-all" : "text-main text-2xl hover:text-secondary duration-300 font-majalla transition-all" }}">قائمة الكلمات</a>
                    <a href="/korkondasi" class="{{ request()->is('korkondasi') ? "text-2xl text-secondaries duration-300 font-majalla transition-all" : "text-main text-2xl hover:text-secondary duration-300 font-majalla transition-all" }}">الكشاف السياقي</a>
                    <a href="/struktur-debat" class="{{ request()->is('struktur-debat') ? "text-2xl text-secondaries duration-300 font-majalla transition-all" : "text-main text-2xl hover:text-secondary duration-300 font-majalla transition-all" }}">هيكل المناظرة</a>
                    <a href="/buku-pedoman" class="{{ request()->is('buku-pedoman') ? "text-2xl text-secondaries duration-300 font-majalla transition-all" : "text-main text-2xl hover:text-secondary duration-300 font-majalla transition-all" }}">كتب الإرشاد</a>
                </div>
            </div>
        </nav>
    </div>
    <div>
        @yield("content")
    </div>
</body>

</html>