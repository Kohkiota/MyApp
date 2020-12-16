<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Http\Controllers\Controller;

class MemoController extends Controller
{
    public function index(Request $request)
    {
        // $items = DB::select('select * from memos')->all();
        // $items = request()->all();
        $items = Memo::all();
        // return view('memo.index', $items );
        return view('memo.index', ['items' => $items]);
        // return view('memo.index', compact('items'));
    }
}
