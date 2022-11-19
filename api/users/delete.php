<?php

require_once("../connection.php");
// parse_str(file_get_contents("php://input"),$value);

$id = $_GET["user_id"];
// $sql = $conn->query("SELECT * FROM user WHERE user_id=$id");
// $result = $sql->fetch((PDO::FETCH_ASSOC));

// if ($result === false) {

// }

$sql = "DELETE FROM user where user_id='$id'";

$conn->exec($sql);
print("DELETED");
