<?php

include 'main_controller.php';

$movie_id = "";
$movie = "";
$movie_desc = "";
$img = "";
$no_reviews = "";
$score = "";

if(isset($_POST['submit'])){

    $movie_id = $_POST['id'];
    $movie = $_POST['movie'];
    $movie_desc = $_POST['desc'];
    $img = $_POST['image'];
    $no_reviews = $_POST['no_reviews'];
    $score = $_POST['score'];

    if($movie_id != null || $movie_id != ''){
        $GLOBALS['movie_id'] = $movie_id;
        $GLOBALS['movie'] = $movie;
        $GLOBALS['movie_desc'] = $movie_desc;
        $GLOBALS['img'] = $img;
        $GLOBALS['no_reviews'] = $no_reviews;
        $GLOBALS['score'] = $score;
        header('Location: ' . 'movie_desc.php');
    } else {
        header('Location: ' . 'index.php');
    }
    
}

?>