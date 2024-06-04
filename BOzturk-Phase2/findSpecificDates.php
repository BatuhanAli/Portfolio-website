<?php
// server details
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "portfolio";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $sqlTwo = "SELECT title, date, time, content FROM blogs";
    $resultTwo = $conn->query($sqlTwo);

    if ($resultTwo->num_rows > 0) {
        $blogsTwo = [];

        while ($row = $resultTwo->fetch_assoc()) {
            $blogsTwo[] = $row;
        }
        // bubble sort function to sort blogs by the date and time
        function bubbleSort(&$arr) {
            $n = count($arr);
            for ($i = 0; $i < $n - 1; $i++) {
                for ($j = 0; $j < $n - $i - 1; $j++) {
                    $dateTime1 = strtotime($arr[$j]['date'] . ' ' . $arr[$j]['time']);
                    $dateTime2 = strtotime($arr[$j + 1]['date'] . ' ' . $arr[$j + 1]['time']);

                    if ($dateTime1 < $dateTime2) {
                        $temp = $arr[$j];
                        $arr[$j] = $arr[$j + 1];
                        $arr[$j + 1] = $temp;
                    }
                }
            }
        }

        bubbleSort($blogsTwo);

        function extractUniqueDates($blogsTwo) {
            $uniqueDates = [];
            foreach ($blogsTwo as $blog) {
                $date = date("F Y", strtotime($blog['date']));
                if (!in_array($date, $uniqueDates)) {
                    $uniqueDates[] = $date;
                }
            }
            return $uniqueDates;
        }
        
        $uniqueDates = extractUniqueDates($blogsTwo);
        
        foreach ($uniqueDates as $date) {
            echo '<option value="' . $date . '" name="SpecificDate">' . $date . '</option>';
        }
    }

    else {
        header("Location: loginSite.php");
    }
}
?>