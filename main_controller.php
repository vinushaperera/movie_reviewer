<?php

include 'db_handler.php';

function rateReview(){
    header('Location: ' . $GLOBALS['movie_id'] . '|' . $GLOBALS['review'] . '.php');
}

?>