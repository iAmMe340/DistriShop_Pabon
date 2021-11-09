
@extends('cotizacion.layout')
    @section('content')


    <table class="table">
        <thead class="table-light">
            <th>Id</th>
            <th>Ruta</th>
            <th>Acciones</th>
        </thead>
        <tbody>
        @foreach($cotizaciones as $cotizacion)
            <tr>
                <td>{{$cotizacion->id}}</td>
                <td>{{$cotizacion->ruta}}</td>
                <td><button type="button" class="btn btn-success">Crear</button> <button type="button" class="btn btn-danger">Eliminar</button></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    @section('footer')
    @endsection

    @stop
