<?php
    include("conexion.php");
    $sql = "SELECT * FROM `Equipaje`";
    $resultado = mysqli_query($conexion, $sql);
?>

<h1>Equipajes</h1>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Peso</th>
            <th>id_cliente</th>
        </tr>
    </thead>  
    <tbody>
        <?php
            while($filas = mysqli_fetch_assoc($resultado)){
        ?>
        <tr>
            <td><?php echo htmlspecialchars($filas['id_Equipaje']); ?></td>
            <td><?php echo htmlspecialchars($filas['peso']); ?></td>
            <td><?php echo htmlspecialchars($filas['id_cliente_Cliente']); ?></td>
        </tr>
        <?php
            }
            mysqli_close($conexion);
        ?>
    </tbody>      
</table>
<a href="index.php">Regresar</a>
