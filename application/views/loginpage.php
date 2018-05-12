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
    <title>chips ahoy</title>
	<!-- Load your Bootstrap CSS Here -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <!-- Load your CSS Style Here! -->
	<link href="../css/loginstyle.css" rel="stylesheet">
	<link href="../css/construct.css" rel="stylesheet">
	<!-- Script -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="../js/JavaScript.js"></script>
</head>
<body>
	<!-- Form Area -->
	<div class = "container-fluid form-contain">
		<?php $atribut = array(
            'class' => 'login-form',
			'role' => 'form'
        );?>
        <?php
            echo form_open("Login_C/cek_login",$atribut);
        ?>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<center class="sign-in" style="margin-top: 5%"><h3>Sign in to get benefits!</h3></center>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="email-cont" for="email" style="margin-top: 4%">Email</label>
						<input type="email" name="email" class="form-control" placeholder="you@example.com" required id="Email">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="pass-cont" for="password">Password</label>
						<input type="password" name="password" class="form-control" placeholder="enter password" required id="pass">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6 inline">
					<input class="btn btn-dark btn-in btn-block" id="submit" type="submit" value="Submit">
					<a href="<?php echo site_url('Register_C/index') ?>">Dont have an account?</a>
				</div> 
			</div>
		</form>
	</div>
</html>
