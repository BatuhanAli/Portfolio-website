<?php
session_start();

$title = $_POST['title'];
$content = $_POST['content'];
$date = $_POST['date'];
$time = $_POST['time'];

// to go to the preview feature
if ($_POST['button'] == "Preview"){
    $_SESSION['title'] = $title;
    $_SESSION['content'] = $content;
    $_SESSION['dateIn'] = $date;
    $_SESSION['timeIn'] = $time;
    header("Location: blogPreview.php");
    exit();
}

// server details
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "portfolio";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

else {
    // adds blog to the db
    $sql = "INSERT INTO blogs (title, date, content, time) VALUES ('$title', '$date', '$content', '$time')";

    $result = $conn->query($sql);

    if ($result === TRUE) {
        header("Location: Blog.php");
    } 

    else {
        header("Location: addBlogSite.php");
    }

    $conn->close();
}
?>