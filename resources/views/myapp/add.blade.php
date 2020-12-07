@extends('layouts.myapp')
<style>
</style>
@section('title', 'トップページ')

@section('content')
<table border=1>
    <tr><td>名前：</td><td><input type="text"></td></tr>
    <tr><td>年齢：</td><td><input type="text"></td></tr>
    <tr><td>メール：</td><td><input type="text"></td></tr>
    <tr><td>メモタイプ：</td><td><input type="text"></td></tr>
    <tr><td>タイトル：</td><td><input type="text"></td></tr>
    <tr><td>内容：</td><td><input type="textarea"></td></tr>
    <tr><td></td><td><input type="submit" value="send"></td></tr>
</table>
@endsection

@section('footer')
2020 myouga.inc
@endsection