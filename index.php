<?php

$servername = "demo-project-db-1.cdo4s82w0w0e.ap-south-1.rds.amazonaws.com";
$username   = "admin";
$password   = "U:5l6DveMggms#BQ8[)!6E20N>bQ";
$dbname     = "sample_db";

try {
    // Create DB connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Database connected successfully<br>";

    // Test query
    $stmt = $conn->prepare("SELECT * FROM users");
    $stmt->execute();

    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($rows) > 0) {
        echo "Data found:<br>";
        foreach ($rows as $row) {
            echo implode(" | ", $row) . "<br>";
        }
    } else {
        echo "No data found in users table";
    }

} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
}

?>
