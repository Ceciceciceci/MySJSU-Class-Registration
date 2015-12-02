<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            array('name' => 'Ahmad Yazdankhah', 'password' => 'password'),
            array('name' => 'Ahmed Ezzat', 'password' => 'password'),
            array('name' => 'Aikaterini Potika', 'password' => 'password'),
            array('name' => 'Anna Shaverdian', 'password' => 'password'),
            array('name' => 'Cay Horstmann', 'password' => 'password'),
            array('name' => 'Christopher Pollett', 'password' => 'password'),
            array('name' => 'Debra Caires', 'password' => 'password'),
            array('name' => 'Fain Butt', 'password' => 'password'),
            array('name' => 'Faramarz Mortezaie', 'password' => 'password'),
            array('name' => 'Feiling Jia', 'password' => 'password'),
            array('name' => 'Francisco De La Calle', 'password' => 'password'),
            array('name' => 'Huan Tseng', 'password' => 'password'),
            array('name' => 'James Casaletto', 'password' => 'password'),
            array('name' => 'James Morgan', 'password' => 'password'),
            array('name' => 'Jon Pearce', 'password' => 'password'),
            array('name' => 'Juan Gomez', 'password' => 'password'),
            array('name' => 'Kathleen O\'Brien', 'password' => 'password'),
            array('name' => 'Kaushik Patra', 'password' => 'password'),
            array('name' => 'Kong Li', 'password' => 'password'),
            array('name' => 'Leonard Wesley', 'password' => 'password'),
            array('name' => 'Maria Dalarcao', 'password' => 'password'),
            array('name' => 'Mark Stamp', 'password' => 'password'),
            array('name' => 'Melody Moh', 'password' => 'password'),
            array('name' => 'Michael Finder', 'password' => 'password'),
            array('name' => 'Mokhtar Zoubeidi', 'password' => 'password'),
            array('name' => 'Prakash Atawale', 'password' => 'password'),
            array('name' => 'Robert Bruce', 'password' => 'password'),
            array('name' => 'Robert Chun', 'password' => 'password'),
            array('name' => 'Ron Mak', 'password' => 'password'),
            array('name' => 'Ronald Gutman', 'password' => 'password'),
            array('name' => 'Saroj Sabherwal', 'password' => 'password'),
            array('name' => 'Sharmin Khan', 'password' => 'password'),
            array('name' => 'Staff', 'password' => 'password'),
            array('name' => 'Suneuy Kim', 'password' => 'password'),
            array('name' => 'Teng-Sheng Moh', 'password' => 'password'),
            array('name' => 'Thomas Austin', 'password' => 'password'),
            array('name' => 'Tsau-Young Lin', 'password' => 'password'),
            array('name' => 'Vidya Rangasayee', 'password' => 'password'),
            [
                'name' => 'Cecilia Tran',
                'password' => 'password'
            ],
            [
                'name' => 'Edwin Limantara',
                'password' => 'password'
            ],
            [
                'name' => 'Emannuel Mendoza',
                'password' => 'password'
            ],
            [
                'name' => 'Maninderpal Singh',
                'password' => 'password'
            ],
            [
                'name' => 'Udit Sharma',
                'password' => 'password'
            ]
        ));
    }
}