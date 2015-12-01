<?php

use Illuminate\Database\Seeder;

class ClassesTakenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classestaken')->insert(array(
            array('id' => '39', 'cid' => '80', 'semester' => 'Spring 2014', 'grade' => 'B'),
            array('id' => '39', 'cid' => '81', 'semester' => 'Spring 2014', 'grade' => 'A'),
            array('id' => '39', 'cid' => '47', 'semester' => 'Spring 2014', 'grade' => 'B+'),
            array('id' => '39', 'cid' => '46', 'semester' => 'Spring 2014', 'grade' => 'C+'),

            array('id' => '39', 'cid' => '108', 'semester' => 'Fall 2015', 'grade' => 'B+'),
            array('id' => '39', 'cid' => '98', 'semester' => 'Fall 2015', 'grade' => 'A+'),
            array('id' => '39', 'cid' => '101', 'semester' => 'Fall 2015', 'grade' => 'B'),
            array('id' => '39', 'cid' => '43', 'semester' => 'Fall 2015', 'grade' => 'C+'),

            //array('id' => '39', 'cid' => '104', 'semester' => 'Spring 2015', 'grade' => 'B+'),
        ));
    }
}
