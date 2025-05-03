<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookshelf - Aplikasi Mini CRUD</title>
    <link rel="icon" href="assets/img/logo-unsia.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/output.css">
</head>

<body class="bg-gray-100 dark:bg-gray-900">
    <header class="antialiased mx-auto px-4 lg:px-12 max-w-screen-xl -mb-4 ">
        <div class="bg-white border-gray-200 px-4 lg:px-12 py-3.5 dark:bg-gray-800 rounded-lg shadow-md ">
            <h1 class="text-2xl text-violet-700 font-bold">
                <a href="index.php">Bookshelf</a>
            </h1>
        </div>
    </header>

    <main>
        <div class="md:flex gap-6 py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-12">
            <aside>
                <ul class="flex-column space-y space-y-4 text-sm font-medium p-6 bg-white rounded-lg text-gray-500 dark:text-gray-400 md:me-2 mb-4 md:mb-0">
                    <li>
                        <a href="index.php" class="inline-flex items-center px-10 py-3 text-white bg-violet-700 rounded-lg  w-full dark:bg-violet-600"">
                            <svg class=" w-4 h-4 me-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                            <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="books/" class="inline-flex items-center px-10 py-3 rounded-lg group hover:text-violet-900 bg-gray-50 hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                            <svg class="w-5 h-5 mr-2 text-gray-500 dark:text-gray-400 group-hover:text-violet-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.4472 2.10557c-.2815-.14076-.6129-.14076-.8944 0L5.90482 4.92956l.37762.11119c.01131.00333.02257.00687.03376.0106L12 6.94594l5.6808-1.89361.3927-.13363-5.6263-2.81313ZM5 10V6.74803l.70053.20628L7 7.38747V10c0 .5523-.44772 1-1 1s-1-.4477-1-1Zm3-1c0-.42413.06601-.83285.18832-1.21643l3.49538 1.16514c.2053.06842.4272.06842.6325 0l3.4955-1.16514C15.934 8.16715 16 8.57587 16 9c0 2.2091-1.7909 4-4 4-2.20914 0-4-1.7909-4-4Z" />
                                <path d="M14.2996 13.2767c.2332-.2289.5636-.3294.8847-.2692C17.379 13.4191 19 15.4884 19 17.6488v2.1525c0 1.2289-1.0315 2.1428-2.2 2.1428H7.2c-1.16849 0-2.2-.9139-2.2-2.1428v-2.1525c0-2.1409 1.59079-4.1893 3.75163-4.6288.32214-.0655.65589.0315.89274.2595l2.34883 2.2606 2.3064-2.2634Z" />
                            </svg>
                            Buku
                        </a>
                    </li>
                </ul>
            </aside>

            <div class="p-6 bg-white text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full rounded-lg">
                <?php
                include 'dashboard.php';
                ?>
            </div>
        </div>
    </main>

    <?php include 'layout/footer.php'; ?>


    <script src="node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>