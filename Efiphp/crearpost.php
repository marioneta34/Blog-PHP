<?php 
include('App/Database/connect.php');
include("App/includes/header.php"); 


isset($_SESSION['username']);
$email = $_SESSION['username'];

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

$query="INSERT INTO publicaciones (titulo, descripcion,user_id,categoria_id,image) VALUES ('$titulo','$descripcion','$id','$categoria','$imagen')";
$execute = mysqli_query($conection,$query);

header("location: index.php");

?>
    
   