<html>

	<head>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link href="css/HomePageCustom.css" rel="stylesheet"/>
		<link href="css/circlebuttons.css" rel="stylesheet"/>
		<link href="css/animate.css" rel="stylesheet"/>
		<title>Homepage | The #TeamR00D Network</title>
	</head>

	<body>

<!--	Navbar-->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">#TeamR00D</a>
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Homepage</a></li>
					<li><a href="stats/statistics.php">Statistics</a></li>
					<li><a href="#">Market</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#register" data-toggle="modal" data-target="#register"><span class="glyphicon glyphicon-user"></span> Sign Up</a> </li>
					<li><a href="#login" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> Login</a> </li>
				</ul>
			</div>
		</div>
	</nav>

<!--	Login Form-->
	<div class="modal fade" id="login">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title">Login</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="username">Username</label>
						<input class="form-control" id="username" placeholder="Username" type="text">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input class="form-control" id="password" placeholder="Password" type="password">
					</div>
					<p class="text-right"><a href="#">Forgot password?</a></p>
				</div>
				<div class="modal-footer">
					<a href="#" data-dismiss="modal" class="btn btn-danger">Close</a>
					<a href="#" class="btn btn-success">Login</a>
				</div>
			</div>
		</div>
	</div>

<!--	Signup Help-->
	<div class="modal fade" id="register">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title">Sign Up</h4>
				</div>
				<div class="modal-body">
					<i>In order to Sign Up you need to follow these steps:</i>
					<h4>Step 1</h4>
					<p>Login with the MC account that you want to register on our Minecraft server: xxx.xxx.xxx.xxx</p>
					<h4>Step 2</h4>
					<p>Run the command <strong>/webregister [password]</strong></p>
					<h4>Step 3</h4>
					<p>Login with your Minecraft username and password here.</p>
					<h4>Step 4</h4>
					<p>That's it! You're done! GG!</p>
				</div>
				<div class="modal-footer">
					<a href="#" data-dismiss="modal" class="btn btn-danger">Close</a>
				</div>
			</div>
		</div>
	</div>

<!--	Jumbotron-->
	<div class="jumbotron homepagejt animated slideInDown">
		<div class="container">
			<h1>The #TeamR00D Network</h1>
			<h3>Welcome to our website! <small>Website Progress:</small></h3>
			<div align="center">
				<div class="progress">
					<div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar"
						 aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width:15%">Overall (15%)</div>
				</div>
				<div class="progress">
					<div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar"
						 aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width:5%">Statistics (5%)</div>
				</div>
				<div class="progress">
					<div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar"
						 aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">Market (0%)</div>
				</div>
			</div>
		</div>
	</div>

<!--	page header-->
	<div class="container">
		<div class="page-header animated fadeIn">
			<h1>Homepage</h1>
		</div>
	</div>

	<div class="container">
<!--		Statistics-->
		<div class="col-lg-6">
			<div class="panel panel-primary animated slideInLeft ">
				<div class="panel-heading">
					<div align="center">Statistics</div>
				</div>
				<div class="panel-body">
					<div align="center">
						<button type="button" class="btn btn-primary btn-circle btn-xl disabled text-center"><i class="glyphicon glyphicon-stats"></i></button>
						View the statistics of our players here.
					</div>
					<div align="right"><a href="stats/statistics.php" class="btn btn-primary btn-xl text-center" role="button">View Statistics <i class="glyphicon glyphicon-chevron-right"></i></a></div>
				</div>
			</div>
		</div>
<!--		Market-->
		<div class="col-lg-6">
			<div class="panel panel-primary animated slideInRight">
				<div class="panel-heading">
					<div align="center">Market</div>
				</div>
				<div class="panel-body">
					<div align="center">
						<button type="button" class="btn btn-primary btn-circle btn-xl disabled text-center"><i class="glyphicon glyphicon-eur"></i></button>
						View market of the ingame items here.
					</div>
					<div align="right"><button type="button" class="btn btn-primary btn-xl text-center">View Listings <i class="glyphicon glyphicon-chevron-right"></i></button></div>
				</div>
			</div>
		</div>
	</div>

	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	</body>

</html>