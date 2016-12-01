<?php $__env->startSection('content'); ?>
    <!-- Header -->
    <header id="head">
        <div class="container">
            <div class="row">
                <h1 class="lead">  Plabooks!  </h1>
                <p class="tagline">  Tu plataforma de creación de ebooks online  </p>
                <?php if(Auth::guest()): ?>
                    <p><a class="btn btn-default btn-lg" role="button" href="#conocemas">Conoce Mas</a> <a class="btn btn-action btn-lg" role="button" href="<?php echo e(url('/login')); ?>">Ingresa Ahora!</a></p>
                <?php else: ?>
                    <p><a class="btn btn-action btn-lg" role="button" href="/inicio">Ingresa Ahora!</a></p>
                <?php endif; ?>
            </div>
        </div>
    </header>
    <!-- /Header -->

    <!-- Intro -->
    <div class="container text-center">
        <br> <br>
        <h2 class="thin">Todo lo que tu necesitas!</h2>
        <p class="text-muted">
            Comienza con nuestra plataforma y ten todas las herramientas que necesitas para publicar tus libros electronicos. Todo desde la web!
        </p>
    </div>
    <!-- /Intro-->
        
    <!-- Highlights - jumbotron -->
    <section id="conocemas">
    <div class="jumbotron top-space">
        <div class="container">
            
            <h3 class="text-center thin">  Nuestros Servicios  </h3>
            
            <div class="row">
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption"><h3><i class="fa fa-4x fa-check-square-o text-primary sr-icons"></i>Crear</h3></div>
                    <div class="h-body text-center">
                        <p>Comienza a dejar volar tu imaginación!</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption"><h3><i class="fa fa-4x fa-files-o text-primary sr-icons"></i>Editar</h3></div>
                    <div class="h-body text-center">
                        <p>Siempre dispoible para que continues con tu escritura cuando quieras! </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption"><h3><i class="fa fa-4x fa-rocket text-primary sr-icons"></i>Publicar</h3></div>
                    <div class="h-body text-center">
                        <p>Una vez terminada tu obra, que todos puedan leerla!</p>
                    </div>
                </div>
                <!--<div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption"><h3><i class="fa fa-4x fa-cloud-download text-primary sr-icons"></i>Descargar</h3></div>
                    <div class="h-body text-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, excepturi, maiores, dolorem quasi reprehenderit illo accusamus nulla minima repudiandae quas ducimus reiciendis odio sequi atque temporibus facere corporis eos expedita? </p>
                    </div>
                </div>-->
            </div> <!-- /row  -->
        
        </div>
    </div>
    </section>
    <!-- /Highlights -->

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Registrate gratis y comienza a escribir. YA!</h2>
                <a href="<?php echo e(url('/login')); ?>" class="btn btn-default btn-xl sr-button">Registrarse!</a>
            </div>
        </div>
    </aside>
   
    <!-- Social links. @TODO: replace by link/instructions in template -->
    <section id="social">
        <div class="container">
            <div class="wrapper clearfix">
                <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style">
                <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                <a class="addthis_button_tweet"></a>
                <a class="addthis_button_linkedin_counter"></a>
                <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                </div>
                <!-- AddThis Button END -->
            </div>
        </div>
    </section>
    <!-- /social links -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>