
<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=ican", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM student"); 
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }
?>