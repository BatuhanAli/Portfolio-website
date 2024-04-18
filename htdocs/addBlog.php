<?php
$title = $_POST['title'];
$content = $_POST['content'];
$date = $_POST['date'];
$time = $_POST['time'];

$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "portfolio";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

else {
    $sql = "INSERT INTO blogs (title, date, content, time) VALUES ('$title', '$date', '$content', '$time')";

    $result = $conn->query($sql);

    if ($result === TRUE) {
        header("Location: Blog.html");
    } 

    else {
        header("Location: addPost.html");
    }

    $conn->close();
}
?>