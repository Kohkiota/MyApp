<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;

class MemoController extends Controller
{
    public function index(Request $request)
    {
        $items = Memo:all();
        return view('memo.index', ['items' => $items]);
    }
}
