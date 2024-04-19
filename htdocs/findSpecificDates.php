<?php
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

        function bubbleSort(&$arr) {
            $n = count($arr);
            for ($i = 0; $i < $n - 1; $i++) {
                for ($j = 0; $j < $n - $i - 1; $j++) {
                    // Convert date-time strings to timestamps for comparison
                    $dateTime1 = strtotime($arr[$j]['date'] . ' ' . $arr[$j]['time']);
                    $dateTime2 = strtotime($arr[$j + 1]['date'] . ' ' . $arr[$j + 1]['time']);

                    // Swap if the date-time of current blog is less than the next one
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
        
        // Call the function to extract unique dates
        $uniqueDates = extractUniqueDates($blogsTwo);
        
        // Print out the unique dates in the desired format
        foreach ($uniqueDates as $date) {
            echo '<option value="' . $date . '" name="SpecificDate">' . $date . '</option>';
        }
    }

    else {
        header("Location: loginSite.php");
    }
}
?>