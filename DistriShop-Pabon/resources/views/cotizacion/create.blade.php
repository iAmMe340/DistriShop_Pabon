@extends('cotizacion.layout')

    @section('content')
    
   <form action="{{route ('cotizacion.upload')}}" method="POST" enctype="multipart/form-data" > 
       @csrf
       <div class="form-group" >
           <div class="form-control" >
                <label for="nombre">Carga de Cotizaciones</label>
                <input type="file"  accept=".xlsx "  multiple name="files[]" id='nombre' class="form-control" >
           </div>
           
       </div>
         <div class="form-group" >
              <button type="submit"  class="btn btn-primary">Cargar</button>
        </div>
   </form>
 
    

    @section('footer')
        
    @endsection
@stop
