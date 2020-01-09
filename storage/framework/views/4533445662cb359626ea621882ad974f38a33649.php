<?php $__env->startSection('content'); ?>
<style>
    a.inc{ 
        text-decoration-color: none;
        text-decoration: none;
        color: white;
        background-color: #3399FF;
        padding: 1%;
        float: right;
    }
    a.inc:hover{
        text-decoration: none; 
        background-color: #6CB5FF;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Panel de control<a class="inc" href="/home/crear-incidencia">Crear incidencia</a></div>

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
                                <td><a href="/home/modificar-incidencia/<?php echo e($incidencia->id); ?>"><center><img width="30%" src="<?php echo asset('pencil-edit-button.png'); ?>"></center></a></td>
                                <td><a href="/home/eliminar-incidencia/<?php echo e($incidencia->id); ?>"><center><img width="30%" src="<?php echo asset('rubbish-bin.png'); ?>"></center></a></td>
                                <td><a href="/home/consultar-incidencia/<?php echo e($incidencia->id); ?>"><center><img width="30%" src="<?php echo asset('binoculars.png'); ?>"></center></a></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/melanie/practica/resources/views/home.blade.php ENDPATH**/ ?>