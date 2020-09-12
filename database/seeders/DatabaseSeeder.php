<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        User::create([
            'name'      => 'Wayre Avelar',
            'email'     => 'wayre1@gmail.com',
            'password'  => bcrypt('123155')
        ]);
    }
}
