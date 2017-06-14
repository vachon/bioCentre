<?php 
	include("header.php");

	try
	{
		$bd = new PDO('mysql:host=localhost;dbname=biocentre;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}
	$reponse = $bd->query('SELECT * FROM users WHERE login="'.$_POST['login'].'" AND password="'.$_POST['password'].'"');
	while ($data = $reponse->fetch())
	{
		echo  $data['login']; 
	}

$reponse->closeCursor();
?>