<?php 
include('App/Database/connect.php');
include("App/includes/header.php"); 

isset($_SESSION['username']);
$email = $_SESSION['username'];

?>

<?php 
    $query = "SELECT * FROM users WHERE email = '$email'"; 
    $consult= mysqli_query($conection, $query);
    $result = mysqli_fetch_array($consult);

    $row = $result ?> 
        
    <!-- // Pequeño banner decorativo-->
    <div class="text-center mb-3"  style = "background-image: url('images/deco.png'); width:100%; height: 400px ">
        <h1  style="padding-top: 150px;"> Bienvenido <?php echo $row['firstname']; echo " "; echo $row['lastname']?> </h1>
    </div>
    <h1 class="text-center"> Mis Datos</h1>
         <div class="row border  m-3 shadow-sm p-3 bg-white rounded" style="background: white;">
            <div ><img class="text-center" style="height: 300px; width: 300px; border-top-left-radius: 5px; border-top-right-radius: 5px;"  src=" <?php echo $row['avatar']?>"  alt=""></div>
            <div class="container float-right mt-5">
                <h4>Nombre y apellido: <?php echo $row['firstname']; echo " "; echo $row['lastname']?></h4>
                <h5>Email: <?php echo $row['email']; ?> </h5>
                <h6>Fecha de registro:<?php echo $row['reg_date']; ?>  </h6>
            </div>
        </div>    
                

