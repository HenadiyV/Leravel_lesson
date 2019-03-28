<?php

namespace App\Http\Controllers;

use App\doctor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $doctors=doctor::all();
        return view('workings.index', compact('doctors'));
    }

}
