@extends("layouts.layout")



@section("contenido")
    <h1>Estoy en listado de clientes</h1>
<tabla nombre_tabla="{{$nombre_tabla}}"
       campos_serializados ='@json($campos)'
       filas_serializadas='@json($filas)'>
</tabla>

@endsection
