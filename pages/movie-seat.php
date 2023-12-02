<?php require '../lib/movie-detail.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../includes/head.php'; ?>
    <link rel="stylesheet" href="../assets/css/seat.css">
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

    <main class="container">
        <div class="seat-wrapper">
            <div class="screen">
                <p>SCREEN</p>
            </div>
            <table class="seat-table">
                <tr>
                    <td class="group-seat"><button class="seat-num">A1</button></td>
                    <td class="group-seat"><button class="seat-num">A2</button></td>
                    <td class="group-seat"><button class="seat-num">A3</button></td>
                    <td class="group-seat"><button class="seat-num">A4</button></td>
                    <td class="group-seat"><button class="seat-num">A5</button></td>
                    <td class="group-seat"><button class="seat-num">A6</button></td>
                    <td class="group-seat"><button class="seat-num">A7</button></td>
                    <td class="group-seat"><button class="seat-num">A8</button></td>
                    <td class="group-seat"><button class="seat-num">A9</button></td>
                    <td class="group-seat"><button class="seat-num">A10</button></td>
                    <td class="group-seat"><button class="seat-num">A11</button></td>
                    <td class="group-seat"><button class="seat-num">A12</button></td>
                </tr>
                <tr>
                    <td class="group-seat"><button class="seat-num">B1</button></td>
                    <td class="group-seat"><button class="seat-num">B2</button></td>
                    <td class="group-seat"><button class="seat-num">B3</button></td>
                    <td class="group-seat"><button class="seat-num">B4</button></td>
                    <td class="group-seat"><button class="seat-num">B5</button></td>
                    <td class="group-seat"><button class="seat-num">B6</button></td>
                    <td class="group-seat"><button class="seat-num">B7</button></td>
                    <td class="group-seat"><button class="seat-num">B8</button></td>
                    <td class="group-seat"><button class="seat-num">B9</button></td>
                    <td class="group-seat"><button class="seat-num">B10</button></td>
                    <td class="group-seat"><button class="seat-num">B11</button></td>
                    <td class="group-seat"><button class="seat-num">B12</button></td>
                </tr>
                <tr>
                    <td class="group-seat"><button class="seat-num">C1</button></td>
                    <td class="group-seat"><button class="seat-num">C2</button></td>
                    <td class="group-seat"><button class="seat-num">C3</button></td>
                    <td class="group-seat"><button class="seat-num">C4</button></td>
                    <td class="group-seat"><button class="seat-num">C5</button></td>
                    <td class="group-seat"><button class="seat-num">C6</button></td>
                    <td class="group-seat"><button class="seat-num">C7</button></td>
                    <td class="group-seat"><button class="seat-num">C8</button></td>
                    <td class="group-seat"><button class="seat-num">C9</button></td>
                    <td class="group-seat"><button class="seat-num">C10</button></td>
                    <td class="group-seat"><button class="seat-num">C11</button></td>
                    <td class="group-seat"><button class="seat-num">C12</button></td>
                </tr>
                <tr>
                    <td class="group-seat"><button class="seat-num">D1</button></td>
                    <td class="group-seat"><button class="seat-num">D2</button></td>
                    <td class="group-seat"><button class="seat-num">D3</button></td>
                    <td class="group-seat"><button class="seat-num">D4</button></td>
                    <td class="group-seat"><button class="seat-num">D5</button></td>
                    <td class="group-seat"><button class="seat-num">D6</button></td>
                    <td class="group-seat"><button class="seat-num">D7</button></td>
                    <td class="group-seat"><button class="seat-num">D8</button></td>
                    <td class="group-seat"><button class="seat-num">D9</button></td>
                    <td class="group-seat"><button class="seat-num">D10</button></td>
                    <td class="group-seat"><button class="seat-num">D11</button></td>
                    <td class="group-seat"><button class="seat-num">D12</button></td>
                </tr>
                <tr>
                    <td class="group-seat"><button class="seat-num">E1</button></td>
                    <td class="group-seat"><button class="seat-num">E2</button></td>
                    <td class="group-seat"><button class="seat-num">E3</button></td>
                    <td class="group-seat"><button class="seat-num">E4</button></td>
                    <td class="group-seat"><button class="seat-num">E5</button></td>
                    <td class="group-seat"><button class="seat-num">E6</button></td>
                    <td class="group-seat"><button class="seat-num">E7</button></td>
                    <td class="group-seat"><button class="seat-num">E8</button></td>
                    <td class="group-seat"><button class="seat-num">E9</button></td>
                    <td class="group-seat"><button class="seat-num">E10</button></td>
                    <td class="group-seat"><button class="seat-num">E11</button></td>
                    <td class="group-seat"><button class="seat-num">E12</button></td>
                </tr>
            </table>
        </div>
    </main>

    <?php include '../includes/footer.php'; ?>
    <script src="<?= BASE_URL . '/assets/js/seat.js' ?>"></script>
</body>

</html>