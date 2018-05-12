<html>
	<!--
		by nim = 1301164401 / fajar rizqi
	-->
    <head>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/construct.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/css/headfoot.css">
		
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-light sticky-top header-top">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 twocollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Catalog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="mr-auto order-0">
                <button class="navbar-toggler justify-content-start" type="button" data-toggle="collapse" data-target=".twocollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="mx-auto order-0">
                <a class="navbar-brand brand mx-auto" href="<?php echo site_url('Landing_C/index') ?>">Savoy</a>
            </div>
            <div class="navbar-collapse collapse w-100 order-3 twocollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <?php 
                            if ($this->session->userdata('username')!== null) {
                        ?>
                                <li class="nav-item"> 
                                    <a class="nav-link" href="<?php echo site_url('Profile_C/index') ?>">My Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('Logout_C/index')?>">Logout</a>
                                </li>
                        <?php
                            }
                            else {
                        ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('Login_C/index') ?>">Sign in</a>
                            </li>
                        <?php 
                            }
                        ?>
                </ul>
            </div>
            <ul class="nav ml-auto order-md-4 order-sm-0">
                <li class="nav-item cart">
                    <a href="#" class="nav-link">Cart <sup id="quantityCart">0</sup></a>
                </li>
            </ul>
        </nav>
    </body>

</html>
