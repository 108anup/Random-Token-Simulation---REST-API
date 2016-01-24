<?php
	$display = true;

	if(isset($_GET['num_dice'])){
		$num_faces=6;

		if(isset($_GET['num_faces']))
			$num_faces=$_GET['num_faces'];

		for ($i=0; $i < $_GET['num_dice']; $i++) { 
			$data_array["Dice #".($i+1)] = mt_rand(1,$num_faces);
		}
		$display=false;
		echo json_encode($data_array);
	}

	else if(isset($_GET['num_coin'])){
		$winner = 'H';
		$percent = 50;

		if(isset($_GET['bias_winner']))
			$winner=$_GET['bias_winner'];
		if(isset($_GET['bias_percent']))
			$percent = $_GET['bias_percent'];
		
		if($winner==='H'){
			$loser='T';
		}
		else{
			$loser='H';
		}

		for ($i=0; $i < $_GET['num_coin']; $i++) { 
			if(mt_rand(1,100)<=$percent)
				$data_array["Coin #".($i+1)] = $winner;
			else
				$data_array["Coin #".($i+1)] = $loser;
		}
		$display=false;
		echo json_encode($data_array);
	}

	if($display){
		include 'mainbody.php';
	}