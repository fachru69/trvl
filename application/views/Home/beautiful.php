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
            <h1>Beautiful Indonesia</h1>
            <p>Explore Indonesia</p>
        </div>
        <div class="col-lg-12">
           <div class="row">
            <div class="col-md-3">
                <a href="#"><img src="<?php echo base_url('assets/img/250x150/-01.jpg')?>" alt="Image" style="max-width:100%;"></a>
                <h6>Lembah Baliem</h6><br>
                <p>Type your Post</p>
            </div>
            <div class="col-md-3">
                <a href="#"><img src="<?php echo base_url('assets/img/250x150/-02.jpg')?>" alt="Image" style="max-width:100%;"></a>
                <h6>Danau Sentani</h6><br>
                <p>Type your Post</p>
            </div>
            <div class="col-md-3">
                <a href="#"><img src="<?php echo base_url('assets/img/250x150/-03.jpg')?>" alt="Image" style="max-width:100%;"></a>
                <h6>Wae Rebo</h6><br>
                <p>Type your Post</p>
            </div>
            <div class="col-md-3">
                <a href="#"><img src="<?php echo base_url('assets/img/250x150/-04.jpg')?>" alt="Image" style="max-width:100%;"></a>
                <h6>Bokori Beach</h6><br>
                <p>Type your Post</p>
            </div>
            <div class="col-md-3">
                <a href="#"><img src="<?php echo base_url('assets/img/250x150/-05.jpg')?>" alt="Image" style="max-width:100%;"></a>
                <h6>The Peak Jaya Wijaya</h6><br>
                <p>Type your Post</p>
            </div>
            <div class="col-md-3">
                <a href="#"><img src="<?php echo base_url('assets/img/250x150/-06.jpg')?>" alt="Image" style="max-width:100%;"></a>
                <h6>Raja Ampat</h6><br>
                <p>Type your Post</p>
            </div>
            <div class="col-md-3">
                <a href="#"><img src="<?php echo base_url('assets/img/250x150/-07.jpg')?>" alt="Image" style="max-width:100%;"></a>
                <h6>Balekambang Beach</h6><br>
                <p>Type your Post</p>
            </div>
            <div class="col-md-3">
                <a href="#"><img src="<?php echo base_url('assets/img/250x150/-08.jpg')?>" alt="Image" style="max-width:100%;"></a>
                <h6>Mount Bromo</h6><br>
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