<?php
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$usuario = $_POST['usuario'];
	$password = md5($_POST['password']);

	include("conexion.php");


	
	
	$consulta = mysqli_query($conexion, "INSERT INTO usuario(nombre, email, usuario, password) VALUES('$nombre','$email', '$usuario', '$password')");
	
	
    header("Location:index.html"); 
?>