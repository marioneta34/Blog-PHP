<?php 
include('App/Database/connect.php');
include("App/includes/header.php"); 


isset($_SESSION['username']);
$email = $_SESSION['username'];

isset($_GET['id']);
$id_publicacion= $_GET['id']; 

//Obtengo id de Usuario
$query = "SELECT * FROM users WHERE email = '$email'"; 
$consult= mysqli_query($conection, $query);
$result = mysqli_fetch_array($consult);
$row = $result ;
$id= $row['id'];

//Obtengo valores del formulario
$titulo =$_POST['Titulo'];
$descripcion = $_POST['Descripcion'];
$categoria = $_POST['Categoria'];
$imagen = $_POST['Url'];

$query="UPDATE publicaciones SET titulo='$titulo',descripcion='$descripcion',categoria_id='$categoria',image='$imagen' WHERE id='$id_publicacion'";
$execute = mysqli_query($conection,$query);

header("location: index.php");

?>
    
   