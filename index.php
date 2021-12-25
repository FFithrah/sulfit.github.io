<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
    
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Masukkan Identitas Anda </h3>
		      	<form action="Lombok.php" class="signin-form" method="post">
		      		<div class="form-group">
		      			<input type="text" name="Nama" class="form-control" placeholder="Nama" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="text" name="Email" class="form-control" placeholder="Email" required>
	             
	            </div>
	            <div class="form-group">
	            	<button type="submit"  name="proses" class="form-control btn btn-primary submit px-3" >Sign In</button>
	            </div>
	            
	          
		      </div>
				</div>
			</div>
		</div>
	</section>

    <?php
    include "koneksi.php";

    if(isset($_POST['proses'])){
        mysqli_query($koneksi,"insert into login set
        Nama = '$_POST[Nama]',
        Email = '$_POST[Email]'");
    }

    ?>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

