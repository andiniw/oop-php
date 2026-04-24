<!DOCTYPE html>
<html>
<head>
    <title>Toko Tas Andini</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: auto;
        }
        h1 {
            text-align: center;
        }
        .card {
            background: white;
            padding: 15px;
            margin: 10px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        form {
            margin-bottom: 20px;
        }
        input {
            padding: 8px;
            margin: 5px;
        }
        button {
            padding: 8px 12px;
            background: orange;
            border: none;
            color: white;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>👜 Toko Tas Andini</h1>

    <!-- FORM TAMBAH DATA -->
    <form method="POST" action="index.php?page=produk&aksi=tambah">
        <input type="text" name="nama" placeholder="Nama Tas" required>
        <input type="number" name="harga" placeholder="Harga" required>
        <button type="submit">Tambah</button>
    </form>

    <!-- TAMPIL DATA -->
    <?php while($row = $data->fetch_assoc()): ?>
        <div class="card">
            <h3><?= $row['nama']; ?></h3>
            <p>Harga: Rp <?= $row['harga']; ?></p>
        </div>
    <?php endwhile; ?>
</div>

</body>
</html>