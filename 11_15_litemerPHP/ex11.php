<h3>Ange vilka fyra som skall med på resan!</h3>
<form>
	<input type="hidden" value="ex11.php" name="sida">
	<?php
		for ($i=1; $i<=4 ; $i++) 
		{ 
			echo "Namn$i: <input type=\"text\" name='namn[]'><br>";
		}		
	?>
	<input type="submit">
</form>
<p>
<h3>Passagerarlista:</h3>
<?php
	if(isset($_GET['namn']))
	{
		$namn = $_GET['namn'];
		//var_dump($namn);
		//echo "<p>Det tredje namnet är: " .$namn[2] ;
		for ($i=0; $i<4 ; $i++) 
		{ 
			echo "{$namn[$i]} <br>";
		}
	}
?>
	
