<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
	<script type="text/javascript" href="asset/js/jquery.js"></script>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center mt-5">
			<div class="col-md-5">
				<div class="card">
					<div class="card-body">
						<h1 class="card-title">Login</h1>
						<form action="proses.php" method="post">
							<div class="form-group">
								<input type="text" name="username" class="form-control" placeholder="Nama">
							</div>
							<div class="form-group">
								<input type="password" name="password" class="form-control" placeholder="Password">
							</div>
							<div class="form-group">
								<input type="submit" name="login" class="btn btn-primary" value="Login">
							</div>
						</form>
					</div>
				</div>
			</div>				
		</div>
	</div>
</body>
</html>