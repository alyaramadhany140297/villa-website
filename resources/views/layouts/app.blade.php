<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Villa - @yield('title', 'Dashboard')</title>
    <!-- Anda bisa menambahkan link CSS framework di sini, misalnya Tailwind CSS -->
    <!-- Untuk saat ini, kita akan menggunakan CSS sederhana -->
    <style>
        body { font-family: 'Arial', sans-serif; background-color: #f4f4f4; margin: 0; }
        .sidebar { width: 250px; background-color: #343a40; color: white; height: 100vh; position: fixed; padding-top: 20px; }
        .sidebar a { padding: 10px 15px; text-decoration: none; font-size: 18px; color: #adb5bd; display: block; transition: 0.3s; }
        .sidebar a:hover { color: #f8f9fa; background-color: #495057; }
        .content { margin-left: 250px; padding: 20px; }
        .navbar { background-color: #ffffff; padding: 15px 20px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); display: flex; justify-content: space-between; align-items: center; }
        .logout-btn { background-color: #dc3545; color: white; border: none; padding: 8px 15px; border-radius: 5px; cursor: pointer; text-decoration: none; }
    </style>
</head>
<body>

    <!-- Sidebar (Menu Samping) -->
    <div class="sidebar">
        <h2 style="text-align: center; color: #ffffff; margin-bottom: 30px;">Admin Panel</h2>
        <!-- Memastikan rute 'admin.dashboard' dan 'admin.reviews.index' terdefinisi -->
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        <a href="{{ route('admin.reviews.index') }}">Kelola Ulasan</a>
        <!-- Tambahkan menu lain di sini jika ada -->
    </div>

    <!-- Konten Utama dan Navbar -->
    <div class="content">
        <div class="navbar">
            <h3 style="margin: 0;">@yield('title', 'Dashboard')</h3>
            <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                <!-- Menggunakan sintaks Blade untuk CSRF Token -->
                @csrf 
                <button type="submit" class="logout-btn">Logout</button>
            </form>
        </div>
        
        <!-- BAGIAN INI AKAN DIISI OLEH KONTEN DARI VIEW ANAK -->
        <main style="padding-top: 20px;">
            @yield('content')
        </main>
    </div>

</body>
</html>