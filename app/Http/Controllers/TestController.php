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

    public function home()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Thuc',
                'number' => 4
            ], [
                'id' => 2,
                'name' => 'Nguyen',
                'number' => 5
            ], [
                'id' => 3,
                'name' => 'Toan',
                'number' => 3
            ]
        ];
        $count = 1;
        return view('home', compact('users', 'count'));
    }

    public function about()
    {
        return view('about');
    }
}
