<?php require '../lib/movie-detail.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../includes/head.php'; ?>
</head>

<?php
if (isset($_SESSION['movieData'])) {
    $movieData = $_SESSION['movieData'];
    $movieTitle = $movieData['title'];
    $genres = $movieData['genre'];
    $synosis = $movieData['synopsis'];
    $director = $movieData['director'];
    $cast = $movieData['cast'];
    $img = $movieData['img_path'];
}
?>

<body>
    <header>
        <nav class="nav-wrapper">
            <ul class="nav-list">
                <li class="nav-item"><a href="../index.php">Home</a></li>
            </ul>
        </nav>
        <div>
            <a href="../index.php" class="logo">MovieFlix</a>
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
                        <h2><?= $movieTitle ?></h2>
                    </div>
                    <div class="slide-info">
                        <span class="uppercase"><strong><?php foreach ($genres as $key => $value) : ?><?= $value ?>, <?php endforeach ?></strong> | 2h 49m</span>
                    </div>
                </div>
                <div class="slide-sinopsis">
                    <span><strong>Director:</strong> <?= $director ?></span>
                    <span><strong>Cast:</strong> <?php foreach ($cast as $key => $value) : ?><?= $value ?>, <?php endforeach ?></span>
                    <p class="sinopsis"><strong>Sinopsis: </strong><?= $synosis ?></p>
                </div>
                <img src="<?= BASE_URL . '/' . $img ?>" alt="movie image">
            </div>
        </div>
    </div>


    <section class="main-search">
        <div class="main-search-wrapper">
            <i class="fa fa-map-marker" style="color: black;"></i>
            <select name="" id="" class="select-address">
                <option value="jakarta">Playing In - Jakarta</option>
                <option value="bogor">Playing In - Bogor</option>
                <option value="depok">Playing In - Depok</option>
            </select>
            <button class="main-search-button change-location">Change</button>
        </div>
    </section>

    <main class="container">
        <div class="card">
            <div class="card-body">

                <div id="jakarta">
                    <div class="schedule-wrapper">
                        <button class="accordion">DJAKARTA XXI</button>
                        <div class="panel">
                            <div class="type">
                                <h2>REGULAR RP 35000</h2>
                            </div>
                            <div class="schedule">
                                <button class="hour">11:45</button>
                                <button class="hour">13:00</button>
                            </div>
                        </div>
                    </div>

                    <div class="schedule-wrapper">
                        <button class="accordion">Theater IMAX Keong Emas - TMII</button>
                        <div class="panel">
                            <div class="type">
                                <h2>REGULAR RP 45000</h2>
                            </div>
                            <div class="schedule">
                                <button class="hour">11:45</button>
                                <button class="hour">13:00</button>
                            </div>
                        </div>
                    </div>

                    <div class="schedule-wrapper">
                        <button class="accordion">Theater CGV Jakarta</button>
                        <div class="panel">
                            <div class="type">
                                <h2>REGULAR RP 40000</h2>
                            </div>
                            <div class="schedule">
                                <button class="hour">11:45</button>
                                <button class="hour">13:00</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="bogor">
                    <div class="schedule-wrapper">
                        <button class="accordion">BOGOR SQUARE XXI</button>
                        <div class="panel">
                            <div class="type">
                                <h2>REGULAR RP 35000</h2>
                            </div>
                            <div class="schedule">
                                <button class="hour">11:45</button>
                                <button class="hour">13:00</button>
                            </div>
                        </div>
                    </div>

                    <div class="schedule-wrapper">
                        <button class="accordion">Transmart Yasmin Bogor XXI</button>
                        <div class="panel">
                            <div class="type">
                                <h2>REGULAR RP 45000</h2>
                            </div>
                            <div class="schedule">
                                <button class="hour">11:45</button>
                                <button class="hour">13:00</button>
                            </div>
                        </div>
                    </div>

                    <div class="schedule-wrapper">
                        <button class="accordion">Cinepolis Lippo Plaza Ekalokasari</button>
                        <div class="panel">
                            <div class="type">
                                <h2>REGULAR RP 40000</h2>
                            </div>
                            <div class="schedule">
                                <button class="hour">11:45</button>
                                <button class="hour">13:00</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="depok">
                    <div class="schedule-wrapper">
                        <button class="accordion">CGV Depok</button>
                        <div class="panel">
                            <div class="type">
                                <h2>REGULAR RP 35000</h2>
                            </div>
                            <div class="schedule">
                                <button class="hour">11:45</button>
                                <button class="hour">13:00</button>
                            </div>
                        </div>
                    </div>

                    <div class="schedule-wrapper">
                        <button class="accordion">DEPOK XXI</button>
                        <div class="panel">
                            <div class="type">
                                <h2>REGULAR RP 45000</h2>
                            </div>
                            <div class="schedule">
                                <button class="hour">11:45</button>
                                <button class="hour">13:00</button>
                            </div>
                        </div>
                    </div>

                    <div class="schedule-wrapper">
                        <button class="accordion">Cinema XXI - Depok XXI</button>
                        <div class="panel">
                            <div class="type">
                                <h2>REGULAR RP 40000</h2>
                            </div>
                            <div class="schedule">
                                <button class="hour">11:45</button>
                                <button class="hour">13:00</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include '../includes/footer.php'; ?>
    <script src="<?= BASE_URL . '/assets/js/script.js' ?>"></script>
    <script src="<?= BASE_URL . '/assets/js/movie-detail.js' ?>"></script>
    <script>
        document.addEventListener('click', function(event) {
            if (event.target.classList.contains('hour')) {
                const hour = event.target.innerText;

                const priceElement = event.target.closest('.schedule-wrapper').querySelector('.type h2');
                const price = priceElement ? priceElement.innerText : '';
                const locationElement = event.target.closest('.panel').previousElementSibling;
                const location = locationElement ? locationElement.innerText : '';

                const priceValue = price.match(/\d+/) ? price.match(/\d+/)[0] : '';

                const data = new FormData();
                data.append('hour', hour);
                data.append('price', priceValue);
                data.append('location', location);

                fetch('../lib/seat.php', {
                        method: 'POST',
                        body: data
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log('Success:', data);
                        window.location.href = 'movie-seat.php';
                    })
                    .catch((error) => {
                        console.error('Error:', error);
                    });
            }
        });
    </script>
</body>

</html>