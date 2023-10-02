<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Students;
// use App\Models\Subjects;
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
        $data['studnt_cnt'] = Students::count();
        // $data['subject_cnt'] = Subjects::count();
        $data['category_cnt'] = Categories::count();


        return view('home',compact('data'));
    }
}
