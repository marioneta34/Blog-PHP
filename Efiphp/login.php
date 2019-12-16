<?php include("App/includes/header.php"); ?>

<div class="container" style="margin-top: 150px;">
    <div id="loginbox" style="margin-top: 50px;" class="mainbox col-lg-6 offset-md-3 col-md-8 offset-sm-2">
        <div class="card card-inverse card-info">
            </div>
            <div style="padding-top: 30px;" class="card-block shadow-sm p-3 bg-white rounded">
                <div style="display: none;" id="login-alert" class="alert alert-danger col-md-12"></div>
                <form id="loginform" action="logear.php" method="POST">
                    <div class="border p-3"> 
                        <div class="card-title">INICIAR SESION</div>
                        <div style="margin-bottom: 25px;" class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input
                            id="login-username" type="text" class="form-control" name="username" value="" required
                            placeholder="Email" />
                        </div>
                        <div style="margin-bottom: 25px;" class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input
                            id="login-password" type="password" class="form-control" name="password" required
                            placeholder="Contraseña" />
                        </div>
                        <div style="margin-top: 10px;" class="form-group">
                            <input  class="btn btn-outline-primary btn-sm btn-block" type="submit" value="Ingresar">
                        </div>
                        
                    </div>
                </form>
                <form id="loginform" action="recuperarpass.php" method="POST">
                    <div class="card-header shadow-sm mt-3 p-3 bg-light rounded">
                            <div class="card-title">Recuperar contraseña</div>
                            <div style="margin-bottom: 25px;" class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input
                            type="text" class="form-control" name="email" value="" required
                            placeholder="Email" />
                        </div>
                        <div style="margin-top: 10px;" class="form-group">
                            <input  class="btn btn-outline-primary btn-sm btn-block" type="submit" value="Recuperar">
                        </div>
                    </div>
                    </div>
                </form>
                <div class="form-group">
                    <div class="col-lg-12 control  mt-3">
                        <div style="padding-top: 15px; font-size: 85%;">
                            ¡No tengo cuenta!  
                            <a class="font-weight-bold text-primary" href="register.php" onclick="$('#loginbox').hide(); $('#signupbox').show()">Registrate aquí</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>