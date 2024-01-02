<?php require_once 'lib/home.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/head.php'; ?>
</head>

<body>
    <div class="h-overlay">

    </div>
    <header>
        <nav class="nav-wrapper">
            <ul class="nav-list">
                <li class="nav-item"><a href="#">Home</a></li>
            </ul>
        </nav>
        <div>
            <a href="index.php" class="logo">MovieFlix</a>
        </div>
        <div class="search">
            <ul class="nav-list">
                <li class="nav-item my-account"><i class="fa fa-user"></i>&nbsp;Account</li>
            </ul>
        </div>
    </header>

    <div class="row">
        <div class="col-12 slideshow-container">
            <div class="slides fade">
                <div class="slide-content">
                    <div>
                        <h2>The Marvels</h2>
                    </div>
                    <div class="slide-info">
                        <span class="uppercase">Action, Adventure, Fantasy, Superhero | 1h 45m</span>
                    </div>
                    <div class="slide-button">
                        <button class="btn btn-book">Book Now</button>
                        <button class="btn btn-watch">Watch Trailer</button>
                    </div>
                </div>
                <img src="assets/img/the-marvels.jpeg" alt="slide promo">
            </div>
            <div class="slides fade">
                <div class="slide-content">
                    <div>
                        <h2>Napoleon</h2>
                    </div>
                    <div class="slide-info">
                        <span class="uppercase">Action, Biography, Drama, History . 2h 38m</span>
                    </div>
                    <div class="slide-button">
                        <button class="btn btn-book">Book Now</button>
                        <button class="btn btn-watch">Watch Trailer</button>
                    </div>
                </div>
                <img src="assets/img/napoleon.jpg" alt="slide promo">
            </div>
            <div class="slides fade">
                <div class="slide-content">
                    <div>
                        <h2>Trolls</h2>
                    </div>
                    <div class="slide-info">
                        <span class="uppercase">Comedy, Fantasy . 1h 32m</span>
                    </div>
                    <div class="slide-button">
                        <button class="btn btn-book">Book Now</button>
                        <button class="btn btn-watch">Watch Trailer</button>
                    </div>
                </div>
                <img src="assets/img/trolls.jpg" alt="slide promo">
            </div>
        </div>
    </div>

    <section class="main-search">
        <div class="main-search-wrapper">
            <input type="text" class="main-search-input" placeholder="Search Movie, Cinema, City...">
            <button class="main-search-button" type="button">Search</button>
        </div>
    </section>

    <main class="container">
        <h1 class="title-main">Choose Your Movie</h1>
        <div class="row">
            <div class="col-lg-3 col-xl-3 col-md-4 col-sm-6 col-xs-6 movie airing">
                <div class="movie-card">
                    <a href="pages/movie-detail.php">
                        <img src="assets/img/movie1.jpg" alt="Retribution">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-xl-3 col-md-4 col-sm-6 col-xs-6 movie airing">
                <div class="movie-card">
                    <a href="pages/movie-detail.php">
                        <img src="assets/img/movie2.jpg" alt="The Marvels">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-xl-3 col-md-4 col-sm-6 col-xs-6 movie airing">
                <div class="movie-card">
                    <a href="pages/movie-detail.php">
                        <img src="assets/img/movie3.jpg" alt="Freelance">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-xl-3 col-md-4 col-sm-6 col-xs-6 movie airing">
                <div class="movie-card">
                    <a href="pages/movie-detail.php">
                        <img src="assets/img/movie4.jpg" alt="Fear The Night">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-xl-3 col-md-4 col-sm-6 col-xs-6 movie airing">
                <div class="movie-card">
                    <a href="pages/movie-detail.php">
                        <img src="assets/img/movie5.jpg" alt="Napoleon">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-xl-3 col-md-4 col-sm-6 col-xs-6 movie airing">
                <div class="movie-card">
                    <a href="pages/movie-detail.php">
                        <img src="assets/img/movie6.jpg" alt="The Hunger Games the Balads of Songbirds Snakes">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-xl-3 col-md-4 col-sm-6 col-xs-6 movie airing">
                <div class="movie-card">
                    <a href="pages/movie-detail.php">
                        <img src="assets/img/movie7.jpg" alt="Trolls">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-xl-3 col-md-4 col-sm-6 col-xs-6 movie airing">
                <div class="movie-card">
                    <a href="pages/movie-detail.php">
                        <img src="assets/img/movie8.jpg" alt="Wish">
                    </a>
                </div>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
    <script src="<?= BASE_URL . '/assets/js/script.js' ?>"></script>
    <script>
        document.querySelectorAll('.movie-card a').forEach(function(anchor) {
            anchor.addEventListener('click', function(event) {
                event.preventDefault();

                const movieTitle = this.querySelector('img').alt;
                console.log(movieTitle);

                fetch('lib/movie-detail.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: 'movieTitle=' + encodeURIComponent(movieTitle)
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            console.log('Movie title saved to session.');
                            window.location.href = this.href;
                        } else {
                            console.error('Failed to save movie title:', data.error);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            });
        });
    </script>
</body>

</html>