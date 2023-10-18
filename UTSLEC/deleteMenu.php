<?php
session_start();

require_once('db.php');

$idmenu = $_GET['idmenu'];

$deleteSql = "DELETE FROM daftarmenu WHERE idmenu = :idmenu";
$stmt = $db->prepare($deleteSql);
$stmt->bindParam(':idmenu', $idmenu, PDO::PARAM_INT);
$stmt->execute();
header('Location: adminPage.php');
exit();
