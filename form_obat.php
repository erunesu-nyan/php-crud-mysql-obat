<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="bg-secondary">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="obat.php">List</a>
                  </li>
                </ul>
              </div>
            </nav>
    <form method="POST">
        <h2>Nama Obat</h2>
        <input name="nama_obat" type="text">
        <input type="submit" name="simpan">
    </form>
    <?php
        include "koneksi.php";

        if(isset($_POST['simpan'])){
            $nama_obat = $_POST['nama_obat'];

            $sql = "INSERT INTO obat (nama_obat) VALUE ('$nama_obat')";
            $query = mysqli_query($db, $sql);

            if($query){
                header('Location: obat.php');
            }
            else{
                echo "GAGAL!!";
            }
        }
    ?>
</body>
</html>