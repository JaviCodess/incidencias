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
                        <form method="POST" action="/home/modificar-incidencia/<?php echo e($item->id); ?>/modificado">
                            <?php echo csrf_field(); ?>
                            Fecha de la incidencia: <input type="date" name="fecha" value="<?php echo e($item->fecha); ?>"><br>
                            Nº del aula: <input type="string" name="aula" value="<?php echo e($item->aula); ?>"><br>
                            Hora de la incidencia: <input type="time" name="hora" value="<?php echo e($item->hora); ?>"><br>
                            Código del equipo del aula: HZ<input type="string" name="equipo" value="<?php echo e($item->codigo_equipo); ?>"><br>
                            Código de incidencia: <input type="number" min="1" max="10" name="inc" value="<?php echo e($item->codigo_incidencia); ?>"><br>
                            <input type="submit" value="Enviar">
                        </form>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                </div>
            </div>
            <br>
            <div class="card">
            <div class="card-header"><h3>Códigos de averías/ Matxuren kodigoak</h3></div>
            <div class="card-body">    
                <p>1……………….No se enciende la CPU/ CPU ez da pizten</p>
                <p>2……………….No se enciende la pantalla/Pantaila ez da pizten</p>
                <p>3……………….No entra en mi sesión/ ezin sartu nere erabiltzailearekin</p>
                <p>4……………….No navega en Internet/ Internet ez dabil</p>
                <p>5……………….No se oye el sonido/ Ez da aditzen</p>
                <p>6……………….No lee el DVD/CD</p>
                <p>7……………….Teclado roto/ Tekladu hondatuta</p>
                <p>8……………….No funciona el ratón/Xagua ez dabil</p>
                <p> 9……………….Muy lento para entrar en la sesión/oso motel dijoa</p>
                <p>10…………………………………………………………………………………..(Otros) Especifica</p>
            </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/melanie/practica/resources/views/mod_incidencia.blade.php ENDPATH**/ ?>