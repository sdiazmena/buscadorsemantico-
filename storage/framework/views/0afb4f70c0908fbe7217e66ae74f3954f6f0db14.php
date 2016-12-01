

<?php $__env->startSection('content'); ?>
<header id="head" class="secondary"></header>
                <header class="page-header">
                    <h1 class="page-title">Titulo: <?php echo $ebook->name; ?></h1>
                </header>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <?php echo Form::open(array('url' => 'users/ebooks/ckeditor')); ?>   

                            <input type="hidden" name="nombre" id="nombre" value="<?php echo e($ebook->name); ?>">                        	
				            <textarea name="editor1" id="editor1" rows="10" cols="80">
				                <?php echo $contents; ?>

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


                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>