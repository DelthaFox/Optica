<?php
	$servidor="localhost";
	$usuario="root";
	$clave="";
	$baseDeDatos="optica";

	$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

	if(!$enlace){
		echo"Error en la conexion con el servidor";
	}
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Visión Óptima - reservas</title>
  <link rel="stylesheet" href="agendar.css">
  <script src="productos.js"></script>
</head>
<body>
<header>
    <div class="img">
  
        <div class="container"> 
         <div class="header"> 

          <img src="fotos/logo.png" alt="Logo de Visión Óptima" class="logo">
        </div>
          <div class="start">

            <h1 class="title2">Visión Óptima</h1>
            <h3 class="introduce"> Abriendo tus ojos al mundo con claridad y excelencia</h3>
          </div>
          </div>
       </div>
  </header>

  <nav>
    <ul>
      <a href="portada.html"><li>Home</li></a>
      <a href="agendar hora.php"><li>Reserva de horas</li></a>
      <a href="productos.html"><li>Productos</li></a>
      <a href="sustentabilidad.html"><li>Sustentabilidad</li></a>
      <a href="sucursales.html"><li>Sucursales</li></a>
      <a href="quejas.php"><li>quejas</li></a>
      <a href="contacto.php"><li>contacto</li></a>
    </ul>
  </nav>
<br><br><br><br>
  <aside>
    <img src="fotos/promocion.png"><br>
  </aside>

  <article>
  <!-- Contenido principal de la página -->
  <div class="contenedor">
    <form action="https://formsubmit.co/fiumba361@gmail.com" class="formulario" id="formulario" name="formulario" method="POST">

      <div class="contenedor-inputs">

        <div class="mensaje">
        <label for="mensaje"><a>Nombre y apellido:</a></label>  
        <input type="text" name="nombre" placeholder="Nombre y apellido"  ><br>
        </div> 

      <div class="mensaje">
      <label for="mensaje"><a>Correo:</a></label>  
      <input type="email" name="correo" placeholder="Correo@gmail.com"  ><br>
      </div> 

      <div class="mensaje">
        <label for="mensaje"><a>telefono:</a></label>  
        <input type="tel" name="telefono" placeholder="+569********"  ><br>
        </div> 

        <div class="mensaje">
            <label for="mensaje"><a>dia de atencion:</a></label>  
            <input type="date" name="dia" placeholder="Correo"  ><br>
            </div> 

            <div class="mensaje">
            <label for="mensaje"><a>Sucursal:</a></label>
        <select id="sucursal" name="sucursal" required>
          <option value="">Selecciona una sucursal</option>
          <option value="Pudahuel">Pudahuel</option>
          <option value="San Bernardo">San Bernardo</option>
          <option value="Maipu">Maipu</option>
          <option value="Huechuraba">Huechuraba</option>
        </select>
        </div><br>

        <input type="submit" class="btn" name="agendar" value="agendar">

      </div><br><br> 
      <input type="hidden" name="_next" value="http://localhost/TRABAJO/agendar%20hora.php">
      <input type="hidden" name="_captcha" value="false">
      
    </form>
  </div><br><br><br><br>
  <div class="informacion">
      <h3>INFORMACION IMPORTANTE</h3><br><br>
      <tr>
          <td><a>* La hora de atencion es por orden de de llegada</a></td><br><br>
          <td><a>* El horario de atención del tecnólogo médico es desde las 14:00 horas hasta 18:00 horas, delunes a viernes.</a></td><Br><br>
          <td><a>* El chequeo visual es gratis por la compra de un lente óptico. En caso contrario, el chequeovisual tiene un costo de $7.000 por persona.</a></td><Br><br>
      </tr>
      </div> 
</article>

<br><br><br><br>

  <footer>
    <div class="container">
      <div class="footercolumna">
        <h4>Contacto</h4>
        <ul>
          <li><img src="fotos/wtsp.png" alt="wtsp" class="wtsp"><a>+56945793182</a></li>
          <li><a>VisionOptima@gmail.com</a></li>
        </ul>
      </div>
  
      <div class="footercolumna">
        <h4>Servicios</h4>
        <ul>
          <li><a>Convenios con empresas</a></li>
          <li><a>Operativos oftalmológicos</a></li>
          <li><a>Visitas a domicilio</a></li>
          <li><a>Garantía de 3 meses</a></li>
        </ul>
      </div>
  
      <div class="footercolumna">
        <h4>Redes sociales</h4>
        <ul>
          <li><a><img src="fotos/insta.png" class="insta">INSTAGRAM</a></li>
          <li><a><img src="fotos/face.png" alt="face" class="face">FACEBOOK</a></li>
          <li><a><img src="fotos/twitter.png" alt="twitter" class="twitter">TWITTER</a></li>
        </ul>
      </div>
    </div>
  </footer>
</body>
</form>
</html>
