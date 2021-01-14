<?php

namespace App\Http\Controllers;
use App\Http\Requests\CourseConfirm;
use App\FormUser;
use App\Course;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $formusers = FormUser::all();
        return view('home', compact('formusers'));
    }


    public function addcourse(CourseConfirm $request) {
        $course = new Course;

        $course->course_id = $request->course_id;
        $course->course_full_name = $request->course_full_name;
        $course->course_short_name = $request->course_short_name;  

        // dd($course);
        $course->save();
        session()->flash('success', 'Курс добавлен!');
       
        return redirect()->route('home');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('welcome');
    }

}
