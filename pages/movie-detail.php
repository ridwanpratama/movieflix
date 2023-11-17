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
            <a href="../index.php" class="logo">MovieFlix</a>
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
            <div class="slides fade">
                <div class="slide-content">
                    <div>
                        <h2>This is the movie title</h2>
                    </div>
                    <div class="slide-info">
                        <span class="uppercase">Documentary . 2h 49m</span>
                    </div>                    
                </div>
                <div class="slide-sinopsis">
                    <span><strong>Director:</strong> Bapak Budi</span>
                    <span><strong>Cast:</strong> Bapak Budi, Ibu Budi, Kakak Budi, Budi</span>
                    <p class="sinopsis"><strong>Sinopsis: </strong>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis odit quia blanditiis est nesciunt. A quo cupiditate natus mollitia labore, neque facere possimus ipsam nam laudantium dignissimos sint numquam voluptates? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nobis dolorem modi et, perferendis corrupti aperiam, distinctio quas praesentium iste officia atque magni, voluptatum nostrum ex. Quam illo molestiae unde?</p>
                </div>
                <img src="<?= BASE_URL . '/assets/img/img_snow_wide.jpg' ?>" alt="slide promo">
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