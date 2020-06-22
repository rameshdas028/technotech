<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['title' => "admin"],
            ['title' => "user"]
        ];
        foreach($items as $item){
           Role::create($item);
        }
    }
}
