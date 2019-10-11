<?php

use App\Bill;
use Illuminate\Database\Seeder;

class table_bill_product_seender extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bill=Bill::find(1);
        $bill->products()->attach(1);
        $bill->products()->attach(2);

        $bill=Bill::find(2);
        $bill->products()->attach(1);

    }
}
