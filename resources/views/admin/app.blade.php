<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Admin Vorent</title>
    <!-- Iconify untuk Ikon -->
    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f4f7f6;
            color: #333;
            display: flex;
        }

        /* SIDEBAR STYLE */
        .sidebar {
            width: 280px;
            background-color: #111827; /* Warna gelap elegan */
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            padding: 30px 20px;
            display: flex;
            flex-direction: column;
            box-shadow: 4px 0 15px rgba(0,0,0,0.05);
        }

        .sidebar-brand {
            font-size: 26px;
            font-weight: 800;
            color: #fff;
            margin-bottom: 50px;
            text-align: center;
            letter-spacing: 1px;
        }

        .sidebar-brand span {
            color: #1e56cd; /* Biru Vorent */
        }

        .sidebar-menu {
            list-style: none;
            flex-grow: 1;
        }

        .sidebar-menu li {
            margin-bottom: 15px;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            gap: 15px;
            color: #9ca3af;
            text-decoration: none;
            padding: 14px 20px;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .sidebar-menu a iconify-icon {
            font-size: 22px;
        }

        .sidebar-menu a:hover, 
        .sidebar-menu a.active {
            background-color: #1e56cd;
            color: #ffffff;
            box-shadow: 0 5px 15px rgba(30, 86, 205, 0.3);
            transform: translateX(5px);
        }

        /* MAIN CONTENT STYLE */
        .main-wrapper {
            margin-left: 280px;
            width: calc(100% - 280px);
            min-height: 100vh;
            padding: 30px 40px;
        }

        /* HEADER STYLE */
        .top-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #ffffff;
            padding: 20px 30px;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.03);
            margin-bottom: 40px;
        }

        .top-header h1 {
            font-size: 24px;
            font-weight: 700;
            color: #111;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .admin-profile {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 600;
            color: #444;
        }

        .admin-avatar {
            width: 40px;
            height: 40px;
            background: #e8f0ff;
            color: #1e56cd;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            font-weight: bold;
        }

        .btn-logout {
            background: #fee2e2;
            color: #dc2626;
            border: none;
            padding: 10px 18px;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: 0.3s;
        }

        .btn-logout:hover {
            background: #f87171;
            color: white;
        }

        /* GLOBAL UTILITIES */
        .card {
            background: #ffffff;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.03);
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 20px;
            border-radius: 10px;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            border: none;
            transition: 0.3s;
        }

        .btn-primary {
            background: #1e56cd;
            color: white;
        }
        .btn-primary:hover {
            background: #0d368b;
        }

        /* TOMBOL HAMBURGER (Sembunyi di PC, Muncul di HP) */
        .hamburger {
            display: none;
            font-size: 28px;
            background: none;
            border: none;
            cursor: pointer;
            color: #111;
        }

        /* MANTRA RESPONSIF UNTUK HP (Layar di bawah 768px) */
        @media (max-width: 768px) {
            .sidebar {
                left: -280px; /* Sembunyikan sidebar ke luar layar kiri */
                z-index: 999;
                transition: left 0.3s ease;
            }
            .sidebar.muncul {
                left: 0; /* Munculkan saat class 'muncul' aktif */
            }
            .main-wrapper {
                margin-left: 0;
                width: 100%;
                padding: 15px;
            }
            .top-header {
                padding: 15px;
            }
            .hamburger {
                display: block !important; /* Munculkan tombol di HP */
            }
            .admin-profile span {
                display: none; /* Sembunyikan teks "Halo Admin" di HP biar tidak sempit */
            }
        }

    </style>
</head>
<body>

    <!-- SIDEBAR -->
    <aside class="sidebar">
        <div class="sidebar-brand">
            Vorent<span>Admin</span>
        </div>
        
        <ul class="sidebar-menu">
            <li>
                <!-- Link ini mengecek apakah sedang di halaman dashboard untuk memberikan efek 'active' -->
                <a href="{{ url('admin/dashboard') }}" class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
                    <iconify-icon icon="mdi:view-dashboard"></iconify-icon> Dashboard
                </a>
            </li>
            <li>
                <a href="{{ url('admin/products') }}" class="{{ request()->is('admin/products*') ? 'active' : '' }}">
                    <iconify-icon icon="mdi:car-multiple"></iconify-icon> Data Armada
                </a>
            </li>
        </ul>
    </aside>

    <!-- MAIN KONTEN -->
    <div class="main-wrapper">
        <header class="top-header">
            <div style="display: flex; align-items: center; gap: 15px;">
                <button class="hamburger" onclick="toggleSidebar()">
                    <iconify-icon icon="mdi:menu"></iconify-icon>
                </button>
                <h1>@yield('title')</h1>
            </div>
            
            <div class="header-right">
                <div class="admin-profile">
                    <div class="admin-avatar">A</div>
                    <span>Halo, Admin!</span>
                </div>
                
                <form action="{{ url('/logout') }}" method="POST" style="margin: 0;">
                    @csrf
                    <button type="submit" class="btn-logout">
                        <iconify-icon icon="mdi:logout"></iconify-icon> Keluar
                    </button>
                </form>
            </div>
        </header>

        <!-- Area ini akan diisi oleh konten dari halaman lain -->
        <main>
            @yield('content')
        </main>
    </div>

    <script>
        function toggleSidebar() {
            document.querySelector('.sidebar').classList.toggle('muncul');
        }
    </script>

</body>
</html>