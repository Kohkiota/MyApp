<link rel="stylesheet" href="{{ asset('css/list.styles.css') }}">
@extends('layouts.myapp')

@section('title', 'メモ一覧')

@section('content')
    <a href="/myapp/session">Session編集へアクセス。DB利用</a>
    <table>
    <tr><th>Name</th><th>Age</th><th>Mail</th><th>title</th><th>contents</th><th>変更</th></tr>
    @foreach($items as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>
                @if( $item->age == 0 )    0~10歳
                @elseif( $item->age == 1 )    11~20歳
                @elseif( $item->age == 2 )    21~30歳
                @elseif( $item->age == 3 )    31~40歳
                @elseif( $item->age == 4 )    41~50歳
                @elseif( $item->age == 5 )    51~60歳
                @elseif( $item->age == 6 )    61~70歳
                @elseif( $item->age == 7 )    71~80歳
                @elseif( $item->age == 8 )    81~90歳
                @elseif( $item->age == 9 )    91~100歳
                @endif
            </td>
            <td>{{ $item->mail }}</td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->contents }}</td>
            <td class="btnarea">
                <form action="/myapp/edit" method="post">
                    <a href="/myapp/edit?id={{ $item->id }}"  class="btn">編集</a>
                    <a href="/myapp/del?id={{ $item->id }}"  class="btn">削除</a>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
    <div class="links">
        {{ $items->links() }}
    </div>
@endsection

@section('footer', 'myouga myouga')
