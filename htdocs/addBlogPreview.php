<?php
session_start();

if ($_POST['button'] == "Edit"){
    header("Location: addBlogSite.php");
    exit();
}

$title = $_SESSION['title'];
$content = $_SESSION['content'];
$date = $_SESSION['dateIn'];
$time = $_SESSION['timeIn'];

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
        $_SESSION['title'] = "";
        $_SESSION['content'] = "";
        $_SESSION['dateIn'] = "";
        $_SESSION['timeIn'] = "";
        header("Location: Blog.php");
    } 

    else {
        header("Location: addBlogSite.php");
    }

    $conn->close();
}
?>