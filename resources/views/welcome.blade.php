<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Villa Al Rasyid</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Playfair Display', serif;
            overflow-x: hidden;
        }

        header {
            background-color: rgba(82, 58, 38, 0.9);
            color: white;
            padding: 2px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            width: 100%;
            z-index: 10;
        }

        header h1 {
            margin: 0;
            font-size: 22px;
            letter-spacing: 2px;
        }

        .hero {
            background-image: url('{{ asset("images/villa.jpg") }}');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: rgb(231, 61, 61);
            text-shadow: 0 2px 8px rgba(0,0,0,0.7);
            text-align: center;
        }

        .hero h2 {
            font-size: 45px;
            margin: 0 0 10px 0;
            letter-spacing: 2px;
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .hero button {
            background-color: #8B5E3C;
            color: rgb(255, 255, 255);
            border: none;
            padding: 12px 28px;
            font-size: 16px;
            border-radius: 30px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .hero button:hover {
            background-color: #A66E47;
        }

        footer {
            background-color: #7a6452;
            color: white;
            text-align: center;
            padding: 10px 0;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <header>
        <h1>AL RASYID</h1>
        <nav>
            <a href="#" style="color: white; text-decoration: none; margin-right: 15px;">Menu</a>
            <a href="#" style="color: white; text-decoration: none;">English</a>
        </nav>
    </header>

    <section class="hero">
        <h2>SERENITY IN THE HIGHLANDS</h2>
        <p>AL RASYID PUNCAK</p>
        <button>Find Out More</button>
    </section>

    <footer>
        2025 Villa Al Rasyid. All Rights Reserved.
    </footer>
</body>
</html>
