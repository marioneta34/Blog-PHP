<?php
include('App/Database/connect.php');
include("App/includes/header.php");



//Recupero datos del formulario
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$email =$_POST['Username'];
$password=$_POST['password'];
$pass=md5($password); 
$avatar = "https://png.pngtree.com/png-vector/20190805/ourlarge/pngtree-account-avatar-user-abstract-circle-background-flat-color-icon-png-image_1650938.jpg";

$query = "SELECT * from users where email='$email'"; //Cuento cuantas filas coinciden con el email a registrar
$consulta = mysqli_query($conection,$query);
$result = mysqli_fetch_array($consulta);
        
//Verificar Email
if($result!== null){ ?>
    <div class="Container" style="margin-top: 200px;">
            <div class="container text-center shadow-sm p-3 bg-white rounded">
              <h3> El email ya se encuentra registrado</h3>
              <a href="login.php"><div class="btn btn-info">Volver a intentarlo</div></a>
            </div>
    </div>
<?php
}else{ 
    //Realizo el insert de los datos del nuevo usuario.
    $query = "INSERT INTO  users (firstname,lastname,password,email,avatar) values('$nombre','$apellido','$pass','$email','$avatar')";
    $consulta = mysqli_query($conection,$query);?> 
    <!-- // <div class="d-none"><?php //include ('../email/login_email.php'); ?> </div> -->
        <div class="Container" style="margin-top: 200px;">
                <div class="container text-center shadow-sm p-3 bg-white rounded">
                <h3> Registrado correctamente</h3>
                <p> Se ha enviado un mensaje a su email con datos del registro</p>
                <a href="login.php"><div class="btn btn-info">Ir a perfil</div></a>
                </div>
        </div>

<div class="d-none"><?php include ('email/email.php');?></div>


<?php  }; ?>
