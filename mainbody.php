<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.css">
	<script source="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<meta charset="UTF-8">

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'>

	<title>Random Token Simulation - REST API</title>
</head>
<body>
	<div class="jumbotron text-center">
			<h1 class="title">Random Token Simulation</h1>
			<h3 class="subtitle">An API</h3>
		</div>
		
		<div class="usage">
			<img class="illus col-sm-offset-8" src="res/coin.png" alt="Dice" class="text-center" width="300px" height="200px">
			<h2 class="text-center">Simulate A Coin</h2>

				<div class="row">
					<div class="col-sm-8 col-sm-offset-2"><h3>Toss 'n' Coins (<var>num_coin</var>)</h3></div>
				</div>

				<div class="row">
					<pre class="col-sm-offset-2 col-sm-8">index.php?num_coin=10</pre>
				</div>

				<div class="row">
					<div class="col-sm-offset-2 extras">
						By Default the coin is unbiased and there is 50% chance that a Head will occur.
					</div>
				</div>

				<br>
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2"><h3 class="response">Response:</h3></div>
				</div>

				<div class="row">
					<pre class="col-sm-offset-2 col-sm-8">{
	"Coin #1":"T",
	"Coin #2":"H",
	"Coin #3":"T",
	"Coin #4":"H",
	"Coin #5":"T",
	"Coin #6":"T",
	"Coin #7":"H",
	"Coin #8":"T",
	"Coin #9":"T",
	"Coin #10":"T"
}</pre>
				</div>

				<br>
				<br>
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2"><h3>Bias That Coin (<var>bias_percent, bias_winner</var>)</h3></div>
				</div>

				<div class="row">
					<pre class="col-sm-offset-2 col-sm-8">index.php?num_coin=10&bias_percent=80&bias_winner=H</pre>
				</div>

				<div class="row">
					<div class="col-sm-offset-2 extras">
						For every toss there is 80% chance that a Head will occur, this does not ensure that in 100 trials exactly 80 Heads will occur.
					</div>
				</div>

				<br>
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2"><h3 class="response">Response:</h3></div>
				</div>
				<div class="row">
					<pre class="col-sm-offset-2 col-sm-8">{
	"Coin #1":"H",
	"Coin #2":"T",
	"Coin #3":"H",
	"Coin #4":"H",
	"Coin #5":"H",
	"Coin #6":"T",
	"Coin #7":"H",
	"Coin #8":"T",
	"Coin #9":"H",
	"Coin #10":"H"
}</pre>
				</div>	

		<br><br><br>
			</div>
		
		<img class="illus col-sm-offset-8" src="res/rollthedice.png" alt="Dice" class="text-center" width="200px" height="200px">
		<h2 class="text-center">Simulate A Dice</h2>

				<div class="row">
					<div class="col-sm-8 col-sm-offset-2"><h3>Roll 'n' Die (<var>num_dice</var>)</h3></div>
				</div>

				<div class="row">
					<pre class="col-sm-offset-2 col-sm-8">index.php?num_dice=10</pre>
				</div>

				<div class="row">
					<div class="col-sm-offset-2 extras">
						By Default The dice will have 6 faces.
					</div>
				</div>

				<br>
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2"><h3 class="response">Response:</h3></div>
				</div>

				<div class="row">
					<pre class="col-sm-offset-2 col-sm-8">{
	"Dice #1":3,
	"Dice #2":5,
	"Dice #3":1,
	"Dice #4":1,
	"Dice #5":4,
	"Dice #6":1,
	"Dice #7":3,
	"Dice #8":1,
	"Dice #9":6,
	"Dice #10":2
}</pre>
				</div>

				<br>
				<br>
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2"><h3>Change <var>num_faces</var></h3></div>
				</div>

				<div class="row">
					<pre class="col-sm-offset-2 col-sm-8">index.php?num_coin=10&num_faces=4</pre>
				</div>

				<div class="row">
					<div class="col-sm-offset-2 extras">
						For 4 faces, A Tetrahedral Dice would be assumed.
					</div>
				</div>

				<br>
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2"><h3 class="response">Response:</h3></div>
				</div>
				<div class="row">
					<pre class="col-sm-offset-2 col-sm-8">{
	"Dice #1":4,
	"Dice #2":2,
	"Dice #3":2,
	"Dice #4":1,
	"Dice #5":3,
	"Dice #6":4,
	"Dice #7":4,
	"Dice #8":1,
	"Dice #9":4,
	"Dice #10":2
}</pre>
				</div>
		</div>

	<footer class="text-center footer">
		<div class="col-sm-offset-4 col-sm-4">
			<a href="http://facebook.com/108anup"><i class="fa fa-2x fa-facebook"></i></a>&ensp;&ensp;&ensp;
			<a href="https://plus.google.com/+108anup/"><i class="fa fa-2x fa-google-plus"></i></a>&ensp;&ensp;&ensp;
			<a href="http://twitter.com/108anup"><i class="fa fa-2x fa-twitter"></i></a>&ensp;&ensp;&ensp;
			<a href="http://github.com/108anup"><i class="fa fa-2x fa-git"></i></a>
		</div>

		<div class="col-sm-offset-1 col-sm-10 text-center extras">
			<hr>
			Made By Anup Agarwal - (Last Update Jan 24, 2016)
		</div>
	</footer>
	<br><br><br>

</body>
</html>