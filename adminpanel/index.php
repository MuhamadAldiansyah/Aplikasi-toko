<?php
    require "session.php";
    require "../koneksi.php";

    $querykategori = mysqli_query($con, "SELECT * FROM kategori");
    $jumlahkategori = mysqli_num_rows($querykategori);

    $queryproduk = mysqli_query($con, "SELECT * FROM produk");
    $jumlahproduk = mysqli_num_rows($queryproduk);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="../image/logo (2).png" rel="shortcut icon">

</head>

<style>
    .kotak{
        border: solid;
    }

    .summery-kategori{
        background-color: #0a6b4a;
        border-radius: 15px;
    }

    .summery-produk{
        background-color: #0a516b;
        border-radius: 15px;
    }

    .no-decoration{
        text-decoration: none;
    }

</style>

<body>
    <?php require "navbar.php"; ?>
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <i class="fas fa-home"></i> Home</li>
            </ol>
        </nav>
    <h2>Welcome <?php echo $_SESSION['username']?></h2>

    <div class="container mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mb-3">
              <div class="summery-produk p-3">
                <div class="row">
                    <div class="col-6">
                      <i class="fas fa-align-justify fa-7x text-black-50"></i>
                    </div>
                    <div class="col-6 text-white">
                        <h3 class="fs-2">Kategori</h3>
                        <p class="fs-4"><?php echo $jumlahkategori;?> kategori</p>
                        
                    </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-3">
              <div class="summery-produk p-3">
                  <div class="row">
                        <div class="col-6">
                        <i class="fas fa-box fa-7x text-black-50"></i>
                        </div>
                        <div class="col-6 text-white">
                            <h3 class="fs-2">produk</h3>
                            <p class="fs-4"><?php echo $jumlahproduk;?> produk</p>
                          
                        </div>
                   </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-3">
              <div class="summery-produk p-3">
                  <div class="row">
                        <div class="col-6">
                        <i class="fa-brands fa-shopify fa-7x text-black-50"></i>
                        </div>
                        <div class="col-6 text-white">
                            <h3 class="fs-2">produk</h3>
                            <p class="fs-4"><?php echo $jumlahproduk;?> Our product</p>
                            <p><a href="../index.php" class="text-white no-decoration">Produk View</a></p>
                        </div>
                   </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-3">
              <div class="summery-produk p-3">
                  <div class="row">
                        <div class="col-6">
                        <i class="fa-solid fa-truck-fast fa-7x text-black-50"></i>
                        </div>
                        <div class="col-6 text-white">
                            <h3 class="fs-2">Kategori</h3>
                            <p class="fs-4"><?php echo $jumlahkategori;?> Kategori-View</p>
                            <p><a href="../produk.php" class="text-white no-decoration">Produk View</a></p>
                        </div>
                   </div>
                </div>
            </div>

          </div>
    </div>
    </div>

    

    <?php require "footer.php"; ?>


    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>
</body>
</html>