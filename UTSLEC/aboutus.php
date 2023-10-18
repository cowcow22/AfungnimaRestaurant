<?php
session_start();
require('db.php');

$sql = "SELECT role FROM login";
$stmt = $db->prepare($sql);
$stmt->execute();
$role = $stmt->fetchColumn();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <div class="dark:bg-gray-900">
        <header class="absolute inset-x-0 top-0 z-50">
            <nav class="bg-white dark:bg-gray-900 w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
                    <a href="#" onclick="backtomenu()" class="flex items-center">
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Afungnima</span>
                    </a>
                    <div class="flex md:order-2">
                        <button type="button" onclick="login()" id="loginbutton" class="mx-3 flex gap-3 cursor-pointer text-white font-semibold bg-gradient-to-r from-gray-800 to-black px-7 py-3 rounded-full border border-gray-600 hover:scale-105 duration-200 hover:text-gray-500 hover:border-gray-800 hover:from-black hover:to-gray-900">
                            <?php
                            if (isset($_SESSION['user_id'])) {
                                echo 'Logout';
                            } else {
                                echo 'Login';
                            }
                            ?>
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
                                <a href="#" onclick="backtomenu()" class="block font-semibold py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gray-700 md:p-0 md:dark:hover:text-gray-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Back To Menu</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <section class="team">
            <div class="center">
                <h1>Our Team</h1>
            </div>

            <div class="team-content">
                <div class="box bg-gray-800">
                    <img src="../fotomakanan/appetizer/appetizer-adalah6-300x224.jpg">
                    <h3>Stevanus Firman W.</h3>
                    <h5>Artist</h5>
                    <div class="icons">
                        <a href="#"><i class="ri-linkedin-fill"></i></a>
                        <a href="#"><i class="ri-instagram-fill"></i></a>
                    </div>
                </div>

                <div class="box bg-gray-800">
                    <img src="../fotomakanan/appetizer/appetizer-adalah6-300x224.jpg">
                    <h3>Brian Ricky Budiman</h3>
                    <h5>Artist</h5>
                    <div class="icons">
                        <a href="#"><i class="ri-linkedin-fill"></i></a>
                        <a href="#"><i class="ri-instagram-fill"></i></a>
                    </div>
                </div>

                <div class="box bg-gray-800">
                    <img src="../fotomakanan/appetizer/appetizer-adalah6-300x224.jpg">
                    <h3>Darrell Samuel Sundy</h3>
                    <h5>Artist</h5>
                    <div class="icons">
                        <a href="#"><i class="ri-linkedin-fill"></i></a>
                        <a href="#"><i class="ri-instagram-fill"></i></a>
                    </div>
                </div>

                <div class="box bg-gray-800">
                    <img src="../fotomakanan/appetizer/appetizer-adalah6-300x224.jpg">
                    <h3>Gavin Prasetya</h3>
                    <h5>Artist</h5>
                    <div class="icons">
                        <a href="#"><i class="ri-linkedin-fill"></i></a>
                        <a href="#"><i class="ri-instagram-fill"></i></a>
                    </div>
                </div>

            </div>
    </div>
    </section>
    <script>
        //cek untuk tombol login/logout
        <?php if (isset($_SESSION['user_id'])) : ?>
            <?php if ($stmt->$role = 'user') : ?>

                function login() {
                    window.location.href = 'logout.php';
                }
            <?php else : ?>

                function login() {
                    window.location.href = 'login.php';
                }
            <?php endif; ?>
        <?php else : ?>

            function login() {
                window.location.href = 'login.php';
            }
        <?php endif; ?>

        //cek untuk tombol login/logout
        <?php if (isset($_SESSION['user_id'])) : ?>
            <?php if ($stmt->$role = 'user') : ?>

                function backtomenu() {
                    window.location.href = 'userPage.php';
                }
            <?php else : ?>

                function backtomenu() {
                    window.location.href = 'index.php';
                }
            <?php endif; ?>
        <?php else : ?>

            function backtomenu() {
                window.location.href = 'index.php';
            }
        <?php endif; ?>
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>