<x-header>
 <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Park.in UB</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white min-h-screen flex items-center justify-center">

    <div class="w-full max-w-md mx-auto text-center space-y-6 px-4">

        <!-- Logo Park.in UB -->
        <div class="flex justify-center items-center space-x-0">
    <img src="{{ asset('images/fakir.png') }}" alt="Park.in UB" class="w-auto h-17">
    <div class="text-left leading-tight -ml-1">
        <h1 class="text-2xl font-bold text-orange-500">Park.in</h1>
        <h2 class="text-xl font-bold text-blue-900">UB</h2>
    </div>
</div>


        <!-- Teks promosi -->
        <div class="text-blue-900 font-bold text-xl leading-relaxed">
            Parkir di UB?<br>
            Cek Park.in UB Aja!
        </div>

        <!-- Logo UB -->
        <div class="flex justify-center">
            <img src="{{ asset('images/logo-ub.png') }}" alt="Logo UB" class="w-auto h-60">
        </div>

        <!-- Tombol Login -->
        <div class="space-y-4">
            <a href="/guest" class="block w-full bg-blue-900 text-white py-3 rounded-full font-bold hover:bg-blue-800 transition">
                MASUK SEBAGAI PENGUNJUNG
            </a>
            <a href="/login-ub" class="block w-full bg-orange-500 text-white py-3 rounded-full font-bold hover:bg-orange-400 transition">
                MASUK DENGAN AKUN UB
            </a>
        </div>
    </div>

</body>
</html>


</x-header>