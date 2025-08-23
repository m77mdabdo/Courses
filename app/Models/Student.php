<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    //
       use HasFactory;
    protected $fillable = ['name', 'email', 'phone', 'address', 'user_id','age'];
    public function courses()
{
    return $this->belongsToMany(Course::class, 'course_student'); // ✅ صح
}

}
