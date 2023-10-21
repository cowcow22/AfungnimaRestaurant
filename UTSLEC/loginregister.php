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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="../UTSLEC/assets/css/styleloginregister.css">
    <title>Login Or Register</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="register_process.php" method="POST" onsubmit="return validasiPassword()">
                <div id="error" class="text-danger">
                    <?php
                    if (isset($_GET['error']))
                        echo '<h4 class="mt-5 text-center text-1xl font-bold leading-9 tracking-tight text-white" style="color:red;">Wrong Password or captcha</h4>';
                    ?>
                </div>
                <h1 class="text-black">Create Account</h1>
                <input type="text" name="namadepan" class="text-black" placeholder="Nama Depan" require>
                <input type="text" name="namabelakang" class="text-black" placeholder="Nama Belakang" require>
                <input type="username" name="username" class="text-black" id="username" placeholder="Username" require>
                <input type="date" name="tanggallahir" class="text-black" placeholder="Tanggal Lahir" require>
                <label for="jeniskelamin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Jenis Kelamin</label>
                <div style="display: flex; justify-content:space-between; align-items: center;" class="text-black">
                    <input id="jeniskelamin" name="jeniskelamin" type="radio" autocomplete="jeniskelamin" style="width: 20px; height: 20px; margin-right: 10px; margin-left: 10px;" value="Laki-Laki">Laki-Laki
                    <input id="jeniskelamin" name="jeniskelamin" type="radio" autocomplete="jeniskelamin" style="width: 20px; height: 20px; margin-right: 10px; margin-left: 10px;" value="Perempuan">Perempuan
                </div>
                <input type="password" require name="password" class="text-black" id="password" placeholder="Password">
                <input type="password" name="password2" id="password2" class="text-black" placeholder="Confirm Password" require>
                <input type="text" name="kodereff" id="kodereff" class="text-black" placeholder="Kode Refferal (Khusus Admin)" require>
                <button class="btn">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="login_process.php" method="POST">
                <h1 class="text-black">Sign In</h1>
                <div id="error" class="text-danger">
                    <?php
                    if (isset($_GET['error']))
                        echo '<h4 class="mt-5 text-center text-1xl font-bold leading-9 tracking-tight text-white" style="color:red;">Wrong Password or captcha</h4>';
                    ?>
                </div>
                <input type="username" name="username" class="text-black" placeholder="Username" require>
                <input type="password" name="password" class="text-black" placeholder="Password" require>
                <label for="captcha" class="text-black">Captcha</label>
                <input type="text" readonly name="captcha" id="captcha" value="<?php echo $randomcaptcha; ?>" style="text-decoration: line-through; text-align:left;" class="text-black" disabled>
                <input type="text" readonly name="captcha" id="captcha" value="<?php echo $randomcaptcha; ?>" style="text-decoration: line-through;" class="text-black" hidden>
                <label for="captcha" class="text-black" style="text-align:left;">Confirm Captcha</label>
                <input type="text" id="confirmcaptcha" name="confirmcaptcha" required class="text-black"> <br>
                <button class="btn">Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Come login and take a look!</p>
                    <button class="btn" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>New here? Register now my friend!</p>
                    <button class="btn" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        if (performance.navigation.type === 1) {
            window.location.href = window.location.pathname;
        }
    </script>
    <script src="../UTSLEC/assets/js/loginregister.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>