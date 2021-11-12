<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php

    if(!$_GET){
        header('location:index.php?pagina=1');
    }
    ?>
    <center>
        <form method="POST" action="recibe.php">
            <input type="text" name="nombre" placeholder="nombre" class='campos'>   
                <br>
            <input type="text" name="precio" placeholder="precio" class='campos'>   
            <br>
            <button type="submit">guardar</button>

    </form>
    </center>
    <?php
        //$conexion=new mysqli("localhost","root","ColomSop1.1.3*_","productos");
        $conexion=new mysqli("bxwnf9fykys202ez2wuc-mysql.services.clever-cloud.com","ujiuewr9mbcv4lq9","qj6Gl98CGsEyqBpU9nSV","bxwnf9fykys202ez2wuc");
        $consulta="select * from producto";
        $resultados=$conexion->query($consulta);
        $numeroFilas=$resultados->num_rows;
        $paginas=ceil($numeroFilas/3);
        
        $inicio=($_GET['pagina']-1)*3;
        $consulta2="select * from producto limit $inicio,3";
        $resultados2=$conexion->query($consulta2);
        $data=[];

        while($row=$resultados2->fetch_object()){
            $data[]=$row;
        }
    ?>
    <?php require './datos.php'?>
</body>
</html>