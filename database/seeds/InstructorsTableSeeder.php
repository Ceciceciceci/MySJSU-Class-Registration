<?php

use Illuminate\Database\Seeder;

class InstructorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('instructors')->insert([
            [
                'fullName' => 'Ahmad Yazdankhah',
                'pass' => 'frankbutt'
            ]
        ]);
    }
}
