<?php session_start();?>

<?php
$usuario=$_POST['usuario'];
$password=md5($_POST['password']);

include("conexion.php");

$consulta=mysqli_query($conexion, "SELECT nombre, email, usuario FROM usuario WHERE usuario='$usuario' AND password='$password'");

$resultado=mysqli_num_rows($consulta);

if($resultado!=0){
	$respuesta=mysqli_fetch_array($consulta);
	
	$_SESSION['usuario']=$respuesta['usuario'];
	$_SESSION['nombre']=$respuesta['nombre'];
	
	header('Location:panel.php');

}else{
		include ("error.html");
}

?>