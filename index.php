<?php

// Memuat file autoload untuk semua library yang diinstal oleh Composer
require 'vendor/autoload.php';

use Carbon\Carbon;
use GuzzleHttp\Client;

// Menggunakan Carbon untuk manipulasi tanggal
echo "Sekarang: " . Carbon::now()->toDateTimeString() . PHP_EOL;
echo "Besok: " . Carbon::now()->addDay()->toDateTimeString() . PHP_EOL;

// Menggunakan Guzzle untuk membuat HTTP request
$client = new Client();
$response = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');

echo "Status kode: " . $response->getStatusCode() . PHP_EOL;
echo "Isi response: " . $response->getBody() . PHP_EOL;
?>
