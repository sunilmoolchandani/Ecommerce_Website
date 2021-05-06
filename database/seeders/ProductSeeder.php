<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'name'=>'Oppo mobile',
            'price'=>'300',
            'description'=>'a Smartphone with 6 gb ram and much more',
            'category'=>'mobile',
            'gallery'=>'https://www.hilaptop.com/in/p/OnePlus-5-Midnight-Black-8GB-RAM-128GB-memory-WITH-BOX/3765?gclid=Cj0KCQjwsqmEBhDiARIsANV8H3a5CY9yBjJpSXM77xMK1tshyeTkZZplhkApGp5U39w0kCzGj5ftORsaAreJEALw_wcB'
                    ],
            [
                'name'=>'Panasonic tv',
                'price'=>'200',
                'description'=>'a tv with 4 gb ram and much more',
                'category'=>'Television',
                'gallery'=>'https://www.reliancedigital.in/medias/Panasonic-139-cm-55-inch-Ultra-HD-4K-LED-Smart-TV-TH-55GX750D-491600387-i-1-1200Wx1200H?context=bWFzdGVyfGltYWdlc3w1ODU3MDd8aW1hZ2UvanBlZ3xpbWFnZXMvaDE2L2hlOC85Mjk5MzAyNzc2ODYyLmpwZ3wyNGU4ZTQ2NDQzN2Q4Zjg3NDEyMzY2YzZjODljMDI3YTVkY2YyODA4ZjI3NDJmNDQ0OGQ1ZTlkMDI1YjliMzBj'
                            
            ],
            [
                'name'=>'SONY Tv',
            'price'=>'500',
            'description'=>'a TV with 6 gb ram and much more',
            'category'=>'Television',
            'gallery'=>'https://www.reliancedigital.in/medias/Sony-32R202G-Televisions-491431468-i-1-1200Wx1200H?context=bWFzdGVyfGltYWdlc3w2NjkwM3xpbWFnZS9qcGVnfGltYWdlcy9oN2QvaDU0Lzk0NDA2MzUyODk2MzAuanBnfDI2NzczOGM2MTZlNjhjMWI4YmE2OTY0OWRhMWM1MzRjNjA3N2RjYmRjNjdmNTQ5Yjk1MTM2ZTA2ZjZjYWYzYTc'

            ],
            [
                'name'=>'LG Fridge',
            'price'=>'350',
            'description'=>'a cooling fridge',
            'category'=>'Fridge',
            'gallery'=>'https://images-eu.ssl-images-amazon.com/images/I/41TzBxb3MrL._SX342_SY445_QL70_FMwebp_.jpg'
            ]
            ]);
    }
}
