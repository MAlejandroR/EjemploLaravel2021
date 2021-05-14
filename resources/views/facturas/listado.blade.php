@extends("layouts.layout")



@section("contenido")
<tabla nombre_tabla="{{$nombre_tabla}}"
       campos_serializados ='@json($campos)'
       filas_serializadas='@json($filas)'>
</tabla>

@endsection
