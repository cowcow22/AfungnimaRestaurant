<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header('location:internal.php');
}

$randomcaptcha = substr(uniqid(), 5);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <div class="flex min-h-full flex-col justify-center px-6 py-7 lg:px-8 items-center h-screen dark:bg-gray-900">
        <div class="w-full max-w-md bg-gray-800 rounded-lg shadow-md">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm ">
                <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-white">Sign in to your account</h2>
            </div>
            <div id="error" class="text-danger"></div>
            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form class="space-y-6" action="login_process.php" method="POST">
                    <div class="mb-6">
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                        <input type="username" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="mb-6">
                        <label for="captcha" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Captcha</label>
                        <input type="text" readonly name="captcha" id="captcha" value="<?php echo $randomcaptcha; ?>" style="text-decoration: line-through;" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled><br><br>
                        <input type="text" readonly name="captcha" id="captcha" value="<?php echo $randomcaptcha; ?>" style="text-decoration: line-through;" hidden>
                        <input type="text" id="confirmcaptcha" name="confirmcaptcha" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"> <br>
                    </div>
                    <button type="submit" name="submit" class="flex w-full justify-center bg-gradient-to-r from-indigo-500 to-blue-500 text-white font-bold py-2 px-4 rounded-md mt-4 hover:bg-indigo-600 hover:to-blue-600 transition ease-in-out duration-150">Sign in</button>
                </form>
                <p class="mt-5 text-center text-sm text-gray-500 mb-5">
                    <a href="register.php" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Register Here</a>
                </p>
            </div>
        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

</body>

</html>