<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1>Registrar </h1>
   <form action="procesar_registrar.php" method="post" enctype="multipart/form-data">
   <div>
        nombre: 
        <input type="text" name="t">  
    </div>
    <div>
        descripcion:
        <textarea name="d" id="" cols="30" rows="10"></textarea>
    </div>
    <div>
        numero:
        <input type="int" name="a" >
    </div>
    <div>
        Fotografia:
        <input type="file" name="f" alt="40"  >
    </div>
    <button > Registrar </button>
    </form>
</body>
</html>