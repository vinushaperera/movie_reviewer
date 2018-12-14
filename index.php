<?php
    include 'db_handler.php';
?>
<!Doctype HTML>
<html>
<head>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
    <link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link href="css/styles.css" rel="stylesheet" />
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
                <div class="slider">
                    <!-- Full Page Image Background Carousel Header -->
                    <div id="myCarousel" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for Slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <!-- Set the first background image using inline CSS below. -->
                                <div class="fill" style="background-image:url('http://www.marchettidesign.net/demo/optimized-bootstrap/code.jpg');"></div>
                                <div class="carousel-caption">
                                    <h2 class="animated fadeInLeft">Check Your Favorite Movies</h2>
                                    <p class="animated fadeInUp">Browse all the movies to find what you like...</p>

                                </div>
                            </div>
                            <div class="item">
                                <!-- Set the second background image using inline CSS below. -->
                                <div class="fill" style="background-image:url('http://www.marchettidesign.net/demo/optimized-bootstrap/conference.jpg');"></div>
                                <div class="carousel-caption">
                                    <h2 class="animated fadeInDown">Write Your Review</h2>
                                    <p class="animated fadeInUp">Your review will have an impact...</p>

                                </div>
                            </div>
                            <div class="item">
                                <!-- Set the third background image using inline CSS below. -->
                                <div class="fill" style="background-image:url('http://www.marchettidesign.net/demo/optimized-bootstrap/campus.jpg');"></div>
                                <div class="carousel-caption">
                                    <h2 class="animated fadeInRight">Share it with Your Friends</h2>
                                    <p class="animated fadeInRight">Tell your loved ones about the amazing movie you
                                        have just watched...</p>
                                </div>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="icon-next"></span>
                        </a>

                    </div>
                </div>
            </div>
            <div class="movies-list">
                <br /><br />
                <div class="text-wrapper">
                    <h3>In Theatres</h3>
                </div>
                <br /><br /><br />
                <div class="row">
                    <?php                    
                        getAllReviews();
                        echo($allMovies);
                    ?>
                    <!-- <div class="col-md-4">
                        <div class="center-div">
                            <div class="elem">
                                <img src="images/ai.jpg" width="100%" alt="movie_poster" />
                            </div>
                            <br />
                            <form action="" method="POST">
                                <input type="hidden" name="id" value="" />
                                <input type="hidden" name="movie" value="" />
                                <input type="hidden" name="desc" value="" />
                                <input type="hidden" name="image" value="" />
                                <input type="hidden" name="no_reviews" value="" />
                                <input type="hidden" name="score" value="" />

                                <div class="button-wrapper">
                                    <input type="submit" name="submit" value="View" />
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="center-div">
                            <div class="elem">
                                <img src="images/Bohemian_Rhapsody_poster.png" width="100%" alt="movie_poster" />
                            </div>
                            <br />
                            <div class="button-wrapper">
                                <button class="btn btn-info review-button" name="review">Review</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="center-div">
                            <div class="elem">
                                <img src="images/harold.jpg" width="100%" alt="movie_poster" />
                            </div>
                            <br />
                            <div class="button-wrapper">
                                <button class="btn btn-info review-button" name="review">Review</button>
                            </div>
                        </div>
                    </div>
                </div>
                <br /><br />
                <div class="row">
                    <div class="col-md-4">
                        <div class="center-div">
                            <div class="elem">
                                <img src="images/infinity_war.jpg" width="100%" alt="movie_poster" />
                            </div>
                            <br />
                            <div class="button-wrapper">
                                <button class="btn btn-info review-button" name="review">Review</button>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="center-div">
                            <div class="elem">
                                <img src="images/fast.jpg" width="100%" alt="movie_poster" />
                            </div>
                            <br />
                            <div class="button-wrapper">
                                <button class="btn btn-info review-button" name="review">Review</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="center-div">
                            <div class="elem">
                                <img src="images/ai.jpg" width="100%" alt="movie_poster" />
                            </div>
                            <br />
                            <div class="button-wrapper">
                                <button class="btn btn-info review-button" name="review">Review</button>
                            </div>
                        </div>
                    </div>
                </div>
                <br /><br /> -->
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