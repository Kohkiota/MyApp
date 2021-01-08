<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
// use Illuminate\Database\Eloquest\Model;
use Illuminate\Support\Facades\DB;

class MyappController extends Controller
{
    public function index()
    {
        return view('myapp.index');
    }


    public function list(Request $request)
    {
        // $items = DB::table('memos')->paginate(5);
        $items =  Memo::simplePaginate(5);
        return view('myapp.list', ['items' => $items]);
    }

    public function complete()
    {
        return view('myapp.complete');
    }


    public function add()
    {
        return view('myapp.add');
    }
    public function create(Request $request)
    {
        DB::transaction(function() use($request) {
            $this->validate($request, Memo::$rules);
            $memo = new Memo;
            $form = $request->all();
            unset($form['_token']);
            $memo->fill($form)->save();
        });

        return redirect('/myapp/complete')->with('flash_message', '新規メモ追加が完了しました。');
    }

    public function edit(Request $request)
    {
        $memo = Memo::find($request->id);
        return view('myapp.edit', ['form' => $memo]);
    }

    public function update(Request $request)
    {
        DB::transaction(function() use($request) {
            $this->validate($request, Memo::$rules);
            $memo = Memo::find($request->id);
            $form = $request->all();
            unset($form['_token']);
            $memo->fill($form)->save();
        });
        return redirect('/myapp/complete')->with('flash_message', '編集が完了しました。');
    }

    public function delete(Request $request)
    {
        $memo = Memo::find($request->id);
        return view('myapp.del', ['form' => $memo]);
    }

    public function remove(Request $request)
    {
        Memo::find($request->id)->delete();
        return redirect('/myapp/complete')->with('flash_message', '削除が完了しました。');
    }

    //とりあえずフラッシュ（上記）で対応する。
    public function ses_get(Request $request)
    {
        $add = $request->session()->get('after_add');
        $edit = $request->session()->get('after_edit');
        $del = $request->session()->get('after_del');
        $session = $request->session()->get('after_session');
        return view('myapp.session', [
            'after_add' => $add,
            'after_edit' => $edit,
            'after_del' => $del,
            'after_session' => $session,
        ]);
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
