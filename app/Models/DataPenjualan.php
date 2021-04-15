<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPenjualan extends Model
{
    use HasFactory;

    protected $table = "data_penjualan";

    protected $fillable = ['nama','email','no_telp','id_data_mobil'];

    public function data_mobil(){
        return $this->belongsTo('App\Models\DataMobil','id_data_mobil','id');
    }
}
