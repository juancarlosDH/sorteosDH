@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nuevo Sorteo</div>

                <div class="card-body">
                    <form method="POST" action="/sorteos/store" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="fecha_sorteo" class="col-md-4 col-form-label text-md-right">Fecha de Sorteo</label>

                            <div class="col-md-6">
                                <input id="fecha_sorteo" type="date" class="form-control{{ $errors->has('fecha_sorteo') ? ' is-invalid' : '' }}" name="fecha_sorteo" value="{{ old('fecha_sorteo') }}" autofocus>

                                @if ($errors->has('fecha_sorteo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fecha_sorteo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fecha_inicio" class="col-md-4 col-form-label text-md-right">Fecha de Inicio de Participación</label>

                            <div class="col-md-6">
                                <input id="fecha_inicio" type="date" class="form-control{{ $errors->has('fecha_inicio') ? ' is-invalid' : '' }}" name="fecha_inicio" value="{{ old('fecha_inicio') }}" autofocus>

                                @if ($errors->has('fecha_inicio'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fecha_inicio') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fecha_cierre" class="col-md-4 col-form-label text-md-right">Fecha de Cierre de Participación</label>

                            <div class="col-md-6">
                                <input id="fecha_cierre" type="date" class="form-control{{ $errors->has('fecha_cierre') ? ' is-invalid' : '' }}" name="fecha_cierre" value="{{ old('fecha_cierre') }}" autofocus>

                                @if ($errors->has('fecha_cierre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fecha_cierre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="premio1" class="col-md-4 col-form-label text-md-right">Primer Premio</label>

                            <div class="col-md-6">
                                <input id="premio1" type="text" class="form-control{{ $errors->has('premio1') ? ' is-invalid' : '' }}" name="premio1" value="{{ old('premio1') }}" >

                                @if ($errors->has('premio1'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('premio1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="premio2" class="col-md-4 col-form-label text-md-right">Segundo Premio</label>

                            <div class="col-md-6">
                                <input id="premio2" type="text" class="form-control{{ $errors->has('premio2') ? ' is-invalid' : '' }}" name="premio2" value="{{ old('premio2') }}" >

                                @if ($errors->has('premio2'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('premio2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="premio3" class="col-md-4 col-form-label text-md-right">Tercer Premio</label>

                            <div class="col-md-6">
                                <input id="premio3" type="text" class="form-control{{ $errors->has('premio3') ? ' is-invalid' : '' }}" name="premio3" value="{{ old('premio3') }}" >

                                @if ($errors->has('premio3'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('premio3') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Guardar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
