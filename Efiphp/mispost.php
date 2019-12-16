<?php 
include('App/Database/connect.php');
include("App/includes/header.php"); 

isset($_SESSION['username']);
$email = $_SESSION['username'];

$query = "SELECT * FROM users WHERE email = '$email'"; 
$consult= mysqli_query($conection, $query);
$result = mysqli_fetch_array($consult);
$row = $result ;
$id= $row['id'];

$query ="SELECT * FROM publicaciones  where user_id='$id' order by creado desc"; 
$result = mysqli_query($conection, $query);

?>

<!-- // Pequeño banner decorativo-->
<div class="text-center mb-3"  style = "background-image: url('images/deco.png'); width:100%; height: 400px ">
    <h1  style="padding-top: 150px;"> Mis publicaciones </h1>
</div>

<?php

    while ($rows = mysqli_fetch_array($result)){
        $id_publi=$rows['id'];
        $id_categoria = $rows['categoria_id'];
        $fechacreada = $rows['creado'];
        $actualizado = $rows['actualizado'];
        $descripcion = $rows['descripcion'];

        // Consulta para traer el nombre de la categoria solicitada-->
        $query ="SELECT nombre FROM categorias where id='$id_categoria'"; 
        $categorias= mysqli_query($conection, $query);
        while ($rowss = mysqli_fetch_array($categorias)){
            // Guardamos el nombre en una variable, para usarla en las descripciones de los post
            $nom_cate= $rowss['nombre'];?>

            <div class="row border  m-3 shadow-sm p-3 bg-white rounded" style="background: white;">
                <div ><img class="text-center" style="height: 300px; width: 300px; border-top-left-radius: 5px; border-top-right-radius: 5px;" src="<?php echo $rows['image'] ?>" alt=""></div>
                <div class="container float-right">
                    <h4><?php echo $rows['titulo'] ?></h4>
                    <p class="mt-5"> <?php echo $descripcion ?> </p>
                    <a class="m-auto" href="editarpost.php?id=<?php echo $id_publi?>"><div class="btn btn-warning m-auto"> Editar</div></a>
                </div>
                <div class="container float-right w-100  mr-2"> 
                    <i class="fa fa-user-o"></i><?php echo $row['firstname']?> <?php echo $row['lastname']?>&nbsp;
                    <i class="fa fa-calendar"></i> <?php echo $fechacreada ?>  Actualizado:  <?php echo $actualizado ?> Categoria: <?php echo $nom_cate ?></a>
                   
        <?php }  ?>
                </div>  
            </div>
        <?php }  ?>
</body>
</html>