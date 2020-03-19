<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaveDependantsController extends Controller
{
    public function index(Request $request){
        return view('steps.HaveDependantsQuestion');
    }

    public function store(Request $request){
        return redirect('/public-exposure');
    }
}
