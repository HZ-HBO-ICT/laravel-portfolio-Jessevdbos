<?php

namespace Database\Seeders;

use Faker\Core\Number;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
            'course_name' =>  Str::random(10),
            'test_name' => Str::random(3),
            'lowest_passing_grade' => 5.5,
            'best_grade' => rand(5, 10),
            'passed_at' => now()
        ]);
    }
}
