<?php
include('App/Database/connect.php');
include("App/includes/header.php");

//Recupero datos del formulario
$email = $_POST['username'];
$pass = $_POST['password'];
$password = md5($pass);


//Compruebo si existe el email en la Base de datos
$query = "SELECT COUNT(*) as contar from users where email='$email' and  password='$password'";
$consult= mysqli_query($conection,$query);
$result = mysqli_fetch_array($consult);

if($result['contar']>0){
    session_start();
    $_SESSION['username'] = $email;
    header("location: index.php");
}else{?>
    <div class="Container" style="margin-top: 200px;">
            <div class="container text-center shadow-sm p-3 bg-white rounded">
              <h3> Fallo al iniciar sesion</h3>
              <a href="login.php"><div class="btn btn-secondary">Volver a intentarlo</div></a>
            </div>
    </div>
    
<?php } ?>