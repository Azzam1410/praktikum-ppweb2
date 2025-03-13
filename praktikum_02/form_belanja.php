<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h3>Belanja Online</h3>
                <hr />
                <form method="POST" action="">
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Customer</label>
                        <div class="col-6">
                            <input id="nama" name="nama" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk1" type="radio" class="custom-control-input" value="TV" required>
                                <label for="produk1" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk2" type="radio" class="custom-control-input" value="Kulkas" required>
                                <label for="produk2" class="custom-control-label">Kulkas</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk3" type="radio" class="custom-control-input" value="Mesin Cuci" required>
                                <label for="produk3" class="custom-control-label">Mesin Cuci</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                        <div class="col-4">
                            <input id="jumlah" name="jumlah" type="number" class="form-control" required min="1">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="proses" type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">Daftar Harga</div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">TV : Rp. 4.200.000</li>
                        <li class="list-group-item">Kulkas : Rp. 3.100.000</li>
                        <li class="list-group-item">Mesin Cuci : Rp. 3.800.000</li>
                    </ul>
                    <div class="card-footer bg-primary text-white">Harga dapat berubah setiap saat</div>
                </div>
            </div>
        </div>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST['nama'];
            $produk = $_POST['produk'];
            $jumlah = $_POST['jumlah'];
            
            // Daftar harga produk
            $harga_produk = [
                "TV" => 4200000,
                "Kulkas" => 3100000,
                "Mesin Cuci" => 3800000
            ];
            
            // Hitung total harga
            $total_harga = $harga_produk[$produk] * $jumlah;
            
            echo "<div class='alert alert-info mt-4'>";
            echo "<h4>Detail Pesanan</h4>";
            echo "Nama Customer: <strong>$nama</strong><br>";
            echo "Produk: <strong>$produk</strong><br>";
            echo "Jumlah: <strong>$jumlah</strong><br>";
            echo "Total Harga: <strong>Rp. " . number_format($total_harga, 0, ',', '.') . "</strong>";
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>
