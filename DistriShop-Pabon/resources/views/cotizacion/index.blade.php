
    @extends('cotizacion.layout')
    @section('content')
    <h1>index de cotizaciones </h1>
    <h1>aqui se va a mostrar la lista de cotizaciones que se han realizado</h1>
    <h1>mejor dicho las cuales se han cargado por esta view y lo dirige a create o carga</h1>

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

    @stop

    

    @section('footer')


