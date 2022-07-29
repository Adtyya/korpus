@extends("layouts.admin")
@section("style")
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
@endsection
@section("content")
<div class="w-full max-w-5xl mx-auto bg-white pt-20">
    <div class="w-full h-auto flex flex-col justify-start">
        <div class="mt-8">
            <h1 class="text-4xl text-black font-semibold text-center">قائمة الكلمات</h1>
        </div>
        <div class="flex justify-end items-center mt-8">
            <div class="w-[40%] relative h-auto mr-20">
                <form class="flex" action="/frekuensi-kata" method="GET">
                    <button class="bg-secondary-mid outline outline-1 outline-secondary-mid w-max p-3">
                        <img src="/search.png" alt="search">
                    </button>
                    <input id="keyword" type="text" name="search" class="w-full outline outline-1 outline-is-gray-low text-end p-1" placeholder="هدف" />
                </form>
            </div>
            <p class="text-sm text-black font-thin">ابحث</p>
        </div>
        <div class="w-full h-[2px] bg-is-gray-low mt-10"></div>
        @if(request("search"))
        <div class="flex justify-center my-3">
            <div class="w-3/4 bg-secondary-mid py-3 space-x-3 flex items-center justify-center">
                <h3 class="text-white text-lg">"{{ request("search") }}"</h3>
                <h3 class="text-white text-lg">نتيجة البحث عن</h3>
            </div>
        </div>
        @endif
        <div class="flex justify-between mt-2">
            <a href="/is-admin/word-frequency" class="mt-2 w-full font-rasa">
                <button type="button" class="bg-[#27608A] py-1 px-8 text-center text-white rounded-full custom-shadow hover:scale-105 transition-all duration-300">
                    Tambah data
                </button>
            </a>
            <div class="flex w-full justify-end items-center">
                {{ $datas->links("pagination::bootstrap-4") }}
            </div>
        </div>
        <table class="border-collapse border border-is-gray-low table-auto w-full mt-8">
            <thead class="text-white">
                <tr>
                    <th class="bg-secondary-mid border border-is-gray-low p-1 font-light text-center">فريق</th>
                    <th class="bg-secondary-mid border border-is-gray-low p-1 font-light text-center">تكرار</th>
                    <th class="bg-secondary-mid border border-is-gray-low p-1 font-light text-center">كلمة</th>
                    <th class="bg-secondary-mid border border-is-gray-low p-1 font-light text-center w-[80px]">رقم</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @forelse($datas as $key => $data)
                <tr class="text-sm font-light even:bg-is-gray odd:bg-transparent">
                    <td class="py-3 px-2 border border-is-gray-low text-black-low w-[230px]">{{ $data->team }}</td>
                    <td class="py-3 px-2 border border-is-gray-low text-black-low w-[100px]">{{ $data->amountword }}</td>
                    <td class="py-3 px-2 border border-is-gray-low text-black-low">{{ $data->word }}</td>
                    <td class="py-3 px-2 border border-is-gray-low text-black-low">{{ $datas->firstItem() + $key }}</td>
                </tr>
                @empty
                <h1 class="text-4xl text-black text-center">Data is Empty!</h1>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

@endsection