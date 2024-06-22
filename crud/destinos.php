<?php
    include("conexion.php");
    $sql = "SELECT * FROM Destinos";
    $resultado = mysqli_query($conexion, $sql);
?>

<h1>Destinos Disponibles</h1>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Aeropuerto</th>
            <th>País</th>
            <th>Ciudad</th>
            <th>Número de Aviones</th>
        </tr>
    </thead>  
    <tbody>
        <?php
            while($filas = mysqli_fetch_assoc($resultado)){
        ?>
        <tr>
            <td><?php echo htmlspecialchars($filas['id_Destino']); ?></td>
            <td><?php echo htmlspecialchars($filas['aeropuerto']); ?></td>
            <td><?php echo htmlspecialchars($filas['pais']); ?></td>
            <td><?php echo htmlspecialchars($filas['ciudad']); ?></td>
            <td><?php echo htmlspecialchars($filas['numero_aviones']); ?></td>
        </tr>
        <?php
            }
            mysqli_close($conexion);
        ?>
    </tbody>      
</table>
<a href="index.php">Regresar</a>
