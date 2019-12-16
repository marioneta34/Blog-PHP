<?php include("App/includes/header.php");

$email =$_POST['email'];


$query = "SELECT COUNT(*) as contar from users where email='$email'";
$consulta = mysqli_query($conection,$query);
$result = mysqli_fetch_array($consulta);




if($result['contar']>0){?>
    <div class="container d-none">
        <?php require 'email/recuperarpas.php';
        $mail->addAddress($email);

        $new_pass=md5($nuevapass);
        $query_update = "UPDATE users SET password='$new_pass' WHERE email='$email'";
        $consulta = mysqli_query($conection,$query_update);

    ?>
    </div>
    
    <div class="container text-center " style="margin-top: 300px;">
        <h4>Revise su casilla de mensajes</h4>
        <a href="login.php"><button class="btn btn-success"> Volver</button></a>
    </div>
    <?php
}else{?>
    <div class="container text-center">
        <h4>El email no se encuentra registrado</h4>
        <a href="login.php"><button class="btn btn-success"> Volver</button></a>
    </div>
    <?php
    };
    ?>

<?php

?>