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
                    <td class="isle"></td>
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
                    <td class="isle"></td>
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
                    <td class="isle"></td>
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
                    <td class="isle"></td>
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
                    <td class="isle"></td>
                    <td class="group-seat"><button class="seat-num">E7</button></td>
                    <td class="group-seat"><button class="seat-num">E8</button></td>
                    <td class="group-seat"><button class="seat-num">E9</button></td>
                    <td class="group-seat"><button class="seat-num">E10</button></td>
                    <td class="group-seat"><button class="seat-num">E11</button></td>
                    <td class="group-seat"><button class="seat-num">E12</button></td>
                </tr>
                <tr>
                    <td class="group-seat"><button class="seat-num">F1</button></td>
                    <td class="group-seat"><button class="seat-num">F2</button></td>
                    <td class="group-seat"><button class="seat-num">F3</button></td>
                    <td class="group-seat"><button class="seat-num">F4</button></td>
                    <td class="group-seat"><button class="seat-num">F5</button></td>
                    <td class="group-seat"><button class="seat-num">F6</button></td>
                    <td class="isle"></td>
                    <td class="group-seat"><button class="seat-num">F7</button></td>
                    <td class="group-seat"><button class="seat-num">F8</button></td>
                    <td class="group-seat"><button class="seat-num">F9</button></td>
                    <td class="group-seat"><button class="seat-num">F10</button></td>
                    <td class="group-seat"><button class="seat-num">F11</button></td>
                    <td class="group-seat"><button class="seat-num">F12</button></td>
                </tr>
                <tr>
                    <td class="group-seat"><button class="seat-num">G1</button></td>
                    <td class="group-seat"><button class="seat-num">G2</button></td>
                    <td class="group-seat"><button class="seat-num">G3</button></td>
                    <td class="group-seat"><button class="seat-num">G4</button></td>
                    <td class="group-seat"><button class="seat-num">G5</button></td>
                    <td class="group-seat"><button class="seat-num">G6</button></td>
                    <td class="isle"></td>
                    <td class="group-seat"><button class="seat-num">G7</button></td>
                    <td class="group-seat"><button class="seat-num">G8</button></td>
                    <td class="group-seat"><button class="seat-num">G9</button></td>
                    <td class="group-seat"><button class="seat-num">G10</button></td>
                    <td class="group-seat"><button class="seat-num">G11</button></td>
                    <td class="group-seat"><button class="seat-num">G12</button></td>
                </tr>
                <tr>
                    <td class="group-seat"><button class="seat-num">H1</button></td>
                    <td class="group-seat"><button class="seat-num">H2</button></td>
                    <td class="group-seat"><button class="seat-num">H3</button></td>
                    <td class="group-seat"><button class="seat-num">H4</button></td>
                    <td class="group-seat"><button class="seat-num">H5</button></td>
                    <td class="group-seat"><button class="seat-num">H6</button></td>
                    <td class="isle"></td>
                    <td class="group-seat"><button class="seat-num">H7</button></td>
                    <td class="group-seat"><button class="seat-num">H8</button></td>
                    <td class="group-seat"><button class="seat-num">H9</button></td>
                    <td class="group-seat"><button class="seat-num">H10</button></td>
                    <td class="group-seat"><button class="seat-num">H11</button></td>
                    <td class="group-seat"><button class="seat-num">H12</button></td>
                </tr>
                <tr>
                    <td class="group-seat"><button class="seat-num">I1</button></td>
                    <td class="group-seat"><button class="seat-num">I2</button></td>
                    <td class="group-seat"><button class="seat-num">I3</button></td>
                    <td class="group-seat"><button class="seat-num">I4</button></td>
                    <td class="group-seat"><button class="seat-num">I5</button></td>
                    <td class="group-seat"><button class="seat-num">I6</button></td>
                    <td class="isle"></td>
                    <td class="group-seat"><button class="seat-num">I7</button></td>
                    <td class="group-seat"><button class="seat-num">I8</button></td>
                    <td class="group-seat"><button class="seat-num">I9</button></td>
                    <td class="group-seat"><button class="seat-num">I10</button></td>
                    <td class="group-seat"><button class="seat-num">I11</button></td>
                    <td class="group-seat"><button class="seat-num">I12</button></td>
                </tr>
                <tr>
                    <td class="group-seat"><button class="seat-num">J1</button></td>
                    <td class="group-seat"><button class="seat-num">J2</button></td>
                    <td class="group-seat"><button class="seat-num">J3</button></td>
                    <td class="group-seat"><button class="seat-num">J4</button></td>
                    <td class="group-seat"><button class="seat-num">J5</button></td>
                    <td class="group-seat"><button class="seat-num">J6</button></td>
                    <td class="isle"></td>
                    <td class="group-seat"><button class="seat-num">J7</button></td>
                    <td class="group-seat"><button class="seat-num">J8</button></td>
                    <td class="group-seat"><button class="seat-num">J9</button></td>
                    <td class="group-seat"><button class="seat-num">J10</button></td>
                    <td class="group-seat"><button class="seat-num">J11</button></td>
                    <td class="group-seat"><button class="seat-num">J12</button></td>
                </tr>
            </table>
        </div>
    </main>

    <?php include '../includes/footer.php'; ?>
    <script src="<?= BASE_URL . '/assets/js/seat.js' ?>"></script>
    <script>
        document.addEventListener('click', function(event) {
            if (event.target.classList.contains('seat-num')) {
                const seat = event.target.innerText;
                
                console.log(seat);
                const data = new FormData();
                data.append('seat', seat);
                fetch('../lib/confirmation.php', {
                        method: 'POST',
                        body: data
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log('Success:', data);
                        window.location.href = 'confirmation.php';
                    })
                    .catch((error) => {
                        console.error('Error:', error);
                    });
            }
        });
    </script>
</body>

</html>