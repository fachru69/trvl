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
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.2&appId=1910649445722741&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
    <!--- Article Section -->
    <div class="container">
        <div class="row border-top border-bottom">
            <div class="col-xs-12 col-md-8 border-right">
                <div class="col-md-12 border-bottom">
                    <div class="">
                        <h1 class="text-center"><?=$artikel[0]['judul_artikel']?></h1>
                        <img src="<?php echo base_url('assets/img/750x350/'.$artikel[0]['img_artikel_name'])?>" alt="Image" style="max-width: 100%;">
                        <br><br>
                        <div class="">
                            <p class="text-justify">
                                <?=$artikel[0]['full_artikel']?>
                                <br><br><br>
                                <?=$artikel[0]['tgl_artikel']?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="well">
 
    <h4>Leave a comment</h4>
 <?php $uri = $_SERVER['index_page'] . $_SERVER['REQUEST_URI']; ?>
   <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5"></div>
</div>
                </div>
            </div>
            <div class="col-xs-6 col-md-4">
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