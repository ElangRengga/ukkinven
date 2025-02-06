<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Asset Management</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #9b59b6, #ff8c00); /* Gradient warna ungu dan oranye */
            color: #fff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            overflow: hidden;
        }

        .welcome-container {
            background: rgba(255, 255, 255, 0.1); /* Transparansi dengan sedikit latar belakang putih */
            backdrop-filter: blur(15px); /* Efek blur */
            border-radius: 25px;
            padding: 40px;
            max-width: 500px;
            width: 90%;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
            animation: fadeIn 1s ease-in-out;
        }

        .welcome-container h1 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 20px;
            color: #fff; /* Mengubah warna font menjadi putih */
        }

        .welcome-container p {
            font-size: 1.3rem;
            color: #f1f1f1;
            margin-bottom: 30px;
            line-height: 1.7;
        }

        .cta-buttons .btn {
            width: 200px;
            font-weight: 700;
            font-size: 1.2rem;
            border-radius: 50px;
            padding: 14px;
            transition: all 0.4s ease;
        }

        .cta-button-primary {
            background-color: #9b59b6; /* Warna ungu untuk tombol utama */
            color: white;
            border: none;
        }

        .cta-button-primary:hover {
            background-color: #8e44ad;
            transform: scale(1.05);
        }

        .cta-button-secondary {
            background-color: transparent;
            color: white;
            border: 2px solid white;
        }

        .cta-button-secondary:hover {
            background-color: white;
            color: #ff8c00; /* Warna oranye untuk tombol kedua */
            transform: scale(1.05);
        }

        .footer {
            position: absolute;
            bottom: 20px;
            width: 100%;
            text-align: center;
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.7);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

    <div class="welcome-container">
        <h1>Selamat Datang</h1>
        <p>Kelola aset Anda dengan mudah dan cepat menggunakan platform kami.</p>
        <div class="cta-buttons d-flex justify-content-center gap-4">
            <a href="{{ route('login') }}" class="btn cta-button-primary">Login</a>
            <a href="{{ route('register') }}" class="btn cta-button-secondary">Sign Up</a>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2025 Asset Management Platform. All rights reserved.</p>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
