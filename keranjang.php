<?php include 'includes/header.php'; ?>
<?php
session_start();
$session_id = session_id();
$query = "SELECT * FROM transaction_temp WHERE session_id = '$session_id'";
$result = mysqli_query($koneksi, $query);
?>

<div class="container mt-5">
    <h2>Keranjang Belanja</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Quantity</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $row['nama_item'] ?></td>
                    <td><?= $row['quantity'] ?></td>
                    <td>Rp <?= number_format($row['price'], 0, ',', '.') ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
<?php include 'includes/footer.php'; ?>