<?php

namespace App\Http\Controllers\AbouteUs;

use App\Models\Course;
use App\Models\Student;
use App\Models\Trainer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AbouteUsController extends Controller
{
    //
    public function abouteUs()
    {
        $allStudents = Student::count();
        $onlineStudents = Student::where('courseLocation', 'online')->count();
        $offlineStudents = Student::where('courseLocation', 'onsite')->count();
        $trainers = Trainer::count();


        return view('user.aboutus.abouteUs', compact('trainers','allStudents','onlineStudents','offlineStudents'));
    }
}
