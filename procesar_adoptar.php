
<?php
$id=$_POST['id'];
$pdo = new PDO("mysql:host=localhost;dbname=mascotas;charset=utf8","root","");
$q = ("INSERT INTO carrito  SELECT * FROM mascota WHERE id='$id'");
$pdo->query($q);

 
header("location:perfil.php");  

?>
 


