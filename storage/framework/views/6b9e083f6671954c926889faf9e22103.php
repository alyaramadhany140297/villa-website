<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Villa Website - Selamat Datang</title>
    <style>
        body { font-family: 'Arial', sans-serif; background-color: #f8f9fa; color: #343a40; margin: 0; padding: 0; display: flex; justify-content: center; align-items: center; min-height: 100vh; text-align: center; }
        .content { background-color: #ffffff; padding: 40px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); max-width: 600px; }
        h1 { color: #007bff; margin-bottom: 20px; font-size: 2.5em; }
        p { margin-bottom: 30px; font-size: 1.1em; }
        .btn-login { display: inline-block; padding: 12px 25px; background-color: #28a745; color: white; text-decoration: none; border-radius: 6px; font-weight: bold; transition: background-color 0.3s; }
        .btn-login:hover { background-color: #1e7e34; }
    </style>
</head>
<body>
    <div class="content">
        <h1>Selamat Datang di Website Villa Kami</h1>
        <p>Terima kasih telah berkunjung. Silakan masuk ke halaman Admin untuk mengelola data villa.</p>
        <a href="<?php echo e(route('login')); ?>" class="btn-login">Masuk (Admin Login)</a>
    </div>
</body>
</html><?php /**PATH C:\Users\T470s\villa-website\resources\views/welcome.blade.php ENDPATH**/ ?>