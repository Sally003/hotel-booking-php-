<?php

try
    {
    // host
    define("HOST", "localhost");

    //dbname
    define("DBNAME", "hotel-booking");

    //user
    define("USER", "root");

    //password
    define("PASS", "");


    $conn = new PDO("mysql:hosts=".HOST.";dbname=".DBNAME."", USER, PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // if($conn == true) {
    //     echo "db connection is success";
    // } else {
    //     echo "error";
    // }

    } catch (PDOException $e)

    {
       echo $e->getMessage();
    }