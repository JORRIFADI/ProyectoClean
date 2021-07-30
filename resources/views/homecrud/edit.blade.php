@extends('adminlte::page')

@section('title', 'Editar Home')

@section('content_header')
<h1>Editar home</h1>
@stop

@section('content')

<form action="{{ url('dashboard/datosempresa/'. $datosempresa->id)}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="mb-3 mt-4">

        <div class="mb-3">
            <label for="descripcion" class="form-label fw-bold text-primary ">Descripción:</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control"
                value="{{$datosempresa->descripcion}}">
        </div>
    </div>
    <br>
    <div class="mb-3 mt-2">
        <div class="mb-3 ">
            <label for="mision" class="form-label fw-bold text-primary">Misión:</label>
            <input type="text" name="mision" id="mision" class="form-control" value="{{$datosempresa->mision}}">
        </div>
    </div>
    <br>
    <div class="mb-3 mt-2">
        <div class="mb-3 ">
            <label for="vision" class="form-label fw-bold text-primary">Visión:</label>
            <input type="text" name="vision" id="vision" class="form-control" value="{{$datosempresa->vision}}">
        </div>
    </div>
    <br>
    <div class="mb-3 mt-2">
        <div class="mb-3 ">
            <label for="vision" class="form-label fw-bold text-primary">Visión:</label>
            <input type="text" name="vision" id="vision" class="form-control" value="{{$datosempresa->vision}}">
        </div>
    </div>
    <br>
    <div class="mb-3 mt-2">
        <div class="mb-3 ">
            <label for="slogan" class="form-label fw-bold text-primary">Slogan:</label>
            <input type="text" name="slogan" id="slogan" class="form-control" value="{{$datosempresa->slogan}}">
        </div>
    </div>
    <br>

    {{-- Actualizacion del Banner de Fondo --}}

    <label for="descripcion1" class="form-label fw-bold text-primary">Banner Nosotros:</label>
    <div class="card" style="width: 30rem;">
        <img src="{{ asset('storage'). '/' . $datosempresa->imagenbanner}}" class="card-img-top" alt="Imagen del Banner Nosotros">
        <div class="card-body">
            <input type="file" value="" name="imagenbanner" id="imagenbanner">
        </div>
    </div>


    <div class="mb-3 mt-2">
        <div class="mb-3 ">
            <label for="url_curriculum" class="form-label fw-bold text-primary">Curriculum:</label>
            <br>
            <img src="{{ asset('storage/images/img-pdf.png')}}" class="img-fluid img-thumbnail"  alt="Curriculum">
            <input type="file" name="url_curriculum" id="url_curriculum" class="form-control"
                value="{{$datosempresa->url_curriculum}}">
        </div>
        <br>
        <a href="/dashboard/datosempresa" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!'); 
</script>
@stop