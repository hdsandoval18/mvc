<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitaciones</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/84fcd47960.js" crossorigin="anonymous"></script>
    <script defer src="java.js"></script>
</head>

<body>
     <!--MENÚ NAVBAR RESPONSIVE-->

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
    
    <!--LOGO-->
    <img src="IMG/logo.png" class="logo" alt="" />

<!--HABITACIONES-->
<div class="contenedor">
<div class="titulo">
    <br>
    <br>
    <h1> Habitaciones desde $ 40.000</h1>

  </div>
<div class="container">
    
    <div class=" card card-1">
        <div class="slider">
            <ul>
              <li> <img src="IMG/junior suite1.jpg" alt="" style="height: 300px; width: 450px;"></li>
              <li> <img src="IMG/junior suite2.jpg" alt="" style="height: 300px; width: 450px; "> </li>
              <li> <img src="IMG/junior suite3.jpeg" alt="" style="height: 300px; width: 450px; "> </li>
              <li> <img src="IMG/Img3.jpg" alt="" style="height: 300px; width: 450px; "> </li>
              
            </ul>
            <br>
            <a href="http://localhost:8080/Mvc/view/template/habitaciones/junior_suite.php">
            <h2>Suite junior</h2>
          </a>
            <br>
            <br>
            <p class="hora_adicional">Hora adicional: <br>
              Después de (8) horas.......$10.000</p>
          </div>
        </div>
      <div class="card card-2">
        <div class="slider">
            <ul>
              <li> <img src="IMG/suite renovada1.jpg" alt="" height="300px" width="450px"> </li>
              <li> <img src="IMG/suite renovada2.jpg" alt="" height="300px" width="450px"> </li>
              <li> <img src="IMG/suite renovada3.jpg" alt="" height="300px" width="450px"> </li>
              <li> <img src="IMG/suite renovada5.jpg" alt="" height="300px" width="450px"> </li>
            </ul>
            <br>
            <a href="http://localhost:8080/Mvc/view/template/habitaciones/suite_remode.php">
            <h2>Suites remodeladas</h2>
          </a>
            <br>
            <br>
            <p class="hora_adicional">Hora adicional: <br>
              Después de (8) horas.......$15.000</p>
          </div>
        </div>
     <div class="card card-3">
        <div class="slider">
            <ul>
              <li> <img src="IMG/suite especial1.jpg" alt="" height="300px" width="600px"> </li>
              <li> <img src="IMG/suite especial2.jpg" alt="" height="300px" width="450px"> </li>
              <li> <img src="IMG/suite especial3.jpg" alt="" height="300px" width="450px"> </li>
              <li> <img src="IMG/suite especial4.jpeg" alt="" height="300px" width="450px"> </li>
            </ul>
            <br>
            <a href="http://localhost:8080/Mvc/view/template/habitaciones/suites_espe.php">
            <h2>Suites especiales</h2>
          </a>
            <br>
            <br>
            <p class="hora_adicional">Hora adicional: <br>
              Después de (8) horas.......$15.000</p>
          </div>
     </div>
     <div class="card card-4">
        <div class="slider1">
            <ul>
              <li> <img src="IMG/suite con piscina.jpg" alt="" height="300px" width="450px"> </li>
            </ul>
            <br>
            <a href="http://localhost:8080/Mvc/view/template/habitaciones/suite_piscina.php">
            <h2>Suite con piscina</h2>
          </a>
            <br>
            <br>
            <p class="hora_adicional">Hora adicional: <br>
              Después de (6) horas.......$40.000</p>
          </div>
     </div>

</div>




</div>
</div>
  <br>
  <br>



 <!--FOOTER-->
 <footer class="pie-pagina">
    <div class="grupo-1">
      <div class="box">
        <figure class="logo-footer">
          <a href="#">
            <img src="img/logo.png" alt="Logo de SLee Dw">
          </a>
        </figure>
      </div>
      <div class="box2">
        <div class="parrafo">
          <h2>Motel sol y luna. <br> <br>
            Donde el amor  <br> no tiene horario 
          </h2>
       
        </div>
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
      <p>&copy; 2022  Motel Sol & Luna <br> <b>Todos los derechos reservados </b> </p> 
    </div>
  </footer>  
</body>
</html>