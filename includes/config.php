<?php
    ob_start(); //Turns on output buffering
    session_start();
    date_default_timezone_set("Asia/Kolkata");

    $servername  =  "sql107.infinityfree.com";
    $username = "if0_36531785";
    $password = "ZJTBeEtTMF";

    try {
      $conn = new PDO("mysql:host=$servername;dbname=if0_36531785_youtube_database", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //echo "Connected successfully";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
?>