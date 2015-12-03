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
        DB::table('classestaken')->insert($this->classesTaken());
    }

    private function classesTaken() {
        $arr = array(
            array('id' => '39', 'cid' => '80', 'semester' => 'Spring', 'year' => '2014', 'grade' => 'B', 'section_id' => '28061'),
            array('id' => '39', 'cid' => '81', 'semester' => 'Spring', 'year' => '2014', 'grade' => 'A', 'section_id' => '22996'),
            array('id' => '39', 'cid' => '47', 'semester' => 'Spring', 'year' => '2014', 'grade' => 'B+', 'section_id' => '21473'),
            array('id' => '39', 'cid' => '46', 'semester' => 'Spring', 'year' => '2014', 'grade' => 'C+', 'section_id' => '22877'),

            array('id' => '39', 'cid' => '108', 'semester' => 'Fall', 'year' => '2015', 'grade' => 'F', 'section_id' => '20277'),
            array('id' => '39', 'cid' => '98', 'semester' => 'Fall', 'year' => '2015', 'grade' => 'A+', 'section_id' => '21414'),
            array('id' => '39', 'cid' => '101', 'semester' => 'Fall', 'year' => '2015', 'grade' => 'B', 'section_id' => '22060'),
            array('id' => '39', 'cid' => '43', 'semester' => 'Fall', 'year' => '2015', 'grade' => 'C+', 'section_id' => '27365'),

            array('id' => '40', 'cid' => '25', 'semester' => 'Fall', 'year' => '2015', 'grade' => '-', 'section_id' => '27519'),
            array('id' => '40', 'cid' => '14', 'semester' => 'Fall', 'year' => '2015', 'grade' => '-', 'section_id' => '27500'),
            array('id' => '40', 'cid' => '12', 'semester' => 'Fall', 'year' => '2015', 'grade' => '-', 'section_id' => '27450'),

            array('id' => '40', 'cid' => '10', 'semester' => 'Spring', 'year' => '2014', 'grade' => 'A+', 'section_id' => '27436'),
            array('id' => '40', 'cid' => '13', 'semester' => 'Spring', 'year' => '2014', 'grade' => 'A+', 'section_id' => '20194'),
            array('id' => '40', 'cid' => '15', 'semester' => 'Spring', 'year' => '2014', 'grade' => 'B+', 'section_id' => '27505'),
            array('id' => '40', 'cid' => '1', 'semester' => 'Spring', 'year' => '2014', 'grade' => 'B+', 'section_id' => '20465'),

            array('id' => '40', 'cid' => '11', 'semester' => 'Fall', 'year' => '2014', 'grade' => 'A-', 'section_id' => '25153'),
            array('id' => '40', 'cid' => '47', 'semester' => 'Fall', 'year' => '2014', 'grade' => 'A+', 'section_id' => '21473'),
        );

        return array_merge($arr, $this->moreSeed(10000));
    }

    public function moreSeed($n) {
        $arr = [];
        $grades = ['-', 'A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'D-', 'F'];
        $cids = DB::table('courses')->lists('cid');
        $semesters = ['Fall', 'Spring'];
        $years = ['2014', '2015'];

        $count = 1;
        for($i = 0; $i < $n; $i++) {
            if($i % 1000 === 0) {
                $num = $count * 1000;
                print "generating " . $num . " records\n";
                $count++;
            }

            $cid = $cids[rand(0,sizeof($cids)-1)];
            $section_id = DB::table('courses')->where('cid', 95)->lists('id')[0];

            array_push($arr, [
                'id' => rand(39, 443),
                'cid' => $cid,
                'semester' => $semesters[rand(0, 1)],
                'year' => $years[rand(0, 1)],
                'grade' => $grades[rand(0, sizeof($grades)-1)],
                'section_id' => $section_id
            ]);
        }

        return $arr;
    }
}
