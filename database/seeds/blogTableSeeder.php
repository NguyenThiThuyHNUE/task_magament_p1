<?php

use Illuminate\Database\Seeder;

class blogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog=new \App\Feedback();
        $blog->customer_id ='1';
        $blog->content ='Ai lam trang web ma de thuong the';
        $blog->save();

        $blog=new \App\Feedback();
        $blog->customer_id ='2';
        $blog->content ='Thuy lam day';
        $blog->save();

        $blog=new \App\Feedback();
        $blog->customer_id ='3';
        $blog->content ='The a, Thuy lam co khac';
        $blog->save();

    }
}
