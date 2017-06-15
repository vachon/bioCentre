<?php
	try
	{
		$bd = new PDO('mysql:host=localhost;dbname=biocentre;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}

	$equipe = date("W")%2+1;
	$reponse = $bd->query('SELECT mail FROM users WHERE team='.$equipe);
	while ($data = $reponse->fetch())
	{
		$mail = $data['mail'];
		echo $mail."\n";

    $to      = $data['mail'];
     $subject = 'nettoyage bioCentre';
     $message = 'Bonjour !'."\n".'c\'est toi qui trime cette semaine !'."\n"."Rappel : tous les mardis poubelles, vérifier plaques et vaisselles " ;
     $headers = 'From: biocentre.la.balme@gmail.com' . "\r\n" .
     'Reply-To: biocentre.la.balme.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $subject, $message, $headers);

	}

