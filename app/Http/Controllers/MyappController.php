<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MyappController extends Controller
{
    public function index()
    {
        return view('myapp.index');
    }

    public function add()
    {
        return view('myapp.add');
    }
    public function post(Request $request)
    {
        return view('myapp.index');
    }

    public function list()
    {
        $items = Memo::all();
        return view('myapp.list', ['items' => $items]);
    }

    public function complete()
    {
        return view('myapp.complete');
    }

}
