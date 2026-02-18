<?php 
//include 'visitor.php'; 
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Program Internet & Donasi Berkah</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- reCAPTCHA -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<style>
body {
    background: linear-gradient(135deg,#004e92,#000428);
    min-height:100vh;
}

/* Navbar */
.navbar-custom {
    background: linear-gradient(90deg,#1e3c72,#2a5298);
}
.navbar-custom .nav-link {
    color: white !important;
    font-weight: 500;
}
.navbar-custom .nav-link:hover {
    opacity: 0.8;
}

/* Card */
.card{
    border-radius:20px;
}

/* Button */
.btn-custom{
    background:#00c853;
    color:white;
    border-radius:12px;
}
.btn-custom:hover{
    background:#009624;
    color:white;
}

/* Progress */
.progress{
    height:12px;
    border-radius:10px;
}
</style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom shadow-sm">
<div class="container">

<a class="navbar-brand fw-bold" href="#">
PT. Suneo Arsyad Raen
</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav mx-auto">

<li class="nav-item">
<a class="nav-link active" href="#">Home</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">Paket Internet</a>
</li>

<li class="nav-item">
<a class="nav-link" href="info.php">Program Donasi</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">Testimoni</a>
</li>

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
Layanan
</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="#">Belokin Medsos</a></li>
<li><a class="dropdown-item" href="#">Belokin Game</a></li>
<li><a class="dropdown-item" href="#">Corporate</a></li>
</ul>
</li>

<li class="nav-item">
<a class="nav-link" href="#">Kontak</a>
</li>

</ul>
</div>

</div>
</nav>

<!-- CONTENT -->
<div class="container py-5">
<div class="row justify-content-center">
<div class="col-md-7">

<div class="card shadow-lg p-4">

<h3 class="text-center mb-3 text-dark">
Program Internet & Donasi Berkah
</h3>

<!-- PROGRAM DONASI -->
<div class="card mb-4 border-0 shadow-sm" style="background:#f1fff5;">
<div class="card-body">

<h6 class="text-success fw-bold mb-2">
Setiap Donasi = 10% Untuk Anak Yatim & Penghafal Al-Qur'an
</h6>

<p class="small text-muted mb-2">
Sebagian dari donasi akan kami salurkan untuk program sosial dan pendidikan Al-Qur'an.
Semoga menjadi amal jariyah
</p>

<!-- COUNTER -->
<div class="mb-2">
<small>Total Donasi Terkumpul:</small>
<h5 class="text-success">Rp 3.500.000</h5>
</div>

<!-- PROGRESS -->
<div>
<small>Target Bulan Ini: Rp 10.000.000</small>
<div class="progress mt-1">
<div class="progress-bar bg-success" style="width:35%"></div>
</div>
</div>

</div>
</div>

<!-- FORM -->
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
<span class="badge bg-light text-success ms-2">
+ Sedekah 10%
</span>
</button>
</div>

</form>

</div>
</div>
</div>
</div>

<!-- POPUP MODAL -->
<div class="modal fade" id="infoModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="border-radius:15px;">
      
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Informasi Layanan</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body text-center">
        <p class="mb-2 fs-5">
          Kami akan bantu konfigurasi maksimal 
          <strong>2 ISP saja ya</strong>.
        </p>
        <p class="text-muted small">
          Untuk kebutuhan lebih dari 2 ISP, silakan hubungi tim kami terlebih dahulu. https://wa.me/62811664254
        </p>
      </div>

      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-success px-4" data-bs-dismiss="modal">
          Mengerti
        </button>
      </div>

    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- AUTO SHOW MODAL -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    var myModal = new bootstrap.Modal(document.getElementById('infoModal'));
    myModal.show();
});
</script>

</body>
</html>
