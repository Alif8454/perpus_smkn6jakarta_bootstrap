<?php 
    require_once 'function.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan_SMKN6_Jakarta</title>
    
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><span class="text-primary">Ebo</span>Library</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
                <a class="nav-link" href="data_buku.php">Data Master</a>
          </li>      
        </ul>
      </div>
    </div>
  </nav>


      <section class="services section-padding" id="services">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="section-header text-center pb-5">
                          <h2>Data Buku</h2>
                      </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-secondary pb-2">
                        <div class="card-body">
                            <i class="bi bi-laptop"></i>
                            <h3 class="card-title">Peminjaman</h3>
                            <a href="form_peminjaman.php"><button class="btn bg-primary text-light">Read More</button></a>
                        </div>
                    </div>
                </div>
                  <div class="col-12 col-md-12 col-lg-4">
                      <div class="card text-white text-center bg-secondary pb-2">
                          <div class="card-body">
                            <i class="bi bi-journal"></i>
                              <h3 class="card-title">Pengembalian</h3>
                            <a href="form_pengembalian.php"><button class="btn bg-primary text-light">Read More</button></a>
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-12 col-lg-4">
                      <div class="card text-white text-center bg-secondary pb-2">
                          <div class="card-body">
                            <i class="bi bi-intersect"></i>
                              <h3 class="card-title">Stok Buku</h3>                            
                              <a href="tabel_stok.php"><button class="btn bg-primary text-light">Read More</button></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>


      

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>




<!--for getting the form download the code from download button-->