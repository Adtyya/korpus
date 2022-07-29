@extends("layouts.admin")
@section("content")
<div class="w-full max-w-5xl mx-auto bg-white pt-20">
    <div class="w-full h-auto flex flex-col justify-start mb-8">
        <div class="mt-8">
            <h1 class="text-4xl text-secondaries font-semibold text-center">كتب الإرشاد</h1>
        </div>
        <!-- <div class="flex justify-end items-center mt-8">
            <div class="w-[40%] relative h-auto mr-20">
                <form class="flex" action="/korkondasi" method="GET">
                    <button class="bg-secondary-mid outline outline-1 outline-secondary-mid w-max p-3">
                        <img src="/search.png" alt="search">
                    </button>
                    <input type="text" name="search" class="w-full outline outline-1 outline-is-gray-low text-end p-1" placeholder="المحور" />
                </form>
            </div>
            <p class="text-sm text-black font-thin">ابحث</p>
        </div> -->
        @if(request('search'))
        <div class="flex justify-center my-3">
            <div class="w-3/4 bg-secondary-mid py-3 space-x-3 flex items-center justify-center">
                <h3 class="text-white text-lg">"{{ request("search") }}"</h3>
                <h3 class="text-white text-lg">نتيجة البحث عن</h3>
            </div>
        </div>
        @endif
        <div class="flex justify-between">
            <a href="/is-admin/books" class="mt-2">
                <button type="button" class="bg-[#27608A] font-rasa py-1 px-8 text-center text-white rounded-full custom-shadow hover:scale-105 transition-all duration-300">
                    Tambah data
                </button>
            </a>
        </div>
        <div class="flex w-full">

            <div class="w-[65%] pr-5">
                <table class="border-collapse border-solid border border-secondaries w-full mt-8 pb-8">
                    <thead class="text-black">
                        <tr>
                            <td class="bg-is-gray border border-secondaries p-1 text-xl font-normal text-secondaries text-center w-1/2">ربط</th>
                            <td class="bg-is-gray border border-secondaries p-1 text-xl font-normal text-secondaries text-center w-1/2">كتاب</th>
                        </tr>
                    </thead>
                    <tbody class="bg-is-gray text-center">
                        @forelse ($datas as $data)
                        <tr>
                            <td class="border border-secondary py-2">
                                <a href="/docs/{{$data->name}}" class="underline font-rasa" download>
                                    {{ substr($data->name, 3) }}
                                </a>
                            </td>
                            <td class="border border-secondary">{{ $data->title }}</td>
                        </tr>
                        @empty
                        <h1 class="text-4xl text-center text-black">Data is Empty</h1>
                        @endforelse
                    </tbody>

                </table>
            </div>
            <div class="w-[35%] grid grid-cols-2 h-max">
                @foreach($newest as $data)
                <div class="w-full">
                    <img src="{{ $data->cover != "default.png" ? URL::asset('/cover/'.$data->cover): 'cover/def/default.png'}} " class="h-[150px]">
                    <div class="w-full bg-isGray text-sm p-1 text-center">
                        <a href="/docs/{{$data->name}}" class="font-rasa" download>{{ $data->title }}</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection