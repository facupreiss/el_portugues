<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../../estilo/style.css" />


<?php

if(mysqli_connect('localhost','root','','carrito')){
				//servidor, usuario servidor, contraseña, nombre de la base de datos		
	
	echo "<h1 class='letrablanca centrar'>Listado de categorias - ABM</h1>";
	
	$con = mysqli_connect('localhost','root','','carrito');
	//guardo la conexion en una variable
	
	$consulta = "SELECT idCategoria, categoria FROM categorias";
	//guardo la "consulta SQL" en otra variable
	
	
	if($resultado = mysqli_query($con, $consulta)){
		//guardo el resultado de la "consulta SQL"
		echo "<table class='tablaAbm centrar2 tablita' >";
		echo"
			 <caption class='centrar letrablanca'>Tabla ABM</caption>
			<tr>
				<th>Deporte</th>
				<th>Modificar</th>
				<th>Borrar</th>
			</tr>
		
		
		
		";
		while($fila = mysqli_fetch_array($resultado)){
			//guardo cada fila de la "consulta SQL"
			echo "<tr>";
				echo "<td><a href='producto.php?catategoria=".$fila["idCategoria"]."&nombre=$fila[categoria]'>$fila[categoria]</a></td>";
				echo "<td><a href='modificarcat.php?catategoria=".$fila["idCategoria"]."'>Modificar</a></td>";
				echo "<td><a href='borrar.php?catategoria=".$fila["categoria"]."'>Borrar</a></td>";
			echo "</tr>";
			
			/*$dato = array("hola","chau");
			
			echo $dato;*/
			
			
		}
		echo "</table>";
		
	}
	
	
}else{
	echo "<h1 class= 'centrar mt-3 letrablanca' >No hay conexion</h1>";
}




?>

<div class="centrar">

<form class="alta" action="altaCategoria.php" method="post">
	<label class="letrablanca" for="categoria">Agregar deporte</label>
		
	<input id="categoria" type="texto" name="categoria">
		
	<input type="submit" value="Agregar">
</form>

</div>

<div>
<a class="centrar" href="../../login/logout.php">SALIR</a>
</div>













