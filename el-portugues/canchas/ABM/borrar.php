<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../../estilo/style.css" />

<?php

if(mysqli_connect('localhost','root','','carrito')){
	
	$con = mysqli_connect('localhost','root','','carrito');
	//guardo la conexion en una variable
	
	if(isset($_GET["catategoria"])){
		$codigo = $_GET["catategoria"];
		
		
		$consulta = "DELETE FROM categorias WHERE categoria='$codigo'";
		//guardo la "consulta SQL" en otra variable
		
		if($resultado = mysqli_query($con, $consulta)){
			//guardo el resultado de la "consulta SQL"
			
				echo "<h1 class='letrablanca centrar'>El deporte $codigo fue eliminado </h1>";
					echo "<p><a href='index.php'>Inicio</a></p>";
			
			
		
		}else{
			
			echo "<h1 class='letrablanca centrar'>La consulta tiene errores</h1>";
		}
		
	}
}	
	
?>