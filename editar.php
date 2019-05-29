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

<h1>Editar Mascota</h1>

<form action="procesar_editar.php" method="post" enctype="multipart/form-data" >
    <input type="hidden" name="idd" value="<?php echo $id?>" >

<div> Titulo:<input type="text" name="a" value="<?php echo $mascota['nombre']?>" ></div>
<div> Descripcion: <input type="text" name="b" value="<?php echo $mascota['descripcion']?>" ></div>
<div> Fecha: <input type="text" name="c" value="<?php echo $mascota['fecha']?>" ></div>
<div> Contactame: <input type="text" name="d" value="<?php echo $mascota['numero']?>" ></div> <br/>
<img style="width:140px" src="data:image/jpg;base64,<?php echo base64_encode($mascota['foto']);?>">
<div>Cambiar fotografia: <input type="file" name="f" ></div>

<button>Actualizar</button>

</form>
    
</body>
</html>