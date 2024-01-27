<?php
include_once "headerLogin.php"
?>

<?php

session_start( );
session_destroy( );

header("Location: iniciologin.php");
?>

<?php
include_once "../footer.php"
?>