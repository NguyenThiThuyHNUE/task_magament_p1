<?php

use App\Bill;
use Illuminate\Database\Seeder;

class bills_table_seeder extends Seeder
{

    public function run()
    {
        $bill=new Bill();
        $bill->customer_id='2';
        $bill->total='100000';
        $bill->pay_date='2019-09-12';
        $bill->save();

        $bill=new Bill();
        $bill->customer_id='1';
        $bill->total='50000';
        $bill->pay_date='2019-08-07';
        $bill->save();
    }
}
