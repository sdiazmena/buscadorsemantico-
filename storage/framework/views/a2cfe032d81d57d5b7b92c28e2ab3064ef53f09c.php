<?php $__env->startSection('content'); ?>
    <header id="head" class="secondary"></header>

    <!-- container -->
    <div class="container">

        <div class="row">
            
            <!-- Article main content -->
            <article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Registrarse</h1>
                </header>
                
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3 class="thin text-center">Registrar nueva cuenta</h3>
                            <p class="text-center text-muted">Si ya posees una cuenta, <a href="<?php echo e(url('/login')); ?>">inicia sesion</a>  </p>
                            <hr>

                            <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/register')); ?>">
                                <?php echo e(csrf_field()); ?>


                                <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                                    <label for="name" class="col-md-4 control-label">Nombre Completo</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>">

                                        <?php if($errors->has('name')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('name')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                    <label for="email" class="col-md-4 control-label">Correo Electronico</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>">

                                        <?php if($errors->has('email')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('email')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                    <label for="password" class="col-md-4 control-label">Contraseña</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password">

                                        <?php if($errors->has('password')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('password')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirmar Contraseña</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                        <?php if($errors->has('password_confirmation')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-btn fa-user"></i> Registrarse
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                
            </article>
            <!-- /Article -->

        </div>
    </div>  <!-- /container -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>