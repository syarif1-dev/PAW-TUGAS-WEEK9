
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mata Kuliah - Akademik</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="main-layout">
    <aside class="sidebar">
        <div class="brand">ACADEMIC<span>.</span></div>

        <p class="menu-title">Menu Utama</p>
        <a href="{{ url('/admin') }}" class="menu-link">Dashboard</a>

        <p class="menu-title">Manajemen Akademik</p>
        <a href="{{ url('/manajemen-pengguna') }}" class="menu-link">Manajemen Pengguna</a>
        <a href="{{ route('mata-kuliah.index') }}" class="menu-link active">Mata Kuliah</a>
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
            <h2>Edit Mata Kuliah</h2>
            <div class="user-info">{{ Auth::user()->name }}</div>
        </header>

        <section class="page-content">
            <h1 class="page-title">Edit Mata Kuliah</h1>
            <p class="page-description">
                Perbarui informasi mata kuliah yang sudah tersimpan.
            </p>

            <div class="card">
                <h2>Formulir Edit Mata Kuliah</h2>
                <p style="color:#64748b; margin-top:5px; margin-bottom:25px;">
                    Ubah data mata kuliah sesuai kebutuhan.
                </p>

                <form action="{{ route('mata-kuliah.update', $mataKuliah->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>Kode Mata Kuliah</label>
                        <input
                            type="text"
                            name="kode_mk"
                            class="form-control"
                            value="{{ old('kode_mk', $mataKuliah->kode_mk) }}"
                        >
                        @error('kode_mk')
                            <p class="error-message">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Nama Mata Kuliah</label>
                        <input
                            type="text"
                            name="nama_mk"
                            class="form-control"
                            value="{{ old('nama_mk', $mataKuliah->nama_mk) }}"
                        >
                        @error('nama_mk')
                            <p class="error-message">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Jumlah SKS</label>
                        <input
                            type="number"
                            name="sks"
                            class="form-control"
                            value="{{ old('sks', $mataKuliah->sks) }}"
                        >
                        @error('sks')
                            <p class="error-message">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="action-group" style="margin-top:25px;">
                        <button type="submit" class="btn btn-primary">
                            Perbarui Data
                        </button>

                        <a href="{{ route('mata-kuliah.index') }}"
                            class="btn btn-secondary">
                            Kembali
                        </a>
                    </div>
                </form>
            </div>
        </section>
    </main>
</div>
</body>
</html>
