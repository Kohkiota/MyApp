@extends('layouts.myapp')
<style>
</style>

@section('title', '新規メモ')

@section('content')
<form action="/myapp/add" method="post">
<table border=1>
    <tr>
        <td>名前：</td>
        <td><input type="text"></td>
    </tr>
    <tr>
        <td>年齢：</td>
        <td><input type="text"></td>
    </tr>
    <tr>
        <td>メール：</td>
        <td><input type="text"></td>
    </tr>
    <tr>
        <td>メモタイプ：</td>
        <td>
            <input type="radio">Text
            <input type="radio">ToDo
            <input type="radio">CheckList
        </td>
    </tr>
    <tr>
        <td>タイトル：</td>
        <td><input type="text"></td>
    </tr>
    <tr>
        <td>内容：</td>
        <td><input type="textarea" name="textarea" rows="4" cols="40"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="send"></td>
    </tr>
</table>
</form>
@endsection

@section('footer', '2020 myouga.inc')
