<?php

require_once '../config/request.php';

switch ($_GET['action'] ?? '') {
    case 'add':
        $kd_buku = $_POST['kd_buku'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $year_published = $_POST['year_published'];
        $progress = $_POST['progress'];
        $category_id = $_POST['category_id'];
        $description = $_POST['description'];

        if (empty($kd_buku) || empty($title) || empty($author) || empty($year_published) || empty($progress) || empty($category_id)) {
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
            $data = $koneksi->prepare("INSERT INTO books (kd_buku, title, author, year_published, progress, category_id, description) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $data->bind_param("sssssis", $kd_buku, $title, $author, $year_published, $progress, $category_id, $description);
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
        $category_id = $_POST['category_id'];
        $description = $_POST['description'];

        if (empty($kd_buku) || empty($title) || empty($author) || empty($year_published) || empty($category_id)) {
            header("Location: ../books/index.php");
            exit();
        }

        $check = $koneksi->prepare("SELECT progress FROM books WHERE kd_buku = ?");
        $check->bind_param("s", $kd_buku);
        $check->execute();
        $row = $check->get_result()->fetch_assoc();
        if ($row && $row['progress'] === 'selesai') {
            $progress = 'selesai';
        }

        $data = $koneksi->prepare("UPDATE books SET title=?, author=?, year_published=?, progress=?, category_id=?, description=? WHERE kd_buku=?");
        $data->bind_param("ssssiss", $title, $author, $year_published, $progress, $category_id, $description, $kd_buku);

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
