{{-- <html>

<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-size: 16pt;
            color: #999;
        }

        h1 {
            font-size: 50pt;
            text-align: right;
            color: #f6f6f6;
            margin: -20px 0px -30px 0px;
            letter-spacing: -4pt;
        }
    </style>
    <title>Hello/Index</title>
</head>

<body>
    <h1>Blade/Index</h1>
    <p>&#064;foreachディレクティブの例</p>
    <ol>
        @for ($i = 1; $i < 100; $i++)
            @if ($i % 2 == 1)
                @continue
            @elseif ($i <= 10)
                <li>No,{{ $i }}
                @else
                @break
        @endif
    @endfor
</ol>


</body>

</html> --}}

{{-- P.88 3-27 --}}
@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    {{-- <p>必要なだけ記述できます。</p> --}}

    {{-- @component('components.message')
        @slot('msg_title')
            CAUTION!
        @endslot

        @slot('msg_content')
            これはメッセージの表示です。
        @endslot
    @endcomponent --}}

    {{-- @include('components.message', ['msg_title' => 'OK', 'msg_content' => 'サブビューです。']) --}}

    {{-- <ul>
        @each('components.item', $data,'item')
    </ul> --}}

    <table>
        @foreach ($data as $item)
            <tr>
                <th>{{ $item['name'] }}</th>
                <td>{{ $item['mail'] }}</td>
            </tr>
        @endforeach
    </table>

@endsection

@section('footer')
    copyright 2019 tuyano.
@endsection
