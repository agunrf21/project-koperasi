<?php
include 'includes/koneksi.php';

$id_item = $_GET['id_item'];
session_start();
$session_id = session_id();

$query = "INSERT INTO transaction_temp (id_item, session_id, quantity) 
          VALUES ($id_item, '$session_id', 1)";
$result = mysqli_query($koneksi, $query);

if ($result) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false]);
}
?>