<x-header>

{{-- resources/views/components/header.blade.php --}}
<style>
    /* Import font Konkhmer Sleokchher dari Google Fonts */
    @import url('https://fonts.googleapis.com/css2?family=Konkhmer+Sleokchher&display=swap');

    /* Definisi kelas untuk teks Park.in dan UB */
    .font-konkhmer-parkin {
        font-family: 'Konkhmer Sleokchher', cursive;
        font-weight: normal; /* Lebih tipis untuk Park.in */
    }

    .font-konkhmer-ub {
        font-family: 'Konkhmer Sleokchher', cursive;
        font-weight: bold; /* Lebih tebal untuk UB */
    }

    /* Penyesuaian tinggi logo agar sesuai dengan h-19 (76px) */
    .h-19-custom {
        height: 50px;
    }
</style>

<div class="min-h-screen bg-[#093C71] flex items-center justify-center">
    <div class="flex items-center text-white space-x-[1px]">
        {{-- Pastikan logo.png ada di folder public/images/ --}}
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-auto h-19-custom">
        <div class="text-left leading-tight -ml-0">
            {{-- Menggunakan span untuk kontrol font-weight yang lebih baik dan semantik --}}
            <span class="text-xl font-konkhmer-parkin block">Park.in</span>
            <span class="text-sm font-konkhmer-ub block">UB</span>
        </div>
    </div>
</div>

</x-header>
