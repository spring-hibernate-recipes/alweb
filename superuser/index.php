<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport"
	content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Admin Console :: AryaLinux</title>
<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<script src="js/jquery-1.12.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href='https://fonts.googleapis.com/css?family=Bevan'
	rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="style.css">
<link
	href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600italic,700,700italic'
	rel='stylesheet' type='text/css'>
<script type="text/javascript" src="functions.js"></script>
</head>

<body>
	<div class="container container-table">
		<div class="row vertical-center-row">
			<div class="text-center col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title" style="font-family: 'Open Sans', cursive">
							AryaLinux Admin Console</h3>
					</div>
					<div class="panel-body">
						<form id="form0" method="post" action="auth.php">
							<div class="form-group">
								<label for="username">Username</label> <input type="text"
									name="username" class="form-control" id="username"
									placeholder="Username">
							</div>
							<div class="form-group">
								<label for="password">Password</label> <input type="password"
									name="password" class="form-control" id="password"
									placeholder="Password">
							</div>
							<button type="submit" class="btn btn-danger" id="loginBtn">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
