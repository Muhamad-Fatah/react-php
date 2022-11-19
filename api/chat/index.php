<?php

require_once("../connection.php");
$from_id = $_GET["from_id"];
$to_id = $_GET["to_id"];

$sql = $conn->query("SELECT * FROM chat WHERE from_id=$from_id AND to_id=$to_id OR from_id=$to_id AND to_id=$from_id");
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
print(json_encode($result));
