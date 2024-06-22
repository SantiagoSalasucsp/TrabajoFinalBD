<?php
    include("conexion.php");
    $sql = "SELECT * FROM `sucursales`";
    $resultado = mysqli_query($conexion, $sql);
?>

<h1>Gerentes</h1>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>ubicacion</th>
            <th>numero de aviones</th>
        </tr>
    </thead>  
    <tbody>
        <?php
            while($filas = mysqli_fetch_assoc($resultado)){
        ?>
        <tr>
            <td><?php echo htmlspecialchars($filas['id_sucursal']); ?></td>
            <td><?php echo htmlspecialchars($filas['ubicacion']); ?></td>
            <td><?php echo htmlspecialchars($filas['numero_de_aviones']); ?></td>
        </tr>
        <?php
            }
            mysqli_close($conexion);
        ?>
    </tbody>      
</table>
<a href="index.php">Regresar</a>
