<?php
//$conexion=new mysqli("localhost","root","ColomSop1.1.3*_","productos");
$conexion=new mysqli("bxwnf9fykys202ez2wuc-mysql.services.clever-cloud.com","ujiuewr9mbcv4lq9","qj6Gl98CGsEyqBpU9nSV","bxwnf9fykys202ez2wuc");
echo $_POST['nombre'];
echo $_POST['precio'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$consulta="insert into producto(nombre,precio) values('$nombre','$precio')";
$conexion->query($consulta);
header('location:index.php');
?>