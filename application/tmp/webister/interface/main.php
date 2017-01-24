<?php echo file_get_contents("data/loginhead"); ?>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://bootswatch.com/darkly/bootstrap.css">

	
	<div class="login-page bk-img">
		<div class="form-content">
			<div class="container">
				<div class="row">
				
					<div class="col-md-6 col-md-offset-3">
						<h1 class="text-center text-bold text-light mt-4x">Sign in to <img src="<?php echo file_get_contents("data/logo");?>"></h1>
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">
								<form action="index.php?page=val" class="mt" method="POST">
									<?php if (isset($_GET["error"])) {?>
<div class="alert alert-danger">
  <strong>Danger!</strong> The username or password was not found.
</div>
<?php } ?>
									<label for="" class="text-uppercase text-sm">Your Username or Email</label>
									<input type="text" placeholder="Username" class="form-control mb" name="user">

									<label for="" class="text-uppercase text-sm">Password</label>
									<input type="password" placeholder="Password" class="form-control mb" name="pass">

								
									<button class="btn btn-primary btn-block" type="submit">LOGIN</button>
	<a class="btn btn-primary btn-block" href="adminer-4.2.4.php">LOGIN TO MYSQL</a>

								</form>
							</div>
						</div>
						<div class="text-center text-light">
							<a href="" class="text-light">Powered using <a href="http://alwaysontop617.github.io/webister/">Webister</a></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
<?php echo file_get_contents("data/loginfoot"); ?>