<?php

$nama = $_POST['nama'];
$roda = $_POST['roda'];

include 'kendaraan.php';

$kendaraan = new Kendaraan($nama, $roda);
$spesifikasi = $kendaraan->Spesifikasi();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kendaraan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* CSS untuk mempercantik tampilan tabel */
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 50px;
            border-radius: 5px;
            background-color: #fff;
            padding: 30px;
        }

        .table {
            background-color: #fff;
            border-radius: 5px;
        }

        .table thead th {
            background-color: #007bff;
            color: #fff;
            border-color: #007bff;
        }

        .table th,
        .table td {
            border-color: #dee2e6;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }
    </style>
</head>

<body>
    <div class="container">
        <h4 class="text-center mb-3 mt-4">Hasil Output Spesifikasi Kendaraan</h4>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kendaraan</th>
                    <th scope="col">Jumlah Roda</th>
                    <th scope="col">Spesifikasi Kendaraan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><?= $nama ?></td>
                    <td><?= $roda ?></td>
                    <td><?= $spesifikasi ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>