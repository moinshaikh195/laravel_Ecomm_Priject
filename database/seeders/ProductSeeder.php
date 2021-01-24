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
        //
        DB::table('products')->insert([
            [
                'name'=>'SAMSUNG',
                'price'=>'20000',
                'category'=>'MOBILE',
                'gallery'=>'https://www.lg.com/in/images/mobile-phones/md06218996/LMG850EMW-D-1-v11.jpg',
                'description'=>'samsung 8gb Ram and much more'            
            ],
            [
                'name'=>'IPHONE MOBILE',
                'price'=>'180000',
                'category'=>'MOBILE',
                'gallery'=>'https://www.lg.com/in/images/mobile-phones/md07518623/gallery/LMF100EMW-D-05.jpg',
                'description'=>' Smart Phone and much more'            
            ],
            [
                'name'=>'MI MOBILE',
                'price'=>'8000',
                'category'=>'MOBILE',
                'gallery'=>'https://www.lg.com/in/images/mobile-phones/md06202717/gallery/D01.jpg',
                'description'=>'MI 10 TRIPLE Smart Phone and much more'            
            ]
        ]);
    }
}
