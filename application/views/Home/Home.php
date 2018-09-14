<!--?php 
print_r ($artikel) ? -->
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
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/font-awesome.min.css'?>">
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
                        <a class="nav-link" href="<?php echo base_url('index.php/Login')?>">+ Article</a>
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
                <?php foreach($caro_artikel as $far){
 ?>
                <div class="carousel-item col-md-3  active">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail hovereffect">
                            <img class="img-fluid mx-auto d-block" src="<?php echo base_url('assets/img/feat/'.$far['img_feat_name'])?>" alt="slide 1">
                            <div class="overlay">
                                <h2><?=$far['judul_feat']?></h2>
                                <a class="info" href="<?php echo base_url().'index.php/Home/detail_article/1'?>">Link Here</a>
                            </div>
                        </div>
                    </div>
                </div>
  <?php }
                ?>              
                
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
            <div class="col-xs-12 col-lg-8 border-right">
               <?php foreach($artikel as $art){
 ?>
                <div class="col-lg-12 border-bottom">
                    <div class="bottom-border">
                        <a href="<?php echo base_url('index.php/Home/page_art/'.$art['id_artikel'])?>"><img src="<?php echo base_url('assets/img/750x350/'.$art['img_artikel_name'])?>" alt="Image" class="img-artikel-home col-md-12" style="width: 750px; height: 350px;"></a>
                        <h3><?=$art['judul_artikel']?></h3>
                        <p class="text-justify">
                        <?=$art['konten_artikel']?>
                        </p>
                        <br>
                        <?=$art['tgl_artikel']?>
                    </div>
                </div>
                
<?php } ?>                
            </div>
            <div class="col-xs-6 col-lg-4">
                <h4 class="text-center">Popular Pieces</h4>
                <p class="text-center">Your Favorite Destination Places</p>
                <div class="col-sm-12 border-bottom">
                   <?php foreach($feat_artikel as $fa){
 ?>
                    <img src="<?php echo base_url('assets/img/feat/'.$fa['img_feat_name'])?>" alt="Image" class="col-md-12">
                    <h5><?=$fa['judul_feat']?></h5>
                    <p class="text-justify"><?=$fa['isi_feat']?></p>
                    <a href="#">
                        <i class="fa fa-comment" style="font-size: 16px"></i> 125 Comments
                    </a>
                    <?php }
 ?>
                </div>
            </div>
        </div>
    </div>
    <!--- Featured Article Section -->
    <div class="container">
        <!-- Carousel items -->
        <h1 class="text-center">Destinasi</h1>
        <div class="row col-md-12" role="listbox">
           <?php foreach($destinasi as $dest){
    
 ?>
            <div class="col-md-6 col-sm-12 col-lg-3">
                <a href="#"><img src="<?php echo base_url('assets/img/250x150/'.$dest['img_dest_name'])?>" alt="Image1" style="max-width:100%;"></a>
                <h6><?=$dest['judul_destinasi']?></h6><br>
                <p><?=$dest['isi_destinasi']?></p>
            </div>
            <?php }?>
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