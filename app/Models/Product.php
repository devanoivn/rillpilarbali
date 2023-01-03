<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "kayu_id",
        "warna_id",
        "jenis_id",
        "price",
        "deskripsi",
        "image"
    ];
    public function kayu():BelongsTo{
        return $this->belongsTo(Kayu::class);
    }
    public function warna():BelongsTo{
        return $this->belongsTo(Warna::class);
    }
    public function jenis():BelongsTo{
        return $this->belongsTo(Jenis::class);
    }
}
