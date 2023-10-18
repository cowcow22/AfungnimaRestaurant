<?php
session_start();
require('db.php');

$jenismenu = [
    "appetizer" => "Appetizer",
    "main course" => "Main Course",
    "dessert" => "Dessert",
    "seafood" => "Sea Food",
    "vegetables" => "Vegetables",
    "drink" => "Drink"
];

$sql = "SELECT role FROM login";
$stmt = $db->prepare($sql);
$stmt->execute();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restoran IF330-B Kelompok 2</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
</head>

<style>
    .menu-details {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease;
    }

    .menu-details-active {
        max-height: 1000px;
        transition: max-height 2s ease;
    }
</style>

<body>
    <div class="dark:bg-gray-900">
        <header class="absolute inset-x-0 top-0 z-50">
            <nav class="bg-white dark:bg-gray-900 w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
                    <a href="index.php" class="flex items-center">
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Afungnima</span>
                    </a>
                    <div class="flex md:order-2">
                        <button type="button" onclick="login()" id="loginbutton" class="mx-3 flex gap-3 cursor-pointer text-white font-semibold bg-gradient-to-r from-gray-800 to-black px-7 py-3 rounded-full border border-gray-600 hover:scale-105 duration-200 hover:text-gray-500 hover:border-gray-800 hover:from-black hover:to-gray-900">
                            Login
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
                                <a href="aboutus.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gray-700 md:p-0 md:dark:hover:text-gray-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About Us</a>
                            </li>
                            <li>
                                <a href="#sectionkategorimenu" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gray-700 md:p-0 md:dark:hover:text-gray-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Menu Makanan</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <div class="relative isolate px-6 pt-14 lg:px-8">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
            <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                <div class="text-center">
                    <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Selamat Datang di Afungnima Restaurant</h1>
                    <p class="mt-6 text-lg leading-8 text-white">Afungnima Restaurant menyajikan berbagai menu yang dapat anda nikmati</p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <button type="button" onclick="register()" id="registerbutton" class="flex gap-3 cursor-pointer text-white font-semibold bg-gradient-to-r from-gray-800 to-black px-7 py-3 rounded-full border border-gray-600 hover:scale-105 duration-200 hover:text-gray-500 hover:border-gray-800 hover:from-black hover:to-gray-900">
                            Register
                        </button>
                    </div>
                </div>
            </div>
            <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
                <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
        </div>

        <section class="dark:bg-gray-900" id="sectionkategorimenu">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-2xl py-16 sm:py-16 lg:max-w-none lg:py-16">
                    <h2 class="text-2xl font-bold text-white">Kategori Menu</h2>
                    <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
                        <div class="group relative" data-aos="zoom-in">
                            <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                                <img src="https://st4.depositphotos.com/3860131/24657/i/450/depositphotos_246574494-stock-photo-deviled-eggs-stuffed-eggs-filled.jpg" alt="Makanan Appetizer" class="h-full w-full object-cover object-center">
                            </div>
                            <h3 class="mt-3 text-sm text-white">
                                <a href="#sectionappetizer">
                                    <span class="absolute inset-0"></span>
                                    Appetizer
                                </a>
                            </h3>
                            <p class="text-base font-semibold text-white my-1">Hidangan Pembuka</p>
                        </div>
                        <div class="group relative" data-aos="zoom-in">
                            <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                                <img src="https://st2.depositphotos.com/3210553/9823/i/450/depositphotos_98232150-stock-photo-pan-fried-salmon-with-tender.jpg" alt="Makanan Utama" class="h-full w-full object-cover object-center">
                            </div>
                            <h3 class="mt-3 text-sm text-white">
                                <a href="#sectionmain course">
                                    <span class="absolute inset-0"></span>
                                    Main Course
                                </a>
                            </h3>
                            <p class="text-base font-semibold text-white my-1">Hidangan Utama</p>
                        </div>
                        <div class="group relative" data-aos="zoom-in">
                            <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                                <img src="https://st.depositphotos.com/1744806/2387/i/450/depositphotos_23875029-stock-photo-dessert-cheesecake.jpg" alt="Makanan Penutup" class="h-full w-full object-cover object-center">
                            </div>
                            <h3 class="mt-4 text-sm text-white">
                                <a href="#sectiondessert">
                                    <span class="absolute inset-0"></span>
                                    Dessert
                                </a>
                            </h3>
                            <p class="text-base font-semibold text-white my-1">Hidangan Penutup</p>
                        </div>
                        <div class="group relative" data-aos="zoom-in">
                            <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                                <img src="https://st.depositphotos.com/1158226/2406/i/450/depositphotos_24068577-stock-photo-shrimps-fried-on-pan-with.jpg" alt="Seafood" class="h-full w-full object-cover object-center">
                            </div>
                            <h3 class="mt-4 text-sm text-white">
                                <a href="#sectionseafood">
                                    <span class="absolute inset-0"></span>
                                    Sea Food
                                </a>
                            </h3>
                            <p class="text-base font-semibold text-white my-1">Makanan Seafood</p>
                        </div>
                        <div class="group relative" data-aos="zoom-in">
                            <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                                <img src="https://st.depositphotos.com/1018248/2279/i/450/depositphotos_22790206-stock-photo-vegetarian-food-on-white-dish.jpg" alt="Sayuran" class="h-full w-full object-cover object-center">
                            </div>
                            <h3 class="mt-4 text-sm text-white">
                                <a href="#sectionvegetables">
                                    <span class="absolute inset-0"></span>
                                    Vegetables
                                </a>
                            </h3>
                            <p class="text-base font-semibold text-white my-1">Makanan Sayuran</p>
                        </div>
                        <div class="group relative" data-aos="zoom-in">
                            <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                                <img src="https://st2.depositphotos.com/1761693/11003/i/450/depositphotos_110035832-stock-photo-assortment-of-iced-fruit-drinks.jpg" alt="Minuman" class="h-full w-full object-cover object-center">
                            </div>
                            <h3 class="mt-4 text-sm text-white">
                                <a href="#sectiondrink">
                                    <span class="absolute inset-0"></span>
                                    Drink
                                </a>
                            </h3>
                            <p class="text-base font-semibold text-white my-1">Minuman yang kami sediakan</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php foreach ($jenismenu as $key => $value) : ?>
            <section class="dark:bg-gray-900" id="section<?= $key ?>">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <h2 class="text-2xl font-bold text-white"><?= $value ?></h2>
                    <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
                        <?php
                        $sql = "SELECT * FROM daftarmenu WHERE jenismenu = ?";
                        $stmt = $db->prepare($sql);
                        $stmt->execute([$key]);

                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) :
                        ?>
                            <div style="display: flex; flex-direction:column">
                                <div class="w-full mb-5 max-w-md bg-gray-800 rounded-lg shadow-md px-4 py-4">
                                    <div class="group relative" data-aos="zoom-in" onclick="toggleDetails(<?= $row['idmenu'] ?>)">
                                        <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                                            <?php echo "<img src='fotomenu/" . $row["fotomenu"] . "' class='h-full w-full object-cover object-center'>"; ?>
                                        </div>
                                        <h3 class="mt-3 text-sm text-white">
                                            <p class="text-base font-semibold text-white my-1"><?= $row['namamenu'] ?></p>
                                        </h3>
                                    </div>
                                    <div id="details_<?= $row['idmenu'] ?>" class="menu-details">
                                        <p class="text-base text-white my-1"><?= $row['deskripsimenu'] ?></p>
                                        <br>
                                        <div style="display: flex; justify-content: space-between;">
                                            <p class="text-base font-semibold text-white my-1">Harga: Rp<?= $row['hargamenu'] ?></p>
                                            <button type="button" onclick="pesan(<?= $row['idmenu'] ?>)" class="flex gap-3 cursor-pointer text-white font-semibold bg-gradient-to-r from-gray-800 to-black px-7 py-3 rounded-full border border-gray-600 hover:scale-105 duration-200 hover:text-gray-500 hover:border-gray-800 hover:from-black hover:to-gray-900">
                                                Pesan
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </section>
            <br>
        <?php endforeach; ?>
    </div>
    <script>
        function login() {
            window.location.href = 'login.php';
        }

        function register() {
            window.location.href = 'register.php';

        }

        function toggleDetails(idmenu) {
            const detailsElement = document.getElementById(`details_${idmenu}`);
            detailsElement.classList.toggle('menu-details-active');
        }

        function pesan(idmenu) {
            <?php if (isset($_SESSION['user_id']) && $role = 'user') : ?>
                console.log(`Tambahkan menu dengan ID ${idmenu} ke keranjang pemesanan`);
            <?php else : ?>
                window.location.href = 'login.php';
            <?php endif; ?>
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