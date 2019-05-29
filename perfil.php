<?php
$pdo = new PDO("mysql:host=localhost;dbname=mascotas;charset=utf8", "root", "");

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

<?php foreach ($pdo->query("SELECT * FROM carrito") as $fila) { ?>
       
        <div><img style="width:220px; height:150px" src="data:image/jpg;base64,<?php echo base64_encode($fila['foto']);?>"></div>
        
        <?php } ?>

</body>
</html>