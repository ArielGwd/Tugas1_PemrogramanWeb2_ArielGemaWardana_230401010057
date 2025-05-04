<?php

require_once '../config/request.php';

switch ($_GET['action'] ?? '') {
    case 'add':
        $kd_buku = $_POST['kd_buku'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $year_published = $_POST['year_published'];
        $progress = $_POST['progress'];

        if (empty($kd_buku) || empty($title) || empty($author) || empty($year_published) || empty($progress)) {
            header("Location: ../books/index.php");
            break;
        }

        $check = $koneksi->prepare("SELECT kd_buku FROM books WHERE kd_buku = ?");
        $check->bind_param("s", $kd_buku);
        $check->execute();
        $check->store_result();

        if ($check->num_rows > 0) {
            echo "Duplicate entry for kd_buku '$kd_buku'. <script>window.location.href='../books/index.php';</script>";
        } else {
            $data = $koneksi->prepare("INSERT INTO books (kd_buku, title, author, year_published, progress) VALUES (?, ?, ?, ?, ?)");
            $data->bind_param("sssss", $kd_buku, $title, $author, $year_published, $progress);
            $data->execute();

            if (!$data) {
                die("Query Error: " . $koneksi->errno . " - " . $koneksi->error);
            } else {
                header("Location: ../books/index.php");
                exit();
            }
        }
        break;

    case 'update':
        $kd_buku = $_POST['kd_buku'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $year_published = $_POST['year_published'];
        $progress = $_POST['progress'];

        if (empty($kd_buku) || empty($title) || empty($author) || empty($year_published) || empty($progress)) {
            header("Location: ../books/index.php");
            exit();
        }

        $check = $koneksi->prepare("SELECT progress FROM books WHERE kd_buku = ?");
        $check->bind_param("s", $kd_buku);
        $check->execute();
        $result = $check->get_result();
        $row = $result->fetch_assoc();

        if ($row && $row['progress'] === 'selesai') {
            $progress = 'selesai';
            header("Location: ../books/index.php?message=Update successful.");
            exit();
        }

        $data = $koneksi->prepare("UPDATE books SET title=?, author=?, year_published=?, progress=? WHERE kd_buku=?");
        $data->bind_param("sssss", $title, $author, $year_published, $progress, $kd_buku);
        $data->execute();

        if (!$data) {
            die("Query Error: " . $koneksi->errno . " - " . $koneksi->error);
        } else {
            header("Location: ../books/index.php");
            exit();
        }
        break;

    case 'delete':
        $kd_buku = $_POST['kd_buku'];

        $data = $koneksi->prepare("DELETE FROM books WHERE kd_buku=?");
        $data->bind_param("s", $kd_buku);
        $data->execute();

        if (!$data) {
            die("Query Error: " . $koneksi->errno . " - " . $koneksi->error);
        } else {
            header("Location: ../books/index.php");
            exit();
        }
        break;

    default:
        echo "404 Error.";
        break;
}
