<?php
include_once "headerLogin.php"
?>

<?php
session_start( );

$cnx = mysqli_connect('localhost','root','','test');

$email = $_POST['email'];
$clave = $_POST['clave'];


$c = "SELECT NOMBRE, APELLIDO, EMAIL, ID, NIVEL FROM usuarios WHERE EMAIL='$email' AND CLAVE=MD5('$clave') LIMIT 1";

$f = mysqli_query($cnx, $c);
$a = mysqli_fetch_assoc($f);

if( $a == NULL ){
	header("Location: iniciologin.php?login=error");
}else{

	$_SESSION = $a;
	

	header("Location: logueado.php");
}


?>

<?php
include_once "../footer.php"
?>