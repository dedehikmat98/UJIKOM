<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.dd');
    }

    public function send()
    {
        $validator = Validator::make(request()->all(), [
            'nama'  => 'required|max:30',
            'email' => 'required|max:100|email',
        ]);
        
        if ($validator->fails()) {
            redirect()
                ->back()
                ->withErrors($validator->errors());
        }
    }
}
