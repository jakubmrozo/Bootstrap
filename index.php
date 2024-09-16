<?php
    require_once('admin/functions.php');
?>


<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
  </head>
  <body>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Transport</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  onclick="smoothScroll('#trucks')">Flota</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="smoothScroll('#drivers')">Kierowcy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="smoothScroll('footer')">Kontakt</a>
                </li>
            </ul>
            <div class="col-12 d-flex  justify-content-left p-3">
            
            <a class="ml-auto btn btn-secondary p-1" href="admin/login.html">Zaloguj</a>

    </div>
        </div>
       
    </nav>

    <!--navbar-->
    <!--header-->
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <button class="col-lg-4 col-sm-10 p-4" onclick="smoothScroll('#trucks')">POZNAJ NAS</button>
                </div>
            </div>
        </div>

    </header>
    <!--header-->
    <!--trucks-->
    <section id="trucks">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center p-4 mb-3 mt-3">NASZA FLOTA</h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center p-5">
            <?php
            
                $rows = generate_cards("trucks");
                
                foreach($rows as $r) {
                    echo "<div class='col-lg-3 col-md-5 m-3'>
                    <div class='avatar mx-auto'>
                    <img src='admin/".$r['photo_url']."'class='w-100' alt='truck'>
                    <div class='card-body'>
                    <h4 class = 'text-center p-3'>".$r['name']."</h4>
                    <p class='text-center'>".$r['description']."</p>
                    </div>
                    </div>
                    </div>
                    ";
                }
            
            ?>

                
            </div>
        </div>
    </section>
    <!--trucks-->
    <!--drivers-->
    <section id="drivers">
        <div class="container-fluid bg-dark">
            <div class="row">
                <div class="col-12 p-4">
                    <h1 class="text-center text-light p-4">NASI KIEROWCY</h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center p-4">
              
                <?php
                $rows = generate_cards("drivers");
                
                foreach($rows as $r) {
                    echo "<div class='col-lg-3 col-md-5 m-3'>
                    <div class='avatar mx-auto'>
                    <img src='admin/".$r['photo_url']."' class='w-100 rounded-circle' alt='kierowca'>
                    </div>
                    <h5 class='font-weight-bold mt-3 mb-3 text-center text-light'>".$r['name']."</h5>
                    <p class='text-light text-center'>".$r['description']."</p>
                    </div>
                    ";
                }
                ?>

                
            </div>
        </div>
    </section>
    <!--drivers-->
    <!--footer-->
    <footer class="page-footer font-small pt-3">
        <div class="container">
            <div class="row p-4 d-flex justify-content-between">
                <div class="col-lg-3">
                    <h5 class="font-weight-bold">Truck-trans</h5>
                    <p>
                        Firma dzialajaca od 20 lat na polskim rynku. Swiatowy potentat w branzy transportowej.
                    </p>
                </div>
                <div class="col-lg-4">
                    <p>
                        <i class="fa fa-phone pr-4" style="font-size:24px"></i> +48 000 000 000
                    </p>
                    <p>
                        <i class="fa fa-envelope-o pr-4" style="font-size:24px"></i> nasz@adres.pl
                    </p>

                    <p>
                        <i class="fa fa-home pr-4" style="font-size:24px"></i> ul.Polna 12 Warszawa
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h6 class="text-center"> Copyright: XYZ</h6>
                </div>
            </div>
        </div>
    </footer>
    <!--footer-->
    <!-- Optional JavaScript -->
    <script src="js/myScript.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  
  </body>
</html>
