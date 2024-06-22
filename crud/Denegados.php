<?php
    include("conexion.php");
    $sql = "SELECT * FROM `denegados`";
    $resultado = mysqli_query($conexion, $sql);
?>

<h1>Denegados</h1>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Motivo</th>
            <th>nombre</th>
        </tr>
    </thead>  
    <tbody>
        <?php
            while($filas = mysqli_fetch_assoc($resultado)){
        ?>
        <tr>
            <td><?php echo htmlspecialchars($filas['id_cliente_denegado']); ?></td>
            <td><?php echo htmlspecialchars($filas['Motivo']); ?></td>
            <td><?php echo htmlspecialchars($filas['nombre']); ?></td>
        </tr>
        <?php
            }
            mysqli_close($conexion);
        ?>
    </tbody>      
</table>
<a href="index.php">Regresar</a>
