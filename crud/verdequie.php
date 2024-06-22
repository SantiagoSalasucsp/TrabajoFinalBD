<?php
    include("conexion.php");
    $sql = "SELECT e.peso, c.nombres FROM Equipaje e INNER JOIN Cliente c ON e.id_cliente_Cliente=c.id_cliente";
    $resultado = mysqli_query($conexion, $sql);
?>

<h1>cuanto peso traes</h1>
<table border="1">
    <thead>
        <tr>

            <th>Peso</th>
            <th>nombre</th>
        </tr>
    </thead>  
    <tbody>
        <?php
            while($filas = mysqli_fetch_assoc($resultado)){
        ?>
        <tr>
            
            <td><?php echo htmlspecialchars($filas['peso']); ?></td>
            <td><?php echo htmlspecialchars($filas['nombres']); ?></td>
        </tr>
        <?php
            }
            mysqli_close($conexion);
        ?>
    </tbody>      
</table>
<a href="index.php">Regresar</a>
