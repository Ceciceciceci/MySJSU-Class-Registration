<?php

use Illuminate\Database\Seeder;

class CourseInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courseinfo')->insert(array(
            array('subjectNumber' => 'CS 100W', 'courseName' => 'Technical Writing'),
            array('subjectNumber' => 'CS 108', 'courseName' => 'Introduction to Game Studies'),
            array('subjectNumber' => 'CS 116A', 'courseName' => 'Introduction to Computer Graphics'),
            array('subjectNumber' => 'CS 116B', 'courseName' => 'Computer Graphics Algorithms'),
            array('subjectNumber' => 'CS 120A', 'courseName' => 'Electronics, Data Acquisition & Analysis'),
            array('subjectNumber' => 'CS 122', 'courseName' => 'Advanced Programming with Perl'),
            array('subjectNumber' => 'CS 123A', 'courseName' => 'Bioinformatics I'),
            array('subjectNumber' => 'CS 134', 'courseName' => 'Computer Game Design and Programming'),
            array('subjectNumber' => 'CS 143C', 'courseName' => 'Numerical Analysis and Scientific Computing'),
            array('subjectNumber' => 'CS 146', 'courseName' => 'Data Structures and Algorithms'),
            array('subjectNumber' => 'CS 147', 'courseName' => 'Computer Architecture'),
            array('subjectNumber' => 'CS 149', 'courseName' => 'Operating Systems'),
            array('subjectNumber' => 'CS 151', 'courseName' => 'Object-Oriented Design'),
            array('subjectNumber' => 'CS 152', 'courseName' => 'Programming Paradigms'),
            array('subjectNumber' => 'CS 154', 'courseName' => 'Formal Languages and Computability'),
            array('subjectNumber' => 'CS 155', 'courseName' => 'Introduction to the Design and Analysis of Algorithms'),
            array('subjectNumber' => 'CS 156', 'courseName' => 'Introduction to Artificial Intelligence'),
            array('subjectNumber' => 'CS 157A', 'courseName' => 'Introduction to Database Management Systems'),
            array('subjectNumber' => 'CS 157B', 'courseName' => 'Database Management Systems II'),
            array('subjectNumber' => 'CS 158A', 'courseName' => 'Computer Networks'),
            array('subjectNumber' => 'CS 159', 'courseName' => 'Introduction to Parallel Processing'),
            array('subjectNumber' => 'CS 160', 'courseName' => 'Software Engineering'),
            array('subjectNumber' => 'CS 161', 'courseName' => 'Software Project'),
            array('subjectNumber' => 'CS 166', 'courseName' => 'Information Security'),
            array('subjectNumber' => 'CS 174', 'courseName' => 'Server-side Web Programming'),
            array('subjectNumber' => 'CS 180H', 'courseName' => 'Individual Studies for Honors'),
            array('subjectNumber' => 'CS 185C', 'courseName' => 'Advanced Practical Computing Topics'),
            array('subjectNumber' => 'CS 200W', 'courseName' => 'Graduate Technical Writing'),
            array('subjectNumber' => 'CS 218', 'courseName' => 'Topics in Cloud Computing'),
            array('subjectNumber' => 'CS 223', 'courseName' => 'Bioinformatics'),
            array('subjectNumber' => 'CS 251B', 'courseName' => 'Object-Oriented Design'),
            array('subjectNumber' => 'CS 252', 'courseName' => 'Advanced Programming Language Principles'),
            array('subjectNumber' => 'CS 255', 'courseName' => 'Design and Analysis of Algorithms'),
            array('subjectNumber' => 'CS 256', 'courseName' => 'Topics in Artificial Intelligence'),
            array('subjectNumber' => 'CS 259', 'courseName' => 'Advanced Parallel Processing'),
            array('subjectNumber' => 'CS 265', 'courseName' => 'Cryptography and Computer Security'),
            array('subjectNumber' => 'CS 267', 'courseName' => 'Topics in Database Systems'),
            array('subjectNumber' => 'CS 268', 'courseName' => 'Topics in Wireless Mobile Networking'),
            array('subjectNumber' => 'CS 274', 'courseName' => 'Topics in XML and Web Intelligence'),
            array('subjectNumber' => 'CS 286', 'courseName' => 'Advanced Topics in Computer Science'),
            array('subjectNumber' => 'CS 40', 'courseName' => 'Introduction to Computers'),
            array('subjectNumber' => 'CS 42', 'courseName' => 'Introduction to Programming Concepts'),
            array('subjectNumber' => 'CS 46A', 'courseName' => 'Introduction to Java Programming'),
            array('subjectNumber' => 'CS 46B', 'courseName' => 'Introduction to Data Structures'),
            array('subjectNumber' => 'CS 47', 'courseName' => 'Introduction to Computer Systems'),
            array('subjectNumber' => 'CS 49C', 'courseName' => 'Programming in C'),
            array('subjectNumber' => 'CS 49J', 'courseName' => 'Programming in Java'),
            array('subjectNumber' => 'MATH 10', 'courseName' => 'Mathematics for General Education'),
            array('subjectNumber' => 'MATH 102', 'courseName' => 'Secondary School Mathematics'),
            array('subjectNumber' => 'MATH 104', 'courseName' => 'History of Mathematics'),
            array('subjectNumber' => 'MATH 105', 'courseName' => 'Concepts in Mathematics, Probability and Statistics'),
            array('subjectNumber' => 'MATH 106', 'courseName' => 'Intuitive Geometry'),
            array('subjectNumber' => 'MATH 108', 'courseName' => 'Introduction to Abstract Mathematics and Proofs'),
            array('subjectNumber' => 'MATH 112', 'courseName' => 'Vector Calculus'),
            array('subjectNumber' => 'MATH 115', 'courseName' => 'Modern Geometry and Transformations'),
            array('subjectNumber' => 'MATH 12', 'courseName' => 'Number Systems'),
            array('subjectNumber' => 'MATH 123', 'courseName' => 'Differential Equations and Linear Algebra'),
            array('subjectNumber' => 'MATH 123W', 'courseName' => 'Differential Equations and Linear Algebra Workshop'),
            array('subjectNumber' => 'MATH 126', 'courseName' => 'Theory of Numbers'),
            array('subjectNumber' => 'MATH 128A', 'courseName' => 'Abstract Algebra I'),
            array('subjectNumber' => 'MATH 128B', 'courseName' => 'Abstract Algebra II'),
            array('subjectNumber' => 'MATH 129A', 'courseName' => 'Linear Algebra I'),
            array('subjectNumber' => 'MATH 131A', 'courseName' => 'Introduction to Analysis'),
            array('subjectNumber' => 'MATH 131B', 'courseName' => 'Introduction to Real Variables'),
            array('subjectNumber' => 'MATH 133', 'courseName' => 'Ordinary Differential Equations'),
            array('subjectNumber' => 'MATH 133A', 'courseName' => 'Ordinary Differential Equations'),
            array('subjectNumber' => 'MATH 133B', 'courseName' => 'Partial Differential Equations'),
            array('subjectNumber' => 'MATH 133W', 'courseName' => 'Ordinary Differential Equations Workshop'),
            array('subjectNumber' => 'MATH 134', 'courseName' => 'Ord. Diff. Eqns and Dynamical Systems'),
            array('subjectNumber' => 'MATH 138', 'courseName' => 'Complex Variables'),
            array('subjectNumber' => 'MATH 143C', 'courseName' => 'Numerical Analysis and Scientific Computing'),
            array('subjectNumber' => 'MATH 15B', 'courseName' => 'Statway B'),
            array('subjectNumber' => 'MATH 15C', 'courseName' => 'Statway C'),
            array('subjectNumber' => 'MATH 15D', 'courseName' => 'Statway Algebra Review Activity'),
            array('subjectNumber' => 'MATH 161A', 'courseName' => 'Applied Probability and Statistics I'),
            array('subjectNumber' => 'MATH 161B', 'courseName' => 'Applied Probability and Statistics II'),
            array('subjectNumber' => 'MATH 163', 'courseName' => 'Probability Theory'),
            array('subjectNumber' => 'MATH 164', 'courseName' => 'Mathematical Statistics'),
            array('subjectNumber' => 'MATH 178', 'courseName' => 'Mathematical Modeling'),
            array('subjectNumber' => 'MATH 19', 'courseName' => 'Precalculus'),
            array('subjectNumber' => 'MATH 19W', 'courseName' => 'Precalculus Workshop'),
            array('subjectNumber' => 'MATH 201A', 'courseName' => 'Mathematics for Secondary Teachers'),
            array('subjectNumber' => 'MATH 203', 'courseName' => 'Applied Mathematics, Computation, and Statistics Projects'),
            array('subjectNumber' => 'MATH 221A', 'courseName' => 'Higher Algebra I'),
            array('subjectNumber' => 'MATH 221B', 'courseName' => 'Higher Algebra II'),
            array('subjectNumber' => 'MATH 231A', 'courseName' => 'Real Analysis'),
            array('subjectNumber' => 'MATH 243M', 'courseName' => 'Numerical Linear Algebra'),
            array('subjectNumber' => 'MATH 261A', 'courseName' => 'Regression Theory and Methods'),
            array('subjectNumber' => 'MATH 261B', 'courseName' => 'Design and Analysis of Experiments'),
            array('subjectNumber' => 'MATH 263', 'courseName' => 'Stochastic Processes'),
            array('subjectNumber' => 'MATH 267', 'courseName' => 'Computational Statistics'),
            array('subjectNumber' => 'MATH 269', 'courseName' => 'Statistical Consulting'),
            array('subjectNumber' => 'MATH 279A', 'courseName' => 'Graph Theory'),
            array('subjectNumber' => 'MATH 279B', 'courseName' => 'Advanced Graph Theory'),
            array('subjectNumber' => 'MATH 285', 'courseName' => 'Advanced Topics in Mathematics'),
            array('subjectNumber' => 'MATH 297', 'courseName' => 'Professional Development in College Teaching'),
            array('subjectNumber' => 'MATH 298I', 'courseName' => 'Statistics Internship'),
            array('subjectNumber' => 'MATH 30', 'courseName' => 'Calculus I'),
            array('subjectNumber' => 'MATH 30P', 'courseName' => 'Calculus I with Precalculus'),
            array('subjectNumber' => 'MATH 30PL', 'courseName' => 'Calculus I with Precalculus'),
            array('subjectNumber' => 'MATH 30W', 'courseName' => 'Calculus I Workshop'),
            array('subjectNumber' => 'MATH 31', 'courseName' => 'Calculus II'),
            array('subjectNumber' => 'MATH 31W', 'courseName' => 'Calculus II Workshop'),
            array('subjectNumber' => 'MATH 32', 'courseName' => 'Calculus III'),
            array('subjectNumber' => 'MATH 32W', 'courseName' => 'Calcculus III Workshop'),
            array('subjectNumber' => 'MATH 3A', 'courseName' => 'Intensive Learning Mathematics I'),
            array('subjectNumber' => 'MATH 3B', 'courseName' => 'Intensive Learning Mathematics II'),
            array('subjectNumber' => 'MATH 42', 'courseName' => 'Discrete Math'),
            array('subjectNumber' => 'MATH 42W', 'courseName' => 'Discrete Math Workshop'),
            array('subjectNumber' => 'MATH 6A', 'courseName' => 'Entry Level Mathematics I'),
            array('subjectNumber' => 'MATH 6B', 'courseName' => 'Entry Level Mathematics II'),
            array('subjectNumber' => 'MATH 70', 'courseName' => 'Finite Mathematics'),
            array('subjectNumber' => 'MATH 71', 'courseName' => 'Calculus for Business and Aviation'),
            array('subjectNumber' => 'MATH 71W', 'courseName' => 'Calculus Workshop for Business/Aviation'),
            array('subjectNumber' => 'MATH 8', 'courseName' => 'College Algebra'),
            array('subjectNumber' => 'MATH 8W', 'courseName' => 'College Algebra Workshop'),
        ));
    }
}