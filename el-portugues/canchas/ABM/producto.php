<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../../estilo/style.css" />

<?php

if(mysqli_connect('localhost','root','','carrito')){
				//servidor, usuario servidor, contraseña, nombre de la base de datos		
	if(isset($_GET['catategoria']) and isset($_GET['nombre'])){
		$codigo = $_GET['catategoria'];
		$nombre = $_GET['nombre'];
	}
	
	
	
	echo "<h1 class='centrar letrablanca'>Listado de $nombre - ABM</h1>";
	
	$con = mysqli_connect('localhost','root','','carrito');
	//guardo la conexion en una variable
	
	$consulta = "SELECT * FROM productos WHERE categoriaProducto='$codigo'";
	//guardo la "consulta SQL" en otra variable
	
	
	if($resultado = mysqli_query($con, $consulta)){
		//guardo el resultado de la "consulta SQL"
		echo "<table class='tablaCan centrar2 tablita' border=1>";
		echo"
			<caption class='centrar letrablanca'>$nombre</caption>
			<tr>
				<th>Canchas</th>
				<th>Modificar</th>
				<th>Borrar</th>
			</tr>
		
		
		
		";
		while($fila = mysqli_fetch_array($resultado)){
			//guardo cada fila de la "consulta SQL"
			echo "<tr>";
				echo "<td>$fila[nombreProducto]</td>";
				echo "<td><a href='modificarProd.php?producto=".$fila["codigoProducto"]."'>Modificar</a></td>";
				echo "<td><a href='borrarProd.php?producto=".$fila["codigoProducto"]."'>Borrar</a></td>";
			echo "</tr>";
			
			/*$dato = array("hola","chau");
			
			echo $dato;*/
			
			
		}
		echo "</table>";
		
	}
	
	
}else{
	echo "<h1 class='letrablanca centrar'>No hay conexion</h1>";
}




?>

<div>
<form class="letraform formproducto" action="altaProducto.php" method="post" enctype="multipart/form-data">
		<div>
		<!--label for="catategoria">catategoria Producto<label-->
		<input id="catategoria" type="hidden" name="catategoria" <?php echo "value='$codigo'"; ?>/>
	</div>
	<div>
		<label for="codigoProd">Codigo Cancha<label>
		<input class="ms-3" id="codigoProd" type="text" name="codigoProd">
	</div>
	<div>
		<label for="nombreProd">Nombre Cancha<label>
		<input class="ms-3" id="nombreProd" type="text" name="nombreProd">
	</div>
	<div>
		<label for="precio">Precio Cancha<label>
		<input class="ms-3" id="precio" type="num" name="precio">
	</div>
	<div>
		<label for="iluminacion">Iluminacion Cancha<label>
		<input class="ms-3" id="iluminacion" type="text" name="iluminacion">
	</div>
	<div>
		<p><label for="archivo">Agregar Foto:</label></p>
		<input accept="*" type="file" name="foto" id="archivo" required />
	</div>
	<div>
		<p>Descripcion</p>
		<textarea class="areaCan" name="descripcion"></textarea>
	</div>
	
	<input class="centrar2" type="submit" value="Agregar Producto">
</form>
</div>

