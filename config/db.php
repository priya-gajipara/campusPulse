<?php
// require 'vendor/autoload.php';
// // $dotenv = Dotenv\Dotenv::createImmutable(_DIR_ . '/..');
// // $dotenv->load();



$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password,"student");  


if ($conn->connect_error) {
  die("Connection failed:<br> " . $conn->connect_error);
}


// require 'vendor/autoload.php';
// $dotenv = Dotenv\Dotenv::createImmutable(_DIR_ . '/..');
// $dotenv->load();

// define('DB_HOST', $_ENV['DB_HOST']);
// define('DB_SERVER', $_ENV['DB_SERVER']);
// define('DB_PASS', $_ENV['DB_PASS']);
// define('DB_NAME', $_ENV['DB_NAME']);
// define('DB_PORT', $_ENV['DB_PORT']);

// $con = mysqli_connect('localhost', 'root', '', 'panel');
// if (!$con) {
//     die("database not connected");
// }


?>

 