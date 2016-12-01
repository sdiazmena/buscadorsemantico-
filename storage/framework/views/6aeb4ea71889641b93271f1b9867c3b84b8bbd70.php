<!doctype html>
<html lang="en">
    <head>
        <title> Plabooks! </title>
        <meta name="viewport" content="width = 1050, user-scalable = no" />
        <link rel="icon" type="image/png" href="/pics/favicon.png" />
        <script type="text/javascript" src="/extras/jquery.min.1.7.js"></script>
        <script type="text/javascript" src="/extras/jquery-ui-1.8.20.custom.min.js"></script>
        <script type="text/javascript" src="/extras/modernizr.2.5.3.min.js"></script>
        <script type="text/javascript" src="/lib/hash.js"></script>
        <link rel="stylesheet" href="/css/bootstrap.min.css">
            <link rel="stylesheet" href="/css/bootstrap-theme.css" media="screen" >
    <link rel="stylesheet" href="/css/main.css">
    <script type="text/javascript" src="<?php echo e(asset('/ckeditor/ckeditor.js')); ?>"></script>
    </head>
    <body>

        
        <?php echo $__env->yieldContent('content'); ?>
    </body>
</html>