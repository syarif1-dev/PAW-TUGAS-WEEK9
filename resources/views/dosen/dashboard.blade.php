<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Dosen - Akademik</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="main-layout">
    <aside class="sidebar">
        <div class="brand">ACADEMIC<span>.</span></div>

        <p class="menu-title">Menu Utama</p>
        <a href="{{ url('/dosen') }}" class="menu-link active">Dashboard</a>

        <p class="menu-title">Akademik</p>
        <a href="{{ url('/kelola-materi') }}" class="menu-link">Kelola Materi</a>
        <a href="{{ url('/kelola-nilai') }}" class="menu-link">Kelola Nilai</a>

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
            <h2>Dashboard Dosen</h2>
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
                    <p>Kelola Materi</p>
                    <small>Kelola materi untuk mahasiswa</small>
                </div>

                <div class="stat-card">
                    <h3>Penilaian</h3>
                    <p>Kelola Nilai</p>
                    <small>Kelola data nilai mahasiswa</small>
                </div>

                <div class="stat-card">
                    <h3>Aktivitas Akademik</h3>
                    <p>Pembelajaran</p>
                    <small>Akses fitur akademik dosen</small>
                </div>
            </div>

            <div class="card">
                <h2>Informasi Sistem</h2>
                <p style="margin-top:10px; color:#64748b;">
                    Kamu masuk sebagai Dosen. Gunakan menu di sebelah kiri
                    untuk mengelola materi pembelajaran dan nilai mahasiswa.
                </p>
            </div>
        </section>
    </main>
</div>
</body>
</html>