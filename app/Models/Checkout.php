<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "email",
        "phone",
        "address",
        "city",
        "province",
        "zip",
        "deskripsi",
        "product_name",
        "quantity",
        "price",
        "total",
    ];
    static function tambah_checkout($id_product, $id_header_transaksi, $name, $email, $phone, $address, $city, $province, $zip, $deskripsi, $quantity, $price, $total,
    ) {
        Product::create([
            "id_header_transaksi"=> $id_header_transaksi,
            "name"=> $name,
            "email"=> $email,
            "phone"=> $phone,
            "address"=> $address,
            "city"=> $city,
            "province"=> $province,
            "zip"=> $zip,
            "deskripsi"=> $deskripsi,
            "id_product"=> $id_product,
            "quantity"=> $quantity,
            "price"=> $price,
            "total"=> $total,
        ]);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
