@extends('layouts.myapp')
<style>
    .btn {
        display:block;
        font-weight: bold;
        border: 3px solid;
        text-decoration: none;
    }

    .btnarea {
        margin:10px 0px;
        width:100%;
        text-align:center;
    }

    .btnareazero {
        width:100%;
    }
    .btnareaone {
        display:flex;
        justify-content:center;
        width:100%;
        margin-top: 10px;
    }
    .btnareatwo {
        width:100%;
        margin-top: 10px;
    }

    .okbtn{
        font-size:80px;
        width: 100%;
    }
    .memobtn{
        font-size:80px;
        width: 100%;
    }
    .halfbtna {
        font-size:40px;
        width: 50%;
        margin-right:10px;
    }
    .halfbtnb {
        font-size:40px;
        width: 50%;
    }

</style>
@section('title', '完了ページ')

@section('content')
<div class="btnarea">
    <div class="btnareazero">
        <a class="btn okbtn" href="{{ route('myapp') }}">
            OK!
        </a>
    </div>

    <div class="btnareaone">
        <a class="btn halfbtna" href="{{ route('myapp/add') }}">
            新規メモ
        </a>
        <a class="btn halfbtnb" href="{{ route('myapp/list') }}">
            メモ一覧
        </a>
    </div>

    <div class="btnareatwo">
        <a class="btn memobtn" href="{{ route('myapp') }}">
            トップページ
        </a>
    </div>
</div>
@endsection

@section('footer', '2020 myouga.inc')
