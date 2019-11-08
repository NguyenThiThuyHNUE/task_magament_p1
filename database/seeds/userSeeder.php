<?php

use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= new \App\User();
        $user->name='thuy';
        $user->email='nguyenthithuyqptb@gmail.com';
        $user->password='12345678';
        $user->provider='a';
        $user->provider_id='a';
        $user->save();

        $user= new \App\User();
        $user->name='phuc';
        $user->email='quocphuc@gmail.com';
        $user->password='12345678';
        $user->provider='a';
        $user->provider_id='a';
        $user->save();
    }
}
