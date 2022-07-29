<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Korkondasi;

class KorkondasiController extends Controller
{
    public function show(Request $request)
    {
        if ($request->has("search")) {
            $datas = Korkondasi::where("kolokasi", "LIKE", "%" . $request->search . "%")->paginate(5);
        } else {
            $datas = Korkondasi::latest()->paginate(5);
        }
        return view('korkondasi', ["datas" => $datas]);
    }
    public function adminpage()
    {
        $datas = Korkondasi::latest()->paginate(5);
        return view("add.korkondasiadd", ["datas" => $datas]);
    }
    public function storepage()
    {
        return view("add.formkorkondasi");
    }
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required",
            "kolokasi" => "required",
            "url" => "required"
        ]);
        $korkondasi = new Korkondasi;
        $korkondasi->title = $request->title;
        $korkondasi->kolokasi = $request->kolokasi;
        $korkondasi->url = $request->url;
        $korkondasi->save();

        return redirect("/is-admin/korkondasi")->with("success", "Data berhasil ditambahkan");
    }
    public function destroy($id)
    {
        $data = Korkondasi::find($id);
        $data->delete();

        return redirect("/is-admin/korkondasi")->with("success", "Data berhasil dihapus");
    }
    public function editpage($id)
    {
        $data = Korkondasi::find($id);
        return view("add.editkorkondasi", ["data" => $data]);
    }
    public function update(Request $request)
    {
        $validated = $request->validate([
            'title' => "required",
            "kolokasi" => "required",
            "url" => "required"
        ]);
        Korkondasi::where("id", $request->id)->update($validated);
        return redirect('/is-admin/korkondasi')->with("success", "Data berhasil diupdate");
    }
}
