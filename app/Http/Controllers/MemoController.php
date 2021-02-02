<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;

class MemoController extends Controller
{
    // 全てのMemoインスタンスを表示
    public function index()
    {
        $items = Memo::get();
        return view('memo.index', compact('items'));
    }

    // inputのIDでMemoインスタンスを検索
    public function searchId(Request $request)
    {
        $request = $request->input;
        $item = Memo::find($request);
        $param = [
            'input' => $request,
            'item' => $item,
        ];
        return view('myapp.findId', compact('param'));
    }


    // inputした名前でMemoインスタンスを検索
    public function searchName(Request $request)
    {   $request = $request->input;
        $item = Memo::find($request);
        $param = [
            'input' => $request,
            'item' => $item,
        ];
        return view('myapp.findName', compact('param'));
    }


}
