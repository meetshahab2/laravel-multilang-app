<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        dd(app()->getLocale());
        return view('welcome');
    }
}
