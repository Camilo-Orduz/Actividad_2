

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>Productos</title>
</head>
<body>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>Descripción</td>
                    <td>Precio</td>
                    <td>Cantidad</td>
                    <td>Imagen</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto -> id}}</td>
                    <td>{{ $producto -> nombre}}</td>
                    <td>{{ $producto -> descripcion}}</td>
                    <td>{{ $producto -> precio }}</td>
                    <td>{{ $producto -> cantidad }}</td>
                    <td>{{ $producto -> imagen }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
