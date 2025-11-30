<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <style>
        body { font-family: sans-serif; background-color: #f4f7f6; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; }
        .login-card { background-color: #fff; padding: 40px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); width: 100%; max-width: 350px; text-align: center; }
        h1 { color: #007bff; margin-bottom: 25px; font-size: 1.8em; }
        .form-group { margin-bottom: 15px; }
        .form-control { width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 8px; box-sizing: border-box; font-size: 1em; }
        .btn-primary { background-color: #007bff; color: white; padding: 12px 20px; border: none; border-radius: 8px; cursor: pointer; transition: background-color 0.3s; width: 100%; margin-top: 20px; font-size: 1em; }
        .btn-primary:hover { background-color: #0056b3; }
        .alert-error { background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; padding: 10px; border-radius: 5px; margin-bottom: 15px; text-align: left; }
    </style>
</head>
<body>
    <div class="login-card">
        <h1>LOGIN ADMIN</h1>
        
        <!-- Menampilkan pesan error validasi (seperti email/password salah) -->
        <?php if($errors->any()): ?>
            <div class="alert-error">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <!-- FORM ACTION MENGGUNANAKAN POST KE /login -->
        <form method="POST" action="/login">
            <!-- INI ADALAH CSRF TOKEN YANG KITA BUTUHKAN UNTUK MENGHILANGKAN ERROR 419 -->
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

            <div class="form-group">
                <!-- INPUT EMAIL -->
                <input type="email" name="email" class="form-control" placeholder="Email Admin" required autofocus value="<?php echo e(old('email')); ?>">
            </div>

            <div class="form-group">
                <!-- INPUT PASSWORD -->
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>

            <button type="submit" class="btn-primary">Masuk</button>
        </form>
    </div>
</body>
</html><?php /**PATH C:\Users\T470s\villa-website\resources\views/auth/login.blade.php ENDPATH**/ ?>