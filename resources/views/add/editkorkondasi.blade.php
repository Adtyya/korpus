@extends("layouts.admin")
@section("content")
<div class="w-full h-auto bg-white pt-20">
    <div class="w-full max-w-5xl mx-auto">
        <div class="w-full max-w-xl">
            @if($errors->any())
            <p class="w-full bg-red-500 py-2 text-center px-2 text-white">Error, harap isi semua field!</p>
            @endif
            <form action="/update-korkondasi" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                <input type="hidden" name="id" value="{{ $data->id }}" />
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Judul
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-1 px-3 text-gray-700 focus:outline-none focus:shadow-outline text-end" type="text" name="title" value="{{ $data->title }}" required>
                    </input>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Kolokasi
                    </label>
                    <textarea cols="30" rows="10" class="shadow appearance-none border rounded text-end w-full focues:outline-none" name="kolokasi">{{ $data->kolokasi }}</textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Url video
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline text-start" id="username" type="text" name="url" value="{{ $data->url }}" required>
                </div>

                <div class="flex items-center justify-between">
                    <button class="bg-secondary hover:bg-secondary-mid text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        update data
                    </button>
                    <a href="/is-admin/korkondasi">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection