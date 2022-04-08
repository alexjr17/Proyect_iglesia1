<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>desde la web de la iglesia</title>
</head>
<body>
    <div>
        <h1>{{$correo->nombre}}</h1>
        <span>
            {{$correo->asunto}}
        </span>
        <p>
            {{$correo->mensaje}}
        </p>
        <div>
            {{$correo->correo}}
        </div>
    </div>
</body>
</html>