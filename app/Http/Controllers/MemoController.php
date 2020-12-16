<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemoController extends Controller
{
    public function index(Request $request)
    {
        $items = Memo::all();
        return view('memo.index', ['items' => $items]);
    }
}
