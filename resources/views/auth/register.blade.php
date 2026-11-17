
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Aplikasi Akademik</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="auth-container">
        <div class="auth-card">

            <div class="brand" style="text-align:center; margin-bottom:25px;">
                ACADEMIC<span>.</span>
            </div>

            <h1 class="auth-title">Buat Akun Baru</h1>

            <p class="auth-description">
                Daftarkan akun untuk menggunakan sistem informasi akademik.
            </p>

            @if ($errors->any())
                <div class="error-message" style="margin-bottom:20px;">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('register') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label>Nama</label>
                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        value="{{ old('name') }}"
                        placeholder="Masukkan nama lengkap"
                        required
                    >
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        value="{{ old('email') }}"
                        placeholder="Masukkan email"
                        required
                    >
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        placeholder="Masukkan password"
                        required
                    >
                </div>

                <div class="form-group">
                    <label>Konfirmasi Password</label>
                    <input
                        type="password"
                        name="password_confirmation"
                        class="form-control"
                        placeholder="Masukkan ulang password"
                        required
                    >
                </div>

                <button type="submit" class="btn btn-primary"
                    style="width:100%; margin-top:10px;">
                    Daftar
                </button>
            </form>

            <p style="text-align:center; margin-top:25px; color:#64748b;">
                Sudah punya akun?
                <a href="{{ route('login') }}"
                    style="color:#2563eb; font-weight:600; text-decoration:none;">
                    Login di sini
                </a>
            </p>

        </div>
    </div>

</body>
</html>
