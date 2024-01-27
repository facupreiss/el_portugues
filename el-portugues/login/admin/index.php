<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../../estilo/style.css" />

<?php
session_start();

if( !isset($_SESSION['NIVEL']) || $_SESSION['NIVEL'] != 'Admin' ){

		die( "<h1 class='centrar mt-3' id ='error1'>NO TENES PERMISOS</h1>" );

}


$cnx = mysqli_connect('localhost','root','','test');

$c = "SELECT ID,NIVEL, IFNULL(NOMBRE, '----') AS NOMBRE, ESTADO, IFNULL(APELLIDO, '----') AS APELLIDO, EMAIL, DATE_FORMAT( FECHA_ALTA, '%d/%m/%Y' ) AS FECHA FROM usuarios ORDER BY FECHA_ALTA DESC";
$r = mysqli_query($cnx, $c);

?>

<table class="tabla">
	<tr>
		<th>NOMBRE</th>
		<th>APELLIDO</th>
		<th>EMAIL</th>
		<th>NIVEL</th>
		<th>FECHA</th>
		<th>ESTADO</th>
		<th>BOTONES</th>
	</tr>
<?php
	while($a = mysqli_fetch_assoc($r)){
	
		echo '<tr>';
		echo '<td>'.$a['NOMBRE'].'</td>';
		echo '<td>'.$a['APELLIDO'].'</td>';
		echo '<td>'.$a['EMAIL'].'</td>';
		echo '<td>'.$a['NIVEL'].'</td>';
		echo '<td>'.$a['FECHA'].'</td>';
		echo '<td>'.$a['ESTADO'].'</td>';
		echo '<td>';
		
		if( $a['ESTADO'] == 'activo' ){
			echo '<a href="bannear.php?id='.$a['ID'].'">BANNEAR</a>';
		}else{
		
			echo '<a href="no_bannear.php?id='.$a['ID'].'">ACTIVAR</a>';
		
		}
		echo ' | ';
		
		if( $a['NIVEL'] == 'usuario' ){
			echo '<a href="adminizar.php?id='.$a['ID'].'">HACER ADMIN</a>';
		}else{
			echo '<a href="no_adminizar.php?id='.$a['ID'].'">HACER USUARIO</a>';
		}
			
		echo '</td>';
		echo '</tr>';
	
	}


?>
	
	
</table>

<div>
<a href="../logout.php">SALIR</a>
</div>