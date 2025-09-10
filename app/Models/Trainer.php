<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trainer extends Model
{
    //
       use HasFactory;
    protected $fillable = ['name', 'email', 'phone', 'bio', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function courses(){
        return $this->hasMany(Course::class,'trainer_id','id');
    }

    public function students(){
        return $this->hasManyThrough(Student::class,Course::class,'trainer_id','course_id','id','id');
    }

    
}
