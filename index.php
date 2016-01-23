<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.css">
	<script source="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<meta charset="UTF-8">
	<title>REST API</title>
</head>
<body>
<?php

	if(isset($_GET['num_dice'])){
		for ($i=0; $i < $_GET['num_dice']; $i++) { 
			$data_array["Dice #".$i] = mt_rand(1,6);
		}
		echo json_encode($data_array);
	}

	else if(isset($_GET['num_coin']) && !isset($_GET['bias_percent']) && !isset($_GET['bias_winner'])){
		for ($i=0; $i < $_GET['num_coin']; $i++) { 
			if(mt_rand(1,2)==1)
				$data_array["Coin #".$i] = 'H';
			else
				$data_array["Coin #".$i] = 'T';
		}
		echo json_encode($data_array);
	}

	else if(isset($_GET['num_coin']) && isset($_GET['bias_percent']) && isset($_GET['bias_winner'])){
		
		if($_GET['bias_winner']==='H'){
			$loser='T';
		}
		else{
			$loser='H';
		}


		for ($i=0; $i < $_GET['num_coin']; $i++) { 
			if(mt_rand(1,100)<=$_GET['bias_percent'])
				$data_array["Coin #".$i] = $_GET['bias_winner'];
			else
				$data_array["Coin #".$i] = $loser;
		}
		echo json_encode($data_array);
	}
?>

	
	
	
</body>
</html>