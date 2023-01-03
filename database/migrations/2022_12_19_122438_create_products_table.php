<?php

use App\Models\Jenis;
use App\Models\Kayu;
use App\Models\Warna;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name"); 
            $table->foreignIdFor(Kayu::class);
            $table->foreignIdFor(Warna::class); 
            $table->foreignIdFor(Jenis::class);
            $table->string("price");
            $table->string("deskripsi");
            $table->string("image");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
