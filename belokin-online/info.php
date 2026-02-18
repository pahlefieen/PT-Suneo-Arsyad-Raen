<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Donasi Script Belokin</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    background: linear-gradient(135deg,#0f2027,#203a43,#2c5364);
    min-height:100vh;
}

/* PREMIUM MODAL EFFECT */
.modal-content {
    border-radius: 25px;
    border: none;
    backdrop-filter: blur(10px);
    animation: zoomIn 0.5s ease;
}

@keyframes zoomIn {
    from {transform: scale(0.8); opacity:0;}
    to {transform: scale(1); opacity:1;}
}

.modal-header {
    border-bottom: none;
}

.modal-body {
    padding: 30px;
}

/* PREMIUM BUTTON */
.btn-premium {
    background: linear-gradient(45deg,#00c853,#00e676);
    border: none;
    padding: 12px 25px;
    font-weight: bold;
    border-radius: 50px;
    transition: 0.3s;
    box-shadow: 0 5px 15px rgba(0,255,120,0.4);
}

.btn-premium:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0,255,120,0.6);
}

/* QRIS IMAGE */
.qris-img {
    width: 100%;
    max-width: 280px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.4);
    transition: 0.3s;
}

.qris-img:hover {
    transform: scale(1.05);
}
</style>
</head>
<body>

<!-- MODAL -->
<div class="modal fade show" id="donasiModal" tabindex="-1" style="display:block; background:rgba(0,0,0,0.6);">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center p-4">

        <h4 class="fw-bold mb-3 text-success">
            Donasi Rp. 99.000
        </h4>

        <p class="mb-2">
            Kamu sudah bisa mendapatkan script
            <strong>Belokin Game</strong> atau
            <strong>Belokin Medsos</strong> di MikroTik.
        </p>

        <p class="text-muted small mb-3">
            Tersedia untuk RouterOS v6 & v7.
        </p>

        <!-- QRIS -->
        <img src="assets/qris.png" class="qris-img mb-4" alt="QRIS">

        <button class="btn btn-premium"
                onclick="window.location.href='index.php'">
            Saya Sudah Transfer
        </button>

    </div>
  </div>
</div>

</body>
</html>
