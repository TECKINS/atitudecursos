<?php
$servername = "mysql.hostinger.com.br";
$username = "u768531060_root";
$password = "1000atitudes";

try {
    $conn = new PDO("mysql:host=$servername;dbname=u768531060_users", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     echo "Connected successfully"; 
    
     //$sql = "CREATE DATABASE u768531060_myDB";
    // use exec() because no results are returned
    //$conn->exec($sql);
    //echo "Database created successfully<br>";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    
    
    // sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
