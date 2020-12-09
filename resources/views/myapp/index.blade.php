@extends('layouts.myapp')
<style>
    .btn {
        display: flex;
        font-weight: bold;
        border: 3px solid;
        text-decoration: none;
    }
    .memobtn {
        font-size:80px;
        width: 100%;
        margin: 10px 0px;
    }

    .btnarea {
        display: flex;
        justify-content: space-between;
        margin: 10px 0px;
        width:99%;
    }
    .halfbtna {
        font-size:40px;
        width: 50%;
        margin: 0px 10px 0px 0px;
    }
    .halfbtnb {
        font-size:40px;
        width: 50%;
        margin: 0px 0px 0px 0px;
    }

</style>
@section('title', 'トップページ')

@section('content')
    <a class="btn memobtn" href="{{ route('myapp') }}">
        MEMO
    </a>
    <div class="btnarea">
        <a class="btn halfbtna" href="{{ route('myapp/add') }}">
            新規メモ
        </a>
        <a class="btn halfbtnb" href="{{ route('myapp/list') }}">
            メモ一覧
        </a>
    </div>
@endsection

@section('footer', '2020 myouga.inc')
