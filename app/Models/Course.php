<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    //
       use HasFactory;
    protected $fillable = ['title', 'desc', 'category_id', 'trainer_id', 'price', 'duration'];
    public function students()
{
    return $this->belongsToMany(Student::class, 'course_students'); // ✅ صح
}
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function trainer()
    {
        return $this->belongsTo(Trainer::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }



}
