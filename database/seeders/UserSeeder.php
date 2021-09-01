<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        User::create(['name'=>'Deimer Hernandez',
        'password'=>bcrypt('123456'),
        'email'=>'deimerhdz@gmail.com',
        'telefono'=>'3006448749']);
    }
}
