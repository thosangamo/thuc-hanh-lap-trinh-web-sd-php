<?php
    ob_start(); //Turns on output buffering
    session_start();
    date_default_timezone_set("Asia/Kolkata");

    $servername  =  "sql6.freesqldatabase.com:3306";
    $username = "sql6705934";
    $password = "y2dkad1zAz";

    try {
      $conn = new PDO("mysql:host=$servername;dbname=sql6705934", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //echo "Connected successfully";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
?>