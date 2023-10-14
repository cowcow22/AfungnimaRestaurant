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
    //header('location:login.php');
} else {
    //Check if password correct
    echo "USERNAME Ada di Database<br/>";
    echo "PASSWORD yang Diinput di form login: " . $password;
    echo "<br/>Password yang tersimpan di database: " . $row['password'];
    if (password_verify($password, $row['password']) && $_POST['captcha'] == $_POST['confirmcaptcha']) {
        //Login success, set SESSION DATA
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['role'] = $row['role'];
        $_SESSION['username'] = $row['username'];
        header('location:internal.php');
    } else {
        echo "Wrong Password";
    }
}
