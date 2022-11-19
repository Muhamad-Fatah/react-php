<?php

require_once("../connection.php");

$from_id = $_GET["from_id"];
$to_id = $_GET["to_id"];


$message = $_POST["message"];

$sql = "INSERT INTO chat(from_id , to_id , message) VALUES ('$from_id','$to_id','$message')";
$conn->exec($sql);
print("Success input");