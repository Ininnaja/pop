<?php
session_start();
include 'config.php';

$price = $_POST['Price'] ?: 0;
$date = trim($_POST['Date']);
$graph= $_POST['Graph'];

if(empty($_POST['id'])) {
    $query = mysqli_query($conn, "INSERT INTO mangosteen (Price, Date, Graph) VALUES ( '{$price}', '{$date}', '{$graph}')") or die('query failed');
} else {
    $query_product = mysqli_query($conn, "SELECT * FROM mangosteen WHERE id='{$_POST['id']}'");
    $result = mysqli_fetch_assoc($query_product);

    $query = mysqli_query($conn, "UPDATE mangosteen SET Price='{$price}', Date='{$date}', Graph='{$graph}' WHERE id='{$_POST['id']}'") or die('query failed');
}

mysqli_close($conn);
if($query) {

    $_SESSION['message'] = 'Product Saved success';
    header('location: ' . $base_url . '/mangosteen-insert.php');
} else {
    $_SESSION['message'] = 'Product could not be saved!';
    header('location: ' . $base_url . '/mangosteen-insert.php');
}
