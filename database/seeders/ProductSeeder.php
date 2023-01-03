<?php

namespace Database\Seeders;

use App\Models\Kayu;
use App\Models\Product;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fakerNatural = Factory::create('Natural');
        $fakerMedium = Factory::create('Medium');
        $fakerWhiteWash = Factory::create('WhiteWash');
        $fakerDuco = Factory::create('Duco');

        //     $index = 0;

        //     foreach (Kayu::all() as $kayu) {
        //         if ($index == 0) {
        //             Product::factory()->create([
        //                 'name' => $fakerNatural->name,
        //                 'color' => 'color',
        //                 'Kayu_id' => $kayu,
        //                 'deskripsi' => 'ini desk',
        //                 'price' => '$100',
        //             ]);
        //         } else if ($index == 1) {
        //             Product::factory()->create([
        //                 'name' => $fakerMedium->name,
        //                 'color' => 'warna',
        //                 'Kayu_id' => $kayu,
        //                 'deskripsi' => 'ini dsk',
        //                 'price' => '$200',
        //             ]);
        //         } else if ($index == 2) {
        //             Product::factory()->create([
        //                 'name' => $fakerWhiteWash->name,
        //                 'color' => 'warna',
        //                 'Kayu_id' => $kayu,
        //                 'deskripsi' => 'ini dsk',
        //                 'price' => '$200',
        //             ]);
        //         } else if ($index == 3) {
        //             Product::factory()->create([
        //                 'name' => $fakerDuco->name,
        //                 'color' => 'warna',
        //                 'Kayu_id' => $kayu,
        //                 'deskripsi' => 'ini dsk',
        //                 'price' => '$200',
        //             ]);
        //         }
        //         $index++;
        //     }
        // }
    }
}
