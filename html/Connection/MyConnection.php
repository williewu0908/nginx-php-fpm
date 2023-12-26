<?php 
require_once '../Connection/Connection.php';

$host        = "dpg-cm42hn6n7f5s73bsiq90-a.singapore-postgres.render.com";
$port        = "5432";
$dbname      = "bigdata_muiv";
$user        = "root";
$password    = "J5wBU4ZErunyboy6yFVdFi5nA1mDJV0U";

Connection::setConnection(
    $host,
    $port,
    $user,
    $password,
    $dbname
);
?>
