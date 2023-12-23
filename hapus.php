<?php
session_start();

if ( isset($_GET["id"]) ) {
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "penjualan";

    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM barang WHERE id='$id'";
    $connection->query($sql);
}

header("location: /Tugas PHP 3/index.php");
exit;
?>