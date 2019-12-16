<?php include("App/includes/header.php"); ?>
<!-- // Pequeño banner decorativo-->
    <div class="text-center mb-3"  style = "background-image: url('images/deco.png'); width:100%; height: 400px ">
        <h1  style="padding-top: 150px;"> Bienvenido!!</h1>
        <h4>Sumate...No te quedes afuera!!</h4>
    </div>

<!-- // navbar secundario con las categorias del blog-->
    <nav class="navbar navbar-expand navbar-ligth bg-ligth mb-5">
        <div class="container ">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <p class="nav-link font-weight-bold" href="/">Categorias: </p>
            </li>
            <?php   
                //Buscamos las categorias existentes en la base de datos
                $query ="SELECT * FROM categorias"; 
                $categorias = mysqli_query($conection, $query);               
                while ($rows = mysqli_fetch_array($categorias)){
                $id_cate = $rows['id'];          
            ?>
            <li class="nav-item">
              <a class="nav-link font-weight-bold"  href="categorias.php?id=<?php echo $id_cate?>"> <?php echo $rows['nombre'] ?> </a>
            </li>
            <?php } ?>
          </ul>
        </div>
      </nav>

<!-- // Seccion de Post ordenados por fecha en orden mas reciente-->    
    <div class="text-center m-5">
        <h2> Posteos mas recientes</h2>
    </div>
    <?php   
        //Buscamos las publicaciones en la base de datos
        $query ="SELECT * FROM publicaciones order by creado desc"; 
        $result = mysqli_query($conection, $query); 
        
        while ($row = mysqli_fetch_array($result)){
            $id_usuario = $row['user_id']; 
            $id_categoria = $row['categoria_id'];
            $fechacreada = $row['creado'];
            $actualizado = $row['actualizado'];
            $descripcion = $row['descripcion'];
    ?>
    <?php
        //Consultamos id del creador y traemos los datos del mismo
        $query ="SELECT * FROM users where id = '$id_usuario'"; 
        $result2 = mysqli_query($conection, $query);
    ?> 
    
    <?php 
        //Hacemos lo mismo para obtener el nombre de la categoria
        $query ="SELECT * FROM categorias where id = '$id_categoria'";
        $categoria= mysqli_query($conection, $query); 
    ?>        
        <div class="row border  m-3 shadow-sm p-3 bg-white rounded" style="background: white;">
            <div ><img class="text-center" style="height: 300px; width: 300px; border-top-left-radius: 5px; border-top-right-radius: 5px;" src="<?php echo $row['image'] ?>" alt=""></div>
            <div class="container float-right">
                <h4><?php echo $row['titulo'] ?></h4>
                <p class="mt-5"> <?php echo $descripcion ?> </p>
            </div>
            <div class="container float-right w-100  mr-2"> 
                <i class="fa fa-user-o"></i> <?php while ($row = mysqli_fetch_array($result2)){ ?><a href="postporusuarios.php?id=<?php echo $row['id']?>"> <?php echo $row['firstname']?> <?php echo $row['lastname']?> </a> 
                                            
                                            <?php } ?>  
                    &nbsp;
                <i class="fa fa-calendar"></i> <?php echo $fechacreada ?>  Actualizado:  <?php echo $actualizado ?> Categoria: <?php while ($rows= mysqli_fetch_array($categoria)){ ?> <a href="categorias.php?id=<?php echo  $rows['id']?>"><?php echo $rows['nombre'] ?></a>
                            <?php } ?>

            </div>
            
          </div>
          <?php } ?>

</body>
</html>;