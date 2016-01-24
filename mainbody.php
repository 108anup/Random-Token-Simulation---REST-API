<div class="jumbotron text-center">
		<h1 class="title">Random Token Simulation</h1>
		<h3 class="subtitle">An API</h3>
	</div>
	
	<div class="usage">
		<h2 class="text-center">Simulate A Coin</h2>
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2"><h3>Toss 'n' Coins (<var>num_coin</var>)</h3></div>
			</div>
			<div class="row">
				<pre class="col-sm-offset-2 col-sm-8">index.php?num_coin=100</pre>
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
					There is 80% chance on every toss that a Head will occur, this does not ensure that in 100 trials exactly 80 Heads will occur.
				</div>
			</div>
			<br>
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