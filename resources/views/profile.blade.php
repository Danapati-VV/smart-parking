<x-header>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile - Park.inUB</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        /* General Body Styles */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f2f5; /* Light grey background */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            min-height: 100vh;
        }

        /* Container for the whole app */
        .app-container {
            width: 100%;
            max-width: 450px; /* Max width similar to mobile view */
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        /* Header Bar */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            background-color: #007bff; /* Primary blue color */
            color: white;
            font-size: 1.2em;
            font-weight: 500;
        }

        /* Logo in Header */
        .header .logo {
            display: flex;
            align-items: center;
            gap: 5px; /* Space between logo parts */
        }

        .header .logo img {
            height: 25px; /* Adjust height as needed for the logo images */
            vertical-align: middle;
            filter: brightness(0) invert(1); /* Makes images white if they are black on transparent */
        }

        .header .logo .logo-main {
             height: 25px; /* Adjust height for "ark.in" */
        }
        .header .logo .logo-p-motor {
             height: 30px; /* Adjust height for P motor icon */
        }
        .header .logo .logo-ub {
             height: 25px; /* Adjust height for "UB" */
        }


        .header .profile-icon {
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            padding: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
        }

        .header .profile-icon img {
            width: 20px; /* Example icon size */
            height: 20px;
            filter: invert(100%); /* Make icon white */
        }
        
        /* Main Content Area */
        .main-content {
            padding: 20px;
            background-color: #f0f2f5; /* Light grey background for sections */
        }

        /* Card Styles */
        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            text-align: center;
        }

        .card-profile .avatar-circle {
            background-color: #007bff;
            border-radius: 50%;
            width: 80px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
        }

        .card-profile .avatar-circle img {
            width: 40px; /* Example icon size */
            height: 40px;
            filter: invert(100%); /* Make icon white */
        }

        .card-profile h2 {
            font-size: 1.4em;
            color: #333;
            margin-bottom: 5px;
        }

        .card-profile p {
            font-size: 0.9em;
            color: #666;
            margin-bottom: 3px;
        }

        .card-profile .edit-button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9em;
            margin-top: 15px;
        }

        .card-profile .edit-button:hover {
            background-color: #0056b3;
        }

        /* Parking Capacity Card */
        .card-parking-capacity {
            text-align: left;
        }

        .card-parking-capacity h3 {
            font-size: 1.1em;
            color: #333;
            margin-bottom: 15px;
            text-align: center;
        }

        .parking-area-item {
            background-color: #e9f0f8; /* Lighter blue background for items */
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 10px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        
        .parking-area-item:last-child {
            margin-bottom: 0;
        }

        .parking-area-item p {
            font-size: 0.95em;
            color: #333;
            margin-bottom: 8px;
        }

        .parking-area-item .capacity-text {
            font-size: 0.85em;
            color: #555;
            margin-bottom: 8px;
        }

        .progress-bar-container {
            background-color: #e0e0e0;
            border-radius: 10px;
            height: 10px;
            overflow: hidden;
        }

        .progress-bar {
            height: 100%;
            border-radius: 10px;
            text-align: right; /* Ensure text aligns to the right if added */
            line-height: 10px;
            color: white; /* For percentage text if added */
            font-size: 0.7em;
            transition: width 0.5s ease-in-out;
        }

        /* Specific progress bar colors based on capacity */
        .progress-bar.yellow {
            background-color: #ffc107; /* Yellow */
        }
        .progress-bar.red {
            background-color: #dc3545; /* Red */
        }
        .progress-bar.green {
            background-color: #28a745; /* Green */
        }

        /* Account Settings Card */
        .card-account-settings {
            display: flex;
            justify-content: space-around;
            padding: 10px 0; /* Adjust padding for button spacing */
        }

        .setting-button {
            background-color: #e9f0f8; /* Light blue background */
            border-radius: 8px;
            padding: 15px 10px;
            width: 48%; /* To make them side-by-side */
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            cursor: pointer;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }

        .setting-button:hover {
            background-color: #d1e2f6;
        }

        .setting-button img {
            width: 25px;
            height: 25px;
            margin-bottom: 8px;
            filter: invert(20%) sepia(90%) saturate(700%) hue-rotate(200deg) brightness(80%); /* Example icon color adjustment */
        }

        /* Logout Button */
        .logout-button {
            background-color: #dc3545; /* Red color */
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1em;
            width: calc(100% - 40px); /* Full width minus padding */
            margin: 0 20px 20px; /* Bottom padding for the container */
            display: block; /* Ensures it takes full width */
            text-align: center;
        }

        .logout-button:hover {
            background-color: #c82333;
        }

        /* Placeholder for icons - in a real app, use SVG or Font Awesome */
        .icon {
            display: inline-block;
            background-size: contain;
            background-repeat: no-repeat;
        }
        .icon-user { background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>'); }
        .icon-settings { background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M19.43 12.98c.04-.32.07-.64.07-.98s-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.3-.61-.22l-2.49 1c-.52-.39-1.07-.75-1.67-1.03L15 2.5c-.05-.27-.29-.45-.58-.45h-4c-.29 0-.53.18-.58.45l-.44 2.19c-.6.28-1.15.64-1.67 1.03l-2.49-1c-.22-.08-.49 0-.61.22l-2 3.46c-.12.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98s.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1c.52.39 1.07.75 1.67 1.03l.44 2.19c.05.27.29.45.58.45h4c.29 0 .53-.18.58-.45l.44-2.19c.6-.28 1.15-.64 1.67-1.03l2.49 1c.22.08.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zm-1.92-1.47c.05.15.08.31.08.47s-.03.32-.08.47l-1.8 1.4c-.11.08-.18.2-.18.34v.86c0 .14.07.26.18.34l1.8 1.4c.05.15.08.31.08.47s-.03.32-.08.47l-2.11 1.65c-.11.08-.2.18-.26.29l-1.45 2.51c-.05.1-.14.16-.24.16h-.97c-.1 0-.19-.06-.24-.16l-1.45-2.51c-.06-.11-.15-.21-.26-.29l-2.11-1.65c-.05-.15-.08-.31-.08-.47s.03-.32.08-.47l1.8-1.4c.11-.08.18-.2.18-.34v-.86c0-.14-.07-.26-.18-.34l-1.8-1.4c-.05-.15-.08-.31-.08-.47s.03-.32.08-.47l2.11-1.65c.11-.08.2-.18.26-.29l1.45-2.51c.05-.1.14-.16.24-.16h.97c.1 0 .19.06.24.16l1.45 2.51c.06.11.15.21.26.29l2.11 1.65zm-2.07 1.47c0-1.65-1.35-3-3-3s-3 1.35-3 3 1.35 3 3 3 3-1.35 3-3z"/></svg>'); }
        .icon-bell { background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.63 5.36 6 7.93 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z"/></svg>'); }
    </style>
</head>
<body>
    <div class="app-container">
        <?php
        // Data Dummy (Contoh, dalam aplikasi nyata ini akan diambil dari database)
        $nama_pengguna = "Zidan Fadil Yahya"; // Ini bisa diganti dengan nama Sir LightY jika ingin disesuaikan
        $nim = "225150300111034";
        $fakultas = "Fakultas Ilmu Komputer";
        $program_studi = "Teknik Komputer";
        $semester = "6";

        // Data Kapasitas Parkir
        $kapasitas_filkom_g = 69.88;
        $kapasitas_filkom_edutech = 88.69;

        // Fungsi untuk menentukan warna progress bar berdasarkan persentase
        function getProgressBarColor($percentage) {
            if ($percentage > 80) {
                return 'red';
            } elseif ($percentage > 60) {
                return 'yellow';
            } else {
                return 'green';
            }
        }
        ?>

        <div class="header">
            <div class="logo">
                <img src="path/to/image_44dedc.png" alt="P icon" class="logo-p-motor">
                <img src="path/to/image_44e9c3.png" alt="ark.in" class="logo-main">
                <img src="path/to/image_44de60.png" alt="UB" class="logo-ub">
            </div>
            <span>My Profile</span>
            <div class="profile-icon">
                <span class="icon icon-user"></span>
            </div>
        </div>

        <div class="main-content">
            <div class="card card-profile">
                <div class="avatar-circle">
                    <span class="icon icon-user"></span>
                </div>
                <h2><?php echo $nama_pengguna; ?></h2>
                <p><?php echo $nim; ?></p>
                <p><?php echo $fakultas; ?></p>
                <p><?php echo $program_studi; ?>, Semester <?php echo $semester; ?></p>
                <button class="edit-button">Edit Profile</button>
            </div>

            <div class="card card-parking-capacity">
                <h3>Kapasitas Parkir Fakultas Saya</h3>

                <div class="parking-area-item">
                    <p>Area Parkir FILKOM Gedung G</p>
                    <p class="capacity-text">Kapasitas: <?php echo number_format($kapasitas_filkom_g, 2); ?>% Penuh</p>
                    <div class="progress-bar-container">
                        <div class="progress-bar <?php echo getProgressBarColor($kapasitas_filkom_g); ?>" style="width: <?php echo $kapasitas_filkom_g; ?>%;"></div>
                    </div>
                </div>

                <div class="parking-area-item">
                    <p>Area Parkir FILKOM EduTech</p>
                    <p class="capacity-text">Kapasitas: <?php echo number_format($kapasitas_filkom_edutech, 2); ?>% Penuh</p>
                    <div class="progress-bar-container">
                        <div class="progress-bar <?php echo getProgressBarColor($kapasitas_filkom_edutech); ?>" style="width: <?php echo $kapasitas_filkom_edutech; ?>%;"></div>
                    </div>
                </div>
            </div>

            <div class="card card-account-settings">
                <div class="setting-button">
                    <span class="icon icon-settings"></span>
                    <p>Preferensi Parkir</p>
                </div>
                <div class="setting-button">
                    <span class="icon icon-bell"></span>
                    <p>Kelola Notifikasi</p>
                </div>
            </div>
        </div>

        <button class="logout-button">Keluar</button>

    </div>
</body>
</html>

</x-header>