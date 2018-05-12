<!DOCTYPE html>
<html>
    <?php
    // by nim = 1301164401 / fajar rizqi
    include 'header.php';
    ?>
    <head>
        <title> Card </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
              crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/construct.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/open-iconic/font/css/open-iconic-bootstrap.min.css">
        <style>
            .bottom-bar{
                border-top: 1px solid #b7b7b7;
                border-bottom: 1px solid #b7b7b7;
                height: 9vh;
            }
            
            .bottom-bar p{
                margin-top: 1em;
                color: #b7b7b7;
            }
        </style>
    </head>
    <body>
        <div class="jumbotron jumbotron-fluid no-space jumbo-header">
            <div class="container-fluid header-caption">
                <h1>Savoy</h1>
                <p>Buy everything you need in premium quality</p>
            </div>
        </div>

        <div class="container-fluid">
            <?php 
            //Melakukan perulangan untuk membuat card
            $i = 1;
            foreach ($barang as $brg) {
                if ($i % 4 == 1) { // if untuk membuat row apa saat card sudah 4                                 
            ?>
            <div class="row row-space">
                <?php	}?>
                <div class="col-6 col-sm-6 col-md-3 mb-4">
                    <div class="card">
                        <div class="img-view-bg">
                            <a href="<?php echo site_url('Desc_C/index')?>?idproduk=<?php echo $brg->idbarang?>">
                                <img class="card-img-top img-view" src="<?php echo base_url()?>/assets/img/product/<?php echo $brg->nama?>.jpg">
                            </a>
                            <div class="img-mid-btn">
                                <a href="<?php echo site_url('Desc_C/index')?>?idproduk=<?php echo $brg->idbarang?>"><h1><span class="oi oi-magnifying-glass"></span></h1></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 id="card-title" style="width= 100%;"><?php echo $brg->nama?> <?php echo " "." ";?><span class="oi oi-heart" style="float: right"></span> </h4>
                            <p class="card-text">
                                <a href="<?php echo site_url('Desc_C/index')?>?idproduk=<?php echo $brg->idbarang?>">   <?php echo "$".$brg->harga.".00"?></a>
                            </p>
                        </div>
                    </div>
                </div>
                <?php
                    if (($i % 4 == 0) && ($i != 0)) { // penutup div untuk row
                ?>
            </div>
            <?php } $i++; ?>
            <?php  } ?>

            <div class="row row-space">
                <div class="col-sm-12">
                    <div class="bottom-bar">
                        <p class="text-center">All products are loaded.</p>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <nav class="navbar for-footer">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Order Tracking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </nav>
        </footer>
    </body>

</html>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/wishlist.js"></script>
