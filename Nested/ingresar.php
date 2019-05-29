<?php
    include('header.php');
    include('../General/connection.php');
?>

 <div class="row justify-content-center m-5">
        <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 mt-5 registerFont">
            <h1 class=" text-success mb-5 mt-2  text-center icon-user-o" style="font-size: 2.4rem ; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Iniciar</h1>
                            
            <form action="" id="login" method="POST">
            <input type="email" id="email" name="email" class="form-control bgprivate text-dark w-70 pb-3 pl-2 mb-5" placeholder="Correo electronico*" style="border: 1px solid white">
            <input type="password" id="pass" name="pass" class="form-control bgprivate text-dark w-70 pb-3 pl-2 mb-5" placeholder="Contraseña*" style="border: 1px solid white">
            <input type="submit" class="btn btn-primary logueo  mb-5 mr-1" value="Iniciar" name="enviar" >
            <button type="button" class="btn btn-primary logueo  mb-5" data-toggle="modal" data-target="#modelId">
                        Registrar
            </button>
        </form>
        <?php 
    include('../General/connection.php');
    if(isset($_POST["enviar"])){
        
        $email= $_POST['email'];
        $pass= $_POST['pass'];
        $consulta= "SELECT Contrasena, Correo FROM usuario WHERE Contrasena = '$pass' and Correo = '$email'";
        if ($resultado = $connection->query($consulta)) {
           
                if($fila = $resultado->fetch_assoc()){
                  
                       echo $todo=$fila['Contrasena'];
                       header('Location:paginaOficial.php');
                      
                }
                 else{
                     echo ("Datos Incorrectos");
                    } 
                
            }
        } 
      ?>
        <div class="olvido">
            <a href="#" style="display:none;" class="olvido">Olvido contraseña</a>
        </div>
        </div>
    </div>
</div>
<script src="js/mensaje.js"></script> 
<?php
    include('footer.php')
?>
<?php
    include("register.php");
?>
<?php
    include("registerUser.php");
?>