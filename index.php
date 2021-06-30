<!DOCTYPE html>
<html lang="en">

<head>
    <title>Generate QRCode</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="mt-5">
            <div class="card">
                <div class="card-header" style="background-color: #ff6016;color:white;">
                    Generate QRCode
                </div>
                <div class="card-body">
                    <form method="POST" action="proses.php">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" placeholder="Nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control" placeholder="Keterangan" name="keterangan">
                        </div>
                        <button type="submit" class="btn" name="generate" style="background-color: #ff6016;color:white;">Generate</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>