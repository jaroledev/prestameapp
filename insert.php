<?php
    require_once 'conexion.php';
    $con=conectar();


    $username = $_POST['USERNAME'];
    $telefono=$_POST['TELEFONO'];
    $email=$_POST['EMAIL'];
    $sql="INSERT INTO user( `username`, `telefono`, `email`) VALUES ('".$username."','". $telefono."','".$email."')";
    $query = mysqli_query($con,$sql);

    if($query)
    {
        Header("Location:index.php");

    }
?>