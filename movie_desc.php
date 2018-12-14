<?php

include 'db_handler.php';

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
    } else {
        header('Location: ' . 'index.php');
    }
    
}

?>
<!Doctype html>
<html>

<head>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
    <link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link href="css/styles.css" rel="stylesheet" />
    <title>Movie Reviewer</title>
</head>

<body>
    <div class="header">
        <div class="nav">
            <ul>
                <li class="home"><a class="active" href="#">Home</a></li>
                <li class="tutorials"><a href="#">Movies</a></li>
                <li class="about"><a href="#">Reviews</a></li>
                <li class="news"><a href="#">About</a></li>
                <li class="contact"><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <br /><br />
                <div class="text-wrapper">
                    <h3><?php echo $movie; ?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo $img; ?>" alt="movie_poster" width="100%"/>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <p><?php echo $movie_desc; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="review_submit.php" method="POST">
                                <input type="text" name="review_box" placeholder="Enter your review..." required/>
                                <input type="hidden" name="movie_id" value="<?php echo $movie_id; ?>"/>
                                <input type="hidden" name="movie_name" value="<?php echo $movie; ?>"/>
                                <input type="hidden" name="movie_desc" value="<?php echo $movie_desc; ?>"/>
                                <input type="hidden" name="movie_img" value="<?php echo $img; ?>"/>
                                <input type="hidden" name="no_reviews" value="<?php echo $no_reviews; ?>"/>
                                <input type="hidden" name="review_score" value="<?php echo $score; ?>"/>
                                <input type="submit" class="btn btn-info" name="submit" value="Submit"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="text-wrapper">
            <p class="footer-text">All Rights Reserved.</p>
        </div>
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
</body>

</html>