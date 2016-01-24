<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.css">
	<script source="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/styles.css">
	<meta charset="UTF-8">

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'>
	
	<title>Random Token Simulation - REST API</title>
</head>
<body>
<?php
	$display = true;

	if(isset($_GET['num_dice'])){
		for ($i=0; $i < $_GET['num_dice']; $i++) { 
			$data_array["Dice #".($i+1)] = mt_rand(1,6);
		}
		$display=false;
		echo json_encode($data_array);
	}

	else if(isset($_GET['num_coin']) && !isset($_GET['bias_percent']) && !isset($_GET['bias_winner'])){
		for ($i=0; $i < $_GET['num_coin']; $i++) { 
			if(mt_rand(1,2)==2)
				$data_array["Coin #".($i+1)] = 'H';
			else
				$data_array["Coin #".($i+1)] = 'T';
		}
		$display=false;
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
				$data_array["Coin #".($i+1)] = $_GET['bias_winner'];
			else
				$data_array["Coin #".($i+1)] = $loser;
		}
		$display=false;
		echo json_encode($data_array);
	}

	if($display){
		include 'mainbody.php';
	}
?>

	
	
	
</body>
</html>