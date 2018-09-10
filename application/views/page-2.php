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
                        <a class="nav-link" href="<?php echo base_url('index.php/Admin')?>">Admin</a>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <br><br>
    <!--- Article Section -->
    <div class="container">
        <div class="row border-top border-bottom">
            <div class="col-xs-12 col-md-8 border-right">
                <div class="col-md-12 border-bottom">
                    <div class="">
                        <h1 class="text-center">Lembah Baliem</h1>
                        <img src="assets/img/pic/Lembah-Baliem.jpg" alt="Image" style="max-width: 100%;">
                        <br>
                        <div class="">
                            <p class="text-justify">
                                Lembah Baliem merupakan lembah di pegunungan Jayawijaya. Lembah Baliem berada di ketinggian 1600 meter dari permukaan laut yang dikelilingi pegunungan dengan pemandangannya yang indah dan masih alami. Suhu bisa mencapai 10-15 derajat celcius pada waktu malam.
                                <br>
                                Lembah ini dikenal juga sebagai grand baliem valley merupakan tempat tinggal suku Dani yang terletak di Desa Wosilimo, 27 km dari Wamena, Papua. Selain Suku Dani beberapa suku lainnya hidup bertetangga di lembah ini yakni Suku Yali dan suku Lani.
                                <br>
                                Lembah adalah sekitar 80 km panjang sebesar 20 km dengan lebar dan terletak di ketinggian sekitar 1,600-1,700 m, dengan populasi sekitar 100.000 jiwa.
                                <br>
                                Penemuan Lembah Baliem dan kehadiran tak terduga dari populasi yang besar pertaniannya ditemukan oleh ekspedisi ketiga zoologi Richard Archbold untuk New Guinea pada tahun 1938. Pada tanggal 21 Juni sebuah selatan penerbangan udara Reconnaissance dari Hollandia (sekarang Jayapura) menemukan apa ekspedisi disebut 'Grand Valley'. Secara bertahap kemudian lembah sejak itu telah dibuka terbatas untuk pariwisata yaitu dengan adanya Festival Lembah Baliem.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="well">

                        <h4>Leave a comment</h4>

                        <form role="form" class="clearfix">

                            <div class="col-md-6 form-group">
                                <label class="sr-only" for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Name">
                            </div>

                            <div class="col-md-6 form-group">
                                <label class="sr-only" for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>

                            <div class="col-md-12 form-group">
                                <label class="sr-only" for="email">Comment</label>
                                <textarea class="form-control" id="comment" placeholder="Comment"></textarea>
                            </div>

                            <div class="col-md-12 form-group text-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                        </form>
                        <ul id="comments" class="comments">
                            <li class="comment">
                                <div class="clearfix">
                                    <h4 class="pull-left">John</h4>
                                    <p class="pull-right">9:41 PM on August 24, 2013</p>
                                </div>
                                <p>
                                    <em>I don't believe in astrology but still your writing style is really great!</em>
                                </p>
                            </li>

                            <li class="comment clearfix">
                                <div class="clearfix">
                                    <h4 class="pull-left">John</h4>
                                    <p class="pull-right">9:41 PM on August 24, 2013</p>
                                </div>
                                <p>
                                    <em>I don't believe in astrology but still your writing style is really great!</em>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-4">
                <h4 class="text-center">Popular Pieces</h4>
                <p class="text-center">Your Favorite Destination Places</p>
                <div class="col-sm-12 border-bottom">
                    <img src="assets/img/280x200/01-280x200.jpg" alt="Image" class="col-md-12">
                    <h5>Bunaken, Sulawesi Utara</h5>
                    <p class="text-justify">Bunaken merupakan salah satu destinasi wista paling favorite bagi turis international, karena adanya wisata Snorkling</p>
                    <a href="#">
                        <i class="fa fa-comment" style="font-size: 16px"></i> 125 Comments
                    </a>
                </div>
                <div class="col-sm-12">
                    <img src="assets/img/280x200/02-280x200.jpg" alt="Image" class="col-md-12">
                    <h5>Gili Trawangan, Lombok</h5>
                    <p class="text-justify">Bunaken merupakan salah satu destinasi wista paling favorite bagi turis international, karena adanya wisata Snorkling</p>
                    <a href="#">
                        <i class="fa fa-comment" style="font-size: 16px"></i> 125 Comments
                    </a>
                </div>
                <div class="container">
                    <div id="demo" class="collapse">
                        <div class="col-sm-12 border-bottom">
                            <img src="assets/img/280x200/02-280x200.jpg" alt="Image" class="col-md-12">
                            <h5>Bunaken, Sulawesi Utara</h5>
                            <p class="text-justify">Bunaken merupakan salah satu destinasi wista paling favorite bagi turis international, karena adanya wisata Snorkling</p>
                            <a href="#">
                                <i class="fa fa-comment" style="font-size: 16px"></i> 125 Comments
                            </a>
                        </div>
                        <div class="col-sm-12">
                            <img src="assets/img/280x200/02-280x200.jpg" alt="Image" class="col-md-12">
                            <h5>Bunaken, Sulawesi Utara</h5>
                            <p class="text-justify">Bunaken merupakan salah satu destinasi wista paling favorite bagi turis international, karena adanya wisata Snorkling</p>
                            <a href="#">
                                <i class="fa fa-comment" style="font-size: 16px"></i> 125 Comments
                            </a>
                        </div>
                    </div>
                    <div class="wrapeer">
                        <button type="button" class="btn btn-info read-more" data-toggle="collapse" data-target="#demo">Read More</button>
                    </div>
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