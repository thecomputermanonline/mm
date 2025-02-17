<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class UserEducationHistory extends Model
{
    protected $fillable = ['school', 'qualification', 'course', 'starting_date' , 'ending _date'];

    //
    public function user() {
        return $this->belongsTo(User::class);
    }
}
