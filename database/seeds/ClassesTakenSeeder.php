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
        return $this->seed(5000);
    }

    public function seed($n) {
        $arr = [];
        $grades = ['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'D-', 'F'];
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

            $id = rand(39, 443);
            $cid = $cids[rand(0,sizeof($cids)-1)];
            $semester = $semesters[rand(0, 1)];
            $year = $years[rand(0, 1)];
            $section_id = \App\Course::where('cid', 95)->lists('id')[0];
            $grade = $grades[rand(0, sizeof($grades)-1)];

            array_push($arr, [
                'id' => $id,
                'cid' => $cid,
                'semester' => $semester,
                'year' => $year,
                'grade' => ($semester==="Spring" && $year==="2015") ? "-" : $grade,
                'section_id' => $section_id
            ]);

            DB::table('courses')->where('id', $section_id)->decrement('seats');
        }

        return $arr;
    }
}
