<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sagara Tungkal - Daftar Produk</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        html, body {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        body {
            background-color: #f5f5f5;
            color: #2d3a4b;
        }

        .header {
            background: #fff;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            position: relative;
        }

        .header h1 {
            font-size: 24px;
        }

        .nav {
            display: flex;
            gap: 15px;
        }

        .nav a {
            text-decoration: none;
            color: #2d3a4b;
            font-weight: 500;
        }

        .menu-toggle {
            display: none;
            cursor: pointer;
            font-size: 20px;
            background: none;
            border: none;
            color: #2d3a4b;
        }

        /* Container fleksibel agar footer tetap di bawah */
        .container {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            max-width: 90%;
            margin: 20px auto;
            text-align: center;
            flex-grow: 1;
        }

        .container h2 {
            margin-bottom: 20px;
            font-size: 24px;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .product-card {
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 8px;
            background-color: white;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
        }

        .product-card:hover {
            transform: scale(1.05);
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .product-card h3 {
            margin: 10px 0;
            font-size: 18px;
        }

        .product-card p {
            font-size: 16px;
            font-weight: 500;
            color: #ff5733;
        }

        /* Tombol Beli */
        .product-card button {
            background: #ff5733;
            color: white;
            border: none;
            padding: 10px 15px;
            font-size: 14px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            transition: background 0.3s;
        }

        .product-card button:hover {
            background: #e0482a;
        }

        /* Footer tetap di bawah */
        .footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 15px 20px;
            margin-top: auto;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .menu-toggle {
                display: block;
            }

            .nav {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 60px;
                right: 20px;
                background: white;
                padding: 10px;
                border-radius: 10px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            }

            .nav.show {
                display: flex;
            }

            .product-grid {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 10px;
            }

            .product-card {
                flex: 1 1 calc(50% - 10px);
                max-width: calc(50% - 10px);
            }
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>Sagara Tungkal</h1>
        <button class="menu-toggle">&#9776;</button>
        <div class="nav">
            <a href="{{route('dashboard')}}">Halaman Utama</a>
            <a href="{{route('produk')}}">Daftar Produk</a>
            <a href="{{route('pembelian.index')}}">Pembelian</a>
        </div>
    </div>

    <div class="container">
        <h2>Daftar Produk</h2>
        <div class="product-grid">
            <div class="product-card">
                <img src="assets/img/Ikan_kakap.jpg" alt="Ikan Kakap">
                <h3>Ikan Kakap</h3>
                <p>Rp 50.000 / kg</p>
                <button>Beli</button>
            </div>
            <div class="product-card">
                <img src="assets/img/Anadara_granosa.jpg" alt="Kerang Dara">
                <h3>Kerang Dara</h3>
                <p>Rp 75.000 / kg</p>
                <button>Beli</button>
            </div>
            <div class="product-card">
                <img src="assets/img/cumi-cumi.jpg" alt="Cumi-Cumi">
                <h3>Cumi-Cumi</h3>
                <p>Rp 65.000 / kg</p>
                <button>Beli</button>
            </div>
            <div class="product-card">
                <img src="assets/img/kepiting.jpg" alt="Kepiting">
                <h3>Kepiting</h3>
                <p>Rp 65.000 / kg</p>
                <button>Beli</button>
            </div>
            <div class="product-card">
                <img src="assets/img/udang.jpg" alt="Udang">
                <h3>Udang</h3>
                <p>Rp 85.000 / kg</p>
                <button>Beli</button>
            </div>
            <div class="product-card">
                <img src="assets/img/tongkol.jpg" alt="Ikan Tongkol">
                <h3>Ikan Tongkol</h3>
                <p>Rp 45.000 / kg</p>
                <button>Beli</button>
            </div>
            <div class="product-card">
                <img src="assets/img/Tuna-3.jpg" alt="Ikan Tongkol">
                <h3>Ikan Tuna</h3>
                <p>Rp 45.000 / kg</p>
                <button>Beli</button>
            </div>
            <div class="product-card">
                <img src="assets/img/cakalang.jpg" alt="Ikan Tongkol">
                <h3>Ikan Cakalang</h3>
                <p>Rp 45.000 / kg</p>
                <button>Beli</button>
            </div>
            <div class="product-card">
                <img src="assets/img/sarden.jpg" alt="Ikan Tongkol">
                <h3>Ikan Sarden</h3>
                <p>Rp 45.000 / kg</p>
                <button>Beli</button>
            </div>
            <div class="product-card">
                <img src="assets/img/lobster.jpg" alt="Ikan Tongkol">
                <h3>Lobster</h3>
                <p>Rp 45.000 / kg</p>
                <button>Beli</button>
            </div>
            <div class="product-card">
                <img src="assets/img/kerapu.jpg" alt="Ikan Tongkol">
                <h3>Ikan Kerapu</h3>
                <p>Rp 45.000 / kg</p>
                <button>Beli</button>
            </div>
            <div class="product-card">
                <img src="assets/img/tengiri.jpg" alt="Ikan Tongkol">
                <h3>Ikan Tengiri</h3>
                <p>Rp 45.000 / kg</p>
                <button>Beli</button>
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2025 Sagara Tungkal. All Rights Reserved.</p>
    </footer>

    <script>
        document.querySelector(".menu-toggle").addEventListener("click", function() {
            document.querySelector(".nav").classList.toggle("show");
        });
    </script>

</body>
</html>
