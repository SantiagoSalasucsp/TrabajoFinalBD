<?php
    include("conexion.php");
    $sql = "SELECT a.modelo, d.aeropuerto FROM aviones a INNER JOIN Destinos d ON a.id_Destino_Destinos=d.id_Destino";
    $resultado = mysqli_query($conexion, $sql);
?>

<h1>modelo-aeropuerto</h1>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>modelos</th>
            <th>aeropuerto</th>
        </tr>
    </thead>  
    <tbody>
        <?php
            while($filas = mysqli_fetch_assoc($resultado)){
        ?>
        <tr>
            <td><?php echo htmlspecialchars($filas['id_Destino']); ?></td>
            <td><?php echo htmlspecialchars($filas['modelo']); ?></td>
            <td><?php echo htmlspecialchars($filas['aeropuerto']); ?></td>
        </tr>
        <?php
            }
            mysqli_close($conexion);
        ?>
    </tbody>      
</table>
<a href="index.php">Regresar</a>
