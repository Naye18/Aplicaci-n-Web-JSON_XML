<?php
$usuario=$_POST['username'];
$contraseña=$_POST['password'];
session_start();
$_SESSION['usuario']=$usuario;
$conexion=mysqli_connect("localhost","root","","savi");
$consulta="SELECT*FROM usuario where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_fetch_array($resultado);
if($filas['id_usuario']==1){ //admin
    header("location:menuAdministrador.html");
} 
else{
    ?>
    <?php
    include ("loginAdmi.html");

}
mysqli_free_result($resultado);
mysqli_close($conexion);