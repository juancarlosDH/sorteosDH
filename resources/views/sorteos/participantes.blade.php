@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <h2 >Listado de Participantes</h2>

                @foreach ($participantes as $usuario)
                    <div><b>{{ $usuario->name }}</b>

                    </div>
                @endforeach
        </div>
    </div>
</div>
@endsection
