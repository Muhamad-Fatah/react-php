<?php

require_once("../connection.php");

// Via params
$_POST = json_decode(file_get_contents("php://input"), true);
$username = $_POST["username"];
$password = $_POST["password"];

$sql = $conn->query("SELECT user_id,username,password FROM user WHERE username = '$username' AND password = '$password'");
$result = $sql->fetch((PDO::FETCH_ASSOC));
if ($result == true) {
    // print("Succes Login ");
    print(json_encode($result));
} else {
    $obj = http_response_code(400);
    print("Username / Password salah");
}
