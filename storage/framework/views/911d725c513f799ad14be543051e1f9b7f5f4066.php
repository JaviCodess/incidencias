<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1 align="center">Incidencias redactadas</h1></b></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <center>
                        <table border="1px solid black">
                            <tr>
                                <th>Fecha</th>
                                <th>Aula</th>
                                <th>Hora</th>
                                <th>Código del equipo</th>
                                <th>Código de la incidencia</th>
                                <th>Estado</th>
                            </tr>
                        <?php $__currentLoopData = $incidencias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $incidencia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($incidencia->fecha); ?></td>
                                <td><?php echo e($incidencia->aula); ?></td>
                                <td><?php echo e($incidencia->hora); ?></td>
                                <td align="center"><?php echo e($incidencia->codigo_equipo); ?></td>
                                <td align="center"><?php echo e($incidencia->codigo_incidencia); ?></td>
                                <td><?php echo e($incidencia->estado); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </center>
                    
                </div>
            </div>
            <button><a href="<?php echo e(url('/home')); ?>">Volver</a></button>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/melanie/practica/resources/views/ver_incidencia.blade.php ENDPATH**/ ?>