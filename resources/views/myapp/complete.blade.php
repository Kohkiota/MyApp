<link rel="stylesheet" href="{{ asset('css/complete.styles.css') }}">
@extends('layouts.myapp')
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
