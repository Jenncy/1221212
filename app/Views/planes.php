<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Planes</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Pago</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($datos as $plan):
            ?>
            <tr>
                <td><?php echo $plan['plan_id'];?></td>
                <td><?php echo $plan['nombre'];?></td>
                <td><?php echo $plan['pago_mensual'];?></td>
            </tr>
            <?php
                endforeach;
            ?>
        </tbody>
    </table>
</body>
</html>