@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Editar certificaciones</h1>
@stop

@section('content')
<form action="{{ url('dashboard/datosbanner/'. $datosbanner->id)}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PUT')}}
    <div class="mb-3 mt-4">

        <div class="mb-3">
            <label for="descripcion" class="form-label fw-bold text-primary ">Descripción:</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control"
                value="{{$datosbanner->descripcion}}">
        </div>
    </div>
    <br>

    <label for="url_img" class="form-label fw-bold text-primary">Banner Nosotros:</label>
    <div class="card" style="width: 30rem;">
            <img src="{{ asset('storage'). '/' . $datosbanner->url_img}}" class="card-img-top">
        <div class="card-body">
                <input type="file" value="" name="url_img" id="url_img">
        </div>
    </div>

    <br>
    <a href="/dashboard/datosbanner" class="btn btn-secondary">Cancelar</a>
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