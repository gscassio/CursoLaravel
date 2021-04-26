@extends('layouts.main')

@section('title','Entre em contato')

@section('content')
<h1>Tela de produto</h1>
    if($busca != '')
    <p>O usuario estar procurando por {{$busca}}</p>
<a href="/"> voltar</a>

@endsection