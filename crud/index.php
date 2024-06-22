<html>

<head>
    <title>aeropuerto</title>
</head>

<body>
    <?php
        include("conexion.php");
        $sql = "SELECT * FROM Cliente";
        $resultado = mysqli_query($conexion, $sql);
    ?>

    <h1>aeropuerto</h1>
    <a href="agregar.php">Nuevo pasajero</a><br><br>
    <a href="destinos.php">Ver Destinos</a><br><br>
    <a href="agregar_destino.php">Agregar Destino</a><br><br>
    <a href="gerentes.php">ver los gerentes</a><br><br>
    <a href="equipaje.php">ver equipaje</a><br><br>
    <a href="verdequie.php">cuanto pesa tu equipaje</a><br><br>
    <a href="sucursales.php">sucursales</a><br><br>
    <a href="vuelos.php">Vuelos</a><br><br>
    <a href="Denegados.php">Ver los denegados</a><br><br>
    <a href="modelo-aeropuerto.php">los modelos van a donde</a><br><br>
    <table >
        <thead>
            <tr>
                <th>ID</th>
                <th>MILLAS</th> 
                <th>Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Sexo</th>
                <th>ID Vuelos</th>
                <th>Acciones</th>
            </tr>
        </thead>  
        <tbody>
            <?php
                while($filas = mysqli_fetch_assoc($resultado)){
            ?>
            <tr>
                <td><?php echo htmlspecialchars($filas['id_cliente']); ?></td>
                <td><?php echo htmlspecialchars($filas['millas_acumuladas']); ?></td>
                <td><?php echo htmlspecialchars($filas['nombres']); ?></td>
                <td><?php echo htmlspecialchars($filas['primer_apellido']); ?></td>
                <td><?php echo htmlspecialchars($filas['segundo_apellido']); ?></td>
                <td><?php echo htmlspecialchars($filas['sexo']); ?></td>
                <td><?php echo htmlspecialchars($filas['id_vuelo_Vuelos']); ?></td>
                <td>
                    <?php echo "<a href=' '>EDITAR</a>"; ?>
                    -
                    <?php echo "<a href=' '>ELIMINAR</a>"; ?>

                </td>
            </tr>
            <?php
                }
                
            ?>
        </tbody>      
    </table> 
    <?php
        mysqli_close($conexion);
    ?>  
</body>

</html>
