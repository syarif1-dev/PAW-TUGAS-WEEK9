<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Mahasiswa - Akademik</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="main-layout">
    <aside class="sidebar">
        <div class="brand">ACADEMIC<span>.</span></div>

        <p class="menu-title">Menu Utama</p>
        <a href="{{ url('/mahasiswa') }}" class="menu-link active">Dashboard</a>

        <p class="menu-title">Akademik</p>
        <a href="{{ url('/materi') }}" class="menu-link">Lihat Materi</a>
        <a href="{{ url('/nilai-pribadi') }}" class="menu-link">Lihat Nilai</a>

        <p class="menu-title">Akun</p>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="menu-link"
                style="width:100%; text-align:left; background:transparent; border:0; cursor:pointer;">
                Logout
            </button>
        </form>
    </aside>

    <main class="content">
        <header class="topbar">
            <h2>Dashboard Mahasiswa</h2>
            <div class="user-info">{{ Auth::user()->name }}</div>
        </header>

        <section class="page-content">
            <h1 class="page-title">
                Selamat Datang, {{ Auth::user()->name }}!
            </h1>

            <p class="page-description">
                Selamat datang di sistem informasi akademik.
            </p>

            <div class="stats-grid">
                <div class="stat-card">
                    <h3>Materi Pembelajaran</h3>
                    <p>Lihat Materi</p>
                    <small>Akses materi perkuliahan</small>
                </div>

                <div class="stat-card">
                    <h3>Hasil Penilaian</h3>
                    <p>Lihat Nilai</p>
                    <small>Lihat hasil nilai pribadi</small>
                </div>

                <div class="stat-card">
                    <h3>Informasi Akademik</h3>
                    <p>Akademik</p>
                    <small>Akses informasi pembelajaran</small>
                </div>
            </div>

            <div class="card">
                <h2>Informasi Sistem</h2>
                <p style="margin-top:10px; color:#64748b;">
                    Kamu masuk sebagai Mahasiswa. Gunakan menu di sebelah
                    kiri untuk melihat materi pembelajaran dan nilai pribadi.
                </p>
            </div>
        </section>
    </main>
</div>
</body>
</html>