<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataMobil;
use App\Models\DataPenjualan;

class DataMobilController extends Controller
{
    public function index()
    {
        $data_mobil = DataMobil::orderBy('created_at', 'DESC')->get();
        return view('data_mobil', compact('data_mobil'));
    }

    public function tambah()
    {
        return view('tambah_data_mobil');
    }

    public function tambah_post(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'harga' => 'required|integer',
            'stock' => 'required|integer',
        ]);

        DataMobil::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stock' => $request->stock,
        ]);
        return redirect()->route('data-mobil')->with(['success' => 'Data Mobil Ditambah']);;
    }

    public function hapus($id)
    {
        DataMobil::destroy($id);
        DataPenjualan::where('id_data_mobil', $id)->delete();
        return redirect()->route('data-mobil')->with(['danger' => 'Data Mobil Dihapus']);;
    }

    public function edit($id)
    {
        $data_mobil = DataMobil::where('id',$id)->first();
        return view('edit_data_mobil', compact('data_mobil'));
    }

    public function edit_post(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'harga' => 'required',
            'stock' => 'required',
        ]);
        $data_mobil = DataMobil::where('id',$request->id)->first();
        $data_mobil->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stock' => $request->stock,
        ]);
        return redirect()->route('data-mobil')->with(['success' => 'Data Mobil Diedit']);;
    }
}
