<!--
<?php $__env->startSection('buscar'); ?>
                    <form class="navbar-form navbar-left" role="search">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                      </div>
                      <button type="submit" class="btn btn-primary">Buscar</button>
                    </form>
<?php $__env->stopSection(); ?> -->

<?php $__env->startSection('content'); ?>
<header id="head" class="secondary"></header>

    <!-- container -->
    <div class="container">
     
        <div class="row">
            
            <!-- Sidebar -->
            <aside class="col-md-4 sidebar sidebar-left">
                <div class="row widget">
                    <div class="col-xs-12">
                      <?php if(Auth::guest()): ?>

                      <?php else: ?>
                        <h3>Hola!</h3>
                        <h4><?php echo e(Auth::user()->name); ?></h4>
                      <?php endif; ?>
                    </div>
                </div>


            <hr>
            <div class="container" style="margin-top: 60px;">

  <a class="btn btn-action btn-lg" role="button" href="<?php echo e(url('/users/ebooks/create')); ?>"><i class="fa fa-file-text" aria-hidden="true"> Crear Nuevo Ebooks</i></a>

            </div>
           <div class="container" style="margin-top: 60px;">

  <a class="btn btn-action btn-lg" role="button" href="<?php echo e(url('/storage/show')); ?>"><i class="fa fa-file-text" aria-hidden="true"> Subir Nuevo Ebooks</i></a>

            </div>
          

            <hr>


            </aside>
            <!-- /Sidebar -->
            
            <!-- Article main content -->
            <article class="col-md-8 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Textos en creacion...</h1>
                    <div class="container">
                        <?php foreach($ebooks as $ebook): ?>
                            <?php if($ebook->estado == '0'): ?>
                                <?php echo Form::open(array('url' => 'users/ebooks/editar')); ?> 
                                 <input type="hidden" name="nombre" id="nombre" value="<?php echo e($ebook->name); ?>">
                                     <input name="boton1" type="image" src="/images/book-icon-92494.png" height="50" width="50"><?php echo e($ebook->name); ?>

                                       
                                <?php echo Form::close(); ?>

                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </header>

                <header class="page-header">
                    <h1 class="page-title">Textos publicados...</h1>
                            <?php foreach($ebooks as $ebook): ?>
                            <?php if($ebook->estado == '1'): ?>
                                <?php echo Form::open(array('url' => 'pdf/create')); ?> 
                                 <input type="hidden" name="nombre" id="nombre" value="<?php echo e($ebook->name); ?>">
                                     <input name="boton1" type="image" src="/images/book-icon-92494.png" height="42" width="42">
   <?php echo e($ebook->name); ?>

                                       
                               <?php echo Form::close(); ?>

                            
                            <?php endif; ?>
                        <?php endforeach; ?>
 
                </header>
            </article>
            <!-- /Article -->

        </div>
    </div>  <!-- /container -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>