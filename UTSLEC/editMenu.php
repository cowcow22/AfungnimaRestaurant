<?php
session_start();
require('db.php');

$idmenu = isset($_GET['idmenu']) ? $_GET['idmenu'] : null;

if ($idmenu !== null) {
    $sql = "SELECT * FROM daftarmenu WHERE idmenu = :idmenu";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':idmenu', $idmenu, PDO::PARAM_INT);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Menu</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <div class="flex min-h-full flex-col justify-center px-6 py-7 lg:px-8 bg-black items-center dark:bg-gray-900">
        <header class="absolute inset-x-0 top-0 z-50" style="position:fixed; background-color:white">
            <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
                    <a href="userPage.php" class="flex items-center">
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Afungnima</span>
                    </a>
                    <div class="flex md:order-2">
                        <button type="button" onclick="logout()" id="logoutbutton" class="mx-3 flex gap-3 cursor-pointer text-white font-semibold bg-gradient-to-r from-gray-800 to-black px-7 py-3 rounded-full border border-gray-600 hover:scale-105 duration-200 hover:text-gray-500 hover:border-gray-800 hover:from-black hover:to-gray-900">
                            Logout
                        </button>
                        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                            </svg>
                        </button>
                    </div>
                    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                        <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-black md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-900 md:dark:bg-gray-900 dark:border-gray-700">
                            <li>
                                <a href="adminPage.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gray-700 md:p-0 md:dark:hover:text-gray-500  dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Admin Page</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <br><br>
        <div class="w-full max-w-md bg-gray-800 rounded-lg shadow-md">
            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <h1 class="text-2xl font-bold tracking-tight text-white sm:text-2xl" style="text-align: center;">Edit Menu</h1>
                <form class="space-y-6" action="editMenu_process.php" method="POST" enctype="multipart/form-data">
                    <div>
                        <label for="idmenu" class="block text-sm font-medium leading-6 text-white">ID Menu</label>
                        <div class="mt-2">
                            <input id="idmenu" name="idmenu" type="text" value="<?php echo $data['idmenu']; ?>" autocomplete="idmenu" required class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="jenismenu" class="block text-sm font-medium leading-6 text-white">Jenis Menu</label>
                        <div class="mt-2">
                            <input id="jenismenu" name="jenismenu" type="text" value="<?php echo $data['jenismenu']; ?>" autocomplete="jenismenu" required class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="namamenu" class="block text-sm font-medium leading-6 text-white">Nama Menu</label>
                        <div class="mt-2">
                            <input id="namamenu" name="namamenu" type="text" value="<?php echo $data['namamenu']; ?>" autocomplete="namamenu" required class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="deskripsimenu" class="block text-sm font-medium leading-6 text-white">Deskripsi Menu</label>
                        <div class="mt-2">
                            <input id="deskripsimenu" name="deskripsimenu" type="text" value="<?php echo $data['deskripsimenu']; ?>" autocomplete="deskripsimenu" required class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="hargamenu" class="block text-sm font-medium leading-6 text-white">Harga Menu</label>
                        <div class="mt-2">
                            <input id="hargamenu" name="hargamenu" type="text" value="<?php echo $data['hargamenu']; ?>" autocomplete="hargamenu" required class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="fotomenu" class="block text-sm font-medium leading-6 text-white">Foto Menu</label>
                        <div class="mt-2">
                            <input id="fotomenu" name="fotomenu" type="file" value="" autocomplete="fotomenu" class="block w-full rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <button type="submit" name="submit" class="mb-5 py-2 px-2 flex w-full justify-center bg-gradient-to-r from-indigo-500 to-blue-500 text-white font-bold rounded-md hover:bg-indigo-600 hover:to-blue-600 transition ease-in-out duration-150">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function logout() {
            window.location.href = 'logout.php';
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>