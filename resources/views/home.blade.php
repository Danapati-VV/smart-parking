<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Park.inUB - Beranda</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Variabel Warna (Opsional) */
        :root {
            --primary-blue: #0A3C71; /* Warna biru gelap (mungkin tidak terpakai sekarang) */
            --white: #ffffff;
            --light-gray: #f0f0f0;
            --dark-gray: #333333;
            --text-color: #333333;
            --shadow-color: rgba(0, 0, 0, 0.1);

            /* Warna Pin (contoh) */
            --pin-yellow: #F8E71C;
            --pin-red: #D0021B;
            --pin-green: #7ED321;
            --pin-orange: #F5A623;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: var(--light-gray);
            display: flex;
            justify-content: center;
            align-items: flex-start; /* Agar konten dimulai dari atas */
            min-height: 100vh;
        }

        .container {
            width: 1080px;
            /* Tinggi bisa disesuaikan atau biarkan auto tergantung konten */
            max-width: 100vw;
            background-color: var(--white);
            box-shadow: 0 0 15px var(--shadow-color);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            color: var(--text-color);
        }

        /* --- Header/Navbar (Overlay) --- */
        .navbar {
            width: 100%;
            height: 144px; /* Tinggi navbar */
            /* background-color: var(--primary-blue); HAPUS BACKGROUND COLOR */
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 40px; /* Padding kiri dan kanan */
            box-sizing: border-box;
            color: var(--white); /* Warna teks navbar */
            position: absolute; /* Posisikan di atas konten lain */
            top: 0;
            left: 0;
            z-index: 10; /* Pastikan navbar di atas gambar */
        }

        .navbar .brand-logo-text {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .navbar .brand-logo-text .app-logo {
            width: 43px;
            height: 83px;
            object-fit: contain;
        }

        .navbar .brand-logo-text .app-name {
            font-size: 48px;
            font-weight: bold;
            color: var(--white); /* Pastikan teks tetap putih atau warna kontras */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Tambahkan shadow agar lebih mudah dibaca */
        }

        .navbar .profile-icon-link {
            text-decoration: none;
            color: var(--white);
        }
        .navbar .profile-icon-link i {
            font-size: 36px; /* Ukuran ikon profil */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Tambahkan shadow agar lebih mudah dibaca */
        }

        /* --- Header Image (Sebagai Latar Belakang Navbar) --- */
        .header-image-container {
            position: relative; /* Untuk menahan posisi absolut navbar */
        }

        .header-image {
            width: 100%;
            /* Tinggi harus cukup untuk menampung navbar dan bagian atas gambar */
            height: auto; /* Biarkan tinggi menyesuaikan aspek rasio gambar */
            object-fit: cover;
            display: block;
            max-height: 400px; /* Batas tinggi maksimal gambar header */
        }

        /* --- Scrollable Content Area --- */
        .scrollable-content {
            flex-grow: 1;
            overflow-y: auto;
            padding: 30px 40px;
            display: flex;
            flex-direction: column;
            gap: 25px;
            background-color: var(--light-gray);
            margin-top: -50px; /* Tarik konten ke atas agar berada di bawah gambar header */
            padding-top: 70px; /* Berikan ruang di atas konten agar tidak tertutup gambar header */
            border-radius: 30px 30px 0 0; /* Berikan sudut melengkung di bagian atas konten */
        }

        /* --- Parking Area Card --- */
        .parking-area-card {
            background-color: var(--white);
            border-radius: 20px;
            box-shadow: 0 5px 15px var(--shadow-color);
            display: flex;
            overflow: hidden;
            height: 250px;
        }

        .parking-area-card .card-image-container {
            flex-shrink: 0;
            width: 300px;
            position: relative;
        }

        .parking-area-card .card-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .parking-area-card .pin-icon {
            position: absolute;
            top: 25px;
            left: 25px;
            width: 60px;
            height: 60px;
            object-fit: contain;
        }

        .parking-area-card .card-details {
            flex-grow: 1;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 8px;
        }

        .parking-area-card .area-title {
            font-size: 36px;
            font-weight: bold;
            color: var(--dark-gray);
        }

        .parking-area-card .area-name {
            font-size: 28px;
            color: #666;
            margin-bottom: 10px;
        }

        .parking-area-card .capacity-row {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
        }

        .parking-area-card .capacity-text {
            font-size: 28px;
            color: var(--dark-gray);
        }

        .parking-area-card .capacity-percentage {
            font-size: 30px;
            font-weight: bold;
            color: var(--primary-blue);
        }


        /* --- Media Queries untuk Responsivitas --- */
        @media (max-width: 1080px), (max-height: 1920px) {
            .container {
                width: 100vw;
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
            .navbar .brand-logo-text .app-name {
                font-size: 36px;
            }
            .navbar .profile-icon-link i {
                font-size: 28px;
            }
            .header-image {
                max-height: 300px;
            }
            .scrollable-content {
                padding: 20px 20px;
                gap: 15px;
                margin-top: -30px;
                padding-top: 60px;
                border-radius: 20px 20px 0 0;
            }
            .parking-area-card {
                height: 200px;
            }
            .parking-area-card .card-image-container {
                width: 200px;
            }
            .parking-area-card .pin-icon {
                top: 15px;
                left: 15px;
                width: 45px;
                height: 45px;
            }
            .parking-area-card .card-details {
                padding: 20px;
                gap: 5px;
            }
            .parking-area-card .area-title {
                font-size: 28px;
            }
            .parking-area-card .area-name,
            .parking-area-card .capacity-text,
            .parking-area-card .capacity-percentage {
                font-size: 22px;
            }
        }

        @media (max-width: 600px) {
            .parking-area-card {
                flex-direction: column;
                height: auto;
            }
            .parking-area-card .card-image-container {
                width: 100%;
                height: 150px;
            }
            .parking-area-card .pin-icon {
                top: 15px;
                left: 50%;
                transform: translateX(-50%);
            }
            .parking-area-card .card-details {
                text-align: center;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header-image-container">
            <div class="navbar">
                <div class="brand-logo-text">
                    <img src="{{ asset('images/logo.png') }}" alt="Park.inUB Logo" class="app-logo">
                    <div class="app-name">Park.inUB</div>
                </div>
                <a href="{{ url('/profile') }}" class="profile-icon-link">
                    <i class="fa-solid fa-user"></i>
                </a>
            </div>
            <img src="{{ asset('images/rektorat.png') }}" alt="Gedung UB" class="header-image">
        </div>

        <div class="scrollable-content">

            <div class="parking-area-card">
                <div class="card-image-container">
                    <img src="{{ asset('images/gedung_g.png') }}" alt="FILKOM Gedung G" class="card-image">
                    <img src="{{ asset('images/pin_yellow.png') }}" alt="Pin Kuning" class="pin-icon">
                </div>
                <div class="card-details">
                    <div class="area-title">Area Parkir</div>
                    <div class="area-name">FILKOM Gedung G</div>
                    <div class="capacity-row">
                        <span class="capacity-text">Kapasitas</span>
                        <span class="capacity-percentage">69,88%</span>
                    </div>
                </div>
            </div>

            <div class="parking-area-card">
                <div class="card-image-container">
                    <img src="{{ asset('images/edutech_img.png') }}" alt="FILKOM EduTech" class="card-image">
                    <img src="{{ asset('images/pin_red.png') }}" alt="Pin Merah" class="pin-icon">
                </div>
                <div class="card-details">
                    <div class="area-title">Area Parkir</div>
                    <div class="area-name">FILKOM Edutech</div>
                    <div class="capacity-row">
                        <span class="capacity-text">Kapasitas</span>
                        <span class="capacity-percentage">Coming Soon</span>
                    </div>
                </div>
            </div>

            <div class="parking-area-card">
                <div class="card-image-container">
                    <img src="{{ asset('images/fib_img.png') }}" alt="Fakultas Ilmu Budaya" class="card-image">
                    <img src="{{ asset('images/pin_green.png') }}" alt="Pin Hijau" class="pin-icon">
                </div>
                <div class="card-details">
                    <div class="area-title">Area Parkir</div>
                    <div class="area-name">Fakultas Ilmu Budaya</div>
                    <div class="capacity-row">
                        <span class="capacity-text">Kapasitas</span>
                        <span class="capacity-percentage">Coming Soon</span>
                    </div>
                </div>
            </div>

            <div class="parking-area-card">
                <div class="card-image-container">
                    <img src="{{ asset('images/hukum_img.png') }}" alt="Fakultas Hukum" class="card-image">
                    <img src="{{ asset('images/pin_orange.png') }}" alt="Pin Oranye" class="pin-icon">
                </div>
                <div class="card-details">
                    <div class="area-title">Area Parkir</div>
                    <div class="area-name">Fakultas Hukum</div>
                    <div class="capacity-row">
                        <span class="capacity-text">Kapasitas</span>
                        <span class="capacity-percentage">Coming Soon</span>
                    </div>
                </div>
            </div>

            <div class="parking-area-card">
                <div class="card-image-container">
                    <img src="{{ asset('images/rusunawa_img.png') }}" alt="Rusunawa UB" class="card-image">
                    <img src="{{ asset('images/pin_green.png') }}" alt="Pin Hijau" class="pin-icon">
                </div>
                <div class="card-details">
                    <div class="area-title">Area Parkir</div>
                    <div class="area-name">Rusunawa UB</div>
                    <div class="capacity-row">
                        <span class="capacity-text">Kapasitas</span>
                        <span class="capacity-percentage">Coming Soon</span>
                    </div>
                </div>
            </div>

            <div class="parking-area-card">
                <div class="card-image-container">
                    <img src="{{ asset('images/vokasi_img.png') }}" alt="Pendidikan Vokasi UB" class="card-image">
                    <img src="{{ asset('images/pin_green.png') }}" alt="Pin Hijau" class="pin-icon">
                </div>
                <div class="card-details">
                    <div class="area-title">Area Parkir</div>
                    <div class="area-name">Pendidikan Vokasi UB</div>
                    <div class="capacity-row">
                        <span class="capacity-text">Kapasitas</span>
                        <span class="capacity-percentage">Coming Soon</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>
