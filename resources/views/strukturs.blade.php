@extends("layouts.admin")
@section("content")
<div class="w-full max-w-7xl mx-auto bg-white pt-20">
    <div class="w-full h-auto flex flex-col justify-center items-center">
        <div class="mt-8">
            <h1 class="text-4xl text-secondaries font-semibold text-center">هيكال المناظرة </h1>
        </div>
        <!-- <div class="flex justify-between mt-2">
            <a href="/is-admin/word-frequency" class="mt-2 w-full font-rasa">
                <button type="button" class="bg-[#27608A] py-1 px-8 text-center text-white rounded-full custom-shadow hover:scale-105 transition-all duration-300">
                    Tambah data
                </button>
            </a>
        </div> -->
        <table class="border-collapse border border-is-gray-low table-auto w-full mt-8">
            <thead class="text-black">
                <tr>
                    <th colspan="10" class="bg-secondary-mid py-2 border border-is-gray-low font-thin">الموضوع</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr class="bg-secondary-mid">
                    <td class='pb-2 border border-is-gray-low'>تقسيم أدوار المتحدثين في القضية</td>
                    <td class='pb-2 border border-is-gray-low'>تعريف</td>
                    <td class='pb-2 border border-is-gray-low'>تأييد الفريق</td>
                    <td class='pb-2 border border-is-gray-low'>مجاملة</td>
                    <td class='pb-2 border border-is-gray-low'>سلام و احترام</td>
                    <td class='pb-2 border border-is-gray-low'>مجاملة ابتدائية</td>
                </tr>
                <tr>
                    <td class="border border-is-gray-low">
                        <div class="flex justify-center">
                            <a href="#" class="py-3"><img src="play.png" /></a>
                        </div>
                    </td>
                    <td class="border border-is-gray-low">
                        <div class="flex justify-center">
                            <a href="#" class="py-3"><img src="play.png" /></a>
                        </div>
                    </td>
                    <td class="border border-is-gray-low">
                        <div class="flex justify-center">
                            <a href="#" class="py-3"><img src="play.png" /></a>
                        </div>
                    </td>
                    <td class="border border-is-gray-low">
                        <div class="flex justify-center">
                            <a href="#" class="py-3"><img src="play.png" /></a>
                        </div>
                    </td>
                    <td class="border border-is-gray-low">
                        <div class="flex justify-center">
                            <a href="#" class="py-3"><img src="play.png" /></a>
                        </div>
                    </td>
                    <td class="border border-is-gray-low">
                        <div class="flex justify-center">
                            <a href="#" class="py-3"><img src="play.png" /></a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="border-collapse border border-is-gray-low table-auto w-full mt-8">
            <tbody>
                <tr class="bg-secondary-mid text-center">
                    <td class="py-2 border border-is-gray-low">موقف أو هدف</td>
                    <td colspan="4" class="py-2 border border-is-gray-low">حجة : محور اقتصادي</td>
                    <td class="py-2 border border-is-gray-low">اسلام </td>
                    <td class="py-2 border border-is-gray-low">تأييد الفريق</td>
                </tr>
                <tr class="text-center">
                    <td class="border border-is-gray-low">
                        <div class="flex justify-center">
                            <a href="#" class="py-3"><img src="play.png" /></a>
                        </div>
                    </td>
                    <td class="border border-is-gray-low">
                        <div class="flex flex-col justify-center items-center pb-3">
                            <div class="flex items-center space-x-2">
                                <a class="py-3">توكيد</a>
                                <p>.4</p>
                            </div>
                            <a href="#">
                                <img src="play.png" class="w-7" />
                            </a>
                        </div>
                    </td>
                    <td class="border border-is-gray-low">
                        <div class="flex flex-col justify-center items-center pb-3">
                            <div class="flex items-center space-x-2">
                                <a class="py-3">تدليل</a>
                                <p>.3</p>
                            </div>
                            <a href="#">
                                <img src="play.png" class="w-7" />
                            </a>
                        </div>
                    </td>
                    <td class="border border-is-gray-low">
                        <div class="flex flex-col justify-center items-center pb-3">
                            <div class="flex items-center space-x-2">
                                <a class="py-3">تعليل</a>
                                <p>.2</p>
                            </div>
                            <a href="#">
                                <img src="play.png" class="w-7" />
                            </a>
                        </div>
                    </td>
                    <td class="border border-is-gray-low">
                        <div class="flex flex-col justify-center items-center pb-3">
                            <div class="flex items-center space-x-2">
                                <a class="py-3">منطوق</a>
                                <p>.1</p>
                            </div>
                            <a href="#">
                                <img src="play.png" class="w-7" />
                            </a>
                        </div>
                    </td>
                    <td class="border border-is-gray-low">
                        <div class="flex justify-center">
                            <a href="#" class="py-3"><img src="play.png" /></a>
                        </div>
                    </td>
                    <td class="border border-is-gray-low">
                        <div class="flex justify-center">
                            <a href="#" class="py-3"><img src="play.png" /></a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="https://drive.google.com/file/d/1qBn15ipY0nbQ2u5fiK1_yUhMqmyug7SH/view" target="_blank" class="bg-secondary-mid py-2 px-4 mt-4 text-white rounded text-center">تحميل هنا</a>
    </div>

</div>

@endsection