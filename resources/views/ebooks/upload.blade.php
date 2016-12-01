@extends('layouts.nav')

@section('content')
<header id="head" class="secondary"></header>


<div class="container">
<div class="row">
<article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Nuevo Ebooks...</h1>
                </header>
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
  <div class="panel panel-default">
    <div class="panel-body">
        @if (!$mensaje=='0')
        <div class="alert alert-danger">
            {!! $mensaje !!}
        </div>
        @endif
      {!! Form::open(['route' => 'storage.create', 'method' => 'POST','files'=>true]) !!}
        <div class="form-group">
          <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'required']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('descripcion', 'Descripción') !!}
            {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Descripcion del texto', 'required']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('category_id', 'Categoria') !!}
            {!! Form::select('category_id', $categorias, null,['class' => 'form-control', 'placeholder' => 'Seleccione una categoria..' ,'required']) !!}
          </div>   
          <div class="form-group">
            {!!Form::label('file', 'Archivo: ')!!}
            {!!Form::file('file')!!}
          </div>
   
          <div class="form-group">
          {!! Form::submit('Guardar', ['class' => 'btn btn-action btn-lg']) !!}
          </div>
        </div>
      {!! Form::close() !!}
    </div>
  </div>
  </div>
</article>
</div>
</div>
@endsection