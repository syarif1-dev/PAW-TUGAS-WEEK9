<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Akademik</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="main-layout">

    <aside class="sidebar">
        <div class="brand">ACADEMIC<span>.</span></div>

        <p class="menu-title">Menu Utama</p>
        <a href="{{ url('/admin') }}" class="menu-link active">Dashboard</a>

        <p class="menu-title">Manajemen Akademik</p>
        <a href="{{ url('/manajemen-pengguna') }}" class="menu-link">Manajemen Pengguna</a>
        <a href="{{ url('/mata-kuliah') }}" class="menu-link">Mata Kuliah</a>
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
            <h2>Dashboard Admin</h2>
            <div class="user-info">
                {{ Auth::user()->name }}
            </div>
        </header>

        <section class="page-content">

            <h1 class="page-title">Selamat Datang, {{ Auth::user()->name }}!</h1>
            <p class="page-description">
                Selamat datang di sistem informasi akademik.
            </p>

            <div class="stats-grid">

                <div class="stat-card">
                    <h3>Manajemen Pengguna</h3>
                    <p>Pengguna</p>
                    <small>Kelola akun pengguna sistem</small>
                </div>

                <div class="stat-card">
                    <h3>Data Mata Kuliah</h3>
                    <p>Mata Kuliah</p>
                    <small>Kelola data mata kuliah</small>
                </div>

                <div class="stat-card">
                    <h3>Manajemen Akademik</h3>
                    <p>Materi & Nilai</p>
                    <small>Kelola data pembelajaran</small>
                </div>

            </div>

            <div class="card">
                <h2>Informasi Sistem</h2>
                <p style="margin-top:10px; color:#64748b;">
                    Kamu masuk sebagai Administrator.
                    Gunakan menu di sebelah kiri untuk mengelola
                    data akademik.
                </p>
            </div>

        </section>
    </main>
</div>

</body>
</html>

