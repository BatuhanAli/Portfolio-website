<?php
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

else {
    $sql = "SELECT title, date, time, content FROM blogs";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $blogs = [];

        while ($row = $result->fetch_assoc()) {
            $blogs[] = $row;
        }

        bubbleSort($blogs);

        $SpecificBlogs = array_filter($blogs, function($blog) use ($SpecificDate) {
            return date('F Y', strtotime($blog['date'])) === $SpecificDate;
        }); // filters the blogs to show only the ones with the same month year timestamp as the one selected

        // output the sorted blogs 
        foreach ($SpecificBlogs as $blog) {
            echo '<div id="blogOutline">';
            echo '  <header class="blogHeader">';
            echo $blog['title'] . "<br>";
            echo "  </header>";
            echo '<div id="blogDate">';
            echo date('jS F Y, H:i', strtotime($blog['date'] . ' ' . substr($blog['time'], 0, -3))) . " BST<br>";
            echo "</div>";
            echo '<div id="blogContent">';
            echo $blog['content'] . "<br><br>";
            echo "</div>";
            echo "<hr>";
            echo "</div>";
        }
    }
    $conn->close();
}
?>