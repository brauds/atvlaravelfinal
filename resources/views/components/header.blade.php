<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
<div class="bg-slate-200 py-4 px-6 flex justify-between items-center min-h-20 border-b border-red-500">
    <!-- Logo -->
    <div class="flex items-center">
    <a href="/"><img src="{{asset('./img/logo - header.png')}}" class="h-12 w-auto mr-5"></a>

</div>


    <!-- Opções de Página -->
    <ul class="flex items-center justify-center flex-grow">
        <li class="flex-grow">
            <a href="{{ route('home') }}" class="text-gray-800 hover:text-gray-600">Home</a>
        </li>
        <li class="flex-grow">
            <a href="{{ route('aboutus') }}" class="text-gray-800 hover:text-gray-600">Sobre nós</a>
        </li>
        <li class="flex-grow">
            <a href="{{ route('contact') }}" class="text-gray-800 hover:text-gray-600">Contato</a>
        </li>
    </ul>
</div>


</body>
</html>