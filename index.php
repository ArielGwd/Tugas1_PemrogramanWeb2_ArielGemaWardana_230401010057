<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Mini CRUD menggunakan OOP Style</title>
    <link rel="stylesheet" href="assets/css/output.css">
</head>

<body>
    <header>
        <h1>Aplikasi Mini CRUD menggunakan OOP Style</h1>
        <nav>
            <ul>
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="mahasiswa">Mahasiswa</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php
        $page = $_GET['page'] ?? 'dashboard';
        $file = $page . '.php';

        if (file_exists($file)) {
            include $file;
        } else {
            echo "<p>Halaman tidak ditemukan.</p>";
        }
        ?>
    </main>
</body>

</html>