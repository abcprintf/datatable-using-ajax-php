<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "datatable";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
        $conn->exec("SET NAMES UTF8");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }
?>