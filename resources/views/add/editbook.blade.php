@extends("layouts.admin")
@section("content")
<div class="w-full h-auto bg-white pt-20">
    <div class="w-full max-w-5xl mx-auto">
        <div class="w-full max-w-xl">
            @error("name")
            <p class="w-full bg-red-500 py-2 text-center text-white">{{ $message }}</p>
            @enderror
            <form action="/update-book" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $data->id }}">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Judul buku
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-1 px-3 text-gray-700 focus:outline-none focus:shadow-outline text-end" type="text" name="title" value="{{ $data->title }}" required>
                    </input>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-xs font-bold mb-2" for="username">
                        Cover
                    </label>
                    @if($data->cover == "default.png")
                    <h1>Belum ada cover untuk data ini!</h1>
                    @endif
                    <input type="hidden" value="{{ $data->cover }}" name="oldimage" />
                    <img src="{{URL::asset('/cover/'.$data->cover)}}" alt="preview">
                    <input class="shadow appearance-none border rounded w-full py-1 px-3 text-gray-700 focus:outline-none focus:shadow-outline text-start" type="file" accept="image/*" name="cover">
                    </input>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-xs font-bold mb-2" for="username">
                        *Tidak bisa mengganti file. Buat data baru jika ada kesalahan file upload!
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-1 px-3 text-gray-700 focus:outline-none focus:shadow-outline text-start" type="text" value="{{ $data->name }}" disabled>
                    </input>
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-secondary hover:bg-secondary-mid text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        update data
                    </button>
                    <a href="/is-admin/books">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection