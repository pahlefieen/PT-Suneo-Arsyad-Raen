<?php

$botToken = "1032986435:AAHKpiAqlEoaA1ntvWXXsN46s0MH9YYOiFk";
$chatID   = "636259541";

$ip = $_SERVER['REMOTE_ADDR'];

// Hindari localhost
if ($ip == "127.0.0.1" || $ip == "::1") {
    return;
}

// Ambil data lokasi + ISP
$details = @json_decode(file_get_contents("http://ip-api.com/json/$ip"));

$country = $details->country ?? "Tidak diketahui";
$city    = $details->city ?? "-";
$isp     = $details->isp ?? "Tidak diketahui";

$userAgent = $_SERVER['HTTP_USER_AGENT'];
$url       = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$date      = date("d-m-Y H:i:s");

$message = "
?? Visitor Baru!

?? URL: $url
?? Waktu: $date

?? IP: $ip
?? Negara: $country
?? Kota: $city
?? ISP: $isp

?? Device:
$userAgent
";

// Kirim ke Telegram
file_get_contents("https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatID&text=" . urlencode($message));

?>
