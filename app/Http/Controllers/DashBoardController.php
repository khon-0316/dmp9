<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    //
    public function __construct()
    {

    }

    public function index()
    {
        return view('dashboard');
    }
}
