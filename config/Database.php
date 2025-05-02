<?php

class Database
{
    public function connect()
    {
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $db = 'tugas_web2_arielgema';

        $koneksi = new mysqli($host, $user, $password, $db);

        if ($koneksi->connect_errno) {
            die("Koneksi Gagal: " . $koneksi->connect_errno . ' - ' . $koneksi->connect_error . "\n");
        }

        echo "Koneksi Berhasil: " . $koneksi->host_info . "\n";
    }
}
