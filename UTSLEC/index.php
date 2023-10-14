<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restoran IF330-B Kelompok 2</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <div class="bg-white">
        <header class="absolute inset-x-0 top-0 z-50" style="position:fixed; background-color:white">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <p class="-m-1.5 p-1.5 text-lg font-semibold leading-6 text-gray-900">Afungnima</p>
                </div>
                <div class="flex lg:hidden">
                    <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="aboutus.php" class="text-sm font-semibold leading-6 text-gray-900">About Us</a>
                    <a href="menu.php" class="text-sm font-semibold leading-6 text-gray-900">Menu</a>
                    <a href="order.php" class="text-sm font-semibold leading-6 text-gray-900">Pesanan Kamu Disini</a>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <a href="login.php" class="text-sm font-semibold leading-6 text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a>
                </div>
            </nav>
            <!-- Mobile menu, show/hide based on menu open state. -->
            <div class="md:hidden" role="dialog" aria-modal="true">
                <!-- Background backdrop, show/hide based on slide-over state. -->
                <div class="fixed inset-0 z-50"></div>
                <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                    <div class="flex items-center justify-between">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="text-sm font-semibold leading-6 text-gray-900">Afungnima</span>
                        </a>
                        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/10">
                            <div class="space-y-2 py-6">
                                <a href="aboutus.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">About Us</a>
                                <a href="menu.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Menu</a>
                                <a href="order.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Pesanan Kamu Disini</a>
                            </div>
                            <div class="py-6">
                                <a href="login.php" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log in</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="relative isolate px-6 pt-14 lg:px-8">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
            <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                <div class="text-center">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Selamat Datang di Afungnima Restourant</h1>
                    <p class="mt-6 text-lg leading-8 text-gray-600">Afungnima Restourant menyajikan berbagai menu yang dapat anda nikmati</p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="register.php" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</a>
                    </div>
                </div>
            </div>
            <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
                <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
        </div>
    </div>
    <br>
    <section class="bg-gray-100">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl py-16 sm:py-16 lg:max-w-none lg:py-16">
                <h2 class="text-2xl font-bold text-gray-900">Kategori Menu</h2>

                <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
                    <div class="group relative" data-aos="zoom-in">
                        <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                            <img src="https://st4.depositphotos.com/3860131/24657/i/450/depositphotos_246574494-stock-photo-deviled-eggs-stuffed-eggs-filled.jpg" alt="Makanan Appetizer" class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-3 text-sm text-gray-500">
                            <a href="daftarmenu.php">
                                <span class="absolute inset-0"></span>
                                Appetizer
                            </a>
                        </h3>
                        <p class="text-base font-semibold text-gray-900 my-1">Hidangan Pembuka</p>
                    </div>
                    <div class="group relative" data-aos="zoom-in">
                        <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                            <img src="https://st2.depositphotos.com/3210553/9823/i/450/depositphotos_98232150-stock-photo-pan-fried-salmon-with-tender.jpg" alt="Makanan Utama" class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-4 text-sm text-gray-500">
                            <a href="daftarmenu.php">
                                <span class="absolute inset-0"></span>
                                Main Course
                            </a>
                        </h3>
                        <p class="text-base font-semibold text-gray-900 my-1">Hidangan Utama</p>
                    </div>
                    <div class="group relative" data-aos="zoom-in">
                        <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                            <img src="https://st.depositphotos.com/1744806/2387/i/450/depositphotos_23875029-stock-photo-dessert-cheesecake.jpg" alt="Makanan Penutup" class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-4 text-sm text-gray-500">
                            <a href="daftarmenu.php">
                                <span class="absolute inset-0"></span>
                                Dessert
                            </a>
                        </h3>
                        <p class="text-base font-semibold text-gray-900 my-1">Hidangan Penutup</p>
                    </div>
                    <div class="group relative" data-aos="zoom-in">
                        <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                            <img src="https://st.depositphotos.com/1158226/2406/i/450/depositphotos_24068577-stock-photo-shrimps-fried-on-pan-with.jpg" alt="Seafood" class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-4 text-sm text-gray-500">
                            <a href="daftarmenu.php">
                                <span class="absolute inset-0"></span>
                                Sea Food
                            </a>
                        </h3>
                        <p class="text-base font-semibold text-gray-900 my-1">Makanan Seafood</p>
                    </div>
                    <div class="group relative" data-aos="zoom-in">
                        <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                            <img src="https://st.depositphotos.com/1018248/2279/i/450/depositphotos_22790206-stock-photo-vegetarian-food-on-white-dish.jpg" alt="Sayuran" class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-4 text-sm text-gray-500">
                            <a href="daftarmenu.php">
                                <span class="absolute inset-0"></span>
                                Vegetables
                            </a>
                        </h3>
                        <p class="text-base font-semibold text-gray-900 my-1">Makanan Sayuran</p>
                    </div>
                    <div class="group relative" data-aos="zoom-in">
                        <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                            <img src="https://st2.depositphotos.com/1761693/11003/i/450/depositphotos_110035832-stock-photo-assortment-of-iced-fruit-drinks.jpg" alt="Minuman" class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-4 text-sm text-gray-500">
                            <a href="daftarmenu.php">
                                <span class="absolute inset-0"></span>
                                Drink
                            </a>
                        </h3>
                        <p class="text-base font-semibold text-gray-900 my-1">Minuman yang kami sediakan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>