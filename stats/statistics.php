<html>

<head>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../css/StatisticsPageCustom.css"/>

	<title>Statistics | The #TeamR00D Network</title>
</head>

<body>
	<?php
	require("../api/api.php")
	?>

	<!--	navbar-->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="../index.php">#TeamR00D</a>
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li><a href="../index.php">Homepage</a></li>
					<li class="active"><a href="#">Statistics</a></li>
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
	<div class="jumbotron statisticsjt">
		<div class="container">
			<h1>The #TeamR00D Network</h1>
			<h2>Welcome to our website!</h2>
			<h3>You are here » Statistics</h3>
		</div>
	</div>

	<div class="container">
		<div class="page-header">
			<h1>All Statistics</h1>
		</div>
	</div>

	<div class="container">
		<table class="table table-responsive">
			<tr>
				<th>User</th>
				<th>Tokens</th>
				<th> </th>

				<?php
				$data = get_all();

				while($player = $data->fetch_assoc()){
				?>
			</tr>
			<tr>
				<td class="col-lg-2"><a href="#" data-toggle="popover" title="Player UUID" data-trigger="hover" data-placement="bottom" data-content=<?php echo $player["uuid"]?>> <?php echo $player["last_name"]?> </a></td>
				<td class="col-lg-1"><a href="#" data-toggle="popover" title="Token Timer" data-trigger="hover" data-placement="bottom" data-content="<?php echo $player["token_time"]?>m"> <?php echo $player["tokens"]?> </a></td>
				<td class="col-lg-9" align="right"><a href="player.php?uuid=<?php echo $player["uuid"]?>&name=<?php echo $player["last_name"]?>" class="btn btn-success btn-xl text-center" role="button">View
						<?php echo $player["last_name"]?> <i class="glyphicon glyphicon-chevron-right"></i></a></td>
			</tr>

			<?php } ?>
		</table>
	</div>

	<script>
		$(document).ready(function(){
			$('[data-toggle="popover"]').popover();
		});
	</script>
</body>

</html>