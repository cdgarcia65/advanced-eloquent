<?php

use Illuminate\Database\Seeder;
use App\User;

class BookUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            $user = User::find($i);

            for ($b = 1; $b <= 3; $b++) {
                $user->books()->attach(rand(1, 20));
            }
        }
    }
}
