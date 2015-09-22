<!DOCTYPE html>

<?php 
	ini_set('display_errors',1);  
	error_reporting(E_ALL);

	if(isset($_GET['sida']))
		$sida=$_GET['sida'];
?>


<html>
<head>
	<meta charset="utf-8">
	<title>Några fler exempel på PHP</title>
	<style>
		body{margin: 0; font-family: sans-serif;}
		nav{ padding:10px; background: #333;} 
		nav a{ padding: 5px; display: inline-block; 
			color: white; text-decoration: none;
			margin-right:5px; border-radius: 2px; 
		}
		nav a:hover{ background: #444;}
		section h2{margin-top: 0;}
		section{border-top: 3px solid #cc0000;padding: 20px;}
		.active{ text-decoration: underline;}
	</style>
</head>
<body>
	<nav>
		<a href="?sida=ex11.php" 
		<?php 
			if(isset($sida) && $sida=="ex11.php")
				echo "class=\"active\""; ?> >
		Exempel 11</a>

		<a href="?sida=ex12.php" 
		<?php 
			if(isset($sida) && $sida=="ex12.php")
				echo "class=\"active\""; ?> >
		Exempel 12 </a>
		<a href="?sida=ex13.php" 
		<?php 
			if(isset($sida) && $sida=="ex13.php")
				echo "class=\"active\""; ?> >
		Exempel 13 </a>
		<a href="?sida=ex14.php" 
		<?php 
			if(isset($sida) && $sida=="ex14.php")
				echo "class=\"active\""; ?> >
		Exempel 14 </a>
		<a href="?sida=ex15.php" 
		<?php 
			if(isset($sida) && $sida=="ex15.php")
				echo "class=\"active\""; ?> >
		Exempel 15 </a>
	</nav>

	<section>
		<h2>Demo:</h2>
		<?php 
			if(isset($sida))
				include $sida;			 
		?>
	</section>

	<section>
		<h2>Kod till demon ovan:</h2>
		<?php 
			if(isset($sida))
				show_source($sida);				 
		?>

	</section>
	
</body>
</html>
