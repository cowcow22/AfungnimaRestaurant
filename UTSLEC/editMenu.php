<?php
session_start();
$dsn = "mysql:host=localhost;dbname=utslecpemweb";
$kunci = new PDO($dsn, "root", "");

$idmenu = isset($_GET['idmenu']) ? $_GET['idmenu'] : null;

if ($idmenu !== null) {
    $sql = "SELECT * FROM daftarmenu WHERE idmenu = :idmenu";
    $stmt = $kunci->prepare($sql);
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
    <title>Tambah Menu</title>
</head>

<body>
    <header class="absolute inset-x-0 top-0 z-50 bg-gray-100" style="position: fixed;">
        <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="adminPage.php" class="-m-1.5 p-1.5 text-lg font-semibold leading-6 text-gray-900">Afungnima</a>
            </div>
            <a href="adminPage.php" class="-m-1.5 p-1.5 text-lg font-semibold leading-6 text-gray-900">Admin Page</a>
            <div class="flex lg:hidden">
                <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="logout.php" class="text-sm font-semibold leading-6 text-gray-900">Logout<span aria-hidden="true">&rarr;</span></a>
            </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div class="md:hidden" role="dialog" aria-modal="true">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div class="fixed inset-0 z-50"></div>
            <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex items-center justify-between">
                    <div class="flex lg:flex-1">
                        <a href="adminPage.php" class="-m-1.5 p-1.5 text-lg font-semibold leading-6 text-gray-900">Afungnima</a>
                    </div>
                    <a href="adminPage.php" class="-m-1.5 p-1.5 text-lg font-semibold leading-6 text-gray-900">Admin Page</a>
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
    <br><br>
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-2xl" style="text-align: center;">Tambahkan Menu</h1>
        <form class="space-y-6" action="editMenu_process.php" method="POST" enctype="multipart/form-data">
            <div>
                <label for="idmenu" class="block text-sm font-medium leading-6 text-gray-900">ID Menu</label>
                <div class="mt-2">
                    <input id="idmenu" name="idmenu" type="text" value="<?php echo $data['idmenu']; ?>" autocomplete="idmenu" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" readonly>
                </div>
            </div>
            <div>
                <label for="jenismenu" class="block text-sm font-medium leading-6 text-gray-900">Jenis Menu</label>
                <div class="mt-2">
                    <input id="jenismenu" name="jenismenu" type="text" value="<?php echo $data['jenismenu']; ?>" autocomplete="jenismenu" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <label for="namamenu" class="block text-sm font-medium leading-6 text-gray-900">Nama Menu</label>
                <div class="mt-2">
                    <input id="namamenu" name="namamenu" type="text" value="<?php echo $data['namamenu']; ?>" autocomplete="namamenu" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <label for="deskripsimenu" class="block text-sm font-medium leading-6 text-gray-900">Deskripsi Menu</label>
                <div class="mt-2">
                    <input id="deskripsimenu" name="deskripsimenu" type="text" value="<?php echo $data['deskripsimenu']; ?>" autocomplete="deskripsimenu" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <label for="hargamenu" class="block text-sm font-medium leading-6 text-gray-900">Harga Menu</label>
                <div class="mt-2">
                    <input id="hargamenu" name="hargamenu" type="text" value="<?php echo $data['hargamenu']; ?>" autocomplete="hargamenu" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <label for="fotomenu" class="block text-sm font-medium leading-6 text-gray-900">Foto Menu</label>
                <div class="mt-2">
                    <input id="fotomenu" name="fotomenu" type="file" autocomplete="fotomenu" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>