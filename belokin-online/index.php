<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Pendaftaran</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <style>
        body {
            background: linear-gradient(135deg, #0088cc, #004e92);
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        .card {
            border-radius: 15px;
        }
        .form-control, .form-select {
            border-radius: 10px;
        }
        .btn-custom {
            background-color: #0088cc;
            color: white;
            border-radius: 10px;
        }
        .btn-custom:hover {
            background-color: #006699;
            color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg p-4">
                <h3 class="text-center mb-4">Form Pendaftaran</h3>

                <form action="send.php" method="POST">

                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">No Whatsapp</label>
                        <input type="text" name="wa" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kebutuhan</label>
                        <textarea name="kebutuhan" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Paket</label>
                        <select name="paket" class="form-select" required>
                            <option value="">Pilih Paket</option>
                            <option>Paket Belokin Medsos</option>
                            <option>Paket Belokin Game</option>
                            </select>
                    </div>

                    <div class="mb-3">
                        <div class="g-recaptcha" data-sitekey="6Lfi5m0sAAAAAMDQRpg_fil36S1i2pRvNtr9kFCs"></div>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-custom btn-lg">
                            Kirim Pendaftaran
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

</body>
</html>
