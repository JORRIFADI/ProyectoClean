@extends('adminlte::page')

@section('title', 'Editar Nosotros')

@section('content_header')
<h1>Editar pestaña Nosotros</h1>
@stop

@section('content')

<form action="{{ url('dashboard/datosnosotros/'. $datosnosotros->id)}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PUT')}}

    <div class="mb-3 mt-4">
        <div class="mb-3">
            <label for="titulo" class="form-label fw-bold text-primary ">Título:</label>
            <input type="text" name="titulo" id="titulo" class="form-control" value="{{$datosnosotros->titulo}}">
        </div>
    </div>


    <div class="mb-3 mt-2">
        <div class="mb-3 mt-2">
            <label for="descripcion1" class="form-label fw-bold text-primary">Descripción 1:</label>
            <input name="descripcion1" id="descripcion1" class="form-control" value="{{$datosnosotros->descripcion1}}">
        </div>
    </div>

    <div class="mb-3 mt-2">
        <div class="mb-3 ">
            <label for="descripcion2" class="form-label fw-bold text-primary">Descripción 2:</label>
            <input name="descripcion2" id="descripcion2" class="form-control" value="{{$datosnosotros->descripcion2}}">
        </div>
    </div>

    <div class="mb-3 mt-2">
        <div class="mb-3 ">
            <img src="" alt="" srcset="">
        </div>
    </div>

        {{-- Actualizacion del Banner de Fondo --}}  

    <label for="descripcion1" class="form-label fw-bold text-primary">Banner Nosotros:</label>
    <div class="card" style="width: 30rem;">
            <img src="{{ asset('storage'). '/' . $datosnosotros->urlbanner}}" class="card-img-top" alt="Imagen del Banner Nosotros">
        <div class="card-body">
                <input type="file" value="" name="urlbanner" id="urlbanner">
        </div>
    </div>
    
    
    <a href="/dashboard" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>


</form>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>

</script>
@stop
