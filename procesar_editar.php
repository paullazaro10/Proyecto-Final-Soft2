<?php
$nombre = $_POST["a"];
$descripcion = $_POST["b"];
$fecha = $_POST["c"];
$numero = $_POST["d"];
$foto=addslashes(file_get_contents($_FILES['f']['tmp_name']));
$id= $_POST["idd"];


$pdo = new PDO("mysql:host=localhost;dbname=mascotas;charset=utf8","root","");
$pdo->query("UPDATE mascota SET nombre='$nombre',descripcion='$descripcion',foto='$foto', fecha='$fecha', numero='$numero' WHERE id= '$id'");

header("location:index.php");
?>