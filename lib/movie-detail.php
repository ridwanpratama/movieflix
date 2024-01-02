<?php

require '../config/env.php';
require '../config/data.php';

session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['movieTitle'])) {
        $selectedMovieTitle = $_POST['movieTitle'];

        $movieData = array_filter($movies, function ($movie) use ($selectedMovieTitle) {
            return strcasecmp($movie['title'], $selectedMovieTitle) == 0;
        });

        if (!empty($movieData)) {
            $movieData = array_values($movieData)[0];
            $_SESSION['movieData'] = $movieData;
            echo json_encode(['success' => true, 'data' => $movieData]);
        } else {
            echo json_encode(['success' => false, 'error' => 'Movie not found.']);
        }
    } else {
        echo json_encode(['success' => false, 'error' => 'Movie title is empty.']);
    }
}
