<?php

$secretKey = "6Lfi5m0sAAAAAB3r81amCqydw0IlMdTiOR7joBAO";
$botToken  = "1032986435:AAHKpiAqlEoaA1ntvWXXsN46s0MH9YYOiFk";
$chatId    = "636259541";

$responseKey = $_POST['g-recaptcha-response'] ?? '';
$userIP = $_SERVER['REMOTE_ADDR'] ?? '';

if (!$responseKey) {
    die("? reCAPTCHA tidak terisi.");
}

$verify = file_get_contents(
    "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP"
);

$response = json_decode($verify);

if ($response && $response->success) {

    $nama = htmlspecialchars($_POST['nama'] ?? '');
    $wa = htmlspecialchars($_POST['wa'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $kebutuhan = htmlspecialchars($_POST['kebutuhan'] ?? '');
    $paket = htmlspecialchars($_POST['paket'] ?? '');

    $tanggal = date("d-m-Y H:i:s");

    $message =
        "?? PENDAFTARAN BARU\n\n" .
        "?? Tanggal: $tanggal\n" .
        "?? Nama: $nama\n" .
        "?? WA: $wa\n" .
        "?? Email: $email\n" .
        "?? Paket: $paket\n" .
        "?? Kebutuhan: $kebutuhan\n\n" .
        "?? 10% akan disalurkan untuk anak yatim & penghafal Al-Qur'an";

    $url = "https://api.telegram.org/bot$botToken/sendMessage";

    $data = [
        'chat_id' => $chatId,
        'text' => $message
    ];

    $options = [
        'http' => [
            'method'  => 'POST',
            'header'  => "Content-Type: application/x-www-form-urlencoded\r\n",
            'content' => http_build_query($data),
            'timeout' => 10
        ]
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    if ($result) {
        echo "<h3 style='text-align:center;margin-top:50px;'>? Data berhasil dikirim.<br>Semoga menjadi amal jariyah ??</h3>";
    } else {
        echo "? Gagal mengirim ke Telegram.";
    }

} else {
    echo "<h3 style='text-align:center;margin-top:50px;'>? Verifikasi reCAPTCHA gagal!</h3>";
}
?>
