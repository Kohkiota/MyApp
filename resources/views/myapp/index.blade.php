@extends('layouts.myapp')
<style>
    .btnarea { display:flex; margin: 10px 0px; width:100%;}
    .btn {display: inline-block; text-align:center;  font-weight:bold; border:3px solid; text-decoration:none; }
    .memobtn { font-size:80px; width: 100%; margin: 10px 0px 0px;}
    .halfbtna { font-size:40px; width: 50%; margin: 0px 10px 0px 0px;}
    .halfbtnb { font-size:40px; width: 50%; margin: 0px 0px 0px 0px;}
</style>
@section('title', 'トップページ')

<!-- @section('menubar')
    @parent
    インデックスページ
@endsection -->

@section('content')
        <a class="btn memobtn" href="myapp">MEMO</a><br>
    <div class="btnarea">
        <a class="btn halfbtna" href="myapp/add">新規メモ</a>
        <a class="btn halfbtnb" href="myapp/list">メモ一覧</a>
    </div>
@endsection

@section('footer')
2020 myouga.inc
@endsection