<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MyappController extends Controller
{
    public function index(Request $request, Response $response)
    {
        $data = [
            'msg' => 'これはBladeを利用したサンプルです。',
        ];
        return view('myapp.index', $data);
    }
}
