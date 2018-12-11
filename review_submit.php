<?php

include 'main_controller.php';

$movie_id = "";
$review = "";

if(isset($_POST['submit'])){
    $id = $_POST['movie_id'];
    $movie_review = $_POST['review_box'];

    if($id != null || $id != ''){
        $GLOBALS['movie_id'] = $id;
        $GLOBALS['review'] = $movie_review;
        rateReview();
    } else {
        header('Location: ' . 'index.php');
    }
    
}

?>