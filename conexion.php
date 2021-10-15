<?php
    function conectar()
    {
        $host="locahost";
        $user="jrosado";
        $pass="Role9094?";

        $bd="prestameapp";

        $conn=new mysqli($host, $user,$pass,$bd );
        if ($conn->connect_error)
        {
            die('Error de conexión(' . $conn->connect_errno . ') ' . $conn->connect_error);
        }
        echo 'Éxito... ' . $conn->host_info . "\n";

        $conn->close();    
    }        
?>