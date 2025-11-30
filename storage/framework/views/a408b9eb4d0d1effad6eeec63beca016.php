<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulasan Villa Kami</title>
    <style>
        /* Gaya CSS dasar untuk tampilan kartu ulasan yang menarik */
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f0f4f8; color: #333; margin: 0; padding: 0; }
        .header { background-color: #1a73e8; color: white; padding: 30px 0; text-align: center; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); }
        .header h1 { margin: 0; font-size: 2.5em; }
        .container { max-width: 1000px; margin: 40px auto; padding: 0 20px; }
        /* Menggunakan Grid untuk tata letak yang responsif */
        .review-grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); 
            gap: 25px; 
        }
        .review-card { 
            background-color: #ffffff; 
            padding: 20px; 
            border-radius: 10px; 
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05); 
            transition: transform 0.3s ease-in-out;
        }
        .review-card:hover { 
            transform: translateY(-5px); 
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1); 
        }
        .review-header { 
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
            margin-bottom: 15px; 
            border-bottom: 1px solid #eee; 
            padding-bottom: 10px; 
        }
        .reviewer-name { font-weight: bold; font-size: 1.1em; color: #28a745; }
        .rating { color: #ffc107; font-size: 1.2em; }
        .star { font-size: 1.5em; margin-right: 2px; }
        .review-comment { font-style: italic; color: #555; line-height: 1.6; margin-bottom: 15px; }
        .review-date { font-size: 0.8em; color: #999; text-align: right; }
        .no-reviews { text-align: center; color: #777; font-size: 1.2em; padding: 50px; }
        .btn-home { display: inline-block; padding: 10px 20px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px; margin-top: 30px; transition: background-color 0.3s; }
        .btn-home:hover { background-color: #0056b3; }
    </style>
</head>
<body>
    <div class="header">
        <h1>Apa Kata Mereka?</h1>
        <p>Lihat ulasan terbaru dari tamu-tamu villa kami.</p>
    </div>

    <div class="container">
        <!-- Cek apakah ada ulasan yang disetujui -->
        <?php if($reviews->isEmpty()): ?>
            <div class="no-reviews">
                Belum ada ulasan yang disetujui untuk ditampilkan.
            </div>
        <?php else: ?>
            <div class="review-grid">
                <!-- Looping untuk menampilkan setiap ulasan -->
                <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="review-card">
                        <div class="review-header">
                            <span class="reviewer-name"><?php echo e($review->guest_name); ?></span>
                            <div class="rating">
                                <!-- Menampilkan rating bintang (1 sampai 5) -->
                                <?php for($i = 1; $i <= 5; $i++): ?>
                                    <span class="star"><?php echo e($i <= $review->rating ? '★' : '☆'); ?></span>
                                <?php endfor; ?>
                            </div>
                        </div>
                        <p class="review-comment">"<?php echo e($review->comment); ?>"</p>
                        <!-- Menampilkan tanggal dibuatnya ulasan -->
                        <p class="review-date">
                            <!-- Menggunakan format tanggal bahasa Indonesia jika diatur di Laravel config -->
                            <?php echo e($review->created_at->translatedFormat('d M Y')); ?>

                        </p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>

        <div style="text-align: center;">
            <a href="<?php echo e(url('/')); ?>" class="btn-home">Kembali ke Beranda</a>
        </div>
    </div>
</body>
</html><?php /**PATH C:\Users\T470s\villa-website\resources\views/reviews.blade.php ENDPATH**/ ?>