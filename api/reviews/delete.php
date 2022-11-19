<?php

    require_once("../conection.php")

    $id = $_GET["id"];

    $sql = "DELETE FROM reviews where id='$id'";
    $conn->exec($sql);
    print("Terhapus")