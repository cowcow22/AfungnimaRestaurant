<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
</head>

<body>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Create your account</h2>
        </div>
        <div id="error" class="text-danger"></div>
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="register_process.php" method="POST" onsubmit="return validasiPassword()">
                <div>
                    <label for="namadepan" class="block text-sm font-medium leading-6 text-gray-900">Nama Depan</label>
                    <div class="mt-2">
                        <input id="namadepan" name="namadepan" type="text" autocomplete="namadepan" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="namabelakang" class="block text-sm font-medium leading-6 text-gray-900">Nama Belakang</label>
                    <div class="mt-2">
                        <input id="namabelakang" name="namabelakang" type="text" autocomplete="namabelakang" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                    <div class="mt-2">
                        <input id="username" name="username" type="text" autocomplete="username" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="tanggallahir" class="block text-sm font-medium leading-6 text-gray-900">Tanggal Lahir</label>
                    <div class="mt-2">
                        <input id="tanggallahir" name="tanggallahir" type="date" autocomplete="tanggallahir" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="jeniskelamin" class="block text-sm font-medium leading-6 text-gray-900">Jenis Kelamin</label>
                    <div class="mt-2" style="display: flex; justify-content:space-between;">
                        <input id="jeniskelamin" name="jeniskelamin" type="radio" autocomplete="jeniskelamin" value="Laki-Laki">Laki-Laki
                        <input id="jeniskelamin" name="jeniskelamin" type="radio" autocomplete="jeniskelamin" value="Perempuan">Perempuan
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Confirm Password</label>
                    </div>
                    <div class="mt-2">
                        <input id="password2" name="password2" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="kodereff" class="block text-sm font-medium leading-6 text-gray-900">Kode Refferal (Khusus Admin)</label>
                    <div class="mt-2">
                        <input id="kodereff" name="kodereff" type="kodereff" autocomplete="kodereff" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
                </div>
            </form>
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
    <script src="https://cdn.tailwindcss.com"></script>

</body>

</html>