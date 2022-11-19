<?php

require_once("../connection.php");
$query = $_SERVER["QUERY_STRING"];
$key = strtok($query, "=");

// $sql = $conn->query("SELECT barang.barang_id, nama_barang,foto_barang,
// JSON_ARRAYAGG(
//     JSON_OBJECT(
//      'username',username,
//      'comment',comment,
//      'rate' ,rate,
//      'review_at',review_at
//  )
// ) AS reviewer
// FROM
// ((review INNER JOIN barang ON barang.barang_id = 5 AND review.barang_id = 5)
// INNER JOIN user ON user.user_id = review.user_id)");
// $result  = $sql->fetch((PDO::FETCH_ASSOC));
// print(json_encode($result));

switch ($key) {
    case "barang_id":
        $id =  $_GET["barang_id"];
        // echo($id);
        $sql = $conn->query("SELECT barang.barang_id, nama_barang,foto_barang,
            JSON_ARRAYAGG(
             JSON_OBJECT(
              'username',username,
              'comment',comment,
              'rate' ,rate,
              'review_at',review_at
            )
         ) AS reviewer
         FROM
        ((review INNER JOIN barang ON barang.barang_id =$id AND review.barang_id =$id)
        INNER JOIN user ON user.user_id = review.user_id)");
        $result = $sql->fetch((PDO::FETCH_ASSOC));
        if (count($result) < 1) {
            echo ("ID tidak ditemukan");
        } else {
            print(json_encode($result));
        }
        break;
    case "search":
        $search = $_GET["search"];
        $sql = $conn->query("SELECT barang_id,nama_barang,foto_produk,stock FROM barang WHERE nama_barang LIKE '%$search%' ");
        $result = $sql->fetchAll((PDO::FETCH_ASSOC));
        if ($result === false) {
            echo ("Barang tidak ditemukan");
        } else {
            print(json_encode($result));
        }
        break;
    default:
        $sql = $conn->query("SELECT barang_id,nama_barang,foto_barang,stok FROM barang");
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        print(json_encode($result));
}
