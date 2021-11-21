<?php
    require_once("conexion.php");
    $con= conectar();

    $sql="SELECT * FROM user";
    $query=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Prestame App</title>
</head>
<body>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <form action="insert.php" method="POST">
                    <input type="text" class="form-control mb-3" name="USERNAME" id="USERNAME" placeholder="Nombre de usuario">
                    <input type="text" class="form-control mb-3" name="TELEFONO" id="TELEFONO" placeholder="Número de móvil">
                    <input type="email" class="form-control mb-3" name="EMAIL" id="EMAIL" placeholder="Email">
                    
                    <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                </form>
            </div>
            <div class="col-md-7">
            <table class="table">
                <thead class="thead-dark" >
                    <tr>
                    <th scope="col"><input id="checkTodos" onchange="marcarTodos(this)" type="checkbox"></th>    
                    <th scope="col">User id</th>
                    <th scope="col">Nombre de Usuario</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Email</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($query)) { ?>
                    
                    <tr id="lineaTr" onclick="marcar(this)"> 
                        <td><input class="cheaks" type="checkbox"></td>   
                        <td><?php echo $row['iduser']?></td>
                        <td><?php echo $row['username']?></td>
                        <td><?php echo $row['telefono']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><button class="btn btn-danger btn-block" data-action="delete">Eliminar</button><td>
                    </tr>
                    <?php } ?>    

                    
                </tbody>
            </table>
            </div>
        </div>

    </div>
            <script>
                function marcarTodos(chk){
                    $('.cheaks').each(function() {
                        
                        this.checked = chk.checked;                        
                    });
                }
                function marcar(linea){
                    var valor = linea.children[0].firstChild.checked
                    if (valor){
                        linea.children[0].firstChild.checked = false
                    }else{
                        linea.children[0].firstChild.checked = true
                    }
                }
                
            </script>            
</body>
</html>

    