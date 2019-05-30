<?php
$connection= mysqli_connect(
        'localhost',
        'root',
        '',
        'happy'
        );

 
if($connection){
        print"Conexion establecida";
}else{
        print"error";
}
    
?>