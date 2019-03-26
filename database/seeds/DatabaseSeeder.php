<?php

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
            'name' => 'switch-airplane-mode',
            'value' => 0
        ]);

        DB::table('values')->insert([
            'name' => 'switch-cellular-data',
            'value' => 1
        ]);

        DB::table('values')->insert([
            'name' => 'switch-wifi',
            'value' => 1
        ]);

        DB::table('values')->insert([
            'name' => 'switch-bluetooth',
            'value' => 1
        ]);

        DB::table('values')->insert([
            'name' => 'switch-airdrop',
            'value' => 0
        ]);

        DB::table('values')->insert([
            'name' => 'switch-personal-hotspot',
            'value' => 0
        ]);

        // $this->call(UsersTableSeeder::class);
    }
}
