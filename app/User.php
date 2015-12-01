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
