<?php
session_start();
include 'includes/koneksi.php';

$id_item = $_GET['id_item'];
$session_id = session_id();

// Cek apakah item sudah ada di keranjang
$query = "INSERT INTO transaction_temp (id_item, session_id, quantity) 
          VALUES ($id_item, '$session_id', 1) 
          ON DUPLICATE KEY UPDATE quantity = quantity + 1";
$result = mysqli_query($koneksi, $query);

echo json_encode(["success" => true]);
?>