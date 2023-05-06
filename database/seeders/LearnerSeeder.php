<?php

namespace Database\Seeders;
use App\Models\Learner;
use Illuminate\Database\Seeder;

class LearnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Learner::create([

            'name' => 'Test',

            'email' => 'admin1@gmail.com',

            'password' => bcrypt('12345678'),

            'age' => 25,

            'residence' => "Tokyo",

            'gender' => "Male"

            ]);
    }
}
