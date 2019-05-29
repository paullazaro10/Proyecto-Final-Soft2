<?php
$pdo = new PDO("mysql:host=localhost;dbname=mascotas;charset=utf8", "root", "");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <style>
    .padre{ 
        width:100%;
        height: 420px;
        margin: 0 auto;
        display:flex;
        flex-direction:row;
        flex-wrap: wrap;
        justify-content:center;
        padding:0px;
        text-decoration: none;
    }
    .hijo{
        
        font-size: 12px;
        color: blue;
        text-align: center;
        margin:0px;
        width:19.83%;
        height:280px; 
        text-decoration: none;
    }
    </style>
</head>
<body>
    
    <h1 style="color:red;text-align:center;">Love Animals</h1>
    <h2>Adopta una mascota ¡Encuentra a tu compañero ideal!</h2>
    <div class="padre" style="height:50px;">
    <div class="hijo" >
    <a class="hijo" href="perfil.php">MI PERFIL</a>
    </div>
    <div class="hijo">
    <a class="hijo" href="registrar.php">REGISTRA UN ANUNCIO</a>
    </div>
    <div class="hijo">
    <a class="hijo"  href="">CAMPAÑAS</a>
    </div>
    </div>

    <div class="padre">
    <?php foreach ($pdo->query("SELECT * FROM mascota") as $fila) { ?>
        <div class="hijo" >
        <div><img style="width:220px; height:150px" src="data:image/jpg;base64,<?php echo base64_encode($fila['foto']);?>"></div>
        <div><?php echo $fila["nombre"] ?></div>
        <div><?php echo $fila["descripcion"] ?></div>
        <div><?php echo $fila["numero"] ?></div>
        <div><?php echo $fila["fecha"] ?></div>
        <div ><a style="color:red" href="editar.php?id=<?php echo $fila["id"]?>">Editar</a></div>
        <div><a href="procesar_adoptar.php?id=<?php echo $fila["id"]?>">Adoptar</a></div>
        </div>
        <?php } ?>
    </div>
    </br></br></br></br>
    <h1>Hazte socio con solo llenar este formulario e informarte sobre nuestras campañas de esterilizacion</h1>  
    <form action="">
    <div>
       <label for="nombre">nombre</label>
       <input type="text">
    </div>
    <div>
       <label for="">correo</label>
       <input type="email" name="" id="">
    </div> 
    <div>
        <label for="">Cuantas mascotas tienes</label>
        <select name="" id="">
           <option value="">1</option>
           <option value="">2</option>
           <option value="">3</option>
        </select>
    </div>
    <button>UNETE</button>
    </form>

</body>
</html>