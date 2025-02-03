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
            background: linear-gradient(135deg, #4c86ff, #2dca73);
            color: #fff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            overflow: hidden;
        }

        .welcome-container {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 50px;
            max-width: 600px;
            width: 90%;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1s ease-in-out;
        }

        .welcome-container h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .welcome-container p {
            font-size: 1.2rem;
            color: #f1f1f1;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .cta-buttons .btn {
            width: 180px;
            font-weight: 600;
            font-size: 1.1rem;
            border-radius: 30px;
            padding: 12px;
            transition: all 0.3s ease;
        }

        .cta-button-primary {
            background-color: #2dca73;
            color: white;
            border: none;
        }

        .cta-button-primary:hover {
            background-color: #25a05a;
            transform: scale(1.05);
        }

        .cta-button-secondary {
            background-color: transparent;
            color: white;
            border: 2px solid white;
        }

        .cta-button-secondary:hover {
            background-color: white;
            color: #2dca73;
            transform: scale(1.05);
        }

        .footer {
            position: absolute;
            bottom: 15px;
            width: 100%;
            text-align: center;
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.8);
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
        <div class="cta-buttons d-flex justify-content-center gap-3">
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
