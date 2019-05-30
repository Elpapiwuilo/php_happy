<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="icon" href="img/logo3.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Document</title>
</head>
<!-- <style>
.lista:hover{
    background:skyblue;
    color:white;
style="text-decoration:none;background:white;"
}
</style> -->
<body>

<nav class="navbar navbar-expand-lg  " >
                    <div class="container">
                                <a class="navbar-brand text-dark bg-white" href="#">Happy`s Child</a>
                                <button class="navbar-toggler collapsed bg-white " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon " style="font-size: .8rem; ">≡</span>
                                </button>
                                <div class="collapse navbar-collapse mb-2  " id="navbarSupportedContent">
                                <ul class="navbar-nav ml-lg-auto mt-2 bg-white" >
                                <li class="nav-item">
                                <a class="nav-link text-dark" href="index.php" style="border-bottom: 0.1rem solid white">Inicio<span class="sr-only"></span></a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link text-dark" href="index.php" style="border-bottom: 0.1rem solid white">Explora</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link text-dark" href="index.php" style="border-bottom: 0.1rem solid white">Habilidades</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="index.php" style="border-bottom: 0.1rem solid white">Blog</a>
                                    </li>
                                <li class="nav-item">
                                <a class="nav-link text-dark" href="index.php" style="border-bottom: 0.1rem solid white">Contactenos</a>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
             </nav>

<div class="container ">
    <div class="card-group ">
        <div class="card mx-2 my-3 targeta">
            <a class="lista" href="#" >
            <div class="card-body bg-info text-dark" >
                <h4 class="card-title" style="font-size:30px;"><i class="fas fa-user-graduate"></i>Lista Usuarios</h4>
                <p class="card-text">Text</p>
            </div>
            </a>
        </div>
        
        <div class="card mx-2 my-3 targeta " data-toggle="modal" data-target="#modelId">
            <a href="#">
            <div class="card-body bg-success text-dark">
                <h4 class="card-title " style="font-size:30px;"><i class="fas fa-user-plus"></i>Añadir usuario</h4>
                <p class="card-text">Text</p>
            </div>
            </a>
        </div>
    </div>
    <div class="card-group">
        <div class="card mx-2 my-3 targeta">
        <a href="javascript:abrir_cerrar_reg();">
            <div class="card-body bg-warning text-dark">
                <h4 class="card-title" style="font-size:30px;"><i class="fas fa-users"></i>Lista acudientes</h4>
                <p class="card-text">Text</p>
            </div>
            </a>
        </div>
        <div class="card mx-2 my-3 targeta">
            <a href="js/acud.js" >
            <div class="card-body bg-danger text-dark">
                <h4 class="card-title" style="font-size:30px;"><i class="fas fa-user-tie"></i>Contactenos</h4>
                <p class="card-text">Text</p>
            </div>
            </a>
        </div>
    </div>

</div>
<?php
    include("register.php");
?>
<?php
    include("registerUser.php");
?>