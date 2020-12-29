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


    public function list()
    {
        $items = Memo::all();
        return view('myapp.list', ['items' => $items]);
    }

    public function complete()
    {
        return view('myapp.complete');
    }


    public function add()
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
        return redirect('/myapp/complete');
    }

    public function edit(Request $request)
    {
        $memo = Memo::find($request->id);
        return view('myapp.edit', ['form' => $memo]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Memo::$rules);
        $memo = Memo::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $memo->fill($form)->save();
        return redirect('/myapp/complete');
    }
}
