

<?php $__env->startSection('content'); ?>


                                                      
                            <textarea  cols="80" id="editor1" name="editor1" rows="10" >
                                This is my textarea to be replaced with CKEditor.
                            </textarea>

                        
                            <script type="text/javascript">
                                // Replace the <textarea id="editor1"> with a CKEditor
                                // instance, using default configuration.
                                CKEDITOR.replace( 'editor1' );
                            </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>