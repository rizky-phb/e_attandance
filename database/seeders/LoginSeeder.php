<?php

namespace Database\Seeders;

use App\Models\login;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Login::create([
            'nip'=>19090107,
            'password'=>Hash::make('blabla12'),
            'role'=>'admin',
        ]);
    }
}
