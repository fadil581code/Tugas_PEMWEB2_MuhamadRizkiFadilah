<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Document</title>
  <style>
        /* Custom CSS untuk mempercantik tampilan formulir */
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 50px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            padding: 30px;
        }

        .form-control {
            border-radius: 20px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.6);
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 20px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>

<body>
  <div>
    <br>
    <div class="container">
      <h4 class="text-center mb-4">Form Input Spesifikasi Kendaraan</h4>
      <form method="post" action="proses.php">
        <div class="form-group row">
          <label for="nama" class="col-4 col-form-label">Nama Kendaraan</label>
          <div class="col-8">
            <input id="text1" name="nama" placeholder="Masukan nama kendaraan" type="text" class="form-control" required="required">
          </div>
        </div>
        <div class="form-group row">
          <label for="roda" class="col-4 col-form-label">Jumlah Roda</label>
          <div class="col-8">
            <input id="number" name="roda" type="text" class="form-control" required="required">
          </div>
        </div>
        <div class="form-group row">
          <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>

</html>