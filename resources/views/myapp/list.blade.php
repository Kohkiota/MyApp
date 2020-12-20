@extends('layouts.myapp')

@section('title', 'メモ一覧')

@section('content')
    <table>
    <tr><th>Name</th><th>Mail</th><th>Age</th><th>title</th><th>contents</th></tr>
    @foreach($items as $item)
        <tr>
            <td>{{ optional($item)->name }}</td>
            <td>{{ optional($item)->age }}</td>
            <td>{{ optional($item)->mail }}</td>
            <td>{{ optional($item)->title }}</td>
            <td>{{ optional($item)->contents }}</td>
        </tr>
    @endforeach
    </table>
@endsection

@section('footer', 'myouga myouga')
