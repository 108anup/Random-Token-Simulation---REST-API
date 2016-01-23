<?php

	$maps_api="https://maps.googleapis.com/maps/api/";
	$places_api="place/autocomplete/output?";
	$parameters="";

	$google_api_key="AIzaSyDmlFYh1-p2yeycfknEZmHyRsr0C4V--Yo";



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
	<form action="#">
		<input type="text" name="location"></input>
		<input type="submit"></input>
	</form>


<br>

<ul class="">
  <li role="option" class="active"><a href="#">Home</a></li>
  <li role="option"><a href="#">Profile</a></li>
  <li role="option"><a href="#">Messages</a></li>
</ul>

<?php 
	if(isset($_GET['location'])){
		$data = file_get_contents("http://maps.googleapis.com/maps/api/geocode/json?address=".$_GET['location']);
		$data_array = json_decode($data);
	}



?>
	
	
</body>
</html>