<?php
include("conexion.php");
$con = conectar();

$sql = "SELECT *  FROM usuarios";
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> Crud reservas</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>

<body>
    <br>
    <br>
    
    <center>
    <div class="col-md-8">
        <table class="table bg-light font-monscape">
            <tr>
                <th scope="col" >id_reserva</th>
                <th scope="col">Correo</th>
                <th scope="col">telefono</th>
                <th scope="col">Fecha de ingreso</th>
                <th scope="col">Hora de ingreso</th>
                <th scope="col">Estadia</th>
                <th scope="col">Habitacion</th>
                <th scope="col"> Acción</th>
                <th scope="col"> Acción</th>
            </tr>
            </thead>


            <?php
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <th><?php echo $row['id_reserva'] ?></th>
                    <th><?php echo $row['correo'] ?></th>
                    <th><?php echo $row['telefono'] ?></th>
                    <th><?php echo $row['fecha_ingreso'] ?></th>
                    <th><?php echo $row['hora_ingreso'] ?></th>
                    <th><?php echo $row['tiempo_estadia'] ?></th>
                    <th><?php echo $row['nombre_habitacion'] ?></th>
                    <th><a href="actualizar.php?id=<?php echo $row['id_reserva'] ?>" class="btn btn-info">Editar</a></th>
                    <th><a href="delete.php?id=<?php echo $row['id_reserva'] ?>" class="btn btn-danger">Eliminar</a></th>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>
    </center>
</body>

</html>