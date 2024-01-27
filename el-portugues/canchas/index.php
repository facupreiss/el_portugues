<?php
include_once "headerCanchas.php"
?>


<?php

if(mysqli_connect('localhost','root','','carrito')){
				//servidor, usuario servidor, contraseña, nombre de la base de datos		
	
	echo "<h1 class='centrar predio letrasubtitulo'>Listado de canchas</h1>";
	
	$con = mysqli_connect('localhost','root','','carrito');
	//guardo la conexion en una variable
	
	$consulta = "SELECT codigoProducto, nombreProducto, precioProducto, iluminacionProducto, descripcionProducto, fotoProducto FROM productos ";
		//guardo la "consulta SQL" en otra variable
		
		if($resultado = mysqli_query($con, $consulta)){
			//guardo el resultado de la "consulta SQL"
			while($fila = mysqli_fetch_array($resultado)){
				//guardo cada fila de la "consulta SQL"
				echo "<div>";
					echo "<h3 class='centrar mt-5'>Cancha: $fila[nombreProducto]</a></h3>";
							//imprimo nombre del producto
					echo "<p>Precio: $fila[precioProducto] </p>";
							//imprimo el precio
					echo "<p>Iluminacion: $fila[iluminacionProducto] </p>";
							//imprimo el iluminacion		
					echo "<p>Descripcion: $fila[descripcionProducto] </p>";
							//imprimo la descripcion
					echo "<span class='centrar mb-4'><img src=fotos/$fila[fotoProducto] /></span>";
							//imprimo la imagen
				echo "</div>";
				
			}
		}
	}


?>

<?php
include_once "../footer.php"
?>