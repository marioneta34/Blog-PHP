<?php include("App/includes/header.php"); ?>

<div class="container" style="margin-top: 200px;">
    <div id="loginbox" style="margin-top: 50px;" class="mainbox col-lg-6 offset-md-3 col-md-8 offset-sm-2">
        <div class="card card-inverse card-info shadow-sm p-3 bg-white rounded">
            <div class="card-header">
                <div class="card-title text-center">Registrarse</div>
                <div style="float: right; font-size: 80%; position: relative; top: -10px;"> </div>
            </div>
            <div style="padding-top: 30px;" class="card-block">
                <div style="display: none;" id="login-alert" class="alert alert-danger col-md-12"></div>
                <form id="loginform" action="registrar.php" method="POST">
                    <div style="margin-bottom: 25px;" class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  
                            id="login-username" type="text" class="form-control" name="Nombre" value=""  required placeholder="Nombre"
                        />
                    </div>
                    <div style="margin-bottom: 25px;" class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input
                            id="login-username" type="text" class="form-control" name="Apellido" value="" required placeholder="Apellido" 
                        />
                    </div>
                    <div style="margin-bottom: 25px;" class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input
                            id="login-username" type="email" class="form-control" name="Username" value=""  required placeholder="Email" 
                        />
                    </div>
                    <div style="margin-bottom: 25px;" class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input
                           id="login-password" type="password" class="form-control" name="password" value="" required placeholder="contraseña" 
                        />
                    </div>
                    <div style="margin-top: 10px;" class="form-group">
                        <input class="btn btn-outline-primary btn-sm btn-block" type="submit" value="Registrarse">
                    </div>
                </form>
            </div>
        </div>
    </div>
