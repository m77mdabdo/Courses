<?php

namespace App\Http\Controllers\Course;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    //
    public function index(){
        $allCourses = Course::paginate(6);
        return view('user.course.course',compact('allCourses'));

    }

}
