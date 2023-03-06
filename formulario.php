<?php
$conexion = mysqli_connect('localhost', 'root', '', 'pd3');


$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$mail=$_POST['mail'];
$celular=$_POST['celular'];
$comentarios=$_POST['comentarios'];
  header("Location:contacto2.html");
$sql=mysqli_query($conexion, "INSERT INTO formularios (nombre, apellido, mail, celular, comentarios) VALUES('$nombre','$apellido','$mail', '$celular', '$comentarios')");

?>
