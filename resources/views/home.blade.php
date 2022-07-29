@extends("layouts.main")
@section("content")
<div class="bg-gradient-to-l from-main to-white w-full">
    <div class="w-full max-w-5xl mx-auto">
        <div id="home" class="grid grid-cols-2 space-x-10 w-full h-[95vh]">
            <div class="flex items-center">
                <img src="/kordahome.png" alt="home" class="w-[80%]">
            </div>
            <div class="flex flex-col justify-center space-y-2">
                <h3 class="text-lg text-white text-end">مرحبا بكم في </h3>
                <h1 class="text-4xl font-semibold text-white text-end">مدونة المناظرة العربية </h1>
                <p class="text-lg text-white text-end">ستجد في هذا الموقع مجموعة من بطولة مناظرات
                    قطر، وكتب اللإرشاد للمناظرة، وهيكال إلقاء المناظرة،
                    المصاحبات اللغوية، بعدية أو قبلية، وتكرار الكلمات
                    التي يستخدمها المتناظرون</p>
                <!-- <div class="flex justify-center space-x-10">
                    <button type="button" class="bg-secondary py-2 px-8 text-center text-white rounded-full mt-20 custom-shadow hover:scale-105 transition-all duration-300">تسجيل</button>
                    <button type="button" class="bg-secondary py-2 px-8 text-center text-white rounded-full mt-20 custom-shadow hover:scale-105 transition-all duration-300">إدخال</button>
                </div> -->
            </div>
        </div>
        <div id="tujuan" class="grid grid-cols-2 space-x-10 w-full h-[95vh] pb-10">
            <div class="flex items-center">
                <img src="/kordahome.png" alt="home" class="w-[80%]">
            </div>
            <div class="flex flex-col justify-center space-y-2">
                <h1 class="text-2xl font-semibold text-white text-end">:كانت الأغراض من المدونة هي كما يلي
                </h1>
                <p class="text-lg text-white text-center pt-3">
                    ‌أ. يسهل الطلبة في تعلم وتعميق فن المناظرة ولترقية كفاءتها اللغوية بحيث تستفيد الطلبة النموداج أو المصطلحات في هذه المدونة المتطوّرة
                </p>
                <p class="text-lg text-white text-center">
                    ‌ب. تكون هذه المدونة وسيلة في استكمال المدونة الموجودة في الجامعة
                </p>
                <p class="text-lg text-white text-center">
                    ‌ج. تكون هذه المدونة ومرجعا في تعليم اللغة العربية وخاصة لمن أراد أن يتعمق فن المناظرة
                </p>
                <p class="text-lg text-white text-center">
                    ‌ ‌د. يساعد الطلبة على اعداد المعلومات التي تحتاج إليها الطلبة.
                </p>
            </div>
        </div>
        <div id="petunjuk-penggunaan" class="grid grid-cols-2 space-x-10 w-full h-[95vh]">
            <div class="flex items-center">
                <img src="/kordahome.png" alt="home" class="w-[80%]">
            </div>
            <div class="flex flex-col justify-center">
                <h1 class="text-2xl font-semibold text-white text-end">:دليل الاستخدام
                </h1>
                <img src="/petunjukpenggunaan.png" class="mt-2" />
            </div>
        </div>
        <div id="peneliti" class="flex flex-row items-center w-full pb-10 h-full">
            <div class="flex flex-col w-1/4 pt-20">
                <div class="w-full max-w-[200px]">
                    <img src="auth1.jpg" alt="auth1" class="w-full">
                    <p class='text-sm bg-isGray p-1 font-rasa'>Dr. Moh. Ahsanuddin, S.Pd., M.Pd</p>
                </div>
                <div class="w-full max-w-[200px]">
                    <img src="auth2.jpg" alt="auth2" class="w-full">
                    <p class='text-sm bg-isGray p-1 font-rasa'>Yoke Suryadarma, M.Pd.I.</p>
                </div>
            </div>
            <div class="flex flex-row w-3/4">
                <div class="w-3/4 flex flex-col items-end space-y-5 mr-10">
                    <h1 class="text-2xl text-white">الباحث</h1>
                    <p class="text-md text-white text-end pl-20">طور هذه المدونة على شكل نموذج بدئي محمد أحسن طارق كأحد الطلبة قسم الأدب العربي بجامعة مالانج الحكومية. هذه المدونة كإنتاج البحث تحت الموضوع " تصميم مدونة المناظرة العربية على أساس السمعية البصرية" تحت إشراف الأستاذ محمد أحسن الدين من بجامعة مالانج الحكومية والأستاذ يوكى سوريا درما من جامعة دار السلام كونتور </p>
                </div>
                <div class="w-1/4">
                    <img src="/FotoAhsan.png" alt="ahsan">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection