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
     * Show the application index.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect()->route('home');
    }

    /**
     * Show the application home.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('welcome');
    }

    /**
     * Show the application about.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Show the application schedule.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function schedule()
    {
        return view('schedule');
    }

    /**
     * Show the application appointment.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function appointment()
    {
        return view('appointment');
    }

    /**
     * Show the application record.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function record()
    {
        return view('record');
    }
}
