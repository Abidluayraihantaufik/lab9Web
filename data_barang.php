<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="styleG.css" rel="stylesheet" type="text/css" />
    <style>
        /* Add border styles to the table, th, and td elements */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd; /* Border style: 1px solid color */
            padding: 8px; /* Add some padding for better appearance */
            text-align: left;
        }

        th {
            background-color: #f2f2f2; /* Add a background color for header cells */
        }
    </style>
    <title>Data Barang</title>
</head>

<body>
    <div class="container">
        <h1>Data Barang</h1>
        <div class="main">
            <table>
                <tr>
                    <th>Gambar</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Harga Jual</th>
                    <th>Harga Beli</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
                <?php if ($result) : ?>
                    <?php while ($row = mysqli_fetch_array($result)) : ?>
                        <tr>
                            <td><img src="gambar/<?= $row['gambar']; ?>" alt="<?= $row['nama']; ?>"></td>
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['kategori']; ?></td>
                            <td><?= $row['harga_beli']; ?></td>
                            <td><?= $row['harga_jual']; ?></td>
                            <td><?= $row['stok']; ?></td>
                            <td class="aksi">
                                <a class="ubah" href="ubah.php?id=<?= $row['id_Barang']; ?>">Ubah</a>
                                <a class="hapus" href="hapus.php?id=<?= $row['id_Barang']; ?>">Hapus</a>
                            </td>
                        </tr>
                    <?php endwhile;
                else : ?>
                    <tr>
                        <td colspan="7">Belum ada data</td>
                    </tr>
                <?php endif; ?>
            </table>
            <table>
                <th><a class="tambah" href="tambah_barang.php">Tambahkan Barang</a></th>
            </table>
        </div>
    </div>
</body>
<?php require('footer.php'); ?>

</html>
