<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    header("Allow: POST");
    header("Content-Type: text/plain; charset=UTF-8");
    echo "Metode request tidak valid!";
    exit;
}

$nama = trim($_POST["nama"] ?? "");

header("Content-Type: text/plain; charset=UTF-8");

if ($nama === "") {
    http_response_code(400);
    echo "Input nama tidak boleh kosong!";
    exit;
}

$namaAman = htmlspecialchars($nama, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");

echo "Halo, {$namaAman}! Selamat datang di AJAX!";
