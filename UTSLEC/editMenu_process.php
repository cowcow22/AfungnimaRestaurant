<?php
$dsn = "mysql:host=localhost; dbname=utslecpemweb;";
$kunci = new PDO($dsn, "root", "");

echo "<pre>";
print_r($_POST);
echo "</pre>";

$idmenu = $_POST["idmenu"];
$jenismenu = $_POST["jenismenu"];
$namamenu = $_POST["namamenu"];
$deskripsimenu = $_POST["deskripsimenu"];
$hargamenu = $_POST["hargamenu"];

if (!empty($_FILES['fotomenu']['name'])) {
    $foto_name = $_FILES['fotomenu']['name'];
    $foto_tmp = $_FILES['fotomenu']['tmp_name'];

    $foto_path = 'fotomenu/' . $foto_name;
    move_uploaded_file($foto_tmp, $foto_path);
    $sql = $kunci->prepare("UPDATE daftarmenu SET jenismenu = :jenismenu, namamenu = :namamenu, deskripsimenu = :deskripsimenu, hargamenu = :hargamenu, fotomenu = :fotomenu WHERE idmenu = :idmenu");
    $sql->bindParam(':jenismenu', $jenismenu);
    $sql->bindParam(':namamenu', $namamenu);
    $sql->bindParam(':deskripsimenu', $deskripsimenu);
    $sql->bindParam(':hargamenu', $hargamenu);
    $sql->bindParam(':fotomenu', $foto_name);
    $sql->bindParam(':idmenu', $idmenu);
} else {
    $sql = $kunci->prepare("UPDATE daftarmenu SET jenismenu = :jenismenu, namamenu = :namamenu, deskripsimenu = :deskripsimenu, hargamenu = :hargamenu WHERE idmenu = :idmenu");
    $sql->bindParam(':jenismenu', $jenismenu);
    $sql->bindParam(':namamenu', $namamenu);
    $sql->bindParam(':deskripsimenu', $deskripsimenu);
    $sql->bindParam(':hargamenu', $hargamenu);
    $sql->bindParam(':idmenu', $idmenu);
}

if ($sql->execute()) {
    header('Location: adminPage.php?editsuccess=1');
    exit;
} else {
    echo "Gagal update data";
}
