@extends('adminlte::page')

@section('title', 'Empleados')

@section('content_header')
<h1>Registrar Empleado</h1>
@stop

@section('content')
    <form method="post" action="{{route('empleado.update', $empleado->id)}}">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-8">
                    <label for="txtNombre" class="visually-hidden">nombres</label>
                    <input type="text" class="form-control" name="nombres" value="{{$empleado->nombres}}">
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
                    <label for="txtNombre" class="visually-hidden">apellido</label>
                    <input type="text" class="form-control" name="apellido" value="{{$empleado->apellido}}">
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
                    <label for="txtNombre" class="visually-hidden">Cargo</label>
                    <input type="text" class="form-control" name="cargo" value="{{$empleado->cargo}}">
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
                    <label for="txtNombre" class="visually-hidden">salario</label>
                    <input type="number" class="form-control" name="salario" value="{{$empleado->salario}}">
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
                    <label for="txtNombre" class="visually-hidden">fechaingreso</label>
                    <input type="date" class="form-control" name="fechaingreso" value="{{$empleado->fechaingreso}}">
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
                    <label for="txtNombre" class="visually-hidden">fechasalida</label>
                    <input type="date" class="form-control" name="fechasalida" value="{{$empleado->fechasalida}}">
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
                    <label for="txtNombre" class="visually-hidden">motivosalida:</label>
                    <textarea type="text" class="form-control" rows="3" name="motivosalida">{{$empleado->motivosalida}}</textarea>
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
                    <button type="submit" class="btn btn-outline-success btn-block">Guardar</button>
                </div>
                <div class="col col-lg-2">
                </div>
            </div>
        </div>
    </form>
</div>

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