<?php

require_once("../connection.php");
// $query = $_SERVER["QUERY_STRING"];
// $key = strtok($query, "=");

$id = $_GET["user_id"];
$sql = $conn->query("SELECT * FROM review WHERE user_id=$id");
$result = $sql->fetchAll((PDO::FETCH_ASSOC));
if (count($result) > 0) {
    print(json_encode($result));
} else {
    echo("Tidak ada reviews");
}