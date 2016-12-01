@extends('layouts.nav')

@section('content')
<header id="head" class="secondary"></header>
                <header class="page-header">
                    <h1 class="page-title">Titulo: {!! $ebook->name !!}</h1>
                </header>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        {!! Form::open(array('url' => 'users/ebooks/ckeditor')) !!}   

                            <input type="hidden" name="nombre" id="nombre" value="{{ $ebook->name }}">                        	
				            <textarea name="editor1" id="editor1" rows="10" cols="80">
				                {!! $contents !!}
				            </textarea>
				            <script>
				                // Replace the <textarea id="editor1"> with a CKEditor
				                // instance, using default configuration.
				                CKEDITOR.replace( 'editor1' ,{
                                    customConfig: '/ckeditor/config.js'

                                });
                            </script>
                            <div class="form-group">

                                <div class="col-md-3 ">
                                    
                                    <button type="submit" name = "guardar" id = "guardar" value = "0" class="btn btn-action btn-lg">Guardar</button>
                                    <button type="submit" name = "guardar" id = "guardar" value = "1" class="btn btn-action btn-lg">Publicar</button>
                                </div>
                            </div>


                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection