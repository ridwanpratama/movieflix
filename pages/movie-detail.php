<?php require '../lib/movie-detail.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../includes/head.php';?>
</head>

<body>
<header>
        <nav class="nav-wrapper">
            <ul class="nav-list">
                <li class="nav-item">Home</li>
                <li class="nav-item">Now Playing</li>
                <li class="nav-item">Popular</li>
                <li class="nav-item">Theaters</li>
            </ul>
        </nav>
        <div>
            <a href="" class="logo">MovieFlix</a>
        </div>
        <div class="search">
            <select name="" id="" class="select-teater">
                <option value="">Playing In - Jakarta</option>
            </select>
            <button>Change</button>
            <ul class="nav-list">
                <li class="nav-item my-account"><i class="fa fa-user"></i>&nbsp;My Account</li>
            </ul>
        </div>
    </header>

    <div class="row">
        <div class="col-12 slideshow-container">
            <!-- <div class="slides fade">
                <div class="slide-content">
                    <div>
                        <h2>This is the movie title</h2>
                    </div>
                    <div class="slide-info">
                        <span class="uppercase">Documentary | 2h 49m</span>
                    </div>
                    <div class="slide-button">
                        <button class="btn btn-book">Book Now</button>
                        <button class="btn btn-watch">Watch Trailer</button>
                    </div>
                </div>
                <img src="<?= BASE_URL . '/assets/img/img_mountains_wide.jpg' ?>" alt="slide promo">
            </div> -->
            <!-- <div class="slides fade">
                <div class="slide-content">
                    <div>
                        <h2>This is the movie title</h2>
                    </div>
                    <div class="slide-info">
                        <span class="uppercase">Documentary . 2h 49m</span>
                    </div>
                    <div class="slide-button">
                        <button class="btn btn-book">Book Now</button>
                        <button class="btn btn-watch">Watch Trailer</button>
                    </div>
                </div>
                <img src="<?= BASE_URL . '/assets/img/img_snow_wide.jpg' ?>" alt="slide promo">
            </div> -->
            <div class="slides fade">
                <div class="slide-content">
                    <div>
                        <h2>This is the movie title</h2>
                    </div>
                    <div class="slide-info">
                        <span class="uppercase">Documentary . 2h 49m</span>
                    </div>
                    <div class="slide-sinopsis">
                        
                    </div>
                </div>
                <img src="<?= BASE_URL . '/assets/img/img_nature_wide.jpg' ?>" alt="slide promo">
            </div>
        </div>
    </div>

    <!-- <section class="main-search">
        <div class="main-search-wrapper">
            <input type="text" class="main-search-input" placeholder="Search Movie, Cinema, City...">
            <button class="main-search-button">Search</button>
        </div>
    </section> -->

    <main class="container">
        
    </main>

    <?php include '../includes/footer.php'; ?>
    <script src="<?= BASE_URL . '/assets/js/script.js' ?>"></script>
</body>

</html>