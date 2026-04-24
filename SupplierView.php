<h2>Halaman Supplier</h2>

<table border="1">
<?php while($row = $data->fetch_assoc()): ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['nama'] ?></td>
</tr>
<?php endwhile; ?>
</table>