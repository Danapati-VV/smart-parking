<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Park.inUB - Detail Akun UB</title>
    <!-- Import font Konkhmer Sleokchher dari Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Konkhmer+Sleokchher&display=swap">
    <style>
        /* Variabel Warna */
        :root {
            --primary-blue: #0A3C71;
            --white: #ffffff;
            --light-gray: #f0f0f0;
            --dark-gray: #333333;
            --text-color: #333333;
            --shadow-color: rgba(0, 0, 0, 0.1);
            --input-border: #ccc;
            --button-color: #4CAF50;
            /* Warna hijau untuk tombol submit */
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: var(--light-gray);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 1080px;
            height: 1920px;
            /* Tinggi total untuk resolusi potret */
            max-width: 100vw;
            max-height: 100vh;
            background-color: var(--white);
            box-shadow: 0 0 15px var(--shadow-color);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            color: var(--text-color);
        }

        /* --- Header/Navbar --- */
        .navbar {
            width: 100%;
            height: 144px;
            /* Tinggi navbar */
            background-color: var(--primary-blue);
            /* Warna biru solid untuk navbar */
            display: flex;
            justify-content: flex-start;
            /* Logo dan teks di kiri */
            align-items: center;
            padding: 0 40px;
            box-sizing: border-box;
            color: var(--white);
        }

        .navbar .brand-logo-text {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .navbar .brand-logo-text {
            width: 43px;
            height: 83px;
            object-fit: contain;
        }

        .app-logo {
            width: 100px;
            height: auto;
        }

        /* Perubahan di sini untuk menata "Park.in UB" sejajar */
        .navbar .brand-logo-text .app-name-group {
            display: flex;
            flex-direction: row;
            /* Mengubah arah layout menjadi baris (Park.in dan UB sejajar) */
            align-items: baseline;
            /* Sejajarkan teks berdasarkan garis dasar (baseline) */
            gap: 5px;
            /* Jarak horizontal antara "Park.in" dan "UB" */
            font-size: 48px;
            /* Ukuran font untuk navbar */
            line-height: 1.2;
            color: var(--white);
        }

        .navbar .brand-logo-text .app-name-part-parkin {
            font-family: 'Konkhmer Sleokchher', cursive;
            font-weight: normal;
            /* Bobot font lebih tipis untuk "Park.in" */
        }

        .navbar .brand-logo-text .app-name-part-ub {
            font-family: 'Konkhmer Sleokchher', cursive;
            font-weight: bold;
            /* Bobot font lebih tebal untuk "UB" */
        }

        /* --- Main Content Area --- */
        .main-content-area {
            flex-grow: 1;
            /* Mengisi sisa ruang vertikal */
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            /* Pusatkan form secara horizontal */
            background-color: var(--light-gray);
            overflow-y: auto;
            /* Memungkinkan scroll jika form terlalu panjang */
        }

        .page-title {
            font-size: 48px;
            font-weight: bold;
            color: var(--primary-blue);
            margin-bottom: 40px;
            text-align: center;
        }

        .form-group {
            width: 100%;
            max-width: 800px;
            /* Batasi lebar form */
            margin-bottom: 30px;
            /* Jarak antar grup input */
        }

        .form-group label {
            display: block;
            font-size: 28px;
            color: var(--dark-gray);
            margin-bottom: 10px;
            font-weight: 500;
        }

        .form-group input[type="text"],
        .form-group select {
            width: 100%;
            padding: 25px;
            font-size: 28px;
            border: 2px solid var(--input-border);
            border-radius: 15px;
            box-sizing: border-box;
            /* Pastikan padding tidak menambah lebar */
            color: var(--text-color);
            background-color: var(--white);
        }

        .form-group input[type="text"]:focus,
        .form-group select:focus {
            border-color: var(--primary-blue);
            outline: none;
            box-shadow: 0 0 0 4px rgba(10, 60, 113, 0.2);
            /* Ring focus */
        }

        .submit-button {
            background-color: var(--button-color);
            color: var(--white);
            border: none;
            padding: 25px 50px;
            border-radius: 15px;
            font-size: 32px;
            font-weight: bold;
            cursor: pointer;
            width: 100%;
            max-width: 800px;
            margin-top: 40px;
            transition: background-color 0.2s;
        }

        .submit-button:hover {
            background-color: #45a049;
        }

        /* --- Media Queries untuk Responsivitas --- */
        @media (max-width: 1080px),
        (max-height: 1920px) {
            .container {
                width: 100vw;
                height: 100vh;
                box-shadow: none;
            }

            .navbar {
                height: 100px;
                padding: 0 20px;
            }

            .navbar .brand-logo-text {
                gap: 10px;
            }

            .navbar .brand-logo-text .app-logo {
                width: 35px;
                height: 68px;
            }

            .navbar .brand-logo-text .app-name-group {
                font-size: 36px;
            }

            .main-content-area {
                padding: 20px;
            }

            .page-title {
                font-size: 36px;
                margin-bottom: 30px;
            }

            .form-group {
                margin-bottom: 20px;
            }

            .form-group label {
                font-size: 22px;
                margin-bottom: 8px;
            }

            .form-group input[type="text"],
            .form-group select {
                padding: 20px;
                font-size: 22px;
                border-radius: 10px;
            }

            .submit-button {
                padding: 20px 40px;
                font-size: 28px;
                border-radius: 10px;
                margin-top: 30px;
            }
        }

        @media (max-width: 600px) {
            .navbar .brand-logo-text .app-name-group {
                font-size: 28px;
            }

            .page-title {
                font-size: 30px;
            }

            .form-group label,
            .form-group input[type="text"],
            .form-group select {
                font-size: 18px;
            }

            .submit-button {
                font-size: 24px;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <!-- HEADER / NAVBAR -->
        <div class="navbar">
            <div class="brand-logo-text">
                <img src="{{ asset('images/logo.png') }}" alt="Park.inUB Logo" class="app-logo">
                {{-- Mengatur "Park.in UB" sejajar dengan logo --}}
                <div class="app-name-group">
                    <span class="app-name-part-parkin">ark.in</span>
                    <span class="app-name-part-ub">UB</span>
                </div>
            </div>
            {{-- Tidak ada ikon profil di sini karena ini halaman input data --}}
        </div>

        <!-- MAIN CONTENT AREA (FORM) -->
        <div class="main-content-area">
            <h1 class="page-title">Pilih Fakultas Anda</h1>

            <form action="{{ route('post.sign') }}" method="POST" class="form-container">
                {{-- @csrf Laravel CSRF Token (penting untuk keamanan form) --}}

                @csrf

                <div class="form-group">
                    <label for="faculty_id">Fakultas</label>
                    <select id="faculty_id" name="faculty_id" required>
                        <option value="">Pilih Fakultas</option>
                        @foreach ($faculties as $f)
                            <option value="{{ $f->id }}">{{ $f->name }}</option>
                        @endforeach
                    </select>
                    @error('faculty_id') <div class="text-red-600">{{ $message }}</div> @enderror
                </div>

                <button type="submit" class="submit-button">Masuk</button>
            </form>
        </div>
    </div>

</body>

</html>
