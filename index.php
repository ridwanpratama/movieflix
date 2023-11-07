<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieFlix</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a3b5e10b5f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/grid.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php include 'includes/header.php'; ?>

<section class="main-search">
    <div class="main-search-wrapper">
        <input type="text" class="main-search-input" placeholder="Search Movie, Cinema, City...">
        <button class="main-search-button">Search</button>
    </div>    
</section>

<main class="container">    
<h1 class="title-main">Choose  Your Movie</h1>
    <div class="row">
        <div class="col-lg-3 col-xl-3 col-md-4 col-sm-6 col-xs-6 movie airing">
            <div class="movie-card">
                <img src="assets/img/movie1.jpg" alt="Movie Title"> 
            </div>
        </div>
        <div class="col-lg-3 col-xl-3 col-md-4 col-sm-6 col-xs-6 movie airing">
            <div class="movie-card">
                <img src="assets/img/movie2.jpg" alt="Movie Title">
            </div>
        </div>
        <div class="col-lg-3 col-xl-3 col-md-4 col-sm-6 col-xs-6 movie airing">
            <div class="movie-card">
                <img src="assets/img/movie3.jpg" alt="Movie Title">
            </div>
        </div>
        <div class="col-lg-3 col-xl-3 col-md-4 col-sm-6 col-xs-6 movie airing">
            <div class="movie-card">
                <img src="assets/img/movie4.jpg" alt="Movie Title">
            </div>
        </div>
        <div class="col-lg-3 col-xl-3 col-md-4 col-sm-6 col-xs-6 movie airing">
            <div class="movie-card">
                <img src="assets/img/movie5.jpg" alt="Movie Title">
            </div>
        </div>
        <div class="col-lg-3 col-xl-3 col-md-4 col-sm-6 col-xs-6 movie airing">
            <div class="movie-card">
                <img src="assets/img/movie6.jpg" alt="Movie Title">
            </div>
        </div>
        <div class="col-lg-3 col-xl-3 col-md-4 col-sm-6 col-xs-6 movie airing">
            <div class="movie-card">
                <img src="assets/img/movie7.jpg" alt="Movie Title">
            </div>
        </div>
        <div class="col-lg-3 col-xl-3 col-md-4 col-sm-6 col-xs-6 movie airing">
            <div class="movie-card">
                <img src="assets/img/movie8.jpg" alt="Movie Title">
            </div>
        </div>
      
    </div>
</main>

<?php include 'includes/footer.php'; ?>
<script src="assets/js/script.js"></script>
</body>

</html>