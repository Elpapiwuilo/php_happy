    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
                       echo 'Esta Mal ';
                    } 
                
            }
        } 
      ?>
</body>
</html>