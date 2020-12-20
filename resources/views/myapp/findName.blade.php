@extends('layouts.myapp')

@section('title', 'name検索ページ')

@section('content')
    <form action="/myapp/find" method="post">
    @csrf
    <input type="text" name="input" value="{{ $input }}">
    <input type="submit" value="検索！">
    </form>
    @if (isset($item))
    <table>
    <tr><th>Name</th><th>Mail</th><th>Age</th><th>title</th><th>contents</th></tr>
    <tr>
        <td>{{ optional($item)->name }}</td>
        <td>{{ optional($item)->age }}</td>
        <td>{{ optional($item)->mail }}</td>
        <td>{{ optional($item)->title }}</td>
        <td>{{ optional($item)->contents }}</td>
    </tr>
    </table>
    @endif
@endsection

@section('footer', 'myouga myouga')
