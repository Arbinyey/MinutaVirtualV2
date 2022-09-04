<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

/* include(db.php) */

$conexion=mysqli_connect("localhost","root","","minuta_v2");

$consulta="SELECT * FROM funcionarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:home.php");
}else{
    ?>
    <?php
    include("index.php");
    ?>
    <h2 class="error">Error en la autenticación de usuario o contraseña</h2>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);