<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use Carbon\Carbon;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_id' => 1 ,
            'name'    => 'Technotech',
            'email'    => 'admin@gmail.com',
            'password'  => Hash::make(12345678),

        ]);
    }
}
