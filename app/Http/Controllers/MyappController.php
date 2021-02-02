<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use App\Models\Age;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreateMemoRequest;

class MyappController extends Controller
{
    public function index()
    {
        return view('myapp.index');
    }

    public function list()
    {
        $items = Memo::simplePaginate(5);
        return view('myapp.list', compact('items'));
    }

    public function complete()
    {
        return view('myapp.complete');
    }

    public function add()
    {
        //これ！Array to string conversion errorがでる。
        $items = Age::all();
        return view('myapp.add', compact('items'));
    }

    public function create(CreateMemoRequest $request)
    {
        DB::transaction(function() use($request) {
            $memo = new Memo;
            $form = $request->all();
            unset($form['_token']);
            $memo->fill($form)->save();
        });

        return redirect('/myapp/complete')->with('flash_message', '新規メモ追加が完了しました。');
    }

    public function edit(Request $request)
    {
        $requestId = $request->id;
        $form = Memo::find($requestId);
        return view('myapp.edit', compact('form'));
    }

    public function update(Request $request)
    {
        DB::transaction(function() use($request) {
            $this->validate($request, Memo::$rules);
            $requestId = $request->id;
            $memo = Memo::find($requestId);
            $form = $request->all();
            unset($form['_token']);
            $memo->fill($form)->save();
        });
        return redirect('/myapp/complete')->with('flash_message', '編集が完了しました。');
    }

    public function delete(Request $request)
    {
        $requestId = $request->id;
        $form = Memo::find($requestId);
        return view('myapp.del', compact('form'));
    }

    public function remove(Request $request)
    {
        DB::transaction(function() use($request) {
            $requestId = $request->id;
            Memo::find($requestId)->delete();
            return redirect('/myapp/complete')->with('flash_message', '削除が完了しました。');
        });
    }

    //とりあえずフラッシュ（上記）で対応する。
    public function ses_get(Request $request)
    {
        $after_add = $request->session()->get('after_add');
        $after_edit = $request->session()->get('after_edit');
        $after_del = $request->session()->get('after_del');
        $after_session = $request->after_session()->get('after_session');
        $items = [
            'after_add' => $after_add,
            'after_edit' => $after_edit,
            'after_del' => $after_del,
            'after_session' => $after_session,
        ];
        return view('myapp.session', compact('items'));
    }
    public function ses_put(Request $request)
    {
        $add = $request->after_add;
        $edit = $request->after_edit;
        $del = $request->after_del;
        $ses = $request->after_session;
        $request->session()->put('after_add', $add);
        $request->session()->put('after_edit', $edit);
        $request->session()->put('after_del', $del);
        $request->session()->put('after_session', $ses);

        return redirect('myapp/session');
    }
}
