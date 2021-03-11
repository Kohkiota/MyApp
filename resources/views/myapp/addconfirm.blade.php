<link rel="stylesheet" href="{{ asset('css/add.styles.css') }}">
@extends('layouts.myapp')

@section('title', '新規メモ')

@section('content')
    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

<form class="form" action="/myapp/add" method="post">
<table border=1>
    @csrf
    <tr>
        <td>名前：</td>
        <td>{{ items->name }}</td>
    </tr>
    <tr>
        <td>年齢：</td>
        <td>
            <select name="age">
                @foreach($items as $item)
                    <option value="{{ $item->ageId }}"
                        @if($item->ageId == 2)
                            selected="selected"
                        @endif
                    >{{ $item->ageRange }}</option>
                @endforeach
            </select>
        </td>
    </tr>
    <tr>
        <td>メール：</td>
        <td><input type="text" name="mail" value="{{ old('mail', 'hoge@hogemail.com') }}"></td>
    </tr>
    <tr>
        <td>メモタイプ：</td>
        <td>
            <input type="radio" name="memotype" value="0">Text
            <input type="radio" name="memotype" value="1" checked="checked">ToDo
            <input type="radio" name="memotype" value="2">CheckList
        </td>
    </tr>
    <tr>
        <td>タイトル：</td>
        <td><input type="text" name="title" value="{{ old('title', 'デフォルトタイトル') }}"></td>
    </tr>
    <tr>
        <td>内容：</td>
        <td><textarea name="contents" cols="30" rows="10">{{ old('contents', '内容デフォルト') }}</textarea></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="送信"></td>
    </tr>
</table>
</form>
@endsection

@section('footer', '2020 myouga.inc')
