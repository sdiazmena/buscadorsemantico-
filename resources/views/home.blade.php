@extends('layouts.nav')
<!--
@section('buscar')
                    <form class="navbar-form navbar-left" role="search">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                      </div>
                      <button type="submit" class="btn btn-primary">Buscar</button>
                    </form>
@endsection -->

@section('content')
<header id="head" class="secondary"></header>

    <!-- container -->
    <div class="container">
     
        <div class="row">
            
            <!-- Sidebar -->
            <aside class="col-md-4 sidebar sidebar-left">
                <div class="row widget">
                    <div class="col-xs-12">
                      @if (Auth::guest())

                      @else
                        <h3>Hola!</h3>
                        <h4>{{ Auth::user()->name }}</h4>
                      @endif
                    </div>
                </div>


            <hr>
            <div class="container" style="margin-top: 60px;">

  <a class="btn btn-action btn-lg" role="button" href="{{ url('/users/ebooks/create') }}"><i class="fa fa-file-text" aria-hidden="true"> Crear Nuevo Texto</i></a>

            </div>
           <div class="container" style="margin-top: 60px;">

  <a class="btn btn-action btn-lg" role="button" href="{{ url('/storage/show') }}"><i class="fa fa-file-text" aria-hidden="true"> Subir Nuevo Texto</i></a>

            </div>
          

            <hr>


            </aside>
            <!-- /Sidebar -->
            
            <!-- Article main content -->
            <article class="col-md-8 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Textos en creacion...</h1>
                    <div class="container">
                        @foreach ($ebooks as $ebook)
                            @if($ebook->estado == '0')
                                {!! Form::open(array('url' => 'users/ebooks/editar')) !!} 
                                 <input type="hidden" name="nombre" id="nombre" value="{{ $ebook->name }}">
                                     <input name="boton1" type="image" src="/images/book-icon-92494.png" height="50" width="50">{{ $ebook->name }}
                                       
                                {!! Form::close() !!}
                            @endif
                        @endforeach
                    </div>
                </header>

                <header class="page-header">
                    <h1 class="page-title">Textos publicados...</h1>
                            @foreach ($ebooks as $ebook)
                            @if($ebook->estado == '1')
                                {!! Form::open(array('url' => 'pdf/create')) !!} 
                                 <input type="hidden" name="nombre" id="nombre" value="{{ $ebook->name }}">
                                     <input name="boton1" type="image" src="/images/book-icon-92494.png" height="42" width="42">
                                      {{ $ebook->name }}
                                       
                               {!! Form::close() !!}
                            
                            @endif
                        @endforeach
 
                </header>
            </article>
            <!-- /Article -->

        </div>
    </div>  <!-- /container -->
@endsection
