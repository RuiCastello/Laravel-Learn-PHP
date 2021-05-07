@extends('layouts.base')


@section('title')
    Galeria de fotos
@endsection


@section('content')
<h1>{{$title}}</h1>
<p>{{$description}}</p>

    @if( !empty($exif) )
        <ul>
            <strong>EXIF</strong>

        @foreach ($exif as $item => $itemValue)

            <li>{{$item.": ".$itemValue}}</li>

        @endforeach

        </ul>
    @endif


@endsection
