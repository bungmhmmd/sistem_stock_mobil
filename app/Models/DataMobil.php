<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMobil extends Model
{
    use HasFactory;
    
    protected $table = "data_mobil";

    protected $fillable = ['nama','harga','stock'];

    public function data_penjualan(){
        return $this->hasMany('App\Models\DataPenjualan','id_data_mobil',$this->primaryKey);
    }
}
