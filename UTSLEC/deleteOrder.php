<?php
session_start();
require_once('db.php');

$idmenu = $_GET['idmenu'];
$username = $_SESSION['username'];

$sqlHargaPerMenu = "SELECT hargamenu FROM daftarmenu WHERE idmenu = ?";
$stmt = $db->prepare($sqlHargaPerMenu);
$stmt->execute([$idmenu]);
$hasil = $stmt->fetch(PDO::FETCH_ASSOC);

$hargaSatuan = $hasil['hargamenu'];

$sql = "SELECT jumlahpesanan, harga FROM `order` WHERE idmenu = ? AND username = ? ";
$stmt = $db->prepare($sql);
$stmt->execute([$idmenu, $username]);

$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($row['jumlahpesanan'] == 1) {
    $queryDelete = "DELETE FROM `order` WHERE idmenu = ? AND username = ?";
    $stmt = $db->prepare($queryDelete);
    $stmt->execute([$idmenu, $username]);
} else if ($row > 1) {
    $queryUpdate = 'UPDATE `order` SET jumlahpesanan = ' . ($row['jumlahpesanan'] - 1) . ',harga = ' . ($row['harga'] - $hargaSatuan) . ' WHERE idmenu = ? AND username = ?';
    $stmt = $db->prepare($queryUpdate);
    $stmt->execute([$idmenu, $username]);
}
header("location: order.php");
