<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smart Parking</title>
    @vite('resources/css/app.css')

</head>
<body>
    <nav>
        <div class="bg-blue-200 flex justify-between items-center p-2 rounded-lg">
        <div class="flex items-center">
            <img src="{{asset('images/kirkirkir.png')}}" alt="kir" class="max-h-20 max-w-auto">
        </div>
        <div class="flex space-x-8">
            <p class="hover:text-2xl transition-all duration-200">Area Parkir</p>
            <p class="hover:text-2xl transition-all duration-200">Login</p>
            <p class="hover:text-2xl transition-all duration-200">Login</p>
            
        </div>
    </nav>

</body>
</html>