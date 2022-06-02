<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Junior Suite</title>
  <link rel="stylesheet" href="../habitaciones/junior_suite.css">
  <script src="https://kit.fontawesome.com/84fcd47960.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
  <!--MENÚ NAVBAR RESPONSIVE-->
  <header class="header">
    <nav class="nav">
      <button class="nav-toggle" aria-label="Abrir menú">
        <i class="fa-solid fa-bars"></i>
      </button>

      <!--BARRA NAVBAR-->
      <div class="navbar">
        <ul class="nav-menu">
          <li class="nav-menu-item"><a href="http://localhost:8080/Mvc/view/inicio.php">Inicio</a></li>
          <li class="nav-menu-item"><a href="http://localhost:8080/Mvc/view/template/habitaciones/habitaciones.php">Habitaciones</a></li>
          <li class="nav-menu-item"><a href="http://localhost:8080/Mvc/view/template/comidas.php">Comidas</a></li>
          <li class="nav-menu-item"><a href="http://localhost:8080/Mvc/view/template/ubicacion.php">Ubicación</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <!--LOGO-->
  <img src="IMG/logo.png" class="logo" alt="" />


  <!--SERVICIOS-->
  <center>
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="../habitaciones/IMG/junior suite1.jpg" alt="First slide" style="height: 800px; width: 800px;">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="../habitaciones/IMG/junior suite2.jpg" alt="Second slide" style="height: 800px; width: 800px;">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="../habitaciones/IMG/junioe_suite3.jpg" alt="Third slide" style="height: 800px; width: 800px;">
      </div>
    </div>
   
  </div>
</center>
  <br>
  <div class="container1">
    <div class="grid-text">
      <div class="titulo-servi">
        Junior Suite
      </div>
      <hr>

      <div class="titulo-servi">
        Servicios
      </div>
      <div class="container">
        <div class="card">
          <div class="card-text">
            <i class="ICONS"><img src="img/tv.png" alt=""></i>
            <p>TV</p>
          </div>
        </div>
        <div class="card">
          <div class="card-text">
            <i class="ICONS"><img src="../habitaciones/IMG/Restaurant.png" alt=""></i>
            <p>Servicio de comida</p>
          </div>
        </div>
        <div class="card">
          <div class="card-text">
            <i class="ICONS"><img src="img/Wifi.png" alt=""></i>
            <p>Wifi</p>
          </div>
        </div>
        <div class="card">
          <div class="card-text">
            <i class="ICONS"> <img src="img/tarjeta.png" alt=""></i>
            <p>Pago con tarjetas</p>
          </div>
        </div>
        <div class="card">
          <div class="card-text">
            <i class="ICONS"> <img src="img/aire.png" alt="" width="35px"></i>
            <p>Aire acondicionado</p>
          </div>
        </div>
      </div>
      <hr>
      <div class="titulo-servi">
        Siempre ten en cuenta
      </div>
      <div class="text-check">
        <p>
          <img class="check-icon" src="img/check.png" align="center">Una vez hecha la reserva,
          tu habitación se guardará sólo por cierta cantidad
          de minutos. Ese es el tiempo máximo que tienes para llegar.
        </p>
        <p>
          <img class="check-icon" src="img/check.png" align="center">Solo para mayores de edad (+18).
        </p>
        <p>
          <img class="check-icon" src="img/check.png" align="center">Puedes estar tranquilo, tu información está a salvo
          con nosotros.
        </p>
      </div>
      <hr>
    </div>
    <form class="form">
      <h2 class="form_title">Detalles de la reserva</h2>

      <div class="form_container">

        <div class="form_group">
          <label for="fecha" class="form_label">Cuando</label>
          <input type="text" id="fecha" class="form_input" placeholder="Ahora(60 minutos de espera)" disabled>

        </div>
        <div class="form_group">
          <label for="habitacion" class="form_label">Habitacion</label>
          <select class="form_select" aria-label="Default select example">
            <option selected>Sencilla</option>
            <option value="1">Suite Jacuzzi</option>
            <option value="2">Suite Especial</option>

          </select>

        </div>
        <div class="form_group">
          <label for="estadia" class="form_label">Estadia</label>
          <select class="form_select" aria-label="Default select example">
            <option selected>3 horas</option>
            <option value="1">12 horas</option>
          </select>

        </div>
        <div class="form_boton" style="text-align: center;">
          <a href="http://localhost:8080/mvc/view/template/indexI.php"
            style="text-align: center; align-self: center; height: 60px; color: white;"><button type="submit"
              class="form_submit" value="Solicita la reserva">Solicita tu reserva</a>
        </div>
      </div>
    </form>
  </div>
  <!--FOOTER-->
  <footer class="pie-pagina">
    <div class="grupo-1">
      <div class="box">
        <figure class="logo-footer">
          <a href="#">
            <img src="img/logo.png" alt="">
          </a>
        </figure>
      </div>
      <div class="box2">
        <h2>Motel sol y luna. <br> <br>
          Donde el amor <br> no tiene horario
        </h2>
      </div>
      <div class="box3">
        <h2>Contactar</h2>
        <div class="red-social">
          <a href="#" class="fa fa-facebook" style="font-size: 25px;"></a>
          <a href="#" class="fa fa-instagram" style="font-size: 25px;"></a>
          <a href="#" class="fa fa-whatsapp" style="font-size: 25px;"></a>
        </div>
      </div>
    </div>
    <div class="pie-pagina2">
      <p>&copy; 2022 Motel Sol & Luna <br> <b>Todos los derechos reservados </b> </p>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script defer src="java.js"></script>
</body>

</html>