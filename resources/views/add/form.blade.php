@extends("layouts.admin")
@section("content")
<div class="w-full h-auto bg-white pt-20">
    <div class="w-full max-w-5xl mx-auto">
        <div class="w-full max-w-md">
            @if($errors->any())
            <p class="w-full bg-red-500 py-2 text-center px-2 text-white">Error, harap isi semua field!</p>
            @endif
            <form action="/new-frequency" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        "Word"
                    </label>
                    <textarea cols="30" rows="10" class="shadow appearance-none border rounded text-end w-full focues:outline-none" name="word" required></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Masukan nama team
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline text-end" id="username" type="text" name="team" placeholder="موالة" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Masukan Jumlah <span class="font-normal text-xs">*Hanya angka</span>
                    </label>
                    <input class="shadow appearance-none border rounded w-max py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline text-end" id="username" type="number" name="amountword" placeholder="Jumlah" min='1' required>
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-secondary hover:bg-secondary-mid text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Tambah data
                    </button>
                    <a href="/is-admin/word-frequency">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection