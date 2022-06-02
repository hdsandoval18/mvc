<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="../css/reserva.css">
</head>
<body>
<div class="form">
            <h2 class="form_title">Confirme su reserva</h2>

            <div class="form_container">
                <h4>Ingresar correo o numero de telefono para recibir el codigo de la reserva.</h4>
                <hr>
                <center>
                <h1>Ingresar datos</h1>
                </center>
                <div class="form_group_1">
                    <form action="../CRUD_1/insertar.php" method="POST">
                        
                    <input type="email"    placeholder="Correo"          name="correo" required>
                    <input type="telefono" placeholder="Telefono"        name="telefono" required>
                    <input type="date"     placeholder="Fecha ingreso"   name="fecha_ingreso" required>
                    <input type="time"     placeholder="Hora ingreso"    name="hora_ingreso" required>
                    <select class="form_select" aria-label="Default select example" name="nombre_habitacion">
                    <option >Sencilla</option>
                    <option >Suite Jacuzzi</option>
                    <option >Suite Especial</option>
                     </select>
                     <select class="form_select" aria-label="Default select example" name="tiempo_estadia">
                    <option > 3 horas</option>
                    <option >5 horas</option>
                    <option >8 horas</option>
                     </select>
                    <br>
                    <br>
                    <center>
                    <input type="submit" class="form_submit" value="Confirmar la reserva"> 
                    </center>
                    </form>
                </div>

            </div>
        </div>
</body>
</html>