<?php
include_once("connection.php");

// // Fetch the data

$sql = "SELECT * FROM `allArtist`";

$result = $conn->query($sql);
$data = $result->fetchAll(PDO::FETCH_ASSOC);

if ($data) {
    foreach ($data as $row) {
        echo "<table>";
        echo "<tr>";
        echo "<td>" . $row["id"] ."</td>";
        echo "<td>" . $row["firstName"] . "</td>";
        echo "<td>" . $row["lastName"] . "</td>";
        echo "<td>" . $row["albums"] . "</td>";
        echo "</tr>";
        echo "</table>";

        // echo $row["id"] ."<br>";
        // echo $row["name"]."<br>";
        // echo $row["lastName"]."<br>";
        // echo $row["albums"]."<br>";
    }
} else {
    echo "No results found";
}




?>