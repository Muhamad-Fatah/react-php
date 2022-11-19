<?php

require_once("../connection.php");

// Ini ambil param (user_id)
// $json = json_decode(file_get_contents("php://input"),true);
// $user_id = $json["user_id"];

// Ini ambil body nya
$barang_id = $_POST["barang_id"];
$user_id = $_POST["user_id"];
$rate = $_POST["rate"];
$comment = $_POST["comment"];

$sql = "INSERT INTO review(barang_id,user_id,comment,rate) VALUES ('$barang_id','$user_id','$comment','$rate')";
$conn->exec($sql);
print("Success review");
