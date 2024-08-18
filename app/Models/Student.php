<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable=['name','grade','image','address','email','gender','track_id'];
    function track()
    {
        return $this->belongsTo(Track::class);
        // return $this->belongsTo(Track::class,'track_id','myId');
    }

}
