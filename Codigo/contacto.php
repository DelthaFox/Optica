

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Visión Óptima - reservas</title>
  <link rel="stylesheet" href="contacto.css">
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
  </nav><Br><br><br>
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
      <input type="email" name="correo" placeholder="Correo"  ><br>
      </div> 

      <div class="mensaje">
      <label for="mensaje"><a>Asunto:</a></label> 
      <input type="text" name="asunto" placeholder="Asunto"  ><br>
      </div> 

      <div class="mensaje">
      <label for="mensaje"><a>Mensaje:</a></label><br>
      <textarea id="mensaje" name="mensaje" rows="4" cols="40" placeholder="mensaje"></textarea>
      </div>
     
    <input type="submit" class="btn" name="Enviar" value="Enviar">
    <input type="hidden" name="_next" value="http://localhost/TRABAJO/contacto.php">
      <input type="hidden" name="_captcha" value="false">
    </form>
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

      
</html>