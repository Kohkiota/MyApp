<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;

class MemoController extends Controller
{
    // 全てのMemoインスタンスを表示
    public function index()
    {
        $items = Memo::all();
        return view('memo.index', ['items' => $items]);
    }

    // inputのIDでMemoインスタンスを検索
    public function searchId(Request $request)
    {
        $item = Memo::find($request->input);
        $param = ['input' => $request->input, 'item' => $item];
        return view('myapp.findId', $param);
    }


    // inputした名前でMemoインスタンスを検索
    public function searchName(Request $request)
    {
        $item = Memo::find($request->input);
        $param = ['input' => $request->input, 'item' => $item];
        return view('myapp.findName', $param);
    }


}
