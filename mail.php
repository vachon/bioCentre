<?php
/*include_once('PHPMailer/_lib/class.phpmailer.php');

define('GMailUSER', 'superkebab38@gmail.com'); // utilisateur Gmail
define('GMailPWD', 'votremotdepasse'); // Mot de passe Gmail

$result = smtpmailer('nicolas.vachon.97@gmail.com', 'superkebab38@gmail.com', 'panda', 'Votre Message', 'Le sujet de votre message');*/

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
     $subject = 'le sujet';
     $message = 'Bonjour !';
     $headers = 'From: superkebab38@gmail.com' . "\r\n" .
     'Reply-To: superkebab38@gmail.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $subject, $message, $headers);

	}

