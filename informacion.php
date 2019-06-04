<?php
$id=$_GET["id"];
$pdo = new PDO("mysql:host=localhost;dbname=mascotas;charset=utf8", "root", "");
$resultado= $pdo->query("SELECT * FROM mascota WHERE id = '$id'");
$mascota= $resultado->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div> <?php echo $mascota['nombre']?></div>
<div><?php echo $mascota['descripcion']?></div>
<div> <?php echo $mascota['numero']?></div>
<img style="width:540px" src="data:image/jpg;base64,<?php echo base64_encode($mascota['foto']);?>">


    
</body>
</html>