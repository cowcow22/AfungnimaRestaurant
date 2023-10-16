<?php
session_start();
require_once('db.php');

$sql = "SELECT * FROM daftarmenu";
$stmt = $db->prepare($sql);
$stmt->execute();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <div class="bg-gray-900 h-screen">
        <header class="absolute inset-x-0 top-0 z-50">
            <nav class="bg-white dark:bg-gray-900 w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
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
                        <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-900 md:dark:bg-gray-900 dark:border-gray-700">
                            <li>
                                <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gray-700 md:p-0 md:dark:hover:text-gray-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About Us</a>
                            </li>
                            <li>
                                <a href="userPage.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gray-700 md:p-0 md:dark:hover:text-gray-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Pilih Makanan Lain</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <br><br><br>
        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">

            <div class="overflow-hidden">

                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3 rounded-l-lg">
                                    Menu
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Jumlah Pesanan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Harga
                                </th>
                                <th scope="col" class="px-6 py-3 rounded-r-lg">
                                    Delete
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                echo "<tr class='bg-white dark:bg-gray-800'>";
                                echo "<td class='px-6 py-4'>" . $row["namamenu"] . "</td>";
                                echo "<td class='px-6 py-4'>" . $row["namamenu"] . "</td>";
                                echo "<td class='px-6 py-4'>" . 'Rp' . $row["hargamenu"] . "</td>";
                                echo "<td class='px-6 py-4'><a href='deleteOrder.php?idmenu=" . $row["idmenu"] . "' style='text-decoration: underline;'>Delete</a></td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr class="font-semibold text-gray-900 dark:text-white">
                                <th scope="row" class="px-6 py-3 text-base">Total</th>
                                <td class="px-6 py-3">3</td>
                                <td class="px-6 py-3">21,000</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
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