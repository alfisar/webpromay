<?php
// by nim = 1301164318 / max dan 1301164550 / amalia
//include 'header.php';
if ($this->session->flashdata('alert')=='gagal_login'){
    echo "<script>alert('Username / Password Salah!');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Savoy - Login </title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

        <link href="<?php echo base_url('assets/css/login.css')?>" rel="stylesheet">
    </head>
    <body>
        <!-- Form Area -->
        <div class = "container-fluid">
            <?php $atribut = array(
    'class' => 'login-form',
    'role' => 'form'
);?>
            <?php
            echo form_open("Login_C/cek_login",$atribut);
            ?>
            <div class="row sign-bg">
                <div class="col-sm-12">
                    <h2 class="text-center">Sign in to get benefits!</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="email-cont" for="email" style="margin-top: 4%"><h5>Email</h5></label>
                        <input type="email" name="email" class="form-control" placeholder="you@example.com" required id="Email">
                    </div>
                    <div class="form-group">
                        <label class="pass-cont" for="password"><h5>Password</h5></label>
                        <input type="password" name="password" class="form-control" placeholder="enter password" required id="pass">
                    </div>
                    <div class"form-group">
                       <button class="btn btn-in form-control" type="submit" id="submit">
                           Submit
                       </button>
                    </div>
                    <p class = "text-center regme mt-5">
                        <a href="<?php echo site_url('Register_C/index') ?>">Dont have an account?</a>
                    </p>
                </div>
            </div>
        </div>
        </html>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/JavaScript.js""></script>
