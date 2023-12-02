<?php require '../lib/movie-detail.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../includes/head.php'; ?>
</head>

<body>
    <header>
        <nav class="nav-wrapper">
            <ul class="nav-list">
                <li class="nav-item">Home</li>
                <li class="nav-item">Now Playing</li>
                <li class="nav-item">Upcoming</li>
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
                        <span class="uppercase"><strong>Documentary</strong> | 2h 49m</span>
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


    <section class="main-search">
        <div class="main-search-wrapper">
            <i class="fa fa-map-marker" style="color: black;"></i>
            <select name="" id="" class="select-address">
                <option value="">Playing In - Jakarta</option>
            </select>
            <button class="main-search-button">Search</button>
        </div>
    </section>

    <main class="container">
        <div class="card">
            <div class="card-body">
                <div class="schedule-wrapper">
                    <button class="accordion">Lippo Plaza Ekalokasari</button>
                    <div class="panel">
                        <div class="type">
                            <h2>REGULAR 3D RP 35,00</h2>
                        </div>
                        <div class="schedule">
                            <button class="hour">11:45</button>
                            <button class="hour">13:00</button>
                        </div>
                    </div>
                </div>

                <div class="schedule-wrapper">
                    <button class="accordion">Lippo Plaza Ekalokasari</button>
                    <div class="panel">
                        <div class="type">
                            <h2>REGULAR 3D RP 35,00</h2>
                        </div>
                        <div class="schedule">
                            <button class="hour">11:45</button>
                            <button class="hour">13:00</button>
                        </div>
                    </div>
                </div>

                <div class="schedule-wrapper">
                    <button class="accordion">Lippo Plaza Ekalokasari</button>
                    <div class="panel">
                        <div class="type">
                            <h2>REGULAR 3D RP 35,00</h2>
                        </div>
                        <div class="schedule">
                            <button class="hour">11:45</button>
                            <button class="hour">13:00</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include '../includes/footer.php'; ?>
    <script src="<?= BASE_URL . '/assets/js/script.js' ?>"></script>
    <script src="<?= BASE_URL . '/assets/js/movie-detail.js' ?>"></script>
</body>

</html>