<?php 
	try
	{
		$bd = new PDO('mysql:host=localhost;dbname=biocentre;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}
	$reponse = $bd->query('SELECT * FROM users WHERE mail="'.$_POST['mail'].'"');
	while ($data = $reponse->fetch())
	{
		$login = $data['firstname']." ".$data['lastname'];
		$team = $data['team'];
	}

	include("header.php");
	$week = date("W");
	if($team == 1 && $week%2 == 0){
		$work = true;
	}
	elseif($team == 2 && $week%2 == 1){
		$work = true;
	}
	else{
		$work = false;
	}

	if($work===true){
		include("work.php");
	}
	else{
		include("dontWork.php");
	}

$reponse->closeCursor();
?>