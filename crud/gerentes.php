<?php
    include("conexion.php");
    $sql = "SELECT * FROM `gerente` ORDER BY `id_gerente` ASC";
    $resultado = mysqli_query($conexion, $sql);
?>

<h1>Gerentes</h1>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Fecha_naci</th>
            <th>id_sucursal</th>
        </tr>
    </thead>  
    <tbody>
        <?php
            while($filas = mysqli_fetch_assoc($resultado)){
        ?>
        <tr>
            <td><?php echo htmlspecialchars($filas['id_gerente']); ?></td>
            <td><?php echo htmlspecialchars($filas['fecha_nacimiento']); ?></td>
            <td><?php echo htmlspecialchars($filas['id_sucursal_sucursales']); ?></td>
        </tr>
        <?php
            }
            mysqli_close($conexion);
        ?>
    </tbody>      
</table>
<a href="index.php">Regresar</a>
