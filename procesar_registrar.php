<?php
$nombre = $_POST["t"];
$descripcion = $_POST["d"];
$numero = $_POST["a"];
$foto=addslashes(file_get_contents($_FILES['f']['tmp_name']));


$pdo = new PDO("mysql:host=localhost;dbname=mascotas;charset=utf8","root","");
$q= ("INSERT INTO mascota VALUES (NULL, '$nombre','$descripcion','$foto',SYSDATE(),'$numero')");
$pdo->query($q);


header("location:index.php");
?>