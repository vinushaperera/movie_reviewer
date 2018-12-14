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
                    <h3>Movie Name</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="" alt="movie_poster" width="100%"/>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <p>movie description</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="review_submit.php" method="POST">
                                <input type="text" name="review_box" placeholder="Enter your review here..." required/>
                                <input type="submit" name="submit" value="Submit"/>
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