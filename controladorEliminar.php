<?php
    include("conexion.php");


    $id= $_GET['id'];
    $sql= "DELETE FROM productos WHERE IdProducto='$id'";


    $query = mysqli_query($conexion,$sql);

    if($query === TRUE){
        header("Location: index.php");
    }


?>