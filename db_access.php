<?php

    $username = "root";
    $password = "";
    $server = "localhost";
    $db = "movie_reviewer";

    $conn = mysqli_connect($server, $username, $password, $db);

    if (!$conn) {
        die("Connection failed : " . mysqli_connect_error());
    }

?>