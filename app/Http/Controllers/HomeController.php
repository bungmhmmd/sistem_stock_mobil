<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\DataPenjualan;
use App\Models\DataMobil;

class HomeController extends Controller
{
    public function index()
    {
        //$terbanyak_hariini = DataMobil::select(['data_mobil.nama','data_mobil.id',DB::raw('COUNT(DISTINCT data_penjualan.id) AS total')])
        //            ->leftJoin('data_penjualan','data_penjualan.id_data_mobil','=','data_mobil.id')
        //            ->groupBy('data_mobil.id')
        //            ->orderBy('total','desc')
        //            ->first();
        $terbanyak_hariini='avanza';
        return view('home', compact('terbanyak_hariini'));
    }
}
