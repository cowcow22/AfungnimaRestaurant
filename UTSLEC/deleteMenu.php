<?php
session_start();

require_once('db.php');

$idmenu = $_GET['idmenu'];

$deleteOrderSql = "DELETE FROM `order` WHERE idmenu = :idmenu";
$stmtOrder = $db->prepare($deleteOrderSql);
$stmtOrder->bindParam(':idmenu', $idmenu, PDO::PARAM_INT);
$stmtOrder->execute();

$deleteMenuSql = "DELETE FROM daftarmenu WHERE idmenu = :idmenu";
$stmtMenu = $db->prepare($deleteMenuSql);
$stmtMenu->bindParam(':idmenu', $idmenu, PDO::PARAM_INT);
$stmtMenu->execute();

header('Location: adminPage.php');
exit();
