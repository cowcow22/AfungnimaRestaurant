<?php
session_start();
$successMessage = '';
if (isset($_GET['success'])) {
    $successMessage = '<br/><div class="alert alert-success text-center my-6">Data berhasil di Insert.</div>';
}

$dsn = "mysql:host=localhost;dbname=utslecpemweb";
$kunci = new PDO($dsn, "root", "");

$sql = "SELECT * FROM daftarmenu";

$hasil = $kunci->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <div class="bg-white">
        <header class="absolute inset-x-0 top-0 z-50 bg-white" style="position: fixed;">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <p class="-m-1.5 p-1.5 text-lg font-semibold leading-6 text-gray-900">Afungnima</p>
                </div>
                <a href="adminPage.php" class="-m-1.5 p-1.5 text-lg font-semibold leading-6 text-gray-900">Admin Page</a>
                <p class="-m-1.5 p-1.5 text-lg font-semibold leading-6 text-gray-900" style="margin-left: 0.3%; margin-right: 0.3%;">|</p>
                <a href='tambahMenu.php' class='text-black transition duration-150 ease-in-out -m-1.5 p-1.5 text-lg font-semibold leading-6' style='text-decoration: underline;'>Tambah Menu</a>

                <div class="flex lg:hidden">
                    <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <a href="logout.php" class="text-sm font-semibold leading-6 text-gray-900">Logout <span aria-hidden="true">&rarr;</span></a>
                </div>
            </nav>
            <!-- Mobile menu, show/hide based on menu open state. -->
            <div class="md:hidden" role="dialog" aria-modal="true">
                <!-- Background backdrop, show/hide based on slide-over state. -->
                <div class="fixed inset-0 z-50"></div>
                <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                    <div class="flex items-center justify-between">
                        <div class="flex lg:flex-1">
                            <p class="-m-1.5 p-1.5 text-lg font-semibold leading-6 text-gray-900">Afungnima</p>
                        </div>
                        <a href="adminPage.php" class="-m-1.5 p-1.5 text-lg font-semibold leading-6 text-gray-900">Admin Page</a>
                        <p class="-m-1.5 p-1.5 text-lg font-semibold leading-6 text-gray-900" style="margin-left: 0.3%; margin-right: 0.3%;">|</p>
                        <a href='tambahMenu.php' class='text-black transition duration-150 ease-in-out -m-1.5 p-1.5 text-lg font-semibold leading-6' style='text-decoration: underline;'>Tambah Menu</a>
                        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="space-y-2 py-6">
                            <a href="logout.php" class="text-sm font-semibold leading-6 text-gray-900">Logout <span aria-hidden="true">&rarr;</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="relative isolate px-6 pt-14 lg:px-8">
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
                                <thead class="border-b bg-neutral-800 font-medium text-white dark:border-neutral-500 dark:bg-neutral-900">
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
                                <tbody>
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
            <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
                <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        document.getElementById("tambahbutton").onclick = function() {
            location.href = "tambahMenu.php";
        };
    </script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>