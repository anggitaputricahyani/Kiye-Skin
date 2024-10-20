<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nama Website</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom right, #f3e7f3, #d8b4e2);
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #fff;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #8f8fff;
            font-size: 1rem;
        }

        nav ul li a:hover {
            color: #6c63ff;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 50px;
        }

        .text-box {
            max-width: 50%;
        }

        .text-box h1 {
            font-size: 3rem;
            color: #6c63ff;
        }

        .text-box p {
            margin-top: 20px;
            color: #555;
        }

        .text-box .quote {
            margin-top: 10px;
            font-style: italic;
            color: #333;
        }

        .buttons {
            margin-top: 20px;
        }

        .buttons a {
            text-decoration: none;
            padding: 10px 20px;
            margin-right: 10px;
            background-color: #ffe6e6;
            color: #6c63ff;
            border-radius: 5px;
            font-weight: bold;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s;
        }

        .buttons a:hover {
            background-color: #ffc2c2;
        }

        .image-box {
            width: 300px;
            height: 300px;
            background-color: #8f8fff;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 15px;
            font-size: 1.5rem;
            color: #333;
        }
    </style>
</head>
<body>

    <header>
        <div class="logo">Logo/Nama Website</div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Store</a></li>
                <li><a href="#">Check Kulit</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </nav>
    </header>

    <section class="header-content">
        <div class="text-box">
            <h1>NAMA WEBSITE</h1>
            <p>Deskripsi website blalaskdaskskdakmsdskssdak</p>
            <p class="quote">Quotes / Deskripsi Tambahan</p>
            <div class="buttons">
                <a href="#">Check Kulit Anda</a>
                <a href="#">Shop Now</a>
            </div>
        </div>
        <div class="image-box">
            Gambar
        </div>
    </section>

</body>
</html>
