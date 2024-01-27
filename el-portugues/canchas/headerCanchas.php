<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Portugues</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../estilo/style.css" />
</head>

<body>
    
<header>

<nav class="navbar navbar-expand-lg fondo-nav-bar">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">
      <img src="../imagenes/logopelota1.png" alt="Portugues" width="70" height="70">
    </a>

    <h1><a href="../index.php" class="titulo">El Portugués</a></h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">

        <?php 
          $menu = array();
          $menu['Inicio'] = "../index.php" ;
          $menu['Ubicación'] = "../pag1.php" ;
          $menu['Contacto'] = "../contacto.php";
          $menu['Iniciar Sesion'] = "../login/iniciologin.php";
          $menu['Canchas'] = "index.php";
          foreach ($menu as $botones=>$link){                       
            echo "<li class='nav-item'><a class='nav-link blanco' href=$link>$botones</a></li>";              
          }
        ?>
        
      </ul>
    </div>
  </div>
</nav>

</header>