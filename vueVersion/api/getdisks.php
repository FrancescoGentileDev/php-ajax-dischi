<?php
include_once "../../data.php";

$genre = isset($_GET['genre']) ? $_GET['genre'] : "";

if ($genre === "") {
    header("content-type: application/json");
    echo json_encode($disks);
}
else {
    $newArr = [];

    foreach($disks as $disk) {
        if(strtolower($disk["genre"]) ==strtolower($genre) )
            $newArr[] = $disk;
    }
    header("content-type: application/json");
    echo json_encode($newArr);
}
?>