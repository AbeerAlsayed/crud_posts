<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Abeer Alsayed',
            'email'=>'abeersami@gmail.com',
            'job'=>'laravel developer',
            'address'=>'Altal',
            'phone'=>'099999',
            'cv'=>'github.com/AbeerAlsayed',
            'picture'=>'658c0599e09670cee87985282b533555.jpg'
        ]);
    }
}
