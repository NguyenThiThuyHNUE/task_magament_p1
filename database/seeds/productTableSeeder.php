<?php

use App\Product;
use Illuminate\Database\Seeder;

class productTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product=new Product();
        $product->name='Banh Cáy';
        $product->price='50000';
        $product->hometown='Thái Bình';
        $product->species='Bánh Kẹo';
        $product->save();

        $product1=new Product();
        $product1->name='Bánh đậu xanh';
        $product1->price='20000';
        $product1->hometown='Hải Dương';
        $product1->species='Bánh Kẹo';
        $product1->save();

    }
}
