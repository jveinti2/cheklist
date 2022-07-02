<?php
$conexion = mysqli_connect(
    $host= "localhost",
    $username= "root",
    $password= "",
    $database= "db_checklist_factmovil"
    // $host = "10.1.1.195",
    // $username = "App_checklist_factmovil",
    // $password = "i8RVvdXJr*GseMZ2ojNGs",
    // $database = "db_checklist_factmovil"
);
$conexion->set_charset("utf8");
if (!$conexion) {
    die("Conexión caida con la BD" . mysqli_connect_error());
}
error_reporting(0);
