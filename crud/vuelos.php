<?php
    include("conexion.php");
    $sql = "SELECT v.id_vuelo, d.ciudad FROM Vuelos v INNER JOIN Destinos d ON d.id_Destino = v.id_Destino_Destinos";
    $resultado = mysqli_query($conexion, $sql);
?>

<h1>Vuelos</h1>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Ciudad</th>
        </tr>
    </thead>  
    <tbody>
        <?php
            while($filas = mysqli_fetch_assoc($resultado)){
        ?>
        <tr>
            <td><?php echo htmlspecialchars($filas['id_vuelo']); ?></td>
            <td><?php echo htmlspecialchars($filas['ciudad']); ?></td>
        </tr>  <!-- Cerrando la fila de la tabla -->
        <?php
            }
            mysqli_close($conexion);
        ?>
    </tbody>      
</table>
<a href="index.php">Regresar</a>
