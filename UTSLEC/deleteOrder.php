<?php
session_start();

$dsn = "mysql:host=localhost; dbname=utslecpemweb;";
$kunci = new PDO($dsn, "root", "");

$idmenu = $_GET['idmenu'];

$deleteSql = "DELETE FROM order WHERE idmenu = :idmenu";
$stmt = $kunci->prepare($deleteSql);
$stmt->bindParam(':idmenu', $idmenu, PDO::PARAM_INT);
$stmt->execute();
header('Location: order.php');
exit();
