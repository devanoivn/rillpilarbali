<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi_header extends Model


{
    protected $table = "transaksi_header";
    protected $primarykey = "id_transaksi_header";

    use HasFactory;


    protected $fillable = [
        'email'
    ];

    static function tambah_header_transaksi(){
        $data = Transaksi_header::create([
            "tanggal_transaksi"=>date("Y-m-d"),
        ]);

        return $data -> id_transaksi;
    }
}