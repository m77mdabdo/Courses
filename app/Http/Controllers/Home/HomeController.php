<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Student;
use App\Models\Trainer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
  public function home(){
    $allStudents = Student::count();
    $onlineStudents = Student::where('courseLocation','online')->count();
    $offlineStudents = Student::where('courseLocation','onsite')->count();
    $trainers = Trainer::count();
    $allCourses = Course::paginate(3);

    return view('user.home', compact('trainers','allStudents','onlineStudents','offlineStudents','allCourses'));
}





}
