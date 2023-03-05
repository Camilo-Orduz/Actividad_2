

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Productos</title>
</head>
<body>
    <a href="{{route('crear')}}"><button type="submit" class="btn btn-success">Agregar</button></a>
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
