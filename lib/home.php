<?php

require 'config/env.php';
include 'error.php';

$pdo = $conn;
$q_movies = 'SELECT * FROM film';
$statement = $pdo->query($q_movies);
$movies = $statement->fetchAll();