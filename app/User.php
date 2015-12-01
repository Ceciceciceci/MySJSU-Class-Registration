<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\DB;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function addClassToCart($course_id) {
        if($this->isStudent()) {
            $data = [
                'user_id' => $this->id,
                'course_id' => $course_id
            ];

            if(DB::table('cart')->where($data)->exists() == false)
                DB::table('cart')->insert($data);
        }
    }

    public function removeClassFromCart($course_id) {
        if($this->isStudent()) {
            $data = [
                'user_id' => $this->id,
                'course_id' => $course_id
            ];

            if(DB::table('cart')->where($data)->exists())
                DB::table('cart')->where($data)->delete();
        }
    }

    public function gpa() {
        $arr = ClassesTaken::where('id', $this->id)->get();
        $n = sizeof($arr);
        $semesters = [];
        $total_gpa = [];

        $i = 0;
        while($i < $n) {
            $prev = $arr[$i]->semester;
            $gpa = [];
            $j = $i;
            while($j < $n && $arr[$j]->semester === $prev) {
                array_push($gpa, $arr[$j]->grade);
                $j++;
            }
            $avg = $this->gpa_avg($gpa);
            if($avg) {
                array_push($semesters, $prev);
                array_push($total_gpa, $avg);
            }
            $i = $j;
        }

        return ['semesters' => $semesters, 'gpa' => $total_gpa];
    }

    public function gpa_avg($gpa) {
        $n = sizeof($gpa);

        if($n > 0 && $gpa[0] === "-")
            return false;

        $total = 0;
        foreach($gpa as $num) {
            switch($num) {
                case "A+":
                    $total += 4;
                    break;
                case "A":
                    $total += 4;
                    break;
                case "A-":
                    $total += 3.7;
                    break;
                case "B+":
                    $total += 3.3;
                    break;
                case "B":
                    $total += 3;
                    break;
                case "B-":
                    $total += 2.7;
                    break;
                case "C+":
                    $total += 2.3;
                    break;
                case "C":
                    $total += 2;
                    break;
                case "C-":
                    $total += 1.7;
                    break;
                case "D+":
                    $total += 1.3;
                    break;
                case "D":
                    $total += 1;
                    break;
                case "D-":
                    $total += 0.7;
                    break;
                default:
                    break;
            }
        }

        return $total / $n;
    }

    public function currentClasses() {
        return array_filter($this->classesTaken(),
            function($class) {
                return $class["grade"] === "-";
            });
    }

    public function pastClasses() {
        return array_filter($this->classesTaken(),
            function($class) {
                return $class["grade"] !== "-";
            });
    }

    public function classesTaken() {
        if($this->isStudent()) {
            $classes_taken = ClassesTaken::where('id', $this->id)->get();
            $result = $classes_taken->toArray();

            for($i = 0; $i < sizeof($classes_taken); $i++) {
                $info = $classes_taken[$i]->courseinfo->toArray();
                $result[$i]["subjectNumber"] = $info["subjectNumber"];
                $result[$i]["courseName"] = $info["courseName"];
            }

            return array_reverse($result);
        }
    }

    public function classesTaught() {
        if($this->isProfessor()) {
            return Course::where('iid', $this->id)->get();
        }
        return "not a professor";
    }



    /*
     * returns all courses in shopping cart
     */
    public function cart() {
        return $this->belongsToMany('App\Course', 'cart', 'user_id', 'course_id');
    }

    public function isStudent() {
        return $this->id >= 39;
    }

    public function isProfessor() {
        return $this->id <= 38;
    }
}
