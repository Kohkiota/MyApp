@extends('layouts.myapp')

@section('title', 'Memo.index')

@section('content')
    <table>
    <tr><th>Data</th></tr>
    @foreach($items as $item)
        <tr>
            <td>{{ $item->getData() }}</td>
        </tr>
    @endforeach
    </table>
@endsection

@section('footer', 'myouga myouga')
