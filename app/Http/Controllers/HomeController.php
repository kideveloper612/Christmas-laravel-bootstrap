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
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('adminHome');
    }

    /**
     * Show the Form1.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Form1()
    {
        return view('Form1');
    }

    /**
     * Show the Form1.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Form2()
    {
        return view('Form2');
    }

    /**
     * Show the Form1.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Form3()
    {
        return view('Form3');
    }

    /**
     * Show the Form1.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Form4()
    {
        return view('Form4');
    }

}
