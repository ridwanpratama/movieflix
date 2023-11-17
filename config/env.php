<?php
define('BASE_URL', 'http://localhost/kuliah/web_programming/movieflix');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_bioskop";

try {
    set_exception_handler(function(Throwable $exception) {
        print_r($exception);
        exit('Something went wrong.');
    });
        
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print_r($e);
    exit("Connection failed: " . $e->getMessage());
}