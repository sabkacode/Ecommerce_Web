<?php
    $server = "sql100.infinityfree.com";
    $username = "if0_35067570";
    $pass = "uCyuIOCdaZWCAt";
    $db = "if0_35067570_handicraft";

    $conn = mysqli_connect($server, $username, $pass, $db);

    if(!$conn){
        echo mysqli_error();
    }
    // else{
    //     echo 'success';
    // }
?>