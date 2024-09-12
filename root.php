<?php

require 'vendor/autoload.php';  // Memuat library dari Composer

use Carbon\Carbon;
use GuzzleHttp\Client;

// Menggunakan Carbon untuk menampilkan tanggal saat ini
echo "Tanggal dan waktu sekarang: " . Carbon::now()->toDateTimeString() . PHP_EOL;

// Menggunakan Guzzle untuk melakukan HTTP request
$client = new Client();
$response = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');

// Menampilkan status kode dan isi respons dari request HTTP
echo "Status kode HTTP: " . $response->getStatusCode() . PHP_EOL;
echo "Isi response: " . $response->getBody() . PHP_EOL;

?>
