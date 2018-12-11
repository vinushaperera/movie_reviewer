<!Doctype html>
<html>
<head>
    <title>Movie Reviewer</title>
</head>
<body>
    <form action="review_submit.php" method="post">
        <input type="text" name="review_box" placeholder="Enter your review here..." required/>
        <input type="hidden" name="movie_id" value="id_1"/>
        <input type="submit" name="submit" value="Submit"/>
    </form>
</body>
</html>