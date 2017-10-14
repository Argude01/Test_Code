<?php
	include('connection.php');
	
	$selection = $_POST['id'];
	
	$jenuary = function(){ return Math.random(Math.random()*100) };
	$february = function(){ return Math.random(Math.random()*100) };
	$march = function(){ return Math.random(Math.random()*100) };
	
	$data = array(0 => round($jenuary,1),
				  1 => round($february,1),
				  2 => round($march,1)
				  );	

	echo json_encode($data);
?>