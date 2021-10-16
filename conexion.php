<?php
    function conectar()
    {
        $host="localhost";
        $user="jrosado";
        $pass="Role9094?";

        $bd="prestameapp";

        $con=mysqli_connect($host, $user,$pass);
        mysqli_select_db($con,$bd);
        
        return $con;
    }        
?>