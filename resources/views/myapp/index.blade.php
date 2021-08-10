<link rel="stylesheet" href="{{ asset('css/index.styles.css') }}">
@extends('layouts.myapp')

@section('title', 'トップページ')

@section('content')
<div class="btnarea">
    <a class="btn memobtn" href="{{ route('myapp') }}">
        <div class="justify">
            <span>M</span>
            <span>E</span>
            <span>M</span>
            <span>O</span>
        </div>
    </a>
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
    <div>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia sequi ex porro similique inventore beatae excepturi doloremque magni explicabo ad, voluptatem in omnis voluptate itaque architecto? Dolorum facere aut, quia ad consequatur repellat mollitia cumque, aspernatur error et vel est molestiae. Laudantium fuga optio provident aspernatur quis animi, molestiae id harum quos omnis, enim, dolores ratione maiores deleniti praesentium quaerat obcaecati ducimus beatae explicabo velit cupiditate! Fuga mollitia non cum beatae magnam quaerat officia natus officiis at veritatis libero iusto debitis aut blanditiis aperiam, rerum ducimus consectetur harum! Aspernatur, enim similique maxime dolores magnam expedita libero natus. Inventore, amet itaque.
    </div>
</div>
@endsection

@section('footer', '2020 myouga.inc')
