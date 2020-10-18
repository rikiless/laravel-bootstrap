<?php

namespace Database\Seeders;

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
        DB::table('values')->insert([
            'name' => 'range',
            'value' => 5
        ]);

        DB::table('values')->insert([
            'name' => 'airplane',
            'value' => 0
        ]);

        DB::table('values')->insert([
            'name' => 'cellular',
            'value' => 1
        ]);

        DB::table('values')->insert([
            'name' => 'wifi',
            'value' => 1
        ]);

        DB::table('values')->insert([
            'name' => 'bluetooth',
            'value' => 1
        ]);

        DB::table('values')->insert([
            'name' => 'airdrop',
            'value' => 0
        ]);

        DB::table('values')->insert([
            'name' => 'personal',
            'value' => 0
        ]);

        // $this->call(UsersTableSeeder::class);
    }
}
