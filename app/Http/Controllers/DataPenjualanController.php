<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPenjualan;
use App\Models\DataMobil;
use App\Mail\InvoiceMail;
use Illuminate\Support\Facades\Mail;


class DataPenjualanController extends Controller
{
    public function index()
    {
        $data_penjualan = DataPenjualan::with('data_mobil')->orderBy('created_at', 'DESC')->get();
        return view('data_penjualan', compact('data_penjualan'));
    }

    public function tambah()
    {
        $data_mobil = DataMobil::pluck('nama', 'id')->toArray();
        return view('tambah_data_penjualan', compact('data_mobil'));
    }

    public function tambah_post(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
        ]);

        $data_penjualan=DataPenjualan::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'id_data_mobil' => $request->id_data_mobil,
        ]);

        $invoice = DataPenjualan::with(['data_mobil'])->find($data_penjualan->id);
        Mail::to($data_penjualan->email)->send(new InvoiceMail($invoice));
        
        return redirect()->route('data-penjualan')->with(['success' => 'Data Penjualan Ditambah']);;
    }

    public function hapus($id)
    {
        DataMobil::destroy($id);
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
