


<html>
    
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
<body>
<div class="container">
        El administrador ha añadido informacion a la incidencia siguiente: 
        <table border="1px solid black">
                <tr>
                    <th>Fecha</th>
                    <th>Aula</th>
                    <th>Hora</th>
                    <th>Código del equipo</th>
                    <th>Código de la incidencia</th>
                    <td>ID del profesor</td>
                </tr>
                <tr>
                    <td><?php echo e($incidencia['fecha']); ?></td>
                    <td><?php echo e($incidencia['aula']); ?></td>
                    <td><?php echo e($incidencia['hora']); ?></td>
                    <td><?php echo e($incidencia['codigo_equipo']); ?></td>
                    <td><?php echo e($incidencia['codigo_incidencia']); ?></td>
                    <td><?php echo e($incidencia['profesorId']); ?></td>
                </tr>
        </table>
        Comentario del administrador: <?php echo e($incidencia['informacion']); ?>

</div>
</body><?php /**PATH /home/melanie/practica/resources/views/emailMod.blade.php ENDPATH**/ ?>