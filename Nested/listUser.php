<?php 
    include('../General/connection.php');

$query ="SELECT * FROM acudiente";
$result= mysqli_query($connection, $query);
 if(!$result){
     die('consulta fallida'. mysqli_error($connection));
 };
 $json= array();

 while($row=mysqli_fetch_array($result)){
       echo ("
            <tr taskId=".$row['id_Acudientes'].">
            <td>".$row['id_Acudientes']. "</td>
            <td>
            <a href='#' class='task-item'>". $row['Nombre'] ."</a>
            </td>
            <td>". $row['Apellido'] ."</td>
            <td>".$row['Telefono']. "</td>
            <td>". $row['FechaNacimiento'] ."</td>
            <td>
            <button class='task-delete btn btn-danger'>Delete
            </button>
            </td>
            </tr>");


 
 }
$jsonstring= json_encode($json);

?>