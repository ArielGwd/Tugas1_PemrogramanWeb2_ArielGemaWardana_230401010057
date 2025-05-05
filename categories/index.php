<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookshelf - Aplikasi Mini CRUD</title>
    <link rel="icon" href="../assets/img/logo-unsia.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body class="bg-gray-100 dark:bg-gray-900">
    <header class="antialiased mx-auto px-4 lg:px-12 max-w-screen-xl -mb-4 ">
        <div class="bg-white border-gray-200 px-4 lg:px-12 py-3.5 dark:bg-gray-800 rounded-lg shadow-md ">
            <h1 class="text-2xl text-violet-700 font-bold">
                <a href="../">Bookshelf</a>
            </h1>
        </div>
    </header>

    <main>
        <div class="md:flex gap-6 py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-12">
            <aside>
                <ul class="flex-column space-y space-y-4 text-sm font-medium p-6 bg-white rounded-lg text-gray-500 dark:text-gray-400 md:me-2 mb-4 md:mb-0">
                    <li>
                        <a href="../" class="inline-flex items-center px-10 py-3 rounded-lg group hover:text-violet-900 bg-gray-50 hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                            <svg class="w-4 h-4 me-2 text-gray-500 dark:text-gray-400 group-hover:text-violet-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="../books/" class="inline-flex items-center px-10 py-3 rounded-lg group hover:text-violet-900 bg-gray-50 hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                            <svg class="w-5 h-5 mr-2 text-gray-500 dark:text-gray-400 group-hover:text-violet-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 19V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v13H7a2 2 0 0 0-2 2Zm0 0a2 2 0 0 0 2 2h12M9 3v14m7 0v4" />
                            </svg>
                            Buku
                        </a>
                    </li>
                    <li>
                        <a href="index.php" class=" inline-flex items-center px-10 py-3 rounded-lg bg-violet-700 w-full dark:bg-violet-600 text-white">
                            <svg class="w-5 h-5 mr-2 text-gray-100 dark:text-gray-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11H4m15.5 5a.5.5 0 0 0 .5-.5V8a1 1 0 0 0-1-1h-3.75a1 1 0 0 1-.829-.44l-1.436-2.12a1 1 0 0 0-.828-.44H8a1 1 0 0 0-1 1M4 9v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-7a1 1 0 0 0-1-1h-3.75a1 1 0 0 1-.829-.44L9.985 8.44A1 1 0 0 0 9.157 8H5a1 1 0 0 0-1 1Z" />
                            </svg>
                            Kategori
                        </a>
                    </li>
                </ul>
            </aside>

            <div class="w-full ini">
                <?php
                $page = $_GET['page'] ?? 'main';

                $filePath = $page . '.php';

                if (file_exists($filePath)) {
                    include($filePath);
                } else {
                    echo "<p>Halaman tidak ditemukan.</p>";
                }
                ?>
            </div>


        </div>
    </main>

    <?php include '../layout/footer.php'; ?>

    <script src="../assets/js/static.js"></script>
    <script src="../node_modules/flowbite/dist/flowbite.min.js"></script>
    <script src="../node_modules/simple-datatables/dist/umd/simple-datatables.js"></script>
    <script>
        if (document.getElementById("pagination-table") && typeof simpleDatatables.DataTable !== "undefined") {
            const dataTable = new simpleDatatables.DataTable("#pagination-table", {
                paging: true,
                perPage: 5,
                perPageSelect: [5, 10, 15, 20, 25],
                sortable: false,

                labels: {
                    placeholder: "Pencarian...",
                    perPage: "data per halaman",
                    noRows: "Tidak ada data",
                    noResults: "Tidak ada hasil ditemukan",
                    info: "{start} - {end} dari {rows} data",
                },
            });
        }
    </script>
</body>

</html>