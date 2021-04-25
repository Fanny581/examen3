@extends('adminlte::page')

@section('title', 'producto')

@section('content_header')
    <h1>Crear empleado</h1>
@stop

@section('content')
    <form method="post" action="{{route('empleado.store')}}">
        @csrf
        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-8">
                    <label for="txtNombre del producto" class="visually-hidden">nombres:</label>
                    <input type="text" class="form-control" name="nombres">
                </div>
                <div class="col col-lg-2">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-8">
                    <label for="txtNombre" class="visually-hidden">apelido</label>
                    <textarea type="text" class="form-control" rows="3" name="apellido"></textarea>
                </div>
                <div class="col col-lg-2">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-4">
                    <label for="idCliente" class="visually-hidden">cargo</label>
                    <input type="text" class="form-control" name="cargo">
                </div>
                <div class="col col-lg-6">
                </div>
                <div class="col col-lg-4">
                    <label for="idCliente" class="visually-hidden">salario</label>
                    <input type="text" class="form-control" name="salario">
                </div>
                <div class="col col-lg-4">
                    <label for="idCliente" class="visually-hidden">fechaingreso</label>
                    <input type="text" class="form-control" name="fechaingreso">
                </div>
                <div class="col col-lg-4">
                    <label for="idCliente" class="visually-hidden">fechasalida</label>
                    <input type="text" class="form-control" name="fechasalida">
                </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-8">
                    <button type="submit" class="btn btn-outline-success btn-block">Guardar</button>
                </div>
                <div class="col col-lg-2">
                </div>
            </div>
        </div>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

