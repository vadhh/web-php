<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Yadi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>Keranjang Belanja</h2>
        <a class="btn btn-primary" href="/Tugas PHP 3/tambah.php" role="button">Tambah Item</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID Barang</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "penjualan";

                $connection = new mysqli($servername, $username, $password, $database);
                
                if ($connection->connect_error) {
                    die("Connection Failed: " . $connection->connect_error);
                }

                $sql = "SELECT * FROM barang";
                $result = $connection->query($sql);

                if (!$result) {
                    die("invalid query; " . $connection->error);
                }

                while($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                        <td>$row[id]</td>
                        <td>$row[nama]</td>
                        <td>$row[harga]</td>
                        <td>
                            <a class='btn btn-danger btn-sm' href='/Tugas PHP 3/hapus.php?id=$row[id]'>Hapus</a>
                        </td>
                    </tr>
                    ";
                }
                ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>