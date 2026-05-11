<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | Vorent</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
    
    <style>
        /* Variabel Warna Utama */
        :root {
            --primary: #1e56cd;
            --primary-dark: #0d368b;
            --text-main: #111827;
            --text-muted: #6b7280;
        }

        * { 
            margin: 0; 
            padding: 0; 
            box-sizing: border-box; 
            font-family: 'Plus Jakarta Sans', sans-serif; 
        }

        body { 
            /* Background gradien biru keabuan yang modern */
            background: linear-gradient(135deg, #e0e7ff 0%, #f3f4f6 100%);
            display: flex; 
            justify-content: center; 
            align-items: center; 
            min-height: 100vh; 
            padding: 20px;
        }

        .login-wrapper {
            width: 100%; 
            max-width: 440px;
        }

        /* Styling Bagian Logo/Judul */
        .brand { 
            text-align: center; 
            margin-bottom: 30px; 
        }
        .brand h1 { 
            font-size: 32px; 
            font-weight: 800; 
            color: var(--text-main); 
            letter-spacing: -1px; 
        }
        .brand h1 span { color: var(--primary); }
        .brand p { 
            color: var(--text-muted); 
            font-size: 15px; 
            margin-top: 8px; 
        }
        
        /* Styling Kotak Form */
        .login-card { 
            background: white; 
            padding: 40px; 
            border-radius: 24px; 
            box-shadow: 0 20px 40px rgba(0,0,0,0.06), 0 1px 3px rgba(0,0,0,0.05); 
        }
        
        .form-group { margin-bottom: 24px; position: relative; }
        .form-group label { 
            display: block; 
            margin-bottom: 10px; 
            font-weight: 600; 
            color: #374151; 
            font-size: 14px; 
        }
        
        /* Input dengan Ikon di dalamnya */
        .input-wrapper { 
            position: relative; 
            display: flex; 
            align-items: center; 
        }
        .input-wrapper iconify-icon { 
            position: absolute; 
            left: 16px; 
            color: #9ca3af; 
            font-size: 22px; 
            transition: 0.3s;
        }
        .form-group input { 
            width: 100%; 
            padding: 14px 14px 14px 48px; /* Padding kiri lebih besar untuk tempat ikon */
            border: 1.5px solid #e5e7eb; 
            border-radius: 12px; 
            font-size: 15px; 
            color: var(--text-main); 
            background: #f9fafb;
            transition: all 0.3s ease;
        }
        
        /* Efek saat form di-klik (Fokus) */
        .form-group input:focus { 
            outline: none; 
            border-color: var(--primary); 
            background: white;
            box-shadow: 0 0 0 4px rgba(30, 86, 205, 0.1); 
        }
        .form-group input:focus + iconify-icon {
            color: var(--primary);
        }
        
        /* Styling Tombol Elegan */
        .btn-login { 
            width: 100%; 
            padding: 16px; 
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%); 
            color: white; 
            border: none; 
            border-radius: 12px; 
            font-weight: 700; 
            font-size: 16px; 
            cursor: pointer; 
            transition: all 0.3s ease; 
            box-shadow: 0 10px 20px rgba(30, 86, 205, 0.2);
            display: flex; 
            justify-content: center; 
            align-items: center; 
            gap: 10px;
        }
        .btn-login:hover { 
            transform: translateY(-3px); 
            box-shadow: 0 15px 25px rgba(30, 86, 205, 0.3); 
        }
        
        /* Styling Pesan Error Cantik */
        .error-msg { 
            background: #fef2f2; 
            color: #b91c1c; 
            padding: 14px 16px; 
            border-radius: 12px; 
            margin-bottom: 24px; 
            font-size: 14px; 
            font-weight: 600; 
            border: 1px solid #fecaca;
            display: flex; 
            align-items: center; 
            gap: 10px;
        }

        /* --- MANTRA RESPONSIF UNTUK HP --- */
        @media (max-width: 480px) {
            .login-card { 
                padding: 30px 20px; 
                border-radius: 20px; 
            }
            .brand h1 { font-size: 28px; }
        }
    </style>
</head>
<body>

    <div class="login-wrapper">
        <div class="brand">
            <h1>Vorent<span>Admin</span></h1>
            <p>Silakan masuk untuk mengelola sistem armada</p>
        </div>

        <div class="login-card">
            
            @if(session('error'))
                <div class="error-msg">
                    <iconify-icon icon="mdi:alert-circle" style="font-size: 20px;"></iconify-icon>
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('login.post') }}" method="POST">
                @csrf
                
                <div class="form-group">
                    <label>Alamat Email</label>
                    <div class="input-wrapper">
                        <input type="email" name="email" required placeholder="Masukkan Email">
                        <iconify-icon icon="mdi:email-outline"></iconify-icon>
                    </div>
                </div>
                
                <div class="form-group">
                    <label>Kata Sandi</label>
                    <div class="input-wrapper">
                        <input type="password" name="password" required placeholder="Masukkan Password">
                        <iconify-icon icon="mdi:lock-outline"></iconify-icon>
                    </div>
                </div>
                
                <button type="submit" class="btn-login">
                    Masuk Dashboard
                    <iconify-icon icon="mdi:arrow-right" style="font-size: 20px;"></iconify-icon>
                </button>
            </form>

        </div>
    </div>

</body>
</html>