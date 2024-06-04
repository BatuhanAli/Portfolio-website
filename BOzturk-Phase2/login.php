<?php

$email = $_POST['email'];
$passwordIn = $_POST['password'];
    
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "portfolio";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

else {
    // checks if there is any entries on the db with the same email as inputted and same password as inputted
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$passwordIn'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        session_start();
        // if true starts the server 
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
