

<?php $__env->startSection('title', 'Kelola Ulasan'); ?>

<?php $__env->startSection('content'); ?>
    <div class="reviews-container">
        <h1>Kelola Ulasan</h1>

        <!-- Tombol Tambah Ulasan Baru -->
        <div class="mb-4 text-right">
            <!-- PENTING: Memastikan tombol ini mengarah ke route create -->
            <a href="<?php echo e(route('admin.reviews.create')); ?>" class="btn btn-success">
                <i class="fas fa-plus-circle"></i> Tambah Ulasan Baru
            </a>
        </div>
        
        <!-- Pesan Sukses atau Error (dari controller store/destroy) -->
        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
        <?php if(session('error')): ?>
            <div class="alert alert-danger">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Tamu</th>
                        <th>Ulasan</th>
                        <th>Rating</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Melakukan loop pada data $reviews yang dikirim dari controller -->
                    <?php $__empty_1 = true; $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($review->id); ?></td>
                            <td><?php echo e($review->guest_name); ?></td>
                            <td><?php echo e(Str::limit($review->comment, 50)); ?></td> <!-- Batasi ulasan agar tidak terlalu panjang -->
                            <td>
                                <!-- Menampilkan Bintang -->
                                <?php for($i = 1; $i <= 5; $i++): ?>
                                    <span class="star-icon" style="color: <?php echo e($i <= $review->rating ? '#ffc107' : '#e0e0e0'); ?>;">★</span>
                                <?php endfor; ?>
                                (<?php echo e($review->rating); ?>/5)
                            </td>
                            <td>
                                <!-- Menampilkan status dengan warna -->
                                <span class="badge <?php echo e($review->is_approved ? 'badge-success' : 'badge-warning'); ?>">
                                    <?php echo e($review->is_approved ? 'Disetujui' : 'Belum Disetujui'); ?>

                                </span>
                            </td>
                            <td class="action-buttons">
                                
                                <!-- FORM AKSI SETUJUI/TOLAK -->
                                <form action="<?php echo e(route('admin.reviews.destroy', $review)); ?>" method="POST" style="display: inline-block;">
                                    <?php echo csrf_field(); ?>
                                    <!-- Laravel tidak mendukung method PUT di form HTML, jadi kita gunakan <?php echo method_field('PUT'); ?> -->
                                    <?php echo method_field('PUT'); ?> 
                                    
                                    <?php if($review->is_approved): ?>
                                        <!-- Tombol Tolak (saat statusnya sedang Disetujui) -->
                                        <input type="hidden" name="action" value="decline">
                                        <button type="submit" class="btn btn-warning btn-sm">Tolak</button>
                                    <?php else: ?>
                                        <!-- Tombol Setujui (saat statusnya Belum Disetujui) -->
                                        <input type="hidden" name="action" value="approve">
                                        <button type="submit" class="btn btn-success btn-sm">Setujui</button>
                                    <?php endif; ?>
                                </form>

                                <!-- FORM AKSI HAPUS -->
                                <form action="<?php echo e(route('admin.reviews.destroy', $review)); ?>" method="POST" style="display: inline-block;">
                                    <?php echo csrf_field(); ?>
                                    <!-- Laravel tidak mendukung method DELETE di form HTML, jadi kita gunakan <?php echo method_field('DELETE'); ?> -->
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus ulasan ini? Aksi ini tidak dapat dibatalkan.');">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="6" class="text-center">Belum ada ulasan yang tersedia.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- STYLE KHUSUS UNTUK INDEX REVIEW -->
    <style>
        .reviews-container { 
            max-width: 100%; 
            margin: 20px 0; 
            background-color: #fff; 
            padding: 30px; 
            border-radius: 8px; 
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); 
        }
        h1 { color: #007bff; border-bottom: 2px solid #007bff; padding-bottom: 10px; margin-bottom: 30px; }
        .table-responsive { overflow-x: auto; }
        .table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        .table th, .table td { padding: 12px; text-align: left; border-bottom: 1px solid #dee2e6; vertical-align: middle; }
        .table th { background-color: #007bff; color: white; font-weight: bold; }
        .table-striped tbody tr:nth-of-type(odd) { background-color: #f8f9fa; }
        .btn { padding: 6px 12px; border: none; border-radius: 4px; cursor: pointer; text-decoration: none; font-size: 0.9em; margin-right: 5px; }
        .btn-success { background-color: #28a745; color: white; }
        .btn-warning { background-color: #ffc107; color: #333; }
        .btn-danger { background-color: #dc3545; color: white; }
        .btn:hover { opacity: 0.9; }
        
        .badge { padding: 5px 10px; border-radius: 12px; font-size: 0.85em; font-weight: 600; display: inline-block; }
        .badge-success { background-color: #28a745; color: white; }
        .badge-warning { background-color: #ffc107; color: #333; }
        
        .action-buttons { white-space: nowrap; }
        .star-icon { font-size: 1.2em; }

        .alert { padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 4px; }
        .alert-success { color: #155724; background-color: #d4edda; border-color: #c3e6cb; }
        .alert-danger { color: #721c24; background-color: #f8d7da; border-color: #f5c6cb; }
    </style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\T470s\villa-website\resources\views/admin/reviews/index.blade.php ENDPATH**/ ?>