<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EmployeeSeeder extends Seeder
{
        /**
     * Run the migrations.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            'name' => Str::random(10),
            'age' => rand(18, 65)
        ]);
        DB::table('employees')->insert([
            'name' => Str::random(10),
            'age' => rand(18, 65)
        ]);
        DB::table('employees')->insert([
            'name' => Str::random(10),
            'age' => rand(18, 65)
        ]);
        DB::table('employees')->insert([
            'name' => Str::random(10),
            'age' => rand(18, 65)
        ]);
        DB::table('employees')->insert([
            'name' => Str::random(10),
            'age' => rand(18, 65)
        ]);
        DB::table('employees')->insert([
            'name' => Str::random(10),
            'age' => rand(18, 65)
        ]);
        DB::table('employees')->insert([
            'name' => Str::random(10),
            'age' => rand(18, 65)
        ]);
    }
}
