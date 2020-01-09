<?php $__env->startSection('content'); ?>
<style>
    input{
        margin: 2% 0 0 0;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Panel de control</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                        <?php $__currentLoopData = $incidencia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <form method="POST" action="/home-admin/anadir/<?php echo e($item->id); ?>/modificado">
                            <?php echo csrf_field(); ?>
                            Estado de la incidencia: <select name="estado">
                                <option value="En proceso">En proceso</option>
                                <option value="Recibida">Recibida</option>
                                <option value="Resuelta">Resuelta</option>
                                <option value="Rechazada">Rechazada</option>
                            </select><br>
                            Comentario:
                            <br>
                            <textarea name="comentario" rows="10" cols="50"></textarea><br>
                            Adjunta archivo: <input type="file" name="adjun">
                            <input type="string" name="idp" value="<?php echo e(Auth::user()->id); ?>" style="display:none;"><br>
                            <input type="submit" value="Enviar">
                        </form>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/melanie/practica/resources/views/anadir.blade.php ENDPATH**/ ?>