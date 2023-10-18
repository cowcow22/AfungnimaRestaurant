<?php
session_start();
$successMessage = '';
if (isset($_GET['success'])) {
    $successMessage = '<br/><div class="alert alert-success text-center my-6 text-white">Data berhasil di Insert.</div>';
}

require('db.php');

$sql = "SELECT * FROM daftarmenu";

$hasil = $db->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <div class="dark:bg-gray-900">
        <header class="absolute inset-x-0 top-0 z-50" style="position:fixed; background-color:white">
            <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
                    <a href="adminPage.php" class="flex items-center">
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
                            <li>
                                <a href="tambahMenu.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gray-700 md:p-0 md:dark:hover:text-gray-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tambah Menu</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <br>
        <div class="relative isolate px-6 pt-14 lg:px-8 bg-black">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
            <?php
            echo $successMessage;
            ?>
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full text-center text-sm font-light">
                                <thead class="border-b bg-gray-900 font-medium text-white dark:border-neutral-500">
                                    <tr>
                                        <th scope="col" class=" px-6 py-4">Nomor</th>
                                        <th scope="col" class=" px-6 py-4">Nama Menu</th>
                                        <th scope="col" class=" px-6 py-4">Harga Menu</th>
                                        <th scope="col" class=" px-6 py-4">Deskripsi Menu</th>
                                        <th scope="col" class=" px-6 py-4">Gambar</th>
                                        <th scope="col" class=" px-6 py-4">Edit</th>
                                        <th scope="col" class=" px-6 py-4">Delete</th>
                                    </tr>
                                </thead>
                                <tbody class="border-b bg-gray-900 font-medium text-white dark:border-neutral-500 ">
                                    <?php
                                    while ($row = $hasil->fetch(PDO::FETCH_ASSOC)) {
                                        echo "<tr class='border-b dark:border-neutral-500'>";
                                        echo "<td class='whitespace-nowrap  px-6 py-4 font-medium'>" . $row["idmenu"] . "</td>";
                                        echo "<td class='whitespace-nowrap  px-6 py-4'>" . $row["namamenu"] . "</td>";
                                        echo "<td class='whitespace-nowrap  px-6 py-4'>" . 'Rp' . $row["hargamenu"] . "</td>";
                                        echo "<td class='whitespace-nowrap  px-6 py-4'>" . $row["deskripsimenu"] . "</td>";
                                        echo "<td class='whitespace-nowrap  px-6 py-4'><img src='fotomenu/" . $row["fotomenu"] . "' width='100' height='100'></td>";
                                        echo "<td class='whitespace-nowrap  px-6 py-4'><a href='editMenu.php?idmenu=" . $row["idmenu"] . "' style='text-decoration: underline;'>Edit</a></td>";
                                        echo "<td class='whitespace-nowrap  px-6 py-4'><a href='deleteMenu.php?idmenu=" . $row["idmenu"] . "' style='text-decoration: underline;'>Delete</a></td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script type="text/javascript">
        document.getElementById("tambahbutton").onclick = function() {
            location.href = "tambahMenu.php";
        };
    </script>
    <script>
        function logout() {
            window.location.href = 'logout.php';
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>