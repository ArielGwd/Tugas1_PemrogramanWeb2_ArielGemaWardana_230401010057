<?php

class Database
{
    public function connect()
    {
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'tugas_web2_arielgema';

        try {
            $koneksi = new mysqli($host, $user, $password, $database);
            return $koneksi;
        } catch (Exception $e) {
            die('Koneksi Gagal: ' . $e->getMessage() . '\n');
        }
    }
}
