<?php

include 'db_access.php';

$allMovies = "";

function updateReview(){
    
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
                    <form action=\"view_movie.php\" method=\"POST\">
                        <input type=\"hidden\" name=\"id\" value=\"" . $row["id"] . "\" />
                        <input type=\"hidden\" name=\"movie\" value=\"" . $row["movie_name"] . "\" />
                        <input type=\"hidden\" name=\"desc\" value=\"" . $row["movie_desc"] . "\" />
                        <input type=\"hidden\" name=\"image\" value=\"" . $row["movie_review"] . "\" />
                        <input type=\"hidden\" name=\"no_reviews\" value=\"" . $row["movie_img"] . "\" />
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