<?php
$servername = "mysql.hostinger.com.br";
$username = "u768531060_root";
$password = "1000atitudes";

try {
    $conn = new PDO("mysql:host=$servername;dbname=u768531060_users", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; 
    // Create database
    $sql = "CREATE DATABASE u768531060_myDB";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }

    $conn->close();
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
