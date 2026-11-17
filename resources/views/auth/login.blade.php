
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Aplikasi Akademik</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="auth-container">
        <div class="auth-card">

            <div class="brand" style="text-align:center; margin-bottom:25px;">
                ACADEMIC<span>.</span>
            </div>

            <h1 class="auth-title">Selamat Datang</h1>

            <p class="auth-description">
                Silakan login untuk mengakses sistem informasi akademik.
            </p>

            @if ($errors->any())
                <div class="error-message" style="margin-bottom:20px;">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ url('/login') }}" method="POST">
                @csrf

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

                <button type="submit" class="btn btn-primary"
                    style="width:100%; margin-top:10px;">
                    Login
                </button>

                <p style="text-align:center; margin-top:25px; color:#64748b;">
                    Belum punya akun?
                    <a href="{{ route('register') }}"
                        style="color:#2563eb; font-weight:600; text-decoration:none;">
                        Daftar di sini
                    </a>
                </p>
            </form>

        </div> 
    </div>

</body>
</html>

