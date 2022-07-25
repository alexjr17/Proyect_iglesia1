<!DOCTYPE html>
<html lang="en">
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>desde la web de la iglesia</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<style>
/* mail */
.header {
    height: 12rem/* 192px */;
    --tw-bg-opacity: 1;
    background-color: rgba(37, 99, 235, var(--tw-bg-opacity));
    display: flex;
    justify-content: center;
    align-items: center;
    --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    margin-left: 1rem/* 16px */;
    margin-right: 1rem/* 16px */;
    /* @apply h-48 bg-blue-600 flex justify-center items-center shadow-lg rounded-b-lg mx-4; */
}
.header-h1 {
    font-size: 3.75rem/* 60px */;
    line-height: 1;
    --tw-text-opacity: 1;
    color: rgba(255, 255, 255, var(--tw-text-opacity));
    margin-left: auto;
    margin-right: auto;
    /* @apply text-6xl text-white mx-auto; */
}
.main {
    height: 20rem/* 320px */;
    --tw-bg-opacity: 1;
    background-color: rgba(156, 163, 175, var(--tw-bg-opacity));
    width: 100%;
    border-left-width: 4px;
    --tw-border-opacity: 1;
    border-color: rgba(29, 78, 216, var(--tw-border-opacity));
    opacity: 0.5;
    /* @apply h-80 bg-gray-400 w-full border-l-4 border-r-4 border-blue-700 opacity-50; */
}
.main.body {
    display: grid;
    grid-template-columns: repeat(1, minmax(0, 1fr));
    gap: 0.75rem/* 12px */;
    place-content: center;

    /* @apply grid grid-cols-1 gap-3 place-content-center; */
}
</style>
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