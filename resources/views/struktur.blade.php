@extends("layouts.admin")
@section("content")

<div class="w-full max-w-[1320px] mx-auto pt-20">
    <!--
We will create a family tree using just CSS(3)
The markup will be simple nested lists
-->
    <div class="flex justify-center mb-5">
        <h1 class="text-secondary text-4xl font-semibold text=center">هيكال المناظرة</h1>

    </div>
    <div class="w-full flex justify-center">
        <div class="tree">
            <ul>
                <li>
                    <a>الموضوع</a>
                    <ul>
                        <li>
                            <a> تأييد الفريق</a>
                            <ul>
                                <li>
                                    <a href="https://www.youtube.com/watch?v=RI_yEmGNhjc" target="_blank"><img src="play.png" alt="play"></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a>سلام</a>
                            <ul>
                                <li>
                                    <a href="https://www.youtube.com/watch?v=FubqXgdUaig" target="_blank"><img src="play.png" alt="play"></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a>حجة : محور اقتصادي</a>
                            <ul>
                                <li>
                                    <a href="https://www.youtube.com/watch?v=0Mba6PLInqc" target="_blank">
                                        <div class="flex mb-3">
                                            <span>توكيد </span> .4
                                        </div>
                                        <div class="flex justify-center">
                                            <img src="play.png" alt="play">
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/watch?v=QxjGQgPtosg" target="_blank">
                                        <div class="flex mb-3">
                                            <span>تدليل </span> .3
                                        </div>
                                        <div class="flex justify-center">
                                            <img src="play.png" alt="play">
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/watch?v=Z_dTD1xPwi4&feature=youtu.be" target="_blank">
                                        <div class="flex mb-3">
                                            <span>تعليل </span> .2
                                        </div>
                                        <div class="flex justify-center">
                                            <img src="play.png" alt="play">
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/watch?v=fw_fiJYavAs&feature=youtu.be" target="_blank">
                                        <div class="flex mb-3">
                                            <span>منطوق </span> .1
                                        </div>
                                        <div class="flex justify-center">
                                            <img src="play.png" alt="play">
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="w-full max-w-[80px]">موقف أو هدف</a>
                            <ul>
                                <li>
                                    <a href="https://www.youtube.com/watch?v=-cYH_RhBkbQ&feature=youtu.be" target="_blank"><img src="play.png" alt="play"></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="w-full max-w-[80px]">تقسيم أدوار المتحدثين في القضية</a>
                            <ul>
                                <li>
                                    <a href="#" target="_blank"><img src="play.png" alt="play"></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a>تعريف</a>
                            <ul>
                                <li>
                                    <a href="https://www.youtube.com/watch?v=cnVMcyU18sE&feature=youtu.be" target="_blank"><img src="play.png" alt="play"></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a>تأييد الفريق</a>
                            <ul>
                                <li>
                                    <a href="https://www.youtube.com/watch?v=1e2LSzauNO0&feature=youtu.be" target="_blank"><img src="play.png" alt="play"></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a>مجاملة</a>
                            <ul>
                                <li>
                                    <a href="https://www.youtube.com/watch?v=LVoN52Q1x50&feature=youtu.be" target="_blank"><img src="play.png" alt="play"></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="w-[80px]">سلام و احترام</a>
                            <ul>
                                <li>
                                    <a href="https://www.youtube.com/watch?v=-rXZOrmZA9Q&feature=youtu.be" target="_blank"><img src="play.png" alt="play"></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="w-[80px]">مجاملة ابتدائية</a>
                            <ul>
                                <li>
                                    <a href="https://www.youtube.com/watch?v=gOM_dIt5bvk" target="_blank"><img src="play.png" alt="play"></a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="w-full flex justify-center mt-8">
        <a href="https://drive.google.com/file/d/1qBn15ipY0nbQ2u5fiK1_yUhMqmyug7SH/view" target="_blank" class="bg-secondary-mid py-2 px-4 mt-4 text-white rounded text-center">تحميل هنا</a>
    </div>
</div>

@endsection