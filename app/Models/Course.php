<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    //
       use HasFactory;
    protected $fillable = ['title', 'description', 'category_id', 'trainer_id', 'price', 'duration'];
    public function students()
{
    return $this->belongsToMany(Student::class, 'course_student'); // ✅ صح
}

}
