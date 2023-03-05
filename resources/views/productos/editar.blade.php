<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Editar producto</title>
</head>
<body>
    <h1>Editar Producto</h1>
    <br>
    <form method="POST" action="{{ route('actualizar_producto') }}" >
        @csrf
        <div style="margin-left:42%">
            <label for="">Nombre del Producto: </label>
            <input type="text" id="nombre" name="nombre" value="{{$producto->nombre}}">
            <p>
            <label for="">Descripción:</label>
            <br>
            <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea><br>
            <label for="">Precio:</label>
            <input type="number" id="precio" name="precio"><br>
            <label for="">Cantidad:</label>
            <input type="number" id="cantidad" name="cantidad"><br>
            <label for="">Imagen: </label>
            <input type="text" id="imagen" name="imagen"><br>
            <button type="submit">Crear producto</button>
        </div>
        
    </form>

</body>
</html>