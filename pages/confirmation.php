<?php require '../lib/movie-detail.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../includes/head.php'; ?>
    <link rel="stylesheet" href="../assets/css/confirmation.css">
</head>

<?php
if (isset($_SESSION['movieData'])) {
    $movieData = $_SESSION['movieData'];
    $duration = $movieData['duration'];
    $movieTitle = $movieData['title'];
    $genres = $movieData['genre'];
    $synosis = $movieData['synopsis'];
    $director = $movieData['director'];
    $cast = $movieData['cast'];
    $img = $movieData['img_path'];
}

$showtime = $_SESSION['selected_hour'];
$price = $_SESSION['selected_price'];
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

    <div class="container">
        <div class="checkout-panel">
            <h2>Checkout Details</h2>
            <form id="checkout-form" action="../lib/checkout.php" method="POST">
                <div class="form-group">
                    <label for="quantity">Tickets No</label>
                    <input type="text" name="no" id="no" readonly>
                </div>
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" required>
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" id="city" name="city" required>
                </div>
                <div class="form-group">
                    <label for="state">State/Province</label>
                    <input type="text" id="state" name="state">
                </div>
                <div class="form-group">
                    <label for="zip">ZIP/Postal Code</label>
                    <input type="text" id="zip" name="zip" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" name="phone" required>
                </div>
                <input type="hidden" name="movieTitle" value="<?= $movieTitle ?>">
                <input type="hidden" name="duration" value="<?= $duration ?>">
                <input type="hidden" name="showtime" value="<?= $showtime ?>">
                <input type="hidden" name="price" value="<?= $price ?>">
                <input type="hidden" name="seat" value="<?= $_SESSION['seat'] ?>">
                <input type="hidden" name="location" value="<?= $_SESSION['selected_location'] ?>">
                <div class="form-group">
                    <button type="submit" class="submit-btn" id="submit">Complete Purchase</button>
                </div>
            </form>
        </div>

        <div class="movie-details-panel">
            <h2>Movie Details</h2>
            <p><strong>Title:</strong> <?= $movieTitle ?></p>
            <p><strong>Duration:</strong> <?= $duration ?></p>
            <p><strong>Genre:</strong> <?php foreach ($genres as $key => $value) : ?><?= $value ?>, <?php endforeach ?></p>
            <p><strong>Showtime:</strong> <?= $showtime ?></p>
            <p><strong>Price:</strong> Rp.<?= $price ?></p>
            <p><strong>Seat:</strong> <?= $_SESSION['seat'] ?></p>
            <p><strong>Location:</strong> <?= $_SESSION['selected_location'] ?></p>
        </div>
    </div>

    <?php include '../includes/footer.php'; ?>
    <script>
        function generateTicketNumber() {
            return 'TRX' + (Math.floor(Math.random() * 900000) + 100000);
        }

        document.addEventListener('DOMContentLoaded', (event) => {
            document.getElementById('no').value = generateTicketNumber();
        });
    </script>
</body>

</html>