<?php
include_once "../../data.php";

$genere = isset($_GET['genere']) ? $_GET['genere'] : "";

if ($genere === "") {
    header("content-type: application/json");
    echo json_encode($disks);
}
?>