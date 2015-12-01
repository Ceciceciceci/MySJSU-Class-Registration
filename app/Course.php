<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CourseInfo;

//include(app_path().'/hashTables.php');

class Course extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'courses';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = ['course', 'seats'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = ['password', 'remember_token'];

    public function totalEnrolled() {
        return ($this->seats > 35) ? 35 : 35 - $this->seats;
    }

    public function totalWaitlisted() {
        return ($this->seats < 0) ? abs($this->seats) : 0;
    }

    public function meetingTime() {
        return $this->days . ' ' . $this->startTime . '-' . $this->endTime;
    }

    /**
     * Gets the prerequisites associated with the given course id
     *
     * @var array
     */

    public function requisites() {
        return $this->hasMany('App\Requisites', 'cid', 'cid');
    }

    /*
     * Returns a formatted string of Prerequisites and Corequisites of a given 'class'
     */

    public function requisitesToString(){
        $results = $this->requisites;
        $x = "Prerequisites: ";

        foreach ($results as $row) {
            if($row->ORprid){
                $prid = CourseInfo::find( $row->prid )->subjectNumber();
                $ORprid = CourseInfo::find( $row->ORprid )->subjectNumber();
                $x .= $prid." or ".$ORprid.", ";
            }elseif($row->prid){
                    $prid = CourseInfo::find( $row->prid )->subjectNumber();
                    $x.= $prid.", ";
                
            }
            if($row->crid){
                $crid = CourseInfo::find( $row->crid )->subjectNumber();
                $x .= "Corequisite: ".$crid.", ";
            }
        }
        $x = substr($x,0,-2);//strip last comma
        return $x;
        //return $string;
        //return $this->instructor;
    }

    /*
     * First Parameter is Student ID, Second Parameter is Course ID
     * @returns boolean
     */
    public function tryEnroll( $sid , $cid ){
        //$x = ClassesTaken::find( $sid )->where('cid','=',$cid)->first();

        $list = Course::where('cid','=',$cid)->first()->requisites;

        //return $list;
        if(!($list))
            return true;

        foreach ($list as $row) {
            if($row->ORprid){
                //$prid = CourseInfo::find( $row->prid )->subjectNumber();
                //$ORprid = CourseInfo::find( $row->ORprid )->subjectNumber();
                //$x .= $prid." or ".$ORprid.", ";

                $hit = ClassesTaken::find( $sid )->where('cid','=',$row->ORprid)->first();
                if(!($hit))
                    return false;
            }elseif($row->prid){
                    //$prid = CourseInfo::find( $row->prid )->subjectNumber();
                    //$x.= $prid.", ";
                
                $hit = ClassesTaken::find( $sid )->where('cid','=',$row->prid)->first();
                if(!($hit))
                    return false;
            }
            if($row->crid){
                //$crid = CourseInfo::find( $row->crid )->subjectNumber();
                //$x .= "Corequisite: ".$crid.", ";

                $hit = ClassesTaken::find( $sid )->where('cid','=',$row->crid)->first();
                if(!($hit))
                    return false;
            }
        }
        return true;
        //$x = substr($x,0,-2);//strip last comma
        //return $x;
        
        //return $string;
        //return $this->instructor;
    }

    public function test1(){
        return "apples";
    }
    /*
    public function corequisites() {
        return $this->belongsToMany('App\Course', 'requisites', 'cid', 'crid');
    }*/
}
