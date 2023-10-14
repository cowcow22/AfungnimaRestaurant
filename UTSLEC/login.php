<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header('location:internal.php');
}

$randomcaptcha = substr(uniqid(), 5);
// if (isset($_POST["submit"])) {
//     $username = $_POST["username"];
//     $password = $_POST["password"];
//     $captcha = $_POST["captcha"];
//     $confirmcaptcha = $_POST["confirmcaptcha"];
//     echo "<pre>";
//     print_r($_POST);
//     echo "</pre>";

//     if ($captcha != $confirmcaptcha) {
//         echo "<script> alert('Incorrect Captcha'); </script>";
//     } else {
//         $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM login WHERE username = '$username'"));
//         if (isset($row) && $password == $row["password"]) {
//             $_SESSION["user_id"] = $row["user_id"];
//             // header("Location: internal.php");
//         } else {
//             echo
//             "<script> alert('Wrong Password or Username'); </script>";
//         }
//     }
// }

// class Kategorimakanan
// {
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
        </div>
        <div id="error" class="text-danger"></div>
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="login_process.php" method="POST">
                <div>
                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                    <div class="mt-2">
                        <input id="username" name="username" type="username" autocomplete="username" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
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
                        <label for="captcha" class="block text-sm font-medium leading-6 text-gray-900">Captcha</label>
                    </div>
                    <div class="mt-2">
                        <input type="text" readonly id="captcha" class="captcha" name="captcha" value="<?php echo $randomcaptcha; ?>" style="text-decoration: line-through;" disabled><br><br>
                        <input type="text" readonly id="captcha" class="captcha" name="captcha" value="<?php echo $randomcaptcha; ?>" style="text-decoration: line-through;" hidden>
                        <input type="text" id="confirmcaptcha" name="confirmcaptcha" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"> <br>
                    </div>
                </div>
                <div>
                    <button type="submit" name="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-500">
                <a href="register.php" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Register Here</a>
            </p>
        </div>
    </div>
    <!-- <script>
        function validasiCaptcha() {
            var captcha = document.getElementById('captcha').value;
            var confirmcaptcha = document.getElementById('confirmcaptcha').value;
            var errorMessage = document.getElementById('error');

            if (confirm === confirmcaptcha) {
                errorMessage.innerHTML = "";
                return true;
            } else {
                message = `<p class="text-center p-2" style="color: red;">Incorrect Captcha</p>`;
                errorMessage.innerHTML = message;
                return false;
            }
        }
    </script> -->
    <script src="https://cdn.tailwindcss.com"></script>

</body>

</html>