<!DOCTYPE HTML>
<html>
<head>
<link rel='stylesheet' href='css/poker.css'>
<link rel='shortcut icon' href='graphics/favicon.png'>
<title>jPoker v1.0</title>
</head>
<body>

<div id='top'>
	<div id="logo"><span class="logo-big">jPOKER</span><br><span class="logo-sub">A poker server</span></div>
	<nav><ul id="main-menu">
		<li class="current">home</li>
		<li>deals</li>
		<li>jPoker</li>
		<li>logout</li>
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

	<div class='maincontent' >
		<div id="content">
			<h1 class="label-green">Welcome {username}</h1>
			You have {points} points and {bal}$ left with you.
		</div>
	</div>

	<div class='maincontent' style='display:block'>
		<div id="content">
			<h1 class="label-green">Select a deal</h1>
			You have {points} points and {bal}$ left with you.
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
			<h1 class="label-green">Join or login</h1>

		</div>
	</div>

</div>

<footer>
	&nbsp;&nbsp;&nbsp;"I love FOSS &#9829;". This is free software and souce can be obtained <a href='https://github.com/jaseemabid/jPoker/'>here</a>
</footer>

<script src='js/jquery-1.6.2.min.js' type='text/javascript' ></script>
<script src='js/poker.js' type='text/javascript' ></script>
</body>
</html>
