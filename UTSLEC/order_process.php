<?php
session_start();
require_once('db.php');

$pesanIdMenu = $_POST['buttonpesan'];
$harga = $_POST['harga'];
$username = $_SESSION['username'];

$sql = "SELECT jumlahpesanan, harga FROM `order` WHERE idmenu = ? AND username = ? ";
$stmt = $db->prepare($sql);
$stmt->execute([$pesanIdMenu, $username]);

$row = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$row) {
    $queryInsert = "INSERT INTO `order` VALUES (?, ?, 1, ?)";
    $stmt = $db->prepare($queryInsert);
    $stmt->execute([$username, $pesanIdMenu, $harga]);
} else if ($row > 1) {
    $queryUpdate = 'UPDATE `order` SET jumlahpesanan = ' . ($row['jumlahpesanan'] + 1) . ', harga = ' . ($row['harga'] + $harga) . ' WHERE idmenu = ? AND username = ?';
    $stmt = $db->prepare($queryUpdate);
    $stmt->execute([$pesanIdMenu, $username]);
}
header("location: userPage.php#sectionkategori");
