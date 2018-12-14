<?php

include 'main_controller.php';

//$movie_id = "";
//$review = "";

if(isset($_POST['submit'])){
    $id = $_POST['movie_id'];
    $name = $_POST['movie_name']; 
    $desc = $_POST['movie_desc']; 
    $img = $_POST['movie_img']; 
    $score = $_POST['review_score']; 
    $no_reviews = $_POST['no_reviews'];
    $reviewText = $_POST['review_box'];

    if($id != null || $id != ''){
        // $GLOBALS['movie_id'] = $id;
        // $GLOBALS['review'] = $movie_review;
        rateReview($id, $score, $no_reviews, $reviewText);
    } else {
        header('Location: ' . 'index.php');
    }
    
}

?>