<x-app-layout>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sagara Tungkal - Beranda</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
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

        .hero {
            text-align: center;
            padding: 60px 20px;
            background: url('asset/jembatan.jpg') no-repeat center 30% /cover;
            opacity: 80%;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            margin: 20px;
        }

        .hero h1 {
            margin-bottom: 5px;
        }
        
        .hero h2 {
            margin-bottom: 20px;
        }

        .container {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            max-width: 90%;
            margin: auto;
            text-align: center;
        }

        .container h2 {
            margin-bottom: 30px;
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
            transition: transform 0.3s ease;
        }

        .product-card:hover {
            transform: scale(1.05);
        }

        .product-card img {
            width: 100%;
            border-radius: 8px;
            height: auto;
        }

        .contact-container {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            max-width: 90%;
            margin: 40px auto;
            text-align: center;
        }

        .contact-container h2 {
            margin-bottom: 20px;
        }
        
        .contact-grid {
            display: flex;
            gap: 20px;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .contact-map, .contact-info {
            flex: 1 1 45%;
            max-width: 45%;
        }
        
        .contact-map {
            width: 100%;
            max-width: 644px; /* Menyesuaikan dengan layout */
            margin: 0 auto;
        }

        .contact-map iframe {
            width: 100%;
            height: 300px;
            border-radius: 10px;
            border: none;
        }    

        .contact-info p {
            font-size: 16px;
            margin: 10px 0;
        }

        .contact-info a {
            color: #2d3a4b;
            text-decoration: none;
            font-weight: 500;
        }

        .contact-info a:hover {
            text-decoration: underline;
        }

        .footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 15px 20px;
        }

        .footer-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .footer-brand {
            display: flex;
            align-items: center;
            gap: 10px; /* Memberi jarak antara logo dan teks */
        }

        .footer-logo {
            width: 50px; /* Sesuaikan ukuran logo */
            height: auto;
        }

        .footer-company-name {
            font-size: 18px;
            font-weight: bold;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            
            .header h1 {
                font-size: 22px;
            }
            
            .menu-toggle {
                display: block;
                font-size: 18px;
                position: relative; /* Pastikan tetap di dalam header */
                z-index: 100; /* Pastikan di atas elemen lain */
            }

            .nav {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 60px;
                right: 20px;
                background: rgba(255, 255, 255, 0.95); /* Sedikit transparan agar tetap terlihat */
                padding: 10px;
                border-radius: 10px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
                z-index: 99; /* Pastikan lebih tinggi dari background */
            }

            .nav.show {
                display: flex;
            }

            .hero {
                text-align: center;
                padding: 40px 10px; /* Mengurangi padding agar tidak terlalu besar */
                background: url('assets/img/jembatan.jpg') no-repeat center/cover;
                color: white;
                text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
                border-radius: 10px;
                margin: 15px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                min-height: 250px; /* Membatasi tinggi agar lebih pas */
            }

            .hero h1 {
                font-size: 22px; /* Mengurangi ukuran agar proporsional */
            }
            
            .hero h2 {
                font-size: 18px;
                margin-bottom: 10px;
            }

            .hero p {
                font-size: 14px; /* Mengurangi ukuran teks agar lebih pas */
                max-width: 90%; /* Membatasi lebar agar tetap rapi */
            }

            .product-grid {
                display: flex;
                flex-wrap: wrap;
                gap: 10px; /* Jarak antar kartu */
                justify-content: center;
            }

            .product-card {
                flex: 1 1 calc(50% - 10px); /* Maksimal 2 item sejajar */
                max-width: calc(50% - 10px);
                box-sizing: border-box;
            }

            .product-card h3 {
                font-size: 15px;
            }

            .product-card p {
                font-size: 12px;
            }

            .contact-grid {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
            .contact-map, .contact-info {
                max-width: 100%;
            }

            .contact-map iframe {
                height: 250px; /* Menyesuaikan dengan layar kecil */
            }

            .footer-brand {
                flex-direction: column;
                text-align: center;
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
            <!-- <a href="#">Pembelian</a> -->
        </div>
    </div>

    <div id="Halaman Utama"class="hero">
        <h1>Sagara Tungkal</h1>
        <h2>Seafood Fresh dari Tungkal Jambi</h2>
        <p>Sagara Tungkal mempermudah akses seafood segar dari perairan Tungkal<br>
        dengan sistem pemesanan online dan pengiriman cepat. <br>
        bisa mendapatkan hasil laut berkualitas tanpa harus datang ke pelabuhan atau pasar.</p>
        </div>

        <div id="produk"class="container">
        <h2>Seafood Terlaris</h2>
        <div class="product-grid">
            <div class="product-card">
                <img src='asset/ikan_kakap.jpg' alt="Ikan Kakap">
                <h3>Ikan Kakap</h3>
                <p>Rp 50.000 / kg</p>
            </div>
            <div class="product-card">
                <img src='asset/Anadara_granosa.jpg' alt="Kerang Dara">
                <h3>Kerang Dara</h3>
                <p>Rp 65.000 / kg</p>
            </div>
            <div class="product-card">
                <img src='asset/cumi-cumi.jpg' alt="Cumi-Cumi">
                <h3>Cumi-Cumi</h3>
                <p>Rp 57.000 / kg</p>
            </div>
            <div class="product-card">
                <img src='asset/kepiting.jpg' alt="Kepiting">
                <h3>Kepiting</h3>
                <p>Rp 60.000 / kg</p>
            </div>
        </div>
    </div>

    <div id="kontak" class="contact-container">
    <h2>Kontak Kami</h2>
    <div class="contact-grid">
        <!-- Peta Google Maps -->
        <div class="contact-map">
            <iframe 
                src="https://maps.google.com/maps?q=Sungai Pengabuan, Jl. Asia No.Kel, Tungkal IV Desa, Kec. Tungkal Ilir, Kabupaten Tanjung Jabung Barat, Jambi 36514&amp;t=k&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" 
                frameborder="0" 
                allowfullscreen 
                loading="lazy">
            </iframe>
        </div>
        <!-- Media Sosial -->
        <div class="contact-info">
            <p><strong>WhatsApp:</strong> <a href="https://wa.me/6281234567890">+62 812-3456-7890</a></p>
            <p><strong>Instagram:</strong> <a href="https://www.instagram.com/sagaratungkal">@sagaratungkal</a></p>
            <p><strong>Email:</strong> <a href="mailto:info@sagaratungkal.com">info@sagaratungkal.com</a></p>
            <p><strong>Alamat:</strong> Jl. Pelabuhan No.12, Tungkal, Jambi</p>
        </div>
    </div>
</div>


    <!-- Footer -->
    <footer class="footer">
    <div class="footer-content">
        <div class="footer-brand">
            <img src="asset/SAGARA TUNGKAL.png" alt="Logo Sagara Tungkal" class="footer-logo">
            <span class="footer-company-name">Sagara Tungkal</span>
        </div>
        <p>&copy; 2025 Sagara Tungkal. All Rights Reserved.</p>
    </div>
    </footer>

    <script>
        document.querySelector(".menu-toggle").addEventListener("click", function() {
            document.querySelector(".nav").classList.toggle("show");
        });
    </script>

</body>
</html>

</x-app-layout>