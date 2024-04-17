<?php
$title = $_POST['title'];
$content = $_POST['content'];
$date = $_POST['date'];
    
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "portfolio";

$conn = new mysqli($servername, $username, $password, $dbname, 8889);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($conn->query($sql) === TRUE) {
    $sql = "INSERT INTO blogs (title, date, content) VALUES ('$title', '$date', '$content')";

    $result = $conn->query($sql);

    if ($result === TRUE) {
        header("Location: Blog.html");
    } 

    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        header("Location: addPost.html");
    }

    $conn->close();
}
?>