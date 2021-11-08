
@extends('cotizacion.layout')
    @section('content')

    
    <h1>muestra de la relacion de la cotizacion con la existencia y stock </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Codigo Producto</th><th>Descripcion</th><th>Precio</th><th>Cotizacion Id</th>
                </tr>
            </thead>
            <tbody>
               
                <tr>

                </tr>
            </tbody>    
        </table>
    </div>


    <a href="{{ url('/') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>


    
    @section('footer')
        
    
    @endsection

    @stop
