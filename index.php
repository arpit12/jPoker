<!DOCTYPE HTML>
<html>
<head>
<link rel='stylesheet' href='css/poker.css'>
<link rel='shortcut icon' href='graphics/favicon.png'>
<title>jPoker v1.0</title>
<script src='js/jquery-1.6.2.min.js' type='text/javascript' ></script>
<script src='js/poker.js' type='text/javascript' ></script>
</head>
<body>

<div id='top'>
	<a href='/poker/poker.php'>
	<div id="logo"><span class="logo-big">jPOKER</span><br><span class="logo-sub">A poker server</span></div></a>
	<nav><ul id="main-menu">
		<li class="current">home</li>
		<li>deals</li>
		<li>jPoker</li>
		<?php
			include_once 'class.user.php';
			if(!checksession()) {
				echo "<li>login</li>";
			} else {
				echo "<li>logout</li>";
			}
		?>
	</ul></nav>
</div>

<div id="mainbox">

	<div id="sidebar">
		<h3 class="label-green">Top players</h3>
		<ul>
			<li>player 1</li>
			<li>player 2</li>
		</ul>
	</div>

<?php
	if(!checksession()){
	?>
		<script type='text/javascript' >
			$('document').ready(function(){
				$('ul#main-menu li').eq(3).trigger('click');
				$('ul#main-menu li').click(function(){
					$('ul#main-menu li').eq(3).trigger('click'); // Redirect back to login page if not logged in
				})
			});
		</script>

		<div class='maincontent'>login to continue</div>
		<div class='maincontent'>login to continue</div>
		<div class='maincontent'>login to continue</div>
		<div class='maincontent'>
			<div id="content">
				<?php
					if(isset($_GET['user']))
						echo "<h1 class='label-green'>Welcome ".$_GET['user'].". Now login to continue</h1>";
					else
						echo "<h1 class='label-green'>Join or login</h1>";
				?>
				<article class='form' style='position:relative; top:-60px;'>
					<h2 class="label-red" style='margin-left:5px;'>login</h2>
					<form action="login.php" method="post">
						<input type="text" name="uname" placeholder="Username"/><br />
						<input type="password" name="password" placeholder="Password"/><br />
						<p><input type="submit" value="login" /></p>
					</form>
				</article>
				<article class='form'>
					<h2 class="label-red" style='margin-left:5px;'>Join</h2>
					<form action="join.php" method="post">
						<input type="text" name="uid" placeholder="User Id"/><br />
						<input type="text" name="uname" placeholder="Username"/><br />
						<input type="password" name="password" placeholder="Password"/><br />
						<input type="password" name="password" placeholder="Password again"/><br />
						<p><input type="submit" value="join" /></p>
					</form>
				</article>
			</div>
		</div>

		<?php
	}
	else {
		$u = new user($_SESSION['uid']);
		?>
		<div class='maincontent' style='display:block'>
			<div id="content">
				<h1 class="label-green">Welcome <?php echo $_SESSION['name']; ?> </h1>
				You have <?php echo $_SESSION['points']; ?> points and <?php echo $_SESSION['bal']; ?>$ left with you.
			</div>
		</div>

		<div class='maincontent'>
			<div id="content">
				<h1 class="label-green">Select a deal</h1>
				You have <?php echo $_SESSION['points']; ?> points and <?php echo $_SESSION['bal']; ?>$ left with you.
			</div>
		
			<div class="deal">
				Buy 1000 points for 100 $ <span class='buyButton'>Buy</span>
			</div>
		
		</div>

		<div class='maincontent'>
			<div id="content">
				<h1 class="label-green">This is a free software</h1>
				Love FOSS &#9829;. Get this code at <a href='https://github.com/jaseemabid/jPoker/'>github</a>.
			</div>
		</div>

		<div class='maincontent'>
			<div id="content">
				<h1 class="label-green">logout and leave the game ?</h1>
				Click <a href='logout.php'>here</a> to confirm
			</div>
		</div>

		<?php
	}
?>


	</div>

</div>

<footer>
	&nbsp;&nbsp;&nbsp;"I love FOSS &#9829;". This is free software and souce can be obtained <a href='https://github.com/jaseemabid/jPoker/'>here</a>
</footer>


</body>
</html>
