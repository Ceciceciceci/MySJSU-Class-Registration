<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requisites extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'requisites';

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

    /**
     * Gets the prerequisites associated with the given course id
     *
     * @var array
     */

    /*
    public function corequisites() {
        return $this->belongsToMany('App\Course', 'requisites', 'cid', 'crid');
    }*/
}
