<?php

namespace App\Http\Controllers\Admin;

use App\FormUser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FormUser  $formUser
     * @return \Illuminate\Http\Response
     */
    public function show(FormUser $formuser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FormUser  $formUser
     * @return \Illuminate\Http\Response
     */
    public function edit(FormUser $formuser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FormUser  $formUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormUser $formuser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FormUser  $formUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormUser $formuser)
    {
        //dd($formuser);
        $formuser->delete();
        // $formusers = FormUser::get();
        // return view('home', compact('formusers'));

        return redirect()->route('home');
    }
}
