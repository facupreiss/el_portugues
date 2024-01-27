<?php
if(mysqli_connect('localhost','root','','carrito')){
	
	$con = mysqli_connect('localhost','root','','carrito');
	//guardo la conexion en una variable
	
	if(isset($_GET["catategoria"])){
		$codigo = $_GET["catategoria"];
		
		$consulta = "SELECT codigoProducto, nombreProducto, precioProducto, iluminacionProducto, descripcionProducto, fotoProducto FROM productos WHERE categoriaProducto='$codigo'";
		//guardo la "consulta SQL" en otra variable
		
		if($resultado = mysqli_query($con, $consulta)){
			//guardo el resultado de la "consulta SQL"
			while($fila = mysqli_fetch_array($resultado)){
				//guardo cada fila de la "consulta SQL"
				echo "<div>";
					echo "<h2>Cancha: $fila[nombreProducto]</a></h2>";
							//imprimo nombre del producto
					echo "<p>Precio: $fila[precioProducto] </p>";
							//imprimo el precio
					echo "<p>Iluminacion: $fila[iluminacionProducto] </p>";
							//imprimo el iluminacion		
					echo "<p>Descripcion: $fila[descripcionProducto] </p>";
							//imprimo la descripcion
					echo "<img src=fotos/$fila[fotoProducto] />";
							//imprimo la imagen
				echo "</div>";
				
			}
		}
	}
}

?>