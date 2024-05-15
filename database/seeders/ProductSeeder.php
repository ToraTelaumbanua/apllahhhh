<?php

namespace Database\Seeders;

use App\Models\Product;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('id_ID');
        #product1
        $p = new Product();
        $p->barcode = $faker->numerify('######');
        $p->name = 'LCD Epson';
        $p->price = 4500000;
        $p->save();
        #product2
        $p = new Product();
        $p->barcode = $faker->numerify('######');
        $p->name = 'Permen Kopiko';
        $p->price = 2000;
        $p->save();
        #product3
        $p = new Product();
        $p->barcode = $faker->numerify('######');
        $p->name = 'Ac Sharp Inverter 2PK';
        $p->price = 7500000;
        $p->save();
        #product4
        $p = new Product();
        $p->barcode = $faker->numerify('######');
        $p->name = 'Bunga Plastik Palsu';
        $p->price = 25000;
        $p->save();
        #product5
        $p = new Product();
        $p->barcode = $faker->numerify('######');
        $p->name = 'Spidol Snowman';
        $p->price = 15000;
        $p->save();
        #product6
        $p = new Product();
        $p->barcode = $faker->numerify('######');
        $p->name = 'Janda';
        $p->price = 350000;
        $p->save();
        #php artisan db:seed --class=ProductSeeder
    }
}
