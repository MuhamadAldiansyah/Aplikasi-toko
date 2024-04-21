<?php 
  require "session.php";
  require "koneksi.php";
  
  $queryProduk = mysqli_query($con, "SELECT id, nama, harga, foto, detail FROM produk LIMIT 6");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko online | Home</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="./image/logo (2).png" rel="shortcut icon">
</head>
<body>

    <?php require "navbar.php"; ?>
    <!--banner-->
    <div class="container-fluid banner d-flex align-items-center">
        <div class="container text-center text-white">
            <h1>Toko Online Fashion</h1>
            <h3>Mau cari apa ?</h3>
        <div class="col-md-8 offset-md-2">
            <form method="get" action="produk.php">
            <div class="input-group input-group-lg my-4">
                <input type="text" class="form-control" placeholder="Nama Barang"
                aria-label="Recipient's username" aria-describedby="basic-addon2" name="keyword">
                <button type="submit" class="btn warna2 text-white">Telusuri</button>
            </div>
            </form>
        </div>
        </div>
    </div>

     <!--hightlight kategori-->

     <div class="container-fluid py-5">
        <div class="container text-center">
            <h3 class="fs-2 text-black-50">Kategori terlaris</h3>

            <div class="row mt-5">
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-bajupria d-flex justify-content-center align-items-center">
                        <h4 class="text-white"><a class="no-decoration " href="produk.php?kategori=baju pria">Baju Pria</a></h4>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-bajuwanita d-flex justify-content-center align-items-center">
                    <h4 class="text-white"><a class="no-decoration " href="produk.php?kategori=baju wanita">Baju wanita</a></h4>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-sepatu-spt d-flex justify-content-center align-items-center">
                    <h4 class="text-white"><a class="no-decoration " href="produk.php?kategori=Sepatu">Sepatu</a></h4>
                    </div>
                </div>
            </div>
        </div>
     </div>

     <!--Tentang kami-->

     <div class="container-fluid warna3 py-5">
        <div class="container text-center" id="about">
            <h3 class="fs-2 text-black-50">Tentang kami</h3>
            <p class="fs-5 mt-3">Muhamad Aldiansyah Adalah pembuat website ini. Website ini bukan untuk digunakan untuk tujuan komersial dan hanya digunakan untuk mencoba coba saja. Saya adalah pelajar SMK WAHIDIN yang sedang mencoba untuk membuat website, terimakasih sudah membaca fitur about us ini jika suka yaudah jika tidak suka bukan urusan saya.</p>
            <br>
        </div>
     </div>

     <!--produk-->

     <div class="container-fluid py-5">
        <div class="container text-center">
            <h3 class="fs-2 text-black-50">Produk</h3>

            <div class="row mt-5">
                <?php while($data = mysqli_fetch_array($queryProduk)){ ?>

                <div class="col-sm-6 col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="image-box">
                                <img src="image/<?php echo $data['foto']; ?>" class="card-img-top" alt="">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $data['nama']; ?></h4>
                            <p class="card-text"><?php echo $data['detail']; ?></p>
                            <p class="card-text text-harga">Rp <?php echo $data['harga'];?></p>
                            <a href="produk-detail.php?nama=<?php echo $data['nama']; ?>" class="btn btn-outline-warning">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                
                <?php } ?>
            </div>
            <a class="btn btn-outline-warning mt-3 p-3 " href="produk.php">See More</a>
        </div>
     </div>

     <?php require "footer.php"; ?>

    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./fontawesome/js/all.min.js"></script>
</body>
</html>