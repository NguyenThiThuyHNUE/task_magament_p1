<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(customerTableSeeder::class);

         $this->call(bills_table_seeder::class);
        $this->call(table_bill_product_seender::class);
        $this->call(blogTableSeeder::class);
        $this->call(update_tabla_products_seeder::class);
        $this->call(update1_tabla_products_seeder::class);



    }
}
