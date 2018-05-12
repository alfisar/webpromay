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
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/construct.css">
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
				<div class="col-md-12">
					<div class="card-deck" id="deck">
			<?php	}?>
						<div class="card" id="product1">
							<img class="card-img-top" src="<?php echo base_url()?>/assets/img/product/<?php echo $brg->nama?>.jpg">
							<div class="card-body">
								<h4 id="card-title"><?php echo $brg->nama?></h4>
								<a href="<?php echo site_url('Desc_C/index')?>?idproduk=<?php echo $brg->idbarang?>">
									<p class="card-text">
										<?php echo "$".$brg->harga.".00"?>
									</p>
								</a>
							</div>
						</div>
			<?php
					if (($i % 4 == 0) && ($i != 0)) { // penutup div untuk row
			?>
					</div>
				</div>
			</div>
			<?php } $i++; ?>
		<?php  } ?>
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
