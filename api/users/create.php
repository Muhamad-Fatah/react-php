<?php

    require_once("../connection.php");

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "INSERT INTO `user`(username,email,password) VALUES ('$username','$email','$password')";
    $conn->exec($sql);
    print("Success input data");