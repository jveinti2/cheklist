<?php 

include 'db/db.php';

$userLogin = $_POST['userLogin'];
session_start();
$_SESSION['userLogin'] = $userLogin;
$querySession = "SELECT * FROM usuarios WHERE usuario = '$userLogin' ";
$resultadoSession = mysqli_query($conexion, $querySession);
$filasLogin = mysqli_num_rows($resultadoSession);
if ($filasLogin) {
    header('Location:checklist.php');
} else {
    echo "<script> alert('Usuario no encontrado en la base de datos'); window.history.go(-1); </script>";
}
?>