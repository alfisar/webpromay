<!DOCTYPE html>
<?php
	// by nim = 1301164318 / max
	include 'header.php'; ?>
<head>
    <title> Card </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/construct.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/description.css">
</head>

<body>
	<!-- make header.php kann???????
    <div class="container-fluid no-space">
        <div class="row row-header no-space">
            <div class="col-md-12">
                <nav class="navbar navbar-default middlein">
                    <a class="navbar-brand" href="#">Savoy</a>
                    <ul class="nav navbar-left">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Catalog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-right" id="ul2">
                        <li class="nav-item">
                            <a class="nav-link" href="form_ketiga" id="In"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cart
                                <sup id="quantityNum"> 0</sup>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
     content here -->
    <div class="product-information" id="product">
        <div class="container-fluid">
            <div class="row row-product-showcase">
                <div class="col-md-6">
                    <img src="<?php echo base_url()?>/assets/img/product/<?php echo $barang->nama?>.jpg" class="product-image">
                </div>
                <div class="col-md-6">
                    <div class="containter-fluid">
                        <div class="row row-product-cap justify-content-center">
                            <div class="col-md-8">
                                <h2 id="productName"><?php echo $barang->nama?></h2>
                                <h5 id="productPrice">$<?php echo $barang->harga?>.00</h5>
                                <p id="productCaption"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus blanditiis nisi
                                    perspiciatis doloribus temporibus, eligendi ex dignissimos deleniti natus nihil illo
                                    facere asperiores architecto commodi doloremque aliquam placeat omnis quibusdam?</p>
                                <div class="container-fluid">
                                    <div class="row row-product-quantity">
                                        <div class="col-md-12">
                                            <!-- <div class="row justify-content-center product-quantity no-space">
                                                <div class="col-md-4 text-center">
                                                    <button class="btn" id="btnSubtractProduct">-</button>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                    <p id="quantityProduct" class="no-space">0</p>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                    <button class="btn" id="btnAddingProduct">+</button>
                                                </div>
                                            </div> -->
                                            <form action="<?php echo base_url()?>index.php/Billing_C/index/<?php echo $barang->idbarang;?>">
                                            <div class="row">
                                                <div class="col-md-12 no-space">
                                                    <button class="btn" id="btnAddToCart" >Add to Cart</button>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-description">
        <div class="container-fluid">
            <div class="row row-product-description justify-content-center">
                <div class="col-md-8 text-center">
                    <h3>Description</h3>
                </div>
            </div>
            <div class="row row-product-description justify-content-center">
                <div class="col-md-8">
                    <p id="descriptionText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde delectus dicta, eveniet sit nostrum temporibus
                        quam. Eaque cumque quos praesentium inventore voluptatibus architecto, atque, soluta, veniam earum
                        libero dolorum quae Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste accusamus labore
                        ducimus necessitatibus quasi ratione. Temporibus ratione assumenda quos corrupti porro laborum soluta
                        facere et neque dignissimos, tenetur molestias vero. </p>
                </div>
            </div>
        </div>
    </div>
	<div class="container-fluid">
        <div class="row justify-content-center product-identity">
                <div class="col-md-8 text-center">
                    <p>Product code :
                        <span id="productId"><?php echo $barang->idbarang?></span>
                    </p>
			</div>
        </div>
        <div class="row">
                <div class="col-sm-12">
                    <p class="font-normal-weight text-center comment"><a href="<?php echo site_url('Comment_C/index')?>?idproduk=<?php echo $barang->idbarang?>">See Comments</a></p>
            </div>
		</div>
    </div>
    <div class="product-recommend">
        <div class="container-fluid">
            <div class="row row-title-recommend">
                <div class="col-md-4">
                    <h3>Recommended Product</h3>
                </div>
            </div>
            <div class="row row-item-recommend">
                <div class="col-md-12">
                    <!-- First Row -->
                    <div class="card-deck">
                        <div class="card" id="productt1">
                            <img class="card-img-top" src="">
                            <div class="card-body">
                                <h4 id="card-title"></h4>
                            <a href="">
                                <p class="card-text">
                                </p>
                            </a>
                            </div>
                        </div>
                        <div class="card" id="productt2">
                            <img class="card-img-top" src="">
                            <div class="card-body">
                                <h4 id="card-title"></h4>
                            <a href="">
                                <p class="card-text">
                                </p>
                            </a>
                            </div>
                        </div>
                        <div class="card" id="productt3">
                            <img class="card-img-top" src="">
                            <div class="card-body">
                                <h4 id="card-title"></h4>
                            <a href="">
                                <p class="card-text">
                                </p>
                            </a>
                            </div>
                        </div>
                        <div class="card" id="productt4">
                            <img class="card-img-top" src="">
                            <div class="card-body">
                                <h4 id="card-title"></h4>
                            <a href="">
                                <p class="card-text">
                                </p>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of content -->
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
    
