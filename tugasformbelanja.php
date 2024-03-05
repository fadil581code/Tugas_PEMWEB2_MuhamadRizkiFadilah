<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Belanja Online</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 30px;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .list-group {
            margin-top: 20px;
        }

        .list-group-item.active {
            background-color: #007bff;
            border-color: #007bff;
        }

        .list-group-item {
            border-color: rgba(0, 0, 0, 0.125);
        }

        .form-control {
            border-radius: 20px;
        }

        .btn-success {
            border-radius: 20px;
            width: 100%;
        }

        .result {
            margin-top: 20px;
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 10px;
        }

        .result h3 {
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Belanja Online</h2>
        <form method="post">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group row">
                        <label for="customer" class="col-sm-2 col-form-label">Customer</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="customer" name="customer" placeholder="Nama Customer">
                        </div>
                    </div>
                    <div class="col-12 form-group row">
                <label class="col-2">Pilih Produk</label> 
                    <div class="col-8">
                    <label class="custom-control custom-radio">
                    <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
                    <span class="custom-control-indicator"></span> 
                    <span class="custom-control-description">TV</span>
                </label>

                <label class="custom-control custom-radio">
                    <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
                    <span class="custom-control-indicator"></span> 
                    <span class="custom-control-description">Kulkas</span>
                </label>

                <label class="custom-control custom-radio">
                    <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin cuci"> 
                    <span class="custom-control-indicator"></span> 
                    <span class="custom-control-description">Mesin Cuci</span>
                </label>
                    </div>
                </div>

                    <div class="form-group row">
                        <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="jumlah" name="jumlah" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-success">Kirim</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="list-group">
                        <li class="list-group-item active">Daftar Harga</li>
                        <li class="list-group-item">TV: Rp 4.200.000</li>
                        <li class="list-group-item">Kulkas: Rp 3.100.000</li>
                        <li class="list-group-item">Mesin Cuci: Rp 3.800.000</li>
                        <li class="list-group-item active">Harga Dapat Berubah Setiap Saat</li>
                    </ul>
                </div>
            </div>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Tangkap input form
            $customer = $_POST['customer'];
            $produk = $_POST['produk'];
            $jumlah = $_POST['jumlah'];

            // List harga produk
            $harga = [
                'TV' => 4200000,
                'Kulkas' => 3100000,
                'Mesin Cuci' => 3800000
            ];

            // Menghitung total harga
            $total = $jumlah * $harga[$produk];

            // Format harga
            $total = number_format($total);
        ?>
            <div class="result">
                <h3>Rincian Pembelian</h3>
                <p><strong>Nama Customer:</strong> <?php echo $customer; ?></p>
                <p><strong>Pilihan Produk:</strong> <?php echo $produk; ?></p>
                <p><strong>Jumlah Belanja:</strong> <?php echo $jumlah; ?></p>
                <p><strong>Total Belanja:</strong> Rp <?php echo $total; ?></p>
            </div>
        <?php } ?>
    </div>
</body>

</html>
