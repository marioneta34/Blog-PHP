<?php 
  include('App/Database/connect.php');
  session_start(); //Creo la session en el head ya que este aparece en todas las secciones.
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Styles -->
  <link rel="stylesheet" href="App/css/style.css">
  <title>BlogNoved</title>
</head>
<body>
  <!-- header -->
  <header class="clearfix fixed-top border-bottom">
    <div class="logo">
      <a href="index.php">
        <h1 class="logo-text"><span>Blog</span>Noved</h1>
      </a>
    </div>
    <div class="fa fa-reorder menu-toggle"></div>
    <nav>
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <?php
          if (isset($_SESSION['username'])) { ?>
            <li><a href="newpost.php">Crear Post</a></li>
            <li><a href="mispost.php">Mis Post</a></li>
            <li><a href="perfil.php">Perfil</a></li>
            <li><a href="cerrarsesion.php">Cerrar Sesion</a></li>
          <?php }else{ ?>          
            <li>
              <a href="login.php"><i class="fa fa-sign-in"></i>Iniciar Sesion</a>
            </li>
          <?php } ?>  
      </ul>
    </nav>
  </header>