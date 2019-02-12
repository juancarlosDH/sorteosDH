@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <h2 >Listado de Sorteos</h2>

                @foreach ($sorteos as $sorteo)
                    <div><b>Fecha: {{ $sorteo->fecha_sorteo }}</b>
                        <form class="" action="/sorteos/participar" method="post">
                            @csrf
                            <input type="hidden" name="sorteo_id" value="{{$sorteo->id}}">
                            <button class="btn btn-success">Inscribite</button>
                        </form>
                        <a class="btn btn-primary" href="/sorteos/{{$sorteo->id}}/participantes/">Participantes</a>
                    </div>
                @endforeach
        </div>
    </div>
</div>
@endsection
