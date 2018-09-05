<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">
    <script src="<?php echo base_url('assets/js/style.js')?>"></script>
</head>

<body>

    <!-- Header Section -->
    <div class="header-atas border-bottom">
        <h3 class="text-center pt-5">Travel Bucket List</h3>
        <!--- Navigation Section -->
        <nav class="text-center navbar-expand-md navbar-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"><span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto mr-auto">
                        <a class="nav-link" href="<?php echo base_url('index.php/Home')?>">Home</a>
                        <a class="nav-link" href="<?php echo base_url('index.php/Beautiful')?>">Beautiful Indonesia</a>
                        <a class="nav-link" href="<?php echo base_url('index.php/Marvel')?>">Indonesia Marvel</a>
                        <a class="nav-link" href="<?php echo base_url('index.php/About')?>">About Me</a>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <br><br>
    <!-- Badan-->
    <div class="container">
        <div class="text-center">
            <h1>Indonesia Marvels</h1>
            <p>Explore</p>
        </div>
        <div class="col-lg-12">
           <div class="row">
            <div class="col-md-3">
                <a href="#"><img src="<?php echo base_url('assets/img/marvel/Fiordland%20National%20Park,%20New%20Zealand.jpg')?>" alt="Image" class="img-thumbnail"></a>
                <h6>Fiordland National Park</h6><br>
                <p>Type your Post</p>
            </div>
            <div class="col-md-3">
                <a href="#"><img src="<?php echo base_url('assets/img/marvel/gibbon-experience-in-Huay-Xai-Laos.jpg')?>" alt="Image" class="img-thumbnail"></a>
                <h6>Huay Xai - Laos</h6><br>
                <p>Type your Post</p>
            </div>
            <div class="col-md-3">
                <a href="#"><img src="<?php echo base_url('assets/img/marvel/Halong-Bay.jpg')?>" alt="Image" class="img-thumbnail"></a>
                <h6>Halong Bay - Vietnam</h6><br>
                <p>Type your Post</p>
            </div>
            <div class="col-md-3">
                <a href="#"><img src="<?php echo base_url('assets/img/marvel/Salar%20de%20Uyuni%20-%20Bolivia.jpg')?>" alt="Image" class="img-thumbnail"></a>
                <h6>Salar de Uyuni - Bolivia</h6><br>
                <p>Type your Post</p>
            </div>
            <div class="col-md-3">
                <a href="#"><img src="<?php echo base_url('assets/img/marvel/maashey%20lake%20%20-%20russian.jpg')?>" alt="Image" class="img-thumbnail"></a>
                <h6>Maashey Lake - Russia</h6><br>
                <p>Type your Post</p>
            </div>
            <div class="col-md-3">
                <a href="#"><img src="<?php echo base_url('assets/img/marvel/Mongolia.jpg')?>" alt="Image" class="img-thumbnail"></a>
                <h6>Mongolian Camp</h6><br>
                <p>Type your Post</p>
            </div>
            <div class="col-md-3">
                <a href="#"><img src="<?php echo base_url('assets/img/marvel/tigers-nest-bhutan1-1600x900.jpg')?>" alt="Image" class="img-thumbnail"></a>
                <h6>Tigers Nest - Bhutan</h6><br>
                <p>Type your Post</p>
            </div>
            <div class="col-md-3">
                <a href="#"><img src="<?php echo base_url('assets/img/marvel/torres-del-paine-national-park-patagonia.adapt.885.1.jpg')?>" alt="Image" class="img-thumbnail"></a>
                <h6>Torres del Paine - Patagonia</h6><br>
                <p>Type your Post</p>
            </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer" id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4  col-md-2 col-md-4 col-xs-6">
                        <h3> 2018 Travis Bracket List </h3>
                    </div>
                    <div class="col-lg-4  col-md-2 col-md-4 col-xs-6">
                        <ul class="social">
                            <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
                        </ul>
                    </div>
                    <div class="col-lg-4  col-md-3 col-md-4 col-xs-12 ">
                        <h3> Newsletter </h3>
                        <ul>
                            <li>
                                <div class="input-append newsletter-box text-center">
                                    <input type="text" class="full text-center" placeholder="Email ">
                                    <button type="button" class="btn btn-primary btn-sm btn-block">Subscribe</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </footer>
</body>

</html>