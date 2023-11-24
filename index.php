<?php 
    require_once 'function.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan_SMKN6_Jakarta</title>
    
    <script src="js/bootstrap.bundle.min.js"></script>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css?=<?php echo time();?>">
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
              <li class="nav-item">
                <a class="nav-link" href="#footer">Contact</a>
              </li>        
            </ul>
          </div>
        </div>
      </nav>
         
         
         
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/girl-reading.png" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>SELAMAT DATANG DI 
                EBO LIBRARY</h5>
                <a href="data_buku.php"><button class="Btn">Lihat Buku</button></a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/reading2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Membaca Buku Membuka Jendela Dunia</h5>
                  <button class="Btn">Lihat Buku</button>
            </div>
          </div>
          
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-box">
                        <img src="img/logo_smkn6.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-box">
                        <h1>EBO LIBRARY</h1>
                        <h2>BY SMK NEGERI 6 JAKARTA</h2>
                        <h2>Follow us on</h2>
                        <p class="socials">
                            <a href="https://www.facebook.com/smkn6jakarta/?locale=id_ID"><i class="fab fa-facebook" href="#"></i></a>
                            <a href="https://www.instagram.com/smkn6jkt/"><i class="fab fa-instagram" href="#"></i></a>
                            <a href="https://twitter.com/osis_smkn6"><i class="fab fa-twitter" href="#"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- <script src="js/script.js"></script> -->
</body>
</html>




