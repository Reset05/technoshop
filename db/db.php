<?php
define('DIR', __DIR__);
$host = 'localhost';
$db = 'catalog';
$user = 'root';
$pass = 'root';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$pdo = new PDO($dsn, $user, $pass);

$mysqli = mysqli_connect("localhost", "root", "root", "catalog");

?>