<?php

use Illuminate\Database\Seeder;

class update_tabla_products_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')
            ->where('id', 1)
            ->update(['info' => "Bánh Cáy Làng Nguyễn - Thái Bình "]);

//        DB::table('products')
//            ->where('id', 3)
//            ->update(['image' => "image/banhdauxanh.jpg"]);
    }
}
