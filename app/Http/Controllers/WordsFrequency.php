<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Words;

class WordsFrequency extends Controller
{
    public function show(Request $request)
    {
        if ($request->has("search")) {
            $keyword = $request->search;
            $datas = Words::where("word", "LIKE", "%" . $request->search . "%")->paginate(5);
        } else {
            $keyword = '';
            $datas = Words::latest()->paginate(5);
        }
        return view('frekuensikata', ["datas" => $datas, "keyword" => $keyword]);
    }
    public function adminpage()
    {
        $datas = Words::latest()->paginate(5);
        return view("add.frekuensiadd", ["datas" => $datas]);
    }
    public function storepage()
    {
        return view("add.form");
    }
    public function store(Request $request)
    {
        $request->validate([
            "word" => "required",
            "amountword" => "required",
            "team" => "required"
        ]);
        $word = new Words;
        $word->word = $request->word;
        $word->amountword = $request->amountword;
        $word->team = $request->team;
        $word->save();

        return redirect("/is-admin/word-frequency")->with("success", "Data berhasil ditambahkan");
    }
    public function destroy($id)
    {
        $data = Words::find($id);
        $data->delete();

        return redirect('/is-admin/word-frequency')->with("success", "Data berhasil dihapus");
    }
    public function editpage($id)
    {
        $data = Words::find($id);
        return view("add.edit", ["data" => $data]);
    }
    public function update(Request $request)
    {
        $validated = $request->validate([
            'word' => "required",
            "team" => "required",
            "amountword" => "required"
        ]);
        Words::where("id", $request->id)->update($validated);
        return redirect('/is-admin/word-frequency')->with("success", "Data berhasil diupdate");
    }
}
