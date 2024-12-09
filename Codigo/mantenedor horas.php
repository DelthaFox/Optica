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
  <link rel="stylesheet" href="mantenedor.css">
</head>
<body>

  <article>  
    <br> <center>
  <b><h2>Horas agendadas </b></h2><br>
  
  <form action="#" class="formulario" id="formulario" name="formulario" method="POST">
 
  <tr>
             <td>Fecha: </td>
            <td><input type="date" name="dia" placeholder="Fecha"></td>
        </tr>
        <td><input type="submit" class="btn" name="consultar" value="consultar"></td>


  <div class="tabla">
    <table>
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Fono</th>
            <th>Dia</th>
            <th>Sucursal</th>
        </tr>
</body>
        <?php
       if(isset($_POST['consultar'])){
        $consul=($_POST['dia']);
        $consulta = "SELECT * FROM horasatencion WHERE Dia ='$consul'";
        $ejecutarConsulta = mysqli_query($enlace, $consulta);
        $verFilas= mysqli_num_rows($ejecutarConsulta);
        $fila = mysqli_fetch_array($ejecutarConsulta);
                if(!$ejecutarConsulta){
                    echo "Error en la consulta.";
                }else{
                    if($verFilas < 1){
                        echo "<tr><td>Sin registros</td></tr>";
                    }else{
                        for($i = 0; $i < $verFilas; $i++){
                            echo '
                                <tr>
                                    <td>'.$fila[0].'</td>
                                    <td>'.$fila[1].'</td>
                                    <td>'.$fila[2].'</td>
                                    <td>'.$fila[3].'</td>
                                    <td>'.$fila[4].'</td>
                                </tr>
                            ';
                            $fila = mysqli_fetch_array($ejecutarConsulta);
                        }
                    }
                }
            }else{
                echo "El campo 'dia' no está definido.";
            }
        
        ?>
    </table>
</div>
      
</html>