<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class MemoController extends Controller
{
    public function index(Request $request)
    {
        $items = Memo::all();
        return view('memo.index', ['items' => $items]);
    }

    // public function list()
    // {
    //     $items = Memo::all();
    //     return view('myapp.list', ['items' => $items]);
    // }

    public function findId(Request $request)
    {
        return view('myapp.findId', ['input' => '']);
    }

    public function searchId(Request $request)
    {
        $item = Memo::find($request->input);
        $param = ['input' => $request->input, 'item' => $item];
        return view('myapp.findId', $param);
    }

    public function findName(Request $request)
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
