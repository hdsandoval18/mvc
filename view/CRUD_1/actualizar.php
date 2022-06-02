<?php
include("conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM usuarios WHERE id_reserva='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./style.css" rel="stylesheet">
    <title>Actualizar</title>

</head>

<body>
    <div class="form">
        <div class="form_container">
            <div class="form_group_1">
                <form action="update.php" method="POST">

                    <input type="hidden" name="correo" value="<?php echo $row['id_reserva']  ?>">
                    <input type="email" placeholder="Correo" name="correo" value="<?php echo $row['correo']  ?>" required>
                    <input type="telefono" placeholder="Telefono" name="telefono" value="<?php echo $row['telefono']  ?>">
                    <input type="text" placeholder="Tipo habitacion" name="nombre_habitacion" value="<?php echo $row['nombre_habitacion']  ?>">

                  <center>
                    <input type="submit" class="form_submit" value="Actualizar"> 
                    </center>
                </form>
            </div>
        </div>
    </div>
</body>

</html>