<?php

require_once 'database.php';

$db = new Database();
$koneksi = $db->connect();

if ($koneksi) {
     "Koneksi Berhasil: " . $koneksi->host_info . "\n";
}
