<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>desde la web de la iglesia</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <div class="h-48 bg-blue-600 flex justify-center items-center shadow-lg rounded-b-lg mx-4">
            <h1 class="text-6xl text-white m-x-auto">Iglesia guaranda</h1>
        </div>
    </header>
    <main class="container ">
        <div class="h-80 bg-gray-400 w-full border-l-4 border-r-4 border-blue-700 opacity-50">
            <div class="grid grid-cols-1 gap-3 place-content-center">
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
    <footer>
        <div class="container ">
            <div class="px-16 py-7 bg-blue-400">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad fugiat beatae maxime fugit harum ullam. Dolorum laboriosam, suscipit ut perferendis distinctio nobis doloremque facere, repellat nisi maxime dignissimos voluptate adipisci.
            </div>
        </div>
    </footer>
</body>
</html>