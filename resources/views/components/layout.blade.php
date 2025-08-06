<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Architect OZ</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body class="min-h-screen flex flex-col">
    <div class="px-10 ">
        <nav class="flex justify-between items-center py-4 border-b border-white/25"> {{--color/0-100 determines the opacity--}}
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo de Architect OZ" class="w-[100px]"> {{--Vite directive to 'import' assets--}}
                </a>
            </div>
            <div class="space-x-6">
                <a href="/">Inicio</a>
                <a href="{{route('about')}}">Trayectoria</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>
        </nav>
    </div>
    <main class="flex-grow"> {{--mx-auto centers items horizontaly ; max-w-[px] determines the maximum width of the container--}}
        {{ $slot }}
    </main>
    <x-footer/>
</body>
</html>