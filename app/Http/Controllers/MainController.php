<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        //$name = config('app.undefined', 'welcome');

        //dump($name);
        //dd($name);
        return view('welcome');
    }
}
