<?php

class Database
{
    public function connect()
    {
        $koneksi = new mysqli('localhost', 'root', '', 'tugas_web2_arielgema');

        if ($koneksi->connect_errno) {
            die("Koneksi Gagal: " . $koneksi->connect_errno . ' - ' . $koneksi->connect_error . "\n");
        }

        return $koneksi;
    }
}
