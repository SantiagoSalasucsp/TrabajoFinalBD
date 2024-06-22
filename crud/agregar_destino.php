<html>
<head>
    <title>AGREGAR destino</title>
</head>
<body>
    <?php
        if(isset($_POST['enviar'])){
            $id = htmlspecialchars($_POST['id']);
            $aeropuerto = htmlspecialchars($_POST['aeropuerto']);
            $pais = htmlspecialchars($_POST['pais']);
            $ciudad = htmlspecialchars($_POST['ciudad']);
            $numero = htmlspecialchars($_POST['numero']);
            
            include("conexion.php");


            $sql_verificar = "SELECT id_Destino FROM Destinos WHERE id_Destino = '$id'";
            $resultado_verificar = mysqli_query($conexion, $sql_verificar);
            if (mysqli_num_rows($resultado_verificar) > 0) {
                echo "<script language='JavaScript'>
                    alert('El ID del destino ya existe en la BD');
                    location.assign('agregar_destino.php');
                    </script>";
            } else {

                $sql_insertar = "INSERT INTO Destinos(id_Destino, aeropuerto, pais, ciudad, numero_aviones)
                    VALUES ('$id', '$aeropuerto', '$pais', '$ciudad', '$numero')";
                $resultado = mysqli_query($conexion, $sql_insertar);
                if ($resultado) {
                    echo "<script language='JavaScript'>
                        alert('Los datos fueron ingresados correctamente a la BD');
                        location.assign('index.php');
                        </script>";
                } else {
                    echo "<script language='JavaScript'>
                        alert('ERROR: Los datos no fueron ingresados a la BD');
                        location.assign('agregar_destino.php');
                        </script>";
                }
            }
            mysqli_close($conexion);

        } else {
    ?>
    <h1>Agregar nuevo destino</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label>ID:</label>
        <input type="text" name="id" required><br>
        <label>Aeropuerto:</label>
        <input type="text" name="aeropuerto" required><br>
        <label>Pais:</label>
        <input type="text" name="pais" required><br>
        <label>Ciudad:</label>
        <input type="text" name="ciudad" required><br>
        <label>Número de aviones:</label>
        <input type="text" name="numero" required><br>
        <input type="submit" name="enviar" value="AGREGAR">
        <a href="index.php">Regresar</a>
    </form>
    <?php
        }
    ?>
</body>
</html>
