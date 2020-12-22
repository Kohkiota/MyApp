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

    public function add(Request $request)
    {
        return view('myapp.add');
    }
    public function create(Request $request)
    {
        $this->validate($request, Memo::$rules);
        $memo = new Memo;
        $form = $request->all();
        unset($form['_token']);
        $memo->fill($form)->save();
        return redirect('/myapp/list');
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

    // public function post(Request $request)
    // {
    //     return view('myapp.index');
    // }
}
