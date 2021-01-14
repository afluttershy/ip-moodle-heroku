<?php

namespace App\Http\Controllers;
use App\Http\Requests\FormConfirm;
use App\FormUser;
use App\Course;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $courses = Course::all();
        return view('welcome', compact('courses'));
        //return view('welcome');
    }


    public function formconfirm(FormConfirm $request) {
        $formuser = new FormUser;

        $formuser->name = $request->name;
        $formuser->email = $request->email;
        $formuser->phone = $request->phone;  
        $formuser->course = $request->course;
        $formuser->password = $request->password;

        try {
            $formuser->save();
            session()->flash('success', 'Ваша заявка принята! Вам скоро перезвонят.');
        } 
        catch(\Illuminate\Database\QueryException $e) {
            session()->flash('denied', 'Пользователь с данным e-mail уже зарегистрирован.');
        }

        return redirect()->route('welcome');
    }
}
