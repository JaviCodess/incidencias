<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Login')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                                <a href="<?php echo e(url('/redirect')); ?>" style="margin-top: 20px;" class="btn btn-lg btn-success btn-block"><strong>Inicia sesión con google</strong></a>
                                <iframe id="idlogoutframe" src="https:\\accounts.google.com/logout" style="display:none"></iframe>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/melanie/practica/resources/views/auth/login.blade.php ENDPATH**/ ?>