<!DOCTYPE html>
<html lang="en">
<style>
    .h-48 {
        height: 12rem/* 192px */;
    }
    .bg-blue-600 {
        --tw-bg-opacity: 1;
        background-color: rgba(37, 99, 235, var(--tw-bg-opacity));
    }
    .flex {
        display: flex;
    }
    .items-center {
        align-items: center;
    }
    .shadow-lg {
        --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }
    .rounded-b-lg {
        border-bottom-right-radius: 0.5rem/* 8px */;
        border-bottom-left-radius: 0.5rem/* 8px */;
    }
    .mx-4 {
        margin-left: 1rem/* 16px */;
        margin-right: 1rem/* 16px */;
    }
    .text-6xl {
        font-size: 3.75rem/* 60px */;
        line-height: 1;
    }
    .text-white {
        --tw-text-opacity: 1;
        color: rgba(255, 255, 255, var(--tw-text-opacity));
    }
    .mx-auto {
        margin-left: auto;
        margin-right: auto;
    }
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
        <div class="h-48 bg-blue-600 flex justify-center items-center shadow-lg rounded-b-lg mx-4">
            <h1 class="text-6xl text-white mx-auto">Iglesia guaranda</h1>
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