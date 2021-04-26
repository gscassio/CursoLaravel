@extends('layouts.main')

@section('title','HDC Eventos')

@section('content')
    <H1>Pagina de teste do laravel</H1>
    <img src="/img/eventos.jpg" alt="Banner">

    @for($i =0; $i<count($arr); $i++)
        <p>
            {{ $arr[$i] }}
        </p>
    @endfor

     @foreach($nomes as $nomes)
        <p> {{  $loop->index }} </p>
        <p>{{$nomes}}</p>
     @endforeach
@endsection