<html>

<head>
    <title>AGREGAR</title>
</head>

<body>

    <?php
        if(isset($_POST['enviar'])){
            $id=$_POST['id'];
            $millas=$_POST['millas'];
            $nombre=$_POST['nombre'];
            $primer=$_POST['primer'];
            $segundo=$_POST['segundo'];
            $sexo=$_POST['sexo'];
            $id_vuelos=$_POST['id_vuelos'];

            include ("conexion.php");

            $sql="INSERT INTO Cliente(id_cliente, millas_acumuladas, nombres, primer_apellido, segundo_apellido, sexo, id_vuelo_Vuelos)
            Values ('".$id."','".$millas."','".$nombre."','".$primer."','".$segundo."','".$sexo."','".$id_vuelos."')";

            $resultado=mysqli_query($conexion,$sql);
            if($resultado){
                echo "<script language='JavaScript'>
                    alert('los datos fueron ingresados correctamante a la BD');
                    location.assign ('index.php');
                    </script>";
            }else{
                echo "<script language='JavaScript'>
                    alert('ERROR:los datos no fueron ingresados a la BD');
                    location.assign ('index.php');
                    </script>";

            }
            mysqli_close($conexion);

        }else{

    ?>

    <h1>Agregar nuevo cliente</h1>
    <from action="<？=$_SERVER['PHP_SELF']？>" method="post">

        <lable>ID:</lable>
        <input type="text" name="id"><br>
        <lable>Millas acumuladas:</lable>
        <input type="text" name="millas"><br>
        <lable>Nombre:</lable>
        <input type="text" name="nombre"><br>
        <lable>primer_apellido:</lable>
        <input type="text" name="primer"><br>
        <lable>segundo_apellido:</lable>
        <input type="text" name="segundo"><br>
        <lable>sexo:</lable>
        <input type="text" name="sexo"><br>
        <lable>id_vuelo_Vuelos:</lable>
        <input type="text" name="id_vuelos"><br>



        <input type="submit" name="enviar" value="AGREGAR">
        <a href="index-php">Regresar</a>
    </from>
    <?php
        }       
    ?>
</body>

</html>