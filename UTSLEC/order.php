<?php
session_start();
require_once('db.php');

$sql = "SELECT * FROM `order` o INNER JOIN daftarmenu dm ON o.idmenu = dm.idmenu WHERE username = ? ";
$stmt = $db->prepare($sql);
$stmt->execute([$_SESSION['username']]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../UTSLEC/assets/css/style.css">
</head>

<body>
    <div class="h-screen">
        <header class="absolute inset-x-0 top-0 z-50 dark:bg-gray-800">
            <nav class="w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
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
                        <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0 dark:border-gray-700">
                            <li>
                                <a href="aboutus.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gray-700 md:p-0 md:dark:hover:text-gray-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About Us</a>
                            </li>
                            <li>
                                <a href="userPage.php#sectionkategori" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gray-700 md:p-0 md:dark:hover:text-gray-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Pilih Makanan Lain</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <br><br><br>
        <div class="flex flex-col">
            <div class="overflow-x-auto">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="w-full text-sm text-center text-gray-500 dark:text-gray-400">
                            <thead class="text-xl text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
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
                                    <th scope="col" class="py-3 rounded-r-lg">
                                        Drop Menu
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $totalHarga = 0;
                                $totalPesanan = 0;
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    echo "<tr class='bg-white dark:bg-gray-800'>";
                                    echo "<td class='text-xl px-6 py-4'>" . $row["namamenu"] . "</td>";
                                    echo "<td class='text-xl px-6 py-4'>" . $row["jumlahpesanan"] . "</td>";
                                    echo "<td class='text-xl px-6 py-4'>" . 'Rp' . $row["harga"] . "</td>";
                                    echo "<td class='text-xl py-4'><a href='deleteOrder.php?idmenu=" . $row["idmenu"] . "' style='display: flex; justify-content: center;'><svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' strokeWidth={1.5} stroke='currentColor' width='16' height='16'>
                                <path strokeLinecap='round' strokeLinejoin='round' d='M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0' />
                                </svg></a></td>";
                                    echo "</tr>";
                                    $totalHarga += $row['harga'];
                                    $totalPesanan += $row['jumlahpesanan'];
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr class="font-semibold text-gray-900 dark:text-white">
                                    <th scope="row" class="px-6 py-3 text-xl">Total</th>
                                    <td class="px-6 py-3 text-xl"><?= $totalPesanan ?></td>
                                    <td class="px-6 py-3 text-xl">Rp<?= $totalHarga ?></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
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