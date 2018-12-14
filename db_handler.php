<?php

include 'db_access.php';

$allMovies = "";
$movie_id = "";
$movie_name = "";
$movie_desc = "";
$movie_img = "";
$movie_review = "";
$reviews = "";

function updateReview($id, $score, $no_reviews, $current_score){
    $updatedScore = $score + $current_score;
    $no_reviews =+ $no_reviews;
    $sql = "UPDATE movies SET movie_review='$updatedScore', reviews='$no_reviews' WHERE id=$id";

    if (mysqli_query($GLOBALS['conn'], $sql)) {
        header('Location :' . 'index.php');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

function getMovie($id){
    $sql = "SELECT * FROM movies WHERE id=$id";
    $result = mysqli_query($GLOBALS['conn'], $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $GLOBALS['movie_id'] = $row["id"];
            $GLOBALS['movie_name'] = $row["movie_name"];
            $GLOBALS['movie_desc'] = $row["movie_desc"];
            $GLOBALS['movie_img'] = $row["movie_img"];
            $GLOBALS['movie_review'] = $row["movie_review"];
            $GLOBALS['reviews'] = $row["reviews"];
        }
    }
}

function getAllReviews(){
    $sql = "SELECT * FROM movies";
    $result = mysqli_query($GLOBALS['conn'], $sql);
    $resultStr = "";    

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {

            $movie_string = "
            <div class=\"col-md-4\">
                <div class=\"center-div\">
                    <div class=\"elem\">
                        <img src=\"" . $row["movie_img"] . "\" width=\"100%\" alt=\"movie_poster\" />
                    </div>
                    <br />
                    <form action=\"movie_desc.php\" method=\"POST\">
                        <input type=\"hidden\" name=\"id\" value=\"" . $row["id"] . "\" />
                        <input type=\"hidden\" name=\"movie\" value=\"" . $row["movie_name"] . "\" />
                        <input type=\"hidden\" name=\"desc\" value=\"" . $row["movie_desc"] . "\" />
                        <input type=\"hidden\" name=\"image\" value=\"" . $row["movie_img"] . "\" />
                        <input type=\"hidden\" name=\"no_reviews\" value=\"" . $row["movie_review"] . "\" />
                        <input type=\"hidden\" name=\"score\" value=\"" . $row["reviews"] . "\" />
                        <div class=\"button-wrapper\">
                            <input type=\"submit\" class=\"btn btn-info\" name=\"submit\" value=\"View\" />
                        </div>
                    </form>
                </div>
            </div>";

            $resultStr = $resultStr . $movie_string;
        }
    }

    $GLOBALS['allMovies'] = $resultStr;


}

?>