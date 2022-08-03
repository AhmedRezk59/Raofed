<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'email' => 'a@a.com',
            'name' => 'أحمد رزق',
            'password' => '12345678',
        ]);
        Admin::create([
            'email' => 'a@a.com',
            'name' => 'أحمد رزق',
            'password' => '12345678',
        ]);
    }
}
