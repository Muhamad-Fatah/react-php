<?php

require_once("../connection.php");

$user_id = $_POST["user_id"];
$nama_barang = $_POST["nama_barang"];
$deskripsi = $_POST["deskripsi"];
$foto_barang = $_POST["foto_barang"];
$stok = $_POST["stok"];

$sql = "INSERT INTO `barang`(user_id,nama_barang,deskripsi,foto_barang,stok) VALUES ('$user_id','$nama_barang','$deskripsi','$foto_barang','$stok')";

try {
    $conn->exec($sql);
    echo ("Barang berhasil di input");
} catch (PDOException $e) {
    print($e->getMessage());
}
