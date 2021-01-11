<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;

class MemoController extends Controller
{
    public function index()
    {
        $items = Memo::all();
        return view('memo.index', ['items' => $items]);
    }


    public function findId()
    {
        return view('myapp.findId', ['input' => '']);
    }

    public function searchId(Request $request)
    {
        $item = Memo::find($request->input);
        $param = ['input' => $request->input, 'item' => $item];
        return view('myapp.findId', $param);
    }

    public function findName()
    {
        return view('myapp.findName', ['input' => '']);
    }

    public function searchName(Request $request)
    {
        $item = Memo::find($request->input);
        $param = ['input' => $request->input, 'item' => $item];
        return view('myapp.findName', $param);
    }


}
