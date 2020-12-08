<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MyappController extends Controller
{
    public function index(Request $request, Response $response)
    {
        return view('myapp.index');
    }
    
    public function add()
    {
        return view('myapp.add');
    }
}
