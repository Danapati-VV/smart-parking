<x-header>
 <!-- resources/views/components/header.blade.php -->
<div class="flex items-center justify-center text-white space-x-2">
    <img src="/images/Polosan Putih.png" alt="Logo" class="w-12 h-12">
    <div class="text-left leading-none">
        <h1 class="text-xl font-bold">Park.in</h1>
        <h2 class="text-sm font-semibold">UB</h2>
    </div>
</div>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Splash - Park.in UB</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-blue-900 flex items-center justify-center">

    <!-- Komponen Header di Tengah -->
    <x-header />

</body>
</html>

</x-header>