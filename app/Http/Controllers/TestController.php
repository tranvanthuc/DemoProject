<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $name = "Thuc";
        $age = 25;

        // cach 1
        return view('test', compact('name', 'age'));

        // cach 2 
        // return view('test', ['name' => $name, 'age' => $age]);

        // cach 3
        // return view('test')->with(['name' => $name, 'age' => $age]);   
    }

    public function viewShare()
    {
        return view('view-share');
    }
}
