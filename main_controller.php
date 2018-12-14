<?php

include 'db_handler.php';

function rateReview($id, $score, $no_reviews, $review_text){

    $url = 'http://127.0.0.1:5000/sentimentPred';
    $ch = curl_init($url);

    $data = array("Text" => array($review_text));                                                                    
    $data_string = json_encode($data);

    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    $current_score = $response;
    
    updateReview($id, $score, $no_reviews, $current_score);
}

?>