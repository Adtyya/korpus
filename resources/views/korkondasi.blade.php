@extends("layouts.admin")
@section("style")
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
@endsection
@section("content")
<div class="w-full max-w-5xl mx-auto bg-white pt-20">
    <div class="w-full h-auto flex flex-col justify-start mb-8">
        <div class="mt-8">
            <h1 class="text-4xl text-black font-semibold text-center">الكشاف السياقي</h1>
        </div>
        <div class="flex justify-end items-center mt-8">
            <div class="w-[40%] relative h-auto mr-20">
                <form class="flex" action="/korkondasi" method="GET">
                    <button class="bg-secondary-mid outline outline-1 outline-secondary-mid w-max p-3">
                        <img src="/search.png" alt="search">
                    </button>
                    <input type="text" name="search" class="w-full outline outline-1 outline-is-gray-low text-end p-1" placeholder="المحور" />
                </form>
            </div>
            <p class="text-sm text-black font-thin">ابحث</p>
        </div>
        @if(request('search'))
        <div class="flex justify-center my-3">
            <div class="w-3/4 bg-secondary-mid py-3 space-x-3 flex items-center justify-center">
                <h3 class="text-white text-lg">"{{ request("search") }}"</h3>
                <h3 class="text-white text-lg">نتيجة البحث عن</h3>
            </div>
        </div>
        @endif
        <div class="flex justify-between">
            <a href="/is-admin/korkondasi" class="mt-2">
                <button type="button" class="bg-[#27608A] font-rasa py-1 px-8 text-center text-white rounded-full custom-shadow hover:scale-105 transition-all duration-300">
                    Tambah data
                </button>
            </a>
        </div>
        <p id="keyword">
        </p>
        <table class="border-collapse border border-is-gray-low w-full mt-8 pb-8">
            <thead class="text-black">
                <tr>
                    <th class="bg-secondary-mid border border-is-gray-low p-1 font-light text-center w-[300px]">مصاحبة</th>
                    <th class="bg-secondary-mid border border-is-gray-low p-1 font-light text-center">موضوع</th>
                    <th class="bg-secondary-mid border border-is-gray-low p-1 font-light text-center w-[150px]">فيديو</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @forelse($datas as $key => $data)
                <tr class="text-sm font-light even:bg-is-gray odd:bg-transparent">
                    <td id="kolokasi" class="py-3 px-2 border border-is-gray-low text-black-low w-[50px]">
                        {{ $data->kolokasi }}
                    </td>
                    <td class="py-3 px-2 border border-is-gray-low text-black-low">{{ $data->title }}</td>
                    <td class="py-3 px-2 border border-is-gray-low h-full text-black-low ">
                        <a href="{{ $data->url }}" class="flex justify-center" target="_blank">
                            <img src="/play.png" alt="play">
                        </a>
                    </td>
                </tr>
                @empty
                <h1 class="text-4xl text-black text-center">Data is Empty!</h1>
                @endforelse
            </tbody>

        </table>
    </div>

</div>
@endsection