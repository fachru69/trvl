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
    <div class="header-atas">
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
    <!--- Welcome Section -->
    <div class="home">
        <div class="text-vcenter">
            <h1>Savana</h1>
            <p>Baluran National Park // Indonesia</p>
        </div>
    </div>

    <!--- Carousel Section -->
    <div class="container-fluid">
        <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                <div class="carousel-item col-md-3  active">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail hovereffect">
                            <img class="img-fluid mx-auto d-block" src="<?php echo base_url('assets/img/280x200/01-280x200.jpg')?>" alt="slide 1">
                            <div class="overlay">
                                <h2>Bunaken</h2>
                                <a class="info" href="<?php echo base_url().'index.php/Home/detail_article'?>">Link Here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail hovereffect">
                            <img class="img-fluid mx-auto d-block" src="<?php echo base_url('assets/img/280x200/02-280x200.jpg')?>" alt="slide 2">
                            <div class="overlay">
                                <h2>Gili Trawangan</h2>
                                <a class="info" href="#">Link Here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail hovereffect">
                            <img class="img-fluid mx-auto d-block" src="<?php echo base_url('assets/img/280x200/03-280x200.jpg')?>" alt="slide 3">
                            <div class="overlay">
                                <h2>Gili Laba</h2>
                                <a class="info" href="#">Link Here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail hovereffect">
                            <img class="img-fluid mx-auto d-block" src="<?php echo base_url('assets/img/280x200/04-280x200.jpg')?>" alt="slide 4">
                            <div class="overlay">
                                <h2>Pine Forest</h2>
                                <a class="info" href="#">Link Here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail hovereffect">
                            <img class="img-fluid mx-auto d-block" src="<?php echo base_url('assets/img/280x200/05-280x200.jpg')?>" alt="slide 5">
                            <div class="overlay">
                                <h2>Mount Bromo</h2>
                                <a class="info" href="#">Link Here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail hovereffect">
                            <img class="img-fluid mx-auto d-block" src="<?php echo base_url('assets/img/280x200/06-280x200.jpg')?>" alt="slide 6">
                            <div class="overlay">
                                <h2>Prambanan Temple</h2>
                                <a class="info" href="#">Link Here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail hovereffect">
                            <img class="img-fluid mx-auto d-block" src="<?php echo base_url('assets/img/280x200/07-280x200.jpg')?>" alt="slide 7">
                            <div class="overlay">
                                <h2>Mount Rinjani</h2>
                                <a class="info" href="#">Link Here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3  ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail hovereffect">
                            <img class="img-fluid mx-auto d-block" src="<?php echo base_url('assets/img/280x200/08-280x200.jpg')?>" alt="slide 8">
                            <div class="overlay">
                                <h2>Madakaripura</h2>
                                <a class="info" href="#">Link Here</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <br>
    <!--- Article Section -->
    <div class="container">
        <div class="row border-bottom">
            <div class="col-xs-12 col-md-8 border-right">
                <div class="col-md-12">
                    <div class="bottom-border">
                        <img src="<?php echo base_url('assets/img/750x350/01-750x350.jpg')?>" alt="Image" style="max-width: 100%;">
                        <h3>Mount Rinjani</h3>
                        <p class="text-justify">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="bottom-border">
                        <img src="<?php echo base_url('assets/img/750x350/02-750x350.jpg')?>" alt="Image" style="max-width: 100%;">
                        <h3>Gili trawangan</h3>
                        <p class="text-justify">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="bottom-border">
                        <img src="<?php echo base_url('assets/img/750x350/Prambanan-Temple-Yogyakarta.jpg')?>" alt="Image" style="max-width: 100%;">
                        <h3>Prambanan Temple</h3>
                        <p class="text-justify">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-4">
                <h4 class="text-center">Popular Pieces</h4>
                <p class="text-center">Your Favorite Destination Places</p>
                <div class="col-sm-12 border-bottom">
                    <img src="<?php echo base_url('assets/img/280x200/01-280x200.jpg')?>" alt="Image" class="col-md-12">
                    <h5>Bunaken, Sulawesi Utara</h5>
                    <p class="text-justify">Bunaken merupakan salah satu destinasi wista paling favorite bagi turis international, karena adanya wisata Snorkling</p>
                    <a href="#">
                        <i class="fa fa-comment" style="font-size: 16px"></i> 125 Comments
                    </a>
                </div>
                <div class="col-sm-12 border-bottom">
                    <img src="<?php echo base_url('assets/img/280x200/02-280x200.jpg')?>" alt="Image" class="col-md-12">
                    <h5>Bunaken, Sulawesi Utara</h5>
                    <p class="text-justify">Bunaken merupakan salah satu destinasi wista paling favorite bagi turis international, karena adanya wisata Snorkling</p>
                    <a href="#">
                        <i class="fa fa-comment" style="font-size: 16px"></i> 125 Comments
                    </a>
                </div>
                <div class="col-sm-12 border-bottom">
                    <img src="<?php echo base_url('assets/img/280x200/02-280x200.jpg')?>" alt="Image" class="col-md-12">
                    <h5>Bunaken, Sulawesi Utara</h5>
                    <p class="text-justify">Bunaken merupakan salah satu destinasi wista paling favorite bagi turis international, karena adanya wisata Snorkling</p>
                    <a href="#">
                        <i class="fa fa-comment" style="font-size: 16px"></i> 125 Comments
                    </a>
                </div>
                <div class="col-sm-12 border-bottom">
                    <img src="<?php echo base_url('assets/img/280x200/02-280x200.jpg')?>" alt="Image" class="col-md-12">
                    <h5>Bunaken, Sulawesi Utara</h5>
                    <p class="text-justify">Bunaken merupakan salah satu destinasi wista paling favorite bagi turis international, karena adanya wisata Snorkling</p>
                    <a href="#">
                        <i class="fa fa-comment" style="font-size: 16px"></i> 125 Comments
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--- Featured Article Section -->
    <div class="container">
        <!-- Carousel items -->
        <h1 class="text-center">Destinasi</h1>
        <div class="row col-md-12" role="listbox">
            <div class="col-md-6 col-sm-12 col-lg-3">
                <a href="#"><img src="<?php echo base_url('assets/img/250x150/-01.jpg')?>" alt="Image1" style="max-width:100%;"></a>
                <h6>Lembah Baliem</h6><br>
                <p>Destinasi Wisata Alam di Pulau Papua</p>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-3">
                <a href="#"><img src="<?php echo base_url('assets/img/250x150/-02.jpg')?>" alt="Image2" style="max-width:100%;"></a>
                <h6>Danau Sentani</h6><br>
                <p>Destinasi Wisata Alam di Pulau Papua</p>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-3">
                <a href="#"><img src="<?php echo base_url('assets/img/250x150/-03.jpg')?>" alt="Image3" style="max-width:100%;"></a>
                <h6>Wae Rebo</h6><br>
                <p>Destinasi Wisata Budaya di Pulau Nusa Tenggara</p>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-3">
                <a href="#"><img src="<?php echo base_url('assets/img/250x150/-04.jpg')?>" alt="Image4" style="max-width:100%;"></a>
                <h6>Pantai Bokori</h6><br>
                <p>Destinasi Wisata Laut di Pulau Sulawesi</p>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-3">
                <a href="#"><img src="<?php echo base_url('assets/img/250x150/-05.jpg')?>" alt="Image5" style="max-width:100%;"></a>
                <h6>Puncak Jaya Wijaya</h6><br>
                <p>Destinasi Wista Pendakian di Pulau Papua</p>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-3">
                <a href="#"><img src="<?php echo base_url('assets/img/250x150/-06.jpg')?>" alt="Image6" style="max-width:100%;"></a>
                <h6>Raja Ampat</h6><br>
                <p>Destinasi Wisata Laut di Pulau Papua</p>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-3">
                <a href="#"><img src="<?php echo base_url('assets/img/250x150/-07.jpg')?>" alt="Image7" style="max-width:100%;"></a>
                <h6>Balekambang Beach</h6><br>
                <p>Destinasi Wisata Pantai di Pulau Jawa</p>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-3">
                <a href="#"><img src="<?php echo base_url('assets/img/250x150/-08.jpg')?>" alt="Image8" style="max-width:100%;"></a>
                <h6>Gunung Bromo</h6><br>
                <p>Destinasi Wisata Pendakian di Pulau Jawa</p>
            </div>
        </div>
        <div class="container">
            <div id="demo" class="collapse">
                <div class="row col-md-12" role="listbox">
                    <div class="col-md-6 col-sm-12 col-lg-3">
                        <a href="#"><img src="<?php echo base_url('assets/img/250x150/-01.jpg')?>" alt="Image1" style="max-width:100%;"></a>
                        <h6>Lembah Baliem</h6><br>
                        <p>Destinasi Wisata Alam di Pulau Papua</p>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-3">
                        <a href="#"><img src="<?php echo base_url('assets/img/250x150/-02.jpg')?>" alt="Image2" style="max-width:100%;"></a>
                        <h6>Danau Sentani</h6><br>
                        <p>Destinasi Wisata Alam di Pulau Papua</p>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-3">
                        <a href="#"><img src="<?php echo base_url('assets/img/250x150/-03.jpg')?>" alt="Image3" style="max-width:100%;"></a>
                        <h6>Wae Rebo</h6><br>
                        <p>Destinasi Wisata Budaya di Pulau Nusa Tenggara</p>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-3">
                        <a href="#"><img src="<?php echo base_url('assets/img/250x150/-04.jpg')?>" alt="Image4" style="max-width:100%;"></a>
                        <h6>Pantai Bokori</h6><br>
                        <p>Destinasi Wisata Laut di Pulau Sulawesi</p>
                    </div>
                </div>
            </div>
            <div class="wrapeer text-center">
            <button type="button" class="btn btn-info read-more" data-toggle="collapse" data-target="#demo">Read More</button>
            </div>
        </div>
        <!--.row-->
    </div>
    <!--.item-->
    <!--.item-->
    <!--.carousel-inner-->

    <br><br>

    <br>
    <!--- Footer Section -->
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