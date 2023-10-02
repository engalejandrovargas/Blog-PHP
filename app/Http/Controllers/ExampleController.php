<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homepage(){

        $name = 'John';
        $animals = ['dog', 'cow', 'cat', 'pig'];

        // return view('homepage', ['name' => $name, 'animals' => $animals]);
        return view('homepage', compact('name', 'animals'));
    }
    public function about(){
        return '<h1>About</h1><a href="/">Home</a>';
    }

    public function singlepost(){
        return view('single-post');
    }
}