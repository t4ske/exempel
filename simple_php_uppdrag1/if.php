<head><meta charset='utf-8'></head>

<h2>Med if-satser kan man jämföra saker</h2>

<p>Lagrar ålder och namn (sker osynligt)
<?php 
	$age = 43;
	$name = "Urbban"; 
?>

<p>Personen är myndig:
<strong>
<?php 
	if($age>17)
		echo "ja";
	else
		echo "nej";
?>
</strong>

<p>Personen heter Urban:
<strong>
<?php 
	if($name=="Urban")
		echo "ja";
	else
		echo "nej";
?>
</strong>

<div style="height:100px;"></div>

<!-- här under ligger koden upprepad - så att den syns på webbsidan -->

Koden ser ut så här:
<br/>
<textarea cols="100" rows="30" style="background:#f7f7f7;">
<head><meta charset='utf-8'></head>

<h2>Med if-satser kan man jämföra saker</h2>

<p>Lagrar ålder och namn (sker osynligt)
&lt;?php 
	$age = 43;
	$name = "Urbban"; 
?&gt;

<p>Personen är myndig:
<strong>
&lt;?php 
	if($age>17)
		echo "ja";
	else
		echo "nej";
?&gt;
</strong>

<p>Personen heter Urban:
<strong>
&lt;?php 
	if($name=="Urban")
		echo "ja";
	else
		echo "nej";
?&gt;
</strong>
</textarea>