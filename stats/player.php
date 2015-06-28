<html>

<head>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
<!--	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../css/PlayerStatsCustom.css"/>

	<?php require("../api/api.php") ?>

	<title>Statistics » <?php echo $_GET["name"] ?> | The #TeamR00D Network</title>

	if
</head>

<body>

	<?php
	if(!isset ($_GET["uuid"])){
		header("Location: /RoodStats/stats/statistics.php");
	}
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
					<li class="active"><a href="statistics.php"><span class="glyphicon glyphicon-chevron-left"></span> Statistics</a></li>
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
	<div class="jumbotron playerstatsjt">
		<div class="container">
			<h1>The #TeamR00D Network</h1>
			<h2>Welcome to our website!</h2>
			<h3>You are here » Statistics » <?php echo $_GET["name"] ?> <small>UUID: <?php echo $_GET["uuid"] ?></small> </h3>

		</div>
	</div>

	<br>
	<br>
	<br>
	<?php
		$data = get_player($uuid = $_GET["uuid"]);

		$player = $data->fetch_assoc();
	?>
	<div class="container">
		<div class="col-lg-3">
				<div class="panel panel-danger">
					<div class="panel-heading" align="center">Player Skin</div>
					<div class="panel-body" align="center"><img src="https://minotar.net/body/<?php echo $_GET["name"]?>/200.png"><br> </br><p><strong><?php echo $_GET["name"]?></strong></p>
					<p><small>Skins are provided by minotar.net and the Mojang API</small></p></div>
				</div>
		</div>
		<div class="col-lg-3">
			<div class="panel panel-warning">
				<div class="panel-heading" align="center">Tokens</div>
				<div class="panel-body">
					<table class="table">
						<tr>
							<td align="center"><img height="64" src="http://hydra-media.cursecdn.com/minecraft-nl.gamepedia.com/5/55/Goudklompje.png?version=3429eb0bf0245d7f396a620da0e5ea89"></td>
							<td align="center"><img height="64" src="http://hydra-media.cursecdn.com/minecraft-nl.gamepedia.com/9/93/Watch.png?version=a3c92c2c825190bb6299c4fb12ad100d"></td>
						</tr>
						<tr>
							<td class="col-lg-6" align="center"><strong><?php echo $player["tokens"] ?></strong></td>
							<td class="col-lg-6" align="center"><strong><?php echo $player["token_time"] ?>m</strong></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="panel panel-warning">
				<div class="panel-heading" align="center">Chests</div>
				<div class="panel-body">
					<table class="table">
						<tr>
							<td align="center"><img height="64" src="http://hydra-media.cursecdn.com/minecraft.gamepedia.com/b/b3/Chest.png?version=7731c76f1fcbc4176075d94371d4fc5d"></td>
							<td align="center"><img height="64" src="http://hydra-media.cursecdn.com/minecraft.gamepedia.com/0/07/Trapped_Chest.png?version=0ed383bb0c1d71025877fe4644893e9f"></td>
							<td align="center"><img height="64" src="http://vignette4.wikia.nocookie.net/feed-the-beast/images/5/5a/Ender_Chest_%28Vanilla%29.png/revision/latest?cb=20130501012710"></td>
							<td align="center"><img height="64" src="http://hydra-media.cursecdn.com/minecraft-nl.gamepedia.com/9/93/Watch.png?version=a3c92c2c825190bb6299c4fb12ad100d"></td>
						</tr>
						<tr>
							<td class="col-lg-3" align="center"><strong><?php echo $player["normal_chests"] ?></strong></td>
							<td class="col-lg-3" align="center"><strong><?php echo $player["epic_chest"] ?></strong></td>
							<td class="col-lg-3" align="center"><strong><?php echo $player["legend_chest"] ?></strong></td>
							<td class="col-lg-3" align="center"><strong><?php echo $player["chest_time"] ?>m</strong></td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<div class="col-lg-3"></div>
		<div class="col-lg-9">
			<div class="panel panel-warning">
				<div class="panel-heading" align="center">Gadget Ammo</div>
				<div class="panel-body">
					<table class="table">
						<tr>
							<td align="center"><img height="64" src="http://hydra-media.cursecdn.com/minecraft.gamepedia.com/0/04/Snowball.png?version=158559ac3e9d06f34147747caa925eee"></td>
							<td align="center"><img height="64" src="http://hydra-media.cursecdn.com/minecraft.gamepedia.com/1/1e/TNT.png?version=8ba6ad0a5b55e398a36ddb0326e87456"></td>
						</tr>
						<tr>

							<td class="col-lg-6" align="center"><strong><?php echo $player["paintball_ammo"] ?></strong></td>
							<td class="col-lg-6" align="center"><strong>0</strong></td>
						</tr>
					</table>
				</div>
			</div>
		</div>

	</div>

	<div class="container">


	</div>
</body>

</html>