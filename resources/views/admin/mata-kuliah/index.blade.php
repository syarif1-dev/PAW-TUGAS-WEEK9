
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mata Kuliah - Akademik</title>
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
            <h2>Data Mata Kuliah</h2>
            <div class="user-info">{{ Auth::user()->name }}</div>
        </header>

        <section class="page-content">
            <h1 class="page-title">Daftar Mata Kuliah</h1>
            <p class="page-description">
                Kelola data mata kuliah yang tersedia dalam sistem akademik.
            </p>

            @if(session('success'))
                <div class="success-message">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card">
                <div class="row" style="justify-content:space-between; align-items:center; margin-bottom:20px;">
                    <div>
                        <h2>Data Mata Kuliah</h2>
                        <p style="color:#64748b; margin-top:5px;">
                            Daftar seluruh mata kuliah.
                        </p>
                    </div>

                    <a href="{{ route('mata-kuliah.create') }}" class="btn btn-primary">
                        + Tambah Mata Kuliah
                    </a>
                </div>

                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode MK</th>
                                <th>Nama Mata Kuliah</th>
                                <th>SKS</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($mataKuliahs as $index => $mk)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $mk->kode_mk }}</td>
                                    <td>{{ $mk->nama_mk }}</td>
                                    <td>{{ $mk->sks }}</td>
                                    <td>
                                        <div class="action-group">
                                            <a href="{{ route('mata-kuliah.edit', $mk->id) }}"
                                                class="btn btn-secondary">
                                                Edit
                                            </a>

                                            <form action="{{ route('mata-kuliah.destroy', $mk->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"
                                                    class="btn btn-danger"
                                                    onclick="return confirm('Yakin ingin menghapus data ini?')">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" style="text-align:center; padding:25px;">
                                        Belum ada data mata kuliah.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
</div>
</body>
</html>
