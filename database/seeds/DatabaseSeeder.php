<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        $this->call(InstructorsTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
<<<<<<< HEAD
        $this->call(UsersTableSeeder::class);
||||||| merged common ancestors
=======
        $this->call(RequisitesTableSeeder::class);
>>>>>>> f38ac4de8192afc07fafe27bed09006b8154deea

        Model::reguard();
    }
}
