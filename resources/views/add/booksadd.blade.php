@extends("layouts.admin")
@section("style")
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
@endsection
@section("content")
<div class="w-full max-w-5xl mx-auto bg-white pt-20">
    <div class="w-full relative h-1">
        @if($message = Session::get("success"))
        <h1 id="success" class="text-center absolute top-1 right-4 z-50 bg-main p-2 rounded-md w-max mb-5 text-white">{{$message}}</h1>
        @endif
    </div>
    <a href="/new-book">
        <button type="button" class='text-white bg-secondary-mid py-2 px-6 rounded'>Tambah Buku</button>
    </a>
    <div class="relative overflow-x-auto">
        <table class="border-collapse border border-is-gray-low table-auto w-full mt-8">
            <thead class="text-white">
                <tr>
                    <th class="bg-secondary-mid border border-is-gray-low p-1 font-light text-center w-[80px]">No</th>
                    <th class="bg-secondary-mid border border-is-gray-low p-1 font-light text-center">Nama buku</th>
                    <th class="bg-secondary-mid border border-is-gray-low p-1 font-light text-center">cover</th>
                    <th class="bg-secondary-mid border border-is-gray-low p-1 font-light text-center w-[150px]">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @forelse($datas as $key => $data)
                <tr class="text-sm font-light even:bg-white-low odd:bg-transparent">
                    <td class="py-3 px-2 border border-is-gray-low text-black-low">{{ $datas->firstItem() + $key }}</td>
                    <td class="py-3 px-2 border border-is-gray-low text-black-low">{{ $data->title }}</td>
                    <td class="py-3 px-2 border border-is-gray-low text-black-low">
                        <div class="flex justify-center">
                            @if($data->cover == "default.png")
                            <img src="{{URL::asset('/cover/def/default.png')}}" class="w-40 h-40">
                            @else
                            <img src="{{URL::asset('/cover/'.$data->cover)}}" class="w-40 h-40">
                            @endif
                        </div>
                    </td>
                    <td class="py-3 px-2 border border-is-gray-low flex justify-center space-x-3 cursor-pointer">
                        <form action="{{route('del.book', [$data->id])}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="text-red-500 underline">Hapus data</button>
                        </form>
                        <a href="/book/edit/{{$data->id}}" class="text-secondary-mid underline">Edit</a>
                    </td>
                </tr>
                @empty
                <h1 class="text-2xl text-black text-center">Data is empty!</h1>
                @endforelse
            </tbody>
        </table>
        <div class="flex w-full justify-center mt-10">
            {{ $datas->links("pagination::bootstrap-4") }}
        </div>

    </div>
</div>
<script>
    let success = document.getElementById("success");
    if (success) {
        setTimeout(() => {
            success.remove();
        }, 3000)
    }
</script>
@endsection