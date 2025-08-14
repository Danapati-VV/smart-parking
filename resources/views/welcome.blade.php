<x-header>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            setTimeout(function () {
                window.location.href = "{{ route('sign') }}";
            }, 3000); // 3000 ms = 3 detik
        });
    </script>
    <div class="min-h-screen flex justify-center items-center bg-blue-950">
        <img src="{{ asset('images/logo-copy.png') }}" alt="Logo" class="max-h-20">
        <div>
            <h1 class="text-white">
                ark.in
            </h1>
            <h1 class="text-white">
                UB
            </h1>
        </div>

    </div>
</x-header>
