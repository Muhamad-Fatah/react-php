<?php
// $host = "localhost";
// $db = "api";
// $user = "root";
$host = 'mysql:host=localhost;dbname=api';
$user = "root";
$conn = new PDO($host , $user);


header("Access-Control-Allow-Origin: http://192.168.1.2/api/barang");
header('Access-Control-Allow-Headers: Content-Type');
header("Content-type: application/json");

// {
//     "barang_id" : 1,
//     "nama_barang" : "komputer",
//     "foto_produk" : "url",
//     "reviewer (apapun)" : [
//         {
//             "username" : "fatah",
//             "comment" : "wah bagus banget",
//             "rate" : 5,
//             "review_at" : "12-05-2022"
//         },
//         {
//             "username" : "rohim",
//             "comment" : "wah menarik banget",
//             "rate" : 3,
//             "review_at" : "1-05-2022"
//         }
//     ]
// }


