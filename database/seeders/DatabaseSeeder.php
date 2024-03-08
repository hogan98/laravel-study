<?php

namespace Database\Seeders;

use App\Models\User;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::updateOrcreate([
            'email' => 'me@michaelhoughton.com'
        ],[
            'name' => 'Michael Houghton',
            'password' => bcrypt('password'),
            'admin' => 1,
        ]);
    }
}
