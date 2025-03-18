<?php
session_start();
include 'includes/koneksi.php';

$session_id = session_id();
$query = "SELECT COUNT(*) as count FROM transaction_temp WHERE session_id = '$session_id'";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);

echo json_encode(['count' => $row['count']]);
?>