<?php
include_once "header.php"
?>

<main>

<div class="d-flex justify-content-center">
<h2 class="mt-4 ms-3">Datos del formulario</h2>
</div>

<div class="d-flex justify-content-center">
<ul class="mt-4">
    <?php
    if(isset($_POST['nombre'] )){
        $nombre=$_POST['nombre'];
    echo "<li>Nombre: $nombre</li>";
    }
    if(isset($_POST['apellido'] )){
        $apellido=$_POST['apellido'];
    echo "<li>Apellido: $apellido</li>";
    }
    if(isset($_POST['email'] )){
        $email=$_POST['email'];
    echo "<li>Email: $email</li>";
    }

    if(isset($_POST['numero'] )){
        $numero=$_POST['numero'];
    echo "<li>Teléfono: $numero</li>";
    }

    if(isset($_POST['comentario'] )){
        $comentario=$_POST['comentario'];
    echo "<li>Comentario: $comentario</li>";
    }
    ?>
</ul>
</div>

<?php
move_uploaded_file ($_FILES ["arch"] ["tmp_name"], "cv/" .$_FILES ["arch"] ["name"]);
?>

<div class="d-flex justify-content-center">
<h3 id="gracias" class="mt-2 mb-3 ms-3">Gracias por contactarse, sus datos fueron enviados!</h3>
</div>

</main>

<?php
include_once "footer.php"
?>