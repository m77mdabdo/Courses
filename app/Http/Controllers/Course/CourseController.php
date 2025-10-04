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

    public function show($id)
{
    $course = Course::with(['trainer', 'category', 'students','lessons'])->findOrFail($id);

    return view('user.course.course-details', compact('course'));
}


}
