<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Crear producto</title>
</head>
<body>
    <h1>Crear Producto</h1>
    <h1>Hola miundo</h1>
    <br>
    <form method="POST" action="" >
        <div style="margin-left:42%">
            <label for="nombre">Nombre del Producto: </label>
            <input type="text" id="nombre" name="name">
            <p>
            <label for="descripcion">Descripción:</label>
            <br>
            <textarea name="descrip" id="descripcion" cols="30" rows="10"></textarea><br>
            <label for="precio">Precio:</label><br>
            <input type="number" id="precio" name="precio">
            <label for="cantidad">Cantidad:</label>
            <input type="number" id="cantidad" name="amount">
            <div class="form-group">
                <label for="exampleFormControlFile1">Imagen del Producto</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1"><br>
                <button type="submit" Route="#">Crear producto</button>
            </div>
        </div>
        
    </form>

</body>
</html>