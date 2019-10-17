<?php

use Illuminate\Database\Seeder;

class add_city_id_table_product extends Seeder
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
            ->update(['city_id' => "1"]);
        DB::table('products')
            ->where('id', 2)
            ->update(['city_id' => "2"]);
    }
}
