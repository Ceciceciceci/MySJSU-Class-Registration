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
            array('id' => '39', 'cid' => '80', 'semester' => 'Spring 2014', 'grade' => 'B', 'section_id' => '28061'),
            array('id' => '39', 'cid' => '81', 'semester' => 'Spring 2014', 'grade' => 'A', 'section_id' => '22996'),
            array('id' => '39', 'cid' => '47', 'semester' => 'Spring 2014', 'grade' => 'B+', 'section_id' => '21473'),
            array('id' => '39', 'cid' => '46', 'semester' => 'Spring 2014', 'grade' => 'C+', 'section_id' => '22877'),

            array('id' => '39', 'cid' => '108', 'semester' => 'Fall 2015', 'grade' => 'F', 'section_id' => '20277'),
            array('id' => '39', 'cid' => '98', 'semester' => 'Fall 2015', 'grade' => 'A+', 'section_id' => '21414'),
            array('id' => '39', 'cid' => '101', 'semester' => 'Fall 2015', 'grade' => 'B', 'section_id' => '22060'),
            array('id' => '39', 'cid' => '43', 'semester' => 'Fall 2015', 'grade' => 'C+', 'section_id' => '27365'),

            array('id' => '40', 'cid' => '25', 'semester' => 'Fall 2015', 'grade' => '-', 'section_id' => '27519'),
            array('id' => '40', 'cid' => '14', 'semester' => 'Fall 2015', 'grade' => '-', 'section_id' => '27500'),
            array('id' => '40', 'cid' => '12', 'semester' => 'Fall 2015', 'grade' => '-', 'section_id' => '27450'),

            array('id' => '40', 'cid' => '10', 'semester' => 'Spring 2014', 'grade' => 'A+', 'section_id' => '27436'),
            array('id' => '40', 'cid' => '13', 'semester' => 'Spring 2014', 'grade' => 'A+', 'section_id' => '20194'),
            array('id' => '40', 'cid' => '15', 'semester' => 'Spring 2014', 'grade' => 'B+', 'section_id' => '27505'),
            array('id' => '40', 'cid' => '1', 'semester' => 'Spring 2014', 'grade' => 'B+', 'section_id' => '20465'),

            array('id' => '40', 'cid' => '11', 'semester' => 'Fall 2014', 'grade' => 'A-', 'section_id' => '25153'),
            array('id' => '40', 'cid' => '47', 'semester' => 'Fall 2014', 'grade' => 'A+', 'section_id' => '21473'),

            //array('id' => '39', 'cid' => '104', 'semester' => 'Spring 2015', 'grade' => 'B+'),
        ));
    }
}
