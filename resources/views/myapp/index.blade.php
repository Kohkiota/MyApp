<link rel="stylesheet" href="{{ asset('css/index.styles.css') }}">
@extends('layouts.myapp')

@section('title', 'トップページ')

@section('content')
<div class="btnarea">
    <div>
        <a class="btn memobtn" href="{{ route('myapp') }}">
            <div class="justify">
                <span>M</span>
                <span>E</span>
                <span>M</span>
                <span>O</span>
            </div>
        </a>
    </div>
    <div class="btnareatwo">
        <a class="btn halfbtna" href="{{ route('myapp/add') }}">
            <div class="justify">
                <span>新</span>
                <span>規</span>
                <span>メ</span>
                <span>モ</span>
            </div>
        </a>
        <a class="btn halfbtnb" href="{{ route('myapp/list') }}">
            <div class="justify">
                <span>メ</span>
                <span>モ</span>
                <span>一</span>
                <span>覧</span>
            </div>
        </a>
    </div>
</div>
@endsection

@section('footer', '2020 myouga.inc')
