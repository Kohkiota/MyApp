@extends('layouts.myapp')

@section('title', 'Memo.find')

@section('content')
    <form action="/memo/find" method="post">
    @csrf
    <input type="text" name="input" value="{{ $input }}">
    <input type="submit" value="find">
    </form>
    @if (isset($item))
    <table>
    <tr><th>Data</th></tr>
        <tr>
            <td>{{ $item->getData() }}</td>
        </tr>
    </table>
    @endif
@endsection

@section('footer', 'myouga myouga')
