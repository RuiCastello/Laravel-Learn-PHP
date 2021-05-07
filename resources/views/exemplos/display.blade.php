@extends('layouts.base')

@section('title')
{{ $title }}
@endsection

<style>
    main {padding: 20px;}
    form {padding: 20px 0;}
</style>

@section('content')

    @if ( !empty($preContent) )
        {!! $preContent !!}
    @endif

    @if ( !empty($list) )

        <ul>

        @foreach ($list as $item => $value)
            <li style="font-weight: bold; list-style-type: none;"> {{ $item }}
                {{-- Se a variável for um array, quero que o conteúdo desse array seja mostrado, então aqui faço um json_encode() do PHP, também podia fazer um serialize() mas o resultado é muito feio e quase ilegível, enquanto o formato JSON é fácil de ler --}}
                @if(is_array($value))
                    <ul><li style="font-weight: normal">{{ json_encode($value) }}</li></ul>
                    {{-- <ul><li style="font-weight: normal">{{ serialize($value) }}</li></ul>  --}} {{-- Serialize() é feioooooooo, JSON é melhor--}}
                @else
                    <ul><li style="font-weight: normal">{{ $value }}</li></ul>
                @endif
            </li>
        @endforeach

        </ul>

    @endif

@endsection
