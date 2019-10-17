<?php

use App\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class add_immage_product_table_seender extends Seeder
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
            ->update(['image' => "banhcay.jpg"]);
        DB::table('products')
            ->where('id', 2)
            ->update(['image' => "banhcay.jpg"]);
        DB::table('products')
            ->where('id', 3)
            ->update(['image' => "banhdauxanh.jpg"]);
    }
}
