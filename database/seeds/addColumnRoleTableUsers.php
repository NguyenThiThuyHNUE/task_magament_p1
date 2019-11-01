<?php

use Illuminate\Database\Seeder;

class addColumnRoleTableUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')
            ->where('id', 1)
            ->update(['role' => "1"]);
        DB::table('users')
            ->where('id', 3)
            ->update(['role' => "0"]);
    }
}
