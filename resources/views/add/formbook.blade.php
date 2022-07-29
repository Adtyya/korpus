@extends("layouts.admin")
@section("content")
<div class="w-full h-auto bg-white pt-20">
    <div class="w-full max-w-5xl mx-auto">
        <div class="w-full max-w-xl">
            @error("name")
            <p class="w-full bg-red-500 py-2 text-center text-white">{{ $message }}</p>
            @enderror
            <form action="/new-book" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Judul buku
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-1 px-3 text-gray-700 focus:outline-none focus:shadow-outline text-end" type="text" name="title" required>
                    </input>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Upload file *Hanya pdf
                    </label>
                    <input class="block w-full text-sm text-gray-900 bg-gray-50 border border-gray-300 cursor-pointer py-1 px-1 rounded shadow appearance-none" type="file" name="name" required accept="application/pdf">
                    </input>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Cover photo *Boleh kosong
                    </label>
                    <input class="block w-full text-sm text-gray-900 bg-gray-50 border border-gray-300 cursor-pointer py-1 px-1 rounded shadow appearance-none" type="file" name="cover" id="cover" accept="image/*">
                    </input>
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-secondary hover:bg-secondary-mid text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Tambah data
                    </button>
                    <a href="/is-admin/books">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection