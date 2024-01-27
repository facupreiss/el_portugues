<?php
include_once "headerLogin.php"
?>

<main>

<?php
session_start( );
?>



<h1 class="centrar predio letrasubtitulo ">Registrate o inicia sesión</h1>
<?php

if( isset($_GET['alta'])){
	echo "<p id='ok'>Salio todo ok, podes loguearte</p>";
}
if( isset($_GET['login'])){
	echo "<p id='error'>Mal tu usuario o tu clave</p>";
}
//var_dump($_SESSION);
?>

<section class= "d-flex centrar mt-5 mb-5">

<div class="me-5">
<form method="post" action="login.php">
	<h3>Entrar</h3>
	<div><input type="email" placeholder="Dame tu email" name="email" /></div>
	<div><input type="password" placeholder="Dame tu clave" name="clave" /></div>
	<div><input type="submit" value="Entrar" /></div>	
</form>
</div>

<div class="ms-5">
<form method="post" action="alta.php">
	<h3>Crear cuenta</h3>
	<div><input type="nombre" placeholder="Dame tu nombre" name="nombre" /></div>
	<div><input type="apellido" placeholder="Dame tu apellido" name="apellido" /></div>
	<div><input type="email" placeholder="Dame tu email" name="email" /></div>
	<div><input type="password" placeholder="Dame tu clave" name="clave" /></div>
	<div><input type="submit" value="Darme de alta" /></div>
</form>
</div>

</section>

</main>

<?php
include_once "../footer.php"
?>
