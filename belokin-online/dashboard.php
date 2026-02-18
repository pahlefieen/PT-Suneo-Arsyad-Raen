<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Program Internet & Donasi Berkah</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<style>
body {
    background: #f4f6f9;
}

/* SIDEBAR */
.sidebar {
    width: 240px;
    background: #ffffff;
    min-height: 100vh;
    padding-top: 20px;
    border-right: 1px solid #eaeaea;
}

.sidebar a {
    display: flex;
    align-items: center;
    padding: 12px 20px;
    color: #333;
    text-decoration: none;
    font-weight: 500;
    border-radius: 10px;
    margin: 5px 10px;
    transition: 0.2s;
}

.sidebar a:hover {
    background: #f1f3f5;
}

.sidebar a.active {
    background: #1e5eff;
    color: #fff;
}

.sidebar i {
    margin-right: 10px;
}

/* CONTENT */
.content {
    flex: 1;
    padding: 30px;
}
</style>
</head>
<body>

<div class="d-flex">

<!-- SIDEBAR -->
<div class="sidebar shadow-sm">

    <a href="#">
        <i class="bi bi-speedometer2"></i> Main Dashboard
    </a>

    <a href="#" class="active">
        <i class="bi bi-graph-up"></i> Website Traffic
    </a>

    <a href="#">
        <i class="bi bi-lock"></i> Password
    </a>

    <a href="#">
        <i class="bi bi-bar-chart"></i> Analytics
    </a>

    <a href="#">
        <i class="bi bi-search"></i> SEO
    </a>

    <a href="#">
        <i class="bi bi-bag"></i> Orders
    </a>

    <a href="#">
        <i class="bi bi-globe"></i> International
    </a>

    <a href="#">
        <i class="bi bi-building"></i> Partners
    </a>

    <a href="#">
        <i class="bi bi-calendar"></i> Calendar
    </a>

    <!-- MENU BARU -->
    <a href="#">
        <i class="bi bi-link-45deg"></i> Site Baru / Link Baru
    </a>

    <a href="#">
        <i class="bi bi-router"></i> Konfigurasi Router
    </a>

</div>

<!-- CONTENT -->
<div class="content">

    <h3 class="mb-4">Konfigurasi Router</h3>

    <div class="alert alert-warning">
        <strong>Perhatian!</strong><br>
        Sebelum router anda di konfigurasi, pastikan konfigurasi yang tidak penting di hapus terlebih dahulu.
    </div>

    <div class="card shadow-sm p-4">
        <h5>Tambah Site / Link Baru</h5>
        <form>
            <div class="mb-3">
                <label class="form-label">Nama Site</label>
                <input type="text" class="form-control" placeholder="Contoh: Router Kantor Pusat">
            </div>

            <div class="mb-3">
                <label class="form-label">IP / Domain</label>
                <input type="text" class="form-control" placeholder="Contoh: 192.168.1.1">
            </div>

            <div class="mb-3">
                <label class="form-label">Keterangan</label>
                <textarea class="form-control" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">
                Simpan Site
            </button>
        </form>
    </div>

</div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
