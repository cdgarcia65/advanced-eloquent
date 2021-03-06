<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoryTableSeeder::class);
        $this->call(BookTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(BookUserTableSeeder::class);
    }
}
