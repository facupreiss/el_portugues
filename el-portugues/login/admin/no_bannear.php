<?php
$id = $_GET['id'];

$cnx = mysqli_connect('localhost','root','','test');


$c = "UPDATE usuarios SET ESTADO='activo' WHERE ID='$id'";

mysqli_query($cnx, $c);
header("Location: index.php");

?>