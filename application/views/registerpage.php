<?php
	// by nim = 1301164036 /alfisar 1301164550 / amalia
	include 'header.php'; ?>
<?php
if ($this->session->flashdata('alert')=='sukses_daftar'){
    echo "<script>alert('Sukses Mendaftar, Silahkan Login');</script>";
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
	<link href="css/construct.css" rel="stylesheet">
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
			echo form_open("Register_C/daftar_akun",$atribut);
        ?>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<center class="sign-in" style="margin-top: 5%"><h3>Register</h3></center>
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
						<input type="password" name="pass1" class="form-control" placeholder="enter password" required id="pass">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="pass2-cont" for="password">Confirm Password</label>
						<input type="password" name="pass2" class="form-control" placeholder="enter password" required id="pass2">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6 inline">
					<input class="btn btn-dark btn-in btn-block" id="submit" type="submit" value="Submit">
					<a href="<?php echo site_url('Login_C/index') ?>">Already have an account?</a>
				</div> 
			</div>
		</form>
	</div>
</html>
