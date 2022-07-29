<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BooksController extends Controller
{
    public function show()
    {
        $datas = Books::orderBy("title", "ASC")->get();
        $newest = Books::latest()->take(4)->get();
        return view("books", ["datas" => $datas, "newest" => $newest]);
    }
    public function adminpage()
    {
        $books = Books::latest()->paginate(5);
        return view("add.booksadd", ["datas" => $books]);
    }
    public function storepage()
    {
        return view("add.formbook");
    }
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required",
            "name" => "required|mimes:pdf",
            "cover" => "mimes:jpg,jpeg,png"
        ]);
        $rand = Str::random(2);

        $cover = $request->file("cover");

        $file = $request->file("name");
        $name = $rand . "-" . $file->getClientOriginalName();
        $file->move("docs/", $name);
        $book = new Books;
        if ($cover) {
            $coverName = $rand . "-" . $cover->getClientOriginalName();
            $cover->move("cover/", $coverName);
            $book->title = $request->title;
            $book->name = $name;
            $book->cover = $coverName;
        } else {
            $book->title = $request->title;
            $book->name = $name;
        }
        $book->save();

        return redirect("/is-admin/books")->with("success", "Data berhasil ditambahkan");
    }
    public function destroy($id)
    {
        $book = Books::find($id);
        $name = $book->name;
        $cover = $book->cover;
        if ($cover !== "default.png") {
            File::delete("cover/$cover");
        }
        File::delete("docs/$name");
        $book->delete();
        return redirect("/is-admin/books")->with("success", "Data berhasil dihapus");
    }
    public function editpage($id)
    {
        $data = Books::find($id);
        return view("add.editbook", ["data" => $data]);
    }
    public function update(Request $request)
    {
        $rand = Str::random(2);
        $validated = $request->validate([
            "title" => "required",
            "cover" => "mimes:jpeg,jpg,png",
            "id" => "required"
        ]);
        $cover = $request->file("cover");
        if ($cover) {
            File::delete("cover/$request->oldimage");
            $coverName = $rand . "-" . $cover->getClientOriginalName();
            $cover->move("cover/", $coverName);
            $updated = [
                "title" => $request->title,
                "cover" => $coverName
            ];
            Books::where("id", $request->id)->update($updated);
        } else {
            Books::where("id", $request->id)->update($validated);
        }
        return redirect("is-admin/books")->with("success", "Data berhasil diupdate");
    }
}
