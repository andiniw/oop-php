<h2>Halaman Transaksi</h2>

<table border="1">
<?php while($row = $data->fetch_assoc()): ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['total'] ?></td>
</tr>
<?php endwhile; ?>
</table>