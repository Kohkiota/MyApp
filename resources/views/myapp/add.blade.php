<link rel="stylesheet" href="{{ asset('css/add.styles.css') }}">
@extends('layouts.myapp')

@section('title', '新規メモ')

@section('content')
    @if (count($errors) > 0)
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
        <td><input type="text" name="name" value="{{ old('name') }}"></td>
    </tr>
    <tr>
        <td>年齢：</td>
        <td>
            <select name="age">
                <option value="0">0~10歳</option>
                <option value="1">11~20歳</option>
                <option value="2">21~30歳</option>
                <option value="3">31~40歳</option>
                <option value="4">41~50歳</option>
                <option value="5">51~60歳</option>
                <option value="6">61~70歳</option>
                <option value="7">71~80歳</option>
                <option value="8">81~90歳</option>
                <option value="9">91~100歳</option>
            </select>
        </td>
    {{-- <td>{{ Form::select('age', ['～9歳', '10歳~', '20歳~', '30歳~', '40歳~', '50歳~', '60歳~', '70歳~', '80歳~', '90歳~', '100歳~']) }}</td> --}}
    </tr>
    <tr>
        <td>メール：</td>
        <td><input type="text" name="mail" value="{{ old('mail') }}"></td>
    </tr>
    <tr>
        <td>メモタイプ：</td>
        <td>
            <input type="radio" name="memotype" value="0">Text
            <input type="radio" name="memotype" value="1">ToDo
            <input type="radio" name="memotype" value="2">CheckList
        </td>
    </tr>
    <tr>
        <td>タイトル：</td>
        <td><input type="text" name="title" value="{{ old('title') }}"></td>
    </tr>
    <tr>
        <td>内容：</td>
        <td><textarea name="contents" cols="30" rows="10">{{ old('contents') }}</textarea></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="送信"></td>
    </tr>
</table>
</form>
@endsection

@section('footer', '2020 myouga.inc')
