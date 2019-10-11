<?php

use App\Customer;
use Illuminate\Database\Seeder;

class customerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $customer= new Customer();
       $customer->name='thuy';
       $customer->address='Thai Binh';
       $customer->phone='09876';
       $customer->image='aa.ipg';
       $customer->save();


        $customer= new Customer();
        $customer->name='Nam';
        $customer->address='Ha Noi';
        $customer->phone='00000';
        $customer->image='aaabbb.jpg';

        $customer->save();




    }
}
