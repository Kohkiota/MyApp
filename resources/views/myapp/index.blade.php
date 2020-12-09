<link rel="stylesheet" href="{{ asset('css/index.styles.css') }}">
@extends('layouts.myapp')

@section('title', 'トップページ')

@section('content')
<div class="btnarea">
    <div class="btnareaone">
        <a class="btn memobtn" href="{{ route('myapp') }}">
            MEMO
        </a>
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
