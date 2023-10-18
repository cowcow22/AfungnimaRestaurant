<?php
require_once('db.php');

//Data from Form
$namaDepan = $_POST['namadepan'];
$namaBelakang = $_POST['namabelakang'];
$username = $_POST['username'];
$tanggalLahir = $_POST['tanggallahir'];
$jenisKelamin = $_POST['jeniskelamin'];
$password = $_POST['password'];
$kodereff = $_POST['kodereff'];

//encrypt the password
$en_pass = password_hash($password, PASSWORD_BCRYPT);

//2 SQL Query
if (!$kodereff) {
    $role = "user";
    $sql = "INSERT INTO login (namadepan, namabelakang, username, tanggallahir, jeniskelamin, password, role) VALUES (?, ?, ?, ?, ?, ?, ?)";
} else if ($kodereff == 'admin123') {
    $role = "admin";
    $sql = "INSERT INTO login (namadepan, namabelakang, username, tanggallahir, jeniskelamin, password, role) VALUES (?, ?, ?, ?, ?, ?, ?)";
}
// 3 Execute query
$result = $db->prepare($sql);
$result->execute([$namaDepan, $namaBelakang, $username, $tanggalLahir, $jenisKelamin, $en_pass, $role]);
header('location: index.php');
