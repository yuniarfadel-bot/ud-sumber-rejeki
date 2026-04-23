<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD. Sumber Rejeki - Produk Kami</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #fff; margin: 0; }

        /* --- NAVBAR --- */
        .navbar {
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            padding: 6px 0;
        }
        .navbar-brand img { height: 45px; }
        .navbar-brand span { font-weight: 800; font-size: 10px; color: #000; margin-left: 8px; }
        
        .nav-link {
            font-size: 0.85rem;
            font-weight: 600;
            color: #222 !important;
            text-transform: uppercase;
            padding: 8px 12px !important;
        }
        
        .btn-login {
            background-color: #cbd5e1; /* Abu-abu sesuai gambar */
            border-radius: 20px;
            padding: 5px 20px;
            font-weight: bold;
            font-size: 0.85rem;
            border: none;
            color: #000;
        }

        .navbar-toggler { border: none; }
        .navbar-toggler:focus { box-shadow: none; }

        /* --- HERO SECTION --- */
        .hero-section {
            background-color: #ffb74d; /* Oranye sesuai gambar */
            padding: 60px 20px;
            text-align: center;
        }
        .hero-section h1 { font-weight: 900; font-size: 2rem; margin: 0; color: #000; }
        .hero-section p { font-weight: 500; font-size: 0.95rem; margin-top: 10px; color: #222; }

        /* --- PRODUCT GRID & WATERMARK --- */
        .main-content {
            position: relative;
            padding: 60px 0;
            background-color: #fff;
            overflow: hidden;
        }
        
        /* Watermark Background */
        .main-content::before {
            content: "";
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 800px;
            height: 800px;
            background: url('logo.jpg') no-repeat center;
            background-size: contain;
            opacity: 0.05; /* Transparansi sangat tipis */
            z-index: 0;
            pointer-events: none;
        }

        .container { position: relative; z-index: 1; }

        /* Product Cards */
        .product-card {
            background: #fef1cd; /* Kuning pucat sesuai gambar */
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            border: none;
            width: 340px; /* Ukuran diperlebar */
            margin: 0 auto;
            transition: transform 0.3s;
        }
        .product-card:hover { transform: translateY(-5px); }
        
        .product-img { width: 100%; height: 200px; object-fit: cover; }
        
        .product-info { padding: 20px; text-align: left; }
        .product-info h3 { font-size: 1rem; font-weight: 800; margin-bottom: 5px; color: #000; }
        .product-info p { 
            font-size: 0.75rem; 
            color: #222; 
            line-height: 1.5; 
            margin-bottom: 15px; 
            min-height: 55px; 
            font-weight: 500;
        }
        
        .btn-pesan {
            background-color: #ffc107;
            border: none;
            width: 100%;
            padding: 10px;
            font-weight: 700;
            font-size: 0.9rem;
            border-radius: 4px;
            color: #000;
        }

        /* --- TOMBOL REKAP --- */
        .rekap-container { text-align: center; margin-top: 60px; margin-bottom: 20px; }
        .btn-rekap {
            background-color: #ffc107;
            color: white;
            font-weight: 900;
            font-size: 1.5rem;
            padding: 12px 50px;
            border-radius: 12px;
            border: none;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
            text-transform: uppercase;
        }

        /* --- FOOTER --- */
        footer {
            background-color: #e2e8f0; /* Abu-abu sesuai gambar */
            padding: 40px 0 20px 0;
            color: #000;
        }
        .footer-container {
            width: 90%;
            max-width: 1100px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
            gap: 20px;
        }
        .footer-brand { display: flex; align-items: center; gap: 15px; flex: 1; min-width: 250px; }
        .footer-brand img { height: 70px; }
        .footer-brand span { font-weight: 800; font-size: 13px; }

        .footer-links { flex: 0.5; min-width: 150px; }
        .footer-links h4 { font-size: 14px; margin-bottom: 12px; font-weight: 800; }
        .footer-links ul { list-style: none; padding: 0; }
        .footer-links li { font-size: 10px; margin-bottom: 5px; font-weight: 600; text-transform: uppercase; }

        .footer-info { flex: 1; min-width: 200px; }
        .footer-info h4 { font-size: 15px; margin-bottom: 12px; font-weight: 800; }
        .footer-info p { font-size: 12px; margin-bottom: 15px; font-weight: 500; }

        .footer-social { display: flex; gap: 10px; }
        .footer-social img { height: 35px; cursor: pointer; }

        .footer-bottom {
            width: 90%; max-width: 1100px; margin: 30px auto 0;
            padding-top: 15px; 
            text-align: center; font-size: 11px; font-weight: 700;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="logo.jpg" alt="Logo">
                <span>UD. SUMBER REJEKI</span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menuNavbar">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="#">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">ABOUT US</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">PRODUCT</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">MITRA</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">PESAN</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">CONTACT US</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">HISTORY</a></li>
                    
                    <li class="nav-item ms-lg-3 mt-3 mt-lg-0">
                        <button class="btn btn-login w-100">LOGIN</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero-section">
        <h1>PRODUK KAMI</h1>
        <p>Produk bebek segar dan alami dari peternakan kami langsung ke meja Anda.</p>
    </div>

    <div class="main-content">
        <div class="container">
            
            <div class="row g-5 justify-content-center mb-5">
                <?php
                $produk_atas = [
                    [
                        "judul" => "Daging Bebek Segar",
                        "desc" => "Daging bebek segar dan bersih. Kualitas terbaik, daging tebal, dan siap olah. Cocok untuk rumah tangga dan usaha kuliner.",
                        "img" => "bebeksegar.jpg" 
                    ],
                    [
                        "judul" => "Jeroan Bebek",
                        "desc" => "Jeroan bebek segar dan bersih siap masak. Kualitas premium untuk cita rasa masakan yang maksimal.",
                        "img" => "https://images.unsplash.com/photo-1602491673980-73aa38de027a?q=80&w=500"
                    ]
                ];

                foreach ($produk_atas as $p) : ?>
                <div class="col-auto">
                    <div class="product-card">
                        <img src="<?= $p['img'] ?>" class="product-img" alt="<?= $p['judul'] ?>">
                        <div class="product-info">
                            <h3><?= $p['judul'] ?></h3>
                            <p><?= $p['desc'] ?></p>
                            <button class="btn-pesan">Pesan Disini</button>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="row justify-content-center">
                <div class="col-auto">
                    <div class="product-card">
                        <img src="https://images.unsplash.com/photo-1598515214211-89d3c73ae83b?q=80&w=500" class="product-img" alt="Usus Bebek">
                        <div class="product-info">
                            <h3>Usus Bebek</h3>
                            <p>Usus bebek pilihan dengan tekstur kenyal dan gurih. Sangat cocok untuk dijadikan sate usus atau keripik usus yang garing.</p>
                            <button class="btn-pesan">Pesan Disini</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="rekap-container">
                <button class="btn-rekap">REKAP PEMBELIAN</button>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-container">
            <div class="footer-brand">
                <img src="logo.jpg" alt="Logo">
                <span>UD.SUMBER REJEKI</span>
            </div>
            
            <div class="footer-links">
                <h4>Quick Links</h4>
                <ul>
                    <li>HOME</li><li>ABOUT US</li><li>PRODUCT</li><li>MITRA</li>
                    <li>PESAN</li><li>CONTACT US</li><li>HISTORY</li>
                </ul>
            </div>

            <div class="footer-info">
                <h4>Informasi Lebih Lanjut</h4>
                <p>Silahkan ikuti media sosial kami</p>
                <div class="footer-social">
                    <img src="https://cdn-icons-png.flaticon.com/512/1384/1384060.png" alt="YT">
                    <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WA">
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            © 2026 UD. SUMBER REJEKI. All rights reserved.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>