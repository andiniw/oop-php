<h2>Data Produk Tas</h2>

<?php while($row = $data->fetch_assoc()): ?>
    <p>
        <?= $row['nama'] ?> - Rp<?= $row['harga'] ?>
    </p>
<?php endwhile; ?>