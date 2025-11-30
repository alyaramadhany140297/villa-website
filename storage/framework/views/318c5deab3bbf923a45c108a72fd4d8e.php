

<?php $__env->startSection('title', 'Dashboard Admin'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-dashboard">
        <h1>Selamat Datang di Dashboard Admin Villa</h1>
        
        <div class="card-intro">
            <h2>Selamat Datang, Admin!</h2>
            <p>Ini adalah area manajemen ulasan villa Anda. Pilih menu "Kelola Ulasan" di samping untuk melihat atau mengelola ulasan yang masuk.</p>
        </div>
        
        <div class="stats-row">
            <!-- Kartu Statistik 1: Total Ulasan -->
            <div class="card-stat card-blue">
                <div class="stat-title">Total Ulasan</div>
                <!-- MENGGUNAKAN DATA NYATA: $totalReviews -->
                <div class="stat-value"><?php echo e($totalReviews); ?> Ulasan</div>
                <div class="stat-footer">Statistik ini akan diperbarui dengan data nyata.</div>
            </div>
            
            <!-- Kartu Statistik 2: Ulasan Disetujui -->
            <div class="card-stat card-green">
                <div class="stat-title">Ulasan Disetujui</div>
                <!-- MENGGUNAKAN DATA NYATA: $approvedReviews -->
                <div class="stat-value"><?php echo e($approvedReviews); ?> Ulasan</div>
                <div class="stat-footer">Ini adalah ulasan yang sudah ditampilkan di publik.</div>
            </div>
        </div>
        
        <div class="card-link">
            <h2>Aksi Cepat</h2>
            <p>Langsung menuju halaman kelola ulasan.</p>
            <a href="<?php echo e(route('admin.reviews.index')); ?>" class="link-button">Kelola Ulasan</a>
        </div>
    </div>

    <style>
        /* Gaya dari layout app.blade.php akan tetap berlaku */
        .container-dashboard { 
            max-width: 100%; 
            margin: 20px 0; 
            background-color: #fff; 
            padding: 30px; 
            border-radius: 8px; 
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); 
        }
        h1 { color: #007bff; border-bottom: 2px solid #007bff; padding-bottom: 10px; margin-bottom: 30px; }
        
        /* Gaya untuk area pengantar */
        .card-intro { 
            background-color: #f8f9fa; 
            padding: 20px; 
            border-radius: 6px; 
            margin-bottom: 20px; 
            border-left: 5px solid #ffc107; /* Warna kuning untuk info */
        }
        .card-intro h2 { margin-top: 0; color: #343a40; }

        /* Gaya untuk kartu statistik */
        .stats-row {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
        }
        .card-stat {
            flex: 1;
            color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-blue { background-color: #007bff; }
        .card-green { background-color: #28a745; }
        .stat-title { font-size: 1em; font-weight: 500; opacity: 0.8; }
        .stat-value { font-size: 2.5em; font-weight: bold; margin: 5px 0 10px 0; }
        .stat-footer { font-size: 0.8em; opacity: 0.9; }

        /* Gaya untuk aksi cepat */
        .card-link {
            padding: 20px;
            border: 1px solid #dee2e6;
            border-radius: 6px;
            text-align: center;
        }
        .link-button { 
            display: inline-block; 
            padding: 10px 20px; 
            background-color: #007bff; /* Biru */
            color: white; 
            text-decoration: none; 
            border-radius: 5px; 
            transition: background-color 0.3s; 
            margin-top: 15px; 
            font-weight: bold;
        }
        .link-button:hover { background-color: #0056b3; }
        
        /* Responsif */
        @media (max-width: 768px) {
            .stats-row {
                flex-direction: column;
            }
        }
    </style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\T470s\villa-website\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>