<link rel="stylesheet" href="{{ asset('css/list.styles.css') }}">
@extends('layouts.myapp')

@section('title', 'セッションメッセージ入力フォーム')

@section('content')
    <form action="/myapp/session" method="post">
        @csrf
        <tr>
            <th>name: </th><th>内容 </th><th>入力</th>
        </tr><br>
        <tr>
            <td>after_add: </td><td>{{ $after_add }} </td><td><input type="text" name="after_add"></td>
        </tr><br>
        <tr>
            <td>after_edit: </td><td>{{ $after_edit }} </td><td><input type="text" name="after_edit"></td>
        </tr><br>
        <tr>
            <td>after_del: </td><td>{{ $after_del }} </td><td><input type="text" name="after_del"></td>
        </tr><br>
        <tr>
            <td>after_session: </td><td>{{ $after_session }} </td><td><input type="text" name="after_session"></td>
        </tr><br>
        <input type="submit" value="送信">
    </form>
@endsection

@section('footer', '2020 myouga.inc')
