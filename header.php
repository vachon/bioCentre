
<!DOCTYPE html>
<html>
<head>
	<title>bioCentre</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<header>
	<h1>bioCentre</h1>
	<?php 
	if(isset($_SESSION['login'])){
		?>
		<h2>Login : <?php echo $_SESSION['login'];?></h2>
		<?php
	}
	?>
</header>