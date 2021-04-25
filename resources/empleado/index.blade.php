@extends('adminlte::page')

@section('title', 'empleado')

@section('content_header')
    <h1>Clientes</h1>
@stop

@section('content')
    @if (session()->get('success'))
        <div class="alert alert-success">
            {{session()->get('success')}}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>nombres</th>
                <th>apellido</th>
                <th>cargo</th>
                <th>salario</th>
                <th>fechaingreso</th>
                <th>fechasalida</th>
                <th>motivosalida</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleado as $empleado)
                <tr>
                <td> {{$empleado->id}}</td>
                    <td> {{$empleado->nombres}}</td>
                    <td> {{$empleado->apellido}} </td>
                    <td> {{$empleado->cargo}} </td>
                    <td> {{$empleado->salarioo}} </td>
                    <td> {{$empleado->fechaingreso}} </td>
                    <td> {{$empleado->fechasalida}} </td>
                    <td> {{$empleado->motivosalida}} </td>
                    <td>
                        <a href="{{route('empleado.edit', $empleado->id)}}" class="btn btn-success btn-sm">edit</a>
                        <form action="{{route('empleado.destroy', $empleado->id)}}" method="post" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop