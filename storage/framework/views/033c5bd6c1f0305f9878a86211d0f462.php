

<?php $__env->startSection('title', 'Tambah Ulasan Baru'); ?>

<?php $__env->startSection('content'); ?>
    <div class="form-container">
        <h1>Tambah Ulasan Baru</h1>
        
        <!-- BAGIAN KRUSIAL: Form Action harus ke route store -->
        <!-- Pastikan route 'admin.reviews.store' sudah terdaftar di routes/web.php -->
        <form method="POST" action="<?php echo e(route('admin.reviews.store')); ?>">
            <?php echo csrf_field(); ?> <!-- Wajib ada untuk keamanan -->
            
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <div class="form-group">
                <label for="guest_name">Nama Pemberi Ulasan</label>
                <!-- Gunakan name="guest_name" sesuai dengan skema database/migration -->
                <input type="text" id="guest_name" name="guest_name" value="<?php echo e(old('guest_name')); ?>" required>
            </div>

            <div class="form-group">
                <label for="comment">Isi Ulasan</label>
                <textarea id="comment" name="comment" rows="4" required><?php echo e(old('comment')); ?></textarea>
            </div>

            <div class="form-group">
                <label for="rating">Rating (1-5)</label>
                <select id="rating" name="rating" required>
                    <option value="5" <?php echo e(old('rating') == 5 ? 'selected' : ''); ?>>5 Bintang</option>
                    <option value="4" <?php echo e(old('rating') == 4 ? 'selected' : ''); ?>>4 Bintang</option>
                    <option value="3" <?php echo e(old('rating') == 3 ? 'selected' : ''); ?>>3 Bintang</option>
                    <option value="2" <?php echo e(old('rating') == 2 ? 'selected' : ''); ?>>2 Bintang</option>
                    <option value="1" <?php echo e(old('rating') == 1 ? 'selected' : ''); ?>>1 Bintang</option>
                </select>
            </div>
            
            <div class="form-group form-check">
                <input type="checkbox" id="is_approved" name="is_approved" value="1" <?php echo e(old('is_approved') ? 'checked' : ''); ?>>
                <label for="is_approved">Langsung Setujui (Tampilkan di halaman depan)</label>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Simpan Ulasan</button>
                <a href="<?php echo e(route('admin.reviews.index')); ?>" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>

    <style>
        .form-container { max-width: 600px; margin: 20px auto; background-color: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); }
        h1 { color: #007bff; border-bottom: 2px solid #007bff; padding-bottom: 10px; margin-bottom: 25px; text-align: center; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: bold; color: #333; }
        .form-group input[type="text"], .form-group textarea, .form-group select { 
            width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; 
            font-size: 1em; 
        }
        .form-group textarea { resize: vertical; }
        .form-actions { margin-top: 20px; display: flex; justify-content: space-between; }
        .btn { padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; text-decoration: none; font-weight: bold; }
        .btn-primary { background-color: #007bff; color: white; }
        .btn-secondary { background-color: #6c757d; color: white; }
        .btn-primary:hover { background-color: #0056b3; }
        .btn-secondary:hover { background-color: #5a6268; }
        .alert { padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 4px; }
        .alert-danger { color: #721c24; background-color: #f8d7da; border-color: #f5c6cb; }
        .form-check { display: flex; align-items: center; margin-top: 10px; }
        .form-check input { margin-right: 10px; }
    </style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\T470s\villa-website\resources\views/admin/reviews/create.blade.php ENDPATH**/ ?>