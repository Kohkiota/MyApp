@extends('layouts.myapp')
<style>
    .btnarea { overflow:hidden; text-align:center; margin: 10px 10px; width:100%;}
    .btn {display: inline-block;  font-weight:bold; border:3px solid; text-decoration:none; }
    .memobtn { font-size:80px; width: 100%;}
    .halfbtna { float:left; font-size:40px; width: 45%; margin: 10px 0px 0px;}
    .halfbtnb { float:right; font-size:40px; width: 45%; margin: 10px 0px 0px;}
</style>
@section('title', 'トップページ')

<!-- @section('menubar')
    @parent
    インデックスページ
@endsection -->

@section('content')
    <div class="btnarea">
        <a class="btn memobtn" href="myapp">MEMO</a><br>
        <a class="btn halfbtna" href="myapp/add">新規メモ</a>
        <a class="btn halfbtnb" href="myapp/list">メモ一覧</a>
    </div>
@endsection

@section('footer')
2020 myouga.inc
@endsection