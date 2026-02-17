<?php

$secretKey = "6Lfi5m0sAAAAAB3r81amCqydw0IlMdTiOR7joBAO";
$botToken = "1032986435:AAHKpiAqlEoaA1ntvWXXsN46s0MH9YYOiFk";
$chatId   = "636259541";

// Validasi reCAPTCHA
$responseKey = $_POST['g-recaptcha-response'];
$userIP = $_SERVER['REMOTE_ADDR'];

$verify = file_get_contents(
    "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP"
);

$response = json_decode($verify);

if ($response->success) {

    $nama = htmlspecialchars($_POST['nama']);
    $wa = htmlspecialchars($_POST['wa']);
    $email = htmlspecialchars($_POST['email']);
    $kebutuhan = htmlspecialchars($_POST['kebutuhan']);
    $paket = htmlspecialchars($_POST['paket']);

    $message = "📌 FORM PENDAFTARAN\n\n".
               "Nama: $nama\n".
               "No WA: $wa\n".
               "Email: $email\n".
               "Kebutuhan: $kebutuhan\n".
               "Paket: $paket";

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
        ],
    ];

    $context  = stream_context_create($options);
    file_get_contents($url, false, $context);

    echo "<h3>✅ Data berhasil dikirim!</h3>";

} else {
    echo "<h3>❌ Verifikasi reCAPTCHA gagal!</h3>";
}

?>
