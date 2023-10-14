<?php
session_start();

if (
    !isset($_SESSION['username']) &&
    !isset($_SESSION['user_id'])
) {
    echo "You Dont Have Access to This Page!";
} else {
    if ($_SESSION['role'] == 'admin') {
        header('location: adminPage.php');
    } else if ($_SESSION['role'] == 'user') {
        header('location: userPage.php');
    }
}
?>

<?php
if (!isset($_SESSION['user_id'])) {
?>
    <a href="login.php">Login</a>
<?php
} else {
?>
    <a href="logout.php">Logout</a>
<?php
}
?>