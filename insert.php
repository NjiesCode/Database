<?php
include_once("connection.php");

if (isset($_POST["submit"])) {
    //$id = $_POST["id"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $albums = $_POST["albums"];
    echo $firstName . $lastName . $albums;

    $sql = "INSERT INTO allArtist (firstName ,lastName,albums)
    VALUES('$firstName','$lastName','$albums')";

    $result = $conn->query($sql);
    if ($result) {
        echo "Data Successfully Inserted";
    } else {

        die($conn->errorInfo());
    }
}

?>