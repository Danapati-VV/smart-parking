<x-header>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Park.inUB - My Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Variabel Warna (Opsional, tapi praktik bagus) */
        :root {
            --primary-blue: #0A3C71; /* Warna biru gelap navbar */
            --light-blue: #4A90E2; /* Warna biru lingkaran profil */
            --white: #ffffff;
            --light-gray: #f0f0f0;
            --dark-gray: #333333;
            --text-color: #333333;
            --border-color: #e0e0e0;
            --shadow-color: rgba(0, 0, 0, 0.1);
            --progress-fill-yellow: #F8E71C; /* Kuning progress bar */
            --progress-fill-red: #D0021B;   /* Merah progress bar */
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
            background-color: var(--primary-blue);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 40px;
            box-sizing: border-box;
            color: var(--white);
        }

        /* Grup untuk Logo dan Teks "Park.inUB" */
        .navbar .brand-logo-text {
            display: flex; /* Menggunakan Flexbox untuk menata logo dan teks */
            align-items: center; /* Pusatkan secara vertikal */
            gap: 15px; /* Jarak antara logo dan teks */
        }

        .navbar .brand-logo-text .app-logo {
            width: 43px; /* Ukuran lebar logo.png */
            height: 83px; /* Ukuran tinggi logo.png */
            object-fit: contain; /* Memastikan gambar tidak terdistorsi */
        }

        .navbar .brand-logo-text .app-name {
            font-size: 48px; /* Ukuran font untuk "Park.inUB" */
            font-weight: bold;
            color: var(--white);
        }

        .navbar .profile-link {
            display: flex;
            align-items: center;
            gap: 15px;
            text-decoration: none;
            color: var(--white);
            font-size: 32px;
            font-weight: 500;
        }

        .navbar .profile-link i {
            font-size: 36px;
        }

        /* --- Konten Utama (padding dan margin untuk setiap bagian) --- */
        .main-content-area {
            flex-grow: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            gap: 40px;
            overflow-y: auto;
        }

        /* --- Card Styling Umum --- */
        .card {
            background-color: var(--white);
            border-radius: 20px;
            box-shadow: 0 5px 15px var(--shadow-color);
            padding: 40px;
        }

        /* --- Profil Card --- */
        .profile-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .profile-card .profile-circle {
            width: 200px;
            height: 200px;
            background-color: var(--light-blue);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 25px;
        }

        .profile-card .profile-circle i {
            font-size: 100px;
            color: var(--white);
        }

        .profile-card .name {
            font-size: 40px;
            font-weight: bold;
            margin-bottom: 10px;
            color: var(--text-color);
        }

        .profile-card .nim {
            font-size: 28px;
            color: #666;
            margin-bottom: 5px;
        }

        .profile-card .faculty-major {
            font-size: 28px;
            color: #666;
            margin-bottom: 5px;
        }
         .profile-card .semester {
            font-size: 28px;
            color: #666;
            margin-bottom: 25px;
        }

        .profile-card .edit-button {
            background-color: #E0E0E0;
            color: var(--dark-gray);
            border: none;
            padding: 15px 30px;
            border-radius: 10px;
            font-size: 24px;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        .profile-card .edit-button:hover {
            background-color: #ccc;
        }

        /* --- Kapasitas Parkir Section --- */
        .parking-capacity-section h2 {
            font-size: 36px;
            margin-bottom: 25px;
            color: var(--dark-gray);
            text-align: left;
        }

        .parking-capacity-card {
            margin-bottom: 25px;
        }

        .parking-capacity-card:last-child {
            margin-bottom: 0;
        }

        .parking-capacity-card .area-name {
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 15px;
            color: var(--primary-blue);
        }

        .parking-capacity-card .capacity-text {
            font-size: 26px;
            color: #666;
            margin-bottom: 15px;
        }

        .parking-capacity-card .progress-bar-container {
            background-color: #e0e0e0;
            border-radius: 10px;
            height: 25px;
            overflow: hidden;
        }

        .parking-capacity-card .progress-bar-fill {
            height: 100%;
            border-radius: 10px;
            transition: width 0.5s ease-in-out;
        }

        /* --- Pengaturan Akun Section --- */
        .account-settings-section h2 {
            font-size: 36px;
            margin-bottom: 25px;
            color: var(--dark-gray);
            text-align: left;
        }

        .account-settings-grid {
            display: flex;
            justify-content: space-around;
            gap: 30px;
            flex-wrap: wrap;
        }

        .setting-button {
            background-color: var(--white);
            border-radius: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            width: 40%;
            max-width: 400px;
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            text-decoration: none;
            color: var(--dark-gray);
            font-size: 28px;
            font-weight: 500;
            transition: background-color 0.2s;
            cursor: pointer;
            box-sizing: border-box;
        }
        .setting-button:hover {
            background-color: var(--light-gray);
        }

        .setting-button i {
            font-size: 60px;
            margin-bottom: 15px;
            color: var(--primary-blue);
        }

        /* --- Tombol Keluar --- */
        .logout-button-wrapper {
            padding: 40px;
            text-align: center;
            margin-top: auto;
        }

        .logout-button {
            background-color: var(--progress-fill-red);
            color: var(--white);
            border: none;
            padding: 25px 50px;
            border-radius: 15px;
            font-size: 32px;
            font-weight: bold;
            cursor: pointer;
            width: 100%;
            max-width: 600px;
            transition: background-color 0.2s;
        }
        .logout-button:hover {
            background-color: #b00010;
        }


        /* --- Media Queries untuk Responsivitas --- */
        @media (max-width: 1080px), (max-height: 1920px) {
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
                width: 35px; /* Sedikit lebih kecil untuk layar responsif */
                height: 68px;
            }
            .navbar .brand-logo-text .app-name {
                font-size: 36px;
            }
            .navbar .profile-link {
                font-size: 24px;
                gap: 10px;
            }
            .navbar .profile-link i {
                font-size: 28px;
            }
            .main-content-area {
                padding: 20px;
                gap: 20px;
            }
            .card {
                padding: 25px;
                border-radius: 15px;
            }
            .profile-card .profile-circle {
                width: 150px;
                height: 150px;
                margin-bottom: 20px;
            }
            .profile-card .profile-circle i {
                font-size: 70px;
            }
            .profile-card .name {
                font-size: 30px;
                margin-bottom: 8px;
            }
            .profile-card .nim,
            .profile-card .faculty-major,
            .profile-card .semester {
                font-size: 20px;
            }
            .profile-card .edit-button {
                padding: 12px 25px;
                font-size: 20px;
            }
            .parking-capacity-section h2,
            .account-settings-section h2 {
                font-size: 28px;
                margin-bottom: 20px;
            }
            .parking-capacity-card .area-name {
                font-size: 24px;
                margin-bottom: 10px;
            }
            .parking-capacity-card .capacity-text {
                font-size: 20px;
                margin-bottom: 10px;
            }
            .parking-capacity-card .progress-bar-container {
                height: 20px;
            }
            .account-settings-grid {
                gap: 20px;
                justify-content: center;
            }
            .setting-button {
                width: 45%;
                padding: 30px 15px;
                font-size: 22px;
            }
            .setting-button i {
                font-size: 50px;
                margin-bottom: 10px;
            }
            .logout-button-wrapper {
                padding: 20px;
            }
            .logout-button {
                padding: 20px 40px;
                font-size: 28px;
            }
        }

        @media (max-width: 700px) {
            .account-settings-grid {
                flex-direction: column;
                align-items: center;
            }
            .setting-button {
                width: 90%;
                max-width: 400px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="navbar">
            {{-- Mengelompokkan logo dan teks "Park.inUB" --}}
            <div class="brand-logo-text">
                <img src="{{ asset('images/logo.png') }}" alt="Park.inUB Logo" class="app-logo">
                <div class="app-name">ark.inUB</div>
            </div>
            <a href="#" class="profile-link">
                My Profile <i class="fa-solid fa-user-circle"></i>
            </a>
        </div>

        <div class="main-content-area">

            <div class="card profile-card">
                <div class="profile-circle">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="name">Zidan Fadil Yahya</div>
                <div class="nim">225150300111034</div>
                <div class="faculty-major">Fakultas Ilmu Komputer</div>
                <div class="semester">Teknik Komputer, Semester 6</div>
                <button class="edit-button">Edit Profile</button>
            </div>

            <div class="parking-capacity-section">
                <h2>Kapasitas Parkir Fakultas Saya</h2>
                <div class="card parking-capacity-card">
                    <div class="area-name">Area Parkir FILKOM Gedung G</div>
                    <div class="capacity-text">Kapasitas: 69.88% Penuh</div>
                    <div class="progress-bar-container">
                        <div class="progress-bar-fill" style="width: 69.88%; background-color: var(--progress-fill-yellow);"></div>
                    </div>
                </div>
                <div class="card parking-capacity-card">
                    <div class="area-name">Area Parkir FILKOM EduTech</div>
                    <div class="capacity-text">Kapasitas: 88.69% Penuh</div>
                    <div class="progress-bar-container">
                        <div class="progress-bar-fill" style="width: 88.69%; background-color: var(--progress-fill-red);"></div>
                    </div>
                </div>
            </div>

            <div class="account-settings-section">
                <h2>Pengaturan Akun</h2>
                <div class="account-settings-grid">
                    <a href="#" class="setting-button">
                        <i class="fa-solid fa-gear"></i>
                        Preferensi Parkir
                    </a>
                    <a href="#" class="setting-button">
                        <i class="fa-solid fa-bell"></i>
                        Kelola Notifikasi
                    </a>
                </div>
            </div>

        </div> <div class="logout-button-wrapper">
            <button class="logout-button">Keluar</button>
        </div>

    </div>

</body>
</html>

</x-header>
