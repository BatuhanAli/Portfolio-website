<?php

$email = $_POST['email'];
$passwordInput = $_POST['password'];
    
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "portfolio";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

else {
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$passwordInput'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['active'] = TRUE;
        header("Location: AddBlogSite.php");
        exit;
    } 

    else {
        header("Location: LoginSite.php?error=incorrectCredentials");
        exit;
    }

    $conn->close();
}
?>
