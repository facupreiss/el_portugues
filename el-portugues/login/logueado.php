<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../estilo/style.css" />

<?php
session_start( );

if( !isset( $_SESSION['ID'] ) ){
	header("Location: iniciologin.php?forbidden=1");
}



?>

<div class="mt-5 ">

<div>
	<h2 class="d-flex aligns-items-center justify-content-center"><a id="salir" href="logout.php">Salir</a></h2>
</div>

<div>
	<h2  class="d-flex aligns-items-center justify-content-center"><a id="panel" href="/el-portugues/login/admin">Ir a panel de Admin</a></h2>
</div>

<div>
	<h2  class="d-flex aligns-items-center justify-content-center"><a id="abm" href="/el-portugues/canchas/ABM">ABM</a></h2>
</div>

</div>

