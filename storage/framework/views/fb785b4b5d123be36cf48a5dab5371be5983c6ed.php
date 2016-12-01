<?php $__env->startSection('content'); ?>
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
      <?php echo Form::open(['route' => 'storage.create', 'method' => 'POST','files'=>true]); ?>

        <div class="form-group">
          <div class="form-group">
            <?php echo Form::label('name', 'Nombre'); ?>

            <?php echo Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'required']); ?>

          </div>
          <div class="form-group">
            <?php echo Form::label('descripcion', 'Descripción'); ?>

            <?php echo Form::textarea('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Descripcion del texto', 'required']); ?>

          </div>
          <div class="form-group">
            <?php echo Form::label('category_id', 'Categoria'); ?>

            <?php echo Form::select('category_id', $categorias, null,['class' => 'form-control', 'placeholder' => 'Seleccione una categoria..' ,'required']); ?>

          </div>   
          <div class="form-group">
            <?php echo Form::label('file', 'Archivo: '); ?>

            <?php echo Form::file('file'); ?>

          </div>
   
          <div class="form-group">
          <?php echo Form::submit('Guardar', ['class' => 'btn btn-action btn-lg']); ?>

          </div>
        </div>
      <?php echo Form::close(); ?>

    </div>
  </div>
  </div>
</article>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>