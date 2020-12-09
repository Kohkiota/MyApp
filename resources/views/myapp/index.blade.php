@extends('layouts.myapp')
<style>
    .btn {
        display:flex;
        font-weight: bold;
        border: 3px solid;
        text-decoration: none;
    }

    .btnarea {
        margin:10px 0px;
        width:100%;
        text-align:center;
    }

    .btnareaone {
        width:100%;
    }

    .btnareatwo {
        display:flex;
        justify-content:center;
        width:100%;
        margin-top: 10px;
    }

    .memobtn {
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
@section('title', 'トップページ')

@section('content')
<div class="btnarea">
    <div class="btnareaone">
        <p><a class="btn memobtn" href="{{ route('myapp') }}">
            MEMO
        </a></p>
    </div>
    <div class="btnareatwo">
        <a class="btn halfbtna" href="{{ route('myapp/add') }}">
            新規メモ
        </a>
        <a class="btn halfbtnb" href="{{ route('myapp/list') }}">
            メモ一覧
        </a>
    </div>
</div>
@endsection

@section('footer', '2020 myouga.inc')
