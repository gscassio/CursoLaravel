@extends('layouts.main')

@section('title','HDC Eventos')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Proximos eventos</h2>
    <p>Veja os eventos dos proximos dias</p>
    <div id="cards-container" class="row">
        @foreach($events as $event)
            <div class="card col-md-3">
             <img src="/img/eventos.jpg" alt="{{ $event->title }}">
             <div class="card-body">
                <p class="card date"> 28/04/2021  </p>
                <h5 class="card title"> {{$event->title}}  </h5>
                <p class="card-participants"> X participantes </p>
                <a href="#" class="btn-btn-primary">Saber mais</a>            
             </div>

            </div>
        @endforeach
    </div>
</div>


@endsection