
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic - Sistem Informasi Akademik</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        .welcome-page {
            min-height: 100vh;
            background: #f3f6fb;
            display: flex;
            flex-direction: column;
        }

        .welcome-nav {
            background: #ffffff;
            padding: 20px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #e2e8f0;
        }

        .welcome-nav .brand {
            font-size: 24px;
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .welcome-hero {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 70px 20px;
        }

        .hero-content {
            max-width: 750px;
        }

        .hero-label {
            display: inline-block;
            background: #dbeafe;
            color: #1d4ed8;
            padding: 8px 16px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 25px;
        }

        .hero-title {
            font-size: 48px;
            font-weight: 700;
            color: #14213d;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .hero-title span {
            color: #2563eb;
        }

        .hero-description {
            color: #64748b;
            font-size: 17px;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        .hero-actions {
            display: flex;
            justify-content: center;
            gap: 14px;
            flex-wrap: wrap;
        }

        .welcome-footer {
            text-align: center;
            padding: 20px;
            color: #64748b;
            font-size: 13px;
        }

        @media (max-width: 600px) {
            .welcome-nav {
                padding: 18px 5%;
            }

            .hero-title {
                font-size: 34px;
            }

            .hero-description {
                font-size: 15px;
            }
        }
    </style>
</head>

<body>
<div class="welcome-page">

    <header class="welcome-nav">
        <div class="brand">ACADEMIC<span>.</span></div>

        <div class="nav-actions">
            @auth
                <a href="{{ url('/dashboard') }}" class="btn btn-primary">
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}" class="btn btn-secondary">
                    Login
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-primary">
                        Daftar
                    </a>
                @endif
            @endauth
        </div>
    </header>

    <main class="welcome-hero">
        <div class="hero-content">

            <div class="hero-label">
                SISTEM INFORMASI AKADEMIK
            </div>

            <h1 class="hero-title">
                Selamat Datang di <span>ACADEMIC</span>
            </h1>

            <p class="hero-description">
                Platform informasi akademik untuk membantu pengelolaan
                data perkuliahan, materi pembelajaran, dan nilai
                dalam satu sistem yang terintegrasi.
            </p>

            <div class="hero-actions">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-primary">
                        Masuk ke Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary">
                        Mulai Sekarang
                    </a>

                    <a href="{{ route('register') }}" class="btn btn-secondary">
                        Buat Akun
                    </a>
                @endauth
            </div>

        </div>
    </main>

    <footer class="welcome-footer">
        © {{ date('Y') }} ACADEMIC. Sistem Informasi Akademik.
    </footer>

</div>
</body>
</html>
