<!DOCTYPE html>
<html lang="en">
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>desde la web de la iglesia</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <div class="header">
            <h1 class="header-h1">Iglesia guaranda</h1>
        </div>
    </header>
    <main class="container">
        <div class="main">
            <div class="main-body">
                <h1>Mensaje</h1>
                <div>
                    {{$mensaje['nombre']}}
                </div>
                <div>
                    {{$mensaje['asunto']}}
                </div>
                <div>
                    {{$mensaje['mensaje']}}
                </div>
                <div>
                    {{$mensaje['correo']}}
                </div>
            </div>
        </div>
    </main>
    <!-- <footer>
        <div class="container ">
            <div class="px-16 py-7 bg-blue-400">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad fugiat beatae maxime fugit harum ullam. Dolorum laboriosam, suscipit ut perferendis distinctio nobis doloremque facere, repellat nisi maxime dignissimos voluptate adipisci.
            </div>
        </div>
    </footer> -->
</body>
</html>