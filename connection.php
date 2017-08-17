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
    
    /* sql to create table
    $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    )";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table MyGuests created successfully";
    */
    
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";

    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
}
    

$conn->close();

?>
