<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "portfolio";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

else {
    $sql = "SELECT title, date, time, content FROM blogs";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $blogs = [];
    } 

    else {
        echo "Error!!";
    }

    $conn->close();
}
?>