<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Asumsikan Anda menggunakan Bootstrap atau gaya sederhana -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f6f9; }
        .sidebar { height: 100vh; background-color: #343a40; padding-top: 20px; color: white; }
        .sidebar a { color: #adb5bd; text-decoration: none; display: block; padding: 10px 15px; border-radius: 5px; margin-bottom: 5px; transition: background-color 0.3s; }
        .sidebar a:hover, .sidebar a.active { background-color: #495057; color: white; }
        .content { padding: 30px; }
        .card { border: none; box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15); }
    </style>
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar col-md-2">
            <h4 class="text-center mb-4 text-warning">Admin Panel</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('admin.reviews.index')); ?>">Kelola Ulasan</a>
                </li>
            </ul>
            <form action="<?php echo e(route('logout')); ?>" method="POST" class="p-3">
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-danger w-100">Logout</button>
            </form>
        </div>

        <!-- Main Content -->
        <div class="content col-md-10">
            <h1 class="mb-4">Dashboard Admin</h1>
            <div class="card p-4">
                <h2>Selamat Datang, Admin!</h2>
                <p>Ini adalah area manajemen ulasan villa Anda. Pilih menu "Kelola Ulasan" untuk mulai bekerja.</p>
                <!-- Anda bisa menambahkan statistik di sini di masa depan -->
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\Users\T470s\villa-website\resources\views/dashboard.blade.php ENDPATH**/ ?>