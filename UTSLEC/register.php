<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <div class="flex min-h-full flex-col justify-center px-6 py-7 lg:px-8 bg-black items-center dark:bg-gray-900">
        <div class="w-full max-w-md bg-gray-800 rounded-lg shadow-md">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <h2 class="mt-5 text-center text-2xl font-bold leading-9 tracking-tight text-white">Create your account</h2>
            </div>
            <div id="error" class="text-danger"></div>
            <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-sm">
                <form class="space-y-6" action="register_process.php" method="POST" onsubmit="return validasiPassword()">
                    <div class="mb-3">
                        <label for="namadepan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Depan</label>
                        <input type="text" name="namadepan" id="namadepan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="mb-3">
                        <label for="namabelakang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Belakang</label>
                        <input type="text" name="namabelakang" id="namabelakang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                        <input type="username" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggallahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
                        <input type="date" name="tanggallahir" id="tanggallahir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="mb-3">
                        <label for="jeniskelamin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
                        <div style="display: flex; justify-content:space-between;" class="text-white">
                            <input id="jeniskelamin" name="jeniskelamin" type="radio" autocomplete="jeniskelamin" value="Laki-Laki">Laki-Laki
                            <input id="jeniskelamin" name="jeniskelamin" type="radio" autocomplete="jeniskelamin" value="Perempuan">Perempuan
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="mb-3">
                        <label for="password2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm Password</label>
                        <input type="password" name="password2" id="password2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="mb-3">
                        <label for="kodereff" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Reff (Khusus Admin)</label>
                        <input type="text" name="kodereff" id="kodereff" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="py-5">
                        <button type="submit" name="submit" class="py-2 px-2 flex w-full justify-center bg-gradient-to-r from-indigo-500 to-blue-500 text-white font-bold rounded-md hover:bg-indigo-600 hover:to-blue-600 transition ease-in-out duration-150">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function validasiPassword() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            var password2 = document.getElementById('password2').value;
            var errorMessage = document.getElementById('error');

            if (!username) {
                message = `<p class="text-center p-2">Username must be filled</p>`;
                errorMessage.innerHTML = message;
                return false;
            } else
            if (password != password2) {
                message = `<p class="text-center p-2">Incorrect Password</p>`;
                errorMessage.innerHTML = message;
                return false;
            } else {
                errorMessage.innerHTML = "";
                return true;
            }
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

</body>

</html>