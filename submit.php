<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $wallet = trim($_POST['wallet'] ?? '');

    if (!empty($wallet)) {
        // wallets.txt dosyasına kaydet
        $file = __DIR__ . "/wallets.txt";  // aynı dizinde wallets.txt oluşturulur
        file_put_contents($file, $wallet . PHP_EOL, FILE_APPEND | LOCK_EX);
    }

    // Hiçbir yönlendirme yok, sadece form olduğu sayfada kalır
    echo "Wallet add successfully.";
}
?>