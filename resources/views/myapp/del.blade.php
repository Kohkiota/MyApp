<link rel="stylesheet" href="{{ asset('css/del.styles.css') }}">
@extends('layouts.myapp')

@section('title', 'メモ除去')

@section('content')
    @if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

<form action="/myapp/del" method="post" class="form">
<table border=1>
    @csrf
    <input type="hidden" name="id" value="{{ $form->id }}">
    <tr>
        <td>名前：</td>
        <td><input type="text" name="name" value="{{ $form->name }}"></td>
    </tr>
    <tr>
        <td>年齢：</td>
        <td>
            <select name="age">
                <option value="0" @if ($form->age == 0 ) selected @endif>0~10歳</option>
                <option value="1" @if ($form->age == 1 ) selected @endif>11~20歳</option>
                <option value="2" @if ($form->age == 2 ) selected @endif>21~30歳</option>
                <option value="3" @if ($form->age == 3 ) selected @endif>31~40歳</option>
                <option value="4" @if ($form->age == 4 ) selected @endif>41~50歳</option>
                <option value="5" @if ($form->age == 5 ) selected @endif>51~60歳</option>
                <option value="6" @if ($form->age == 6 ) selected @endif>61~70歳</option>
                <option value="7" @if ($form->age == 7 ) selected @endif>71~80歳</option>
                <option value="8" @if ($form->age == 8 ) selected @endif>81~90歳</option>
                <option value="9" @if ($form->age == 9 ) selected @endif>91~100歳</option>
            </select>
        </td>
    {{-- <td>{{ Form::select('age', ['～9歳', '10歳~', '20歳~', '30歳~', '40歳~', '50歳~', '60歳~', '70歳~', '80歳~', '90歳~', '100歳~']) }}</td> --}}
    </tr>
    <tr>
        <td>メール：</td>
        <td><input type="text" name="mail" value="{{ $form->mail }}"></td>
    </tr>
    <tr>
        <td>メモタイプ：</td>
        <td>
            <input type="radio" name="memotype" value="0" @if ($form->memotype == 0 ) checked @endif>Text
            <input type="radio" name="memotype" value="1" @if ($form->memotype == 1 ) checked @endif>ToDo
            <input type="radio" name="memotype" value="2" @if ($form->memotype == 2 ) checked @endif>CheckList
        </td>
    </tr>
    <tr>
        <td>タイトル：</td>
        <td><input type="text" name="title" value="{{ $form->title }}"></td>
    </tr>
    <tr>
        <td>内容：</td>
        <td><textarea name="contents" cols="30" rows="10">{{ $form->contents }}</textarea></td>
    </tr>
    <tr>
        <td><input type="submit" value="削除"></td>
        <td>本当に削除しますか？？</td>
    </tr>
    <tr>
        <td><a href="/myapp/list" class="btn">戻る</a></td>
    </tr>

</table>
</form>
@endsection

@section('footer', '2020 myouga.inc')
