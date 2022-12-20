<?php

namespace App\Http\Controllers;

use App\Models\PialaDunia as ModelsPialaDunia;
use Illuminate\Http\Request;

class PialaDunia extends Controller
{
    public function index()
    {
        $pildun = ModelsPialaDunia::all();
        return view('pildun.index', [
            'pildun' => $pildun
        ]);
    }

    public function tambah()
    {
        return view('pildun.form');
    }

    public function simpan(Request $request)
    {
        $validatedData = $request->validate(
            [
                'negara_penyelenggara' => 'required',
                'tahun_diselenggarakan' => 'required',

            ],
            [
                'negara_penyelenggara.required' => 'negara penyelenggara tidak boleh kosong', // pesan kustom validasi
                'tahun_diselenggarakan.required' => 'tahun diselenggarakan tidak boleh kosong',

            ]
        );;

        $simpanData = new ModelsPialaDunia();
        $simpanData->negara_penyelenggara = $request->negara_penyelenggara;
        $simpanData->tahun_diselenggarakan = $request->tahun_diselenggarakan;

        $simpanData->save();

        return redirect('/piala-dunia')->with('info', 'Sukses Menyimpan Data');
    }

    public function edit($id)
    {
        $pildun = ModelsPialaDunia::find($id);
        return view('pildun.edit',
        [
            'pildun' => $pildun
        ]);
    }

    public function Hapus($id)
    {
        $pildun = ModelsPialaDunia::destroy($id);
        return back()->with('message','Sukses Menghapus Data');
    }

    public function update(Request $request, $id)
    {
        $updateData = ModelsPialaDunia::where('id',$id)
                ->update($request->except(['_token']));
        if (!$updateData) {
            return back();
        }
        return redirect(route('piala.dunia'))->with('message','Sukses Mengupdate Data');
    }
}