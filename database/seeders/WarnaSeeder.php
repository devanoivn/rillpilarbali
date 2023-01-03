<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WarnaSeeder extends Seeder
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
    }
}
