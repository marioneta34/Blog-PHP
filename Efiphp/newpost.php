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

?>

<div class="container" style="margin-top: 100px;">
    <div id="loginbox" style="margin-top: 50px;" class="mainbox col-lg-6 offset-md-3 col-md-8 offset-sm-2">
        <div class="card card-inverse card-info">
            <div class="card-header shadow-sm p-3 bg-white rounded">
                <div class="text-center"><h5>Nuevo Post</h5>
                </div>
            </div>
            <div style="padding-top: 30px;" class="card-block shadow-sm p-3 bg-white rounded">
                <div style="display: none;" id="login-alert" class="alert alert-danger col-md-12"></div>
                <form id="loginform" action="crearpost.php" method="POST">
                    <div style="margin-bottom: 25px;" class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" name="Titulo" value="" required placeholder="Titulo del Post" />
                    </div>
                    <div class="form-group">
                        <textarea name="Descripcion"  rows="10" class="form-control" placeholder="Descripcion del Post"></textarea>
                    </div>
                    <div style="margin-bottom: 25px;" class="input-group"> <span class="input-group-addon"><i ></i></span>
                        <input type="text" class="form-control" name="Url" value="" required placeholder="Url de la imagen" />
                    </div>
                    <div class="form-group">
                        <label for="categoria">Categoria:</label> 
                        <select name="Categoria" class="form-control w-auto m-auto">
                            <?php   
                            $query ="SELECT * FROM categorias"; 
                            $categorias = mysqli_query($conection, $query); 

                            while ($row = mysqli_fetch_array($categorias)){ ?> 
                                <option value="<?php echo $row['id'] ?>" ><?php echo $row['nombre'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div style="margin-top: 10px;" class="form-group">
                        <input  class="btn btn-outline-secondary btn-sm btn-block" type="submit" value="Crear">
                    </div>
                </form>
            </div>
        </div>
    </div>
