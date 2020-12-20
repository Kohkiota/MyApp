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

    public function list()
    {
        $items = Memo::all();
        return view('myapp.list', ['items' => $items]);
    }

    public function find(Request $request)
    {
        return view('memo.find', ['input' => '']);
    }

    public function search(Request $request)
    {
        $item = Memo::find($request->input);
        $param = ['input' => $request->input, 'item' -> $item];
        return view('memo.find', $param);
    }
}
