<?php

require_once("../connection.php");
$query = $_SERVER["QUERY_STRING"];
$key = strtok($query, "=");

// echo("ini key " + $key);

switch ($key) {
    case "user_id":
        $id = $_GET["user_id"];
        $sql = $conn->query("SELECT * FROM user WHERE user_id=$id");
        $result = $sql->fetch((PDO::FETCH_ASSOC));
        if ($result === false) {
            echo ("ID tidak ditemukan");
        } else {
            print(json_encode($result));
        }
        break;
    case "search":
        $search = $_GET["search"];
        $sql = $conn->query("SELECT user_id,username,created_at FROM user WHERE username LIKE '%$search%' ");
        $result = $sql->fetch((PDO::FETCH_ASSOC));
        if ($result === false) {
            print("Username tidak ditemukan");
        } else {
            echo (json_encode($result));
        }
        break;
    default:
        $res = $conn->query("SELECT user_id,username,created_at FROM user");
        $result = $res->fetchAll(PDO::FETCH_ASSOC);
        print(json_encode($result));
}

// if (empty($_GET)) {
//     $res = $conn->query("SELECT id,username,created_at FROM user");
//     $result = $res->fetchAll(PDO::FETCH_ASSOC);
//     print(json_encode($result));
// }
// //Get detail
// else if {
//     $id = $_GET["id"];
//     $res = $conn->query("SELECT * FROM user WHERE id=$id");
//     $result = $res->fetch((PDO::FETCH_ASSOC));
//     if (count($result) < 1) {
//         echo ("ID tidak ditemukan");
//     } else {
//         print(json_encode($result));
//     }
// }
