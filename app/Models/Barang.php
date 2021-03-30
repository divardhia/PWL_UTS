<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = "barangs"; 
    public $timestamps = false;
    protected $primaryKey = 'id_barang'; 

    protected $fillable = [
        'id_barang',
        'kode_barang',
        'nama_barang',
        'kategori_barang',
        'harga',
        'qty',
    ];
}
