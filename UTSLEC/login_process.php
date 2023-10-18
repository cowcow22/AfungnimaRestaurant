<?php
session_start();
require_once('db.php');

//Data from Form
$username = $_POST['username'];
$password = $_POST['password'];

//check if user exist
$sql = "SELECT * FROM login WHERE username = ?";
$stmt = $db->prepare($sql);
$stmt->execute([$username]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$row) {
    echo "User not Found!";
} else if (password_verify($password, $row['password']) && $_POST['captcha'] == $_POST['confirmcaptcha']) {
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['role'] = $row['role'];
    $_SESSION['username'] = $row['username'];
    header('location:internal.php');
} else {
    echo "Wrong Password or Captcha<br>";
    echo "<p class='mt-5 text-center text-sm text-gray-500 mb-5'>
            <a href='login.php' class='font-semibold leading-6 text-indigo-600 hover:text-indigo-500'>Login</a>
        </p>";
}
