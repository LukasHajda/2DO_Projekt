<?php

include 'config.php';

$id = $_POST['id'];
$color = $_POST['color'];

//echo $id . " : " . $color;

$sqlActivityUpdate = "UPDATE activities SET color = '$color' WHERE id = '$id'";

if (empty($conn)) {
    echo 'nieco';
    return;
}

$res = mysqli_query($conn, $sqlActivityUpdate);

echo $id . " : " . $color;