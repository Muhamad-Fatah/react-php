<?php

require_once("../connection.php");
parse_str(file_get_contents("php://input"), $value);
$id = $_GET["user_id"];

$username = $value["username"];

$sql = "UPDATE user SET username='$username' WHERE user_id='$id' ";
$conn->exec($sql);

print("User updated");

// if() {

// };
